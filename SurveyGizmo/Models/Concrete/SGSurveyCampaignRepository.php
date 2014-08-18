<?php

namespace SurveyGizmo\Models\Concrete{    
    class SGSurveyCampaignRepository
    {
        private /* @var $this->context SGDataContext */ $context;
        
        function __Construct() {
            $this->context = new SGDataContext();
        }
        
        /**
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/surveycampaign-sub-object#getlist
         * @example ../../Examples/survey-campaigns.php
         */
        function GetList( $surveyID, $data = array() )
        {           
            $url = "https://restapi.surveygizmo.com/v4/survey/{$surveyID}/surveycampaign";
            return $this->context->GetData( $url, $data );
        }
    }
}