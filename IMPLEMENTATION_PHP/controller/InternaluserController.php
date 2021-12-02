<?php

class InternaluserController extends Controller {

	public function index() {

		$internalusers = Internaluser::findOne(["deleted" => 0]);

		$table_header = array("Username", "Nom", "Prenom", "Email", "Admin");
    
		$table_content = array();
		foreach ($internalusers as &$internaluser) {
			$table_content[$internaluser->idinternaluser] = array(
				"Username" => $internaluser->username,
				"Nom" => $internaluser->name_user,
				"Prenom" => $internaluser->forname_user,
				"Email" => $internaluser->email,
				"Admin" => $internaluser->admin

			);
		}
	
		$table_addBtn = array("text" => "Ajouter un membre", "url" => "?r=internalusers/add");
	
		$table_actions = array(
			array("url" => "?r=internalusers/update&id=:id", "desc"=>"", "icon"=>"update.png"),
			array("url" => "?r=internalusers/delete&id=:id", "desc"=>"delete member", "icon"=>"removeicon.png")
		);

		$this->renderComponent("table", ["header"=>$table_header, "content"=>$table_content, "addBtn"=>$table_addBtn, "actions"=>$table_actions]);
	}

	public function add() {
		$message = null;
		$form_title = "Ajouter un membre";
		$form_content = array(
			"Username"=>array("type"=>"text"),
			"Nom"=>array("type"=>"text"),
			"Prenom"=>array("type"=>"text"),
			"Email"=>array("type"=>"text"),
			"Admin"=>array("type"=>"checkbox", "options"=>["Administrateur"=>1])
			);
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (parametersExist(["Username", "Nom", "Prenom","Email","Admin"])) {
				$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
				for ($i = 0; $i < 8; $i++) {
					$n = rand(0, strlen($alphabet)-1);
					$pass[$i] = $alphabet[$n];
				}
				$pass = implode("",$pass);
				$internaluser->password = password_hash($pass,PASSWORD_DEFAULT);

				$internaluser = new InternalUser();
				$internaluser->username = parameters()["Username"];
				$internaluser->name_user = parameters()["Nom"];
				$internaluser->forname_user = parameters()["Prenom"];
				$internaluser->admin = parameters()["Admin"];
				$internaluser->email = parameters()['Email'];
				$internaluser->password = $pass;
				$message = ["type"=>"info", "content"=>"Le mots de passe aléatoire de $internaluser->username est $pass"];
				$internaluser->insert();

				if (parameters()["Admin"] == 1) {
					$user = InternalUser::findOne(["username" => $internaluser->username, "nom" => $internaluser->name_user, "prenom" => $internaluser->forname_user, "email" => $internaluser->email])[0];
		
					$student = new Student();
					$student->idinternaluser = $internaluser->idinternaluser;
					$student->insert();
				}


			} else {
				$message = ["type"=>"Erreur", "content"=>"Champ manquants durant l'insertion de l'utilisateur"];
			}
			
		}
		$this->renderComponent("form", ["title"=>$form_title, "content"=>$form_content, "message"=>$message]);

		
	}

	public function update() {
		id_or_back(parameters());
		$internaluser = new InternalUser(parameters()["id"]);

		$message = null;
		$form_title = "Modifier un membre";
		$form_content = array(
			"Username"=>array("type"=>"text", "value"=>$internaluser->username),
			"Nom"=>array("type"=>"text", "value"=>$internaluser->name_user),
			"Prenom"=>array("type"=>"text", "value"=>$internaluser->forname_user),
			"Email"=>array("type"=>"text", "value"=>$internaluser->email),
			"Modifier le mot de passe"=>array("type"=>"checkbox", "options"=>["Régénérer le mot de passe"=>1])
			);
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (parametersExist(["Username", "Nom", "Prenom","Email"])) {
				$internaluser->username = parameters()["Username"];
				$internaluser->name_user = parameters()["Nom"];
				$internaluser->forname_user = parameters()["Prenom"];
				$internaluser->email = parameters()['Email'];
				if (isset(parameters()["Modifier_le_mot_de_passe"]) && parameters()["Modifier_le_mot_de_passe"] == 1) {
					$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
					for ($i = 0; $i < 8; $i++) {
						$n = rand(0, strlen($alphabet)-1);
						$pass[$i] = $alphabet[$n];
					}
					$pass = implode("",$pass);
					$internaluser->password = password_hash($pass,PASSWORD_DEFAULT);
					$internaluser->insert();
					$message = ["type"=>"Information", "content"=>"Le nouveau mot de passe de $internaluser->username est $pass"];
				} else {
					return header('Location: .?r=users');
				}
			} else {
				$message = ["type"=>"Erreur", "content"=>"Champ manquants durant l'insertion de l'utilisateur"];
			}
			
		}
		$this->renderComponent("form", ["title"=>$form_title, "content"=>$form_content, "message"=>$message]);
	}

	public function delete(){
        $internaluser = new InternalUser(parameters()["id"]);

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $internaluser->deleted = 1;
			$internaluser->insert();
			header('Location: .?r=users');
        } else {
			$this->render("validate", $internaluser);
		}

    }
}


