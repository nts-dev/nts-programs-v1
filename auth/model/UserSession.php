<?php


class UserSession
{

    private $token;
    private $tokenType;
    private $expires;
    private $BOUser;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param mixed $tokenType
     */
    public function setTokenType($tokenType): void
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return mixed
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param mixed $expires
     */
    public function setExpires($expires): void
    {
        $this->expires = $expires;
    }

    /**
     * @return mixed
     */
    public function getBOUser()
    {
        return $this->BOUser;
    }

    /**
     * @param mixed $BOUser
     */
    public function setBOUser($BOUser)
    {
        $this->BOUser = $BOUser;
    }

}