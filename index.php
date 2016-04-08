<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <script src="js/jquery-2.1.1.min.js"></script> -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="box row">
			<div class="col-md-4">
				<div class="link link-miss ">
					<span class="icon"></span>
					<a  class="button" href="easy.html" data-title="My mission is easy">
						<span class="line line-top"></span>
						<span class="line line-left"></span>
						<span class="line line-right"></span>
						<span class="line line-bottom"></span>
						esay
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="link link-play">
					<span class="icon"></span>
					<a  class="button" href="life.html" data-title="This is my pictures">
						<span class="line line-top"></span>
						<span class="line line-left"></span>
						<span class="line line-right"></span>
						<span class="line line-bottom"></span>
						life
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="link link-touch">
					<span class="icon"></span>
					<a  class="button" href="http://resume.supercjh.com" data-title="Let's do something together">
						<span class="line line-top"></span>
						<span class="line line-left"></span>
						<span class="line line-right"></span>
						<span class="line line-bottom"></span>
						resume
					</a>
				</div>
			</div>
			<div class="tip">
				<em></em>
				<span></span>
			</div>
		</div>
		<div class="boxTitle">
			<h1>imagine,create,enjoy</h1>
			<h3>let me show you </h3>
		</div>
	</div>

	<script>
		$(function(){
			$(".link .button").hover(function(){
				var title = $(this).attr("data-title");
				$(".tip em").text(title);
				var pos = $(this).offset().left;
				var dis = ($('.tip').outerWidth()-$(this).outerWidth())/2;
				var f = pos-dis;
				$(".tip").css({"left":f+"px"}).animate({"top":195,"opacity":1},300);
			},function(){
				$(".tip").animate({"top":160,"opacity":0},300);
			})
		});
	</script>
</body>
</html>

