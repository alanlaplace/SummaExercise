<?php namespace SummaExercise;

    class DesignerType {
        const GRAPHIC = "GRAPHIC";
        const WEB = "WEB";

        const DESIGNER_TYPE = [self::GRAPHIC, self::WEB];

        /**
         * Returns True if $type is a valid designer type, or false if not
         * 
         * @param string $type
         * @return bool
        */
        public static function validate($type){
            return in_array($type, self::DESIGNER_TYPE);
        }
    }
    
?>