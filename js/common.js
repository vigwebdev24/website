$("#togglenav").click(function() {
    var mblnav = document.getElementsByClassName('navbar-collapse');

    mblnav[0].classList.toggle("in");
    var togglenav = document.getElementById('mblnav');

});
$(document).ready(function() {
    $(".dropdown").click(function() {
    
        $(this).find(".dropdown-menu").slideDown();
    });

    $(".dropdown-menu").on("mouseleave", function() {
        $(".dropdown-menu").slideUp("fast");

    });

    $(".ql").click(function() {
        $(".dropdown-content").css("display", "grid");
        $(this).find(".dropdown-content").slideDown();
    });


    $(".dropdown-content").on("mouseleave", function() {
        $(".dropdown-content").slideUp("fast");
    });
});


$(document).on("click", function(event) {

    $('.child-image').hide();
    $('.megamenu-options li').hover(
        function() {
            $(this).find('.child-image').fadeIn();
        },
        function() {
            $(this).find('.child-image').last().fadeOut();
        }
    );

});

function offcampus() {
    window.location.href = 'https://vignan.ac.in/hyd/';
}

$('#search').click(function() {
    $("#search-show").slideToggle();
    $('#search-show').css('display', 'flex');
    $('#search-show').css('flex-direction', 'column');
})

function abortterm(id) {
    if (id == 'errorlabel') {
        var term = document.getElementById('errorlabel');
        //term.style.display = 'none';
        // console.log(term.value);
        term.value = "";
    }

    if (id == 'searchterm') {
        $('#searchterm').val('');
        document.getElementById('resultList').innerHTML = '';
    }

    if (id == 'successlabel') {
        var term = document.getElementById('successlabel');
        //term.style.display = 'none';
        // console.log(term.value);
        term.value = "";
    }
}

function toggleDivContent() {
    var smallScreenDiv = document.querySelector("#mblftr");
    var largeScreenDiv = document.querySelector("#ftr");
    if (window.innerWidth <= 700) {
        largeScreenDiv.style.display = 'none';
        smallScreenDiv.style.display = 'block';
    } else {
        smallScreenDiv.style.display = 'none';
        largeScreenDiv.style.display = 'block';
    }
}

window.addEventListener("resize", toggleDivContent);
toggleDivContent();


function readmore(id){
    console.log(id);
    document.getElementById(id).style.display = "block";
}


