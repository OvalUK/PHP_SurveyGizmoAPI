PHP_SurveyGizmoAPI
==================

Lean layer to access SurveyGizmo API

##Getting started

- Take a look at the examples folder: https://github.com/OvalUK/PHP_SurveyGizmoAPI/tree/master/SurveyGizmo/Examples
- You will need to first authenticate. Basic authentication is the only option you have at the moment: https://github.com/OvalUK/PHP_SurveyGizmoAPI/blob/master/SurveyGizmo/Examples/setup-authentication.php
- You can then call upon any of the repositories following the examples provided: https://github.com/OvalUK/PHP_SurveyGizmoAPI/blob/master/SurveyGizmo/Examples/surveys.php

##Authenticating

- Unfortunately, Basic authentication is the only option you have at the moment

##Making API calls

- You will need to include the SurveyGizmoAPI.php

    `require_once "../SurveyGizmo.php";  ` 

- At this point you will have access to all of the repository class types... Please just include and use the namespace you need:

    `// https://github.com/OvalUK/PHP_SurveyGizmoAPI/blob/master/SurveyGizmo/Examples/surveys.php  
    use SurveyGizmo\Models\Concrete\SGSurveyRepository;   
    $surveyRepository = new SGSurveyRepository();  
    $survey = $surveyRepository->GetList( $data );  `

##Forking and contributions

- Feel free to use this library for any purpose, please give credit to "Oval" when using the product and link back to this Git repo so more can help and contribute in making it better.
