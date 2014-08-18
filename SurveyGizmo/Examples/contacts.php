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
            
            use SurveyGizmo\Models\Concrete\SGContactRepository;
            
            $contactRepository = new SGContactRepository();                
            
            $surveyID = 1383694;
            $campaignID = NULL;
            $data = array(
                "page" => 1,
                "resultsperpage" => 100,
//                "filters" => array( 
//                    "field" => array( "[question(2)]" ),
//                    "operator" => array( "=" ),
//                    "value" => array( "Paris" )
//                )
            ); 
            
            $contacts = $contactRepository->GetList( $surveyID, $campaignID );
            
            echo "<pre>";
            print_r( $contacts );
            echo "</pre>";
        ?>
    </body>
</html>