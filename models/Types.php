<?php

namespace Model;

class Types extends Model{

	protected $table = "types";

	public function getTypesByBookId($id){

		// search type's book
		$sql = "SELECT DISTINCT types.*
				FROM types
				JOIN book_type ON book_type.type_id = types.id
				JOIN books ON book_type.book_type_id = books.id
				WHERE books.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt-> execute([":id" => $id]);

		return $pdoStmt->fetchAll();
	
	}

	public function getTypesByAuthorId($id){

		$sql = "SELECT DISTINCT types.*
				FROM types
				JOIN book_type ON book_type.type_id = types.id
				JOIN books ON book_type.book_type_id = books.id
				JOIN author_book ON books.id = author_book.book_id				
				JOIN authors ON author_book.author_id = authors.id
				WHERE authors.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}

	public function getTypesByEditorId($id){

		$sql = "SELECT DISTINCT types.*
				FROM types
				JOIN book_type ON book_type.type_id = types.id
				JOIN books ON book_type.book_type_id = books.id
				JOIN editors ON books.editor_id = editors.id
				WHERE editors.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}
}