<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once "../SurveyGizmo.php"; 
            require_once "setup-authentication.php";
            
            use SurveyGizmo\Models\Concrete\SGSurveyQuestionRepository;
            
            $surveyQuestionRepository = new SGSurveyQuestionRepository();    
            
            $surveyID = 0;
            $surveyQuestions = $surveyQuestionRepository->GetList( $surveyID );            
            
            echo "<pre>";
            print_r( $surveyQuestions );
            echo "</pre>";
        ?>
    </body>
</html>