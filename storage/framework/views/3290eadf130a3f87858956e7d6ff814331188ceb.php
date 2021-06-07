<?php $__env->startSection('css'); ?>


<style>
:root {
  --base-speed: 0.5s;

  --domino-speed: calc(var(--base-speed) * 1.3);
  /**
   * Dominos hit the next domino before finishing their animation. We start the
   * next domino's animation when they actually hit.
   */
  --domino-hit-speed: calc(var(--domino-speed) * 0.25);
  /**
   * The final domino falls all the way down instead of resting on another
   * domino. Since it has further to go, its duration lasts longer so it appears
   * to be going the same speed.
   */
  --last-domino-speed: calc(var(--domino-speed) * 10 / 9);

  --domino-1-delay: 0s;
  --domino-2-delay: calc(var(--domino-1-delay) + var(--domino-hit-speed));
  --domino-3-delay: calc(var(--domino-2-delay) + var(--domino-hit-speed));
  --domino-4-delay: calc(var(--domino-3-delay) + var(--domino-hit-speed));
  --domino-5-delay: calc(var(--domino-4-delay) + var(--domino-hit-speed));
  --domino-6-delay: calc(var(--domino-5-delay) + var(--domino-hit-speed));

  --ball-and-string-speed: calc(var(--base-speed) * 2);
  --ball-and-string-delay: calc(
    var(--domino-6-delay) + var(--domino-speed) * 0.3
  );

  --car-speed: calc(var(--base-speed) * 3);
  --car-delay: calc(
    var(--ball-and-string-delay) + var(--ball-and-string-speed) * 0.25
  );

  --_8-ball-speed: calc(var(--base-speed) * 4.5);
  --_8-ball-delay: calc(var(--car-delay) + var(--car-speed) * 0.62);

  --domino-7-delay: calc(var(--_8-ball-delay) + var(--_8-ball-speed) * 0.9);
  --domino-8-delay: calc(var(--domino-7-delay) + var(--domino-hit-speed));
  --domino-9-delay: calc(var(--domino-8-delay) + var(--domino-hit-speed));
  --domino-10-delay: calc(var(--domino-9-delay) + var(--domino-hit-speed));
  --domino-11-delay: calc(var(--domino-10-delay) + var(--domino-hit-speed));
  --domino-12-delay: calc(var(--domino-11-delay) + var(--domino-hit-speed));

  --last-ball-speed: calc(var(--base-speed) * 3);
  --last-ball-delay: calc(var(--domino-12-delay) + var(--domino-hit-speed));

  --total-duration: calc(var(--last-ball-delay) + var(--last-ball-speed));
}

svg {
  background: #efefd3;
  height: 60vw;
  max-height: 350px;
  transform-origin: top left;
  transition: transform var(--total-duration) ease;
}

svg.game-on {
  transform: translateX(calc(-100% + 100vw));
}

svg * {
  transform-box: fill-box;
}

.domino {
  transform-box: fill-box;
  transition: transform var(--domino-speed);
  transform-origin: bottom right;
}

.domino-last {
  transition-duration: var(--last-domino-speed);
}

.domino-2 {
  transition-delay: var(--domino-2-delay);
}
.domino-3 {
  transition-delay: var(--domino-3-delay);
}
.domino-4 {
  transition-delay: var(--domino-4-delay);
}
.domino-5 {
  transition-delay: var(--domino-5-delay);
}
.domino-6 {
  transition-delay: var(--domino-6-delay);
}
.domino-7 {
  transition-delay: var(--domino-7-delay);
}
.domino-8 {
  transition-delay: var(--domino-8-delay);
}
.domino-9 {
  transition-delay: var(--domino-9-delay);
}
.domino-10 {
  transition-delay: var(--domino-10-delay);
}
.domino-11 {
  transition-delay: var(--domino-11-delay);
}
.domino-12 {
  transition-delay: var(--domino-12-delay);
}

.game-on .domino {
  transform: rotate(76deg);
}

.game-on .domino-last {
  transform: rotate(90deg);
}

#Ball_and_String {
  transform: rotate(33deg);
  transition: transform var(--ball-and-string-speed);
  transition-delay: var(--ball-and-string-delay);
  transition-timing-function: cubic-bezier(0.34, 1.56, 0.64, 1);
  /* This is broken in webkit without these rules */
  transform-box: unset;
  transform-origin: 914px -38px;
}

.game-on #Ball_and_String {
  transform: rotate(-20deg);
}

#Car {
  transition: transform var(--car-speed);
  transition-delay: var(--car-delay);
}

.game-on #Car {
  transform: translateX(710px);
}

.game-on .wheel {
  animation: spin;
  animation-duration: var(--car-speed);
  animation-delay: var(--car-delay);
  transform-origin: center;
}

@keyframes  spin {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(1080deg);
  }
}

.game-on #_8_Ball,
.game-on ._8-ball-center {
  animation: _8_ball_outer;
  animation-duration: var(--_8-ball-speed);
  animation-delay: var(--_8-ball-delay);
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
  transform-origin: center;
}

