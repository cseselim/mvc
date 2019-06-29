<?php 
	/**
	 * Database Class
	 */
	class Database extends PDO
	{
		
		function __construct($dbc,$user,$pass)
		{
			parent::__construct($dbc, $user, $pass); 
		}

		public function loginrow($sql, $username, $pass)
		{
			$stmp = $this->prepare($sql);
			$stmp->execute(array($username, $pass));
			return $stmp->rowcount();
		}

		public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
		{
			$stmp = $this->prepare($sql);
			foreach ($data as $key => $value) {
				$stmp->bindParam($key, $value);
			}
			$stmp->execute();
			return $stmp->fetchAll($fetchStyle);
		}

		public function insert($table, $data)
		{
			$keys   = implode(",", array_keys($data));
			$values = ":".implode(", :", array_keys($data));
			$sql = "INSERT INTO $table($keys) VALUES ($values)";
			$stmt = $this->prepare($sql);
			foreach ($data as $key => $value) {
			 	$stmt->bindValue(":$key", $value);
			 }
			return $stmt->execute();
		}

		public function update($table, $data, $cond)
		{
			$updateKeys = NULL;
			foreach ($data as $key => $value) {
				$updateKeys .= "$key=:$key,"; 
			}
			$updateKeys = rtrim($updateKeys,',');


			$sql = "UPDATE $table SET $updateKeys WHERE $cond";

			$stmt = $this->prepare($sql);
			foreach ($data as $key => $value) {
				$stmt->bindValue(":$key",$value);
			}
			return $stmt->execute();
		}

		public function delete($table, $cond, $limit='1')
		{
			$sql = "DELETE FROM $table WHERE $cond";
			return $this->exec($sql);
		}

		public function selectUser($sql, $username, $pass){
			$stmp = $this->prepare($sql);
			$stmp->execute(array($username, $pass));
			return $stmp->fetchAll(PDO::FETCH_ASSOC);
		}
	}
 ?>