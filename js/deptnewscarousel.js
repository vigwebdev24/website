const photosparent = document.querySelector('.photos2');

$(document).ready(function() {
    updateProgressBar();

});
// Add your JavaScript here
let Index = 0;

let intervalFlag = true;
const content = document.querySelectorAll('.content');
const progressBar = document.getElementById('progressBar');
let PrevIndex = content.length - 1;
img = document.querySelectorAll('.photos2 img');
var time = 12000;
var setIntervalId;






function next() {
    content[Index].classList.add('active-slide');
    setTimeout(() => {
        if (Index > 0) {
            content[Index - 1].style.display = 'none';
        } else {
            content[content.length - 1].style.display = 'none';
        }
    }, 1000);


    Index = (Index + 1) % content.length;

    setTimeout(() => {
        content[Index].style.display = 'flex';
    }, 1000);



    progressBar.classList.remove("prg-active");
    setInterval(updateProgressBar, 100);


    slideImagestest();


    // Add active class to the next content
    document.querySelectorAll('.content').forEach((curcontent, index) => {
        if (index === Index) {
            setTimeout(() => {
                if (Index > 0) {
                    content[Index - 1].classList.remove('active-slide');
                } else {
                    content[content.length - 1].classList.remove('active-slide');
                }
                //  content[Index-1].classList.remove('active-slide');
            }, 2100);

            curcontent.classList.add('show-slide');



        } else {
            setTimeout(() => {
                if (Index > 0) {
                    content[Index - 1].classList.remove('active-slide');
                } else {
                    content[content.length - 1].classList.remove('active-slide');
                }
                //  content[Index-1].classList.remove('active-slide');
            }, 2100);
            curcontent.classList.remove('show-slide');

        }


    });
}

function updateProgressBar() {
    progressBar.classList.add("prg-active");

}

function slideImagestest() {
    const imageWidth = document.querySelector('.photos2 img').clientWidth;

    if (Index == 0) {
        const offset = -Index * 260;
        photosparent.style.opacity = `0.3`;
        photosparent.style.transition = `opacity 0.1s`;
        // photosparent.style.transitionDelay = "2s";
        if (window.innerWidth <= 800) {
            photosparent.style.opacity = `1`;
            photosparent.style.transform = `translateX(0%)`;
        } else {

            setTimeout(() => {
                photosparent.style.opacity = `1`;
                photosparent.style.transition = `opacity 2s`;

                photosparent.style.transform = `translateX(${offset}px)`;

            }, 10);
        }


    } else {
        const offset = -Index * 260;
        // var left= 120+(Index*33.5);
        //photosparent.style.left = `${left}%`;
        photosparent.style.opacity = `1`;
        if (window.innerWidth <= 800) {
            const mbloffset = -Index * 33;
            photosparent.style.transform = `translateX(0%)`;


        } else {
            photosparent.style.transform = `translateX(${offset}px)`;
        }


        photosparent.style.transition = `transform 2s`;
    }




    // Remove active class from all images
    const allImages = document.querySelectorAll('.photos2 img');
    allImages.forEach(image => image.classList.remove('activeimg'));
    // Add active class to the current slide
    const Image = allImages[1];
    Image.classList.add('activeimg');
    if (window.innerWidth <= 800) {

        const activeImage = photosparent.children[0].cloneNode(true);


        photosparent.appendChild(activeImage);
        const imageToRemove = photosparent.children[0];
        photosparent.removeChild(imageToRemove);
      //  var left = 120 + (Index * 5);
        var mblleft = 100 + (Index * 2);



        photosparent.style.left = `0px`;

    } else {
        setTimeout(() => {
            const activeImage = photosparent.children[0].cloneNode(true);


            photosparent.appendChild(activeImage);
            const imageToRemove = photosparent.children[0];
            photosparent.removeChild(imageToRemove);
             var left = (1* Index) + (Index *32);
            var mblleft = 100 + (Index * 2);


           photosparent.style.left = `${left}%`;


        }, 2300);

    }



}


function slideprevImages() {

    const imageWidth = document.querySelector('.photos img').clientWidth;
    if (Index == 0) {
        const offset = -Index * 150;
        photosparent.style.opacity = `0`;
        photosparent.style.transition = `opacity 0.1s`;
        // photosparent.style.transitionDelay = "2s";
        setTimeout(() => {
            photosparent.style.opacity = `1`;
            photosparent.style.transition = `opacity 2s`;
            photosparent.style.transform = `translateX(${offset}px)`;
        }, 20);

    } else {
        const offset = Index * 260;
        var left = 120 - (Index * 10);
        if (window.innerWidth <= 800) {
            photosparent.style.left = `0%`;
            photosparent.style.transform = `translateX(0px)`;

        } else {
            photosparent.style.left = `${left}%`;
            photosparent.style.opacity = `1`;
            photosparent.style.transform = `translateX(${offset}px)`;
            photosparent.style.transition = `transform 2s`;

        }

    }

    const allImages = document.querySelectorAll('.photos img');

    // Remove active class from all images
    allImages.forEach(image => image.classList.remove('activeimg'));

    // Add active class to the current slide
    const Image = allImages[PrevIndex];

    Image.classList.add('activeimg');
    var firstChild = photosparent.children[0];
    const activeImage = photosparent.children[PrevIndex].cloneNode(true);

    const imageToRemove = photosparent.children[PrevIndex];
    photosparent.removeChild(imageToRemove);
    photosparent.insertBefore(activeImage, firstChild);
    // const offset =Index*25;
    // var left= 130-(Index*2);

    // photosparent.style.left = `${left}%`;
    //  photosparent.style.transform = `translateX(${offset}px)`;
    //  photosparent.style.transition = `transform 2s`;


}

function restart() {
    setIntervalId = setInterval(next, 12000);

}
// start();
setIntervalId = setInterval(next, 12000);

//setInterval(next, 16000);


$('.nextnew').click(function() {
    clearInterval(setIntervalId);
    setIntervalId = undefined;

    //start();
    setInterval(next(), 12000);
    //setInterval(next(), 16000);
    restart();


});



$('.prevnew').click(function() {

    content[Index].style.display = 'none';
    Index = (Index - 1 + content.length) % content.length;
    content[Index].style.display = 'block';

    progressBar.classList.remove("prg-active");
    setInterval(updateProgressBar, 100);

    slideprevImages();

    // Add active class to the next content
    document.querySelectorAll('.content').forEach((content, index) => {
        if (index === Index) {
            content.classList.add('active-slide');
            content.classList.add('show-slide');
        } else {
            content.classList.remove('active-slide');

        }
    });
})
//New news carousel ends