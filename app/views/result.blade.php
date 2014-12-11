<html>
<head>
	<meta charset="UTF-8">
	<title>Result</title>
	<style>
	.wrap{
		width:90%;
		text-align: left;
		text-indent: 15px;
		margin:auto;
		background-color: lightgreen;
		border-style: dashed;
		border-width: 2px;
		border-color: blue;
		border-radius: 10px;
	}
	</style>
</head>

<body>

	<div data-role="page" id="page" class="wrap">
		<div data-role="header">
			<h1>คำทำนายของคุณ</h1>
		</div>
		<div style="margin:auto;text-align: center;">
		 	{{ HTML::image('../app/storage/uploads/'.$data[0], "เส้นลายมือของคุณ") }}
		</div>
		<div data-role="content">    
			<p>
				{{$return}}
			</p>    
		</div>
		<div data-role="footer">
			<h4>By HandHoro</h4>
		</div>
	</div>

	
</body>
</html>