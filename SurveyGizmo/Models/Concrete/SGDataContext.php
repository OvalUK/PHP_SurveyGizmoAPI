<?php

namespace SurveyGizmo\Models\Concrete
{
    require_once __DIR__ . '/../../../vendor/autoload.php';

    // OAuth library: https://github.com/sudocode/ohmy-auth
    // PHP Curl Class: https://github.com/php-curl-class/php-curl-class

    use ohmy\Auth1;
    use SurveyGizmo\Models\Entities\SGAuthType;
    use SurveyGizmo\Models\Entities\SGAuthCredentials;
    
    class SGDataContext
    {    
        private $curl;

        private $OAuthConsumerKey = "";
        private $OAuthConsumerSecret = "";
        private $OAuthRequestURI = "http://restapi.surveygizmo.com/head/oauth/request_token";

        private $BasicAuthParameters = "%s:%s";
        
        private static /* SGAuthCredentials */ $Authentication;

        public function __Construct()
        {
            $this->curl = new \Curl();
        }

        /**
         * Public setter for authentication.
         * 
         * @todo Error trapping on bad SGAuthCredentials instance
         * @param \SurveyGizmo\Concrete\SGAuthCredentials $authCredentials
         * @author James Trusler
         */
        public static function SetupAuthentication( SGAuthCredentials $authCredentials )
        {
            self::$Authentication = $authCredentials;
        }

        /**
         * Deals with OAuth authentication
         * 
         * @todo This function is not finished.
         * @author James Trusler
         */
        public function OAuthAuthenticate()
        {
            throw new Exception( "OAuthAuthenticate Not yet implemented" );
            
//            $response = Auth1::legs(2)
//                 ->set( 'key', $this->OAuthConsumerKey )
//                 ->set( 'secret', $this->OAuthConsumerSecret )
//                 ->request( $this->OAuthRequestURI );
        }

        /**
         * Main access point for all repository operations.
         * It bases all operations based off of the authentication
         * type declared on the construction of this object.
         * 
         * @param string $url
         * @author James Trusler
         */
        public function GetData( $url, $data = array() )
        {
            
            try
            {
                if( $url )
                {
                    if( self::$Authentication->AuthenticationType )
                    {
                        switch( self::$Authentication->AuthenticationType )
                        {
                            case SGAuthType::BASIC:
                                return $this->BasicAuthentication( $url, $data );
                                break;
                        }
                    }
                    else
                    {
                        throw new Exception( "You must call SetAuthenticationType on the SDDataContext first. This will determine what authentication method to use for future API requests." );
                    }
                }
                else
                {
                    throw new Exception( "You need to define a URL in your repository..." );
                }
            }
            catch( Exception $e )
            {
                echo $e->getMessage();
            }
        }

        /**
         * Adds the authentication parameter to the URL
         * 
         * @link http://apisurveygizmo.helpgizmo.com/help/article/link/authentication  Authentication API
         * @param string $operationURL
         * @param array $data
         * @author James Trusler
         */
        public function BasicAuthentication( $operationURL, $data = array() )
        {
            $data[ "user:pass" ] = sprintf( $this->BasicAuthParameters, self::$Authentication->Username, self::$Authentication->Password );
            
            try
            {
                $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
                $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST, 2);
                $this->curl->get( $operationURL, $data );
                $response = $this->curl->response;
            }
            catch( Exception $e )
            {
                echo $e->getMessage();
                return NULL;
            }
            
            return $response;
        }
    }
}