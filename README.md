# Minhas Redes
Sistema para o usuário gerir de forma simples uma página de listagem de redes sociais para sites similar ao LinkTree

## Instalação

Para instalar as dependencias do projeto

```
composer install
```

Preencha o UserSeeder corretamente para realizar login
```
User::create([
    'name' => 'Your name',
    'email' => 'your.email@domain.com',
    'password' => 'yourpassword',
]);
```

Preencha o SettingSeeder informando os seus dados públicos
```
Setting::create([
    'name' => 'Your name or name of your company',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna orci, convallis non malesuada eget, finibus quis quam. Suspendisse metus justo, pulvinar eget tincidunt at, bibendum sit amet elit. Aliquam tincidunt luctus venenatis.',
]);
```

Após preencher as seeders corretamente, verifique o seu .env se a conexão do banco de dados está correta, se sim, rode o comando:

```
php artisan migrate --seed
```

Em seguida, rode o comando de storage para poder existir as imagens sem problema

```
php artisan storage:link
```

## Rotas

Rotas utilizaveis na versão 1.0.
Existem outras rotas no sistema, mas não estão sendo utilizadas no momento
;-)

| Method | URI | Action | Descrição |
| ------ | ------ | ------ | ------ |
| GET | / | App\Http\Controllers\WebController@index | Retorna a página de listagem das redes sociais |
| GET | /login | App\Http\Controllers\WebController@login | Retorna a página de login |
| POST | /login | App\Http\Controllers\WebController@authenticate | Realiza a autenticação do usuário |
| GET | /admin | App\Http\Controllers\WebController@dashboard | Retorna a página do dashboard para edição dos dados |

## Licença

MIT

**Free Software, Hell Yeah!**
