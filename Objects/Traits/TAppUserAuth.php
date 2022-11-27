<?php

namespace Objects\Traits;

trait TAppUserAuth
{
    private string $tAppLogin = 'appLogin';
    private string $tAppPassword = 'appPassword';

    // гетер
    public function getAppLogin(): string
    {
        return $this -> tAppLogin;
    }

    // гетер
    public function getAppPassword(): string
    {
        return $this -> tAppPassword;
    }

}