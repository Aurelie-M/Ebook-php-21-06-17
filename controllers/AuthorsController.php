<?php

namespace Controller;

use Model\Authors;
use Model\Editors;
use Model\Books;
use Model\Types;

class AuthorsController{

	private $authors_model = null;

	// create a new author
	public function __construct(){

		$this->authors_model = new Authors();
	}

	public function index(){

		$data["authors"] = $this->authors_model->all();
		$data["view"] = "views/indexAuthors.php";

		return $data;
	}

	public function show(){

		if(!isset($_GET["id"])){

			die("Il manque l'id de votre auteur");
		}

		$id = intval($_GET["id"]);

		$author = $this->authors_model->find($id);

		$books = null;
		$editors = null;
		$types = null;

		if(isset($_GET["with"])){

			$with = explode(",", $_GET["with"]);

			if(in_array("books", $with)){

				$books_model = new Books();
				$books = $books_model->getBooksByAuthorId($author->id);
			}

			if(in_array("editors", $with)){

				$editors_model = new Editors();
				$editors = $editors_model->getEditorsByAuthorId($author->id);
			}

			if(in_array("types", $with)){

				$types_model = new Types();
				$types = $types_model->getTypesByAuthorId($author->id);
			}
		}

		return[
				"author" => $author,
				"view" => "showAuthors.php",
				"page-title" => "Ebook" . $author->name,
				"books" => $books,
				"editors" => $editors,
				"types" => $types
		];
	}
}