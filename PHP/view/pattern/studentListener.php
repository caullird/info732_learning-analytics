<?php
    class abstract StudentListener implements Observer {
        protected $liste_observers = []
        
        
        public function update($msg){
            echo $msg;

        }


    }

?>