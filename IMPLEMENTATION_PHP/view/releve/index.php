<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                 <li><span><h1>Relevé de notes | <?php echo $data['internaluser'][0]->name_user." ".$data['internaluser'][0]->forname_user; ?></h1></span>
                                </li>
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
        <?php
           foreach($data['educationalunit'] as $educationalunit){
               echo $educationalunit->title_educationalunit;
        ?>

            <?php
                foreach($data['module'] as $module){
                    if ($module->idmodule == $moduleunit->idmodule->idmodule){
            ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3><?php echo $module->title_module?></h3>
                    <?php
                        foreach($data['evaluation'] as $evaluation){
                            if ($evaluation -> idstudent -> idstudent == $data["internaluser"][0]->idinternaluser && $evaluation -> idmodule ->idmodule == $module->idmodule){ 
                                echo $evaluation->title_evaluation." | Note : ".$evaluation->mark_evaluation." | Commentaire : ".$evaluation->comment_evaluation;
                        } }
                    ?>
                </div>
            </div>    
            <?php
                }}
            ?>
        <?php
            }
        ?>    
    </div>
</div>