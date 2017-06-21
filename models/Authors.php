<?php

namespace Model;

class Authors extends Model{

	protected $table = "authors";

	public function getAuthorsByBookId($id){

		// search author's book
		$sql = "SELECT DISTINCT authors.*
				FROM authors
				JOIN author_book ON authors.id = author_book.author_id
				JOIN books ON author_book.book_id = books.id
				WHERE books.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt-> execute([":id" => $id]);

		return $pdoStmt->fetchAll();
	
	}

	public function getAuthorsByEditorId($id){

		$sql = "SELECT DISTINCT authors.*
				FROM authors
				JOIN author_book ON authors.id = author_book.author_id
				JOIN books ON author_book.book_id = books.id
				JOIN editors ON books.editor_id = editors.id
				WHERE editors.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}

	public function getAuthorsByTypeId($id){

		$sql = "SELECT DISTINCT authors.*
				FROM authors
				JOIN author_book ON authors.id = author_book.author_id
				JOIN books ON author_book.book_id = books.id
				JOIN book_type ON books.id = book_type.book_type_id
				JOIN types ON book_type.type_id = types.id
				WHERE types.id = :id";

		$pdoStmt = $this->cn->prepare($sql);

		$pdoStmt->execute([":id" => $id]);

		return $pdoStmt->fetchAll();

	}
}