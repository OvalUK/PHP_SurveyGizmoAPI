<?php

namespace SurveyGizmo\Models\Concrete{    
    class SGSurveyQuestionRepository
    {
        private /* @var $this->context SGDataContext */ $context;
        
        function __Construct() {
            $this->context = new SGDataContext();
        }
        
        /**
         * @link https://restapi.surveygizmo.com/v4/survey/123456/surveyquestion
         * @example ../../Examples/survey-questions.php
         */
        function GetList( $surveyID )
        {                    
            $url = "https://restapi.surveygizmo.com/v4/survey/{$surveyID}/surveyquestion";
            return $this->context->GetData( $url );
        }
        
        function GetSurveyQuestion( $surveyID, $questionID )
        {
            $url = "https://restapi.surveygizmo.com/v4/survey/{$surveyID}/surveyquestion/{$questionID}";
            return $this->context->GetData( $url );
        }
    }
}

