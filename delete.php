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

        $id = $_GET['id'];  
        $sqlInsert = "DELETE FROM alunos WHERE id = '$id'";   
        $deletaPost = mysqli_query($link,$sqlInsert);

   echo"<script language='javascript' type='text/javascript'>alert('Excluido com sucesso!');window.location.href='index.php'</script>";
		

 

?>