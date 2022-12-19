<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Aplicação CRUD manutenção de veículos

O desafio consiste em construir uma pagina web onde os usuários possam fazer o cadastro/login, gerenciar seus veículos e as manutenções. Utilizar um layout próprio ou template gratuito responsivo.

### Telas


- Cadastro de usuário
- Login
- Home - Ao estar logado devem ser mostrado as manutenções previstas para os próximos 7 dias com dados do veículo. (Utilizar uma api para buscar essas informações)
- Criar CRUD para veículos para cada usuário logado.
- Criar um CRUD para manutenções para cada veículo, incluindo a marca o modelo e a versão.

### Banco de Dados:
- Definir as tabelas de acordo com o solicitado e utilizar migrate para criação das mesmas.

## Instalação

Necessário para instalar

- PHP 8.1
- composer
- node
  
No diretorio da aplicação:

```bash
composer install 
```

```bash
npm install
```

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

Os usuario para acesso são:


```
admin@natanfiuza.dev.br 
Senha: abc123

comum@natanfiuza.dev.br 
Senha: abc123

```
----
### Preview

Utilize o endereço:
[http://crud-manutencaoveiculo.natanfiuza.dev.br/](http://crud-manutencaoveiculo.natanfiuza.dev.br/)
