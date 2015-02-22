<?php
/**
 * Created by PhpStorm.
 * User: eveR
 * Date: 19/02/15
 * Time: 23:53
 */

namespace domain\social;


use Artdarek\OAuth\Facade\OAuth;

class GoogleAuth implements GoogleLogin
{
    private $client;

    function __construct()
    {
//        $this->initGoogle();
    }


    public function initGoogle()
    {
//        $this->client = new \Google_Client();
//        $this->client->setClientId(getenv('GOOGLE_CLIENT_ID'));
//        $this->client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
//        $this->client->setRedirectUri(route('oauth.google.callback'));
//        $this->client->addScope("https://www.googleapis.com/auth/urlshortener");
    }

    /**
     * login to google
     * @return mixed
     */
    public function login()
    {
        $google = OAuth::consumer('Google',route('oauth/google/callback'));
        return \Redirect::to($google->getAuthorizationUri());
    }

    /**
     * logout to google
     * @return mixed
     */
    public function logout()
    {
        // TODO: Implement logoutWithGoogle() method.
    }

    /**
     * return to callback
     * @param $code
     * @return mixed
     */
    public function callback($code)
    {
        if (strlen($code) == 0) {
            return \Redirect::route('sign-up')->with('message', 'There was an error communicating with Facebook');
        }



    }


}