## IGOT V2

Sistema IGOT em desenvolvimento

# Visão geral
Sistema foi contruido utilizando o framework Laravel v9.24.0 , PHP v8.1.6, ADMINLTE v3 e Bootstrap 4

# Requisitos
Composer

PHP 8.1.6

Laravel 9.24.0

# Instalação

## Clone este repositório
$ git clone https://github.com/baetaDev/igot.git

## Instale as dependências
$ composer install 

ou

$ composer install update

## Execute a aplicação em modo de desenvolvimento
Criar um banco de dados no phpmyadmin chamado igot2 ou renomear para o nome desejado no arquivo .env na raiz do projeto.

$ php artisan key:generate

$ php artisan migrate

Rodar os comandos abaixo em terminais diferentes:

$ php artisan serve

$ npm run dev 
