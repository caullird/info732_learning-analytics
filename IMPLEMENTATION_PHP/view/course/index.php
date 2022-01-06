


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                 <li><span><h1><?php echo $data['module'][0]->title_module; ?> | Information supplémentaires</h1></span>
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

<div class="blog-details-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-details-inner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="latest-blog-single blog-single-full-view">
                                <div class="blog-image">
                                    <a href="#"><img src="https://source.unsplash.com/random/1920x400? <?php $data['module'][0]->title_module; ?>" alt="" />
                                    </a>
                                    <div class="blog-date">
                                        <p><span class="blog-day"></span></p>
                                    </div>
                                </div>
                                <div class="blog-details blog-sig-details">
                                    <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                        <span><a href="#"><i class="fa fa-heart"></i> <b>Nom du cours : </b> <?php echo $data['module'][0]->title_module; ?></a></span>
                                        <span><a href="#"><i class="fa fa-user"></i> <b>Professeur référent : </b> <?php echo $data['module'][0]->title_module; ?></a></span>
                                        <span><a href="#"><i class="fa fa-user"></i> <b>Coefficient de la matière :</b> <?php echo $data['module'][0]->gradecoefficient_module; ?></a></span>
                                    </div>
                                    <h1><a class="blog-ht" href="#"><?php echo $data['module'][0]->title_module; ?></a></h1>
                                    <p><?php echo $data['module'][0]->description_module; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

