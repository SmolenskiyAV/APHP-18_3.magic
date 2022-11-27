<?php

namespace Objects\Humans;

class Person
{
    /** Место хранения перегружаемых данных.*/
    private $data = array();

    public string $name;
    public string $surname;
    private string $login;
    private string $password;
    protected string $department = 'BlackWings';
    protected const COMPANY = 'Netology';

    public function __construct(string $name, string $surname, string $login, string $password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function __sleep()
    {
        echo 'Начинаем конвертировать объект в строку' . PHP_EOL;
        return ['login'];
    }

    public function __wakeup()
    {
        echo 'Начинаем конвертировать строку в объект' . PHP_EOL ;
    }

    public function __get($name)
    {
        echo "Получение '$name'\n";
        if (array_key_exists($name, $this->data)) {
        return $this->data[$name];
    }

        $trace = debug_backtrace();
        trigger_error(
            'Неопределённое свойство в __get(): ' . $name .
            ' в файле ' . $trace[0]['file'] .
            ' на строке ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __set($name, $value)
    {
        echo "Установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }

    public function __toString() // определяем формат вывода данных при обращении к объекту целиком
    {
        return $this->name . ' ' . $this->surname;
    }

}