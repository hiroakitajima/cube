<?php include($_SERVER['DOCUMENT_ROOT']. '/tajima/cube/cmn/inc/settings.php'); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta name="description" content="サイトの説明">
    <meta name="keywords" content="サイトのキーワード,キーワード">
    <title>HIRO TAJIMA</title>
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/cssreset-min.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/labstrap.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/cmn.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/layout.css">
    <link rel="stylesheet" href="<?php echo(HOMEURL); ?>cmn/css/<?php echo($css); ?>.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo(HOMEURL); ?>cmn/js/jquery-1.12.3.min.js"></script>
    <script src="<?php echo(HOMEURL); ?>cmn/js/desvg.js"></script>
  </head>
  <body class="<?php echo($body_page); ?>">

    <!-- ! ヘッダー ============================== -->
    <header>
      <div class="container">
        <a class="logo" href="<?php echo(HOMEURL); ?>">
          <img class="normal" src="<?php echo(HOMEURL); ?>cmn/img/logo.svg">
          <img class="white" src="<?php echo(HOMEURL); ?>cmn/img/logo_white.svg">
        </a>        
      </div>
    </header>
    
    <!-- ! メイン ============================== -->
    <main>
      
      <script>
      $(function(){
          $('body').removeClass("body_turn");
          setInterval(function(){
              $('body').toggleClass("body_turn");
          },10000);
      });
    </script>
      
      
      <ul class="list_design split_5">
        <li class="d"><div>D</div></li>
        <li class="e"><div>E</div></li>
        <li class="si"><div>SI</div></li>
        <li class="g"><div>G</div></li>
        <li class="n"><div>N</div></li>
      </ul>
      <div class="container">
        
        <script>
          $(".d").hover(
            function () {
              $(".stage").addClass("d");
            },function() {
              $(".stage").removeClass("d");
            }
          );
          $(".e").hover(
            function () {
              $(".stage").addClass("e");
            },function() {
              $(".stage").removeClass("e");
            }
          );
          $(".si").hover(
            function () {
              $(".stage").addClass("si");
            },function() {
              $(".stage").removeClass("si");
            }
          );
          $(".g").hover(
            function () {
              $(".stage").addClass("g");
            },function() {
              $(".stage").removeClass("g");
            }
          );
          $(".n").hover(
            function () {
              $(".stage").addClass("n");
            },function() {
              $(".stage").removeClass("n");
            }
          );
        </script>
        
        <div class="stage">
            <div class="whole" id="whole">
                <div class="circle"></div>
                <div class="circle circle_02"></div>
                <div class="circle circle_03"></div>
                <div class="circle circle_04"></div>
                <div class="circle circle_05"></div>
<!--
                <div class="circle circle_06"></div>
                <div class="circle circle_07"></div>
-->
                
                
                <script>
                  function rotateStart(){             //処理を定義
                      
                      //処理の開始 
                      var rotate = $(".whole");
                      var clickThis = true;                      //ONの状態
                      var roop;
                      var count = 0; 
                      function roopNow(){
                        roop = setInterval(function(){    //setInterval 一定時間ごとに特定の処理を繰り返す
                            count++;
                            if(count > 720){
                                count = 0;
                            }else{
                                rotate.css("transform", "rotateX("+ count + 0 +"deg) rotateY("+ count + 0 +"deg) rotateZ("+ count * 2 +"deg)");
                            }
                        }, 200);
                      }
                      roopNow(); //roopNowを発動
                      
                      
/*
                      var clickEventType=((window.ontouchstart!==null)?'click':'touchstart');
                      $(".whole").on(clickEventType, function() {
                      	// クリック、タップ時の処理を記述
                      });
                      
*/
                      
                      $(".whole").hover(
                          function rotateStart() {
                            clearInterval(roop);
                          },function rotateStart() {
                            roopNow();
                          }
                      );  
                      
                      
/*
                      $(".si").hover(
                          function rotateStart() {
                            clearInterval(roop);
                          },function rotateStart() {
                            roop = setInterval(function(){    //setInterval 一定時間ごとに特定の処理を繰り返す
                                count++;
                                if(count > 720){
                                    count = 0;
                                }else{
                                    rotate.css("transform", "rotateX("+ count + 0 +"deg) rotateY("+ count + 0 +"deg) rotateZ("+ count * 2 +"deg)");
                                }
                            }, 200);
                          }
                      );  
*/
//                       clearInterval(roop);
//                     debugger;   //確認用 consoleで確認
                  }
                  
                  
  
                  window.onload = function(){          //処理を走らす
                      rotateStart();
                  };
                  
                    
                    
                    
//                     console.log('YOBARETA');
                    //回転させる
                                        
//                     start();
                    //クリックされた時の処理
/*
                    rotate.click(function(){
                        toggle();                       //表示・非表示を繰り返す
                    });
*/
                    //ループ中かどうか判断する
/*
                    function toggle(){                  //トグルした時？？
                        if(clickThis){
                            clearInterval(roop);            //setInterval()でセットしたタイマーを解除する　停止
                            clickThis = false;              //OFFの状態
                        }else{
                            start();                        //開始
                            clickThis = true;               //ONの状態
                        }
                    }
*/
                    
                $('.whole').hover(
                    function() {
                      $(this).css("transform","rotateX(0) rotateY(0) rotateZ(0)");
                    },function() {
                        //マウスカーソルが離れた時の処理
                    }
                );
                
