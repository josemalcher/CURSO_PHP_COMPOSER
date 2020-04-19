# CURSO PHP COMPOSER

https://academy.especializati.com.br/curso/php-composer

APRENDA A TRABALHAR COM O GERENCIADO DE DEPENDÊNCIAS DO PHP, PARA BAIXAR PACOTES DE TERCEIROS E FAZER O AUTOLOAD DE ARQUIVOS E CLASSES EM SEU SISTEMA. APRENDA AS BOAS PRÁTICAS!

## <a name="indice">Índice</a>

1. [01 - Iniciando com o Composer](#parte1)     
2. [02 - Composer Autoload PSR-4](#parte2)     
3. [03 - Autoload Composer files e classmap](#parte3)     
4. [04 - Composer require e require-dev](#parte4)     
5. [05 - Composer Versões de Pacotes](#parte5)     
6. [06 - Utilizando um Pacote (DOMPDF)](#parte6)     
7. [07 - Considerações Finais Sobre o Composer](#parte7)     
---


## <a name="parte1">1 - 01 - Iniciando com o Composer </a>

- https://getcomposer.org/

```
composer init
```

```json
{
    "name": "eti/curso-php-composer",
    "description": "Curso de PHP Composer",
    "authors": [
        {
            "name": "josemalcher",
            "email": "contato@josemalcher.net"
        }
    ],
    "require": {}
}

```


```
composer install
```

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - 02 - Composer Autoload PSR-4</a>

```json
{
    "name": "eti/curso-php-composer",
    "description": "Curso de PHP Composer",
    "authors": [
        {
            "name": "josemalcher",
            "email": "contato@josemalcher.net"
        }
    ],
    "require": {},
    "autoload": {
        "psr-4": {
            "ETI\\":"src/eti/",
            "APP\\": "app/"
        }
    }
}

```

```
    composer dump-autoload
```

```php
<?php

require '../vendor/autoload.php';

use APP\Controllers\HomeController;

$query = new \ETI\DB\Query;
var_dump($query->query());

//$controller = new \APP\Controllers\HomeController;
$controller = new HomeController; // com uso de "use"
var_dump($controller->index());

```

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - 03 - Autoload Composer files e classmap</a>

- app/Helppers/function.php 
- classUtils/ClassUtils.php

```json
{
    "name": "eti/curso-php-composer",
    "description": "Curso de PHP Composer",
    "authors": [
        {
            "name": "josemalcher",
            "email": "contato@josemalcher.net"
        }
    ],
    "require": {},
    "autoload": {
        "files": [
            "app/Helppers/function.php"
        ],
        "classmap": [
            "classUtils/ClassUtils.php",
            "Configs/"
        ],
        "psr-4": {
            "ETI\\":"src/eti/",
            "APP\\": "app/"
        }
    }
}


```

```
    composer dump-autoload
```

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - 04 - Composer require e require-dev</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - 05 - Composer Versões de Pacotes</a>



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - 06 - Utilizando um Pacote (DOMPDF)</a>



[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - 07 - Considerações Finais Sobre o Composer</a>



[Voltar ao Índice](#indice)

---

