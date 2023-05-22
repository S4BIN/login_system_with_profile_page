<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;

    public function __constract($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileAbout = "Some about random text for profile";
        $profileTitle = "Hi! I'm " . $this->userUid;
        $profileText = "Welcome to my profile page! Soon I'll be able to tell you more about myself.";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->$userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {

    }

    private function emptyInputCheck($about, $introTitle, $introText) {
        $result;
        if(empty($about) || empty($introTitle) || empty($introText)) {
            $result = false;
        }
    }

}