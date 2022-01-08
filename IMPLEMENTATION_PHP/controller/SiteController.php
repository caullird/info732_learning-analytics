<?php

class SiteController extends Controller {
	public function index() {

		//TODO Changer avec id de connexion

        like_student();
		//Course::get_next_course();
		$this->render("index",
			[
				'module' => Module::findAll(),
				'evaluation' => Evaluation::findAll(),
				'course' => Course::findAll(),
                'homework' => Homework::findAll()
			]
		);
	}
}


