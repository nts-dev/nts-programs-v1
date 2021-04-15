<?php

namespace session\auth\client;



use session\auth\UserBO;
use session\auth\UserFlare;

class ClientFlare implements UserClient
{

    private UserBO $user;
    private \UserNetwork $network;

    public function __construct(UserBO $user)
    {
        assert($user != null);

        $this->network = new \UserNetworkImp();
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
        }catch (Exeption $e){

        }


        return null;
    }
}