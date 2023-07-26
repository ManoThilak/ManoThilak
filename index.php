<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">;


	<style type="text/css">
		body
{
 
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.card {
	 position: relative;
	 width: 300px;
	 height: 425px;
	 border: 10px solid #9612eb;
	 margin: 60px auto 0 auto;
	 box-shadow: inset 10px 0px 15px 0px rgba(0, 0, 0, 0.1);
     background-image: linear-gradient(to bottom, rgba(255, 255, 255), rgba(255, 255, 255, 0.5)), url("https://images.unsplash.com/photo-1527481138388-31827a7c94d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");

	background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover;
	background-color: #e6f0e6;
}
 .card .text-container {
	 width: 80%;
	 height: 80%;
	 margin: auto;
}
 .strikethrough {
	 text-decoration: line-through;
}
 .card .text-container #head {
	 font-family: 'Nobile', sans-serif;
	 font-size: 1.5em;
	 margin: 60px auto 60px auto;
}
 .card p {
	 font-size: 1.1em;
	 line-height: 1.4;
	 font-family: 'Nobile';
	 color: #331717;
	 font-style: italic;
	 text-align: center;
	 margin: 30px auto 0px auto;
}
 .card .front {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 margin: -10px 0px 0px -10px;
	 border: 10px solid #9612eb;
	 backface-visibility: hidden;
	 background-color: #9612eb;
	/* background-image: url($cover-image);
	 */
	 background-size: contain;
	 transform-style: preserve-3d;
	 transform-origin: 0% 50%;
	 transform: perspective(800px) rotateY(0deg);
	 transition: all 0.8s ease-in-out;
}
 .card:hover .front {
	 transform: perspective(800px) rotateY(-170deg);
	 background-color: #41718d;
}
 .card:hover .back {
	 transform: perspective(800px) rotateY(-170deg);
	 box-shadow: 7px 0px 5px 0px rgba(0, 0, 0, 0.3), inset 2px 0px 15px 0px rgba(0, 0, 0, 0.1);
	 background-color: #d2dcd2;
}
 .card .back {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 border: 10px solid #9612eb;
	 margin: -10px 0px 0px -10px;
	 backface-visibility: visible;
	 filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, .5));
	 transform-style: preserve-3d;
	 transform-origin: 0% 50%;
	 transform: perspective(800px) rotateY(0deg);
	 transition: all 0.8s ease-in-out;
	 background-color: #e6f0e6;
	 box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
}

.imgset
{
  position: relative;
  z-index: 1;
  margin-bottom: -215px;
}
.imgset img
{
    box-shadow: 0px 6px 11px 7px rgba(0, 0, 0, 0.22);
    border-radius: 5px;
}
	</style>
</head>
<body>

<body>
<div class="card">
  <div class="back"></div>
  <div class="front">
    <div class="imgset">
         <img width="100%" src="https://1.bp.blogspot.com/-Mgj9-rbs65E/XfMoPSD5gtI/AAAAAAAAURk/NBokE2gSS2cTSJ2em5lZ5hJDuTtRN7UVwCLcBGAsYHQ/s1600/2713997.png">
       </div>
  </div>
  <div class="text-container">
    <p id="head"><i class="fa fa-heart" style="color:blue;font-style: italic;font-weight: bold;">Happy Birthday to u Dear </i></p>
    
    <p>I hope your special day will bring you lots of happiness, love, and fun. You deserve them a lot. Enjoy!</p>
    <p>Hope your day goes great!</p>
    <h5><p>By ur Lifeline  </p></h5>
    <p><button id="no" style="color: blue;" onclick="define();">LOVE</button></p>
  </div>
  <?php 
//    echo '<script type="text/javascript">'; 
// echo 'alert("Mail Send Successfully and Student Registered Successfully");'; 
// //echo 'window.location.href = "index.php";';
// echo '</script>';
?>
</div>

 <!-- <p><h1 style="color:blue;">HAPPY BIRTHDAY </h1></p>
 <p><h2 style="color:blue;">HAPPY BIRTHDAY </h2></p>
 <p><h3 style="color:blue;">HAPPY BIRTHDAY </h3></p>
 <p><h4 style="color:blue;">HAPPY BIRTHDAY </h4></p> -->
</body>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function () {
		$(document).on('click', '#no', function (e) {
           alert ("I");
        });

		
		});
	$('.button').click(function() {
  alert ("I");
});
	function define() {
		alert("I  ");
	}
</script>

