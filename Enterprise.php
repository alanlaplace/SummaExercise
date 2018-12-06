<?php namespace SummaExercise;

    class Enterprise {
        /* Member variables */
        private $id;
        private $name;
        private $employees;

        private $average_age;

        function __construct($name) {
            // Generates a random id
            $this->id = rand();
            $this->name = $name;
            $this->employees = [];

            $this->average_age = 0;
        }

        /**
         * Adds a new employee in the enterprise
         * 
         * @param Employee $employee
         */
        function addEmployee(Employee $employee){
            $employees_count = count($this->employees);
            $age_sum = $this->average_age * $employees_count;
            $this->employees[] = $employee;
            $this->average_age = ($age_sum + $employee->age) / ($employees_count + 1); 
        }

        /**
         * Returns the average age of the employees in the enterprise
         * 
         * @return double 
         */
        function getAverageAge(){
            return $this->average_age;
        }

        /**
         * Returns a string with the formatted information of all employees
         * 
         * @return string 
         */
        function getFormattedEmployeesList(){
            $employees_string_list = array_map(function($employee) {
                return (string)$employee; // __toString method
            }, $this->employees);

            return nl2br(implode("\n", $employees_string_list));
        }

        /**
        * Returns an Employee instance if a employee with the given $id is found, or null in other case
        * 
        * @param int $id
        * @return Employee|null
        */
        function getEmployee($id){
            $result = array_filter(
                $this->employees,
                function ($employee) use ($id) {
                    return $employee->id == $id;
                }
            );

            // as result contains an array, in order to obtain an employee is necesary to access it.
            return array_pop($result);
        }

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