<!DOCTYPE html>
<html>
	<head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<title>jQuery</title>
			<script type="text/javascript" src='jquery-2.1.1.js'></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript">

				
				$(document).ready(function(){
					$('#new_comment').click(function(e){
						e.preventDefault();
						$('#stylized').show();
						$('#cancel_comment').show();
						//$('#new_comment').hide();
						$(this).hide();
					});
					$('#cancel_comment').click(function(){
						$('#stylized').hide();
						$('#new_comment').show();
						$(this).hide();
					});
					$('input, textarea').focusin(function(){
						$(this).css('background', '#cecece');
					});
					$('input, textarea').focusout(function(){
						$(this).css('background', '#fff');
					});
					$('label').mouseenter(function(){
						$(this).find('span').css('display', 'block');
					});
					$('label').mouseout(function(){
						$(this).find('span').hide();
					});
					$('#agree').click(function(){
						if($(this).is(':checked')){
							$('#btn').attr('disabled', null).css('background', '#181818');
						}
						else{
							$('#btn').attr('disabled','disabled').css('background', '#9B9A98');
						}
					});
				});
				

			</script>
			<style type="text/css">

			body {
				font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
				font-size:12px;
				background-image: url("venezia.jpg"); 
				background-repeat: no-repeat;
				}

				#wrap {
					margin: 0 auto;
					width: 400px;
					padding: 14px;
				}

				p, h1, form, button {border:0; margin:0; padding:0;}
				.spacer{clear:both; height:1px;}
				/* ----------- My Form ----------- */
				.myform {
				margin:0 auto;
				width:400px;
				padding:14px;
				}

				/* ----------- stylized ----------- */
				#stylized {
				border:solid 2px #b7ddf2;
				background:#ebf4fb;
				display: none;
				}

				#stylized h1 {
				font-size:14px;
				font-weight:bold;
				margin-bottom:8px;
				}

				#stylized p {
				font-size:11px;
				color:#666666;
				margin-bottom:20px;
				border-bottom:solid 1px #b7ddf2;
				padding-bottom:10px;
				}

				#stylized label {
				display:block;
				font-weight:bold;
				text-align:right;
				width:140px;
				float:left;
				cursor: pointer;
				}

				#stylized .small {
				color:#666666;
				display:block;
				font-size:11px;
				font-weight:normal;
				text-align:right;
				width:140px;
				}

				#stylized input, textarea {
				float:left;
				font-size:12px;
				padding:4px 2px;
				border:solid 1px #aacfe4;
				width:200px;
				margin:2px 0 20px 10px;
				}

				#stylized button {
				clear:both;
				margin-left:150px;
				width:125px;
				height:31px;
				background:#9B9A98;
				text-align:center;
				line-height:31px;
				color:#FFFFFF;
				font-size:11px;
				font-weight:bold;
				}
				
			</style>
	</head>
	<body>
		<div id="wrap">
			<a href="http://google.com" id="new_comment" >Registration Form</a> <a href="#" id="cancel_comment" style="display: none">Cancel</a>
				<div id="stylized" class="myform">
					<form id="form" name="form" method="post" action="index.html">
						<h1>Sign-up form</h1>
						<p>This is the basic look of my form without table</p>

						<label>Name
							<span class="small">Add your name</span>
						</label>
						<input type="text" name="name" id="name" />

						<label>Email
							<span class="small">Add a valid address</span>
						</label>
						<input type="text" name="email" id="email" />
						
						<label>Password
							<span class="small">Min size 6 chars</span>
						</label>
						<input type="text" name="password" id="password" />

						<label>Your comment!
							<span class="small">What's on your mind?</span>
						</label>
						<textarea></textarea>

						<label>Are you agree with conditions?
							<span class="small">Yes, of course.</span>
						</label>
						<input type="checkbox" id="agree" />
						<button type="submit" id="btn" disabled="disabled">Sign-up</button>
						<div class="spacer"></div>

					</form>
				</div>
		</div>
	</body>
</html>


