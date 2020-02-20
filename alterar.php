<?php 
$link=mysqli_connect('127.0.0.1','root','','delta');
if (!$link) {
	  die('Não conseguiu conectar: ' . mysql_error());
	}
$db_selected = mysqli_select_db($link,'delta');
	if (!$db_selected) {
	   die ('Não pode selecionar o banco : ' . mysql_error());
	}
mysqli_connect('127.0.0.1','root','','delta');	
				$id = $_POST['id'];
				$name = $_POST['name'];
				$adress = $_POST['adress'];
				$image = 1;
				
		$Post = mysqli_query($link,"UPDATE alunos SET name='$name', adress='$adress' WHERE id='$id';");

		echo"<script language='javascript' type='text/javascript'>alert('Alterado com sucesso!');window.location.href='index.php'</script>";
		
	
        ?>