
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <ul>
                                            <li><span><h1>Hello <?php echo $_SESSION["user"][0]->name_user ;?> <?php echo $_SESSION["user"][0]->forname_user ;?>, nous sommes ravis de te retrouver ! </h1></span>
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

            <div class="widget-program-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                                <div class="panel-body">
                                    <div class="text-center content-bg-pro">
                                        <h3>Examen MATH741</h3>
                                        <p class="text-big font-light">
                                            13/01
                                        </p>
                                        <small>
                                            Probabilités & statistiques
                                                </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                                <div class="panel-body">
                                    <div class="text-center content-bg-pro">
                                        <h3>Soutenance PROJ731</h3>
                                        <p class="text-big font-light">
                                            17/01
                                        </p>
                                        <small>
                                            Présentation oral en groupe de 4 étudiants    
                                                </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                <div class="panel-body">
                                    <div class="text-center content-bg-pro">
                                        <h3>INFO734</h3>
                                        <p class="text-big font-light">
                                            24/01
                                        </p>
                                        <small>
                                            Projet boutique en ligne à rendre                                                    
                                                </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="hpanel shadow-inner hbgred bg-4 res-tablet-mg-t-30 dk-res-t-pro-30">
                                <div class="panel-body">
                                    <div class="text-center content-bg-pro">
                                        <h3>INFO731</h3>
                                        <p class="text-big font-light">
                                            27/01
                                        </p>
                                        <small>
                                                    Examen réseaux & systèmes répartis
                                                </small>
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
                                            <li><span><h1>Vos cours</h1></span>
                                            </li>
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

                    ?>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                                <div class="courses-title">
                                    <a href="#"><img src="https://source.unsplash.com/random/1200x800? <?php echo $module->title_module; ?>" alt="" /></a>
                                    <h2><?php echo $module->title_module; ?></h2>
                                </div>
                                <div class="courses-alaltic">
                                    <!-- <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                    <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                    <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span> -->
                                </div>
                                <div class="course-des">
                                    <p><span><i class="fa fa-clock"></i></span> <b>Unité d'enseignement : </b> 6 Months</p>
                                    <p><span><i class="fa fa-clock"></i></span> <b>Professeur référent :</b> TODO</p>
                                    <p><span><i class="fa fa-clock"></i></span> <b>Coefficient : </b><?php echo $module->gradecoefficient_module; ?></p>
                                </div>
                                <div class="product-buttons">
                                    <a class="product-buttons" href="<?php echo "?r=course/student&id=".$module->idmodule?>">
                                        <button type="button" class="button-default cart-btn">En savoir plus sur le cours</button>
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
        