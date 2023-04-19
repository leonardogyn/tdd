#Utilizando o Composer no Windows

##Instalando

Para instalar o composer no Windows � preciso ter o Openssl instalado e habilitado no seu **php.ini**.

###Habilitando openssl no php.ini

```ini
; Como est� inicialmente
;extension=php_openssl.dll

; Como deve ficar
extension=php_openssl.dll
```

###Baixando o Composer

```shell
curl -sS https://getcomposer.org/installer | php

// Ou

php -r "readfile('https://getcomposer.org/installer');" | php
```

###Verificando a instala��o

```shell
php composer.phar
```

##Instalando as depend�ncias

```shell
php composer.phar install
```


##Rodando os testes

```shell
vendor\bin\phpunit.bat tests
```
