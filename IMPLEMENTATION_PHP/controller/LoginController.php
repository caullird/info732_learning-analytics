<?php

class LoginController extends Controller {


	public function index()
    {
        $this->render("index");
    }

    public function connect(){
        var_dump(parameters());
    }
}


