<?php

namespace SurveyGizmo\Models\Concrete{    
    class SGSurveyResponseRepository
    {
        private /* @var $this->context SGDataContext */ $context;
        
        function __Construct() {
            $this->context = new SGDataContext();
        }
        
        /**
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/surveyresponse-sub-object
         * @example ../../Examples/survey-responses.php
         */
        function GetList( $surveyID, $data = array() )
        {                    
            $url = "https://restapi.surveygizmo.com/v4/survey/{$surveyID}/surveyresponse";
            return $this->context->GetData( $url, $data );
        }
    }
}