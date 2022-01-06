<?php

class CourseController extends Controller {

    public function index() {
        var_dump(parameters());
    }

    public function admin(){
        $this->render("index",
            [
                'module' => Module::findAll(),
                'internaluser' => InternalUser::findOne(['idinternaluser' => $_SESSION["user"]])
            ]
        );
    }

    public function student(){
        $this->render("index",
            [
                'module' => Module::findAll(),
                'internaluser' => InternalUser::findOne(['idinternaluser' => $_SESSION["user"]])
            ]
        );
    }
}


