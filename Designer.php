<?php namespace SummaExercise;

    use Exception;

    class Designer extends Employee{
        /* Member variables */
        private $designer_type;

        function __construct($name, $surname, $age, $designer_type) {
            if(!DesignerType::validate($designer_type)){
                throw new Exception("[Designer] Exception: Undefined Designer type.");
            }

            $this->designer_type = $designer_type;
            parent::__construct($name, $surname, $age);
        }

        public function __get($property_name) {
            if (property_exists($this, $property_name)) {
              return $this->$property_name;
            }
          }
        
        public function __set($property_name, $value) {
            if (property_exists($this, $property_name)) {
              $this->$property_name = $value;
            }
        
            return $this;
        }

        public function __toString() {
            return "Employee type: ". __CLASS__ . ", id: $this->id, complete name: $this->surname $this->name, age: $this->age, designer type: $this->designer_type";
        }
    }

?>