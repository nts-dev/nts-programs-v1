<?php

namespace session\auth;

use PHPUnit\Exception;

class ClientFlare implements UserClient
{

    private UserBO $user;
    private UserNetwork $network;

    public function __construct(UserBO $user)
    {
        assert($user != null);

        $this->network = new UserNetworkImp();
        $this->user = $user;
    }

    function authenticate(): ?UserFlare
    {

        $data = $this->network->getUser($this->user);
        $authResult = json_decode($data);

        try{
            if (isset($authResult->access_token)) {
                $authenticatedUser = new UserFlare();
                $authenticatedUser->setToken($authResult->access_token);
                $authenticatedUser->setTokenType($authResult->token_type);
                $authenticatedUser->setExpireAt($authResult->expires_at);

                return $authenticatedUser;
            }
        }catch (Exception $e){

        }


        return null;
    }
}