<?php
   function conecta_bd()
   {
      $link=mysqli_connect("localhost","root","","agenda_ppi");
		//para tratar caracteres especiais nas operações sobre a base de dados
		//mysqli_query($link, "SET NAMES 'utf8'");
		//mysqli_query($link, 'SET character_set_connection=utf8');
		//mysqli_query($link, 'SET character_set_client=utf8');
		//mysqli_query($link, 'SET character_set_results=utf8');
      if ($link)
         return($link);
      return(FALSE);
   }
?>