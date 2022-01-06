<?php

class SiteController extends Controller {
	public function index() {

		//TODO Changer avec id de connexion

        like_student();

		$this->render("index",
			[
				'module' => Module::findAll(),
				'evaluation' => Evaluation::findAll()
			]
		);
	}
}


