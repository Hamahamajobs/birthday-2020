<?php $__env->startSection('css'); ?>


<style>
        body,
        ol,
        ul,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        th,
        td,
        dl,
        dd,
        form,
        fieldset,
        legend,
        input,
        textarea,
        i,
        select {
            margin: 0;
            padding: 0;
        }

        body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
                -ms-flex-pack: center;
                    justify-content: center;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            background-color: #2C3138;

        
                    
        }

        img {
            width: 160px;
        }

        button {
            cursor: pointer;
            outline: 0;
            width: 180px;
            height: 48px;
            border-radius: 8px;
            background-color: #2C3138;
            margin-top: 40px;
            overflow: hidden;
            -webkit-transform: scale(.7);
                    transform: scale(.7);
        }

        button::after {
            content: "";
            position: relative;
            top: -40px;
            display: block;
            width: 48px;
            height: 107%;
            background-color: #000;
            margin-top: -1px;
            margin-left: -7px;
            border-radius: 6px 0 0 6px;
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTRweCIgaGVpZ2h0PSIxN3B4IiB2aWV3Qm94PSIwIDAgMTQgMTciIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDUxLjEgKDU3NTAxKSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5TaGFwZTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPjwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIGlkPSJEZXNrdG9wLUhELUNvcHktMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTYwOS4wMDAwMDAsIC0xMDA4LjAwMDAwMCkiIGZpbGw9IiNGOUZDRkYiIGZpbGwtcnVsZT0ibm9uemVybyI+CiAgICAgICAgICAgIDxnIGlkPSJHcm91cC0xMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTQ3LjAwMDAwMCwgNDk5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwLTYtQ29weSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDYuMDAwMDAwLCA0OTUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9ImljX2ZpbGVfZG93bmxvYWRfYmxhY2tfMjRweC0oMSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2LjAwMDAwMCwgOC4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE0LDEyIEwxMCwxMiBMMTAsNiBMNCw2IEw0LDEyIEwwLDEyIEw3LDE5IEwxNCwxMiBaIE0wLDIxIEwwLDIzIEwxNCwyMyBMMTQsMjEgTDAsMjEgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=');
            background-repeat: no-repeat;
            background-position: center;
        }

        button::before {
            content: "";
            display: block;
            width: 48px;
            height: 46px;
            margin-left: -7px;
            margin-top: -1px;
            -webkit-transition: all 200ms cubic-bezier(0.25, 0.75, 0.5, 1.25);
            transition: all 200ms cubic-bezier(0.25, 0.75, 0.5, 1.25);
        }

        .box-1:hover button::before {
            width: 120%;
            opacity: .8;
            background-color: #00BF9C;
        }

        .box-2:hover button::before {
            width: 120%;
            opacity: .8;
            background-color: #653EE6;
        }

        .box-3:hover button::before {
            width: 120%;
            opacity: .8;
            background-color: #008BFF;
        }

        .box-4:hover button::before {
            width: 120%;
            opacity: .8;
            background-color: #FF6500;
        }

        .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            -ms-flex-pack: distribute;
                justify-content: space-around;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            width: 80vw;
            height: 100vh;
            margin-left: 6vw;
        }

        .box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
                -ms-flex-direction: column;
                    flex-direction: column;
            -webkit-transition: all .3s ease-out;
            transition: all .3s ease-out;
            will-change: transform;
        }

        .box:hover .cover {
            -webkit-transform: translateY(-14px) scale(1.04);
                    transform: translateY(-14px) scale(1.04);
        }

        .box-1 button {
            border: 1px solid #00BF9C;
            color: #fff;
            font-size: 22px;
            text-align: right;
            padding-right: 20px;
            line-height: 40px;
        }

        .box-1 button::after {
            content: "";
            background-color: #00BF9C;
            top: -85px
        }

        .box-2 button {
            border: 1px solid #653EE6;
            color: #fff;
            font-size: 22px;
            text-align: right;
            padding-right: 20px;
            line-height: 40px;
        }

        .box-2 button::after {
            content: "";
            background-color: #653EE6;
            top: -85px
        }

        .box-3 button {
            border: 1px solid #008BFF;
            color: #fff;
            font-size: 22px;
            text-align: right;
            padding-right: 20px;
            line-height: 40px;
        }

        .box-3 button::after {
            content: "";
            background-color: #008BFF;
            top: -85px
        }

        .box-4 button {
            border: 1px solid #FF6500;
            color: #fff;
            font-size: 22px;
            text-align: right;
            padding-right: 20px;
            line-height: 40px;
        }

        .box-4 button::after {
            content: "";
            background-color: #FF6500;
            top: -85px
        }

        .cover {
            -webkit-transition: all 400ms ease-in-out;
            transition: all 400ms ease-in-out;
            will-change: transform;
        }

        .cover img {
            -webkit-transition: all 260ms ease-in-out;
            transition: all 260ms ease-in-out;
        }

        .box .cover::after {
            content: "";
            z-index: -99;
            position: absolute;
            top: 20px;
            left: -20px;
            display: block;
            width: 160px;
            height: 214px;
            opacity: 0;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 160px 214px;
            -webkit-filter: blur(24px);
                    filter: blur(24px);
            -webkit-transition: all 260ms ease-in-out;
            transition: all 260ms ease-in-out;
            will-change: transform;
            -webkit-transform: scale(.6);
                    transform: scale(.6);
        }

        .box:hover .cover::after {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1);
        }

        .box-1 .cover::after {
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-893bc9989a52eba0.png');
        }

        .box-2 .cover::after {
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-964edcf0f07211b0.png');
        }

        .box-3 .cover::after {
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-2ebb2b6f93add843.png');
        }

        .box-4 .cover::after {
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-f79c4cc8de2f84ae.png');
        }

        .box-1 button div::before {
            content: 'Small';
            position: relative;
            
            top: -44px;
            left: -4px;
            color: #00BF9C;
            font-size: 30px;
            font-weight: 300;
        }

        .box-1:hover button div::before {
            color: #fff;
        }

        .box-3 button div::before {
            content: 'Normal';
            position: relative;
            top: -44px;
            left: 3px;
            color: #008BFF;
            font-size: 28px;
            font-weight: 300;
        }

        .box-3:hover button div::before {
            color: #fff;
        }

        .box-4 button div::before {
            content: 'Big!!';
            position: relative;
            top: -44px;
            left: -9px;
            color: #FF6500;
            font-size: 35px;
            font-weight: 300;
        }

        .box-4:hover button div::before {
            color: #fff;
        }

        .dr {
        position: absolute;
        bottom: 16px; 
        right: 16px;
        width:100px;
        }


        /* ポップアップ */
        /*ポップアップ*/
        .modal{
            display: none;
            height: 100vh;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .modal__bg{
            background: rgba(0,0,0,0.7);
            height: 100vh;
            position: absolute;
            width: 100%;
        }
        .modal__content{
            background: #fff;
            left: 50%;
            padding: 40px;
            position: absolute;
            top: 50%;
            transform: translate(-50%,-50%);
        width: 60%;
        text-align: center;
        font-size: 160%;
        }

        .hama-password{
            border: solid 2px #C0C0C0;
            
        }

        /* .hama-password-send-btn{
        color: white;
        font-size: 400%;
        } */
        .hama-password-send-btn{
            cursor : pointer;
            
        }
        .hama-password-send-btn:hover{
            display: inline-block;
            animation: hurueru .1s  infinite;
        }
        @keyframes  hurueru {
            0% {transform: translate(0px, 0px) rotateZ(0deg)}
            25% {transform: translate(2px, 2px) rotateZ(1deg)}
            50% {transform: translate(0px, 2px) rotateZ(0deg)}
            75% {transform: translate(2px, 0px) rotateZ(-1deg)}
            100% {transform: translate(0px, 0px) rotateZ(0deg)}
        }


        .hama-password-send-btn{
            font-size: 220%;
            position: relative;
            top:14px;
        }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>

    $(function(){
        
        $('#hama-small').click(function() { 
            //引数に画像データを入れて送信
            //質問投稿完了後のポップアップ表示
            $('.js-modal-small').fadeIn();
        });

        $('#hama-normal').click(function() { 
            //引数に画像データを入れて送信
            //質問投稿完了後のポップアップ表示
            $('.js-modal-normal').fadeIn();
        });

        $('#hama-big').click(function() { 
            //引数に画像データを入れて送信
            //質問投稿完了後のポップアップ表示
            $('.js-modal-big').fadeIn();
        });



        // ポップアップを閉じる
        $('.js-modal-close').on('click',function(){
            $('.js-modal').fadeOut();
            
            //return false;
        });

        // small 暗証番号が正しいかをチェック
        $('#send-password-small').click(function() { 
            var password             = $("#input-small").val();
            // if(password != 4616){数字ホバーで発見
            if(password != 4616){
                alert("暗証番号が違うみたい。。。。");
            }
            else{
                window.location.href = 'getSmallTreger';
            }
        });
        // normal 暗証番号が正しいかをチェック
        $('#send-password-normal').click(function() { 
            var password             = $("#input-normal").val();
            // 7884
            if(password != 7884){
                alert("暗証番号が違うみたい。。。。");
            }
            else{
                window.location.href = 'getNormalTreger';
            }
        });

        // big 暗証番号が正しいかをチェック
        $('#send-password-big').click(function() { 
            var password             = $("#input-big").val();
            // if(password != {4713  + 7 + 4
            if(password != 471374){
                alert("暗証番号が違うみたい。。。。");
            }
            else{
                window.location.href = 'getBigTreger';
            }
        });


    })






</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="box box-1" id="hama-small">
        <div class="cover"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-893bc9989a52eba0.png" alt=""></div>
        <button><div></div></button>
        
    </div>
    <div class="box box-3" id="hama-normal">
        <div class="cover"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-2ebb2b6f93add843.png" alt=""></div>
        <button><div></div></button>
    </div>
    <div class="box box-4" id="hama-big">
        <div class="cover"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-f79c4cc8de2f84ae.png" alt=""></div>
        <button><div></div></button>
    </div>
</div>



    <!--ポップアップ画面-->
    <div class="modal js-modal js-modal-small">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-893bc9989a52eba0.png" alt="">
            <input type="text" class="hama-password" placeholder="暗証番号4ケタ" id="input-small">
            
            <svg class="bi bi-shield-lock hama-password-send-btn" id="send-password-small" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                <path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z"/>
              </svg>
        </div>
    </div>


    <div class="modal js-modal js-modal-normal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-2ebb2b6f93add843.png" alt="">
            <input type="text" class="hama-password" placeholder="暗証番号4ケタ"id="input-normal">
            
            <svg class="bi bi-shield-lock hama-password-send-btn" id="send-password-normal" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                <path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z"/>
              </svg>
        </div>
    </div>


    <div class="modal js-modal js-modal-big">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/945546/3433202-f79c4cc8de2f84ae.png" alt="">
            <input type="text" class="hama-password" placeholder="暗証番号6ケタ"id="input-big">
            
            <svg class="bi bi-shield-lock hama-password-send-btn" id="send-password-big" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                <path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                <path d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z"/>
              </svg>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/rockPassword.blade.php ENDPATH**/ ?>