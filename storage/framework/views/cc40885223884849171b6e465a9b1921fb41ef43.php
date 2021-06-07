<?php $__env->startSection('css'); ?>


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

</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div id="hama-line-message-wrapper">

    
        <?php switch(session()->get('stage','') ?? ''):

        case ("1"): ?>
            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/pink.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">やったわ！smallをゲットしたわ！嬉しい！</div>
            </div>
            <div class="balloon-set-box right">
                <div class="icon-box">
                    <img src="picture/wanya.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">いえーい！！</div>
            </div>
                    
            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/green.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">この調子で次はnormalをゲットしたいな。</div>
            </div>


            <hr>
            <div id="soundImage">
                <p>シュイーーーーン</p>
            </div>
            <hr>



            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/green.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">お！新しい惑星に行けるようになったぞ！いってみよう！</div>
            </div>

                <?php break; ?>


        <?php case ("2"): ?>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">ジッジジ.......うぅ。</div>
        </div>


        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/pink.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">あなたは？！</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">拙者は、宇宙一の剣士、パンダーマンだ！！</div>
        </div>

        <div class="balloon-set-box right">
            <div class="icon-box">
                <img src="picture/wanya.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">お、おおぉ・・・。(工場で製造されたのに？？そして、彼の背中にメッセージが。。。)</div>
        </div> 

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">君達は何をしているのかね。</div>
        </div>       
        
        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/green.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">オイラ達は宇宙の大秘宝スペースダイヤモンドを探しているんだ。</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/pink.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">パンダーマンも一緒に旅をしましょ！</div>
        </div> 

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">うむ！もちろんだ！！</div>
        </div>     

        <hr>
        <div id="soundImage">
            <p>ぼよよ〜〜〜んんんん</p>
        </div>
        <hr>                     

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">はい、ども、こんにちは。大魔神カジュです( ͡° ͜ʖ ͡°)君たち、いい感じに進んでいるね〜。</div>
        </div>     

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">こ、こやつは。。。。？？</div>
        </div>
                        
        <div class="balloon-set-box right">
            <div class="icon-box">
                <img src="picture/wanya.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">変なヤツなの。。。。</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">はい、そこシャラ〜〜〜ップ！</div>
        </div>
                        
        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">君たちに大きなヒントをあげよう！これからは、君たちの惑星(この部屋)を探索し、アナログな世界とデジタルな世界を行き来することで、クリアにつながる。これを肝に命じておくのだ〜</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/pink.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">ワニャ！頑張って！</div>
        </div>
                        
        <div class="balloon-set-box right">
            <div class="icon-box">
                <img src="picture/wanya.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">わ、わたす、がんばりゅ！！！</div>
        </div>          

        <?php break; ?>




        <?php case ("3"): ?>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">君たちついにここまできたね〜。スペースダイヤモンドまで、あと一息ですな。ぬふふ。がんばってくれたまえ〜〜〜。スペースダイヤモンドは、めっちゃやばいから、いや、まじ、ヤバタンだから〜〜。</div>
        </div>
                        
        <div class="balloon-set-box right">
            <div class="icon-box">
                <img src="picture/wanya.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">。。。。。。。。。</div>
        </div>          

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/pink.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">大魔神のことは放っておいて、みんなで頑張りましょ！</div>
        </div>
                        
        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png"  width="60" height="60" class="icon">
            </div>
            <div class="balloon">頑張ろー！！</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">ちなみに君たちはスペースダイヤモンドを入手したらどうするの？大切に使ってくれるのかな？</div>
        </div>

        <div class="balloon-set-box right">
            <div class="icon-box">
                <img src="picture/wanya.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">それは「道具」なんですね？？</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">それはもちろん、どうg。。。。。。。<br>ゴホンゴホン。これ以上は言えませ〜〜ん</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/hamada.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">それじゃぁ、何か質問があったら呼んでね〜〜</div>
        </div>

        <hr>
            <div id="soundImage">
                <p>しゅい〜〜〜ん</p>
            </div>
        <hr>  
        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/panda.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">あ、いなくなちゃった。</div>
        </div>
        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/pink.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">スペースダイヤモンドは道具なのかしら？</div>
        </div>

        <div class="balloon-set-box left">
            <div class="icon-box">
                <img src="picture/green.png" width="60" height="60" class="icon">
            </div>
            <div class="balloon">今はとにかく探すでござるよ！</div>
        </div>




                <?php break; ?>




        <?php case ("4"): ?>

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/hamada.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">ついに手に入れちゃったね。。。。スペースダイヤモンド。。。。</div>
            </div>
                        
            <div class="balloon-set-box right">
                <div class="icon-box">
                    <img src="picture/wanya.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">こんなの使えません！！</div>
            </div>



            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/hamada.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">いや〜宇宙の大秘宝ですから、めっちゃ大切に使って欲しいのだ(*⁰▿⁰*)</div>
            </div>
                        
            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/pink.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">そーよ、ワニャ！自分で見つけたお宝は自分のモノよ！存分に使いましょ！</div>
            </div>

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/green.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">また冒険しようぜ！</div>
            </div>


            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/panda.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">楽しみにしておる！</div>
            </div>


        <hr>
        <div id="soundImage">
            <p>ぼよよ〜〜〜んんんん</p>
        </div>
        <hr>         
            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/hamada.png"  width="60" height="60" class="icon">
                </div>
                <div class="balloon">うむ！それでは、また！！</div>
            </div>
                <?php break; ?>


        <?php default: ?>
            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/pink.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">ふう、これから私たちの冒険が始まるわね！私はピン子よ！よろしくね。</div>
            </div>
                        
            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/green.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">オイラはピン太郎！よろしくなのだ！</div>
            </div>

            <div class="balloon-set-box right">
                <div class="icon-box">
                    <img src="picture/wanya.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">私は「わにゃ」！　よろしくね！</div>
            </div>

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/green.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">スペースダイヤモンドはどこにあるのかな？</div>
            </div>
    

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/pink.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">画面左上の「お宝箱」が最強にアヤシイわね。。。
                </div>
            </div>

            <hr>
            <div id="soundImage">
                <p>ガチャガチャ</p>
            </div>
            <hr>

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/pink.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">あれれ？開かない。。。そして、暗証番号?!　何よこれ！</div>
            </div>


            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/hamada.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">ボヨヨ〜ン！<br>こ〜んにちは〜〜大魔神カジュで〜〜す。</div>
            </div>

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/pink.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">.........</div>
            </div>

            <div class="balloon-set-box left">
                <div class="icon-box">
                    <img src="picture/green.png" width="60" height="60" class="icon">
                </div>
                <div class="balloon">.........</div>
            </div>

                <div class="balloon-set-box right">
                    <div class="icon-box">
                        <img src="picture/wanya.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">.........</div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/green.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">どちら様ですか？？</div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/hamada.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">大魔神カジュで〜〜す( ͡° ͜ʖ ͡°)<br>この宇宙の創設者でしゅ。君たちスペースダイヤモンドを探しているのだね？うむ、ずばり教えよう。その宝箱の中にあります(*⁰▿⁰*)<br><br>宝箱は全部で３つあるよん。ビッグサイズの中身がスペースダイヤモンドだよ〜ん。でもただではあげませ〜ん。いろんな惑星を冒険して、暗号を解除してくださ〜い。
                    </div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/green.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">うおおおお、燃えてきたぜえええ！！<br>大魔神カジュ様さいこー！！

                    </div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/pink.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">それじゃあ早速、冒険へでかけましょ！！</div>
                </div>
    
                <div class="balloon-set-box right">
                    <div class="icon-box">
                        <img src="picture/wanya.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">ふぁいとー！！！</div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/hamada.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">あと大魔神カジュからヒントを貰いたかったら、”同意書”を記入してねん(*⁰▿⁰*)<br>いつでもヒントをプレゼントしちゃいます〜〜。<br><br>"同意書"にサインしたらね....。ヒヒヒ。
                    </div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/pink.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">ワニャ。右上の「冒険へ」から色んな惑星へ行けるわよ！早速行きましょ。</div>
                </div>

                <div class="balloon-set-box left">
                    <div class="icon-box">
                        <img src="picture/pink.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">惑星オキテガミ。。。なんかアヤシイな。</div>
                </div>
    

                <div class="balloon-set-box right">
                    <div class="icon-box">
                        <img src="picture/wanya.png" width="60" height="60" class="icon">
                    </div>
                    <div class="balloon">レッツゴー！</div>
                </div>




                

            <?php break; ?>
    <?php endswitch; ?>





    


<br><br><br><br><br><br>
<br><br><br><br><br><br>

</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadakazutaka/Main/laravel_app/BirthdayProject/resources/views/line-message.blade.php ENDPATH**/ ?>