<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                 <li><span><h1>Relevé de notes | <?php echo $_SESSION["user"][0]->name_user." ".$_SESSION["user"][0]->forname_user; ?></h1></span>
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
               echo "////" . $educationalunit->title_educationalunit;
               echo "<br>";
               foreach($data['module_unit'] as $moduleunit){
                   if($moduleunit->ideducationalunit->ideducationalunit == $educationalunit->ideducationalunit){
                       echo "///////////" . $moduleunit->idmodule->title_module;
                       echo "<br>";
                       foreach($data['evaluation'] as $evaluation){
                           if(($evaluation->idmodule->idmodule == $moduleunit->idmodule->idmodule)){
                               var_dump($evaluation);
                           }
                       }
                   }
               }

        ?>

        <?php
            }
        ?>    
    </div>
</div>