<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /**
             * @link // http://apisurveygizmo.helpgizmo.com/help/article/link/filters Help for filters
             */
            require_once "../SurveyGizmo.php"; 
            require_once "setup-authentication.php";
            
            use SurveyGizmo\Models\Concrete\SGSurveyRepository;
            
            $surveyRepository = new SGSurveyRepository();    
            
            $data = array(
                "page" => 1,
                "resultsperpage" => 100,
                "filters" => array( 
                    "field" => array( "title" ),
                    "operator" => array( "=" ),
                    "value" => array( "Test Survey" )
                )
            ); 
            

            $survey = $surveyRepository->GetList( $data );
            
            echo "<pre>";
            print_r( $survey );
            echo "</pre>";
        ?>
    </body>
</html>