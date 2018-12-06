<?php namespace SummaExercise;

    class DesignerType {
        const GRAPHIC = "GRAPHIC";
        const WEB = "WEB";

        const DESIGNER_TYPE = [self::GRAPHIC, self::WEB];

        public static function validate($type){
            return in_array($type, self::DESIGNER_TYPE);
        }
    }
    
?>