            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <ul>
                                            <li><span><h1>Bonjour <?php echo $_SESSION["user"][0]->name_user ;?> <?php echo $_SESSION["user"][0]->forname_user ;?>, vous êtes connecté en tant que professeur ! </h1></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><span><h2>Vos prochains cours </h2></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="widget-program-bg">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        foreach($data['course'] as $course){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="hpanel shadow-inner hbggreen  bg-1 responsive-mg-b-30">
                                    <div class="panel-body">
                                        <div class="text-center content-bg-pro">
                                            <h3><?php echo $course->idmodule->title_module ?></h3>
                                            <p class="text-big font-light">
                                                <?php
                                                $date = new DateTime($course->timebegin_course);
                                                echo $course->title_course . " le " . $course->day_course . " à " . date_format($date, 'H:i');
                                                ?>
                                            </p>
                                            <small>
                                                <?php echo $course->idclassroom->idbuilding->name_building . " | Salle " . $course->idclassroom->name_classroom ?>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>

            <br>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><span><h2>Vos devoirs à corriger</h2></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widgets-programs-area">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        foreach($data['homework'] as $homework){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                    <div class="panel-body">
                                        <div class="stats-title pull-left">
                                            <h4><?php echo $homework->idmodule->title_module;  ?></h4>
                                        </div>
                                        <div class="stats-icon pull-right">
                                            <i class="educate-icon educate-professor"></i>
                                        </div>
                                        <div class="m-t-xl widget-cl-1">

                                            <h1 class="text-success"><?php echo $homework->title_homework; ?></h1>
                                            <small>
                                                <?php echo $homework->description_homework;  ?>
                                            </small>
                                        </div>
                                        <br>
                                        <button class="btn btn-success widget-btn-1 btn-sm">Corriger les rendus</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                </div>
            </div>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><span><h2>Vos étudiants </h2></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contacts-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        foreach($data['students'] as $student){
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="https://source.unsplash.com/random/1200x800?<?php echo $student->idinternaluser->forname_user;?>" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <h2><?php echo $student->idinternaluser->name_user . " " . $student->idinternaluser->forname_user;?></h2>
                                        <p class="dp"><?php echo "<b>(" . $student->idinternaluser->username . ")</b> " . $student->idinternaluser->email;?></p>
                                        <br>
                                        <a class="product-buttons" href="<?php echo "?r=releve/student&id=".$student->idinternaluser->idinternaluser?>">
                                            <button type="button" class="button-default cart-btn">Voir le relevé</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><span><h2>Vos modules </h2></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="courses-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">

                        <?php
                        foreach($data['module'] as $module){
                            foreach($data['moduleunit'] as $module_unit){
                                if($module_unit->idmodule->idmodule == $module->idmodule){
                                    $unit = $module_unit->ideducationalunit->title_educationalunit;
                                }
                            }
                            ?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                                    <div class="courses-title">
                                        <a href="<?php echo "?r=course/student&id=".$module->idmodule?>">
                                            <img style="width: 1200px; height: 300px;" src="<?php echo $module->photo_module?>" alt="" />
                                        </a>
                                        <h2><?php echo $module->title_module; ?></h2>
                                    </div>
                                    <div class="course-des">
                                        <p><span><i class="fa fa-clock"></i></span> <b>Unité d'enseignement : </b><?php echo $unit; ?></p>
                                        <p><span><i class="fa fa-clock"></i></span> <b>Professeur référent :</b> <?php echo $module->idteacher->idinternaluser->forname_user . " " . $module->idteacher->idinternaluser->name_user;  ?> </p>
                                        <p><span><i class="fa fa-clock"></i></span> <b>Coefficient : </b><?php echo $module->gradecoefficient_module; ?></p>
                                    </div>
                                    <div class="product-buttons">
                                        <a class="product-buttons" href="<?php echo "?r=course/admin&id=".$module->idmodule?>">
                                            <button type="button" class="button-default cart-btn">Plus d'informations sur le module</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php

                        }
                        ?>


                    </div>
                </div>
            </div>

            <div class="calender-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="calender-inner">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
