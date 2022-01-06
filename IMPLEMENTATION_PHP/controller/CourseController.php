<?php

class CourseController extends Controller {

    public function index() {

    }

    public function admin(){

        like_admin();

        $this->render("index",[
            
        ]);
    }

    public function student(){

        like_student();

        $this->render("index");
    }

}


