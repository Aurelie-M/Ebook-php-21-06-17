<?php

namespace Model;

class Books extends Model{

	protected $table = "books";

	public function getBooksByAuthorId($id){

		$sql = "SELECT DISTINCT books.*
				FROM books
				JOIN author_book ON books.id = author_book.book_id
				JOIN authors ON author_book.author_id = authors.id
				WHERE authors.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt-> execute([":id" => $id]);

		return $pdoStmt->fetchAll();
	
	}

	public function getBooksByEditorId($id){

		$sql = "SELECT DISTINCT books.*
				FROM books
				JOIN editors ON books.editor_id = editors.id
				WHERE editors.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}

	public function getBooksByTypeId($id){

		$sql = "SELECT DISTINCT books.*
				FROM books
				JOIN book_type ON books.id = book_type.book_type_id
				JOIN types ON book_type.type_id = types.id
				WHERE types.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}
}