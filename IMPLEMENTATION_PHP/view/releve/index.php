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
                foreach($data['module'] as $module){
            ?>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <h3><?php echo $module->title_module ?></h3>
                    <?php
                        foreach($data['evaluation'] as $evaluation){
                            if ($evaluation -> idstudent -> idstudent == $data["internaluser"][0]->idinternaluser && $evaluation -> idmodule ->idmodule == $module->idmodule){ 
                                echo $evaluation->title_evaluation." ".$evaluation->mark_evaluation." ".$evaluation->comment_evaluation;
                        } }
                    ?>
                </div>
            </div>    
            <?php
                }
            ?>
        
    </div>
</div>