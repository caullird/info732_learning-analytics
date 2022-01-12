<?php

class InfoprofileController extends Controller {

    public function student(){

        like_student();


        $this->render("index", [
            'internaluser' => InternalUser::findOne(['idinternaluser' => parameters()['id']]),
            'student' => Student::findOne(['idinternaluser' => parameters()['id']]),
        ]);
    }
}


