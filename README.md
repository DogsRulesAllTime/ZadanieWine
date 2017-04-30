# ZadanieWine

Выводит 2ух юзеров, можно так же  добавить всех , но даже на 2ух видно что ЗП меняется.



файл htaccess не добавился

AddDefaultCharset utf-8

RewriteEngine on
RewriteBase /

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d


RewriteRule ^(.*)$ index.php

