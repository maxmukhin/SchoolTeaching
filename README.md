SchoolTeaching
==============

Teaching in the high school

Здесь и далее по умолчанию рассматривается работа в системе Windows (в Linux-системах обратитесь к соответствующей документации).

1) Скачать и установить приложение Git for Windows:

[MSysgit for Windows](https://github.com/downloads/msysgit/git/Git-1.7.11-preview20120710.exe)

2) Скачать и установить сборку XAMPP:

[скачать XAMPP](http://www.apachefriends.org/download.php?xampp-win32-1.8.1-VC9-installer.exe)

PS. по умолчанию xampp установится в каталог C:\xampp
при этом в каталоге C:\xampp\htdocs - будут находиться ваши документы, то есть все ваши web-проекты.

3) В командной строке MSysgit-а:

 3.1) перейти в каталог где будут находиться ваши web-проекты (C:\xampp\htdocs), команда

cd C:\xampp\htdocs

 3.2) выполнить команду:

git clone git://github.com/maxmukhin/SchoolTeaching.git

 3.3) перейти по адресу:
[http://localhost/SchoolTeaching/](http://localhost/SchoolTeaching/)


 3.4) для обновления информации о SchoolTeaching повторите шаг 3.1 и после выполните команду:

git pull