/*
                $('.si').hover(
                    function() {
                      $(".whole").css("transform","rotateX(180deg) rotateY(0) rotateZ(0)");
                    },function() {
                        //マウスカーソルが離れた時の処理
                    }
                );
*/
                
                </script>
                
                
                
                
                <!-- ! cube_th ============================== -->
                <div class="cube_th">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> copy"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_th copy">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_th side">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> first"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> second"></span>
                    <?php }?>
                    <span class="face_01 third"></span>
                    <span class="face_03 third"></span>
                    <span class="face_04 third"></span>
                  </span>
                  
                  <span class="face_01 square"></span>
                  <span class="face_01 square square2"></span>
                  <span class="face_03 square"></span>
                  <span class="face_03 square square2"></span>
                  <span class="face_04 square"></span>
                  <span class="face_04 square square2"></span>
                  <span class="face_05 square"></span>
                  <span class="face_06 square"></span>
                  <span class="face_06 square square2"></span>
                  
                </div>
                
                
                <!-- ! cube_si ============================== -->
                <div class="cube_si">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_si copy">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_si side">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> first"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> second"></span>
                    <?php }?>
                  </span>
                  
                  <span class="face_01 square"></span>
                  <span class="face_01 square square2"></span>
                  <span class="face_02 square"></span>
                  <span class="face_06 square"></span>
                  
                </div>
                
                                
                <!-- ! cube_e ============================== -->
                <div class="cube_e">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_e copy">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_e side">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> first"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> second"></span>
                    <?php }?>
                    <span class="face_04 third"></span>
                  </span>
                  
                  <span class="face_01 square"></span>
                  <span class="face_02 square"></span>
                  <span class="face_03 square"></span>
                  
                </div>
                
                
                <!-- ! cube_d ============================== -->
                <div class="cube_d">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_d copy">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_d side">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> first"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> second"></span>
                    <?php }?>
                    <span class="face_04 third"></span>
                  </span>
                  
                  <span class="face_02 square"></span>
                  <span class="face_03 square"></span>
                  <span class="face_04 square"></span>
                  <span class="face_04 square square2"></span>
                  
                </div>
                
                
                <!-- ! cube_g ============================== -->
                <div class="cube_g">
                  <span class="frame">
                    <?php for($i=0;$i<9;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_g copy">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_g side">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> first"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> second"></span>
                    <?php }?>
                  </span>
                  
                  <span class="face_01 square"></span>
                  <span class="face_05 square"></span>
                  
                </div>

                
                <!-- ! cube_n ============================== -->
                <div class="cube_n">
                  <span class="frame">
                    <?php for($i=0;$i<9;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_n copy">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?>"></span>
                    <?php }?>
                  </span>
                </div>
                <div class="cube_n side">
                  <span class="frame">
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> first"></span>
                    <?php }?>
                    <?php for($i=0;$i<6;$i++) { ?>
                    <span class="face_0<?php echo($i + 1)?> second"></span>
                    <?php }?>
                    <span class="face_01 third"></span>
                    <span class="face_06 third"></span>
                    
                    
                    <span class="face_01 square"></span>
                    <span class="face_01 square square2"></span>
                    <span class="face_02 square"></span>
                    <span class="face_03 square"></span>
                    <span class="face_03 square square2"></span>
                    <span class="face_04 square"></span>
                    <span class="face_04 square square2"></span>
                    <span class="face_05 square"></span>
                    <span class="face_06 square"></span>
                    <span class="face_06 square square2"></span>
                  </span>
                </div>
                
                
            </div>
        </div>
        
        <div class="shape_01"></div>
        <div class="shape_02"></div>
        <div class="shape_03"></div>
        <div class="shape_04"></div>
        <div class="shape_05"></div>
        <div class="shape_06"></div>

        
<!--
        <script>
          $(function(){
              var marker = $('.shape');
              var interval = 1000; //発生間隔
              var rate = 10; //発生確率
              var timeout = 2000; //消えるまでの時間
              setInterval(function(){randomMarker(marker, rate, timeout)}, interval);
          });
           
          function randomMarker(marker, rate, timeout){
              marker.each(function() {
                  var num = getRandomInt(1, 100);
                  var target = $(this);
                  if(num <= rate && target.is(':hidden')){
                      target.show();
                      setTimeout(function(){
                          target.fadeOut('slow');
                      }, timeout);
                  }
              });
          }
        </script>
        
-->
        
        
      </div>
    </main>  
  
    <!-- ! フッター ============================== -->
    <footer>
      <div class="container">        
        <p class="copyright">@2018 hiro tajima</p>
      </div>
    </footer>
    
    <!-- ! スクリプト ============================== -->
    <script>
      //スマホメニューホバーの動き
      var linkTouchStart = function(){
          thisAnchor = $(this);
          touchPos = thisAnchor.offset().top;
          moveCheck = function(){
              nowPos = thisAnchor.offset().top;
              if(touchPos == nowPos){
                  thisAnchor.addClass("hover");
              }
          }
          setTimeout(moveCheck,100);
      }
      var linkTouchEnd = function(){
          thisAnchor = $(this);
          hoverRemove = function(){
              thisAnchor.removeClass("hover");
          }
          setTimeout(hoverRemove,500);
      }
      $(document).on('touchstart mousedown','a',linkTouchStart);
      $(document).on('touchend mouseup','a',linkTouchEnd);
    </script>
    
    <!--  desvg  -->
    <script>
      window.addEventListener('load', function(){
          deSVG('.svg', true);
      });
    </script>
    
    
    
    
    
  </body>
</html>