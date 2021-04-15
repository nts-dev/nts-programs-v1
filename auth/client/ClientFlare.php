<?php

namespace session\auth;

use PHPUnit\Exception;
use session\auth\UserFlare;

class ClientFlare implements UserClient
{

    private UserBO $user;
    private UserNetwork $network;
    private User $authenticatedUser;

    public function __construct(UserBO $user)
    {
        assert($user != null);

        $this->network = new UserNetworkImp();
        $this->authenticatedUser = new UserFlare();
        $this->user = $user;
    }

    function authenticate(): Response
    {

        $data = $this->network->getUser($this->user);
        $authResult = json_decode($data);

        try {
            if (isset($authResult->access_token)) {
                $this->authenticatedUser->setToken($authResult->access_token);
                $this->authenticatedUser->setTokenType($authResult->token_type);
                $this->authenticatedUser->setExpireAt($authResult->expires_at);

                return new Response(State::SUCCESS, $this->authenticatedUser);
            }
        } catch (Exception $e) {
            return new Response(State::FAIL, $this->user, $e->getMessage());
        }
    }
}