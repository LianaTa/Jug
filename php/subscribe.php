<?php
	$mail =   $_POST['email'];
	$err = "";
	if (!empty($mail))
	{ 
    
   		if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i",$mail)){
     	$err.="Введен некорректный адрес электронной почты<br>";
   		}
	}
	else{
   		print "<script type='text/javascript'>window.alert('Введите ваш адрес электронной почты'); </script>\n";
   		$err.="<p>Введите ваш адрес электронной почты!</p>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="../style.css">
	<title>JUG Конференции</title>
</head>
<body>
	<div  class="wrap page">
			<div class="form_result">
				<div class="subscribe ">
					<h2 class="visually-hidden">Подписаться на рассылку</h2>
					<div class="flex">
						<figure class="subscribe__fig">
							<img class = "subscribe__fig-img" src="../img/hello.png" alt = "hello_icon" >
						</figure>
						<p class="subscribe__desc">Я хочу знать,когда будет офлайн</p>
					</div>
					<?php 
						if (empty($err)){

					?>
					<p class="subscribe__thanks">Спасибо, что подписались на нашу рассылку!</p>
					<?php }else {echo $err;} ?>

				</div>
				<a href="../index.html" class="return_link goback">Я кликнул просто посмотреть</a>
			</div>
	</div>
</body>
</html>