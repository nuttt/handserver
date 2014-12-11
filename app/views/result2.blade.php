<html>
<head>
	<meta charset="UTF-8">
	<title>Result</title>
	<style>
	.wrap{
		width:90%;
		text-align: left;
		text-indent: 10px;
		margin:auto;
	}
	
	.wrap2{
		width:90%;
		text-align: left;
		text-indent: 15px;
		margin:auto;
		background-color: rgba(255,255,255,0.7);
		border-style: solid;
		border-width: 2px;
		border-color: #CCC;
		border-radius: 10px;
		margin-top: 20px;
		color: #333;
	}
	
	#typo
	{
		width:90%;
		height: 140px;
		margin: auto;
		font-size: 50px;
		text-align: center;
		margin-top: 50px;
		font-family: 'Felipa', cursive;
		letter-spacing: -2px;
		color:red;
		/*text-transform: uppercase;*/
		font-variant: small-caps;
		text-shadow: 3px 3px 5px orange,
					 5px 5px 5px white;
	}
	
	body {
		background-image: url('img/swirl_pattern.png');
		background-repeat: repeat-x repeat-y;
	}
	</style>
</head>

<body>

	<div data-role="page" id="page" class="wrap">
		<div data-role="header" style="text-align: center; margin-top: 10px;">
			<!--<h1 id="typo">คำทำนายของคุณ</h1>-->
			<img src="C:\Users\zeta\Desktop\Learning HTML and CSS\img\header.gif">
		</div>
		<div style="margin:auto;text-align: center; margin-top: 10px;">
		 	<img src="C:\Users\zeta\Desktop\Learning HTML and CSS\img\italy7.jpg" style="max-width:80%;height:auto;">
		</div>
		
		<div data-role="content" class="wrap2">    
			<p>
				ผลการทำนายอยู่นี่
			</p>    
		</div>
	</div>

	
</body>
</html>