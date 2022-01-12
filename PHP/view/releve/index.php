<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <ul>
                                 <li><span><h1>Relevé de notes | <?php echo $data['internal_user']->name_user." ".$data['internal_user']->forname_user; ?></h1></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="static-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline8-list">
                        <div class="static-table-list">
                            <table class="table">
                                <tbody>
                                <?php
                                foreach($data['educationalunit'] as $educationalunit){
                                    echo "<tr>";
                                    echo "<td><b>" . $educationalunit->title_educationalunit . "</b></td>";
                                    foreach($data['module_unit'] as $moduleunit){
                                        if($moduleunit->ideducationalunit->ideducationalunit == $educationalunit->ideducationalunit){
                                            echo "<tr>";
                                            echo "<td>&ensp;&ensp;" . $moduleunit->idmodule->title_module . "</td>";
                                            echo "<tr>";
                                            foreach($data['evaluation'] as $evaluation){
                                                if(($evaluation->idmodule->idmodule == $moduleunit->idmodule->idmodule)){
                                                    echo "<tr>";
                                                    echo "<td>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;" . $evaluation->title_evaluation ." | ".$evaluation->comment_evaluation . " | Note : <b>" . $evaluation->mark_evaluation . "</b></td>";
                                                    echo "</tr>";
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>