
 <?php
error_reporting(E_ALL ^ E_DEPRECATED);
	global $link;
	function Conectarse()
	{
			
			if(!($link=mysql_connect("localhost", "root", "")))
			{	
				echo "error conectando a la base de datos";
				exit ();
			}
			
			if(!mysql_select_db("informaticup",$link))
			{
				echo "error seleccionando en la base de datos";
				exit ();
			}
			return $link;
	}

function desconectar()
	{
		mysql_close();
	}


?>