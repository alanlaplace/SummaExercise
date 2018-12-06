<?php namespace SummaExercise;

    class ProgrammingLanguaje {
        const PHP = "PHP";
        const NET = "NET";
        const PYTHON = "Python";

        const LANGUAGES = [self::PHP, self::NET, self::PYTHON];

        /**
         * Returns True if $languaje is a valid languaje, or false if not
         * 
         * @param string $languaje
         * @return bool
        */
        public static function validate($languaje){
            return in_array($languaje, self::LANGUAGES);
        }
    }
    
?>