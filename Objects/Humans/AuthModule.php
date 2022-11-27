<?php

namespace Objects\Humans;
use Objects\Traits as Trt;

class AuthModule    // класс, определяющий тип подключения
{
    use Trt\TMobileUserAuth; // подключаем трэйт
    use Trt\TAppUserAuth;  // подключаем трэйт

    private string $loginValue;
    private string $passwordValue;
    private string $type;

    public function __construct(string $login, string $password)
    {
        $this->loginValue = $login;
        $this->passwordValue = $password;
    }

    public function accessType(): string
    {

        if (($this->loginValue === $this->getMobileLogin()) && ($this->passwordValue === $this->getMobilePassword())) // используем трэйты
        {
            $this->type = 'Mobile_Access';  // мобильное подключение
        }

        if (($this->loginValue === $this->getAppLogin()) && ($this->passwordValue === $this->getAppPassword())) // используем трэйты
        {
            $this->type = 'App_Access'; // подключение из пользовательского приложения
        }

        return $this->type;
    }

}