## Sobre o Projeto

Este projeto se trata de uma aplicação desafio, que faz o upload de um arquivo .txt, com informações sobre compras, e salva essas informações em um banco de dados POSTGRES. A aplicação está funcionando bem para arquivos que não tenham muitas linhas de registros, após isso, ocorreram problemas de timeout. Aumentei o tempo de timeout para um limite indefinido, mas desta forma, após algum tempo, ocorre problemas de memória e envolvendo o postgres.

De qualquer forma, é um projeto que serve de aprendizado, cumpre sua funcionalidade com limitação, e pode ser aperfeiçoado.

- [Simple, fast routing engine](https://laravel.com/docs/routing).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Setup

O projeto foi feito usando o framework de PHP Laravel, e como opção para banco de dados, o PostgreSQL.

Para criar a tabela utilizada para persistir os dados, é necessário executar o seguinte comando na pasta raiz do projeto:

> php artisan migrate

## Laravel Sponsors


### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**

## License

## Executando a aplicação

Para subir todo o projeto, entre no diretório raiz, e execute

> docker-compose up

Este comando irá inicializar nosso projeto. 

Após finalizado, execute:

> php artisan serve

Com isso, o servidor php estará de pé.

Para acessar a página inicial do projeto, nossa home, acesse 

> http://localhost:8000/dados

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
