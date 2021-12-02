<?php

class StudentController extends Controller {

	public function index() {
		$students = Student::findAll();

		$table_header = array("Numéro INE", "Numéro étudiant");
    
		$table_content = array();
		foreach ($students as &$student) {
			$table_content[$student->idstudent] = array(
				"Numéro INE" => $student->num_INE,
				"Numéro étudiant" => $student->num_student,
				
			);
		}
		
	
		$table_addBtn = array("text" => "Ajouter un étudiant", "url" => "?r=student/add");
	
		$table_actions = array(
			array("url" => "?r=student/update&id=:id", "desc"=>"", "icon"=>"update.png"),
			array("url" => "?r=student/delete&id=:id", "desc"=>"Supprimer l'étudiant", "icon"=>"removeicon.png"));
		
		$no_data = "Aucun étudiant n'existe, vous pouvez en créer en cliquant sur le bouton ajouter";
		$this->renderComponent("table", ["header"=>$table_header, "content"=>$table_content, "addBtn"=>$table_addBtn, "actions"=>$table_actions, "no_data"=>$no_data]);
	}

	public function update() {
		id_or_back(parameters());
		if($_SERVER['REQUEST_METHOD'] == "GET") {
			$student = new Student(parameters()["id"]);
			$form_title = "Modifier un étudiant";
			$form_content = array(
				"Nom de l'étudiant" => array("type" => "text", "value" => $internaluser->name_user),
				"Prénom de l'étudiant" => array("type" => "text", "value" => $internaluser->forname_user),
				"email" => array("type" => "text", "value" => $internaluser->email),
				"Description" => array("type" => "text", "value" => $classroom->description_classroom, "!required" => 1)
			);
			$this->renderComponent("form", ["title"=>$form_title, "content"=>$form_content]);
		}else{
			if(!parametersExist(["Nom_de_la_salle", "Nom_du_bâtiment", "Capacité_de_la_classe", "Description"])) {
				$classroom = new Classroom(parameters()["id"]);
				$classroom->name_classroom = parameters()["Nom_de_la_salle"];
				$classroom->building_classroom = parameters()["Nom_du_bâtiment"];
				$classroom->capacity_classroom = parameters()["Capacité_de_la_classe"];
				$classroom->description_classroom = parameters()["Description"];
				$classroom->update();
				$this->index();
			}else{
				go_back();
			}
		}
	}

	public function add() {

		if($_SERVER['REQUEST_METHOD'] == "GET") {
			$form_title = "Ajouter une salle";
			$form_content = array(
				"Nom de la salle" => array("type" => "text"),
				"Nom du bâtiment" => array("type" => "text"),
				"Capacité de la classe" => array("type" => "text"),
				"Description" => array("type" => "text", "!required" => 1)
			);
			$this->renderComponent("form", ["title" => $form_title, "content" => $form_content]);
		}else{
			if(isset(parameters()["Nom_de_la_salle"]) and isset(parameters()["Nom_du_bâtiment"]) and isset(parameters()["Capacité_de_la_classe"]) and isset(parameters()["Description"])) {
				$classroom = new Classroom();
				$classroom->name_classroom = parameters()["Nom_de_la_salle"];
				$classroom->building_classroom = parameters()["Nom_du_bâtiment"];
				$classroom->capacity_classroom = parameters()["Capacité_de_la_classe"];
				$classroom->description_classroom = parameters()["Description"];
				$classroom->insert();
				$this->index();
			}else{
				go_back();
			}
		}

		if (isset(parameters()["name_classroom"])) {
			$classroom = new Classroom();
			$classroom->name_classroom = parameters()["name_classroom"];
			$classroom->building_classroom = parameters()["building_classroom"];
			$classroom->capacity_classroom = parameters()["capacity_classroom"];
			$classroom->description_classroom = parameters()["description_classroom"];
			$classroom->insert();
			$this->index();
		}
	}

	public function delete(){
		if (isset(parameters()["id"])) {
			$classroom = new Classroom(parameters()["id"]);
			$classroom->delete();
		}
		$this->index();
	}

}


