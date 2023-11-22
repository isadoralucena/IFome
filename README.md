# IFome
Sistema voltado para a cantina de serviço particular localizada no campus Caicó do IFRN. O objetivo é funcionar como um "menu online" para estudantes e servidores do instituto, disponibilizando previamente todas os alimentos e bebidas acessíveis no ambiente. Isso permite que os clientes tenham um pré-atendimento através de uma reserva, garantindo maior agilidade na recepção presencial e reduzindo filas e aglomerações.

# Instalação

Clone o repositório

    https://github.com/isadoralucena/IFome.git


Entre na pasta e instale as requisições

    composer install

Configure o banco de dados renomeando o arquivo .env.example para .env e coloque informações do seu servidor

    DB_CONNECTION=mysql
    DB_HOST= 
    DB_PORT=
    DB_DATABASE= 
    DB_USERNAME= 
    DB_PASSWORD= 

Rode migrações

    php artisan migrate

Rode a API com

    php artisan serve

Ela estará rodando na URL:

    localhost:8000

Mas é possível especificar uma porta personalizada para ela com:

    php artisan serve --port=

# Endpoints

## Alimentos

Método | Endpoint | Descrição
-------- | ---- | -----
GET | http://localhost:8000/api/alimentos | Retorna a lista de alimentos cadastrados
POST | http://localhost:8000/api/alimentos | Cadastra alimento
GET | http://localhost:8000/api/alimentos/{id} | Retorna um alimento cadastrado
PUT | http://localhost:8000/api/alimentos/{id} | Edita alimento
DELETE | http://localhost:8000/api/alimentos/{id} | Apaga alimento

## Bebidas

Método | Endpoint | Descrição
-------- | ---- | -----
GET | http://localhost:8000/api/bebidas | Retorna a lista de bebidas cadastradas
POST | http://localhost:8000/api/bebidas | Cadastra bebida
GET | http://localhost:8000/api/bebidas/{id} | Retorna uma bebida cadastrada
PUT | http://localhost:8000/api/bebidas/{id} | Edita bebida
DELETE | http://localhost:8000/api/bebidas/{id} | Apaga bebida

