<?php 

/**
 * 
 */
class DB
{
	private $pdo;
	function __construct($host,$dbname,$username,$password)
	{
		$pdo=new PDO('mysql:host='.$host.';dbname='.$dbname.';', $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$this->pdo=$pdo;
		
	}

	public function query($query){
		$statement=$this->pdo->prepare($query);
		$statement->execute();
		if (explode(' ', $query)[0]=='SELECT') {

			$data=$statement->fetchAll();
			return $data;
		}
	}
}


?>