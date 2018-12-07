<?php namespace SummaExercise;

    class IdGenerator{
	
        private static $instance;
        private $current_id = 0;
    
        private function __construct() {
        }
     
        public static function getInstance()
        {
            if (!isset(self::$instance)) {
                self::$instance = new IdGenerator();
            } 
            return self::$instance;
        }
        
        /**
        * Returns an Unique id
        * 
        * @return int
        */
        public function getUniqueId()
        {
            $this->current_id ++;
            return $this->current_id;
        }
       
        public function __clone()
        {
            trigger_error('Clonation of this kind of object is not allowed', E_USER_ERROR);
        }
    }

?>