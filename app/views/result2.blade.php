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
		padding: 10px 20px;
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
		background-image: url('{{ URL::to('../app/views/img/swirl_pattern.png') }}');
		background-repeat: repeat-x repeat-y;
	}
	</style>
</head>

<body>

	<div data-role="page" id="page" class="wrap">
		<div data-role="header" style="text-align: center; margin-top: 10px;">
			<!--<h1 id="typo">คำทำนายของคุณ</h1>-->
			{{ HTML::image('../app/views/img/header.gif', "คำทำนายของคุณ") }}
		</div>
		<div style="margin:auto;text-align: center; margin-top: 10px;">
			{{ HTML::image('../app/output/'.$filename.'.jpg', "เส้นลายมือของคุณ", ['style'=>"max-width:80%;height:auto;"]) }}
		 	
		</div>
		
		<div data-role="content" class="wrap2">    
			<p>
				<?php 
					function tis620_to_utf8($tis) {
						$utf8 = '';
						for( $i=0 ; $i< strlen($tis) ; $i++ ){
							$s = substr($tis, $i, 1);
							$val = ord($s);
							if( $val < 0x80 ){
								$utf8 .= $s;
							} 
							elseif ((0xA1 <= $val and $val <= 0xDA) 
								or (0xDF <= $val and $val <= 0xFB)) {
								$unicode = 0x0E00 + $val - 0xA0;
								$utf8 .= chr( 0xE0 | ($unicode >> 12) );
								$utf8 .= chr( 0x80 | (($unicode >> 6) & 0x3F) );
								$utf8 .= chr( 0x80 | ($unicode & 0x3F) );
							}
						}
						return $utf8;
					}
					$myfile = fopen("../app/output/".$filename.'.txt', "r") or die("unable to open file!");
					if(filesize("../app/output/".$filename.'.txt') > 0) {
						$text = fread($myfile, filesize("../app/output/".$filename.'.txt'));
						$text = tis620_to_utf8($text);
						echo $text;
					}
					else {
						echo "คำทำนายของคุณไม่ชัดเจน โปรดถ่ายรุปใหม่อีกครั้ง";
					}
					fclose($myfile);
				?>
			</p>        
		</div>
	</div>

	
</body>
</html>