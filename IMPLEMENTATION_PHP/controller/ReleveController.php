<?php

class ReleveController extends Controller {
    /*public function index() {

        like_student();

        $this->render("index",
            [
                'module' => Module::findAll(),
                'evaluation' => Evaluation::findAll(),
                'internaluser' => Internaluser::findAll()
            ]
        );
    }*/
    public function student(){

        like_student();

        $this->render("index", [
            'module' => Module::findAll(),
            'evaluation' => Evaluation::findAll(),
            'internaluser' => Internaluser::findOne(['idinternaluser' => parameters()['id']])
        ]);
    }
}


