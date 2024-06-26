# Biblioteca Laravel

Este projeto incorpora uma biblioteca para gerenciamento de livros, incluindo funcionalidades para manipulação de categorias, livros e interações do usuário, como empréstimo de livros (instâncias de livros).

É desenvolvido com as seguintes stack:

* PHP (7.4) + Laravel (8)
* Livewire: full-stack framework for Laravel
* HTML (Blade Templates) + CSS (TailwindCSS Framework)

## Intalação

Clona o repository

    git clone https://github.com/vitorprieto/biblioteca.git

Instale todas as dependências usando o compositor

    composer install
	
Se acontecer erro ao instalar faz o update do composer do projeto

	composer update

No arquivo ".env" and adiciona os parâmetros do seu database.
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<database>
    DB_USERNAME=<username>
    DB_PASSWORD=<password>

Execute as migrações de banco de dados.

    php artisan migrate

Execute o semeador de banco de dados, isso criará 10 usuários, 10 categorias, 30 livros e 50 instâncias de livro.

    php artisan db:seed

Inicie os servidores de desenvolvimento local.

    php artisan serve
	
## Teste Unitário

Inicie o teste unitário para verificação da qualidade de cobertura do código.

	php artisan test

## Uso

Faça login ou crie um novo usuário

    http://127.0.0.1:8000/dashboard
    http://127.0.0.1:8000/register
    http://127.0.0.1:8000/login
    
Você pode acessar as seguintes rotas de recursos

    http://127.0.0.1:8000/categories
    http://127.0.0.1:8000/books
    http://127.0.0.1:8000/bookinstances

Crie um novo livro

    http://127.0.0.1:8000/books/create

Obtenha um livro e suas instâncias de livro

    http://127.0.0.1:8000/books/{id}

Editar um livro
 
    http://127.0.0.1:8000/books/{id}/edit

Todos os recursos funcionam de forma semelhante, você pode tentar usar categorias, por exemplo.

Desta forma você obtém a categoria solicitada e todos os livros dessa categoria.

    http://127.0.0.1:8000/categories/{id}/
    http://127.0.0.1:8000/categories/{id}/edit

## Descrição

Decidi usar as seguintes dependências:

* [Jetstream](https://jetstream.laravel.com/2.x/introduction.html) É um kit inicial de aplicativos lindamente projetado para Laravel.
* [Livewire](https://laravel-livewire.com/) É um framework full-stack para Laravel que simplifica a construção de interfaces dinâmicas, sem sair do conforto do Laravel.

Você pode ver todas as dependências no arquivo "composer.json".

## Observação

Ao revisar o código, você notará designs de tabelas distintos sendo empregados. Esta escolha deliberada deve ser levada em consideração ao executar o aplicativo.

