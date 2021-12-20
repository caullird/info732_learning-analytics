<?php

class LoginController extends Controller {

  var $rolepermissions = [-999];

	public function index()
    {

        $this->render("index");
//        if (isset(parameters()["uname"]) && parameters()["psw"]) {
//          $internaluser = Internaluser::attempt(parameters()["uname"], parameters()["psw"]);
//          if ($internaluser) {
//            $_SESSION["user"] = $internaluser;
//            header('Location: .');
//          } else {
//            $this->render("index", "error");
//          }
//        }
//
//            $this->render("index");
//        }
    }

    public function connect(){
        var_dump(parameters());
    }
}


