<?php
if(isset($_POST['img_submit'])){
	
	$img_name=$_FILES['img_upload']['name'];
	$tmp_img_name=$_FILES['img_upload']['tmp_name'];
	$folder='img'
	move_uploaded_file($tmp_img_name,$folder.$img_name);
}

?>


<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  
  <link rel="stylesheet" href="aseets/css/style.css">
  <link rel="stylesheet" href="aseets/css/halfmoon.css">
  <script src="aseets/css/js/half.js"></script>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  
  <script src="path/to/halfmoon.js"></script>
  <script type="text/javascript">
    // Dark mode toggle demo
   
  </script>
  
  <!-- Code injected by live-server -->
  <script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
      (function () {
        function refreshCSS() {
          var sheets = [].slice.call(document.getElementsByTagName("link"));
          var head = document.getElementsByTagName("head")[0];
          for (var i = 0; i < sheets.length; ++i) {
            var elem = sheets[i];
            var parent = elem.parentElement || head;
            parent.removeChild(elem);
            var rel = elem.rel;
            if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
              var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
              elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
            }
            parent.appendChild(elem);
          }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
          if (msg.data == 'reload') window.location.reload();
          else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
          console.log('Live reload enabled.');
          sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
      })();
    }
    else {
      console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
  </script>
  </head>
  <body>
  
  
    <style>
      body {
          margin: 0 0 55px 0;
      }
      
      /* Style the tab */
      nav {
          position: fixed;
          bottom: 0;
          width: 100%;
          height: 55px;
          
         
          background-color: black;
          display: flex;
          overflow-x: auto;
      }
      
      /* Style the buttons inside the tab */
       nav a {
        
      
        border: none;
        outline: none;
        cursor: pointer;
        padding-left: 10px;
        transition: 0.3s;
        font-size: 17px;
      
        display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          flex-grow: 1;
          min-width: 50px;
          overflow: hidden;
          white-space: nowrap;
          font-family: sans-serif;
          font-size: 15px;
          color: #8c8c8c;
          text-decoration: none;
          -webkit-tap-highlight-color: transparent;
          transition: background-color 0.1s ease-in-out;
      }
      nav a:hover{
      color:#0a84ff;
      }
  
      .content{
  font-family: kurds !important; 
      }
      
      /* Style the tab content */
      .tabcontent {
        display: none;
        padding-left:10px;
      
      }
      
      
      a:hover img.i1{
        content: url('aseets/img/today2.png');
     }
     a:hover img.i2{
      content: url('aseets/img/apps2.png');
     }
     a:hover img.i3{
      content: url('aseets/img/games2.png');
     }
     a:hover img.i5{
      content: url('aseets/img/search2.png');
     }
  
  .icob{
    font-size: 24px; 
    color: #8c8c8c;
  
  }
  .icob:hover {
   color: #1890ff;
  }
  
  
     a {
      text-decoration: none !important;
  }
      </style>
     
      
      
      <nav class="navbar"> 
       
      
      <a class="tablinks m-auto active" id="defaultOpen" onclick="openCity(event, 'home')"><img class="i1 " src="aseets/img/today1.png" style="width:24px;"><span class="nav__text">Home</span></a>
          
          <a class="tablinks" onclick="openCity(event, 'apps')"><img class="i2" src="aseets/img/apps1.png" style="width:24px; "><span class="nav__text">Apps</span></a>
      
          <a class="tablinks" onclick="openCity(event, 'game')"><img class="i3" src="aseets/img/games1.png" style="width:26px; "><span class="nav__text">Games</span></a>
          
          <a class="tablinks icob" onclick="openCity(event, 'info')"><i class="fas fa-info "></i>
  
            <span class="nav__text">About</span></a>    
      
      </nav>
  
  
  
  
  <!-- First comes the modal -->
  <div class="modal" id="modal-1" tabindex="-1" role="dialog">
<script>
    $("#fileRequest").click(function(){ /* code to download? */ });
</script>
    
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a href="#" class="close" role="button" aria-label="Close">
          <span aria-hidden="true">×</span>
        </a>
        <h5 class="modal-title text9">Free Apple id premium Apps</h5>
        <img src="aseets/img/apps/appleid.jpg" height="170px" class="img2">
        <p class="text12"> Email : Danyarapps@Gmail.com </p>
        <p class="text12"> Pass : Danyar@12345 </p>
        <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
          <a href="#" class="btn btn-primary text10" role="button">Ok Thankyou</a>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <div class="modal" id="modal-vscode" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a href="#" class="close" role="button" aria-label="Close">
          <span aria-hidden="true">×</span>
        </a>
        <br>
<br><br><br><br><h5 class="modal-title text9">video star code
<br>
    کودە کانی ڤیدە ستار
</h5>


        <hr>

<form action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='img_upload'><br><br>
<input type='submit' name='img_submit'>
</form>

<div style="text-align: center;">
    
<p style="text-align: center;">
    
    <img class="" src="./vscode/1.jpg" width="250" height="250">
</p>

    <a class="btn btn-primary text10" role="button" href="https://tweakdoor.com/vscode/user_photos/63440011888a3_432695B0-4245-4062-BFAD-31A991378739.png" download="sardam">
  Download
</a><hr>
</div>
        
        
        <div style="text-align: center;">
    
<p style="text-align: center;">
    
    <img src="vscode/2.jpg" width="250" height="250">
</p>

    <a class="btn btn-primary text10" role="button" href="/vscode/2.jpg" download="sardam">
  Download
</a><hr>
</div><div style="text-align: center;">
    
<p style="text-align: center;">
    
    <img class="" src="vscode/3.jpg" width="250" height="250">
</p>
<a class="btn btn-primary text10" role="button" href="/vscode/3.jpg" download="sardam">
  Download
</a>
    <hr>
</div><div style="text-align: center;">
    
<p style="text-align: center;">
    
    <img class="" src="/vscode/4.jpg" width="250" height="250">
</p>
<a class="btn btn-primary text10" role="button" href="/vscode/4.jpg" download="sardam">
  Download
</a>
    <hr>
</div><div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
          <br>
        <a href="#" class="btn btn-primary text10" role="button">Ok Thankyou</a></div>
      </div>
    </div>
  </div>
  
  
  
  
  
  <style>
  
   
  
  .ring
  {
    position:absolute;
  
    top:59%;
    left:50%;
    transform:translate(-50%,-50%);
    width:115px;
    height:115px;
    background:transparent;
   
    border-radius:50%;
    text-align:center;
    line-height:150px;
    font-family:sans-serif;
    font-size:20px;
    
    color:#fff000;
    letter-spacing:4px;
    text-transform:uppercase;
    text-shadow:0 0 10px #fff000;
    box-shadow:0 0 20px rgba(0,0,0,.5);
  }
  .ring:before
  {
    content:'';
    position:absolute;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
   
    border-top:3px solid #fff000;
    border-right:3px solid #fff000;
    border-radius:50%;
    animation:animateC 2s linear infinite;
  }
  
  @keyframes animateC
  {
    0%
    {
      transform:rotate(0deg);
    }
    100%
    {
      transform:rotate(360deg);
    }
  }
  @keyframes animate
  {
    0%
    {
      transform:rotate(45deg);
    }
    100%
    {
      transform:rotate(405deg);
    }
  }
  
  
  
  
  
  .img{
    width: 111px;
    border-radius: 50%;
    padding-top: 2px;
    
  
  }
    
  button:hover img.i1{
      content: url('aseets/img/today2.png');
     }
     button:hover img.i2{
      content: url('aseets/img/apps2.png');
     }
     button:hover img.i3{
      content: url('aseets/img/games2.png');
     }
     button:hover img.i4{
      content: url('aseets/img/update2.png');
     }
     button:hover img.i5{
      content: url('aseets/img/search2.png');
     }
  
     @font-face {
    font-family: kurdf;
    src: url(aseets/fonts/4.ttf);
  
  }
  @font-face {
    font-family: kurds;
    src: url(aseets/fonts/Poppins-Medium.ttf);
  
  }
  @font-face {
    font-family: kurda;
    src: url(aseets/fonts/Lato-Bold.ttf);
  
  }
  
  @font-face {
    font-family: kurdg;
    src: url(aseets/fonts/Lato-Regular.ttf);
  
  }
  
  .text12{
    font-family: kurds;
    text-align: center;
    font-size: 12px;
  }
  
  .text23{
    font-family: kurdf;
    text-align: center;
    font-size: 12px;
  }
  
  .text25{
  
    font-family: kurds;
    text-align: center;
    text-transform: capitalize;
    font-size: 13px;
    border-top: 1px solid #007aff !important;
   
  
  }
  
  .text27{
  
  font-family: kurdf;
  font-size: 14px;
  text-align: center;
  }
  
  .text29{
  
  font-family: kurdf;
  font-size: 17px;
  text-align: center;
  font-weight: bold;
  }
  
  .text7{
      font-family: kurds;
      font-size: 20px;
      text-align: center;
  }
  .nav__text{
  
    font-size: 11px;
    font-family: kurds;
    color: #8c8c8c;
  
  }
  .text11{
    font-family: kurds;
  
  
  }
    
  .text13{
  
  font-family: kurds;
  text-align: center;
  font-size: 17px;
  padding-top: 110px;
  }
  
  .text14{
  
  font-family: kurds;
  text-align: center;
  font-size: 11px;
  
  }
  
  .text15{
  
  font-size: 10px;
  font-family: kurds;
  }
  
  .text16{
  
  font-size: 25px;
  font-family: kurds;
  text-align: center;
  }
  .text22{
  font-family: kurds;
  }
  .text20{
  
  font-size: 12px;
  
  text-align: center;
  }
  
  .text17{
  
  font-size: 13px;
  font-family: kurds;
  text-align: center;
  }
  
  
  .text6{
    font-family: kurds;
    font-size: 8px;
    padding-top: 5px;
  }
  
  .img2{
    width: 120px;
    height:180px;
  }
  
  .img3{
       border-radius: 20%;
    width: 110px;
      display: block;
    margin-left: auto;
    margin-right: auto;
  }
  
  .imgtext{
  
    font-size: 25px;
    font-family: kurds;
    text-align: center;
  }
  
  .imgtext1{
  
    font-size: 15px;
    font-family: kurds;
    text-align: center;
   
  }
  
  .textb{
    font-family: kurds;
    color: white;
  }
  
  .text21{
  text-align: center;
  font-family: kurds;
  }
  
  
  </style>
  
   <!-- modal -->  <!-- modal --> <!--  modal --> <!--  modal --> <!-- modal -->  
    <!-- modal -->  <!-- modal --> <!--  modal --> <!--  modal -->  <!-- modal -->
  
  <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 -->
  <div class="modal " id="modal-3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a href="#" class="close" role="button" aria-label="Close">
          <span aria-hidden="true">×</span>
        </a>
        <div class="shadow">
            <br>
         
            <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
              <div class="w-full flex items-center justify-between p-3 alternate-background">
              <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
              <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
              <img src="aseets/img/apps/unc0ver.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
              </div>
              <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
              <div class="text5">
                Unc0ver 
              </div>
              <div class="text6">
              Jailbreak 12.3 - 13.5.1 - windows
              </div>
              </div>
              </div>
              <a href="#"><button class="btn btn-secondary btn-sm bg text11 " style="color: white;" type="button">Download Ipa</button> </a>
              </div>
              </div>
            <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 -->
            
            </div>
  
        <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
         
          <a href="#" class="btn btn-primary text10 style" role="button">Ok</a>
          <br> <br> <br>
        </div>
         </div>
      </div>
    </div>
  
  <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 --> <!-- 1 -->
  
  
            <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 -->
            <div class="modal " id="modal-4" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <a href="#" class="close" role="button" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </a>
                  <div class="shadow">
                      <br>
                   
                     
                      <p class="text7">Download Ipa </p>
                      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                        <div class="w-full flex items-center justify-between p-3 alternate-background">
                        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                        <img src="aseets/img/apps/unc0ver.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                        </div>
                        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                        <div class="text5">
                          Unc0ver 
                        </div>
                        <div class="text6">
                        Jailbreak 12.3 - 13.5.1 - windows
                        </div>
                        </div>
                        </div>
                      <a href="https://storage.ihvn.dev/ipas/unc0ver_5.3.0.ipa">  <button class="btn btn-secondary btn-sm text11 " style="color: white;" type="button">Download Ipa</button></a>
                        </div>
                        </div>
                      <hr>
                        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                          <div class="w-full flex items-center justify-between p-3 alternate-background">
                          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                          <img src="aseets/img/apps/chimera.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                          </div>
                          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                          <div class="text5">
                            Chimera 
                          </div>
                          <div class="text-xs font-medium text-grey leading-tight text6">
                            Jailbreak for 12 - 12.4
                    
                          </div>
                          </div>
                          </div>
                          <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                    
                          </div>
                          </div>
                          <hr>
                            <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                              <div class="w-full flex items-center justify-between p-3 alternate-background">
                              <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                              <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                              <img src="aseets/img/apps/fb.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                              </div>
                              <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                              <div class="text5">
                                Facebook ++ 
                              </div>
                              <div class="text-xs font-medium text-grey leading-tight text6">
                                Tweaked
                        
                              </div>
                              </div>
                              </div>
                              <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                        
                              </div>
                              </div>
                              <hr>
                              <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                <div class="w-full flex items-center justify-between p-3 alternate-background">
                                <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                <img src="aseets/img/apps/ig.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                </div>
                                <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                <div class="text5">
                                  Instagram ++ 
                                </div>
                                <div class="text-xs font-medium text-grey leading-tight text6">
                                  Tweaked
                          
                                </div>
                                </div>
                                </div>
                              <a href="https://storage.ihvn.dev/ipas/IG_Plus_v115.0v1.ipa">  <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button></a>
                          
                                </div>
                                </div>
                
                                <hr>
                                <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                  <div class="w-full flex items-center justify-between p-3 alternate-background">
                                  <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                  <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                  <img src="aseets/img/apps/tiktok.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                  </div>
                                  <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                  <div class="text5">
                                    Tiktok ++ 
                                  </div>
                                  <div class="text-xs font-medium text-grey leading-tight text6">
                                    Download video without water mark
                            
                                  </div>
                                  </div>
                                  </div>
                                <a href="185.246.209.74/ipa/1121012122.ipa"> <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button></a> 
                            
                                  </div>
                                  </div>
                                  <hr>
                                  <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                    <div class="w-full flex items-center justify-between p-3 alternate-background">
                                    <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                    <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                    <img src="aseets/img/apps/Kinemaster.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                    </div>
                                    <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                    <div class="text5">
                                      Kine master
                                    </div>
                                    <div class="text-xs font-medium text-grey leading-tight text6">
                                      Without Water Mark
                              
                                    </div>
                                    </div>
                                    </div>
                                  <a href="http://185.246.209.74/ipa/818152328.ipa"> <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button></a> 
                              
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                      <div class="w-full flex items-center justify-between p-3 alternate-background">
                                      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                      <img src="aseets/img/apps/videostar.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                      </div>
                                      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                      <div class="text5">
                                        Video star
                                      </div>
                                      <div class="text-xs font-medium text-grey leading-tight text6">
                                        Unlock all features
                                
                                      </div>
                                      </div>
                                      </div>
                                      <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                                
                                      </div>
                                      </div>
                              
  
  
                      <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 -->
                      
                      </div>
            
                  <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
                   
                    <a href="#" class="btn btn-primary text10 style" role="button">Ok</a>
                    <br> <br> <br>
                  </div>
                   </div>
                </div>
              </div>
            
            <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 -->
  
            
            <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 -->
            <div class="modal " id="modal-4" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <a href="#" class="close" role="button" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </a>
                  <div class="shadow">
                      <br>
                   
                     
                      <p class="text7">Download Ipa </p>
                      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                        <div class="w-full flex items-center justify-between p-3 alternate-background">
                        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                        <img src="aseets/img/apps/unc0ver.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                        </div>
                        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                        <div class="text5">
                          Unc0ver 
                        </div>
                        <div class="text6">
                        Jailbreak 12.3 - 13.5.1 - windows
                        </div>
                        </div>
                        </div>
                        <button class="btn btn-secondary btn-sm text11 " style="color: white;" type="button">Download Ipa</button>
                        </div>
                        </div>
                      <hr>
                        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                          <div class="w-full flex items-center justify-between p-3 alternate-background">
                          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                          <img src="aseets/img/apps/chimera.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                          </div>
                          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                          <div class="text5">
                            Chimera 
                          </div>
                          <div class="text-xs font-medium text-grey leading-tight text6">
                            Jailbreak for 12 - 12.4
                    
                          </div>
                          </div>
                          </div>
                          <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                    
                          </div>
                          </div>
                          <hr>
                            <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                              <div class="w-full flex items-center justify-between p-3 alternate-background">
                              <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                              <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                              <img src="aseets/img/apps/fb.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                              </div>
                              <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                              <div class="text5">
                                Facebook ++ 
                              </div>
                              <div class="text-xs font-medium text-grey leading-tight text6">
                                Tweaked
                        
                              </div>
                              </div>
                              </div>
                              <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                        
                              </div>
                              </div>
                              <hr>
                              <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                <div class="w-full flex items-center justify-between p-3 alternate-background">
                                <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                <img src="aseets/img/apps/ig.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                </div>
                                <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                <div class="text5">
                                  Instagram ++ 
                                </div>
                                <div class="text-xs font-medium text-grey leading-tight text6">
                                  Tweaked
                          
                                </div>
                                </div>
                                </div>
                                <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                          
                                </div>
                                </div>
                
                                <hr>
                                <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                  <div class="w-full flex items-center justify-between p-3 alternate-background">
                                  <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                  <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                  <img src="aseets/img/apps/tiktok.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                  </div>
                                  <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                  <div class="text5">
                                    Tiktok ++ 
                                  </div>
                                  <div class="text-xs font-medium text-grey leading-tight text6">
                                    Download video without water mark
                            
                                  </div>
                                  </div>
                                  </div>
                                  <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                            
                                  </div>
                                  </div>
                                  <hr>
                                  <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                    <div class="w-full flex items-center justify-between p-3 alternate-background">
                                    <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                    <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                    <img src="aseets/img/apps/Kinemaster.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                    </div>
                                    <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                    <div class="text5">
                                      Kine master
                                    </div>
                                    <div class="text-xs font-medium text-grey leading-tight text6">
                                      Without Water Mark
                              
                                    </div>
                                    </div>
                                    </div>
                                    <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                              
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                      <div class="w-full flex items-center justify-between p-3 alternate-background">
                                      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                      <img src="aseets/img/apps/videostar.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                      </div>
                                      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                      <div class="text5">
                                        Video star
                                      </div>
                                      <div class="text-xs font-medium text-grey leading-tight text6">
                                        Unlock all features
                                
                                      </div>
                                      </div>
                                      </div>
                                      <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                                
                                      </div>
                                      </div>
                              <hr>
                              <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                <div class="w-full flex items-center justify-between p-3 alternate-background">
                                <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                <img src="aseets/img/apps/cute.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                </div>
                                <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                <div class="text5">
                                  Cute Cut Pro
                                </div>
                                <div class="text-xs font-medium text-grey leading-tight text6">
                                  Pro
                          
                                </div>
                                </div>
                                </div>
                                <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                          
                                </div>
                                </div>
                        
  
  
                      <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 -->
                      
                      </div>
            
                  <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
                   
                    <a href="#" class="btn btn-primary text10 style" role="button">Ok</a>
                    <br> <br> <br>
                  </div>
                   </div>
                </div>
              </div>
            
            <!-- 4 --> <!-- 4 --> <!-- 4 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 --> <!-- 3 -->
  
            <div class="modal " id="modal-5" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <a href="#" class="close" role="button" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </a>
                  <div class="shadow">
                      <br>
                   
                     
                     
                      <p class="text7"> Ipa Games</p>
                      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                        <div class="w-full flex items-center justify-between p-3 alternate-background">
                        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                        <img src="aseets/img/games/8ball.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                        </div>
                        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                        <div class="text5">
                          8 ball pool 
                        </div>
                        <div class="text6">
                          Infinity Guidlines always active
                  
                        </div>
                        </div>
                        </div>
                        <button class="btn btn-secondary btn-sm bg text11" style="color: white;" type="button">Download Ipa</button>
                        </div>
                        </div>
                      <hr>
                        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                          <div class="w-full flex items-center justify-between p-3 alternate-background">
                          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                          <img src="aseets/img/games/agario.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                          </div>
                          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                          <div class="text5">
                            Agar.io 
                          </div>
                          <div class="text-xs font-medium text-grey leading-tight text6">
                             hack menu
                  
                    
                          </div>
                          </div>
                          </div>
                          <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                    
                          </div>
                          </div>
                          <hr>
                            <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                              <div class="w-full flex items-center justify-between p-3 alternate-background">
                              <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                              <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                              <img src="aseets/img/games/amo.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                              </div>
                              <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                              <div class="text5">
                                Among Us
                  
                              </div>
                              <div class="text-xs font-medium text-grey leading-tight text6">
                                Hack skins more...
                        
                              </div>
                              </div>
                              </div>
                             <a href="https://storage.ihvn.dev/ipas/Among%20Us%21%20Hack%20No%20Jailbreak%20Cheats%202020.9.9%20Hacked%20IPA%20by%20iOSGods.com.ipa"> <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button></a>
                        
                              </div>
                              </div>
                              <hr>
                              <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                <div class="w-full flex items-center justify-between p-3 alternate-background">
                                <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                <img src="aseets/img/apps/pubg.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                </div>
                                <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                <div class="text5">
                                  Pubg hack
                                </div>
                                <div class="text-xs font-medium text-grey leading-tight text6">
                                  Pubg mobile hack
                          
                                </div>
                                </div>
                                </div>
                                <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download Ipa</button>
                          
                                </div>
                                </div>
                  
                                <hr>
                                <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                                  <div class="w-full flex items-center justify-between p-3 alternate-background">
                                  <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                                  <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                                  <img src="aseets/img/games/mini.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                                  </div>
                                  <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                                  <div class="text5">
                                    Minicraft
                                  </div>
                                  <div class="text-xs font-medium text-grey leading-tight text6">
                                    
                            
                                  </div>
                                  </div>
                                  </div>
                                 <a href="https://storage.ihvn.dev/ipas/Minecraft%20No%20Jailbreak%20Cheats%201.16.10%20Hacked%20IPA%20by%20iOSGods.com.ipa"> <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Download ipa</button></a>
                            
                                  </div>
                                  </div>
                          <hr>
                          <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                            <div class="w-full flex items-center justify-between p-3 alternate-background">
                            <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                            <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                            <img src="aseets/img/games/gta.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                            </div>
                            <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                            <div class="text5">
                              Grand Theft Auto: San Andreas
                            </div>
                            <div class="text-xs font-medium text-grey leading-tight text6">
                              Infinite Ammo , Gun and cars ..
                      
                            </div>
                            </div>
                            </div>
                            <button class="btn btn-secondary btn-sm text11" style="color: white;" type="button">Install</button>
                      
                            </div>
                            </div>
              
                                 
                              
  
  
                      <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 --> <!-- 2 -->
                      
                      </div>
            
                  <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
                   
                    <a href="#" class="btn btn-primary text10 style" role="button">Ok</a>
                    <br> <br> <br>
                  </div>
                   </div>
                </div>
              </div>
            
  
                      <!-- modal-7 --> <!-- 5 --> <!-- 5 --> <!-- 5 --> <!-- 5 --> <!-- 5 --> <!-- 5 --> <!-- 5 --> <!-- 5 -->
  
  <!-- Modal that can not be closed by clicking on the overlay, or pressing the [esc] key -->
  <div class="modal" id="modal-7" tabindex="-1" role="dialog" data-overlay-dismissal-disabled="true" data-esc-dismissal-disabled="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a href="#" class="close" role="button" aria-label="Close">
          <span aria-hidden="true">×</span>
        </a>
        <h5 class="text7">Search</h5>
        <p class="text21">
          Search by name app &amp; games &amp; number
        </p>
  
  
        <div class="wrapper">
          <div class="search-input shadoww-sm border-0">
            <a href="" target="_blank" hidden=""></a>
            <input type="text" placeholder="Type to search..">
            <div class="autocom-box">
              <!-- here list are inserted from javascript -->
            </div>
            <div class="icon"><i class="fas fa-search"></i></div>
          </div>
        </div>
    
   
    
  
        <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
        
          <a href="#" class="btn btn-primary text10 text" role="button">Exit</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional. Required for modals to be dismissible by clicking on overlays, or pressing the [esc] key. -->
  
  
  <div class="modal" id="modal-8" tabindex="-1" role="dialog" data-overlay-dismissal-disabled="true" data-esc-dismissal-disabled="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a href="#" class="close" role="button" aria-label="Close">
          <span aria-hidden="true">×</span>
        </a>
        <h5 class="text7">Revok</h5>
      <hr>
      <br>
        <h5 class="text29">!دامبەزاند بەڵام کار ناکات ؟</h5>
       
       <p class="text27 m-5 "> ھەر کاتێک ئەپێکت دابەزاند و کاری نەکرد یان کراشی کرد ئەوە واتا لە لایەن ئەپڵەوە راگیراوە پێوستە نوێ بکرێتەوە ، ھەرکاتێ نوێ کرایەوە ئێمە لە سایت ئەپدەیت دەکەینەوە دەتوانی لە  <span style="color: #32afed;">تێلێگرام</span>   ئاگادار بیت </p>
  <br>
  <hr>
  
  <br>
    <h5 class="text29">سیدیا</h5>
   
   <p class="text27 m-5 "><span style="color: #4bb543; font-size: 12px;">AppSync unified</span> ئەوانەی سیدیایان ھەیە دەتوانن لە  تویکی  ئینستال بکەن ھەر ئەپێکیان ویست لە سایت دایبگرن و بێ کێشە کار دەکات</p>
  <br>
  <hr>
  
        <div class="text-center mt-20"> <!-- text-right = text-align: right, mt-20 = margin-top: 2rem (20px) -->
        
          <a href="#" class="btn btn-primary text10 text" role="button">Exit</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional. Required for modals to be dismissible by clicking on overlays, or pressing the [esc] key. -->
  <!-- However, the dismissal methods have been disabled by the attributes on the modal here. -->
  <script src="path/to/halfmoon.js"></script>
  
  
  
  
  
  
  
  
   <!-- modal -->  <!-- modal --> <!--  modal --> <!--  modal --> <!-- modal --> 
   
    <!-- modal -->  <!-- modal --> <!--  modal --> <!--  modal --> <!-- modal -->  
  <div id="home" class="tabcontent" style="display: block;">
    <div class="card shadoww-sm border-0">
      <div class="dropdown">
        
        <button class="btn icon1 " data-toggle="dropdown" type="button" id="dropdown-toggle-btn-1" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language jj"></i>
  
          <!-- ml-5 = margin-left: 0.5rem (5px) -->
        </button>
        <div class="dropdown-menu text2" aria-labelledby="dropdown-toggle-btn-1">
          
          <a data-toggle="modal" data-target="modal-6" class="dropdown-item text2">Kurdish</a>
          <a data-toggle="modal" data-target="modal-6" class="dropdown-item text2">Arabic</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </div>
   <!-- kurd modal -->  <!-- kurd modal --> <!-- kurd modal --> <!-- kurd modal -->
      <div class="modal" id="modal-6" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h5 class="modal-title text9">Change language</h5>
            <p class="text12">  Change language Not availble</p>
            <p class="text23">  گۆرینی زمان بەردەست نیە</p>
            <div class="text-center mt-20"> 
              
              <button class="btn btn-primary text10" data-dismiss="modal" type="button">Ok</button>
            </div>
          </div>
        </div>
      </div>
       <!-- kurd modal --> <!-- kurd modal --> <!-- kurd modal --> <!-- kurd modal --> <!-- kurd modal -->
      <a onclick="toggleDemo()"><i class="far fa-moon moon" aria-hidden="true"></i></a>
    
      <h2 class="card-title text1">
        Jb tools
      </h2>
      
      <a href="https://t.me/DanyarExpert"><button class="btn btn-primary btn-block font-size-16 botton1" type="button">Telegram</button></a>
      <br>
      <a href="https://www.youtube.com/channel/UCkMgBNROoAQv8ZxaxCpTuJA?view_as=subscriber"><button class="btn btn-danger btn-block font-size-16 botton1" type="button">Youtube</button></a>
  
  
   
    </div>
    
    <div class="card shadoww-sm border-0 card1">
  
    <p class="text7">Most Recent</p>
   
      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
        <div class="w-full flex items-center justify-between p-3 alternate-background">
        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
        <img src="aseets/img/search.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
        </div>
        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
        <div class="text5">
          Search 
        </div>
        <div class="text6">
          Search for apps &amp; games
        </div>
        </div>
        </div>
      <a href="#modal-7"> <button class="btn btn-primary btn-sm bg text11" style="color: white;" type="button">View</button></a> 
    
    
        </div>
        </div>
        <hr>
    <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
      <div class="w-full flex items-center justify-between p-3 alternate-background">
      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
      <img src="aseets/img/apps/apple.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
      </div>
      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
      <div class="text5">
        Apple id 
      </div>
      <div class="text6">
        premium Apps
      </div>
      </div>
      </div>
    <a href="#modal-1"> <button class="btn btn-primary btn-sm bg text11" style="color: white;" type="button">View</button></a> 
  
  
      </div>
      </div>
        <hr>
    
      
      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
      <div class="w-full flex items-center justify-between p-3 alternate-background">
      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
      <img src="aseets/img/vide.png" style="border-radius: 23%;" width="50px" height="50px" class="n">
      </div>
      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
      <div class="text5">
        Video Downloader 
      </div>
      <div class="text6">
        Download video in IG - FB - tiktok ..
      </div>
      </div>
      </div>
      <div class="sticky-alerts"><div id="FUDL7d" class="alert alert-danger filled"><button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">×</span></button><h4 class="alert-heading">Video Downloader not avalaible</h4>دابەزاندنی ڤیدیۆ بەردەست نیە</div></div>
        
      <!-- Content wrapper containing the toggles -->
     
     <button class="btn btn-primary btn-sm bg text11" type="button" onclick="toastDangerAlert()">View</button>
  
       
  
  
      </div>
      </div>
       <hr><div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
      <div class="w-full flex items-center justify-between p-3 alternate-background">
      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
      <img src="https://pbs.twimg.com/profile_images/844962626585182208/wrnY23N6_400x400.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
      </div>
      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
      <div class="text5">video star coode</div>
      <div class="text6">کودەکانی ڤیدە ستار</div>
      </div>
      </div>
    <a href="#modal-vscode"> <button class="btn btn-primary btn-sm bg text11" style="color: white;" type="button">View</button></a> 
  
  
      </div>
      </div>
      <!-- fix 
      <hr>
    
      
      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
      <div class="w-full flex items-center justify-between p-3 alternate-background">
      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
      <img src="aseets/img/fix.svg" style="border-radius: 23%;" width="50px" height="50px" class="n">
      </div>
      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
      <div class="text5">
        Fix Revok
      </div>
      <div class="text6">
       how to fix revoked
      </div>
      </div>
      </div>
      <div class="sticky-alerts"></div>
        
      
     
      <a href="#modal-8"> <button class="btn btn-primary btn-sm bg text11" type="button" >View</button></a>
    
       
  
  
      </div>
      </div>
    -->
       
   <br>
    
    
    </div>
  </div>
  
  
  <style>
    
  </style>
  
  
  <!--Appss--><!--Appss--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps-->
  <!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps--><!--Apps-->
  
  
  <div id="apps" class="tabcontent" style="display: none;">
    <div class="card shadoww-sm border-0">
      
        <p class="text7">Apps</p>
        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
          <div class="w-full flex items-center justify-between p-3 alternate-background">
          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
            <img src="aseets/img/ipa.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
          </div>
          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
          <div class="text5">
            Ipa Apps
          </div>
          <div class="text6">
          Ipa Apps
          </div>
          </div>
          </div>
         <a href="#modal-4"> <button class="btn btn-primary btn-sm text11" style="color: white;" type="button">View</button></a>
          </div>
          </div>
        <hr>
  
        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
          <div class="w-full flex items-center justify-between p-3 alternate-background">
          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
          <img src="aseets/img/apps/unc0ver.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
          </div>
          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
          <div class="text5">
            Unc0ver 
          </div>
          <div class="text6">
          Jailbreak 12.3 - 13.5.1 - windows
          </div>
          </div>
          </div>
          
          <a onclick="window.location='itms-services://?action=download-manifest&amp;url=https://jbtools.co/install/1.plist';" class="btn btn-success btn-sm text11" style="color: white;">Install</a>
          </div>
          </div>
        <hr>
          <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
            <div class="w-full flex items-center justify-between p-3 alternate-background">
            <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
            <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
            <img src="aseets/img/apps/chimera.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
            </div>
            <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
            <div class="text5">
              Chimera 
            </div>
            <div class="text-xs font-medium text-grey leading-tight text6">
              Jailbreak for 12 - 12.4
      
            </div>
            </div>
            </div>
             <a onclick="window.location='itms-services://?action=download-manifest&amp;url=https://jbtools.co/install/chemera.plist';" class="btn btn-success btn-sm text11" style="color: white;">Install</a>
      
            </div>
            </div>
            <hr>
              <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                <div class="w-full flex items-center justify-between p-3 alternate-background">
                <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                <img src="aseets/img/apps/fb.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                </div>
                <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                <div class="text5">
                  Facebook ++ 
                </div>
                <div class="text-xs font-medium text-grey leading-tight text6">
                  Tweaked
          
                </div>
                </div>
                </div>
                <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
          
                </div>
                </div>
                <hr>
                <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                  <div class="w-full flex items-center justify-between p-3 alternate-background">
                  <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                  <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                  <img src="aseets/img/apps/ig.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                  </div>
                  <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                  <div class="text5">
                    Instagram ++ 
                  </div>
                  <div class="text-xs font-medium text-grey leading-tight text6">
                    Tweaked
            
                  </div>
                  </div>
                  </div>
                    <a onclick="window.location='itms-services://?action=download-manifest&amp;url=https://jbtools.co/install/ig.plist';" class="btn btn-success btn-sm text11" style="color: white;">Install</a>
            
                  </div>
                  </div>
  
                  <hr>
                  <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                    <div class="w-full flex items-center justify-between p-3 alternate-background">
                    <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                    <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                    <img src="aseets/img/apps/tiktok.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                    </div>
                    <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                    <div class="text5">
                      Tiktok ++ 
                    </div>
                    <div class="text-xs font-medium text-grey leading-tight text6">
                      Download video without water mark
              
                    </div>
                    </div>
                    </div>
                      <a onclick="window.location='itms-services://?action=download-manifest&amp;url=https://jbtools.co/install/tiktok.plist';" class="btn btn-success btn-sm text11" style="color: white;">Install</a>
              
                    </div>
                    </div>
                    <hr>
                    <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                      <div class="w-full flex items-center justify-between p-3 alternate-background">
                      <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                      <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                      <img src="aseets/img/apps/Kinemaster.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                      </div>
                      <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                      <div class="text5">
                        Kine master
                      </div>
                      <div class="text-xs font-medium text-grey leading-tight text6">
                        Without Water Mark
                
                      </div>
                      </div>
                      </div>
                      <a onclick="window.location='itms-services://?action=download-manifest&amp;url=https://jbtools.co/install/kine.plist';" class="btn btn-success btn-sm text11" style="color: white;">Install</a>
                      </div>
                      </div>
                      <hr>
                      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                        <div class="w-full flex items-center justify-between p-3 alternate-background">
                        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                        <img src="aseets/img/apps/videostar.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                        </div>
                        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                        <div class="text5">
                          Video star
                        </div>
                        <div class="text-xs font-medium text-grey leading-tight text6">
                          Unlock all features
                  
                        </div>
                        </div>
                        </div>
                        <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
                  
                        </div>
                        </div>
                        <hr>
                        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                          <div class="w-full flex items-center justify-between p-3 alternate-background">
                          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                          <img src="aseets/img/apps/Cute.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                          </div>
                          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                          <div class="text5">
                           Cute Cut Pro
                          </div>
                          <div class="text-xs font-medium text-grey leading-tight text6">
                            Pro
                    
                          </div>
                          </div>
                          </div>
                          <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
                    
                          </div>
                          </div>
                  
  
        </div>
        
  
  </div>
  <br>
  <br><br>
  
      
        <!--endapps--><!--endapps--><!--endapps--><!--endapps--><!--endapps--><!--endapps-->
       
       
        
   <!--games-->  <!--games-->  <!--games--> <!--games--> <!--games--> <!--games--> <!--games--> <!--games-->
    <!--games--> <!--games--> <!--games--> <!--games--> <!--games--> <!--games--> <!--games--> <!--games-->
  <div id="game" class="tabcontent" style="display: none;">
    <div class="card shadoww-sm border-0">
      
      <p class="text7"> Tweaked Games</p>
         
      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
        <div class="w-full flex items-center justify-between p-3 alternate-background">
        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
          <img src="aseets/img/ipa.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
        </div>
        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
        <div class="text5">
          Ipa Games
        </div>
        <div class="text6">
        Ipa Apps
        </div>
        </div>
        </div>
       <a href="#modal-5"> <button class="btn btn-primary btn-sm text11" style="color: white;" type="button">View</button></a>
        </div>
        </div>
      <hr>
      <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
        <div class="w-full flex items-center justify-between p-3 alternate-background">
        <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
        <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
        <img src="aseets/img/games/8ball.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
        </div>
        <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
        <div class="text5">
          8 ball pool 
        </div>
        <div class="text6">
          Infinity Guidlines always active
  
        </div>
        </div>
        </div>
        <button class="btn btn-success btn-sm bg text11" style="color: white;" type="button">Install</button>
        </div>
        </div>
      <hr>
        <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
          <div class="w-full flex items-center justify-between p-3 alternate-background">
          <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
          <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
          <img src="aseets/img/games/agario.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
          </div>
          <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
          <div class="text5">
            Agar.io 
          </div>
          <div class="text-xs font-medium text-grey leading-tight text6">
             hack menu
  
    
          </div>
          </div>
          </div>
          <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
    
          </div>
          </div>
          <hr>
            <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
              <div class="w-full flex items-center justify-between p-3 alternate-background">
              <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
              <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
              <img src="aseets/img/games/amo.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
              </div>
              <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
              <div class="text5">
                Among Us
  
              </div>
              <div class="text-xs font-medium text-grey leading-tight text6">
                Hack skins more...
        
              </div>
              </div>
              </div>
              <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
        
              </div>
              </div>
              <hr>
              <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                <div class="w-full flex items-center justify-between p-3 alternate-background">
                <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                <img src="aseets/img/apps/pubg.jpg" style="border-radius: 20%;" width="50px" height="50px" class="n">
                </div>
                <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                <div class="text5">
                  Pubg hack
                </div>
                <div class="text-xs font-medium text-grey leading-tight text6">
                  Pubg mobile hack
          
                </div>
                </div>
                </div>
                <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
          
                </div>
                </div>
  
                <hr>
                <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                  <div class="w-full flex items-center justify-between p-3 alternate-background">
                  <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                  <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                  <img src="aseets/img/games/gta.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                  </div>
                  <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                  <div class="text5">
                    Grand Theft Auto: San Andreas
                  </div>
                  <div class="text-xs font-medium text-grey leading-tight text6">
                    Infinite Ammo , Gun and cars ..
            
                  </div>
                  </div>
                  </div>
                   <a onclick="window.location='itms-services://?action=download-manifest&amp;url=https://jbtools.co/install/gta.plist';" class="btn btn-success btn-sm text11" style="color: white;">Install</a>
            
                  </div>
                  </div>
                  <hr>
                  <div class="package-grid-item inline-block no-underline section-body w-full flex-grow justify-between">
                    <div class="w-full flex items-center justify-between p-3 alternate-background">
                    <div class="items-center justify-start content-center align-center flex flex-grow" style="width: calc(100% - 3rem);">
                    <div class="text-2xl text-grey-dark inline-flex w-auto mr-2 self-auto">
                    <img src="aseets/img/games/mini.png" style="border-radius: 20%;" width="50px" height="50px" class="n">
                    </div>
                    <div style="max-width: calc(100% - 3.5rem);" class="flex-grow mr-2">
                    <div class="text5">
                      Minicraft
                    </div>
                    <div class="text-xs font-medium text-grey leading-tight text6">
                      
               Free
                    </div>
                    </div>
                    </div>
                    <button class="btn btn-success btn-sm text11" style="color: white;" type="button">Install</button>
              
                    </div>
                    </div>
            
           
                  
                <!--appstore--> <!--appstore--> <!--appstore--> <!--appstore--> <!--appstore--> <!--appstore-->
                 <!--appstore--> <!--appstore--> <!--appstore--> <!--appstore--> <!--appstore--> <!--appstore-->
                
               
      </div>
      
     
  
  
        <p></p>
    
    
          <!-- This parent container is required -->
     
       
    
                  
                  <!--dell-->
  <br><br>
  <br><br>
    
  </div>
  
  <style>
    .botton1{
  color: white !important;  
    }
  </style>
  
  <div id="info" class="tabcontent" style="display: none;">
    <!--danyar--><!--danyar--><!--danyar--><!--danyar-->
    <div class="card shadoww-sm border-0">
          
  
   
      <p class="text16">Jailbreak tools</p>
      <p class="text17">JbTools Library Of Tweaked++ Apps , Hacked Games  </p>
      <div class="row">
        <button class="btn btn-success btn-block font-size-14 botton1" type="button">Download Webapp</button>
      </div>
    
      <br>
      <row>
        <center>
        <button class="btn btn btn-primary  text15" type="button">Youtube</button>
        <button class="btn btn btn-danger  text15" type="button">Telegram</button>
      </center>
      </row>
     </div>
     
  <!--danyar--><!--danyar--><!--danyar--><!--danyar-->
  
  <!--About--><!--about--><!--about--><!--about-->
  <div class="card shadoww-sm border-0">
          
    <div class="ring">
       <img src="aseets/img/dd.jpg" class="img">
   </div>
   
   <p class="text13">Danyar kawa </p>
   <p class="text14">Manager | Developer </p>
   <row>
     <center>
     <button class="btn btn-rounded btn-secondary btn-sm text15" style="color: white ; font-weight: bold;" type="button">Facebook</button>
     
   </center>
   </row>
   
   </div>
  
   <div class="card shadow-sm border-0 text25">
    All rights reserved , Jbtools 2020 
  
  </div>
  
  <!--About--><!--about--><!--about--><!--about-->
   </div>
   <br>
  <br>
  <br>
  <br>
    
   
   
    
   
   
  
  <script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  function toggleDemo() {
      halfmoon.toggleDarkMode();
  
    }
  
    document.getElementById("defaultOpen").click();
  
    function myFunction() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
  }
  </script>
     
  
  <script type="text/javascript">
    // Toasts primary alert
    function toastPrimaryAlert() {
      halfmoon.initStickyAlert({
        content: "This is a primary alert without a close button, that will stay up for 10 seconds.",
        title: "Primary alert",
        alertType: "alert-primary",
        hasDismissButton: false,
        timeShown: 10000
      });
    }
    
    // Toasts success alert
    function toastSuccessAlert() {
      halfmoon.initStickyAlert({
        content: "This is a success alert that will be filled only in light mode.",
        title: "Success alert",
        alertType: "alert-success",
        fillType: "filled-lm"
      });
    }
    
    // Toasts secondary alert
    function toastSecondaryAlert() {
      halfmoon.initStickyAlert({
        content: "This is a secondary alert that will be filled only in dark mode.",
        title: "Secondary alert",
        alertType: "alert-secondary",
        fillType: "filled-dm"
      });
    }
    
    // Toasts danger alert
    function toastDangerAlert() {
      halfmoon.initStickyAlert({
        content: "دابەزاندنی ڤیدیۆ بەردەست نیە",
        title: "Video Downloader not avalaible",
        alertType: "alert-danger",
        fillType: "filled"
      });
    }
  </script>
  
  <script>
    // getting all required elements
  const searchWrapper = document.querySelector(".search-input");
  const inputBox = searchWrapper.querySelector("input");
  const suggBox = searchWrapper.querySelector(".autocom-box");
  const icon = searchWrapper.querySelector(".icon");
  let linkTag = searchWrapper.querySelector("a");
  let webLink;
  
  // if user press any key and release
  inputBox.onkeyup = (e)=>{
      let userData = e.target.value; //user enetered data
      let emptyArray = [];
      if(userData){
          icon.onclick = ()=>{
              webLink = "https://jbtools.co/final/code/" + userData;
              linkTag.setAttribute("href", webLink);
              console.log(webLink);
              linkTag.click();
          }
          emptyArray = suggestions.filter((data)=>{
              //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
              return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase()); 
          });
          emptyArray = emptyArray.map((data)=>{
              // passing return data inside li tag
              return data = '<li>'+ data +'</li>';
          });
          searchWrapper.classList.add("active"); //show autocomplete box
          showSuggestions(emptyArray);
          let allList = suggBox.querySelectorAll("li");
          for (let i = 0; i < allList.length; i++) {
              //adding onclick attribute in all li tag
              allList[i].setAttribute("onclick", "select(this)");
          }
      }else{
          searchWrapper.classList.remove("active"); //hide autocomplete box
      }
  }
  
  function select(element){
      let selectData = element.textContent;
      inputBox.value = selectData;
      icon.onclick = ()=>{
          webLink = "https://jbtools.co/final/code/" + selectData;
          linkTag.setAttribute("href", webLink);
          linkTag.click();
      }
      searchWrapper.classList.remove("active");
  }
  
  function showSuggestions(list){
      let listData;
      if(!list.length){
          userValue = inputBox.value;
          listData = '<li>'+ userValue +'</li>';
      }else{
          listData = list.join('');
      }
      suggBox.innerHTML = listData;
  }
  let suggestions = [
      "Chimera",
      "Facebook ++",
      "Instagram ++",
      "Tiktok ++",
    "Kine master pro",
      "Video star",
      "8 ball pool",
      "Agar.io",
      "Among Us",
      "Pubg hack",
    
    
     "unc0ver",
     
  ];
  </script>






</body></html>