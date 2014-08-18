<?php

namespace SurveyGizmo\Models\Concrete{    
    class SGContactRepository
    {
        private /* @var $this->context SGDataContext */ $context;
        
        function __Construct() {
            $this->context = new SGDataContext();
        }
        
        /**
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/contact-sub-object
         * @example ../../Examples/contacts.php
         */
        function GetList( $surveyID, $surveyCampaignID, $data = array() )
        {                    
            $url = "https://restapi.surveygizmo.com/v4/survey/{$surveyID}/surveycampaign/{$surveyCampaignID}/contact";
            return $this->context->GetData( $url, $data );
        }
        
        /**
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/contact-sub-object#getobject
         * @example ../../Examples/contact.php
         */
        function GetContact( $surveyID, $surveyCampaignID, $contactID, $data = array() )
        {            
            $url = "https://restapi.surveygizmo.com/v4/survey/{$surveyID}/surveycampaign/{$surveyCampaignID}/contact/{$contactID}";
            return $this->context->GetData( $url, $data );
        }
    }
}