<?php

namespace SurveyGizmo\Models\Concrete{    
    class SGAccountRepository
    {
        private /* @var $this->context SGDataContext */ $context;
        
        function __Construct() {
            $this->context = new SGDataContext();
        }        
        
        /**
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/account-object
         */
        public function Account()
        {            
            $url = "https://restapi.surveygizmo.com/v4/account";
            return $this->context->GetData( $url );
        }
    }
}
