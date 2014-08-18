<?php
    require_once "../SurveyGizmo.php"; 

    use SurveyGizmo\SurveyGizmo;
    use SurveyGizmo\Models\Entities\SGAuthCredentials;
    use SurveyGizmo\Models\Entities\SGAuthType;

    /**
     * First set up your authentication model. It is a singleton,
     * so any future calls will be based off of this.
     */

    $authCredentials = new SGAuthCredentials();
    $authCredentials->AuthenticationType = SGAuthType::BASIC;
    $authCredentials->Username = "";
    $authCredentials->Password = "";

    $surveyGizmo = new SurveyGizmo();   
    $surveyGizmo->SetupAuthentication( $authCredentials );
