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
            
            use SurveyGizmo\Models\Concrete\SGAccountRepository;
            
            $surveyAccountRepository = new SGAccountRepository();  
            $account = $surveyAccountRepository->Account();
            
            echo "<pre>";
            print_r( $account );
            echo "</pre>";
        ?>
    </body>
</html>
