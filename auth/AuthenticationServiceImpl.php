<?php

namespace auth;


use session\auth\ClientBO;
use session\auth\ClientFlare;
use session\auth\User;
use session\auth\UserBO;
use session\auth\UserClientContext;
use session\auth\UserFlare;
use UserSession;


class AuthenticationServiceImpl implements AuthenticationService
{


    function authenticateClient($traineeId, $password): ?UserSession
    {

        assert($traineeId != null);
        assert($password != null);

        /**
         *
         * 1 Authenticate user from BO
         */
        $BOAuthenticatedUser = $this->authenticateFromBO($traineeId, $password);

        if ($BOAuthenticatedUser == null) {
            return null;
        }


        /**
         *
         * 2 Request token from flare api
         */
        $FLAREAuthenticatedUser = $this->authenticateFromFlare($BOAuthenticatedUser);


        if ($FLAREAuthenticatedUser == null) {
            return null;
        }


        /**
         *
         * 3 Store user session
         */


        if (isset($authResult->access_token)) {
            $userSession = new UserSession();
            $userSession->setFlareUser($FLAREAuthenticatedUser);
            $userSession->setBOUser($BOAuthenticatedUser);
            $this->storeSession($userSession);
            return $userSession;
        }


        return null;
    }

    /**
     *
     *
     *
     *
     *
     * @param $traineeId
     * @param $password
     * @return User
     *
     *
     *
     *
     *
     */
    private function authenticateFromBO($traineeId, $password): User
    {

        $client = new UserClientContext(new ClientBO($traineeId, $password));
        return $client->authenticate();
    }


    /**
     *
     *
     *
     *
     *
     * @param UserBO $user type of UserBO
     * @return User|null type of UserFlare
     *
     *
     *
     *
     */
    private function authenticateFromFlare(UserBO $user): ?UserFlare
    {

        assert($user != null);

        $client = new UserClientContext(new ClientFlare($user));
        return $client->authenticate();
    }


    /**
     *
     *
     *
     *
     *
     *
     * @param $auth
     *
     *
     *
     *
     *
     */

    function storeSession(UserSession $auth)
    {
        assert($auth != null);
        $_SESSION["USER"] = serialize($auth);
        session_commit();

    }

    function getSession(): ?UserSession
    {
        if ($this->sessionExists()) {
            $session = $_SESSION["USER"];
            return unserialize($session);
        }
        return null;
    }


    private function sessionExists(): bool
    {
        return !empty($_SESSION) && isset($_SESSION['USER']);
    }

    function logout(): bool
    {
        return session_destroy();
    }
}