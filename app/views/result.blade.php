<?php
header( 'Content-Type:text/html; charset=utf-8');
?>
<html>
<head>
	<!-- <meta charset="tis-620"> -->
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
		<!-- <div data-role="header"> -->
			<h1>คำทำนายของคุณ</h1>
		<!-- </div> -->
		<div style="margin:auto;text-align: center;">
		 	{{ HTML::image('../app/output/'.$filename.'.jpg', "เส้นลายมือของคุณ") }}
		</div>
		<div data-role="content">    
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
		<div data-role="footer">
			<h4>By HandHoro</h4>
		</div>
	</div>

	
</body>
</html>