<?php

class AdminController extends Controller {
    public function index() {

        like_admin();

        $this->render("index",
            [
                'module' => Module::findAll()
            ]
        );
    }
}


