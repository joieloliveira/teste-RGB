<?php
//require './conecxao.php';

class conecxao{
	//variaveis da conexão 
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $dbname = "testergb";
	private $porta = 3308;
        
        public $imgdesc;
	
	function montaCortina(){
            //cria conexão
            $conn = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname, $this->porta);
            //Pega imgdescription no db
            $result_imgdescription = "SELECT id FROM imgdescription";
            $resultado_imgdescription = mysqli_query($conn, $result_imgdescription);
            $row_imgdescription = mysqli_fetch_assoc($resultado_imgdescription);
            $imgdesc = mysql_num_rows($row_imgdescription);
        }
}