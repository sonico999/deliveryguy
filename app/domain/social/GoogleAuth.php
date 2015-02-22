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
    private $google;

    function __construct()
    {
    }


    /**
     * login to google
     * @return mixed
     */
    public function login()
    {
        return OAuth::consumer('Google', route('oauth.google.callback'),array('userinfo_email', 'userinfo_profile'));
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
        if (!empty($code)) {
            // This was a callback request from google, get the token
            $this->google->requestAccessToken($code);
            // Send a request with it
            $result = json_decode($this->google->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);
            dd($result);

            return $result;
        } else {
            return \Redirect::route('sign-up')->with('message', 'There was an error communicating with Google');
        }
    }


}