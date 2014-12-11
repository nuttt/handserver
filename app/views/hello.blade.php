<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<h1>Upload Picture</h1>
	<h2>return value: {{$value}}</h2>
	<br>
	<form class="form-horizontal" role="form" method="POST" action="{{{ URL::to('predict') }}}" enctype="multipart/form-data">
		{{Form::file('picture',array('required' => 'required'))}}
		{{Form::submit("ส่งรูปภาพ")}}
		{{Form::close()}}
	</form>
</body>
</html>