.game-on ._8-ball-center {
  animation-name: _8_ball_center;
}

@keyframes  _8_ball_outer {
  from {
    transform: translate(0, 0);
  }
  35% {
    transform: translate(715px, 115px);
  }
  65% {
    transform: translate(405px, 173px);
  }
  to {
    transform: translate(1120px, 265px);
  }
}

@keyframes  _8_ball_center {
  from {
    transform: rotate(0deg);
  }

  35% {
    transform: rotate(720deg);
  }

  65% {
    transform: rotate(360deg);
  }

  to {
    transform: rotate(1080deg);
  }
}

#Final_Ball {
  transition: transform var(--last-ball-speed);
  transition-delay: var(--last-ball-delay);
  transition-timing-function: cubic-bezier(0.34, 1.56, 0.64, 1);
}

.game-on #Final_Ball {
  transform: translateX(325px);
}

.game-on #ball-bumps {
  animation-name: spin;
  animation-duration: var(--last-ball-speed);
  animation-delay: var(--last-ball-delay);
  animation-timing-function: cubic-bezier(0.34, 1.56, 0.64, 1);
  animation-fill-mode: forwards;
  transform-box: fill-box;
  transform-origin: center;
}

/**
 * Base SVG styles: fills, strokes, etc.
 */

.box {
  fill: #c6c4a1;
}
.box-lid {
  fill: #afac84;
}

.domino {
  fill: #ffffff;
  stroke: #000000;
  stroke-width: 1.8046;
  stroke-miterlimit: 10;
}

.ball-1 {
  fill: #9ec10c;
  stroke: #ffffff;
  stroke-width: 1.8;
  stroke-miterlimit: 10;
}

.t-ball-texture {
  fill: none;
  stroke-width: 5;
  stroke-dasharray: 2;
}
.t-ball-texture-1 {
  stroke: #f9f910;
}
.t-ball-texture-2 {
  stroke: #f4f3c6;
}
.t-ball-texture-3 {
  stroke: #abf22f;
}

.string-bg {
  fill: none;
  stroke: #e2ae7a;
  stroke-width: 7;
  stroke-miterlimit: 10;
}

.string-fg {
  fill: none;
  stroke: #00a6f9;
  stroke-width: 5;
  stroke-miterlimit: 10;
  stroke-dasharray: 11.7676, 11.7676;
}

.car-grey-bg {
  fill: #4c4c4b;
}

.tire-bg {
  fill: #42290f;
}

.car-bg {
  fill: #f94212;
}

.tire-dark {
  fill: #0c0601;
}

.wheel-spoke {
  fill: #877d77;
}

.tire-dark-stroke {
  fill: none;
  stroke: #0c0601;
  stroke-width: 2.1673;
  stroke-miterlimit: 10;
}

.wheel-center {
  fill: #ddd8d4;
}

.car-detail {
  fill: none;
  stroke: #877d77;
  stroke-width: 6.5s018;
  stroke-linejoin: round;
  stroke-miterlimit: 10;
}

.tire-highlight {
  fill: #f94212;
  stroke: #444342;
  stroke-width: 0.399;
  stroke-miterlimit: 10;
}

.window {
  opacity: 0.2;
  enable-background: new;
}

.car-detail-1 {
  fill: #444342;
}

._8-ball-bg {
  stroke: #ffffff;
  stroke-width: 2.5469;
  stroke-miterlimit: 10;
}

._8-ball-white {
  fill: #ffffff;
  stroke: #ffffff;
  stroke-width: 0.8906;
  stroke-miterlimit: 10;
}

.last-ball {
  fill: #c13636;
  stroke: #ffffff;
  stroke-width: 4.5644;
  stroke-miterlimit: 10;
}

.ball-bump {
  fill: #823434;
}x

/**
 * Page layout stuff
 */

html,
body {
  margin: 0;
  width: 100%;
  overflow: hidden;
  position: fixed;
}

body {
  background: #c6c4a1;
}

.wrapper {
  position: relative;
}

.controls {
  background: rgba(0, 0, 0, 0.6);
  width: 100%;
  padding: 1em;
  position: fixed;
  bottom: 0;
}

button {
  background: greenyellow;
  border: none;
  border-radius: 0.2em;
  color: #1d70a4;
  cursor: pointer;
  font-size: 30px;
  border: none;
  padding: 10px 20px;
  transition: transform 0.1s ease-out, box-shadow 0.1s ease-out;
}

button:hover {
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.3);
  transform: scale(1.01) translateY(-2px);
}

