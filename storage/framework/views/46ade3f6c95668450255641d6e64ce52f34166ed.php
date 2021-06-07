<?php $__env->startSection('css'); ?>


<style>
    @import  url("https://fonts.googleapis.com/css?family=Roboto+Condensed|Squada+One");

    body {
    /* position: relative; */
    background-color: gray;
    
    }

    .container {
    display: block;
    width: 752px;
    margin: 500px auto 0 auto;
    margin-top: 25px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transform: scale(0.7);
    background: #1fcd07;
    }


    img {
    width: 300px;
    border: 5px solid #000;
    border-radius: 10px;
    }

    ul {
    list-style: none;
    padding: 0;
    }

    span {
    font-weight: bold;
    }
    .hamada{
        font-size: 50px;
    }

    .trading-card-info {
    background-color: #fff;
    border: 5px solid #000;
    border-radius: 10px;
    padding: 0 10px;
    font-family: "Roboto Condensed", sans-serif;
    }

    .fun-facts {
    font-style: italic;
    }

    .description {
    font-size: 50px;
    }

    .trading-card {
    display: block;
    width: 710px;
    height: 880px;
    padding: 20px;
    border: 2px solid #000;
    border-radius: 20px;
    box-shadow: 5px 5px 15px #0D4868;
    cursor: pointer;
    z-index: 100;
    }

    .trading-card:nth-child(1) {
    transform: rotate(-2deg);
    }

    .trading-card:nth-child(2) {
    transform: rotate(3deg);
    }

    .trading-card:nth-child(3) {
    transform: rotate(9deg);
    }

    .trading-card:nth-child(4) {
    transform: rotate(6deg);
    }

    .top-stack {
    z-index: 150;
    }

    .bottom-stack {
    z-index: 50;
    }

    .keroppi-trading-card,
    .badtz-trading-card,
    .pochacco-trading-card,
    .hellokitty-trading-card {
    position: absolute;
    }

    /* KEROPPI */
    .keroppi-trading-card {
background-color: #c9d6ff;
    background-size: cover;
    }

    .keroppi-header {
    text-align: center;
    padding: 10px;
    }

    /* BADTZ MARU */
    .badtz-trading-card {
        background-color: burlywood;
    }

    .badtz-header {
    text-align: center;
    padding: 10px;
    }

    .badtz-background-style {
    background: #c9d6ff; /* fallback */
    background: -webkit-linear-gradient(to top, #e2e2e2, #c9d6ff);
    background: linear-gradient(to top, #e2e2e2, #c9d6ff);
    border: 5px solid #000;
    border-radius: 10px;
    margin-bottom: 10px;
    }

    .badtz-img {
    width: 200px;
    height: 200px;
    border: none;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
    }

    .badtz-info {
    background: #c9d6ff; /* fallback */
    background: -webkit-linear-gradient(to left, #e2e2e2, #c9d6ff);
    background: linear-gradient(to left, #e2e2e2, #c9d6ff);
    }

    /* POCHACCO */
    .pochacco-trading-card {
    background-color: olive;
    background-size: cover;
    }

    .pochacco-header {
    text-align: center;
    padding: 10px;
    }

    .pochacco-background-style {
    border: 5px solid #fff;
    border-radius: 10px;
    margin-bottom: 10px;
    }

    .pochacco-img {
    background-color: #5e77bb;
    height: 200px;
    border: none;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
    }

    /* HELLO KITTY */
    .hellokitty-trading-card {
    background-color: #5e77bb;
    background-size: cover;r
    background-position: -15px;
    }

    .hellokitty-header {
    text-align: center;
    padding: 10px;
    }

    .hellokitty-background-style {
    background-color: #fb0006;
    border: 5px solid #fff;
    border-radius: 10px;
    margin-bottom: 10px;
    }

    .hellokitty-img {
    border: none;
    display: block;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 15px; /* positions image down */
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
        // manipulates z-index to place cards to the bottom of the stack and bring forward top card
    $(document).ready(function () {
    var count = 0;

    $(".trading-card").click(function() {
    var card = $(this);
    if(count < 4) {
    //   $(this).next().addClass("top-stack"); 
        
    $(this).removeClass("top-stack").addClass("bottom-stack");
        
        count++;
    }
    if(count == 4) {
    $("div").removeClass("bottom-stack");
        
        count = 0;
        
    //  $("div").eq(count).addClass("top-stack"); 
    }
    shuffle(card);
    });
    });
    // shuffle function in GSAP animation
    function shuffle(card) {
        TweenLite.fromTo(
            card, // target element
            0.5, // time
            {
            // sets first position
            x:410, 
            y:-15, 
            ease: Expo.easeOut}, // animation configuraton
            {
            // final position
            x:0,
            y:0,
            ease: Expo.easeIn});
    };
</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

<br><br><br><br><br><br>
<div class="container">
        
        <!-- BADTZ MARU CARD -->
        <div class="badtz-trading-card trading-card">
          <p class="badtz-header hamada">smallだ！！</p>
          <div class="badtz-info trading-card-info">
            <p class="description">俺はもうここまでだ。<br>人生をかけて発見したことを書き留める。惑星スウジには、背景が緑色のヤツがいるらしい。<br>そいつらを小さな順番につなげるとsmallの暗証番号になるらしい。だれか...頼んだ...。バタッ</p>
          </div>
        </div>
      
        <!-- POCHACCO CARD -->
        <div class="pochacco-trading-card trading-card">
              <p class="badtz-header hamada">先祖からの伝言</p>
          <div class="trading-card-info">
            <p class="description">ワシの死期は近い。先祖代々から伝わる言葉をここに残しておこう。<br>「normalの暗証番号の初めの数字は７」。私にはなんのことやら。</p>
          </div>
        </div>
      
        <!-- HELLO KITTY CARD -->
        <div class="hellokitty-trading-card trading-card">
                <p class="badtz-header hamada">スペースダイヤモンド！</p>

          <div class="trading-card-info">
            <p class="description">私の素晴らしい方程式。<br>世界は驚愕するだろう。<br><br>「レンズから見えた数字」<br>　　　　　+<br>　「closeが示した数字」<br>　　　　　+<br>　「アニマルの値」<br><br>これが大秘宝の暗証番号！ <br></p>
          </div>
        </div>
       
       <!-- KEROPPI CARD -->
        <div class="keroppi-trading-card trading-card">
          <p class="badtz-header hamada">大魔神カジュ</p>
          <div class="trading-card-info">
            <p class="description">ヒントが欲しければいつでも大魔神カジュに！</p>
          </div>
        </div>
      </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/messageCard.blade.php ENDPATH**/ ?>