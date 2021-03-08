<?php
	$mail = $_POST['mail'];
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
	if (empty($err))
 	{
    	echo "<p>Спасибо, что подписались на нашу рассылку!</p>";
    
    }
    
   
?>