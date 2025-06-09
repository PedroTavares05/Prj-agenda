# Projeto Agenda de Contatos

Este projeto é uma aplicação web simples para gerenciar uma agenda de contatos e usuários. Ele foi desenvolvido em PHP e utiliza um banco de dados MySQL para armazenar os dados.

## Funcionalidades

- **Gerenciamento de Contatos**:
  - Listar contatos.
  - Adicionar novos contatos.
  - Editar contatos existentes.
  - Excluir contatos.

- **Gerenciamento de Usuários**:
  - Listar usuários cadastrados.

## Estrutura do Projeto

- **index.php**: Página principal que exibe a lista de contatos.
- **indexUsuario.php**: Página para listar os usuários cadastrados.
- **config/processo.php**: Arquivo responsável por processar as consultas ao banco de dados.
- **config/conexao.php**: Arquivo para configurar a conexão com o banco de dados.
- **sql_bdagenda.sql**: Script SQL para criar o banco de dados e as tabelas necessárias.

## Configuração

1. Clone este repositório:
   ```bash
   git clone https://github.com/PedroTavares05/Prj-agenda.git

Configure o banco de dados:

Importe o arquivo sql_bdagenda.sql no seu servidor MySQL para criar o banco de dados e as tabelas.
Configure a conexão com o banco de dados:

Edite o arquivo conexao.php com as credenciais do seu servidor MySQL.
Inicie o servidor local:

Use o XAMPP ou outro servidor local para executar o projeto.
Tecnologias Utilizadas
PHP
MySQL
HTML
CSS (será usado mais a frente)
Autor
Desenvolvido por Pedro Tavares.

Observação
Certifique-se de que o servidor local está configurado corretamente e que o banco de dados foi criado antes de executar o projeto.

