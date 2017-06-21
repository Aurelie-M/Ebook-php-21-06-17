<?php

namespace Controller;

use Model\Authors;
use Model\Editors;
use Model\Books;
use Model\Types;

class TypesController{

	private $types_model = null;

	// create a new type
	public function __construct(){

		$this->types_model = new Types();
	}

	public function index(){

		$data["types"] = $this->types_model->all();
		$data["view"] = "views/indexTypes.php";

		return $data;
	}

	public function show(){

		if(!isset($_GET["id"])){

			die("Il manque l'id de votre genre littéraire");
		}

		$id = intval($_GET["id"]);

		$type = $this->types_model->find($id);

		$books = null;
		$editors = null;
		$authors = null;

		if(isset($_GET["with"])){

			$with = explode(",", $_GET["with"]);

			if(in_array("books", $with)){

				$books_model = new Books();
				$books = $books_model->getBooksByTypeId($type->id);
			}

			if(in_array("editors", $with)){

				$editors_model = new Editors();
				$editors = $editors_model->getEditorsByTypeId($type->id);
			}

			if(in_array("authors", $with)){

				$authors_model = new Authors();
				$authors = $authors_model->getAuthorsByTypeId($type->id);
			}
		}

		return[
				"type" => $type,
				"view" => "showTypes.php",
				"page-title" => "Ebook" . $type->name,
				"books" => $books,
				"editors" => $editors,
				"authors" => $authors
		];
	}
}