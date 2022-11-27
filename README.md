# Домашнее задание к занятию «3. Трейты, перегрузка, магия»

# Задание 3.1. Знакомство с документацией

В этом домашнем задании будет действительно много статей, но многие из них повторяют или чуть расширяют понятия, которые
мы изучили на лекции.

Все статьи из официальной документации PHP:
* [трейты (примеси)](https://www.php.net/manual/ru/language.oop5.traits.php),
* [магические методы](https://www.php.net/manual/ru/language.oop5.magic.php),
* [перегрузка методов и свойств](https://www.php.net/manual/ru/language.oop5.overloading.php),
* [позднее статическое связывание](https://www.php.net/manual/ru/language.oop5.late-static-bindings.php),
* [сериализация объектов](https://www.php.net/manual/ru/language.oop5.serialization.php),
* [ковариантность и Контравариантность](https://www.php.net/manual/ru/language.oop5.variance.php),
* [стандартные интерфейсы](https://www.php.net/manual/ru/spl.interfaces.php).

Приятная и полезная статья про итераторы с примерами: [Итерирование объектов в PHP](https://true-coder.ru/php/iterirovanie-obektov-v-php-vstroennye-klassy-iteratory-obekt-kak-massiv.html).

В задании не надо ничего отправлять на проверку, но ознакомление с этой документацией поможет в дальнейшей работе с PHP.

# Задание 3.2. Трейты

## Техническое задание
Создайте два разные по смыслу трейта, которые будут реализовывать разные методы с одинаковым названием.
Например, представим, что у нас есть пользователь, которого надо авторизовывать во многих местах, поэтому
мы выделили два трейта для работы с этой задачей:

* трейт AppUserAuthentication,
* трейт MobileUserAuthentication.

И в каждом из них есть метод authenticate(), который позволяет взять входные данные, например, логин и пароль, и
проверить их на соответствие существующим. Для простоты пока что определим их как свойства в соответствующих трейтах.

Итого:
* у нас есть некоторые данные от пользователя: логин и пароль;
* нам нужна функция, которая будет печатать, как у нас авторизовывается пользователь;

Авторизоваться он может:
* как «пользователь приложения», если его логин и пароль совпадут с приватными значениями свойств в трейте AppUserAuthentication;
* как «пользователь мобильного приложения» — соответственно, данные должны быть такими же, как в MobileUserAuthentication.

Задача:
* реализовать трейты и проверки в них,
* реальзовать подключение трейтов,
* реализовать проверку, данные для какого именно пользователя были переданы извне.

**Обратите внимание на** [**рекомендации по сдаче домашнего задания**](../homework.md). 

# Задание 3.3. Итераторы, магия

## Техническое задание

Необходимо создать класс Person со свойствами и методами. Можно взять из предыдущих заданий.
Далее необходимо:
* провести работу с объектами класса Person и их сериализацией, то есть:
    * добавить работу с магическими методами __get(), __set(), __sleep() и __wakeup();
    * создать объект
    * сериализовать его
    * вывести в строку
    * поменять в строке какое-нибудь значение, например, логин, с помощью str_replace. Для интереса можно проверить, как оно будет
      работать со строкой такого же размера и со строкой другого размера;
    * десериализовать объект и вывести его свойства;

* создать дополнительный класс, который будет представлять собой список людей — PeopleList;
* реализовать этот класс как итерируемый, чтобы выводить объекты Person
  приходилось не через явное обращение, а через foreach, для этого прикручиваем работу с интерфейсом Iterator. Подсказка:
  чтобы удобнее выводить Person через echo, можно добавить тому работу с методом __toString().


**Обратите внимание на** [**рекомендации по сдаче домашнего задания**](../homework.md). 
