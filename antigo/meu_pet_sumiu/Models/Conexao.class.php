<?php
	abstract class Conexao
	{
		// Abrindo uma conexão com o Banco de Dados através da PDO
		public function __construct(protected $db = null)
		{
			$parametros = "mysql:host=localhost;port=3307;dbname=meupetsumiu;charset=utf8mb4";
			try
			{
				$this->db = new PDO($parametros, "root", "");
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				echo $e->getCode();
				die("Problema na conexão");
			}
		}
	
	}
?>