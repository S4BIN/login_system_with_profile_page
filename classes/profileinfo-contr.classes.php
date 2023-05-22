<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;

    public function __constract($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

}