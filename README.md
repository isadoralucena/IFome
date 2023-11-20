# IFome
Sistema voltado para a cantina de serviço particular localizada no campus Caicó do IFRN. O objetivo é funcionar como um "menu online" para estudantes e servidores do instituto, disponibilizando previamente todas os alimentos e bebidas acessíveis no ambiente. Isso permite que os clientes tenham um pré-atendimento através de uma reserva, garantindo maior agilidade na recepção presencial e reduzindo filas e aglomerações.

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

