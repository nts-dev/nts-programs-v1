<?php


namespace session\auth\client;


class UserClientContext
{
    private UserClient $client;
    public function __construct(UserClient $client)
    {
        assert($client != null);
        $this->client = $client;
    }


    public function authenticate() : ? User{
       return $this->client->authenticate();
    }

}