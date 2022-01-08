<?php

class SiteController extends Controller {
	public function index() {

        like_student();

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


