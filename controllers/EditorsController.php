<?php

namespace Controller;

use Model\Authors;
use Model\Editors;
use Model\Books;
use Model\Types;

class EditorsController{

	private $editors_model = null;

	// create a new editor
	public function __construct(){

		$this->editors_model = new Editors();
	}

	public function index(){

		$data["editors"] = $this->editors_model->all();
		$data["view"] = "views/indexEditors.php";

		return $data;
	}

	public function show(){

		if(!isset($_GET["id"])){

			die("Il manque l'id de votre éditeur");
		}

		$id = intval($_GET["id"]);

		$editor = $this->editors_model->find($id);

		$books = null;
		$authors = null;
		$types = null;

		if(isset($_GET["with"])){

			$with = explode(",", $_GET["with"]);

			if(in_array("books", $with)){

				$books_model = new Books();
				$books = $books_model->getBooksByEditorId($editor->id);
			}

			if(in_array("authors", $with)){

				$authors_model = new Authors();
				$authors = $authors_model->getAuthorsByEditorId($editor->id);
			}

			if(in_array("types", $with)){

				$types_model = new Types();
				$types = $types_model->getTypesByEditorId($editor->id);
			}
		}

		return[
				"editor" => $editor,
				"view" => "showEditors.php",
				"page-title" => "Ebook" . $editor->name,
				"books" => $books,
				"authors" => $authors,
				"types" => $types
		];
	}
}