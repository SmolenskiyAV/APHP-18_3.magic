<?php

namespace Objects\Traits;

trait TMobileUserAuth
{
    private string $tMobLogin = 'mobileLogin';
    private string $tMobPassword = 'mobilePassword';

// гетер
    public function getMobileLogin(): string
    {
        return $this -> tMobLogin;
    }

    // гетер
    public function getMobilePassword(): string
    {
        return $this -> tMobPassword;
    }

}