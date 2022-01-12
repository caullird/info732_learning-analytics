<?php

class ReleveController extends Controller {

    public function student(){

        like_student();

        $this->render("index", [
            'module' => Module::findAll(),
            'evaluation' => Evaluation::findOne(['idstudent' => Student::findOne(['idinternaluser' => parameters()['id']])[0]->idstudent]),
            'educationalunit' => EducationalUnit::findAll(),
            'module_unit' => ModuleUnit::findAll(),
            'internal_user' => Student::findOne(['idinternaluser' => parameters()['id']])[0]->idinternaluser
        ]);
    }

    public function admin(){

        like_admin();

        $this->render("index", [
            'module' => Module::findAll(),
            'evaluation' => Evaluation::findOne(['idstudent' => Student::findOne(['idinternaluser' => parameters()['id']])[0]->idstudent]),
            'educationalunit' => EducationalUnit::findAll(),
            'module_unit' => ModuleUnit::findAll(),
            'internal_user' => Student::findOne(['idinternaluser' => parameters()['id']])[0]->idinternaluser
        ]);
    }
}


