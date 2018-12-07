<?php namespace SummaExercise;

    class Developer extends Employee{
        /* Member variables */
        private $programming_language;

        function __construct($name, $surname, $age, $programming_language) {
            if(!ProgrammingLanguage::validate($programming_language)){
                throw new Exception("[Developer] Exception: undefined Programming language type not found.");
            }

            $this->programming_language = $programming_language;
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
            return "Employee type: ". __CLASS__ . ", id: $this->id, complete name: $this->surname $this->name, age: $this->age, language: $this->programming_language";
        }
    }

?>