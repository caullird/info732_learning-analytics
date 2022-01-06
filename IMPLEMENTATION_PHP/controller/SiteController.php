<?php

class SiteController extends Controller {
	public function index() {

		//TODO Changer avec id de connexion

        $iduser = 1;

        $_SESSION["user"] = InternalUser::findOne(['idinternaluser' => $iduser]);

		$this->render("index",
			[
				'module' => Module::findAll(),
				'evaluation' => Evaluation::findAll()
			]
		);
	}
}