button:active {
  box-shadow: none;
  transform: scale(0.99);
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    const demo = document.querySelector('.demo');

    document.querySelector('.js-start-button').addEventListener("click", () => {
        
    setTimeout(function(){
                alert("最後まで見てくれてありがとう！お礼にヒントを！ normalの下2桁は「84」だよ！");
            },7500);
    const svg = document.querySelector("svg");

    if(svg.classList.contains('game-on')) {
        svg.classList.remove("game-on");

        demo.innerHTML = demo.innerHTML;

        setTimeout(() => {
        document.querySelector("svg").classList.add("game-on");
        }, 200);
    } else {
        svg.classList.add("game-on");
    }
    });
</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div class="wrapper">
        <div class="demo">
          <svg viewBox="0 0 4500 946.7">
            <g id="Backgrounds">
              <line class="string-bg" x1="2084.5" y1="437.6" x2="2880.1" y2="535.8" />
              <line class="string-bg" x1="2405.2" y1="597.4" x2="2880.1" y2="538.8" />
              <line class="string-bg" x1="2405.2" y1="597.4" x2="3200.7" y2="695.6" />
              <line class="string-fg" x1="2084.5" y1="437.6" x2="2880.1" y2="535.8" />
              <line class="string-fg" x1="2405.2" y1="597.4" x2="2880.1" y2="538.8" />
              <line class="string-fg" x1="2405.2" y1="597.4" x2="3200.7" y2="695.6" />
              <rect y="387" class="box" width="646" height="559.7"/>
              <rect x="1089.4" y="434.1" class="box" width="1006.1" height="512.6"/>
              <rect x="3200.7" y="693.7" class="box" width="1249.7" height="253"/>
              <rect x="2880.1" y="387.9" class="box-lid" width="10.2" height="559.7"/>
              <rect x="2394.1" y="486.7" class="box-lid" width="10.2" height="460"/>
              <rect x="4410.3" y="204.9" class="box" width="253" height="741.8"/>
              <rect y="387" class="box-lid" width="653.3" height="37.9"/>
              <rect x="1082.2" y="434.7" class="box-lid" width="1021.4" height="37.9"/>
              <rect x="3192.4" y="693.8" class="box-lid" width="1470.9" height="37.9"/>
              <rect x="4404.9" y="167" class="box-lid" width="258.4" height="37.9"/>
            </g>
            <g id="First_Dominos">
              <path
                class="domino domino-1"
                d="M57.4,391.8H45.5c-2.7,0-4.9-2.2-4.9-4.9V270.4c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9V387
              C62.3,389.6,60.1,391.8,57.4,391.8z"
              />
              <path
                class="domino domino-2"
                d="M155,391.8h-11.9c-2.7,0-4.9-2.2-4.9-4.9V270.4c0-2.7,2.2-4.9,4.9-4.9H155c2.7,0,4.9,2.2,4.9,4.9V387
              C159.9,389.6,157.7,391.8,155,391.8z"
              />
              <path
                class="domino domino-3"
                d="M252.6,391.8h-11.9c-2.7,0-4.9-2.2-4.9-4.9V270.4c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9V387
              C257.5,389.6,255.3,391.8,252.6,391.8z"
              />
              <path
                class="domino domino-4"
                d="M350.2,391.8h-11.9c-2.7,0-4.9-2.2-4.9-4.9V270.4c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9V387
              C355.1,389.6,352.9,391.8,350.2,391.8z"
              />
              <path
                class="domino domino-5"
                d="M447.8,391.8h-11.9c-2.7,0-4.9-2.2-4.9-4.9V270.4c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9V387
                  C452.7,389.6,450.5,391.8,447.8,391.8z"
              />
              <path
                class="domino domino-6 domino-last"
                d="M545.4,391.8h-11.9c-2.7,0-4.9-2.2-4.9-4.9V270.4c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9V387
              C550.3,389.6,548.1,391.8,545.4,391.8z"
              />
            </g>
            <g id="Ball_and_String">
              <line class="string-bg" x1="914" y1="379.1" x2="914.2" y2="-38.6" />
              <line class="string-fg" x1="914" y1="379.1" x2="914.2" y2="-38.6" />
              <circle class="ball-1" cx="914" cy="412" r="55" />
              <line class="t-ball-texture t-ball-texture-1" x1="874.5" y1="373.7" x2="859.2" y2="410"/>
              <line class="t-ball-texture t-ball-texture-1" x1="889.2" y1="363.1" x2="861.8" y2="427.8"/>
              <line class="t-ball-texture t-ball-texture-1" x1="908.2" y1="356.8" x2="870.5" y2="445.9"/>
              <line class="t-ball-texture t-ball-texture-1" x1="924.8" y1="357.9" x2="882.9" y2="457"/>
              <line class="t-ball-texture t-ball-texture-1" x1="966.7" y1="412.6" x2="951.3" y2="448.9"/>
              <line class="t-ball-texture t-ball-texture-1" x1="964" y1="394.8" x2="936.7" y2="459.5"/>
              <line class="t-ball-texture t-ball-texture-1" x1="955.4" y1="376.7" x2="917.7" y2="465.8"/>
              <line class="t-ball-texture t-ball-texture-1" x1="942.9" y1="365.6" x2="901.1" y2="464.7"/>
              <line class="t-ball-texture t-ball-texture-2" x1="912.4" y1="357.6" x2="875.9" y2="372.4"/>
              <line class="t-ball-texture t-ball-texture-2" x1="930.2" y1="360.4" x2="865.1" y2="386.8"/>
              <line class="t-ball-texture t-ball-texture-2" x1="948.1" y1="369.4" x2="858.5" y2="405.7"/>
              <line class="t-ball-texture t-ball-texture-2" x1="959" y1="382" x2="859.4" y2="422.4"/>
              <line class="t-ball-texture t-ball-texture-2" x1="950" y1="450.2" x2="913.5" y2="465"/>
              <line class="t-ball-texture t-ball-texture-2" x1="960.7" y1="435.8" x2="895.6" y2="462.2"/>
              <line class="t-ball-texture t-ball-texture-2" x1="967.4" y1="416.9" x2="877.7" y2="453.2"/>
              <line class="t-ball-texture t-ball-texture-2" x1="966.4" y1="400.2" x2="866.8" y2="440.6"/>
              <line class="t-ball-texture t-ball-texture-3" x1="950.5" y1="372.9" x2="914.3" y2="357.6"/>
              <line class="t-ball-texture t-ball-texture-3" x1="961.1" y1="387.6" x2="896.4" y2="360.2"/>
              <line class="t-ball-texture t-ball-texture-3" x1="967.4" y1="406.5" x2="878.4" y2="368.9"/>
              <line class="t-ball-texture t-ball-texture-3" x1="966.3" y1="423.2" x2="867.2" y2="381.3"/>
              <line class="t-ball-texture t-ball-texture-3" x1="911.6" y1="465" x2="875.3" y2="449.7"/>
              <line class="t-ball-texture t-ball-texture-3" x1="929.4" y1="462.4" x2="864.7" y2="435"/>
              <line class="t-ball-texture t-ball-texture-3" x1="947.5" y1="453.7" x2="858.4" y2="416.1"/>
              <line class="t-ball-texture t-ball-texture-3" x1="958.6" y1="441.3" x2="859.6" y2="399.4"/>
            </g>
            <g id="Car">
              <g>
                <path
                  class="car-grey-bg"
                  d="M1351.7,431c0,0-43.3-11.3-61.1-11.7c-17.8-0.4-131.3-3-131.3-3h-55l19.1-34.7l60.2-8.7l158.2,12.1l19.1,20.4
                L1351.7,431z"
                />
                <g class="wheel">
                  <circle class="tire-bg" cx="1145.5" cy="413.9" r="24.5" />
                  <circle class="car-bg" cx="1145.5" cy="413.9" r="22.3" />
                  <circle class="tire-bg" cx="1145.5" cy="413.9" r="20.6" />
                  <circle class="tire-dark" cx="1145.5" cy="413.9" r="17.1" />
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1145.5,413.9 1142.3,397 1148.8,397              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1145.4,413.7 1128.3,411.6 1130.3,405.4              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1145.7,413.8 1138.4,429.4 1133.2,425.6              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1145.8,413.8 1158.3,425.6 1153.1,429.4              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1145.7,413.7 1160.8,405.4 1162.8,411.6              "
                    />
                  </g>
                  <circle class="tire-dark-stroke" cx="1145.5" cy="413.9" r="17.1" />
                  <circle class="wheel-center" cx="1145.5" cy="413.9" r="2.4" />
                </g>
                <g class="wheel">
                  <circle class="tire-bg" cx="1324.6" cy="413.9" r="24.5" />
                  <circle class="car-bg" cx="1324.6" cy="413.9" r="22.3" />
                  <circle class="tire-bg" cx="1324.6" cy="413.9" r="20.6" />
                  <circle class="tire-dark" cx="1324.6" cy="413.9" r="17.1" />
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1324.6,413.9 1321.3,397 1327.8,397              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1324.4,413.7 1307.3,411.6 1309.3,405.4              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1324.8,413.8 1317.5,429.4 1312.2,425.6              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1324.8,413.8 1337.4,425.6 1332.1,429.4              "
                    />
                  </g>
                  <g>
                    <polygon
                      class="wheel-spoke"
                      points="1324.8,413.7 1339.8,405.4 1341.8,411.6              "
                    />
                  </g>
                  <circle class="tire-dark-stroke" cx="1324.6" cy="413.9" r="17.1" />
                  <circle class="wheel-center" cx="1324.6" cy="413.9" r="2.4" />
                </g>
                <path
                  class="tire-highlight"
                  d="M1376.6,419.1c-4.8-2.2-7.4-2.6-7.4-2.6s12.1-4.3,9.1-8.2s-9.5-5.6-9.5-5.6l1.7-10.4c0,0,12.6-1.7-0.4-6.5
                s-18.6-11.3-29-11.7c-10.4-0.4-61.1-3.5-61.1-1.3c0,0-60.7-43.3-156.9-8.7c0,0-24.3,7.8-37.7,1.3c0,0,5.6,9.1,0,11.3
                c0,0,5.2,3.5,0,9.1c0,0,7.4,10.8,0,16.9c0,0,2.6,19.1,14.7,17.8l12.1-1.3c6.5,0,3.5-5.2,3.5-5.2s2.6-28.2,28.6-28.2h2.6
                c26,0,28.6,28.2,28.6,28.2s-5.2,5.6,10.4,5.2h104.5c6.5,0,3.5-5.2,3.5-5.2s2.6-28.2,28.6-28.2h2.6c26,0,28.6,28.2,28.6,28.2
                s1.7,8.2-2.2,16.9c0,0,23.8,0.4,26.9-3.5l-6.5-2.2C1371.8,425.2,1381.3,421.3,1376.6,419.1z M1199.7,374.3l-20.3-6.8
                c7.9-9,20.2-10.6,20.2-10.6L1199.7,374.3z M1199.9,374.2v-17.3c45.5-3,68.9,17.3,68.9,17.3H1199.9z"
                />
                <path
                  class="window"
                  d="M1179.4,367.7l20.3,6.8v-17.6C1199.6,356.9,1187.2,358.7,1179.4,367.7z"
                />
                <g>
                  <path
                    class="car-detail-1"
                    d="M1199.6,374.5c-2.5,1.6-4.3,4.2-4.8,7c-0.3,1.4-0.2,2.9,0,4.3c0.2,0.7,0.3,1.4,0.6,2.1
                  c0.3,0.7,0.5,1.4,0.8,2.1c1.1,2.8,2,5.6,2.9,8.5c0.9,2.8,1.7,5.7,3.2,8.2c0.8,1.2,1.6,2.4,2.9,3.2c0.3,0.2,0.6,0.3,0.9,0.5
                  l0.5,0.2c0.2,0.1,0.3,0.1,0.5,0.2c0.3,0.1,0.7,0.2,1,0.3l1.1,0.1c2.9,0.2,5.9,0.2,8.9,0.3c5.9,0.1,11.9,0,17.8-0.1l17.8-0.2
                  l8.9-0.1h4.5c1.3,0,2.8-0.6,3.4-1.8c0.3-0.6,0.3-1.3,0.4-2s0.1-1.5,0.1-2.2l0.2-4.4c0.1-3,0.1-5.9,0.1-8.9
                  c-0.1-3-0.2-5.9-0.5-8.9c-0.3-2.9-0.7-5.9-1.8-8.7h0.1c1.3,2.7,1.8,5.7,2.2,8.6c0.4,3,0.6,5.9,0.7,8.9s0.1,6,0.1,8.9
                  c0,1.5-0.1,3-0.1,4.5c0,0.7-0.1,1.5-0.1,2.2c0,0.4-0.1,0.7-0.1,1.1c-0.1,0.4-0.2,0.8-0.4,1.2c-0.4,0.8-1,1.4-1.8,1.7
                  c-0.7,0.4-1.5,0.5-2.3,0.6h-4.5h-8.9c-5.9,0-11.9,0-17.8-0.1l-17.8-0.1h-4.5c-1.5,0-3,0-4.5-0.1l-1.1-0.1
                  c-0.4-0.1-0.7-0.2-1.1-0.3c-0.2-0.1-0.4-0.1-0.5-0.2l-0.5-0.2c-0.3-0.2-0.7-0.3-1-0.5c-1.3-0.8-2.3-2-3.1-3.3
                  c-1.6-2.6-2.4-5.5-3.3-8.3s-1.7-5.7-2.8-8.4c-0.3-0.7-0.5-1.4-0.7-2.1c-0.3-0.7-0.3-1.5-0.5-2.2c-0.2-1.5-0.3-3,0.1-4.5
                  C1195,378.5,1197,375.9,1199.6,374.5L1199.6,374.5z"
                  />
                </g>
                <g>
                  <g>
                    <path
                      class="tire-bg"
                      d="M1293.4,409.4c0.9-7.5,3.7-15,9-20.6c2.7-2.8,6-5,9.6-6.2c1.8-0.7,3.7-1.1,5.6-1.4c1.9-0.2,3.8-0.3,5.7-0.3
                    c1.9,0,3.8,0.1,5.7,0.3c1.9,0.3,3.8,0.7,5.6,1.4c3.6,1.3,6.9,3.5,9.6,6.2c5.3,5.6,8.1,13.1,9,20.7c-0.5-3.8-1.6-7.4-3.2-10.9
                    c-1.5-3.4-3.6-6.7-6.2-9.4c-2.7-2.6-5.8-4.8-9.4-6c-1.8-0.7-3.6-1-5.5-1.3c-1.9-0.2-3.7-0.3-5.6-0.3s-3.8,0-5.6,0.3
                    c-1.8,0.3-3.7,0.6-5.5,1.3c-3.6,1.2-6.7,3.3-9.4,6c-2.6,2.7-4.7,5.9-6.2,9.4C1295,402,1293.9,405.6,1293.4,409.4z"
                    />
                    <path
                      class="tire-bg"
                      d="M1115.2,409.4c0.9-7.5,3.7-15,9-20.6c2.7-2.8,6-5,9.6-6.2c1.8-0.7,3.7-1.1,5.6-1.4c1.9-0.2,3.8-0.3,5.7-0.3
                    c1.9,0,3.8,0.1,5.7,0.3c1.9,0.3,3.8,0.7,5.6,1.4c3.6,1.3,6.9,3.5,9.6,6.2c5.3,5.6,8.1,13.1,9,20.7c-0.5-3.8-1.6-7.4-3.2-10.9
                    c-1.5-3.4-3.6-6.7-6.2-9.4c-2.7-2.6-5.8-4.8-9.4-6c-1.8-0.7-3.6-1-5.5-1.3c-1.9-0.2-3.7-0.3-5.6-0.3s-3.8,0-5.6,0.3
                    c-1.8,0.3-3.7,0.6-5.5,1.3c-3.6,1.2-6.7,3.3-9.4,6c-2.6,2.7-4.7,5.9-6.2,9.4C1116.9,402,1115.8,405.6,1115.2,409.4z"
                    />
                  </g>
                </g>
                <g>
                  <path
                    class="tire-bg"
                    d="M1205,383.4c1.8-0.3,3.6-0.4,5.4-0.4s3.6,0.1,5.4,0.4c-1.8,0.3-3.6,0.4-5.4,0.4
                  C1208.6,383.8,1206.8,383.7,1205,383.4z"
                  />
                </g>
                <g>
                  <path
                    class="tire-bg"
                    d="M1205.2,386.2c1.8-0.3,3.6-0.4,5.4-0.4s3.6,0.1,5.4,0.4c-1.8,0.3-3.6,0.4-5.4,0.4S1207,386.5,1205.2,386.2z"
                  />
                </g>
                <g>
                  <path
                    class="car-detail-1"
                    d="M1179.5,390.6c1.2,1.4,2.1,2.9,3,4.6c0.8,1.6,1.5,3.3,2,5.1c0.5,1.7,0.9,3.5,1.1,5.3
                  c0.1,0.9,0.2,1.8,0.2,2.7c0,0.9,0,1.8,0,2.7c-0.1-1.8-0.2-3.6-0.6-5.4c-0.3-1.8-0.7-3.5-1.2-5.3c-0.5-1.7-1.2-3.4-1.9-5
                  C1181.4,393.7,1180.5,392.1,1179.5,390.6z"
                  />
                </g>
                <g>
                  <path
                    class="car-detail-1"
                    d="M1182.7,389c1.2,1.4,2.1,2.9,3,4.6c0.8,1.6,1.5,3.3,2,5.1c0.5,1.7,0.9,3.5,1.1,5.3c0.1,0.9,0.2,1.8,0.2,2.7
                  c0,0.9,0,1.8,0,2.7c-0.1-1.8-0.2-3.6-0.6-5.4c-0.3-1.8-0.7-3.5-1.2-5.3c-0.5-1.7-1.2-3.4-1.9-5
                  C1184.6,392.1,1183.7,390.5,1182.7,389z"
                  />
                </g>
                <g>
                  <path
                    class="car-detail-1"
                    d="M1284.8,376.2c12.6-0.1,25.3,0,37.9,0.4c6.3,0.2,12.6,0.6,18.9,1.1c3.1,0.3,6.3,0.6,9.4,1.1s6.3,1,9.2,2.2
                  l-0.2,0.4c-2.9-1.1-6-1.7-9.1-2.2s-6.3-0.8-9.4-1.1c-6.3-0.6-12.6-0.9-18.9-1.2C1310.1,376.3,1297.5,376.2,1284.8,376.2z"
                  />
                </g>
                <g>
                  <path
                    class="car-detail-1"
                    d="M1086.9,408.3c0.7,0.6,1.6,1,2.5,1.4s1.9,0.6,2.8,0.8c1,0.2,1.9,0.3,2.9,0.4s2,0.1,3,0.1c-1,0.1-2,0.1-3,0
                  c-1,0-2-0.1-2.9-0.3c-1-0.2-1.9-0.4-2.9-0.7c-0.9-0.3-1.9-0.7-2.7-1.3L1086.9,408.3z"
                  />
                </g>
                <g>
                  <path
                    class="car-detail-1"
                    d="M1087.3,409.5c0.7,0.6,1.6,1,2.5,1.4s1.9,0.6,2.8,0.8c1,0.2,1.9,0.3,2.9,0.4s2,0.1,3,0.1c-1,0.1-2,0.1-3,0
                  c-1,0-2-0.1-2.9-0.3c-1-0.2-1.9-0.4-2.9-0.7c-0.9-0.3-1.9-0.7-2.7-1.3L1087.3,409.5z"
                  />
                </g>
                <g>
                  <path
                    class="car-detail-1"
                    d="M1088,411.1c0.7,0.6,1.6,1,2.5,1.4s1.9,0.6,2.8,0.8c1,0.2,1.9,0.3,2.9,0.4s2,0.1,3,0.1c-1,0.1-2,0.1-3,0
                  c-1,0-2-0.1-2.9-0.3c-1-0.2-1.9-0.4-2.9-0.7c-0.9-0.3-1.9-0.7-2.7-1.3L1088,411.1z"
                  />
                </g>
                <g>
                  <path
                    class="tire-bg"
                    d="M1368,419.1c0,1.1-0.1,2.1-0.3,3.2c-0.1,0.5-0.3,1-0.5,1.5c-0.3,0.5-0.6,1-1.3,1.1c-0.7,0-1.1-0.5-1.4-1
                  s-0.5-1-0.7-1.5c-0.3-1.1-0.4-2.2-0.5-3.3c0-1.1,0.1-2.2,0.5-3.3c0.2-0.5,0.4-1,0.7-1.5c0.3-0.5,0.8-1,1.5-1
                  c0.7,0.1,1.1,0.6,1.3,1.1c0.3,0.5,0.4,1,0.5,1.5C1367.9,417,1368,418.1,1368,419.1z M1368,419.1c0-1.1-0.1-2.1-0.4-3.2
                  c-0.2-0.5-0.4-1-0.6-1.4c-0.3-0.4-0.7-0.8-1.1-0.8s-0.7,0.4-1,0.9c-0.2,0.4-0.4,0.9-0.5,1.4c-0.2,1-0.3,2-0.3,3.1
                  c0,1,0.1,2.1,0.3,3.1c0.1,0.5,0.3,1,0.5,1.4s0.6,0.8,1,0.9c0.4,0,0.8-0.4,1.1-0.8c0.3-0.4,0.5-0.9,0.6-1.4
                  C1367.9,421.3,1368,420.2,1368,419.1z"
                  />
                </g>
                <g>
                  <path
                    class="tire-bg"
                    d="M1085.4,365.3c8,2.1,16.1,3.6,24.3,4.7c8.2,1.1,16.4,1.6,24.7,1.2l3.1-0.2c1-0.1,2-0.2,3.1-0.3
                  c1-0.1,2.1-0.2,3.1-0.4l3-0.6c1-0.2,2-0.4,3-0.6s2-0.4,3.1-0.5c2-0.3,4.1-0.5,6.2-0.6c4.1-0.2,8.3,0,12.3,0.8s8,2.2,11.5,4.5
                  c-3.5-2.2-7.4-3.6-11.5-4.4s-8.2-0.9-12.3-0.7c-2.1,0.1-4.1,0.3-6.1,0.6c-1,0.2-2,0.3-3,0.6c-1,0.2-2,0.5-3,0.6l-3,0.6
                  c-1,0.2-2,0.3-3.1,0.4c-1,0.1-2.1,0.3-3.1,0.3l-3.1,0.2c-8.3,0.4-16.5-0.1-24.7-1.1s-16.3-2.5-24.4-4.6L1085.4,365.3z"
                  />
                </g>
              </g>
            </g>
            <g id="_8_Ball">
              <g>
                <circle class="_8-ball-bg" cx="2084" cy="353.1" r="81.5" />
                <g class="_8-ball-center">
                  <circle class="_8-ball-white" cx="2084" cy="353.1" r="28.5" />
                  <path
                    d="M2079.3,351.8c-1.5-1.4-2.4-3-2.8-4.6c-0.3-1.6-0.1-3.3,0.6-5c1.1-2.6,3-4.3,5.6-5.3c2.6-0.9,5.5-0.8,8.5,0.6
                  c3.1,1.3,5.2,3.3,6.3,6c1.1,2.6,1.1,5.2,0,7.8c-0.7,1.6-1.8,2.9-3.2,3.7c-1.4,0.8-3.1,1.2-5.2,1.1c1.9,1.7,3,3.5,3.5,5.6
                  c0.4,2.1,0.2,4.2-0.8,6.4c-1.3,3-3.5,5.1-6.5,6.2s-6.3,0.9-9.8-0.6c-3.5-1.5-5.9-3.8-7.1-6.8c-1.2-3-1.2-6.1,0.2-9.1
                  c1-2.3,2.4-4,4.3-5C2074.8,351.7,2076.9,351.4,2079.3,351.8z M2073.1,359.8c-0.5,1.2-0.8,2.6-0.7,4c0.1,1.4,0.6,2.7,1.4,3.8
                  c0.9,1.1,2,2,3.3,2.6c2.1,0.9,4.1,1,6,0.2c1.9-0.7,3.4-2.2,4.3-4.2c0.9-2.1,1-4.1,0.2-6.1c-0.8-2-2.2-3.4-4.3-4.3
                  c-2-0.9-4-1-6-0.2S2074,357.7,2073.1,359.8z M2081.7,344c-0.7,1.7-0.8,3.3-0.2,4.8c0.6,1.5,1.8,2.7,3.5,3.4
                  c1.7,0.7,3.3,0.8,4.8,0.2c1.5-0.6,2.6-1.6,3.3-3.2c0.7-1.6,0.7-3.2,0.1-4.7c-0.6-1.6-1.8-2.7-3.4-3.4c-1.7-0.7-3.3-0.8-4.8-0.2
                  C2083.4,341.5,2082.3,342.5,2081.7,344z"
                  />
                </g>
              </g>
            </g>
            <g id="Second_Dominos">
              <path
                class="domino domino-7"
                d="M3262.1,699.5h-11.9c-2.7,0-4.9-2.2-4.9-4.9V578.1c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9v116.6
              C3267,697.3,3264.8,699.5,3262.1,699.5z"
              />
              <path
                class="domino domino-8"
                d="M3359.7,699.5h-11.9c-2.7,0-4.9-2.2-4.9-4.9V578.1c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9v116.6
              C3364.6,697.3,3362.4,699.5,3359.7,699.5z"
              />
              <path
                class="domino domino-9"
                d="M3457.3,699.5h-11.9c-2.7,0-4.9-2.2-4.9-4.9V578.1c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9v116.6
              C3462.2,697.3,3460,699.5,3457.3,699.5z"
              />
              <path
                class="domino domino-10"
                d="M3554.9,699.5H3543c-2.7,0-4.9-2.2-4.9-4.9V578.1c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9v116.6
              C3559.8,697.3,3557.6,699.5,3554.9,699.5z"
              />
              <path
                class="domino domino-11"
                d="M3652.5,699.5h-11.9c-2.7,0-4.9-2.2-4.9-4.9V578.1c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9v116.6
                  C3657.4,697.3,3655.2,699.5,3652.5,699.5z"
              />
              <path
                class="domino domino-12 domino-last"
                d="M3750.1,699.5h-11.9c-2.7,0-4.9-2.2-4.9-4.9V578.1c0-2.7,2.2-4.9,4.9-4.9h11.9c2.7,0,4.9,2.2,4.9,4.9v116.6
              C3755,697.3,3752.8,699.5,3750.1,699.5z"
              />
            </g>
            <g id="Final_Ball">
              <circle class="last-ball" cx="3919.3" cy="555.8" r="139.5" />
              <g id="ball-bumps">
                <circle class="ball-bump" cx="3950.5" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="4033.9" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="4038.3" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="4033.9" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="4038.3" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="4043.8" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="4033.9" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="432.1" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="432.1" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="432.1" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="4033.9" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="4033.9" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="4038.3" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3950.5" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3959.2" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3954.9" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3963.5" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3969.1" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3977.7" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3973.4" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3982.1" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3913.2" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3921.8" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3917.5" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3926.2" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3931.7" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3940.4" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3936" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3944.7" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="4025.2" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="4033.9" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="4029.6" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="4038.3" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3987.9" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3996.6" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3992.2" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="4000.9" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="4006.4" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="4015.1" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="4010.8" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="4019.4" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3803" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3807.4" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="575" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="583.5" r="2.9"/>
                <circle class="ball-bump" cx="3803" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3807.4" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3797.2" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="558.2" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="566.6" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="608.7" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="617.1" r="2.9"/>
                <circle class="ball-bump" cx="3803" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3807.4" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="591.9" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="600.3" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="642.3" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="650.7" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="625.5" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="633.9" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="676" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="659.1" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="667.5" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="440.5" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="448.9" r="2.9"/>
                <path class="ball-bump" d="M3840.4,443.4"/>
                <circle class="ball-bump" cx="3863.3" cy="448.9" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="448.9" r="2.9"/>
                <path class="ball-bump" d="M3877.8,426.6"/>
                <circle class="ball-bump" cx="3900.7" cy="432.1" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="432.1" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="474.1" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="482.5" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="457.3" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="465.7" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3807.4" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="507.8" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="516.2" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="490.9" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="499.4" r="2.9"/>
                <circle class="ball-bump" cx="3803" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3807.4" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3797.2" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="541.4" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="549.8" r="2.9"/>
                <circle class="ball-bump" cx="3803" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3811.7" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3807.4" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3816.1" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3821.6" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3830.3" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3825.9" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3834.6" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3797.2" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3877.8" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3886.4" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3882.1" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3890.8" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3896.3" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3905" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3900.7" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3909.3" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3840.4" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3849.1" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3844.7" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3853.4" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3859" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3867.6" cy="524.6" r="2.9"/>
                <circle class="ball-bump" cx="3863.3" cy="533" r="2.9"/>
                <circle class="ball-bump" cx="3872" cy="533" r="2.9"/>
              </g>
            </g>
          </svg>
          <?php if(session()->get('stage','')<=1): ?>
          <div class="hamada"style="font-size:200%;background-color:red;">仲間あと1人足りないね。仲間が揃ったら、ボタンを↓に表示するよ。</div>    
          <?php else: ?>

          <?php endif; ?>
          
        </div>
      
        <?php if(session()->get('stage','')>=2): ?>
        <div class="controls">
            <button class="js-start-button">スイッチオン</button>
        </div>
        <?php else: ?>
            
        <?php endif; ?>

      </div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/pitagora.blade.php ENDPATH**/ ?>