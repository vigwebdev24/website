<?php 
include('connect.php');

 ?>

 <div class="certificate_box">
       
        <div class="panel-group" style="width: 100%;" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="question1" data-toggle="collapse" data-parent="#accordion" href="#faq1"
                                    aria-expanded="true" aria-controls="faq1">
                                    Certificates
                                </a>
                            </h4>

                        </div>
                        <div id="faq1" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body1">
                                <ul style="list-style: none;">
                                <?php 
                        $sql1 = "SELECT * FROM certificatenames";
                        $result1 = $conn->query($sql1);
                        if ($result1->num_rows > 0) {
                            while ($row1 = $result1->fetch_assoc()) {
                                if (strpos($row1['id'], 'exam_sec6_certificate_') === 0) {
                                    echo "<li class='check'><input type='checkbox' class='custom-checkbox' id='wellness-checkbox'><div class='wellness-checkbox'>" . ($row1['certificates']) . "</div></li>";
                                }
                            }
                        }
                        ?>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="question1 collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                    Duplicate Certificates
                                </a>
                            </h4>

                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body1">
                            <ul style="list-style: none;">
                            <?php 
                        $sql1 = "SELECT * FROM certificatenames";
                        $result1 = $conn->query($sql1);
                        if ($result1->num_rows > 0) {
                            while ($row1 = $result1->fetch_assoc()) {
                                if (strpos($row1['id'], 'exam_sec6_certificate_') === 0 ) {
                                    if(($row1['duplicate_certificates'])!=null)
                                    echo "<li class='check'><input type='checkbox' class='custom-checkbox' id='wellness-checkbox'><div class='wellness-checkbox'>" . ($row1['duplicate_certificates']) . "</div></li>";
                                }
                            }
                        }
                        ?>                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>

    <!-- footer ends -->