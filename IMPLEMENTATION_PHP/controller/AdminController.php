<?php

class AdminController extends Controller {
    public function index() {

        $iduser = 10;

        $_SESSION["user"] = InternalUser::findOne(['idinternaluser' => $iduser]);

        $this->render("index",
            [
                'module' => Module::findAll()
            ]
        );
    }
}


