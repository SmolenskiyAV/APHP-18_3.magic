<?php

declare(strict_types=1);

echo '### Task 2 ###' . PHP_EOL;
use Objects\Humans as Human;

$accessHit[] = new Human\AuthModule('mobileLogin', 'mobilePassword');   // имитация мобильного подключения
$accessHit[] = new Human\AuthModule('appLogin', 'appPassword');         // имитация подключения через приложение

foreach ( $accessHit as $element ) {

    echo 'Тип подключения - ' . ($element->accessType()) . PHP_EOL;
}

echo '#### END of Task 2 ###' . PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;


echo '### Task 3 ###' . PHP_EOL;

$user = new Human\Person('Ann', 'Berbok', 'user1' , '1234' );

$user->newMethod = 'abra-kadabra';
echo '__get-method demonstration: ' . $user->newMethod. PHP_EOL;
echo '-----------------------------------' . PHP_EOL;

$userAsString = serialize($user);
//$userAsString = iconv("UTF-8", "windows-1251", $userAsString);
echo 'initial string: ' .$userAsString . PHP_EOL ;

echo '===========================================================' . PHP_EOL;
$newUserAsString = str_replace('user1','user3', $userAsString);

echo 'new string: ' . $newUserAsString . PHP_EOL;
$newUser = unserialize($newUserAsString);
echo 'Новое значение Login: ' . $newUser ->getLogin() . PHP_EOL;
//echo $newUserAsString ->getPassword() . PHP_EOL;
//echo $newUserAsString ->getName() . PHP_EOL;
echo '===========================================================' . PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$test = new Human\PeopleList();
$test->set(1, new Human\Person('Bob', 'Marley', 'user4', ''));
$test->set(2, new Human\Person('Jackie', 'Chan', 'user5', ''));
$test->set(3, new Human\Person('Brandon', 'Fraser', 'user6', ''));
$test->set(4, new Human\Person('Aaron', 'Ekhart', 'user7', ''));

foreach ($test as $key => $val) {
    echo $key . '.' . $val;
    echo "\n";
}
echo '#### END of Task 3 ###' . PHP_EOL;
echo PHP_EOL;
echo 'Программа завершена' . PHP_EOL;
