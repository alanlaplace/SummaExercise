<?php namespace SummaExercise;

    class Developer extends Employee{
        /* Member variables */
        private $programming_languaje;

        function __construct($name, $surname, $age, $programming_languaje) {
            if(!ProgrammingLanguaje::validate($programming_languaje)){
                throw new Exception("[Developer] Exception: undefined Programming languaje type not found.");
            }

            $this->programming_languaje = $programming_languaje;
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
            return "Employee type: ". __CLASS__ . ", id: $this->id, complete name: $this->surname $this->name, age: $this->age, languaje: $this->programming_languaje";
        }
    }

?>