<html __fvdsurfcanyoninserted="1" class=" clickberry-extension clickberry-extension-standalone clickberry-extension clickberry-extension-standalone clickberry-extension clickberry-extension-standalone"><head>
        <meta charset="UTF-8">
        <title>Happy Birthday</title>
        <style>
            /* If you can't see it just hit space in here*/
            body {
                font-family:'Wendy One', sans-serif;
            }
			
			body {
  background-image: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 100, color-stop(0%, #374566), color-stop(100%, #010203));
  background-image: -webkit-radial-gradient(#374566, #010203);
  background-image: -moz-radial-gradient(#374566, #010203);
  background-image: -o-radial-gradient(#374566, #010203);
  background-image: radial-gradient(#374566, #010203);
}
            span {
                text-transform: uppercase;
            }
            .container {
                width: 800px;
                height: 420px;
                padding: 10px;
                margin: 0 auto;
                position: relative;
            }
            .balloon {
                width: 738px;
                margin: 0 auto;
                padding-top: 30px;
                position: relative;
            }
            .balloon > div {
                width: 104px;
                height: 140px;
                background: rgba(182, 15, 97, 0.9);
                border-radius: 0;
                border-radius: 80% 80% 80% 80%;
                margin: 0 auto;
                position: absolute;
                padding: 10px;
                box-shadow: inset 17px 7px 10px rgba(182, 15, 97, 0.9);
                -webkit-transform-origin: bottom center;
            }
            .balloon > div:nth-child(1) {
                background: rgba(182, 15, 97, 0.9);
                left: 0;
                box-shadow: inset 10px 10px 10px rgba(135, 11, 72, 0.9);
                -webkit-animation: balloon1 6s ease-in-out infinite;
                -moz-animation: balloon1 6s ease-in-out infinite;
                -o-animation: balloon1 6s ease-in-out infinite;
                animation: balloon1 6s ease-in-out infinite;
            }
            .balloon > div:nth-child(1):before {
                color: rgba(182, 15, 97, 0.9);
            }
            .balloon > div:nth-child(2) {
                background: rgba(242, 112, 45, 0.9);
                left: 120px;
                box-shadow: inset 10px 10px 10px rgba(222, 85, 14, 0.9);
                -webkit-animation: balloon2 6s ease-in-out infinite;
                -moz-animation: balloon2 6s ease-in-out infinite;
                -o-animation: balloon2 6s ease-in-out infinite;
                animation: balloon2 6s ease-in-out infinite;
            }
            .balloon > div:nth-child(2):before {
                color: rgba(242, 112, 45, 0.9);
            }
            .balloon > div:nth-child(3) {
                background: rgba(45, 181, 167, 0.9);
                left: 240px;
                box-shadow: inset 10px 10px 10px rgba(35, 140, 129, 0.9);
                -webkit-animation: balloon4 6s ease-in-out infinite;
                -moz-animation: balloon4 6s ease-in-out infinite;
                -o-animation: balloon4 6s ease-in-out infinite;
                animation: balloon4 6s ease-in-out infinite;
            }
            .balloon > div:nth-child(3):before {
                color: rgba(45, 181, 167, 0.9);
            }
            .balloon > div:nth-child(4) {
                background: rgba(190, 61, 244, 0.9);
                left: 360px;
                box-shadow: inset 10px 10px 10px rgba(173, 14, 240, 0.9);
                -webkit-animation: balloon1 5s ease-in-out infinite;
                -moz-animation: balloon1 5s ease-in-out infinite;
                -o-animation: balloon1 5s ease-in-out infinite;
                animation: balloon1 5s ease-in-out infinite;
            }
            .balloon > div:nth-child(4):before {
                color: rgba(190, 61, 244, 0.9);
            }
            .balloon > div:nth-child(5) {
                background: rgba(180, 224, 67, 0.9);
                left: 480px;
                box-shadow: inset 10px 10px 10px rgba(158, 206, 34, 0.9);
                -webkit-animation: balloon3 5s ease-in-out infinite;
                -moz-animation: balloon3 5s ease-in-out infinite;
                -o-animation: balloon3 5s ease-in-out infinite;
                animation: balloon3 5s ease-in-out infinite;
            }
            .balloon > div:nth-child(5):before {
                color: rgba(180, 224, 67, 0.9);
            }
            .balloon > div:nth-child(6) {
                background: rgba(242, 194, 58, 0.9);
                left: 600px;
                box-shadow: inset 10px 10px 10px rgba(234, 177, 15, 0.9);
                -webkit-animation: balloon2 3s ease-in-out infinite;
                -moz-animation: balloon2 3s ease-in-out infinite;
                -o-animation: balloon2 3s ease-in-out infinite;
                animation: balloon2 3s ease-in-out infinite;
            }
            .balloon > div:nth-child(6):before {
                color: rgba(242, 194, 58, 0.9);
            }
            .balloon > div:before {
                color: rgba(182, 15, 97, 0.9);
                position: absolute;
                bottom: -11px;
                left: 52px;
                content:"▲";
                font-size: 1em;
            }
            span {
                font-size: 4.8em;
                color: white;
                position: relative;
                top: 30px;
                left: 50%;
                margin-left: -27px;
            }
            /*BALLOON 1 4*/
            @-webkit-keyframes balloon1 {
                0%, 100% {
                    -webkit-transform: translateY(0) rotate(-6deg);
                }
                50% {
                    -webkit-transform: translateY(-20px) rotate(8deg);
                }
            }
            @-moz-keyframes balloon1 {
                0%, 100% {
                    -moz-transform: translateY(0) rotate(-6deg);
                }
                50% {
                    -moz-transform: translateY(-20px) rotate(8deg);
                }
            }
            @-o-keyframes balloon1 {
                0%, 100% {
                    -o-transform: translateY(0) rotate(-6deg);
                }
                50% {
                    -o-transform: translateY(-20px) rotate(8deg);
                }
            }
            @keyframes balloon1 {
                0%, 100% {
                    transform: translateY(0) rotate(-6deg);
                }
                50% {
                    transform: translateY(-20px) rotate(8deg);
                }
            }
            /* BAllOON 2 5*/
            @-webkit-keyframes balloon2 {
                0%, 100% {
                    -webkit-transform: translateY(0) rotate(6eg);
                }
                50% {
                    -webkit-transform: translateY(-30px) rotate(-8deg);
                }
            }
            @-moz-keyframes balloon2 {
                0%, 100% {
                    -moz-transform: translateY(0) rotate(6deg);
                }
                50% {
                    -moz-transform: translateY(-30px) rotate(-8deg);
                }
            }
            @-o-keyframes balloon2 {
                0%, 100% {
                    -o-transform: translateY(0) rotate(6deg);
                }
                50% {
                    -o-transform: translateY(-30px) rotate(-8deg);
                }
            }
            @keyframes balloon2 {
                0%, 100% {
                    transform: translateY(0) rotate(6deg);
                }
                50% {
                    transform: translateY(-30px) rotate(-8deg);
                }
            }
            /* BAllOON 0*/
            @-webkit-keyframes balloon3 {
                0%, 100% {
                    -webkit-transform: translate(0, -10px) rotate(6eg);
                }
                50% {
                    -webkit-transform: translate(-20px, 30px) rotate(-8deg);
                }
            }
            @-moz-keyframes balloon3 {
                0%, 100% {
                    -moz-transform: translate(0, -10px) rotate(6eg);
                }
                50% {
                    -moz-transform: translate(-20px, 30px) rotate(-8deg);
                }
            }
            @-o-keyframes balloon3 {
                0%, 100% {
                    -o-transform: translate(0, -10px) rotate(6eg);
                }
                50% {
                    -o-transform: translate(-20px, 30px) rotate(-8deg);
                }
            }
            @keyframes balloon3 {
                0%, 100% {
                    transform: translate(0, -10px) rotate(6eg);
                }
                50% {
                    transform: translate(-20px, 30px) rotate(-8deg);
                }
            }
            /* BAllOON 3*/
            @-webkit-keyframes balloon4 {
                0%, 100% {
                    -webkit-transform: translate(10px, -10px) rotate(-8eg);
                }
                50% {
                    -webkit-transform: translate(-15px, 20px) rotate(10deg);
                }
            }
            @-moz-keyframes balloon4 {
                0%, 100% {
                    -moz-transform: translate(10px, -10px) rotate(-8eg);
                }
                50% {
                    -moz-transform: translate(-15px, 10px) rotate(10deg);
                }
            }
            @-o-keyframes balloon4 {
                0%, 100% {
                    -o-transform: translate(10px, -10px) rotate(-8eg);
                }
                50% {
                    -o-transform: translate(-15px, 10px) rotate(10deg);
                }
            }
            @keyframes balloon4 {
                0%, 100% {
                    transform: translate(10px, -10px) rotate(-8eg);
                }
                50% {
                    transform: translate(-15px, 10px) rotate(10deg);
                }
            }
            h1 {
                position: relative;
                top: 200px;
                text-align: center;
                color: white;
                font-size: 3.5em;
            }
        </style>
        <script>
            window.open = function() {};
            window.print = function() {};
            // Support hover state for mobile.
            if (false) {
                window.ontouchstart = function() {};
            }
        </script>
        <script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script>
        <meta content="clickberry-extension-here">
        <meta content="clickberry-extension-here">
        <style type="text/css"></style>
        <style type="text/css"></style>
    <style type="text/css"></style><style type="text/css"></style>
        <script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script>
    <meta content="clickberry-extension-here">
</head>
    
    <body>
        <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet" type="text/css">
        <div class="container">
            <div class="balloon">
                <div><span>☺</span>
                </div>
                <div><span>B</span>
                </div>
                <div><span>D</span>
                </div>
                <div><span>A</span>
                </div>
                <div><span>Y</span>
                </div>
                <div><span>!</span>
                </div>
            </div>
             <h1>Mano Thilak</h1>

        </div>
        <script>
            
        </script>
        <script>
            if (document.location.search.match(/type=embed/gi)) {
                window.parent.postMessage('resize', "*");
            }
        </script>
    <div class="">
<img src="a.jpg" alt="Alagi" width="500" height="600">
<img src="a.jpg" alt="Alagi" width="500" height="600">
</body></html>
