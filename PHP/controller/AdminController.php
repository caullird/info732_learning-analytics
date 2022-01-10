<?php

class AdminController extends Controller {
    public function index() {

        like_admin();

        $this->render("index",
            [
                'module' => Module::findAll(),
                'evaluation' => Evaluation::findAll(),
                'course' => Course::findAll(),
                'homework' => Homework::findAll(),
                'moduleunit' => ModuleUnit::findAll(),
                'students' => Student::findAll()
            ]
        );
    }
}


