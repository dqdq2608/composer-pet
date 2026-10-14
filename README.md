# Installation Guide

- In consuming project

```

"require-dev": {
"quan/composer-pet": "dev-master"
},
"repositories": [
{
"name": "composer-pet",
"type": "vcs",
"url": "git@github.com:dqdq2608/composer-pet.git"
}
]

composer require quan/composer-pet:dev-master
composer dump-autoload

```
