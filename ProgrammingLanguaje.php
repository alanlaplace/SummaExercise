<?php namespace SummaExercise;

    class ProgrammingLanguaje {
        const PHP = "PHP";
        const NET = "NET";
        const PYTHON = "Python";

        const LANGUAGES = [self::PHP, self::NET, self::PYTHON];

        public static function validate($languaje){
            return in_array($languaje, self::LANGUAGES);
        }
    }
    
?>