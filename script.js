
   window.onload = function () {

    function changeImage() {   
        var BackgroundImg=["./images/emanuel-ekstrom-3-4eMmRBXjA-unsplash.jpg",
        "./images/louis-hansel-sQDTlaADDGM-unsplash.jpg",
        "./images/mads-eneqvist-zqiE16q_Ju0-unsplash.jpg"
        ];
        var i = Math.floor((Math.random() * 3));
        document.getElementById('title').style.backgroundImage = 'url("' + BackgroundImg[i] + '")';
    }
    window.setInterval(changeImage, 5000);
}

function sub() {
    document.getElementById('inp').stepDown(1);
}

function add() {
    document.getElementById('inp').stepUp(1);

}

$(".zm-box")
  // tile mouse actions
  .on("mouseover", function() {
    $(this)
      .children(".pd-img")
      .css({ transform: "scale(" + $(this).attr("data-scale") + ")" });
  })
  .on("mouseout", function() {
    $(this)
      .children(".pd-img")
      .css({ transform: "scale(1)" });
  })
  .on("mousemove", function(e) {
    $(this)
      .children(".pd-img")
      .css({
        "transform-origin":
          ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
          "% " +
          ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
          "%"
      });
  });