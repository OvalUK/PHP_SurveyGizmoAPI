<?php

namespace SurveyGizmo
{
    require_once "Models/Concrete/SGDataContext.php"; 
    require_once "Models/Entities/SGAuthType.php"; 
    require_once "Models/Entities/SGAuthCredentials.php"; 
    
    require_once "Models/Concrete/SGAccountRepository.php";
    require_once "Models/Concrete/SGSurveyRepository.php";
    require_once "Models/Concrete/SGSurveyResponseRepository.php";
    require_once "Models/Concrete/SGSurveyQuestionRepository.php";
    require_once "Models/Concrete/SGSurveyCampaignRepository.php";
    require_once "Models/Concrete/SGContactRepository.php";
    
    use \SurveyGizmo\Models\Concrete\SGDataContext;
    
    /**
     * Just to serve as an alias to all the ugly interior
     */
    class SurveyGizmo extends SGDataContext
    {
        
    }
}

