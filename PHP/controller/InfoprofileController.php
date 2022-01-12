<?php

class InfoprofileController extends Controller {

    public function student(){

        like_student();


        $this->render("index", [
            'internaluser' => InternalUser::findOne(['idinternaluser' => parameters()['id']]),
            'student' => Student::findOne(['idinternaluser' => parameters()['id']]),
        ]);
    }
    public function admin(){

        like_admin();


        $this->render("index", [
            'internaluser' => InternalUser::findOne(['idinternaluser' => parameters()['id']]),
        ]);
    }
    public function mod_profil(){
        like_student();


        $this->render("mod_profil", [
            'internaluser' => InternalUser::findOne(['idinternaluser' => parameters()['id']]),
        ]);
    }
    
}


