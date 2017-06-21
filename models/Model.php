<?php

namespace Model;

class Model{

		protected $table = "";

		protected $cn = null;

		public function __construct(){

			$dbConfig = parse_ini_file("db.ini");

			$PDOOptions = [

					\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
					\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION

			];

			try{

				$dsn = sprintf("%s:host=%s;dbname=%s", $dbConfig["driver"], $dbConfig["host"], $dbConfig["dbname"]);

				$this->cn = new \PDO($dsn, $dbConfig["username"], $dbConfig["password"], $PDOOptions);

				$this->cn->query("SET CHARACTER SET UTF8");
				$this->cn->query("SET NAMES UTF8");
			
			}catch(\PDOException $e){

				die($e->getMessage());
			}
		}

		// show all books, authors, editors, types
		public function all(){

			$sql = "SELECT * FROM $this->table";

			$pdoStmt = $this->cn->query($sql);

			return $pdoStmt->fetchAll();

		}

		// show one book, author, editor, type
		public function find($id){

			$sql = "SELECT * FROM $this->table WHERE id = :id";

			$pdoStmt = $this->cn->prepare($sql);

			$pdoStmt->execute([":id" => $id]);

			return $pdoStmt->fetch();
		}
}