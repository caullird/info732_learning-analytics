<?php
    class Teacher implements Observer {
        private $observer;
        
        public function notifier($msg)){
            foreach ($this->observers as $observer){
                $observer->update($this, $msg);

            }
        }
        

    }

?>

