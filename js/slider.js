var curIndex = 0,
    imgDuration = 3000,
    slider = document.getElementById("trendSlider")
    img01 = document.getElementsByClassName("img_01")
    img02 = document.getElementsByClassName("img_02")
    img03 = document.getElementsByClassName("img_03")
    slides = slider.childNodes; //get a hook on all child elements, this is live so anything we add will get listed
    imgArray = [
        img01,img02,img03
    ];

function slideShow() {
    
    function fadeIn(e) {
        e.className = "fadeIn";
    };

    function fadeOut(e) {
        e.className = "";
    };

    fadeOut(slides[curIndex]);
    curIndex++;
    if(curIndex === slides.length) {
        curIndex = 0;
    }
        
    fadeIn(slides[curIndex]);

    setTimeout(function () {
        slideShow();
    }, imgDuration);
}
slideShow();