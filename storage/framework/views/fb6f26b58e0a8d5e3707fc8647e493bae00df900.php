<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
 
    <link rel='stylesheet' href='css/buty-btm.css'>  
    <link rel='stylesheet' href='css/buty-btn3.css'> 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    

<style>
    @import  url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }



    header {
            position: fixed;
            width: 100%;
            height: 50px;
            background: linear-gradient(to right, #696969 0%, #A9A9A9 80%, #D3D3D3 100%);
            /* position: absolute; */
            
            top:0px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            z-index: 100;
            font-size: 150%;
            
    }


    header > nav > div {
            float: left;
            width: 25%;
            height: 100%;
            position: relative;
    }

    header > nav > div > a {
            text-align: center;
            width: 100%;
            height: 100%;
            display: block;
            line-height: 50px;
            color: #fbfbfb;
            transition: background-color 0.2s ease;
            text-transform: uppercase;
            
    }

    header > nav > div:hover > a {
            background-color: rgba(0, 0, 0, 0.1);
            color:white;
            cursor: pointer;
            text-decoration: none;
    }

    header > nav > div > div {
            display: none;
            overflow: hidden;
            background-color: white;
            min-width: 100%;
            position: absolute;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            padding: 10px;
            
    }

    header > nav > div:not(:first-of-type):not(:last-of-type) > div {
            left: -50%;
            border-radius: 0 0 3px 3px;
    }

    header > nav > div:first-of-type > div {
            left: 0;
            border-radius: 0 0 3px 0;
    }

    header > nav > div:last-of-type > div {
            right: 0;
            border-radius: 0 0 0 3px;
    }

    header > nav > div:hover > div {
            display: block;
    }

    header > nav > div > div > a {
            display: block;
            float: left;
            padding: 8px 10px;
            width: 80%;
            margin: 5% 10% ;
            text-align: center;
            background-color: #f44355;
            color: #fbfbfb;
            border-radius: 2px;
            transition: background-color 0.2s ease;
    }

    header > nav > div > div > a:hover {
            background-color: #D7EEFF;
            cursor: pointer;
            text-decoration: none;
    }

    #hamada-session{
        background-color: lightgreen;
    }


</style>


<?php echo $__env->yieldContent('css'); ?>
</head>


<body>
    <header>
        <nav>
            <div>
                <a href="rockPassword">お宝箱</a>
            </div>

            <div>
                <a href="line-message">仲間と話す</a>
            </div>

            <div>
                <a href="checkPencil">大魔神カジュのヒント</a>
            </div>

            <div>
                <a><span>冒険</span>へ</a>
                <div>
                    <a href="messageCard">惑星オキテガミ</a>
                    <a href="numbarHover">惑星スウジ</a>
                    
                    <a href="pitagora">理学の星ピタゴラスイッチ</a>
                    

                    <?php if(session()->get('stage','') >= 1): ?>
                        <a href="panda">製造の星コウジョウ</a>    
                    <?php else: ?>
                        <a>??????</a>    
                    <?php endif; ?>

                    <?php if(session()->get('stage','') >= 1): ?>
                        <a href="messageBlock">惑星メッセージブロック</a>    
                    <?php else: ?>
                        <a>??????</a>    
                    <?php endif; ?>

                    

                    <?php if(session()->get('stage','') >= 3): ?>
                        <a href="animal">生命の星アニマル</a>    
                    <?php else: ?>
                        <a>??????</a>    
                    <?php endif; ?>                    

                    <?php if(session()->get('stage','') >= 3): ?>
                        <a href="threeLines">惑星サンボンセン</a>
                    <?php else: ?>
                        <a>??????</a>    
                    <?php endif; ?>                    
                    
                </div>
            </div>
        </nav>
    </header>

        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        
        
        <?php echo $__env->yieldContent('js'); ?>

    </body>
</html><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/template.blade.php ENDPATH**/ ?>