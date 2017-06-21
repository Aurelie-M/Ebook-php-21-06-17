<?php

namespace Controller;

use Model\Authors;
use Model\Editors;
use Model\Books;
use Model\Types;

class BooksController{

	private $books_model = null;

	// create a new book
	public function __construct(){

		$this->books_model = new Books();
	}

	public function index(){

		$data["books"] = $this->books_model->all();
		$data["view"] = "views/indexBooks.php";

		return $data;
	}

	public function show(){

		if(!isset($_GET["id"])){

			die("Il manque l'id de votre livre");
		}

		$id = intval($_GET["id"]);

		$book = $this->books_model->find($id);

		$authors = null;
		$editors = null;
		$types = null;

		if(isset($_GET["with"])){

			$with = explode(",", $_GET["with"]);

			if(in_array("authors", $with)){

				$authors_model = new Authors();
				$authors = $authors_model->getAuthorsByBookId($book->id);
			}

			if(in_array("editors", $with)){

				$editors_model = new Editors();
				$editors = $editors_model->getEditorsByBookId($book->id);
			}

			if(in_array("types", $with)){

				$types_model = new Types();
				$types = $types_model->getTypesByBookId($book->id);
			}
		}

		return[
				"book" => $book,
				"view" => "showBooks.php",
				"page-title" => "Ebook" . $book->title,
				"authors" => $authors,
				"editors" => $editors,
				"types" => $types
		];
	}
}