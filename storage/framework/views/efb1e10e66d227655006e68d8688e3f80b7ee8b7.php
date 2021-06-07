<?php $__env->startSection('css'); ?>


<style>
/* ------------------------------------*
       BEST VIEWED FULL-SCREEN:
   https://codepen.io/sdras/full/waXKPw/
*--------------------------------------*/

body {
  font-family: 'Oswald', sans-serif;
  color: white;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  background: #91CAC7;
}

h2 {
  font-weight: normal;
  width: 90%;
  margin-left: 5%;
  text-align: center;
}

svg {
  transition: all 0.5s ease;
}

.size {
  position: absolute;
  right: 0;
  top: 20px;
  width: 70px;
  height: 115px;
  letter-spacing: 0.02em;
  opacity: 0.65;
  font-size: 15px;
  padding: 20px;
  border-radius: 10px 0 0 10px;
  background: #4E3440;
}

.container {
  width: 900px;
  margin: 10px auto;
}

.first {
  height: auto;
  z-index: 30;
}

.second {
  z-index: 50;
  height: auto;
}

.third {
  height: auto;
  z-index: 1;
}

#button,
#handle1,
#handle2 {
  cursor: pointer;
  position: relative;
  z-index: 5000;
}

#smoke circle,
#smoke path,
#paint,
#panda,
#panda2,
#panda3 {
  visibility: hidden;
}

@media  screen and (max-width: 730px) {
  .container {
    width: 100% !important;
  }
  .sm-foot {
    display: none;
  }
  svg {
    position: relative;
  }
  .size {
    display: none;
  }
  .first {
    width: 100%;
  }
  .second {
    width: 70%;
    top: -90px;
    margin-left: 70px;
    transform: scaleX(-1) !important;
  }
  .third {
    width: 60%;
    margin-left: 70px;
    top: -135px;
  }
}

@media  screen and (min-width: 731px) {
  .foot {
    display: none;
  }
  svg {
    position: absolute;
  }
  .first {
    width: 550px;
  }
  .second {
    width: 350px;
    margin-left: 365px;
    top: 370px !important;
  }
  .third {
    width: 330px;
    top: 514px !important;
  }
}

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
//variable declaration for the global repeated animations
var gear = $("#gear1, #gear2, #gear3"),
  wind = $("#windmill"),
  needle1 = $("#needle3, #needle4"),
  needle2 = $("#needle2"),
  needle3 = $("#needle1, #needle5"),
  panelSq = $("#panel path"),
  light = $("#light"),
  graph = $("#graphline"),
  smoke = $("#smoke circle, #smoke path"),
  aim = $("#aim1, #aim2, #aim3");

TweenMax.set(smoke, {
  visibility: "visible"
});
TweenMax.set(graph, {
  drawSVG: "0 0"
});

//animation that's repeated for all of the sections
function revolve() {
  var tl = new TimelineMax();

  tl.add("begin");
  tl.to(gear, 4, {
      transformOrigin: "50% 50%",
      rotation: 360,
      repeat: -1,
      ease: Linear.easeNone
    }, "begin")
    .to(wind, 2, {
      transformOrigin: "50% 50%",
      rotation: 360,
      repeat: -1,
      ease: Linear.easeNone
    }, "begin")
    .to(needle1, 2, {
      transformOrigin: "50% 80%",
      rotation: -30,
      repeat: -1,
      yoyo: true,
      ease: Elastic.easeOut
    }, "begin")
    .to(needle2, 1, {
      transformOrigin: "50% 75%",
      rotation: -40,
      repeat: -1,
      yoyo: true,
      ease: Back.easeOut
    }, "begin")
    .to(needle3, 5, {
      transformOrigin: "50% 50%",
      rotation: 150,
      repeat: -1,
      yoyo: true,
      ease: Back.easeOut
    }, "begin")
    .staggerTo(panelSq, 1, {
      opacity: 0.4,
      repeat: -1,
      yoyo: true,
      ease: Back.easeOut
    }, 0.2, "begin")
    .staggerFromTo(smoke, 1, {
      scale: 0
    }, {
      scale: 1
    }, 0.1, "begin")
    .staggerFromTo(smoke, 1, {
      opacity: 0.6,
      y: 40
    }, {
      opacity: 0,
      y: -50,
      repeat: -1,
      repeatDelay: -2,
      ease: Circ.easeOut
    }, 0.1, "begin")
    .fromTo(aim, 2, {
      opacity: 0.6,
      scale: 0,
      transformOrigin: "50% 50%"
    }, {
      scale: 2,
      opacity: 0,
      repeat: -1,
      transformOrigin: "50% 50%",
      ease: Expo.easeOut
    }, "begin")
    .to(graph, 4, {
      drawSVG: "100% 120%",
      opacity: 0.3,
      repeat: -1,
      ease: Expo.easeInOut
    }, "begin")
    .to(light, 2, {
      fill: "#ffffff",
      repeat: -1,
      yoyo: true,
      ease: Elastic.easeInOut
    }, "begin");

  return tl;
}

var repeat = new TimelineMax();
repeat.add(revolve());

//variable declaration for the painted panda
var panda1 = $("#panda"),
  colorParts = $("#features path, #limbs path"),
  panda2 = $("#panda2"),
  lh = $("#l-hand"),
  rh = $("#r-hand"),
  tubeHeart = $("#tubeheart"),
  paint = $("#paint circle, #paint path"),
  aim2O = $(".aim2-off");

TweenMax.set([panda, panda2], {
  visibility: "visible"
});
TweenMax.set(panda, {
  x: -70
});
TweenMax.set(panda2, {
  y: 70,
  scale: 0.78
});
TweenMax.set(tubeheart, {
  x: 15,
  scale: 0
});
TweenMax.set(colorParts, {
  fill: "white"
});
TweenMax.set(paint, {
  visibility: "visible",
  x: 80,
  scale: 0
});

function paintPanda() {
  var tl = new TimelineMax();

  tl.add("paintIt");
  tl.to(aim2O, 0.25, {
    opacity: 0
  }, "paintIt");
  tl.to(panda, 2, {
    x: 0,
    ease: Circ.easeOut
  }, "paintIt");
  tl.staggerFromTo(paint, 0.5, {
    scale: 0,
    opacity: 0,
    x: 40
  }, {
    scale: 1,
    opacity: 1,
    x: -40,
    repeat: 4,
    ease: Circ.easeOut
  }, 0.1, "paintIt+=2");
  tl.to(lh, 1, {
    scaleY: 1.2,
    rotation: -5,
    transformOrigin: "50% 0",
    ease: Circ.easeOut
  }, "paintIt+=1");
  tl.to(rh, 1, {
    scaleY: 1.2,
    rotation: 5,
    transformOrigin: "50% 0",
    ease: Circ.easeOut
  }, "paintIt+=1");
  tl.to(lh, 0.5, {
    scaleY: 1,
    transformOrigin: "50% 0",
    ease: Circ.easeOut
  }, "paintIt+=2");
  tl.to(rh, 0.5, {
    scaleY: 1,
    transformOrigin: "50% 0",
    ease: Circ.easeOut
  }, "paintIt+=2");
  tl.to(panda, 0.5, {
    y: -5,
    ease: Circ.easeOut
  }, "paintIt+=2");
  tl.to(lh, 0.5, {
    scaleY: 1.2,
    transformOrigin: "50% 0",
    ease: Circ.easeOut
  }, "paintIt+=3.5");
  tl.to(rh, 0.5, {
    scaleY: 1.2,
    transformOrigin: "50% 0",
    ease: Circ.easeOut
  }, "paintIt+=3.5");
  tl.to(panda, 0.5, {
    y: 0,
    ease: Circ.easeOut
  }, "paintIt+=3.5");
  tl.to(rh, 1, {
    scaleY: 1,
    rotation: 0,
    transformOrigin: "50% 0",
    ease: Circ.easeIn
  }, "paintIt+=4");
  tl.to(lh, 1, {
    scaleY: 1,
    rotation: 0,
    transformOrigin: "50% 0",
    ease: Circ.easeIn
  }, "paintIt+=4");
  tl.staggerTo(paint, 0.5, {
    opacity: 0,
    ease: Circ.easeIn
  }, 0.1, "paintIt+=3.5");
  tl.to(paint, 0.5, {
    x: 40,
    opacity: 0
  }, "paintIt+=6");
  tl.to(panda, 2, {
    x: -70,
    ease: Circ.easeIn
  }, "paintIt+=4.5");
  tl.fromTo(colorParts, 3, {
    fill: "#fff"
  }, {
    fill: "#000",
    ease: Expo.easeOut
  }, "paintIt+=3");
  tl.to(aim2O, 0.25, {
    opacity: 1
  }, "paintIt+=5");

  return tl;
}

//create a timeline but initially pause it so that we can control it via click
var triggerPaint = new TimelineMax({
  paused: true
});
triggerPaint.add(paintPanda());

//this button kicks off the panda painting timeline
$("#button").on("click", function(e) {
  e.preventDefault();
  triggerPaint.restart();
});

//variable declaration for the painted panda
var handle2 = $("#handle2"),
  hgrow = $(".g-hearts path"),
  aim3O = $(".aim3-off");

function heartPanda() {
  var tl = new TimelineMax();

  tl.add("hearts");
  tl.to(aim3O, 0.25, {
    opacity: 0
  }, "hearts");
  tl.to(handle2, 1, {
    rotation: -60,
    transformOrigin: "0 50%",
    ease: Expo.easeOut
  }, "hearts");
  tl.fromTo(panda2, 2, {
    y: 70,
    scale: 0.78
  }, {
    scale: 1,
    y: 0,
    ease: Circ.easeOut
  }, "hearts");
  tl.fromTo(tubeheart, 2, {
    x: 30,
    scale: 0,
    opacity: 1
  }, {
    scale: 7,
    x: -20,
    opacity: 0,
    transformOrigin: "100% 50%",
    ease: Circ.easeOut
  }, "hearts+=2");
  tl.staggerFromTo(hgrow, 2, {
    scale: 0,
    opacity: 1
  }, {
    scale: 12,
    opacity: 0,
    transformOrigin: "50% 50%",
    ease: Circ.easeOut
  }, 0.7, "hearts+=2.4");
  tl.to(panda2, 2, {
    y: 70,
    scale: 0.78,
    ease: Circ.easeIn
  }, "hearts+=5");
  tl.to(handle2, 1, {
    rotation: 0,
    transformOrigin: "0 50%",
    ease: Expo.easeIn
  }, "hearts+=6");
  tl.to(aim3O, 0.25, {
    opacity: 1
  }, "hearts+=7");

  return tl;
}

//create a timeline but initially pause it so that we can control it via click
var triggerHeart = new TimelineMax({
  paused: true
});
triggerHeart.add(heartPanda());

//this toggle kicks off the panda hearts timeline
handle2.on("click", function(e) {
  e.preventDefault();
  triggerHeart.restart();
});

//third one
//variable declaration for the laser panda
var handle1 = $("#handle1"),
  chip = $("#chip"),
  lasers = $("#lasers line"),
  aim1O = $(".aim1-off"),
  panda3 = $("#panda3");

TweenMax.set(lasers, {
  rotation: 150,
  drawSVG: "0 0",
  opacity: 0
});
TweenMax.set(panda3, {
  x: 80,
  visibility: "visible"
});

function laserPanda() {
  var tl = new TimelineMax();

  tl.add("laserIn");
  tl.to(aim1O, 0.25, {
    opacity: 0
  }, "laserIn");
  tl.to(handle1, 1, {
    rotation: 30,
    transformOrigin: "20% 50%",
    ease: Expo.easeOut
  }, "laserIn");
  tl.fromTo(panda3, 2, {
    x: 80
  }, {
    x: 0,
    ease: Circ.easeOut
  }, "laserIn");
  tl.to(chip, 0.75, {
    x: 20,
    ease: Circ.easeOut
  }, "laserIn+=2.5");
  tl.fromTo(lasers, 1, {
    drawSVG: "0 0",
    opacity: 0
  }, {
    drawSVG: true,
    opacity: 0.8
  }, "laserIn+=2.5");
  tl.to(chip, 0.2, {
    opacity: 0
  }, "laserIn+=3");
  tl.to(chip, 0.2, {
    x: -5
  }, "laserIn+=3.5");
  tl.fromTo(lasers, 2, {
    rotation: 150
  }, {
    rotation: 0,
    ease: Power3.easeIn
  }, "laserIn+=3.5");
  tl.fromTo(lasers, 0.75, {
    drawSVG: true
  }, {
    drawSVG: "0 0"
  }, "laserIn+=5.5");
  tl.to(chip, 0.75, {
    x: 0,
    opacity: 1,
    ease: Circ.easeOut
  }, "laserIn+=8");
  tl.to(panda3, 2, {
    x: 80,
    ease: Circ.easeIn
  }, "laserIn+=6.5");
  tl.to(handle1, 1, {
    rotation: 0,
    transformOrigin: "20% 50%",
    ease: Expo.easeIn
  }, "laserIn+=7.5");
  tl.to(aim1O, 0.25, {
    opacity: 1
  }, "laserIn+=8.25");

  return tl;
}

//create a timeline but initially pause it so that we can control it via click
var triggerLaser = new TimelineMax({
  paused: true
});
triggerLaser.add(laserPanda());

//this toggle kicks off the panda laser timeline
handle1.on("click", function(e) {
  e.preventDefault();
  triggerLaser.restart();
});

$(function(){
    //新着回答があるかを確かめる
    $(".hama-panda").click(function(){
        setTimeout(function(){
            // $('.js-setTimeout').text("へんか！");
            alert("パンダ宇宙飛行士が誕生！お迎えに行こう！枕の下にいるよ！");
            window.location.href = 'line-message';
        },7500);
        //$('.js-modal').fadeOut();
    });
});
</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

