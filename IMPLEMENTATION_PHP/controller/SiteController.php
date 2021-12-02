<?php

class SiteController extends Controller {
	public function index() {

		//TODO Changer avec id de connexion
		$iduser = 1;

		$this->render("index", 
			[
				'module' => Module::findAll(), 
				'internaluser' => InternalUser::findOne(['idinternaluser' => $iduser])
			]
		);
	}
}


