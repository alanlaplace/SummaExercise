<?php namespace SummaExercise;

    abstract class Employee {
        /* Member variables */
        protected $id;
        protected $name;
        protected $surname;
        protected $age;

        function __construct($name, $surname, $age) {
            // Generates a random id
            $this->id = IdGenerator::getInstance()->getUniqueId();
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }

        public abstract function __toString();

        public function __get($property_name) {
            if (property_exists($this, $property_name)) {
              return $this->$property_name;
            }
          }
        
        public function __set($property_name, $value) {
            if (property_exists($this, $property_name)) {
              $this->$property = $value;
            }
        
            return $this;
        }
    }
    
?>