<div class="container">
        <div></div>
        <svg class="first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 468.4">
          <path fill="#FFF" d="M299.7 150v-39.9c0-2.7-2.2-4.9-4.9-4.9h-39.4v-.7h39.4c3.1 0 5.6 2.5 5.6 5.6V150h-.7z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#4E3440" d="M225.3 20.9h1.2v68.9h-1.2zM231.9 112.4h2.3v161.7h-2.3z" />
          <path fill="#FFF" d="M330.1 211.9v-6.8c0-2.7-2.2-4.9-4.9-4.9h-9.3v-.7h9.3c3.1 0 5.6 2.5 5.6 5.6v6.8h-.7z" />
          <path fill="#4E3440" d="M298.9 167h2.3v4.8h-2.3z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#EAEAEA" d="M321.3 193.2c0 11.9-9.6 21.5-21.5 21.5s-21.5-9.6-21.5-21.5 9.6-21.5 21.5-21.5 21.5 9.6 21.5 21.5z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M284.5 178c-8.4 8.4-8.4 22 0 30.4l30.4-30.4c-8.4-8.4-22-8.4-30.4 0z" />
          <path fill="#FFF" d="M270 184.7c0 .6-.5 1.1-1.1 1.1h-3.6c-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1h3.6c.6 0 1.1.5 1.1 1.1z" />
          <path fill="#FFF" d="M267.9 173.1V186c0 2.7 2.2 4.9 4.9 4.9h24.6v1.5h-24.6c-3.5 0-6.4-2.9-6.4-6.4v-12.9h1.5z" />
          <path fill="#EAEAEA" d="M274.7 175.7c0 4.2-3.4 7.6-7.6 7.6-4.2 0-7.6-3.4-7.6-7.6 0-4.2 3.4-7.6 7.6-7.6 4.2 0 7.6 3.4 7.6 7.6z" />
          <path fill="#FFF" d="M263 181.8c-3.4-2.4-4.3-7.1-1.9-10.5 2.4-3.4 7.1-4.3 10.5-1.9-3.4 4.7-4 5.8-8.6 12.4z" />
          <path fill="#4E3440" d="M267.1 183.7c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm0-15.2c-3.9 0-7.2 3.2-7.2 7.1 0 3.9 3.2 7.2 7.2 7.2 3.9 0 7.2-3.2 7.2-7.2 0-3.9-3.3-7.1-7.2-7.1z" />
          <path fill="#4E3440" d="M266.1 176.2c-.3-.4-.3-1.1.2-1.4.4-.3 1.1-.3 1.4.2.3.5 2 4.3 2 4.3s-3.3-2.7-3.6-3.1z" />
          <path fill="#FFF" d="M259.5 264.2v-28.3c0-2.7 2.2-4.9 4.9-4.9h19.5v-.7h-19.5c-3.1 0-5.6 2.5-5.6 5.6v28.3h.7zM259.8 209.4c0 4.1-3.3 7.4-7.4 7.4-4.1 0-7.4-3.3-7.4-7.4 0-4.1 3.3-7.4 7.4-7.4 4.1 0 7.4 3.3 7.4 7.4z" />
          <path fill="#368426" d="M247.6 211.3c.6 2.1 2.6 3.6 4.8 3.6 2.3 0 4.2-1.5 4.8-3.6h-9.6z" />
          <path fill="#FFF" d="M299.7 137.7v13.5c0 2.7-2.2 4.9-4.9 4.9h-31.9v.7h31.9c3.1 0 5.6-2.5 5.6-5.6v-13.5h-.7zM330.1 211.8v13.8c0 2.7-2.2 4.9-4.9 4.9h-1.6v.7h1.6c3.1 0 5.6-2.5 5.6-5.6v-13.8h-.7z" />
          <g fill="#FFF">
            <path d="M242.1 264.5v-20.8c0-2.7 2.2-4.9 4.9-4.9h14.6v-.7H247c-3.1 0-5.6 2.5-5.6 5.6v20.8h.7zM209.5 190.3v52.4c0 2.7-2.2 4.9-4.9 4.9h-51.8v.7h51.8c3.1 0 5.6-2.5 5.6-5.6v-52.4h-.7z" />
            <path d="M267.6 219.4v13.8c0 2.7-2.2 4.9-4.9 4.9H261v.7h1.6c3.1 0 5.6-2.5 5.6-5.6v-13.8h-.6zM237.4 195.2v-6.8c0-2.7-2.2-4.9-4.9-4.9h-9.3v-.7h9.3c3.1 0 5.6 2.5 5.6 5.6v6.8h-.7z" />
            <path d="M267.6 221.8V215c0-2.7-2.2-4.9-4.9-4.9h-9.3v-.7h9.3c3.1 0 5.6 2.5 5.6 5.6v6.8h-.7zM253.3 209.4H243c-2.7 0-4.9-2.2-4.9-4.9v-9.3h-.7v9.3c0 3.1 2.5 5.6 5.6 5.6h10.3v-.7zM210.2 195.2v-6.8c0-2.7 2.2-4.9 4.9-4.9H228v-.7h-12.9c-3.1 0-5.6 2.5-5.6 5.6v6.8h.7zM144.3 260v-6.8c0-2.7 2.2-4.9 4.9-4.9h12.9v-.7h-12.9c-3.1 0-5.6 2.5-5.6 5.6v6.8h.7z"
            />
          </g>
          <path fill="#FFF" d="M252.7 206.3v-44.4c0-2.7 2.2-4.9 4.9-4.9h12.9v-.7h-12.9c-3.1 0-5.6 2.5-5.6 5.6v44.4h.7zM318.6 235.6c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1 5.1 2.3 5.1 5.1-2.3 5.1-5.1 5.1zm0-9.5c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4z"
          />
          <path fill="#FFF" d="M312.6 235.6c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1 5.1 2.3 5.1 5.1-2.2 5.1-5.1 5.1zm0-9.5c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-1.9-4.4-4.4-4.4z" />
          <path fill="#FFF" d="M306.7 235.6c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1 5.1 2.3 5.1 5.1-2.3 5.1-5.1 5.1zm0-9.5c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4z" />
          <path fill="#FFF" d="M300.8 235.6c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1 5.1 2.3 5.1 5.1-2.3 5.1-5.1 5.1zm0-9.5c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4z" />
          <path fill="#FFF" d="M294.9 235.6c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1 5.1 2.3 5.1 5.1-2.3 5.1-5.1 5.1zm0-9.5c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4z" />
          <path fill="#FFF" d="M288.9 235.6c-2.8 0-5.1-2.3-5.1-5.1s2.3-5.1 5.1-5.1 5.1 2.3 5.1 5.1-2.3 5.1-5.1 5.1zm0-9.5c-2.4 0-4.4 2-4.4 4.4 0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4z" />
          <path opacity=".1" fill="#111135" d="M258.4 213.6c2.3-3.3 1.5-7.9-1.7-10.2l-8.4 12c3.3 2.3 7.8 1.5 10.1-1.8z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#4E3440" d="M219.4 112.5c0 .9.7 1.7 1.7 1.7h25.3c.9 0 1.7-.7 1.7-1.7 0-.9-.7-1.7-1.7-1.7h-25.3c-.9.1-1.7.8-1.7 1.7z" />
          <path id="light" fill-rule="evenodd" clip-rule="evenodd" fill="#E8E4E5" d="M205.1 203c0-8.4-6.9-15.2-15.3-15.2s-15.2 6.8-15.2 15.2c0 5.9 3.3 11 8.3 13.5v7c0 3.9 3.1 7 7 7s7-3.1 7-7v-7c5.1-2.5 8.2-7.6 8.2-13.5z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#4E3440" d="M182.8 223.1v4.6c0 3.9 3.1 7 7 7s7-3.1 7-7v-4.6h-14z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M182.8 201.8h14v2.3h-14z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M188.7 196h2.3v14h-2.3z" />
          <path opacity=".1" fill-rule="evenodd" clip-rule="evenodd" fill="#111135" d="M193 188.1c-6.9 1.5-12 7.6-12 14.9 0 5.9 3.3 11 8.2 13.5v11.2c0 2.7 1.6 5.1 3.8 6.2 2.3-1.2 3.8-3.5 3.8-6.2v-11.2c4.9-2.5 8.2-7.6 8.2-13.5 0-7.3-5.1-13.4-12-14.9z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#4E3440" d="M297.3 218.1c0 .7-.5 1.2-1.2 1.2h-73.7c-.7 0-1.2-.5-1.2-1.2s.5-1.2 1.2-1.2h73.7c.7 0 1.2.5 1.2 1.2z" />
          <path fill="#E4311B" d="M299.8 216.1c-12.7 0-23-10.3-23-23s10.3-23 23-23 23 10.3 23 23-10.3 23-23 23zm0-42.9c-11 0-20 9-20 20s9 20 20 20 20-9 20-20-8.9-20-20-20z" />
          <path id="needle3" fill="#4E3440" d="M301.9 192.1c1 1.2.9 3-.3 4s-3 .9-4-.3-6.3-11.7-6.3-11.7 9.6 6.8 10.6 8z" />
          <path fill="#4E3440" d="M299.4 176.1h1v2.4h-1zM297.8 178.6l-1 .2-.4-2.4 1-.1zM293.528 177.348l.94-.342.82 2.255-.94.343zM292.9 180.2l-.8.5-1.2-2.1.8-.4zM288.53 180.39l.764-.644 1.546 1.836-.765.644zM288.9 183.4l-.6.7-1.8-1.5.6-.7zM287.4 185.4l-.5.9-2.1-1.2.5-.9zM286.2 187.7l-.3.9-2.2-.8.3-.9zM285.5 190.2l-.2.9-2.3-.4.2-.9zM285.2 192.7v1h-2.4v-1zM285.3 195.3l.2.9-2.3.5-.2-1zM285.9 197.8l.4.9-2.3.8-.3-.9zM286.9 200.1l.5.9-2 1.2-.5-.9zM287.114 204.55l-.642-.768 1.84-1.54.642.767zM289.34 206.612l-.765-.646 1.55-1.832.764.646zM292.2 205.7l.8.5-1.2 2-.8-.5zM294.5 206.8l.9.4-.8 2.2-1-.3zM296.9 207.6l1 .2-.4 2.3-1-.2zM299.5 207.9h1v2.4h-1zM302 207.7l1-.1.4 2.3-1 .2zM304.5 207.2l.9-.4.8 2.2-.9.4zM306.9 206.1l.8-.4 1.2 2-.8.5zM309 204.7l.8-.6 1.5 1.8-.7.6zM310.9 203l.6-.8 1.8 1.5-.6.8zM312.4 200.9l.5-.8 2.1 1.1-.5.9zM316.11 198.532l-.344.94-2.254-.824.343-.94zM314.3 196.2l.2-1 2.3.4-.2 1zM314.6 193.6v-1h2.4v1zM314.5 191l-.2-.9 2.3-.4.2.9zM313.9 188.5l-.3-.9 2.2-.8.3.9zM312.9 186.2l-.5-.8 2-1.2.5.8zM312.69 181.792l.642.766-1.84 1.54-.642-.766zM309.7 182.2l-.7-.6 1.5-1.9.7.7zM307.6 180.6l-.8-.4 1.2-2.1.8.5zM305.3 179.5l-.9-.3.9-2.3.9.4zM302.293 176.234l.985.17-.41 2.366-.986-.17z"
          />
          <path fill="#C45314" d="M309.1 218.1c0 1.4-1.1 2.6-2.6 2.6h-13.1c-1.4 0-2.6-1.1-2.6-2.6 0-1.4 1.1-2.6 2.6-2.6h13.1c1.4.1 2.6 1.2 2.6 2.6z" />
          <circle fill="#C45314" cx="300" cy="164.9" r="3.7" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#D1D1D1" d="M232.4 215.8c1.3-.2 2.5.6 2.7 1.8.2 1.3-.6 2.5-1.8 2.7-1.3.2-2.5-.6-2.7-1.8-.2-1.2.6-2.4 1.8-2.7z" />
          <path fill="#FFF" d="M235.7 217.6c.3 1.5-.7 3-2.3 3.3-1.5.3-3-.7-3.3-2.2-.3-1.5.7-3 2.3-3.3 1.5-.4 3 .6 3.3 2.2zm-4.6.9c.2 1 1.1 1.6 2.1 1.4 1-.2 1.6-1.1 1.4-2.1-.2-1-1.1-1.6-2.1-1.4-.9.1-1.6 1.1-1.4 2.1z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#8E8E8E" d="M233.3 216.5c.2.1.3.3.3.5l-.7 2.5c-.1.2-.3.3-.5.3-.2-.1-.3-.3-.3-.5l.7-2.5c.1-.2.3-.4.5-.3z" />
          <path fill="#E4311B" d="M245.3 19.1c0 1.8-1.5 3.2-3.2 3.2h-17c-1.8 0-3.2-1.5-3.2-3.2 0-1.8 1.5-3.2 3.2-3.2h17c1.8 0 3.2 1.4 3.2 3.2z" />
          <g id="windmill">
            <path fill="#FFF" d="M243.4 14.5h-2.6l-1.7-8.3h5.9z" />
            <path fill="#E2E2E2" d="M242.1 6.2h-3l1.7 8.3h1.3z" />
            <path fill="#FFF" d="M240.1 14.7l-1.9 1.7-6.6-5.3 4.5-3.7z" />
            <path fill="#E2E2E2" d="M233.8 9.2l-2.2 1.9 6.6 5.3 1-.8z" />
            <path fill="#FFF" d="M237.8 17l-.4 2.5-8.4.2 1-5.8z" />
            <path fill="#E2E2E2" d="M229.5 16.8l-.5 2.9 8.4-.2.2-1.2z" />
            <path fill="#FFF" d="M237.5 20.2l1.3 2.2-6.3 5.6-2.9-5.1z" />
            <path fill="#E2E2E2" d="M231 25.4l1.5 2.6 6.3-5.6-.6-1.1z" />
            <path fill="#FFF" d="M239.4 22.9l2.4.8-1.3 8.4-5.5-2z" />
            <path fill="#E2E2E2" d="M237.8 31.1l2.7 1 1.3-8.4-1.2-.4z" />
            <g>
              <path fill="#FFF" d="M242.5 23.7l2.4-.9 4.4 7.2-5.5 2z" />
              <path fill="#E2E2E2" d="M246.5 31l2.8-1-4.4-7.2-1.2.5z" />
            </g>
            <g>
              <path fill="#FFF" d="M245.4 22.4l1.3-2.3 8 2.8-3 5z" />
              <path fill="#E2E2E2" d="M253.2 25.4l1.5-2.5-8-2.8-.6 1.2z" />
            </g>
            <g>
              <path fill="#FFF" d="M246.8 19.5l-.5-2.6 7.9-3 1 5.7z" />
              <path fill="#E2E2E2" d="M254.7 16.8l-.5-2.9-7.9 3 .3 1.3z" />
            </g>
            <g>
              <path fill="#FFF" d="M246 16.3l-2-1.6 4.1-7.4 4.4 3.8z" />
              <path fill="#E2E2E2" d="M250.3 9.2l-2.2-1.9-4.1 7.4 1 .8z" />
            </g>
          </g>
          <circle fill="#FFF" cx="242.2" cy="19.1" r="2.2" />
          <path fill="#FFF" d="M233.3 86.6c-12.5 0-22.6 10.1-22.6 22.6h45.2c0-12.5-10.1-22.6-22.6-22.6z" />
          <path fill="#4E3440" d="M232.6 88.9h1.1v2.8h-1.1zM230.7 91.8l-1.1.2-.5-2.7 1.2-.2zM225.74 90.292l1.033-.377.96 2.63-1.034.377zM225 93.7l-1 .6-1.4-2.4 1-.6zM222.5 95.4l-.9.7-1.8-2.1.9-.7zM220.3 97.5l-.8.9-2.1-1.8.7-.9zM218.5 99.9l-.6 1-2.4-1.4.5-1zM217.1 102.6l-.4 1.1-2.6-1 .4-1zM216.2 105.5l-.2 1.2-2.7-.5.2-1.2zM215.9 108.5v1.2h-2.8v-1.2zM250.7 109.6v-1.2h2.8v1.2zM250.5 106.5l-.2-1.1 2.7-.5.2 1.2zM249.8 103.6l-.4-1.1 2.6-.9.4 1zM248.6 100.8l-.6-1 2.4-1.4.6 1zM246.9 98.3l-.7-.9 2.1-1.8.8.9zM244.8 96.1l-.8-.8 1.8-2.1.8.7zM242.4 94.3l-1-.6 1.4-2.4 1 .5zM239.7 92.9l-1.1-.4 1-2.6 1.1.4zM236.15 89.02l1.085.185-.474 2.76-1.083-.186z"
          />
          <path fill="#E21E6E" d="M257.6 110.9H209v-1.7c0-13.4 10.9-24.3 24.3-24.3s24.3 10.9 24.3 24.3v1.7zm-45.2-3.4h41.7c-.9-10.8-9.9-19.2-20.9-19.2-10.9-.1-19.9 8.4-20.8 19.2z" />
          <path fill="#4E3440" d="M84.5 244.5h7V268h-7z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#D1D1D1" d="M232.6 110.2c1.3-.2 2.5.6 2.7 1.8.2 1.3-.6 2.5-1.8 2.7-1.3.2-2.5-.6-2.7-1.8-.3-1.2.5-2.4 1.8-2.7z" />
          <path fill="#FFF" d="M235.8 112c.3 1.5-.7 3-2.3 3.3-1.5.3-3-.7-3.3-2.3-.3-1.5.7-3 2.3-3.3 1.5-.3 3 .7 3.3 2.3zm-4.6.9c.2 1 1.1 1.6 2.1 1.4 1-.2 1.6-1.1 1.4-2.1-.2-1-1.1-1.6-2.1-1.4-.9.2-1.5 1.1-1.4 2.1z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#8E8E8E" d="M233.4 110.9c.2.1.3.3.3.5l-.6 2.5c-.1.2-.3.3-.5.3-.2-.1-.3-.3-.3-.5l.7-2.5c0-.2.2-.4.4-.3z" />
          <path id="chip" fill="#F7931E" d="M52.3 349.4h4.3v1.1h-4.3z" />
          <path id="needle4" fill="#CC1B1B" d="M235 103.5c.6 1 .3 2.2-.7 2.8-1 .6-2.2.3-2.8-.7-.6-1-3.2-9-3.2-9s6.1 6 6.7 6.9z" />
          <path fill="#EDEDED" d="M304.7 138.1c0 2.5-2.1 4.6-4.6 4.6-2.5 0-4.6-2.1-4.6-4.6v-17.7c0-2.5 2.1-4.6 4.6-4.6 2.5 0 4.6 2.1 4.6 4.6v17.7z" />
          <path fill="#FFF" d="M304.7 138.1v-17.7c0-2.5-2.1-4.6-4.6-4.6v27c2.5-.1 4.6-2.2 4.6-4.7z" />
          <ellipse fill="#FFF" cx="174.5" cy="248.1" rx="3.1" ry="3.1" />
          <path fill="#FBDF59" d="M172.1 248.8c.3 1 1.3 1.8 2.4 1.8 1.1 0 2.1-.7 2.4-1.8h-4.8z" />
          <path opacity=".1" fill="#111135" d="M177 249.9c1-1.4.6-3.4-.8-4.4l-3.6 5.1c1.5 1 3.4.7 4.4-.7z" />
          <path fill="#FFF" d="M69.6 265c0 .7-.6 1.3-1.4 1.3h-4.7c-.8 0-1.4-.6-1.4-1.3 0-.7.6-1.3 1.4-1.3h4.7c.8 0 1.4.6 1.4 1.3z" />
          <path fill="#EAEAEA" d="M71.4 228.2c0 9.4 7.6 17.1 17.1 17.1 9.4 0 17.1-7.6 17.1-17.1 0-9.4-7.6-17.1-17.1-17.1-9.5 0-17.1 7.7-17.1 17.1z" />
          <path fill="#FFF" d="M97.8 241.9c7.7-5.4 9.6-16 4.2-23.8-5.4-7.7-16-9.6-23.8-4.2 7.7 10.7 9.2 13.1 19.6 28z" />
          <path fill="#E21E6E" d="M70.4 228.2c0-9.9 8.1-18 18-18s18 8.1 18 18-8.1 18-18 18-18-8.1-18-18zm1.9 0c0 8.9 7.2 16.1 16.1 16.1 8.9 0 16.1-7.2 16.1-16.1 0-8.9-7.2-16.1-16.1-16.1-8.8 0-16.1 7.2-16.1 16.1z" />
          <path id="needle2" fill="#4E3440" d="M86.9 230.5c.7 1 2.1 1.3 3.2.6 1-.7 1.3-2.1.6-3.2-.7-1-7.8-7.3-7.8-7.3s3.3 8.8 4 9.9z" />
          <path fill="#4E3440" d="M88.2 213h.9v2.1h-.9zM90.4 215.2l.9.1.4-2-.9-.2zM93.497 216.05l-.846-.305.712-1.976.847.304zM95.526 217.022l-.78-.448 1.045-1.82.782.447zM96.7 217.9l.7.6 1.3-1.7-.6-.5zM98.4 219.5l.5.6 1.7-1.3-.6-.7zM99.7 221.3l.5.8 1.8-1.1-.4-.8zM100.8 223.4l.3.8 2-.7-.3-.9zM101.4 225.6l.2.8 2.1-.4-.2-.8zM101.7 227.8v.9h2.1v-.9zM101.6 230.1l-.2.9 2.1.3.2-.8zM101.1 232.4l-.3.8 1.9.7.3-.8zM100.1 234.5l-.4.7 1.8 1.1.5-.8zM98.9 236.4l-.6.7 1.6 1.3.6-.6zM97.3 238.1l-.6.5 1.3 1.6.7-.5zM95.5 239.5l-.8.4 1.1 1.8.7-.4zM93.4 240.5l-.8.3.7 2 .8-.3zM91.2 241.1l-.8.2.3 2.1.9-.2zM88.1 241.4h.9v2.1h-.9zM85.79 241.148l.886.152-.353 2.07-.887-.152zM84.4 240.8l-.8-.4-.7 2 .8.3zM82.3 239.8l-.8-.4-1 1.8.7.5zM79.65 238.045l.69.578-1.35 1.61-.69-.578zM78.7 237l-.6-.7-1.6 1.4.6.7zM77.3 235.2l-.4-.8-1.8 1.1.4.7zM76.3 233.1l-.3-.8-2 .7.3.8zM75.6 230.9l-.1-.8-2.1.3.2.9zM75.4 228.6v-.8h-2.2v.8zM75.5 226.3l.2-.8-2.1-.4-.2.9zM76 224.1l.3-.8-2-.7-.3.8zM76.9 222l.5-.8-1.9-1-.4.7zM78.2 220.1l.6-.7-1.7-1.4-.5.7zM79.8 218.4l.6-.6-1.3-1.6-.7.6zM81.6 217l.8-.4-1.1-1.8-.7.4zM83.7 216l.8-.3-.7-2-.9.3zM86.684 215.15l-.886.153-.358-2.07.887-.153z"
          />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M232.1 313.3c0 10.1-8.8 18.3-19.6 18.3H57.6c-10.8 0-19.6-8.2-19.6-18.3v-28.7c0-10.1 8.8-18.3 19.6-18.3h154.8c10.8 0 19.6 8.2 19.6 18.3v28.7z" />
          <path fill="#4E3440" d="M187.2 233.6h5v25.9h-5z" />
          <path fill="#78646E" d="M196.4 233.9c0 1-.8 1.8-1.8 1.8h-9.7c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8h9.7c1 0 1.8.8 1.8 1.8z" />
          <g id="smoke" fill="#FFF">
            <circle cx="423.5" cy="176.8" r="6" />
            <path d="M434.6 177.7c-7.7-3.1-11.4-11.8-8.3-19.5 3.1-7.7 11.8-11.4 19.5-8.3 7.7 3.1 11.4 11.8 8.3 19.5-3.1 7.6-11.8 11.4-19.5 8.3z" />
            <circle cx="414.7" cy="153.9" r="2.3" />
            <path d="M430.4 152.3c-4.5-1.8-6.7-6.9-4.9-11.4 1.8-4.5 6.9-6.7 11.4-4.9 4.5 1.8 6.7 6.9 4.9 11.4-1.8 4.5-6.9 6.7-11.4 4.9zM454.6 147.4c-1-.4-1.5-1.6-1.1-2.6.4-1 1.6-1.5 2.6-1.1 1 .4 1.5 1.6 1.1 2.6-.4 1-1.6 1.5-2.6 1.1zM452.2 141.8c-8.4-3.4-12.5-12.9-9.1-21.3 3.4-8.4 12.9-12.5 21.3-9.1 8.4 3.4 12.5 12.9 9.1 21.3-3.3 8.4-12.8 12.5-21.3 9.1z"
            />
            <path d="M467.6 149.3c-3.1-1.2-4.5-4.7-3.3-7.8 1.2-3.1 4.7-4.5 7.8-3.3 3.1 1.2 4.5 4.7 3.3 7.8-1.2 3-4.7 4.5-7.8 3.3zM424.6 173.7c-3.2-1.3-4.7-4.9-3.4-8 1.3-3.2 4.9-4.7 8-3.4 3.2 1.3 4.7 4.9 3.4 8-1.3 3.1-4.9 4.6-8 3.4z" />
            <circle cx="439.8" cy="139.1" r="6.9" />
            <path d="M467 167c-.9-.4-1.3-1.4-1-2.3.4-.9 1.4-1.3 2.3-1 .9.4 1.3 1.4 1 2.3-.4 1-1.4 1.4-2.3 1z" />
            <circle cx="488.8" cy="100.1" r="3" />
            <path d="M467 96.2c-1.2-.5-1.7-1.8-1.3-3 .5-1.2 1.8-1.7 3-1.3 1.2.5 1.7 1.8 1.3 3-.5 1.2-1.8 1.8-3 1.3zM479.7 73.7c-1.9-.8-2.9-3-2.1-4.9.8-1.9 3-2.9 4.9-2.1 1.9.8 2.9 3 2.1 4.9-.8 1.9-3 2.9-4.9 2.1zM417.2 167.8c-4.3-1.7-6.3-6.6-4.6-10.8 1.7-4.3 6.6-6.3 10.8-4.6 4.3 1.7 6.3 6.6 4.6 10.8-1.7 4.2-6.5 6.3-10.8 4.6z"
            />
          </g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M327.2 387.5c-18.9 0-34.2-15.3-34.2-34.2v-67.4h-24.6c-13.9 0-25.1 11.2-25.1 25.1v71.7c0 13.9 11.2 25.1 25.1 25.1h78.9c12.2 0 22.4-8.7 24.6-20.3h-44.7z" />
          <path fill="#78646E" d="M156.4 408.7H18.5C12.7 408.7 8 404 8 398.2s4.7-10.5 10.5-10.5h137.8c5.8 0 10.5 4.7 10.5 10.5s-4.7 10.5-10.4 10.5zM18.5 390.2c-4.4 0-8 3.6-8 8s3.6 8 8 8h137.8c4.4 0 8-3.6 8-8s-3.6-8-8-8H18.5z" />
          <path fill="#78646E" d="M26 398c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2S26 394 26 398z" />
          <path fill="#FFF" d="M22.5 398c0 2-1.6 3.7-3.7 3.7s-3.7-1.6-3.7-3.7c0-2 1.6-3.7 3.7-3.7s3.7 1.7 3.7 3.7z" />
          <path fill="#78646E" d="M43.8 398.1c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2c3.9 0 7.2 3.2 7.2 7.2z" />
          <path fill="#FFF" d="M40.3 398.1c0 2-1.6 3.7-3.7 3.7s-3.7-1.6-3.7-3.7c0-2 1.6-3.7 3.7-3.7s3.7 1.7 3.7 3.7z" />
          <path fill="#78646E" d="M61.5 398.2c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2 7.2 3.3 7.2 7.2z" />
          <path fill="#FFF" d="M58 398.2c0 2-1.6 3.7-3.7 3.7s-3.7-1.6-3.7-3.7c0-2 1.6-3.7 3.7-3.7s3.7 1.7 3.7 3.7z" />
          <path fill="#78646E" d="M79.2 398.3c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2c4 .1 7.2 3.3 7.2 7.2z" />
          <path fill="#FFF" d="M75.7 398.3c0 2-1.6 3.7-3.7 3.7-2 0-3.7-1.6-3.7-3.7 0-2 1.6-3.7 3.7-3.7 2.1.1 3.7 1.7 3.7 3.7z" />
          <path fill="#78646E" d="M97 398.5c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2c3.9 0 7.2 3.2 7.2 7.2z" />
          <path fill="#FFF" d="M93.4 398.5c0 2-1.6 3.7-3.7 3.7-2 0-3.7-1.6-3.7-3.7 0-2 1.6-3.7 3.7-3.7s3.7 1.6 3.7 3.7z" />
          <path fill="#78646E" d="M114.7 397.9c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2 7.2 3.2 7.2 7.2z" />
          <path fill="#FFF" d="M111.2 397.9c0 2-1.6 3.7-3.7 3.7-2 0-3.7-1.6-3.7-3.7 0-2 1.6-3.7 3.7-3.7 2 0 3.7 1.6 3.7 3.7z" />
          <path fill="#78646E" d="M132.4 397.8c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2 7.2 3.2 7.2 7.2z" />
          <path fill="#FFF" d="M128.9 397.8c0 2-1.6 3.7-3.7 3.7-2 0-3.7-1.6-3.7-3.7 0-2 1.6-3.7 3.7-3.7s3.7 1.6 3.7 3.7z" />
          <path fill="#78646E" d="M274.4 273.2H368V295h-93.6z" />
          <path fill="#78646E" d="M366.3 273h11.6c25.6 0 46.4-20.8 46.4-46.4v-4.1h21.9v4.1c0 37.7-30.6 68.3-68.3 68.3h-11.6V273zM446.2 225.1h-21.7s-7.5-23.4-41.5-28.4c12.5 0 94.2-.1 103 0-29.9 3.1-39.8 28.4-39.8 28.4z" />
          <path fill="#4E3440" d="M364.7 271.4h3.3v25.3h-3.3zM422.6 223.4h25.3v3.3h-25.3zM381.5 196.6c-1.2 0-2.1-.9-2.1-2.1 0-1.2.9-2.1 2.1-2.1h107.3c1.2 0 2.1.9 2.1 2.1 0 1.2-.9 2.1-2.1 2.1H381.5z" />
          <path fill="#78646E" d="M142.3 394h4.3v47.3h-4.3zM130.7 450.8h2.3c5.1 0 9.2-4.1 9.2-9.2v-.8h4.4v.8c0 7.5-6.1 13.5-13.5 13.5h-2.3v-4.3z" />
          <path fill="#4E3440" d="M153.7 414.5c0 2.6-2.1 4.6-4.6 4.6h-9.5c-2.6 0-4.6-2.1-4.6-4.6v-8.3c0-2.6 2.1-4.6 4.6-4.6h9.5c2.6 0 4.6 2.1 4.6 4.6v8.3z" />
          <path fill="#F7F7F7" d="M141.2 431.8h6.5v9.5h-6.5z" />
          <path fill="#383A38" d="M146.5 436.9c-.1 1.1-1.2 1.9-2.3 1.8-1.1-.1-1.9-1.2-1.8-2.3.1-1.1 1.2-1.9 2.3-1.8 1.1.1 1.9 1.1 1.8 2.3z" />
          <path id="gear6" fill="#383A38" d="M145.7 426.3c-5.7-.7-10.9 3.3-11.6 9-.7 5.7 3.3 10.9 9 11.6 5.7.7 10.9-3.3 11.6-9 .8-5.7-3.3-10.9-9-11.6zm7.5 10.7l-7.9-1 1-7.9c4.1.8 7 4.6 6.9 8.9zm-8.4-9.2l-1 7.9-7.9-1c.8-4.1 4.6-7 8.9-6.9zm-9.1 8.5l7.9 1-1 7.9c-4.2-.9-7.1-4.7-6.9-8.9zm8.4 9.1l1-7.9 7.9 1c-.9 4.1-4.7 7-8.9 6.9z"
          />
          <path fill="#F7F7F7" d="M145.3 436.7c-.1.5-.5.8-1 .8-.5-.1-.8-.5-.8-1 .1-.5.5-.8 1-.8.5.1.9.5.8 1z" />
          <g class="aim1-off">
            <circle id="aim1" fill-rule="evenodd" clip-rule="evenodd" fill="#FF0000" cx="329.4" cy="318.4" r="0" />
          </g>
          <g id="handle1" fill-rule="evenodd" clip-rule="evenodd">
            <path fill="#78646E" d="M293.8 355.6l-2.3-2.3 39.2-39.3 2.4 2.4z" />
            <path fill="#FFF" d="M335.4 324.8c-3.6 3.6-9.5 3.6-13.1 0-3.6-3.6-3.6-9.5 0-13.1 3.6-3.6 9.5-3.6 13.1 0 3.6 3.7 3.6 9.5 0 13.1z" />
            <circle fill="#FF0000" cx="328.8" cy="318.3" r="5" />
          </g>
          <g id="panda3">
            <path id="leg2_2_" d="M78.4 368.9s-.4 8.5-1.7 11.3c-1.4 2.9 1.2 6.5 0 7.9-1.2 1.4-10.3.9-10.3.9s-1.1-1.7 0-7.9c1.1-6-.7-6.1-.7-6.1l12.7-6.1H78" />
            <path id="leg1_2_" d="M51.6 368.9s1.6 8.3 2.6 11.3c.8 2.6-1.3 6.5 0 7.9 1.3 1.4 10.7.9 10.7.9s.9-1.7 0-7.9c-1-6.4.7-6.1.7-6.1l-14-6.1" />
            <path id="arm2_2_" d="M72.9 352.3s6.7 1.5 7.9 10.5c1.2 9 2.2 12-1.2 12.6-3.3.6-4.8-8.5-4.8-8.5l-1.9-14.6z" />
            <path id="arm1_2_" d="M56.8 352.7s-6.3 1.6-7.4 10.9c-1.1 9.3-2 12.4 1.1 13.1 3.1.6 4.5-8.8 4.5-8.8l1.8-15.2z" />
            <g id="body_2_">
              <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="80.269" y1="241.593" x2="97.175" y2="212.305" gradientTransform="matrix(.918 0 0 -.918 -16.264 573.314)">
                <stop offset="0" stop-color="#FFF" />
                <stop offset=".2" stop-color="#FCFCFC" />
                <stop offset=".4" stop-color="#F2F2F2" />
                <stop offset=".6" stop-color="#E1E1E1" />
                <stop offset=".7" stop-color="#C9C9C9" />
                <stop offset=".9" stop-color="#ABABAB" />
                <stop offset="1" stop-color="#919191" />
              </linearGradient>
              <ellipse fill="url(#SVGID_1_)" cx="65.2" cy="364.9" rx="13.8" ry="16" />
              <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="88.658" y1="216.378" x2="88.658" y2="244.694" gradientTransform="matrix(.918 0 0 -.918 -16.264 573.314)">
                <stop offset="0" stop-color="#FFF" />
                <stop offset=".2" stop-color="#FCFCFC" />
                <stop offset=".3" stop-color="#F2F2F2" />
                <stop offset=".4" stop-color="#E1E1E1" />
                <stop offset=".6" stop-color="#C9C9C9" />
                <stop offset=".7" stop-color="#ABABAB" />
                <stop offset=".8" stop-color="#858585" />
                <stop offset=".9" stop-color="#5A5A5A" />
                <stop offset="1" stop-color="#2E2E2E" />
              </linearGradient>
              <ellipse opacity=".4" fill="url(#SVGID_2_)" cx="65.1" cy="361.6" rx="12.5" ry="13" />
              <path opacity=".9" fill="#FFF" d="M74.2 357.7c-5.7 3.5-12 5.5-17.3-.7-2.7 2.8-3.3 8.8-2.6 12.4.7 4 4.5 6.3 8.6 7 7.6 1.2 14.8-4.2 13.6-12.1.3.8-.2-4.1-2.3-6.6z" />
            </g>
            <g id="head_2_">
              <g id="face_2_">
                <path fill="#ABABAB" d="M55.2 349c1.6-4.5 4.8-12.5 10.4-12.9 5.1-.4 8.9 7.3 9.9 11.2.5 2.2.5 5-.1 7.2-1 3.3-3.2 4.1-6.2 5.2-3.6 1.3-6.5 1.6-9.8-.9-2.9-2.3-5.3-6-4.2-9.8z" />
                <path fill="#EAEAEA" d="M55.2 348.7c1.6-4.5 4.8-12.5 10.4-12.9 5.1-.4 8.9 7.3 9.9 11.2.5 2.2.5 5-.1 7.2-1 3.3-3.2 4.1-6.2 5.2-3.6 1.3-6.5 1.6-9.8-.9-2.9-2.3-5.3-6-4.2-9.8z" />
                <path fill="#FFF" d="M55.8 348c1.5-4.3 4.5-11.8 9.8-12.2 4.8-.4 8.4 6.8 9.3 10.6.5 2.1.5 4.7-.1 6.8-.9 3.1-3 3.9-5.8 4.9-3.4 1.3-6.1 1.5-9.2-.9-2.8-2.1-5-5.6-4-9.2z" />
              </g>
              <g id="features_2_">
                <path d="M70.2 339s1.6-3.9 3-2.3c0 0 3.7 5.5 0 6.3 0 0-4.2-2.1-3-4zM62.7 337.7s-1.6-3.9-3-2.3c0 0-3.7 5.5 0 6.3 0 .1 4.2-2 3-4zM63.1 357H67s-1.5 3.4-3.9 0zM67.9 352.9s0-5.2 2.1-2.4c0 0 1.4 1.4.8 2.4l-.8 1.9s-.6 1.7-2.1-1.9zM60.7 350.6c.8-1.2 1.5-1.6 2.2-.3.5.8.2 1.7-.2 2.5s-.9 2.5-2.1 1.9c-.6-.3-.6-1-.7-1.7-.1-.9.3-1.6.8-2.4z"
                />
              </g>
            </g>
            <g id="lasers" opacity="0.8">
              <line fill="none" stroke="#F04E39" stroke-miterlimit="10" x1="59.9" y1="353" x2="138.5" y2="378.5" />
              <line fill="none" stroke="#F04E39" stroke-miterlimit="10" x1="68.9" y1="353" x2="139.6" y2="370.7" />
            </g>
          </g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#C2AAA6" d="M277.6 407.2c0 2.6-2.1 4.6-4.6 4.6H131.2c-2.6 0-4.6-2.1-4.6-4.6v-143c0-2.6 2.1-4.6 4.6-4.6H273c2.6 0 4.6 2.1 4.6 4.6v143z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#6AB9B8" d="M105.3 324.2c0 1.9-1.6 3.4-3.6 3.4H66.8c-2 0-3.6-1.5-3.6-3.4v-50.3c0-1.9 1.6-3.4 3.6-3.4h34.9c2 0 3.6 1.5 3.6 3.4v50.3z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#BCDDDB" d="M313.7 364.7c0 19.9-16.2 36.1-36.1 36.1-19.9 0-36.1-16.1-36.1-36.1 0-19.9 16.2-36.1 36.1-36.1 20 0 36.1 16.1 36.1 36.1z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M300.5 364.7c0 12.6-10.2 22.9-22.9 22.9-12.6 0-22.9-10.2-22.9-22.9 0-12.6 10.2-22.9 22.9-22.9s22.9 10.2 22.9 22.9z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#33E220" d="M76.1 276.3c0 1-.8 1.9-1.9 1.9-1 0-1.9-.8-1.9-1.9 0-1.1.8-1.9 1.9-1.9 1 0 1.9.8 1.9 1.9z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M75.2 276.3c0 .6-.5 1-1 1-.6 0-1-.5-1-1 0-.6.5-1 1-1 .6 0 1 .4 1 1z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#33E220" d="M86.5 276c0 1-.9 1.9-1.9 1.9-1 0-1.9-.8-1.9-1.9 0-1 .9-1.9 1.9-1.9 1 0 1.9.9 1.9 1.9z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M85.6 276c0 .6-.5 1-1 1s-1-.5-1-1c0-.6.5-1 1-1s1 .5 1 1z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#33E220" d="M96.9 276.5c0 1-.8 1.9-1.9 1.9-1 0-1.9-.8-1.9-1.9 0-1 .8-1.9 1.9-1.9 1 0 1.9.9 1.9 1.9z" />
          <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" cx="95" cy="276.5" rx="1" ry="1" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M279.1 332.3c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5.7-1.5 1.5-1.5c.9 0 1.5.7 1.5 1.5zM301.5 342.9c-.6.6-1.6.6-2.2 0-.6-.6-.6-1.6 0-2.1.6-.6 1.6-.6 2.2 0 .6.6.6 1.5 0 2.1z" />
          <circle fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" cx="309.8" cy="364.7" r="1.5" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M299.2 388.6c-.6-.6-.6-1.6 0-2.2.6-.6 1.6-.6 2.2 0 .6.6.6 1.6 0 2.2-.6.6-1.6.6-2.2 0zM275.9 396.9c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5c-.8.1-1.5-.6-1.5-1.5zM253.6 386.3c.6-.6 1.6-.6 2.2 0 .6.6.6 1.6 0 2.2-.6.6-1.6.6-2.2 0-.6-.6-.6-1.6 0-2.2zM245.2 363c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5zM255.8 340.7c.6.6.6 1.6 0 2.1-.6.6-1.5.6-2.1 0-.6-.6-.6-1.6 0-2.1.6-.6 1.6-.6 2.1 0z"
          />
          <path fill="#383A38" d="M138.69 310.037l42.636 51.292-.385.318-42.633-51.292zM171.8 380.6l-60.3-33.3.3-.4 60.2 33.3 106.6-2.8v.4z" />
          <path fill="#383A38" d="M175.5 360.8v-.4l100.7-7.8.1.5z" />
          <g id="gear3">
            <path fill="#4E3440" d="M291.8 365.2l-.8-.1c0-.8-.1-1.6-.2-2.4l.8-.3c.8-.3 1.3-1.2 1-2-.3-.8-1.1-1.3-2-1l-.8.2c-.3-.7-.7-1.5-1.2-2.1l.6-.5c.6-.6.7-1.6.1-2.2-.6-.6-1.6-.7-2.2-.1l-.6.5c-.6-.5-1.3-1-2-1.4l.3-.8c.3-.8 0-1.7-.8-2.1-.8-.3-1.7 0-2.1.8l-.5.8c-.8-.2-1.6-.4-2.6-.5v-.9c0-.9-.7-1.6-1.5-1.6-.9 0-1.5.7-1.5 1.6v.9c-1 .1-1.5.3-2.2.5l-.3-.8c-.4-.8-1.2-1.1-2-.8-.8.4-1.1 1.3-.8 2.1l.4.9c-.7.4-1.3.9-1.9 1.4l-.7-.6c-.6-.6-1.6-.5-2.2.1-.6.6-.5 1.6.1 2.2l.7.6c-.5.6-.8 1.3-1.2 2.1l-1-.3c-.8-.3-1.7.2-2 1-.3.8.2 1.7 1 2l1 .3c-.1.8-.2 1.5-.2 2.3l-1 .1c-.9.1-1.5.9-1.4 1.7.1.9.9 1.5 1.7 1.4l1.1-.1c.2.8.4 1.5.7 2.2l-.9.5c-.7.4-1 1.4-.6 2.1.4.7 1.4 1 2.1.6l.9-.5 1.5 1.8-.6.9c-.5.7-.4 1.7.3 2.2.7.5 1.7.4 2.2-.3l.6-.9c.7.4 1.4.7 2.1 1l-.2 1c-.2.8.4 1.7 1.2 1.9.8.2 1.7-.4 1.8-1.2l.2-1c.5 0 .9.1 1.4.1h1l.2 1c.2.8 1 1.4 1.9 1.2.8-.2 1.4-1 1.2-1.9l-.2-.9c.8-.2 1.5-.6 2.2-.9l.6.8c.5.7 1.5.9 2.2.3.7-.5.9-1.5.3-2.2l-.5-.7c.6-.5 1.1-1.1 1.6-1.8l.8.5c.8.4 1.7.2 2.1-.6.4-.8.2-1.7-.6-2.1l-.7-.4c.3-.7.6-1.5.8-2.3l.9.1c.9.1 1.6-.5 1.7-1.4.2-1.1-.5-1.9-1.3-2zm-14 5.1c-2.8 0-5.2-2.3-5.2-5.2 0-2.9 2.3-5.2 5.2-5.2 2.9 0 5.2 2.3 5.2 5.2 0 2.8-2.3 5.2-5.2 5.2z"
            />
            <path fill="#78646E" d="M278 356.8c-4.6 0-8.3 3.7-8.3 8.2 0 4.5 3.7 8.2 8.3 8.2 4.5 0 8.2-3.7 8.2-8.2 0-4.5-3.7-8.2-8.2-8.2zm0 11.5c-1.8 0-3.2-1.5-3.2-3.2 0-1.8 1.4-3.2 3.2-3.2 1.8 0 3.2 1.5 3.2 3.2 0 1.7-1.4 3.2-3.2 3.2z" />
          </g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#C2AAA6" d="M282.4 365.1c0 2.4-2 4.3-4.4 4.3-2.4 0-4.4-1.9-4.4-4.3s1.9-4.4 4.4-4.4c2.4 0 4.4 2 4.4 4.4z" />
          <path id="gear1" fill="#4E3440" d="M148.1 327.9l-1.4-.1v-.1c0-1.4-.1-2.8-.4-4.2l1.4-.5c1.4-.5 2.2-2 1.8-3.4-.5-1.4-2-2.2-3.4-1.7l-1.3.4c-.6-1.3-1.3-2.5-2.1-3.7l1.1-1c1.1-1 1.2-2.7.2-3.8-1-1.1-2.7-1.2-3.8-.2l-1 .9c-1.1-.9-2.2-1.8-3.4-2.5l.6-1.3c.6-1.4 0-3-1.4-3.6-1.3-.6-3 0-3.6 1.4l-.4 1.3c-1.3-.4-2.9-.7-3.9-.9v-1.5c0-1.5-1.5-2.7-3-2.7s-3 1.2-3 2.7v1.5c-1 .2-2.7.5-4 .9l-.6-1.4c-.6-1.4-2.2-2-3.6-1.4-1.3.6-2 2.2-1.4 3.6l.6 1.5c-1.2.7-2.3 1.5-3.4 2.4l-1.2-1.1c-1.1-1-2.8-.9-3.8.2s-.9 2.8.2 3.8l1.3 1.1c-.8 1.1-1.5 2.3-2.1 3.6l-1.7-.5c-1.4-.5-2.9.3-3.4 1.7s.3 2.9 1.7 3.4l1.7.5c-.3 1.3-.4 2.7-.4 4.1l-1.8.2c-1.5.1-2.6 1.5-2.4 3 .2 1.5 1.5 2.5 3 2.4l1.8-.2c.3 1.3.7 2.6 1.2 3.9l-1.6.9c-1.3.8-1.7 2.4-1 3.7.8 1.3 2.4 1.7 3.7 1l1.6-.9c.8 1.1 1.7 2.1 2.7 3l-1.1 1.5c-.9 1.2-.6 2.9.6 3.8 1.2.9 2.9.6 3.8-.6l1-1.5c1.2.7 2.4 1.2 3.7 1.7l-.4 1.8c-.3 1.5.6 2.9 2.1 3.2 1.4.3 2.9-.6 3.2-2.1l.4-1.7c.8.1 1.6.1 2.4.1.6 0 1.1 0 1.7-.1l.4 1.8c.3 1.4 1.8 2.4 3.2 2.1 1.5-.3 2.4-1.7 2.1-3.2l-.4-1.6c1.3-.4 2.6-1 3.8-1.6l1 1.4c.9 1.2 2.6 1.5 3.8.6 1.2-.9 1.5-2.6.6-3.8l-.9-1.3c1-.9 2-1.9 2.8-3l1.3.8c1.3.7 3 .3 3.7-1 .7-1.3.3-3-1-3.7l-1.3-.8c.6-1.3 1-2.6 1.4-4l1.5.2c1.5.2 2.8-.9 3-2.4.1-1.5-1-2.8-2.5-3zm-24.3 8.8c-4.9 0-9-4-9-9s4.1-9 9-9c5 0 9 4 9 9 .1 5-4 9-9 9z"
          />
          <path fill="#78646E" d="M124.2 313.3c-7.9 0-14.3 6.4-14.3 14.3s6.4 14.3 14.3 14.3 14.3-6.4 14.3-14.3-6.4-14.3-14.3-14.3zm0 19.9c-3.1 0-5.6-2.5-5.6-5.6 0-3.1 2.5-5.6 5.6-5.6 3.1 0 5.6 2.5 5.6 5.6 0 3.1-2.5 5.6-5.6 5.6z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#C2AAA6" d="M131.8 327.7c0 4.2-3.4 7.6-7.6 7.6s-7.6-3.4-7.6-7.6c0-4.2 3.4-7.5 7.6-7.5s7.6 3.4 7.6 7.5z" />
          <path id="gear2" fill-rule="evenodd" clip-rule="evenodd" fill="#D1D1D1" d="M195 373v-3h-7.4c-.3-2-.9-3.4-1.8-4.7l4.9-5-2.4-2.5-4.9 4.9c-1.3-.9-2.4-1.6-4.4-1.9V354h-4v6.9c-1 .3-2.9.9-4.2 1.8l-4.8-4.9-2.4 2.4 5 5.2c-.9 1.3-1.5 2.6-1.8 4.6H160v3h6.8c.3 2 .9 3.1 1.8 4.4l-4.9 4.9 2.4 2.4 4.7-4.9c1.3.9 3.2 1.6 4.2 1.8v7.3h4v-7.3c2-.3 3.1-.9 4.4-1.8l4.9 4.9 2.4-2.4-4.9-4.9c.9-1.3 1.6-2.4 1.8-4.4h7.4z"
          />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#BCDDDB" d="M184.4 371.4c0 4-3.2 7.2-7.2 7.2s-7.2-3.2-7.2-7.2 3.2-7.2 7.2-7.2 7.2 3.2 7.2 7.2z" />
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M180.4 371.4c0 1.8-1.4 3.2-3.2 3.2-1.8 0-3.2-1.4-3.2-3.2 0-1.8 1.4-3.2 3.2-3.2 1.7 0 3.2 1.4 3.2 3.2z" />
          <g fill-rule="evenodd" clip-rule="evenodd">
            <path fill="#E21E6E" d="M187.5 333.2c0 4.3-3.5 7.8-7.8 7.8s-7.8-3.5-7.8-7.8 3.5-7.8 7.8-7.8c4.3.1 7.8 3.6 7.8 7.8z" />
            <path fill="#FFF" d="M183.9 333.2c0 2.3-1.9 4.2-4.2 4.2-2.3 0-4.2-1.9-4.2-4.2 0-2.3 1.9-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2z" />
          </g>
          <g fill-rule="evenodd" clip-rule="evenodd">
            <path fill="#E21E6E" d="M231.7 333.3c0 4.3-3.5 7.8-7.8 7.8s-7.8-3.5-7.8-7.8 3.5-7.8 7.8-7.8c4.3.1 7.8 3.5 7.8 7.8z" />
            <circle fill="#FFF" cx="223.9" cy="333.3" r="4.2" />
          </g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M142.4 401.4c0 3-2.4 5.5-5.5 5.5-3 0-5.5-2.5-5.5-5.5s2.4-5.5 5.5-5.5c3.1.1 5.5 2.5 5.5 5.5z" />
          <circle fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" cx="269.4" cy="267.9" r="4.6" />
          <circle fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" cx="269.4" cy="267.9" r="3" />
          <g fill-rule="evenodd" clip-rule="evenodd" fill="#6A7589">
            <path d="M269.9 269.5c0 .2-.2.4-.4.4s-.4-.2-.4-.4v-3.2c0-.2.2-.4.4-.4s.4.2.4.4v3.2z" />
            <path d="M271 267.5c.2 0 .4.2.4.4s-.2.4-.4.4h-3.2c-.2 0-.4-.2-.4-.4s.2-.4.4-.4h3.2z" />
          </g>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#78646E" d="M139.7 267.9c0 2.5-2.1 4.6-4.6 4.6-2.6 0-4.6-2.1-4.6-4.6 0-2.5 2.1-4.6 4.6-4.6 2.5 0 4.6 2.1 4.6 4.6z" />
          <circle fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" cx="135.1" cy="267.9" r="3" />
          <g fill-rule="evenodd" clip-rule="evenodd" fill="#6A7589">
            <path d="M135.5 269.5c0 .2-.2.4-.4.4s-.4-.2-.4-.4v-3.2c0-.2.2-.4.4-.4s.4.2.4.4v3.2z" />
            <path d="M136.7 267.5c.2 0 .4.2.4.4s-.2.4-.4.4h-3.2c-.2 0-.4-.2-.4-.4s.2-.4.4-.4h3.2z" />
          </g>
          <path fill="#E4311B" d="M89 314.3c0 4-3.5 7.3-7.8 7.3s-7.8-3.3-7.8-7.3 3.5-7.3 7.8-7.3 7.8 3.3 7.8 7.3z" />
          <g fill="#333">
            <path d="M84.3 316.2l-1.1 1-5.1-4.8 1.1-1z" />
            <path d="M83.2 311.4l1.1 1-5.1 4.8-1.1-1z" />
          </g>
          <path opacity=".2" fill="#602515" d="M81.3 307v14.6c4.3 0 7.8-3.3 7.8-7.3.1-4-3.4-7.3-7.8-7.3z" />
          <g>
            <circle fill="#E21E6E" cx="233.2" cy="398.5" r="8.4" />
            <g fill="#333">
              <path d="M233.6 398.2c1.4 0 2.5 1.1 2.5 2.5s-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5 1.1-2.5 2.5-2.5zM230.4 393.9c.9 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5zM236.5 394.3c.6 0 1.1.5 1.1 1.1s-.5 1.1-1.1 1.1c-.6 0-1.1-.5-1.1-1.1s.4-1.1 1.1-1.1z"
              />
            </g>
          </g>
          <path opacity=".2" fill="#602515" d="M233.4 390.1v16.8c4.6 0 8.4-3.8 8.4-8.4s-3.8-8.4-8.4-8.4z" />
          <g>
            <path fill="#E4311B" d="M86.7 298.2c0 2.8-2.4 5-5.4 5-3 0-5.4-2.2-5.4-5s2.4-5 5.4-5c3 0 5.4 2.2 5.4 5z" />
            <g fill="#333">
              <path d="M78.3 299.5l2.5-1.3-2.5-1.4zM81.9 299.5l2.5-1.3-2.5-1.4z" />
            </g>
          </g>
          <path opacity=".2" fill="#602515" d="M81.3 293.2v10.1c3 0 5.4-2.2 5.4-5 0-2.9-2.4-5.1-5.4-5.1z" />
          <path fill="#FFF" d="M156.6 266.9h66v52.5h-66z" />
          <path fill="#6AB9B8" d="M158.4 269.7h62.1v46.7h-62.1z" />
          <path fill="#FFF" d="M191.6 277h16.7v4.3h-16.7z" />
          <path fill="#FFF" d="M189.9 280.7h16.7v4.3h-16.7zM189.9 287.1H200v4.3h-10.1z" />
          <path opacity=".3" fill="#1E1330" d="M161.9 302.2h26.3v2.1h-26.3z" />
          <path fill="#FFF" d="M209.6 272.7c0 .4-.3.6-.6.6s-.6-.3-.6-.6.3-.6.6-.6c.4 0 .6.3.6.6zM207 272.7c0 .4-.3.6-.6.6-.4 0-.6-.3-.6-.6s.3-.6.6-.6.6.3.6.6zM204.2 272.7c0 .4-.3.6-.6.6-.4 0-.6-.3-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6z" />
          <g>
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M161 275.3h56.9v36.8H161z" />
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#1E1330" d="M161 274.1h56.9v1.5H161z" />
            <path opacity=".3" fill-rule="evenodd" clip-rule="evenodd" fill="#1E1330" d="M168.1 280.6h.3v28.3h-.3zM178.5 280.6h.3v28.3h-.3zM188.8 280.6h.3v28.3h-.3zM173.3 280.6h.3v28.3h-.3zM183.6 280.6h.3v28.3h-.3zM194 280.6h.3v28.3h-.3zM204.3 280.6h.3v28.3h-.3zM199.1 280.6h.3v28.3h-.3zM209.5 280.6h.3v28.3h-.3z"
            />
            <path fill="#DB1F1F" d="M191.9 302.3l-6.2-7-5.3 2.4-5.5-7.3-4.6 10.2h-6.1v-1.2h5.4l5-11.3 6.2 8.2 5.2-2.4 5.4 6.1 5.2-15.9 5.3 5.7 4.5-1.4 5 6.6 3.3.1-.1 1.2-3.7-.1-4.9-6.5-4.4 1.4-4.5-4.8z" />
          </g>
          <g>
            <path fill="#D3D3D3" d="M247.1 317.7c0 1.1-.9 2.1-2.1 2.1h-18.6c-1.1 0-2.1-.9-2.1-2.1v-49.1c0-1.1.9-2.1 2.1-2.1H245c1.1 0 2.1.9 2.1 2.1v49.1z" />
            <path fill="#FFF" d="M239.7 277.3c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z" />
            <path opacity=".3" fill="#1E1330" d="M237.7 277.3c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z" />
            <path opacity=".4" fill="#2B2B2B" d="M230.5 288.7c0 1.2-.9 2.1-2.1 2.1-1.2 0-2.1-.9-2.1-2.1 0-1.2.9-2.1 2.1-2.1 1.1 0 2.1.9 2.1 2.1zM237.7 288.7c0 1.2-.9 2.1-2.1 2.1-1.2 0-2.1-.9-2.1-2.1 0-1.2.9-2.1 2.1-2.1 1.2 0 2.1.9 2.1 2.1zM245 288.7c0 1.2-.9 2.1-2.1 2.1-1.2 0-2.1-.9-2.1-2.1 0-1.2.9-2.1 2.1-2.1 1.2 0 2.1.9 2.1 2.1z"
            />
            <path fill="#4FAD34" d="M229.6 288.7c0 .7-.6 1.2-1.2 1.2-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.6-.1 1.2.5 1.2 1.2z" />
            <path fill="#FFE000" d="M236.9 288.7c0 .7-.6 1.2-1.2 1.2-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.6-.1 1.2.5 1.2 1.2z" />
            <path fill="#FF7F00" d="M244.2 288.7c0 .7-.6 1.2-1.2 1.2-.7 0-1.2-.6-1.2-1.2 0-.7.6-1.2 1.2-1.2.6-.1 1.2.5 1.2 1.2z" />
            <path opacity=".4" fill-rule="evenodd" clip-rule="evenodd" fill="#2B2B2B" d="M244.6 296.6c0 1.1-.9 1.9-1.9 1.9h-14c-1.1 0-1.9-.9-1.9-1.9 0-1.1.9-1.9 1.9-1.9h14c1 0 1.9.8 1.9 1.9z" />
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#2B2B2B" d="M228.4 296.4h14.5v.4h-14.5z" />
            <g fill-rule="evenodd" clip-rule="evenodd" fill="#2B2B2B">
              <path d="M229.1 303.5c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6s.6.3.6.6zM231.5 303.5c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.3-.6.6-.6s.6.3.6.6zM233.8 303.5c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6.4 0 .6.3.6.6zM236.2 303.5c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6s.6.3.6.6zM238.6 303.5c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.3-.6.6-.6s.6.3.6.6zM240.9 303.5c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6.4 0 .6.3.6.6zM243.3 303.5c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.2-.6.6-.6.3 0 .6.3.6.6z"
              />
              <g>
                <path d="M229.1 305.8c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6.6.3.6.6zM231.5 305.8c0 .3-.3.6-.6.6s-.6-.3-.6-.6.3-.6.6-.6.6.3.6.6zM233.8 305.8c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6zM236.2 305.8c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6.6.3.6.6zM238.6 305.8c0 .3-.3.6-.6.6s-.6-.3-.6-.6.3-.6.6-.6.6.3.6.6zM240.9 305.8c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6zM243.3 305.8c0 .3-.3.6-.6.6s-.6-.3-.6-.6.2-.6.6-.6c.3 0 .6.3.6.6z"
                />
              </g>
              <g>
                <path d="M229.1 308.1c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6s.6.3.6.6zM231.5 308.1c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.3-.6.6-.6s.6.3.6.6zM233.8 308.1c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6.4 0 .6.3.6.6zM236.2 308.1c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6s.6.3.6.6zM238.6 308.1c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.3-.6.6-.6s.6.3.6.6zM240.9 308.1c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6.4 0 .6.3.6.6zM243.3 308.1c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.2-.6.6-.6.3 0 .6.3.6.6z"
                />
              </g>
              <g>
                <path d="M229.1 310.4c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6.6.3.6.6zM231.5 310.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6.3-.6.6-.6.6.3.6.6zM233.8 310.4c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6zM236.2 310.4c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6.6.3.6.6zM238.6 310.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6.3-.6.6-.6.6.3.6.6zM240.9 310.4c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6zM243.3 310.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6.2-.6.6-.6c.3 0 .6.3.6.6z"
                />
              </g>
              <g>
                <path d="M229.1 312.7c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6s.3-.6.6-.6.6.3.6.6zM231.5 312.7c0 .3-.3.6-.6.6s-.6-.2-.6-.6.3-.6.6-.6.6.3.6.6zM233.8 312.7c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6zM236.2 312.7c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6s.3-.6.6-.6.6.3.6.6zM238.6 312.7c0 .3-.3.6-.6.6s-.6-.2-.6-.6.3-.6.6-.6.6.3.6.6zM240.9 312.7c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6s.3-.6.6-.6c.4 0 .6.3.6.6zM243.3 312.7c0 .3-.3.6-.6.6s-.6-.2-.6-.6.2-.6.6-.6c.3 0 .6.3.6.6z"
                />
              </g>
              <g>
                <path d="M229.1 315c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6s.6.3.6.6zM231.5 315c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.3-.6.6-.6s.6.3.6.6zM233.8 315c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6.4 0 .6.3.6.6zM236.2 315c0 .3-.2.6-.6.6-.3 0-.6-.3-.6-.6s.3-.6.6-.6.6.3.6.6zM238.6 315c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.3-.6.6-.6s.6.3.6.6zM240.9 315c0 .3-.2.6-.6.6-.3 0-.6-.2-.6-.6 0-.3.3-.6.6-.6.4 0 .6.3.6.6zM243.3 315c0 .3-.3.6-.6.6s-.6-.2-.6-.6c0-.3.2-.6.6-.6.3 0 .6.3.6.6z"
                />
              </g>
            </g>
          </g>
          <path fill="#78646E" d="M126.3 444.9l4.7 5.9v4.2l-4.3 5.3z" />
          <path fill="#FFF" d="M32 336v7.3c0 3 1.8 5.7 4.5 5.7H46v1h-9.5c-3.1 0-5.5-3.3-5.5-6.7V321c0-3.4 2.4-5.9 5.5-5.9H38v1h-1.5c-2.7 0-4.5 2-4.5 4.9v15z" />
          <path fill="#FFF" d="M45.2 349.5l4.5-2.7 4.1 2.8-4.5-.5-3.6 1.1z" />
          <path fill="#FFF" d="M45.2 350.5l4.5 2.3 4.1-2.6-4.5.6-3.6-1z" />
          <path fill="#6AB9B8" d="M46 351.2h-1.6c-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4H46c.8 0 1.4.6 1.4 1.4 0 .8-.7 1.4-1.4 1.4z" />
        </svg>
        <!--first-->
      
        <svg class="second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356.1 349.4">
          <path class="sm-foot" fill="#4E3440" d="M72 301.5h17v32H72zM331 302h17v32h-17z" />
          <path fill="#78646E" d="M186.5 285.5c-2.8 0-5-2.2-5-5v-13c0-2.8 2.2-5 5-5s5 2.2 5 5v13c0 2.7-2.3 5-5 5zM77 285c-2.8 0-5-2.2-5-5v-13c0-2.8 2.2-5 5-5 2.7 0 5 2.2 5 5v13c0 2.8-2.2 5-5 5z" />
          <g id="arm">
            <path fill="#C2AAA6" d="M235.1 65.7c0-3-2.4-5.4-5.4-5.4H105.1v-9.4-.7l124.6.1c8.5 0 15.5 6.9 15.5 15.5v54.4h-10.1V65.7z" />
            <g id="r-hand">
              <path fill="#C2AAA6" d="M260.5 161.4l.2-.8 2-7.1.2-.8 2.3-8.2.1-.2h-.2l.2-.1-.3-.4-4.2-6.3-.5-.7-3.6-5.3-.5-.7-4.1-6.1-.5-.7-2-2.9c-1.1 2.5-3.8 4.1-6.6 3.6l-2.5-.4 2.9 4.3.5.7 4.1 6.1.5.7 3.4 5.1.5.7 3.2 4.7.1.1-.1.7-.3 4.1-.1.8-.6 7.3-.1.8-.5 5.5 4.7.8 1.8-5.3z"
              />
              <g fill="#78646E">
                <path d="M254.3 166l-.5 4.8 3.8.7 1.4-4.8zM252.3 124.9l-8.2 4.6-.4-.7 8.1-4.6zM256.8 131.6l-8.1 4.6-.5-.7 8.2-4.6zM260.9 137.6l-8.3 4.3-.5-.7 8.3-4.3zM265.2 144.4h.2l-.1.2-9.5 2.9.1-.7-.1-.2 9.3-2.8.3.5zM263 152.8l-.3.8-7.3-1.2.1-.8zM260.7 160.7l-.2.7-5.8-.9.1-.8z"
                />
              </g>
            </g>
            <g id="l-hand">
              <path fill="#C2AAA6" d="M221.9 162l-.2-.8-2-7.1-.2-.8-2.3-8.2-.2-.1h.2l-.2-.1.3-.4 4.2-6.3.5-.7 3.6-5.3.5-.7 4.1-6.1.5-.7 2-2.9c1.1 2.5 3.8 4.1 6.6 3.6l2.5-.4-2.9 4.3-.5.7-4.1 6.1-.5.7-3.4 5.1-.5.7-3.2 4.7-.1.1.1.7.3 4.1.1.8.6 7.3.1.8.5 5.5-4.7.8-1.7-5.4z"
              />
              <g fill="#78646E">
                <path d="M228.1 166.6l.5 4.8-3.8.7-1.4-4.8zM230.1 125.5l8.2 4.6.4-.7-8.1-4.6zM225.5 132.2l8.2 4.6.5-.7-8.2-4.6zM221.5 138.2l8.3 4.3.5-.6-8.3-4.4zM217.2 145h-.2l.1.2 9.5 2.9-.1-.7.1-.1-9.3-2.8-.3.4zM219.4 153.4l.3.8 7.3-1.2-.1-.8zM221.7 161.3l.2.7 5.8-.9-.1-.8z"
                />
              </g>
            </g>
            <path fill="#6AB9B8" d="M235.2 116h10.1c3.4.1 6.1 2.8 6.1 6.2 0 .7-.1 1.4-.3 2-.8 2.4-3.1 4.1-5.8 4.1h-9.4c-2.9 0-5.3-2-6-4.6-.1-.5-.2-1-.2-1.5.1-3.3 2.4-5.9 5.5-6.2z" />
          </g>
          <g fill="#FFF">
            <path d="M153.8 158.9v-15c0-2-1.6-3.5-3.5-3.5h-10.5v-.5h10.5c2.2 0 4 1.8 4 4.1v15h-.5zM177.1 105.3v37.8c0 2 1 3.5 2.2 3.5h23.6v.5h-23.6c-1.4 0-2.6-1.8-2.6-4.1v-37.8h.4z" />
            <path d="M135.4 126.3v10c0 2 1.6 3.5 3.5 3.5h1.2v.5H139c-2.2 0-4-1.8-4-4.1v-10h.4zM157.2 108.8v-4.9c0-2 1.6-3.5 3.5-3.5h6.7v-.5h-6.7c-2.2 0-4.1 1.8-4.1 4.1v4.9h.6z" />
            <path d="M135.4 128v-4.9c0-2 1.6-3.5 3.5-3.5h6.7v-.6H139c-2.2 0-4 1.8-4 4.1v4.9h.4zM145.7 119.1h7.4c2 0 3.5-1.6 3.5-3.5v-6.7h.5v6.7c0 2.2-1.8 4.1-4.1 4.1h-7.4v-.6zM176.8 108.8v-4.9c0-2-1.6-3.5-3.5-3.5H164v-.5h9.3c2.2 0 4 1.8 4 4.1v4.9h-.5zM207.4 155.6v-4.9c0-2-1.6-3.5-3.5-3.5h-9.3v-.5h9.3c2.2 0 4 1.8 4 4.1v4.9h-.5zM207.4 154.8v37.8c0 2-.7 3.5-1.6 3.5h-16.9v.5h16.9c1 0 1.8-1.8 1.8-4.1v-37.8h-.2z"
            />
          </g>
          <g id="panda">
            <g id="limbs">
              <path id="leg2" d="M255.3 210.1s-.5 9.9-2 13.1c-1.6 3.4 1.4 7.5 0 9.2-1.4 1.7-11.9 1.1-11.9 1.1s-1.3-2 0-9.2c1.3-7-.8-7.1-.8-7.1l14.7-7.1h-.4" />
              <path id="leg1" d="M224.2 210.1s1.9 9.6 3 13.1c.9 3.1-1.5 7.5 0 9.2 1.5 1.7 12.4 1.1 12.4 1.1s1.1-2 0-9.2c-1.1-7.4.9-7.1.9-7.1l-16.3-7.1" />
              <path id="arm2" d="M248.9 190.8s7.8 1.8 9.2 12.2c1.4 10.4 2.5 14-1.4 14.7-3.9.7-5.6-9.9-5.6-9.9l-2.2-17z" />
              <path id="arm1" d="M230.3 191.3s-7.3 1.9-8.6 12.7c-1.3 10.8-2.3 14.5 1.3 15.2 3.6.7 5.3-10.3 5.3-10.3l2-17.6z" />
            </g>
            <g id="body">
              <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="269.255" y1="417.623" x2="288.927" y2="383.542" gradientTransform="matrix(.918 0 0 -.918 -16.264 573.314)">
                <stop offset="0" stop-color="#FFF" />
                <stop offset=".2" stop-color="#FCFCFC" />
                <stop offset=".4" stop-color="#F2F2F2" />
                <stop offset=".6" stop-color="#E1E1E1" />
                <stop offset=".7" stop-color="#C9C9C9" />
                <stop offset=".9" stop-color="#ABABAB" />
                <stop offset="1" stop-color="#919191" />
              </linearGradient>
              <ellipse fill="url(#SVGID_1_)" cx="240" cy="205.5" rx="16.1" ry="18.7" />
              <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="279.017" y1="388.282" x2="279.017" y2="421.232" gradientTransform="matrix(.918 0 0 -.918 -16.264 573.314)">
                <stop offset="0" stop-color="#FFF" />
                <stop offset=".2" stop-color="#FCFCFC" />
                <stop offset=".3" stop-color="#F2F2F2" />
                <stop offset=".4" stop-color="#E1E1E1" />
                <stop offset=".6" stop-color="#C9C9C9" />
                <stop offset=".7" stop-color="#ABABAB" />
                <stop offset=".8" stop-color="#858585" />
                <stop offset=".9" stop-color="#5A5A5A" />
                <stop offset="1" stop-color="#2E2E2E" />
              </linearGradient>
              <ellipse opacity=".4" fill="url(#SVGID_2_)" cx="240" cy="201.6" rx="14.6" ry="15.1" />
              <path opacity=".9" fill="#FFF" d="M250.5 197.1c-6.7 4.1-14 6.4-20.1-.8-3.1 3.2-3.8 10.3-3 14.4.9 4.7 5.3 7.4 10 8.1 8.9 1.3 17.2-4.9 15.9-14.1.2 1-.3-4.8-2.8-7.6z" />
            </g>
            <g id="head">
              <g id="face">
                <path fill="#ABABAB" d="M228.4 186.9c1.8-5.3 5.6-14.5 12.1-15 5.9-.5 10.4 8.4 11.5 13 .6 2.6.6 5.8-.2 8.4-1.1 3.9-3.8 4.8-7.2 6.1-4.2 1.5-7.6 1.9-11.4-1.1-3.4-2.6-6.1-6.9-4.8-11.4z" />
                <path fill="#EAEAEA" d="M228.4 186.6c1.8-5.3 5.6-14.5 12.1-15 5.9-.5 10.4 8.4 11.5 13 .6 2.6.6 5.8-.2 8.4-1.1 3.9-3.8 4.8-7.2 6.1-4.2 1.5-7.6 1.9-11.4-1.1-3.4-2.6-6.1-6.9-4.8-11.4z" />
                <path fill="#FFF" d="M229.1 185.8c1.7-5 5.3-13.7 11.4-14.2 5.6-.4 9.8 8 10.8 12.3.6 2.5.5 5.5-.2 7.9-1.1 3.7-3.5 4.5-6.8 5.7-3.9 1.5-7.1 1.8-10.8-1-3.1-2.4-5.6-6.5-4.4-10.7z" />
              </g>
              <g id="features">
                <path d="M245.8 175.3s1.8-4.5 3.5-2.7c0 0 4.3 6.3 0 7.3 0 .1-4.9-2.3-3.5-4.6zM237.2 173.9s-1.8-4.5-3.5-2.7c0 0-4.3 6.3 0 7.3-.1 0 4.8-2.4 3.5-4.6zM237.5 196.3h4.6s-1.8 3.9-4.6 0zM243.1 191.5s0-6 2.4-2.8c0 0 1.7 1.6.9 2.8l-.9 2.2c0-.1-.5 1.9-2.4-2.2zM234.8 188.9c.9-1.4 1.7-1.8 2.6-.3.5.9.2 2-.3 2.9-.5.9-1.1 2.9-2.4 2.2-.7-.4-.7-1.2-.8-1.9-.2-1.3.3-2 .9-2.9z"
                />
              </g>
            </g>
          </g>
          <g id="paint" opacity=".8">
            <circle opacity=".58" cx="280.7" cy="200.3" r="5.7" />
            <path d="M277 190.3c.4 7.9-5.7 14.6-13.6 15-7.9.4-14.6-5.7-15-13.6-.4-7.9 5.7-14.6 13.6-15 7.9-.3 14.6 5.7 15 13.6z" />
            <circle cx="263.3" cy="215.6" r="2.2" />
            <path opacity=".41" d="M256.7 204.2c.2 4.6-3.3 8.6-8 8.8-4.6.2-8.6-3.3-8.8-8-.2-4.6 3.3-8.6 8-8.8 4.6-.2 8.6 3.3 8.8 8z" />
            <path d="M242.8 185.1c.1 1.1-.8 2-1.8 2-1.1.1-2-.8-2-1.8-.1-1.1.8-2 1.8-2 1-.1 1.9.8 2 1.8z" />
            <circle opacity=".54" cx="223.2" cy="190.2" r="15.7" />
            <path opacity=".41" d="M239.2 173.1c.2 3.1-2.3 5.8-5.4 6-3.1.2-5.8-2.3-6-5.4-.2-3.1 2.3-5.8 5.4-6 3.2-.2 5.9 2.2 6 5.4zM277.5 200.6c.2 3.3-2.3 6-5.6 6.2-3.2.2-6-2.3-6.2-5.6-.2-3.2 2.3-6 5.6-6.2 3.3-.1 6.1 2.4 6.2 5.6z" />
            <path opacity=".58" d="M248.1 200.9c.2 3.6-2.6 6.8-6.3 6.9-3.6.2-6.8-2.6-6.9-6.3-.2-3.6 2.6-6.8 6.3-6.9 3.7-.2 6.8 2.7 6.9 6.3z" />
            <path opacity=".52" d="M254.3 176.8c0 .9-.7 1.7-1.6 1.8-.9.1-1.7-.7-1.8-1.6 0-.9.7-1.7 1.6-1.8 1-.1 1.8.6 1.8 1.6z" />
            <circle cx="188.1" cy="174.4" r="2.9" />
            <path opacity=".59" d="M193.5 194.8c.1 1.2-.9 2.2-2.1 2.3-1.2.1-2.2-.9-2.3-2.1-.1-1.2.9-2.2 2.1-2.3 1.2 0 2.2.9 2.3 2.1z" />
            <circle cx="165.3" cy="193" r="3.6" />
            <path opacity=".41" d="M274.6 207.1c.2 4.4-3.2 8.1-7.5 8.3-4.4.2-8.1-3.2-8.3-7.5-.2-4.4 3.2-8.1 7.5-8.3 4.4-.3 8.1 3.1 8.3 7.5z" />
          </g>
          <path fill="#C2AAA6" d="M122.5 243.1c0-5.8 4.8-10.5 10.7-10.5h141.3c5.9 0 10.7 4.7 10.7 10.5s-4.8 10.5-10.7 10.5H133.2c-5.9 0-10.7-4.7-10.7-10.5zm10.7-8c-4.5 0-8.2 3.6-8.2 8s3.7 8 8.2 8h141.3c4.5 0 8.2-3.6 8.2-8s-3.7-8-8.2-8H133.2z" />
          <path fill="#C2AAA6" d="M267.4 242.9c0 4 3.2 7.2 7.2 7.2s7.2-3.2 7.2-7.2-3.2-7.2-7.2-7.2-7.2 3.2-7.2 7.2z" />
          <path fill="#FFF" d="M270.9 242.9c0 2 1.6 3.7 3.7 3.7s3.7-1.6 3.7-3.7c0-2-1.6-3.7-3.7-3.7s-3.7 1.7-3.7 3.7z" />
          <path fill="#C2AAA6" d="M249.6 243c0 4 3.2 7.2 7.2 7.2s7.2-3.2 7.2-7.2-3.2-7.2-7.2-7.2-7.2 3.2-7.2 7.2z" />
          <path fill="#FFF" d="M253.1 243c0 2 1.6 3.7 3.7 3.7s3.7-1.6 3.7-3.7c0-2-1.6-3.7-3.7-3.7s-3.7 1.7-3.7 3.7z" />
          <path fill="#C2AAA6" d="M231.9 243.1c0 4 3.2 7.2 7.2 7.2s7.2-3.2 7.2-7.2-3.2-7.2-7.2-7.2-7.2 3.3-7.2 7.2z" />
          <path fill="#FFF" d="M235.4 243.1c0 2 1.6 3.7 3.7 3.7s3.7-1.6 3.7-3.7c0-2-1.6-3.7-3.7-3.7s-3.7 1.7-3.7 3.7z" />
          <path fill="#C2AAA6" d="M214.2 243.2c0 4 3.2 7.2 7.2 7.2s7.2-3.2 7.2-7.2-3.2-7.2-7.2-7.2c-4 .1-7.2 3.3-7.2 7.2z" />
          <path fill="#FFF" d="M217.7 243.2c0 2 1.6 3.7 3.7 3.7 2 0 3.7-1.6 3.7-3.7 0-2-1.6-3.7-3.7-3.7-2.1.1-3.7 1.7-3.7 3.7z" />
          <path fill="#C2AAA6" d="M196.4 243.4c0 4 3.2 7.2 7.2 7.2s7.2-3.2 7.2-7.2-3.2-7.2-7.2-7.2c-3.9 0-7.2 3.2-7.2 7.2z" />
          <path fill="#FFF" d="M200 243.4c0 2 1.6 3.7 3.7 3.7 2 0 3.7-1.6 3.7-3.7 0-2-1.6-3.7-3.7-3.7s-3.7 1.6-3.7 3.7z" />
          <path fill="#78646E" d="M192 269H40c-2.8 0-5-2.2-5-5V163c0-2.8 2.2-5 5-5h152c2.8 0 5 2.2 5 5v101c0 2.8-2.2 5-5 5z" />
          <circle fill="#F7F7F7" cx="67.8" cy="55.4" r="36" />
          <path fill="#78646E" d="M60.7 111.5c0 .3.3.6.6.6h13.6c.3 0 .6-.3.6-.6V91.2c0-.3-.3-.6-.6-.6H61.3c-.3 0-.6.3-.6.6v20.3z" />
          <path fill="#C2AAA6" d="M27.3 54.1c0 22.5 18.3 40.8 40.8 40.8 22.5 0 40.8-18.3 40.8-40.8 0-22.5-18.3-40.8-40.8-40.8-22.6-.1-40.8 18.2-40.8 40.8zm6.2 0C33.5 35 49 19.5 68.1 19.5s34.6 15.5 34.6 34.6-15.5 34.6-34.6 34.6-34.6-15.5-34.6-34.6z" />
          <g id="needle1">
            <path fill="#DE7190" d="M66.5 55.6l3.1-3.1-17.1-13.9z" />
            <path fill="#AAD2D0" d="M69.6 52.5l-3.1 3.1 17.2 13.9z" />
          </g>
          <g fill="none" stroke="#00D2C8" stroke-miterlimit="10">
            <path d="M66.1 23.1v9.3M73.8 25.1l-1.6 6M81.1 27.6L78 32.9M87.5 31.8l-4.4 4.4M92.6 37.6l-5.4 3.1M96 44.5l-6 1.6M99.1 52.1h-9.3M97 59.8l-6-1.6M94.6 67.1L89.2 64M90.3 73.5l-4.4-4.4M84.5 78.6l-3.1-5.4M77.6 82L76 76M70 85l.1-9.2M62.4 83l1.6-6M55.1 80.5l3.1-5.3M48.6 76.3l4.4-4.4M43.6 70.5l5.3-3.1M40.1 63.6l6-1.6M37.1 56h9.3M39.1 48.3l6 1.7M41.6 41l5.4 3.1M45.9 34.6l4.3 4.4M51.6 29.5l3.1 5.4M58.5 26.1l1.6 6"
            />
          </g>
          <path fill="#C2AAA6" d="M64.1 15.2c0 .3.3.6.6.6h6.7c.3 0 .6-.3.6-.6V8.1c0-.3-.3-.6-.6-.6h-6.7c-.3 0-.6.3-.6.6v7.1z" />
          <path fill="#78646E" d="M64.7 7.4h6.7c.3 0 .6.3.6.6v1.7c0-.3-.3-.6-.6-.6h-6.7c-.3 0-.6.3-.6.6V8.1c0-.4.3-.7.6-.7z" />
          <path fill="#C2AAA6" d="M9.5 192.1c0 4.1 3.3 7.3 7.3 7.3h102.8c4.1 0 7.3-3.3 7.3-7.3v-81.6c0-4.1-3.3-7.3-7.3-7.3H16.9c-4.1 0-7.3 3.3-7.3 7.3v81.6z" />
          <path fill="#78646E" d="M16.9 195.7h102.8c4.1 0 7.3-3.3 7.3-7.4v3.8c0 4.1-3.3 7.3-7.3 7.3H16.9c-4.1 0-7.3-3.3-7.3-7.3v-3.8c-.1 4.1 3.2 7.4 7.3 7.4z" />
          <path fill="#F7F7F7" d="M90.7 127.4c0 4.1 3.3 7.3 7.3 7.3h12.5c4.1 0 7.3-3.3 7.3-7.3v-7.3c0-4.1-3.3-7.3-7.3-7.3H98c-4.1 0-7.3 3.3-7.3 7.3v7.3z" />
          <path fill="#519B9D" d="M110.9 130.4c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-13.2c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5v13.2z" />
          <path fill="#E21E6E" d="M105.5 130.4c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-13.2c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5v13.2z" />
          <path fill="#E29B1E" d="M100.1 130.4c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-13.2c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5v13.2z" />
          <path fill="#026B6F" d="M94.7 130.4c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-13.2c0-.8-.7-1.5-1.5-1.5s-1.5.7-1.5 1.5v13.2z" />
          <circle id="circle" fill="#78646E" cx="26.2" cy="176.8" r="7.5" />
          <g>
            <path fill="#F7F7F7" d="M16.6 139.8c0 4.1 3.3 7.3 7.3 7.3h38.5c4.1 0 7.3-3.3 7.3-7.3v-21.6c0-4.1-3.3-7.3-7.3-7.3H24c-4.1 0-7.3 3.3-7.3 7.3v21.6z" />
            <path id="graphline" fill="none" stroke="#519B9D" stroke-miterlimit="10" d="M69.7 131.6h-4.3l-3-12.3-2.6 20-1.5-10h-3.2l-1.3-5.2v10.7L52 123.9v12.9l-1.6-13.2-1.2 7.1-1.1-11.4-.9 16.4-1.8-8.9h-5.1l-1.6 12.5-4.5-24.6-1.6 10.8-4.1-.5-3 17.7-3-14h-5.8" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M119.3 158.6c.5 0 .8-.4.8-.8s-.4-.8-.8-.8H76.2c-.5 0-.8.4-.8.8 0 .5.4.8.8.8h43.1z" />
            <path fill="#E29B1E" d="M82.8 159.7c.2 0 .3-.1.3-.3v-2.8c0-.2-.1-.3-.3-.3H80c-.2 0-.3.1-.3.3v2.8c0 .2.1.3.3.3h2.8z" />
            <path fill="#E21E6E" d="M81.5 159.4c.1 0 .3-.1.3-.3v-2.2c0-.1-.1-.3-.3-.3-.1 0-.3.1-.3.3v2.2c.1.2.2.3.3.3z" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M119.3 164.8c.5 0 .8-.4.8-.8s-.4-.8-.8-.8H76.2c-.5 0-.8.4-.8.8 0 .5.4.8.8.8h43.1z" />
            <path fill="#E29B1E" d="M98.4 165.9c.2 0 .3-.1.3-.3v-2.8c0-.2-.1-.3-.3-.3h-2.8c-.2 0-.3.1-.3.3v2.8c0 .2.1.3.3.3h2.8z" />
            <path fill="#E21E6E" d="M97.1 165.5c.1 0 .3-.1.3-.3V163c0-.1-.1-.3-.3-.3-.1 0-.3.1-.3.3v2.2c0 .2.1.3.3.3z" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M119.3 170.7c.5 0 .8-.4.8-.8s-.4-.8-.8-.8H76.2c-.5 0-.8.4-.8.8 0 .5.4.8.8.8h43.1z" />
            <path fill="#E29B1E" d="M108 171.8c.2 0 .3-.1.3-.3v-2.8c0-.2-.1-.3-.3-.3h-2.8c-.2 0-.3.1-.3.3v2.8c0 .2.1.3.3.3h2.8z" />
            <path fill="#E21E6E" d="M106.7 171.5c.1 0 .3-.1.3-.3V169c0-.1-.1-.3-.3-.3-.1 0-.3.1-.3.3v2.2c0 .2.1.3.3.3z" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M119.3 177.1c.5 0 .8-.4.8-.8s-.4-.8-.8-.8H76.2c-.5 0-.8.4-.8.8 0 .5.4.8.8.8h43.1z" />
            <path fill="#E29B1E" d="M89.5 178.2c.2 0 .3-.1.3-.3v-2.8c0-.2-.1-.3-.3-.3h-2.8c-.2 0-.3.1-.3.3v2.8c0 .2.1.3.3.3h2.8z" />
            <path fill="#E21E6E" d="M88.2 177.8c.1 0 .3-.1.3-.3v-2.2c0-.1-.1-.3-.3-.3-.1 0-.3.1-.3.3v2.2c0 .2.1.3.3.3z" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M119.3 183.2c.5 0 .8-.4.8-.8s-.4-.8-.8-.8H76.2c-.5 0-.8.4-.8.8 0 .5.4.8.8.8h43.1z" />
            <path fill="#E29B1E" d="M113 184.2c.2 0 .3-.1.3-.3v-2.8c0-.2-.1-.3-.3-.3h-2.8c-.2 0-.3.1-.3.3v2.8c0 .2.1.3.3.3h2.8z" />
            <path fill="#E21E6E" d="M111.7 183.9c.1 0 .3-.1.3-.3v-2.2c0-.1-.1-.3-.3-.3-.1 0-.3.1-.3.3v2.2c0 .2.1.3.3.3z" />
          </g>
          <g>
            <path fill="#E4311B" d="M248.4 307.1c0 6.3 6.3 11.4 14.1 11.4h8.2c7.8 0 14.1-5.1 14.1-11.4v-.1h4.7v.1c0 8.4-8.4 15.2-18.8 15.2h-8.2c-10.4 0-18.8-6.8-18.8-15.2v-.1l4.7.1z" />
            <path fill="#519B9D" d="M249.9 308.2c.2 0 .4-.2.4-.4v-5.3c0-.2-.2-.4-.4-.4h-7.3c-.2 0-.4.2-.4.4v5.3c0 .2.2.4.4.4h7.3zM290.9 308.2c.2 0 .4-.2.4-.4v-5.3c0-.2-.2-.4-.4-.4h-7.3c-.2 0-.4.2-.4.4v5.3c0 .2.2.4.4.4h7.3z" />
          </g>
          <g>
            <path fill="#78646E" d="M331.6 239.4h14.3v44.7h-14.3z" />
            <path fill="#78646E" d="M331.5 240.6v-7.7c0-16.9-13.7-30.6-30.6-30.6h-2.7v-14.4h2.7c24.8 0 45 20.2 45 45v7.7h-14.4z" />
            <path fill="#78646E" d="M299.5 187.9v14.4s-15.4.1-18.6 13c0-4.8-.1-35.9 0-39.2 2 11.3 18.6 11.8 18.6 11.8z" />
            <path fill="#4E3440" d="M330.4 239.4h16.7v2.2h-16.7zM298.8 186.8h2.2v16.7h-2.2zM280.8 215.8c0 .4-.6.8-1.4.8-.8 0-1.4-.4-1.4-.8v-40.9c0-.4.6-.8 1.4-.8.8 0 1.4.4 1.4.8v40.9z" />
          </g>
          <path fill="#16929C" d="M71.9 277.7h276.9v27H71.9z" />
          <g>
            <path fill="#519B9D" d="M187.6 305c0-.5.4-1 1-1h8.4c.5 0 1 .4 1 1l-1 5.1c0 .5-.3 1-.8 1h-6.7c-.4 0-.8-.4-.8-1l-1.1-5.1z" />
            <path fill="#16929C" d="M186.3 305c0-.6.5-1.1 1.1-1.1H198c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1h-10.6c-.6 0-1.1-.5-1.1-1.1z" />
          </g>
          <g>
            <path fill="#E4311B" d="M171.6 305c0-.5.4-1 1-1h8.4c.5 0 1 .4 1 1l-1 5.1c0 .5-.3 1-.8 1h-6.7c-.4 0-.8-.4-.8-1l-1.1-5.1z" />
            <path fill="#16929C" d="M170.3 305c0-.6.5-1.1 1.1-1.1H182c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1h-10.6c-.6 0-1.1-.5-1.1-1.1z" />
          </g>
          <g>
            <path fill="#E29B1E" d="M155.6 305c0-.5.4-1 1-1h8.4c.5 0 1 .4 1 1l-1 5.1c0 .5-.3 1-.8 1h-6.7c-.4 0-.8-.4-.8-1l-1.1-5.1z" />
            <path fill="#16929C" d="M154.3 305c0-.6.5-1.1 1.1-1.1H166c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1h-10.6c-.6 0-1.1-.5-1.1-1.1z" />
          </g>
          <g>
            <circle fill="#E21E6E" cx="55.8" cy="251.6" r="8.4" />
            <g fill="#333">
              <path d="M56.2 251.3c1.4 0 2.5 1.1 2.5 2.5s-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5 1.1-2.5 2.5-2.5zM53 246.9c.9 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5zM59.1 247.4c.6 0 1.1.5 1.1 1.1 0 .6-.5 1.1-1.1 1.1-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1z"
              />
            </g>
          </g>
          <g>
            <circle fill="#FFF" cx="167.6" cy="182.1" r="14.1" />
            <path fill="#4E3440" d="M153.6 176.6c-3 7.7.8 16.4 8.5 19.4s16.4-.7 19.4-8.4-.7-16.4-8.5-19.4c-7.6-3-16.3.7-19.4 8.4zm25.8 10.2c-2.6 6.5-10 9.7-16.5 7.2-6.5-2.6-9.7-10-7.2-16.5 2.6-6.5 10-9.7 16.5-7.2 6.6 2.6 9.8 10 7.2 16.5z" />
            <g id="needle5">
              <path fill="#FC326C" d="M168.3 181.8l-1.5.7-2.4-7.8z" />
              <path fill="#00D2C8" d="M166.8 182.5l1.5-.7 2.5 7.7z" />
            </g>
            <g fill="none" stroke="#00D2C8" stroke-miterlimit="10">
              <path d="M157.3 177.3l3.1 1.2M156.9 180.2l2.3.2M156.8 183l2.2-.3M157.4 185.8l2.1-.9M158.7 188.3l1.8-1.4M160.6 190.4l1.3-1.8M162.7 192.4l1.3-3.1M165.6 192.8l.3-2.3M168.5 192.9l-.4-2.2M171.2 192.3l-.9-2.1M173.7 191l-1.4-1.7M175.8 189.1l-1.8-1.3M177.9 187l-3.2-1.3M178.2 184.1l-2.2-.3M178.4 181.2l-2.3.4M177.8 178.5l-2.1.9M176.5 176l-1.8 1.4M174.6 173.9l-1.4 1.8M172.4 171.8l-1.2 3.2M169.5 171.5l-.2 2.2M166.7 171.3l.3 2.3M163.9 171.9l.9 2.1M161.4 173.2l1.4 1.8M159.3 175.1l1.9 1.4"
              />
            </g>
          </g>
          <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" cx="343.3" cy="281.5" rx="1" ry="1" />
          <g class="aim2-off" >
            <circle id="aim2" fill-rule="evenodd" clip-rule="evenodd" fill="#FF0000" cx="244.4" cy="290.4" r="30.0" />
          </g>
          <!--aim2-->
          <circle class="hama-panda" id="button" fill="#FF0000" cx="244.7" cy="290.3" r="7.5" />
          <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" cx="328.3" cy="281.5" rx="1" ry="1" />
        </svg>
        <!--second-->
      
        <svg class="third" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 348.4 199">
          <rect class="foot" x="13" y="0" fill="#4E3440" width="15" height="110" />
          <path fill="#4E3440" d="M12.6 158.9h18.9v35.6H12.6zM182.7 6.6h161.2v153.7H182.7z" />
          <path opacity=".49" fill-rule="evenodd" clip-rule="evenodd" fill="#6AB9B8" d="M275.5 69.9h-63.4c-2.8 0-5-2.2-5-5V36c0-2.8 2.2-5 5-5h63.4c2.8 0 5 2.2 5 5v28.9c0 2.8-2.2 5-5 5z" />
          <g fill-rule="evenodd" clip-rule="evenodd">
            <path fill="#E21E6E" d="M231 45.1c0 4.8-3.9 8.6-8.6 8.6-4.8 0-8.6-3.9-8.6-8.6 0-4.8 3.9-8.6 8.6-8.6 4.7 0 8.6 3.8 8.6 8.6z" />
            <circle fill="#FFF" cx="222.3" cy="45.1" r="4.7" />
          </g>
          <path opacity=".42" fill="#F7F7F7" d="M121.6 110H88.2c-5.9 0-10.7-4.8-10.7-10.7V40.4c0-5.9 4.8-10.7 10.7-10.7h33.4c5.9 0 10.7 4.8 10.7 10.7v58.8c0 5.9-4.8 10.8-10.7 10.8z" />
          <g fill="#FFF">
            <path d="M230.6 110.6V89.4c0-2.8 2.5-5 5.5-5h16.2v-.7h-16.2c-3.4 0-6.2 2.6-6.2 5.7v21.2h.7zM194.4 35v53.3c0 2.8-2.4 5-5.5 5h-57.6v.7h57.6c3.4 0 6.2-2.6 6.2-5.7V35h-.7z" />
            <path d="M258.9 64.7v14c0 2.8-2.4 5-5.5 5h-1.8v.7h1.8c3.4 0 6.2-2.6 6.2-5.7v-14h-.7zM225.3 40v-6.9c0-2.8-2.4-5-5.5-5h-10.4v-.7h10.4c3.5 0 6.2 2.6 6.2 5.7V40h-.7z" />
            <path d="M258.9 67.1v-6.9c0-2.8-2.4-5-5.5-5H243v-.7h10.4c3.4 0 6.2 2.6 6.2 5.7v6.9h-.7z" />
            <path d="M243.1 54.5h-11.4c-3 0-5.5-2.2-5.5-5V40h-.8v9.5c0 3.1 2.8 5.7 6.2 5.7H243v-.7zM195.2 40v-6.9c0-2.8 2.4-5 5.5-5H215v-.7h-14.3c-3.4 0-6.2 2.6-6.2 5.7V40h.7zM121.9 105.9V99c0-2.8 2.4-5 5.5-5h14.3v-.7h-14.3c-3.4 0-6.2 2.6-6.2 5.7v6.9h.7z" />
          </g>
          <g id="panda2">
            <path id="leg2_1_" d="M120 80.9s-.5 10.2-2.1 13.5c-1.6 3.5 1.5 7.8 0 9.5-1.5 1.7-12.3 1.1-12.3 1.1s-1.3-2.1 0-9.5c1.3-7.2-.9-7.4-.9-7.4l15.3-7.2h-.5" />
            <path id="leg1_1_" d="M87.9 80.9s1.9 9.9 3.1 13.5c1 3.1-1.5 7.8 0 9.5 1.5 1.7 12.8 1.1 12.8 1.1s1.1-2 0-9.5c-1.2-7.7.9-7.4.9-7.4l-16.8-7.2" />
            <path id="arm2_1_" d="M113.4 61.1s8.1 1.9 9.5 12.6c1.4 10.8 2.6 14.4-1.4 15.1-4 .7-5.8-10.2-5.8-10.2l-2.3-17.5z" />
            <path id="arm1_1_" d="M94.2 61.5s-7.6 1.9-8.9 13.1c-1.3 11.2-2.4 14.9 1.3 15.7 3.7.8 5.4-10.6 5.4-10.6l2.2-18.2z" />
            <g id="body_1_">
              <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="121.056" y1="558.956" x2="141.342" y2="523.813" gradientTransform="matrix(.918 0 0 -.918 -16.264 573.314)">
                <stop offset="0" stop-color="#FFF" />
                <stop offset=".2" stop-color="#FCFCFC" />
                <stop offset=".4" stop-color="#F2F2F2" />
                <stop offset=".6" stop-color="#E1E1E1" />
                <stop offset=".7" stop-color="#C9C9C9" />
                <stop offset=".9" stop-color="#ABABAB" />
                <stop offset="1" stop-color="#919191" />
              </linearGradient>
              <ellipse fill="url(#SVGID_1_)" cx="104.2" cy="76.2" rx="16.6" ry="19.3" />
              <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="131.123" y1="528.7" x2="131.123" y2="562.678" gradientTransform="matrix(.918 0 0 -.918 -16.264 573.314)">
                <stop offset="0" stop-color="#FFF" />
                <stop offset=".2" stop-color="#FCFCFC" />
                <stop offset=".3" stop-color="#F2F2F2" />
                <stop offset=".4" stop-color="#E1E1E1" />
                <stop offset=".6" stop-color="#C9C9C9" />
                <stop offset=".7" stop-color="#ABABAB" />
                <stop offset=".8" stop-color="#858585" />
                <stop offset=".9" stop-color="#5A5A5A" />
                <stop offset="1" stop-color="#2E2E2E" />
              </linearGradient>
              <ellipse opacity=".4" fill="url(#SVGID_2_)" cx="104.1" cy="72.2" rx="15" ry="15.6" />
              <path opacity=".9" fill="#FFF" d="M115 67.5c-6.9 4.2-14.4 6.6-20.7-.8-3.2 3.3-3.9 10.6-3.1 14.9.9 4.8 5.4 7.6 10.3 8.3 9.2 1.4 17.7-5 16.4-14.6.2 1.1-.3-4.8-2.9-7.8z" />
            </g>
            <g id="head_1_">
              <g id="face_1_">
                <path fill="#ABABAB" d="M92.3 57.1c1.9-5.5 5.8-15 12.5-15.5 6.1-.5 10.7 8.7 11.8 13.4.6 2.7.6 6-.2 8.6-1.2 4-3.9 5-7.4 6.3-4.3 1.6-7.8 2-11.8-1.1-3.5-2.7-6.3-7.2-4.9-11.7z" />
                <path fill="#EAEAEA" d="M92.3 56.7c1.9-5.5 5.8-15 12.5-15.5 6.1-.5 10.7 8.7 11.8 13.4.6 2.7.6 6-.2 8.6-1.2 4-3.9 5-7.4 6.3-4.3 1.6-7.8 2-11.8-1.1-3.5-2.6-6.3-7.1-4.9-11.7z" />
                <path fill="#FFF" d="M92.9 55.9c1.8-5.1 5.5-14.1 11.8-14.6 5.8-.4 10.1 8.2 11.1 12.7.6 2.5.6 5.7-.2 8.1-1.1 3.8-3.7 4.7-7 5.9-4.1 1.5-7.4 1.9-11.1-1.1-3.2-2.5-5.8-6.7-4.6-11z" />
              </g>
              <g id="features_1_">
                <path d="M110.2 45s1.9-4.7 3.6-2.8c0 0 4.5 6.5 0 7.6 0 .1-5-2.4-3.6-4.8zM101.3 43.6s-1.9-4.7-3.6-2.8c0 0-4.5 6.5 0 7.6-.1 0 4.9-2.5 3.6-4.8zM101.7 66.7h4.7c-.1 0-1.9 4.1-4.7 0zM107.4 61.7s0-6.2 2.5-2.9c0 0 1.7 1.6.9 2.9l-.9 2.2c0 .1-.6 2.1-2.5-2.2zM98.8 59.1c1-1.4 1.8-1.9 2.7-.3.5.9.2 2-.3 3s-1.1 3-2.5 2.2c-.8-.4-.8-1.2-.9-2-.1-1.2.4-2 1-2.9z"
                />
              </g>
            </g>
            <g class="g-hearts">
              <path id="heart1" fill="#F04E39" d="M113.4 69.7c0-.9-1.2-1.4-1.7-.6-.4-.6-1.4-.5-1.7.2-.3.7.1 1 .5 1.4.3.2.8.6 1.2.8.6-.5 1.7-1.1 1.7-1.8z" />
              <path id="heart2" fill="#EF7C2E" d="M113.4 69.7c0-.9-1.2-1.4-1.7-.6-.4-.6-1.4-.5-1.7.2-.3.7.1 1 .5 1.4.3.2.8.6 1.2.8.6-.5 1.7-1.1 1.7-1.8z" />
              <path id="heart3" fill="#F04E39" d="M113.4 69.7c0-.9-1.2-1.4-1.7-.6-.4-.6-1.4-.5-1.7.2-.3.7.1 1 .5 1.4.3.2.8.6 1.2.8.6-.5 1.7-1.1 1.7-1.8z" />
            </g>
            <!--g-hearts-->
          </g>
          <path id="tubeheart" fill="#F04E39" d="M143.3 63.3c0-3.5-4.5-5.5-6.7-2.4-1.7-2.4-5.2-1.9-6.4.8-1.2 2.5.3 4 2.1 5.5 1.1.9 3.2 2.4 4.6 3 2-1.6 6.4-4 6.4-6.9z" />
          <path fill="#78646E" d="M238.7 161.1H13.1c-2.8 0-5-2.2-5-5v-46.8c0-2.8 2.2-5 5-5h225.6c2.8 0 5 2.2 5 5v46.8c0 2.7-2.3 5-5 5z" />
          <path opacity="0.8" fill="#E8E4E5" d="M135.4 140.5c0 4.6-3.8 8.4-8.4 8.4H34.2c-4.6 0-8.4-3.8-8.4-8.4V122c0-4.6 3.8-8.4 8.4-8.4H127c4.6 0 8.4 3.8 8.4 8.4v18.5z" />
          <g id="panel">
            <path fill="#4E3440" d="M127 150.6H34.2c-5.6 0-10.1-4.5-10.1-10.1V122c0-5.6 4.5-10.1 10.1-10.1H127c5.6 0 10.1 4.5 10.1 10.1v18.5c0 5.5-4.5 10.1-10.1 10.1zm-92.8-35.3c-3.7 0-6.7 3-6.7 6.7v18.5c0 3.7 3 6.7 6.7 6.7H127c3.7 0 6.7-3 6.7-6.7V122c0-3.7-3-6.7-6.7-6.7H34.2z"
            />
            <g>
              <path fill="#519B9D" d="M41.9 128.5c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5v-9.3c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.3z" />
              <path fill="#026B6F" d="M56.4 128.5c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5v-9.3c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.3zM85.4 128.5c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5v-9.3c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.3z" />
              <path fill="#519B9D" d="M114.4 128.5c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5v-9.3c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.3z" />
              <path fill="#026B6F" d="M41.9 143.2c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5V134c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.2z" />
              <path fill="#519B9D" d="M56.4 143.2c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5V134c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.2zM99.9 143.2c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5V134c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.2z" />
              <path fill="#026B6F" d="M114.4 143.2c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5V134c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.2z" />
              <path fill="#519B9D" d="M129.1 143.2c0 .3-.2.5-.5.5h-8.8c-.3 0-.5-.2-.5-.5V134c0-.3.2-.5.5-.5h8.8c.3 0 .5.2.5.5v9.2z" />
            </g>
          </g>
          <g class="aim3-off">
            <circle id="aim3" fill-rule="evenodd" clip-rule="evenodd" fill="#FF0000" cx="274.3" cy="141.5" r="0" />
          </g>
          <!--aim3-off-->
          <g id="handle2">
            <path fill="#C2AAA6" d="M273.75 138.304l-2.45 4.244-16.456-9.498 2.45-4.244z" />
            <circle fill="#FF0000" cx="274.2" cy="141.4" r="5.4" />
          </g>
          <path fill="#846D7A" d="M258.2 130.9c0-8-6.5-14.4-14.4-14.4v28.9c8-.1 14.4-6.5 14.4-14.5z" />
          <path fill="#E29B1E" d="M30.9 100.8c0-5.1 4.2-9.3 9.3-9.3H56c5.1 0 9.3 4.2 9.3 9.3v.1h3.1v-.1c0-6.9-5.6-12.4-12.4-12.4H40.2c-6.9 0-12.4 5.6-12.4 12.4v.1l3.1-.1z" />
          <path fill="#519B9D" d="M31.9 100.7c.2 0 .3.1.3.3v3.5c0 .2-.1.3-.3.3h-4.8c-.2 0-.3-.1-.3-.3V101c0-.2.1-.3.3-.3h4.8zM69.3 100.7c.2 0 .3.1.3.3v3.5c0 .2-.1.3-.3.3h-4.8c-.2 0-.3-.1-.3-.3V101c0-.2.1-.3.3-.3h4.8z" />
          <path fill="#E21E6E" d="M193.2 164.9c0 6.2-5 11.2-11.2 11.2h-6.5c-6.2 0-11.2-5-11.2-11.2v-.1h-3.7v.1c0 8.3 6.7 15 15 15h6.5c8.3 0 15-6.7 15-15v-.1l-3.9.1z" />
          <path fill="#78646E" d="M192 165c-.2 0-.4-.2-.4-.4v-4.2c0-.2.2-.4.4-.4h5.8c.2 0 .4.2.4.4v4.2c0 .2-.2.4-.4.4H192zM159.5 165c-.2 0-.4-.2-.4-.4v-4.2c0-.2.2-.4.4-.4h5.8c.2 0 .4.2.4.4v4.2c0 .2-.2.4-.4.4h-5.8z" />
          <path fill="#4E3440" d="M324.6 158.5h18.9v35.6h-18.9z" />
          <g opacity=".79">
            <path fill="#D3D3D3" d="M334.6 81.2c0 1.3-1 2.3-2.3 2.3h-20.6c-1.3 0-2.3-1-2.3-2.3V26.5c0-1.3 1-2.3 2.3-2.3h20.6c1.3 0 2.3 1 2.3 2.3v54.7z" />
            <path fill="#FFF" d="M326.4 36.3c0 2.4-2 4.4-4.4 4.4-2.4 0-4.4-2-4.4-4.4 0-2.4 2-4.4 4.4-4.4 2.4 0 4.4 2 4.4 4.4z" />
            <path opacity=".3" fill="#1E1330" d="M324.2 36.3c0 1.2-1 2.2-2.2 2.2-1.2 0-2.2-1-2.2-2.2 0-1.2 1-2.2 2.2-2.2 1.2 0 2.2 1 2.2 2.2z" />
            <path opacity=".4" fill="#2B2B2B" d="M316.2 48.9c0 1.3-1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3 1.2 0 2.3 1 2.3 2.3zM324.2 48.9c0 1.3-1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3 1.3 0 2.3 1 2.3 2.3zM332.3 48.9c0 1.3-1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3 1.3 0 2.3 1 2.3 2.3z"
            />
            <path fill="#4FAD34" d="M315.2 48.9c0 .8-.6 1.4-1.4 1.4-.7 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4z" />
            <path fill="#FFE000" d="M323.3 48.9c0 .8-.6 1.4-1.4 1.4-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4z" />
            <path fill="#FF7F00" d="M331.4 48.9c0 .8-.6 1.4-1.4 1.4-.8 0-1.4-.6-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4z" />
            <path opacity=".4" fill-rule="evenodd" clip-rule="evenodd" fill="#2B2B2B" d="M331.9 57.7c0 1.2-1 2.2-2.2 2.2h-15.6c-1.2 0-2.2-1-2.2-2.2 0-1.2 1-2.2 2.2-2.2h15.6c1.2.1 2.2 1 2.2 2.2z" />
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#2B2B2B" d="M313.9 57.5H330v.5h-16.1z" />
            <g fill-rule="evenodd" clip-rule="evenodd" fill="#2B2B2B">
              <path d="M314.6 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM317.2 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.4-.1.6.2.6.6zM319.9 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM322.5 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM325.2 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM327.8 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM330.4 65.4c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6z"
              />
              <g>
                <path d="M314.6 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM317.2 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.4 0 .6.3.6.6zM319.9 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM322.5 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM325.2 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM327.8 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM330.4 67.9c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6z"
                />
              </g>
              <g>
                <path d="M314.6 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM317.2 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.4 0 .6.3.6.6zM319.9 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM322.5 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM325.2 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM327.8 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM330.4 70.5c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6z"
                />
              </g>
              <g>
                <path d="M314.6 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM317.2 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.4-.1.6.2.6.6zM319.9 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM322.5 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM325.2 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM327.8 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6zM330.4 73.1c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.3-.1.6.2.6.6z"
                />
              </g>
              <g>
                <path d="M314.6 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM317.2 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.4 0 .6.3.6.6zM319.9 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM322.5 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM325.2 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM327.8 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6zM330.4 75.6c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.3.6.6z"
                />
              </g>
              <g>
                <path d="M314.6 78.2c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.2.6.6zM317.2 78.2c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6.4 0 .6.2.6.6zM319.9 78.2c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.2.6.6zM322.5 78.2c0 .3-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.2.6.6zM325.2 78.2c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.2.6.6zM327.8 78.2c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.2.6.6zM330.4 78.2c0 .4-.3.6-.6.6s-.6-.3-.6-.6c0-.4.3-.6.6-.6s.6.2.6.6z"
                />
              </g>
            </g>
          </g>
          <g>
            <path fill="#E4311B" d="M333.3 142.9c0 4.5-3.9 8.1-8.7 8.1-4.8 0-8.7-3.6-8.7-8.1s3.9-8.1 8.7-8.1c4.8 0 8.7 3.7 8.7 8.1z" />
            <g fill="#333">
              <path d="M328.1 145l-1.2 1.1-5.7-5.3 1.2-1.1z" />
              <path d="M326.9 139.7l1.2 1.1-5.7 5.3-1.2-1.1z" />
            </g>
            <path opacity=".2" fill="#602515" d="M324.8 134.8V151c4.8 0 8.7-3.6 8.7-8.1 0-4.4-3.9-8.1-8.7-8.1z" />
          </g>
          <g>
            <path fill="#EDEDED" d="M200 70.7c0 2.8-2.3 5.1-5.1 5.1s-5.1-2.3-5.1-5.1V51c0-2.8 2.3-5.1 5.1-5.1s5.1 2.3 5.1 5.1v19.7z" />
            <path fill="#FFF" d="M200 70.7V51c0-2.8-2.3-5.1-5.1-5.1v30c2.9 0 5.1-2.3 5.1-5.2z" />
          </g>
          <path fill="#C2AAA6" d="M230.3 148.9h-51.5c-2.8 0-5-2.2-5-5v-25.6c0-2.8 2.2-5 5-5h51.5c2.8 0 5 2.2 5 5v25.6c0 2.7-2.3 5-5 5z" />
          <g>
            <path fill="#F7F7F7" d="M229 122.9c.5 0 .9-.4.9-.9s-.4-.9-.9-.9h-48c-.5 0-.9.4-.9.9s.4.9.9.9h48z" />
            <path fill="#E29B1E" d="M188.4 124.1c.2 0 .3-.2.3-.3v-3.1c0-.2-.2-.3-.3-.3h-3.1c-.2 0-.3.2-.3.3v3.1c0 .2.2.3.3.3h3.1z" />
            <path fill="#E21E6E" d="M187 123.7c.2 0 .3-.1.3-.3v-2.5c0-.2-.1-.3-.3-.3-.2 0-.3.1-.3.3v2.5c0 .2.1.3.3.3z" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M229.6 132.3c.5 0 .9-.4.9-.9s-.4-.9-.9-.9h-48c-.5 0-.9.4-.9.9s.4.9.9.9h48z" />
            <path fill="#E29B1E" d="M206.4 133.5c.2 0 .3-.2.3-.3V130c0-.2-.2-.3-.3-.3h-3.1c-.2 0-.3.2-.3.3v3.1c0 .2.2.3.3.3h3.1z" />
            <path fill="#E21E6E" d="M204.9 133.1c.2 0 .3-.1.3-.3v-2.5c0-.2-.1-.3-.3-.3-.2 0-.3.1-.3.3v2.5c0 .2.1.3.3.3z" />
          </g>
          <g>
            <path fill="#F7F7F7" d="M229.4 141.9c.5 0 .9-.4.9-.9s-.4-.9-.9-.9h-48c-.5 0-.9.4-.9.9s.4.9.9.9h48z" />
            <path fill="#E29B1E" d="M188.9 143.1c.2 0 .3-.2.3-.3v-3.1c0-.2-.2-.3-.3-.3h-3.1c-.2 0-.3.2-.3.3v3.1c0 .2.2.3.3.3h3.1z" />
            <path fill="#E21E6E" d="M187.4 142.7c.2 0 .3-.1.3-.3V140c0-.2-.1-.3-.3-.3-.2 0-.3.1-.3.3v2.5c0 .1.1.2.3.2z" />
          </g>
        </svg>
        <!--third-->
      
      </div>
      <!--container-->


<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/panda.blade.php ENDPATH**/ ?>