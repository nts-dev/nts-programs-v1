<?php

namespace session\auth;
interface UserNetwork
{
    const API_URL = "/nts-video-api/public/api/login";

    function getUser(UserBO $user);
}