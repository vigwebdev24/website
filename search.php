<?php
    function similarity($str1, $str2) {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $matrix = array();
        for ($i = 0; $i <= $len1; $i++) {
            $matrix[$i][0] = $i;
        }
        for ($j = 0; $j <= $len2; $j++) {
            $matrix[0][$j] = $j;
        }
        for ($i = 1; $i <= $len1; $i++) {
            for ($j = 1; $j <= $len2; $j++) {
                $cost = ($str1[$i - 1] == $str2[$j - 1]) ? 0 : 1;
                $matrix[$i][$j] = min($matrix[$i - 1][$j] + 1, $matrix[$i][$j - 1] + 1, $matrix[$i - 1][$j - 1] + $cost);
            }
        }
        $levenshteinDistance = $matrix[$len1][$len2];
        $similarity = 1 - ($levenshteinDistance / max($len1, $len2));
        return $similarity;
    }
    function isAcronym($searchTerm,$isShortName) {
        global $conn;
        $colName = $isShortName?"dept_short_name": "dept_name";
        $sql = "SELECT *
                FROM department
                WHERE $colName LIKE '%$searchTerm%'";
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }
    function filterAcronym($acronym){
        $desiredColumns = ['id', 'dept_name', 'dept_short_name', 'schl_id'];
        $filteredAcronym = array_intersect_key($acronym, array_flip($desiredColumns));

        if (isset($filteredAcronym['dept_name'])) {
            $filteredAcronym['page_title'] = $filteredAcronym['dept_name'];
            unset($filteredAcronym['dept_name']);
        }

        if (isset($filteredAcronym['id'], $filteredAcronym['schl_id'], $filteredAcronym['dept_short_name'], $filteredAcronym['page_title'])) {
            $filteredAcronym['page_url'] = sprintf(
                'https://vignan.ac.in/vignantest/departments/depthome.php?deptid=%s&school=%s&deptnm=%s',
                urlencode($filteredAcronym['id']),
                urlencode($filteredAcronym['schl_id']),
                urlencode($filteredAcronym['dept_short_name'])
            );
        }
        return $filteredAcronym;
    }
?>

<?php
header('Content-Type: application/json');
error_reporting(0);
ini_set('display_errors', '0');
include_once 'connect.php';

$searchTerm = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';
$sql = "SELECT distinct page_title, query_search, page_url
        FROM search_queries
        WHERE query_search LIKE '%$searchTerm%'
      
        ORDER BY page_title";
 // GROUP BY page_title
$result = $conn->query($sql);

if (!$result) {
    echo json_encode(['error' => 'SQL error: ' . $conn->error]);
    $conn->close();
    exit();
}

$pages = [];
/* direct searching with search_index. */
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pages[] = array_merge($row, ['match_count' => 0]);
    }
} else {
    /* Checking if entered query is an acronym or full name of department. For example: CSE: computer science */
    $acronyms = isAcronym($searchTerm,true);  /* cheking for dept_short_name */
    if(!$acronyms) $acronyms = isAcronym($searchTerm,false); /* cheking for department full name */
    if ($acronyms) {
        foreach($acronyms as $acronym){
            $pages[] = filterAcronym($acronym);
        }
    }else{
        $sql = "SELECT query_search, page_url, page_title
                FROM search_queries";
        $result = $conn->query($sql);
        if (!$result) {
            echo json_encode(['error' => 'SQL error: ' . $conn->error]);
            $conn->close();
            exit();
        }
        $tempPages = [];
        while ($row = $result->fetch_assoc()) {
            $matchLength = strlen($searchTerm);
            $querySearch = $row['query_search'];
            $matchCount = similarity($querySearch,$searchTerm);
            if ($matchCount >= 0.4) {
                $tempPages[] = ['match_count' => $matchCount, 'data' => $row];
            }
        }
        usort($tempPages, function($a, $b) {
            return $b['match_count'] - $a['match_count'];
        });
        
        $pages = array_map(function($page) {
            return array_merge($page['data'], ['match_count' => $page['match_count']]);
        }, $tempPages);
        $pages = array_slice($pages, 0, 10); 
    }
}
/* Add Code to make $pages array unique. */
echo json_encode($pages);
$conn->close();
?>