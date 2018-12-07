<?php namespace SummaExercise;

    class ProgrammingLanguage {
        const PHP = "PHP";
        const NET = "NET";
        const PYTHON = "Python";

        const LANGUAGES = [self::PHP, self::NET, self::PYTHON];

        /**
         * Returns True if $language is a valid language, or false if not
         * 
         * @param string $language
         * @return bool
        */
        public static function validate($language){
            return in_array($language, self::LANGUAGES);
        }
    }
    
?>