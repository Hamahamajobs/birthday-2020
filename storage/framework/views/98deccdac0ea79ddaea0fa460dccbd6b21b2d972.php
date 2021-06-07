<?php $__env->startSection('css'); ?>

<link rel='stylesheet' href='css/checkPencil.css'>
<style>
    .balloon-set-box {
    display: flex;
    flex-wrap: wrap;
    }
    .balloon-set-box.left { /* 左 */
        margin-left: 400px;
    flex-direction: row;
    }
    .balloon-set-box.right { /* 右 */
        margin-right: 400px;
    flex-direction: row-reverse; /* アイコンと吹き出しの並びを入れ替える */
    }
    .balloon {
    position: relative; /* 三角の位置を固定するために設定 */
    display: inline-block;
    max-width: 410px;
    margin: 10px 20px 20px; /* 上 左右 下のマージン */
    padding: 8px 15px; /* ふきだし内の余白 */
    background: #f0f0f0; /* 背景色 */
    text-align: left; /* テキストの揃え */
    border-radius: 15px;
    }
    .balloon::after {
    content: '';
    border: 14px solid transparent;
    border-top-color: #f0f0f0;
    position: absolute;
    top: 0;
    }
    .left .balloon::after { /* 左側からの三角の位置 */
    left: -10px;
    }
    .right .balloon::after { /* 右側からの三角の位置 */
    right: -10px;
    }

    .icon-box {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 2px solid #fff;
    box-shadow: 0 0 6px rgba(0,0,0,0.3);
    overflow: hidden;
    }

    #hama-line-message-wrapper{
        /* text-align: center; */
        margin: 100px 0 0 0 ;
        font-size: 140%;
    }
    #soundImage{
        text-align: center;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
// stop erase animations from firing on load
document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("form").addEventListener("click",e => {
        let checkboxCL = e.target.classList,
            pState = "pristine";

        if (checkboxCL.contains(pState))
            checkboxCL.remove(pState);
    });
});

$(function(){

    $('#hamada-agree').click(function() { 
        var flag1 = document.hamadaAgreeCheckForm.hamadaAgreeCheckbox[0].checked;
        var flag2 = document.hamadaAgreeCheckForm.hamadaAgreeCheckbox[1].checked;
        var flag3 = document.hamadaAgreeCheckForm.hamadaAgreeCheckbox[2].checked;
        if(flag1 && flag2 && flag3 ){
            alert("大魔神「よかろう！ヒントをあげよう。でもその前に.....。」");
            window.location.href = 'checkPencil';
        }
        else{
            alert("大魔神「全部をチェックしないと、ヒントはないじょ( ͡° ͜ʖ ͡°」")
        }
    });
})

</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>


    <div class="hama-pencil">
            <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/green.png"  width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">どうやら、これに同意しないとヒントは貰えないらしいぜ...。</div>
                </div>
                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/pink.png"  width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">ワニャ、頑張って！！</div>
                </div>
                
        <form name="hamadaAgreeCheckForm">
            <label><input class="cb pristine" name="hamadaAgreeCheckbox" type="checkbox"> <span>スペースダイヤモンドを受け取る覚悟はありますか？</span></label>
            <label><input class="cb pristine" name="hamadaAgreeCheckbox" type="checkbox"> <span>大魔神カジュのことが宇宙で一番好きですか？</span></label> 
            <label><input class="cb pristine" name="hamadaAgreeCheckbox" type="checkbox"> <span>同意したら大魔神カジュと、チューです(*⁰▿⁰*)</span></label>
        </form>
    </div>

    <div class="wrapper" id="hamada-agree">
        <a  class="fancy-button pop-onhover bg-gradient1 pulse-grow"><span id="hama-btn-messages">Agree</span></a>
    </div><!-- /.wrapper -->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/checkPencil.blade.php ENDPATH**/ ?>