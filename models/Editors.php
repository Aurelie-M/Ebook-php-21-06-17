<?php

namespace Model;

class Editors extends Model{

	protected $table = "editors";

	public function getEditorsByBookId($id){

		// search editor's book
		$sql = "SELECT DISTINCT editors.*
				FROM editors
				JOIN books ON editors.id = books.editor_id
				WHERE books.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt-> execute([":id" => $id]);

		return $pdoStmt->fetchAll();
	
	}

	public function getEditorsByAuthorId($id){

		$sql = "SELECT DISTINCT editors.*
				FROM editors
				JOIN books ON books.editor_id = editors.id
				JOIN author_book ON books.id = author_book.book_id				
				JOIN authors ON author_book.author_id = authors.id
				WHERE authors.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}

	public function getEditorsByTypeId($id){

		$sql = "SELECT DISTINCT editors.*
				FROM editors
				JOIN books ON books.editor_id = editors.id
				JOIN book_type ON books.id = book_type.book_type_id
				JOIN types ON book_type.type_id = types.id
				WHERE types.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}
}