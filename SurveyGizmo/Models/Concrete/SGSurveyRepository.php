<?php

namespace SurveyGizmo\Models\Concrete{    
    class SGSurveyRepository
    {
        private /* @var $this->context SGDataContext */ $context;
        
        function __Construct() {
            $this->context = new SGDataContext();
        }
        
        /**
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/survey-object#getobject
         * @example ../../Examples/surveys.php
         */
        function GetList( $data = array() )
        {                    
            $url = "https://restapi.surveygizmo.com/v4/survey";
            return $this->context->GetData( $url, $data );
        }
    }
}