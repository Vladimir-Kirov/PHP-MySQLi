<!DOCTYPE html>
<html>
	<head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<title>jQuery</title>
			<script type="text/javascript" src='jquery-2.1.1.js'></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript">

				$(document).ready(function(){
					$('#add').on({
						click:function(){
							$('#content').append('<p class="rm"> Венеция - Градът на мечтите ... </p>').css('color', '#ECF66A');
							$('.rm').click(function(){
								$(this).remove();
								});
							}
						});
					});
					/*$('.rm').live('click', function(){
							$(this).remove();
						});*/
			</script>
			<style type="text/css">
				body {
					font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
					font-size: 16px;
					background-image: url("venezia.jpg"); 
					background-repeat: no-repeat;
				}

				#wrap {
					margin: 0 auto;
					width: 400px;
					padding: 14px;
				}
				 p {
				    background: green;
				    font-weight: bold;
				    cursor: pointer;
				    padding: 5px;
				  }
				p.over {
				    background: #ccc;
				  }
				span {
				    color: red;
				  }
			</style>
		</head>
	<body>
			<div id="wrap">
				<button id="add">Добави</button>
				<div id="content">
			
			</div>
		</div>
	</body>
</html>		
		

