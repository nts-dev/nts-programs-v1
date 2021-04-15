<?php

namespace session\auth\client;


use PHPUnit\Exception;
use session\auth\UserBO;
use session\auth\UserDao;
use session\auth\UserDaoImp;


class ClientBO implements UserClient
{

    private string $password;
    private string $traineeId;
    private UserDao $dao;
    private User $user;

    public function __construct($traineeId, $password)
    {
        assert($traineeId != null);
        assert($password != null);

        $this->password = $password;
        $this->traineeId = $traineeId;
        $this->dao = new UserDaoImp();
        $this->user = new UserBO();
    }

    function authenticate(): ?UserBO
    {
        try {
            $row =  $this->dao->getUser($this->traineeId, $this->password);
            $this->user->setEmail($row['email']);
            $this->user->setFirstName($row['firstName']);
            $this->user->setLastName($row['lastName']);
            $this->user->setPassword($password);
            $this->user->setTraineeId($traineeId);
            $this->user->setAttendent($row['contact_attendent']);

            return $this->user;

        } catch (Exception $e) {

        }
        return null;
    }
}