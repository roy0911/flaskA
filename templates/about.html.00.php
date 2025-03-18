<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>邱建勳簡介</title>
	<style type="text/css">

		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}

		h1 {color:blue; font-size:60px;}

		h2 {color:#33ff33; font-size:40px;}

	</style>
	<script>

function change1() {

document.getElementById("pic").src = "mountain.jpg";

document.getElementById("h2text").innerText = "靜宜資管";

}

function change2() {

document.getElementById("pic").src = "cliff.jpg";

document.getElementById("h2text").innerText = "Tzyy-Ching Yang";

}

</script>
</head>
<body>
	<table width="70%">
	<tr>
		<td>
			<img src="cliff.jpg" width="110%"id="pic"
			onmouseover="change1()" onmouseout="change2()"></img>
			</td>
			<td>
				<h1>邱建勳</h1>
				<h2 id="h2text">Qiu Jianxun</h2>
		</td>

</tr>

</table>
<table width="70%"border="1">
	<tr>
	<td>


	靜宜網頁：<a href="https://www1.pu.edu.tw/~tcyang"></a><br><

	FB：<a href=https://www.facebook.com/ray930911></a><br>
	target="_blank">https://www.facebook.com/ray930911</a><br>
	Tel: <a href="tel:0426328001,18110">04-26328001#18110</a><br>

	E-Mail: <a href="mailto:kevin2235417@gmail.com">kevin2235417@gmail.com</a><br>

	

	</td>

	<td>
		大象席地而坐電影配樂<br>

	<audio controls>

	<source src="elephant.mp3" type="audio/mP3">

	</audio><br>

	</td>

	<td>

	不要去臺灣<br>

	<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>

	</td>

	
<td>
	<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/9a2fb6dc-34b2-465b-b0bf-8b77f821b70c">
</iframe>
</td>
</tr>
	</table>
		
	
	
	


</body>
<?php echo date("Y-m-d") ?>
</html>