<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Memoires</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./libraries/jquery-ui.css">
        <link rel="stylesheet" href="./libraries/bootstrap.css">
        <link async href="http://fonts.googleapis.com/css?family=Passero%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="./libraries/jquery-3.2.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./libraries/bootstrap-filestyle.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Space+Mono|Spirax" rel="stylesheet">
        <script>
            $(document).ready(function() {
                $("#fileUpload").on("change" , function () {
        
                var tmppath = URL.createObjectURL(event.target.files[0]);
                $("#target_img").attr("src",tmppath);

                });
                
                $("#opacity").click(function () {
                    $("#target_img").css({
                        "opacity" : "+=0.1"
                    })
                   
                })
              
                $("#opacity-").click(function () {
                    $("#target_img").css({
                        "opacity" : "-=0.1"
                    })
                })

                $("#radius").click(function () {
                    $("#target_img").css({
                        "border-radius" : "+=50px"
                    })
                   
                })
              
                $("#radius-").click(function () {
                    $("#target_img").css({
                        "border-radius" : "-=50px"
                    })
                })

                $("#rotate").click(function () {
                    $("#target_img").css({
                        "border-radius" : "-=50px"
                        
                    })
                })


               

                // 저장시 설정했던 CSS 밸류들이 저장됨.
                $("#sumbit_btn").click(function () {
                    var opacity_Val =  $("#target_img").css("opacity");
                })
              
                
            });
           
            // 이미지 효과 버튼 누를시 이미지.CSS 변경되는 스크립트 추가 예정.
       
        </script>
        <style>
            .Space_Mono{
                font-family : 'Space Mono', monospace;
                
            }
            .Amatic_SC{
                font-family : 'Amatic SC', cursive;
            }
            .Spirax{
                font-family : 'Spirax', cursive; 
            }
            .bg-1{
                background-color : #FFFAFB;
            }
            #profile_img{
                border-radius: 50%;
            }
            #target_img{
                width: 100%;
                height : 600px;
            }
            .form_container{
                width : 80%;
            }
            
            .container-fluid{
                height :100vh;
            }
            #submit_btn{
                margin-top : 20px;
            }
            .rect{
                width : 100%;
                height : 100px;
                
                
            }
            #exampleFormControlSelect1{
                margin-top : -43.5%;
                margin-bottom: 5%;
                height : 50px;
                
            }
           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="col-1"></div>
                <div class="collapse navbar-collapse">
                    <img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/device-camera-icon.png" alt="" width="30" height="30">
                    <ul class="navbar-nav mr-auto" id="navbarText">
                        <li class="nav-item large">
                        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item large">
                        <a class="nav-link" href="mymemories.php">My Memories</a>
                        </li>
                        <li class="nav-item large">
                        <a class="nav-link active" href="writing.php">Writing</a>
                        </li>
                       </ul>
                    <span class="navbar-text">
                    </span>
                </div>
                  
            <div class="col-2">
                       
                        <ul class="navbar-nav mr-auto">
                            <img id="profile_img" width="45" height="45" src="http://www.vogue.co.kr/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="">
                            <li class="nav-item large">
                                <a class="nav-link active" href="">(user_name)</a>
                            </li>
                        </ul>
            </div> 
                
            
            <div class="col-1"></div>
        </nav>
        <div class="container-fluid">
           
            <div class="row bg-1 h_100">
               
                <div class="col-1"></div>
                <div class="col-10">

                
                    <div class="row bg-1 h_100 align-items-center">
                        
                        <div class="col-2 text-center">
                            <form action="writing.php" method="POST">
                                <div class="form-group">
                                        <label for="exampleFormControlSelect1"></label>
                                        <select class="form-control-lg form-control" id="exampleFormControlSelect1">
                                        <option>Fonts...</option>    
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        </select>
                                        
                                        <button type="button" id="opacity" class="rect btn btn-primary btn-lg btn-block">Opacity +</button>
                                        <button type="button" id="opacity-" class="rect btn btn-danger btn-lg btn-block">Opacity -</button>
                                        <button type="button" id="radius" class="rect btn btn-primary btn-lg btn-block">radius +</button>
                                        <button type="button" id="radius-" class="rect btn btn-danger btn-lg btn-block">radius -</button>
                                        <button type="button" id="rotate" class="rect btn btn-primary btn-lg btn-block">rotate</button>
                                        <button type="button" id="" class="rect btn btn-danger btn-lg btn-block"></button>
                                </div>
                                
                            </form>
                        </div>
                            <div class="col-8">
                           
                            <form action="writing.php" method="POST">    
                                <div class="input-group input-group-lg">
                                <span class="input-group-addon fa fa-pencil fa-3x"></span>
                                <input name="subject" type="text" class="form-control" placeholder="What Subject?">
                                </div>

                                <div class="input-group">
                                <img id="target_img" class="card-img-top img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAI1eKYDazfKkPBTVl6zwa9AJmIt1wFt88XlnvCiVzpQJZEwxa" alt="">
                                </div>

                                <div class="input-group input-group-lg">
                                <span class="input-group-addon fa fa-calendar fa-3x"></span>
                                <input  name="date" type="date" class="form-control" placeholder="">
                                </div>

                                <div class="input-group input-group-lg">
                                <span class="input-group-addon fa fa-comment fa-3x"></span>
                                <input name="comment" type="text" class="form-control" placeholder="Some Comments...">
                                </div>
                            </form>
                            <label class="control-label">
                            <input type="file" name="file" id="fileUpload">
                            </label>
                            <button id="sumbit_btn" type="submit" class="btn btn-primary btn-lg">I Want To Save This</button>
                            </div>
                        <div class="col-2"></div>
                        
                    </div>

                </div>
                <div class="col-1"></div>
                
            </div>

                    
        </div>
               
             
      
    </body>
    </html>