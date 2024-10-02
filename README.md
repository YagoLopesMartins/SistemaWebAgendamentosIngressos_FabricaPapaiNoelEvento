# Gerenciador de reservas/ingressos para eventos culturais

## Overview

- Parecido com a reserva de poltrona em salas de cinema só que para vagas em eventos culturais
- O Administrador do sistema define:
  - Datas, horários e quantidade de vagas dos eventos
  - Acessa a lista dos inscritos por horário 
  - Imprime a lista de inscritos
- O usuário: 
  - Acessa o formulário do evento
  - Informa seus dados válidos
  - Se tiver dependentes pode adicionar até 2 pessoas por pessoa
  - Escolhe um horário disponivel
  - Recebe seu "ingresso" com seu agendamento 
- O sistema:
  - Processa o formulário de inscrição
  - Valida os dados informados (email ou usuário já cadastrado par ao horário)
  - Se tudo certo, gera um acesso com  QR-Code
  - Organiza os incritos por horário em lista para o Admin acessar e imprimir a relação do dia
  - Gerar PDF com lista de inscritos

## Tecnologias
  - PHP >= 7.1
  - Laravel
  - MySQL
  - QR-Code
  - Gerador PDF
  - Template Admin LTE
  - Semantic CSS
  - Javascript com JQuery
  - Docker / docker-compose

## Configuração do projeto

### Instalação
  
1. Clone ou faça o download do repositório
    ```
    $ git clone https://github.com/YagoLopesMartins/SEC_FabricaPapaiNoelSistemaWebAgendamentos.git
        cd SEC_FabricaPapaiNoelSistemaWebAgendamentos
    ```
2. Renomeie o arquivo .env.example para .env
  
    2.1 Informe o banco de dados
    ```
    DB_CONNECTION=mysql
    DB_HOST=mysql_db
    DB_PORT=3306
    DB_DATABASE=laravel_docker_sec1
    DB_USERNAME=root
    DB_PASSWORD=root
    ```
3. Inicie o Docker em sua máquina
4. Execute o comando
    ```
    $ docker-compose up -d --build
    ```
5. Acesse a aplicação em: http://localhost:9000/listagem/
6. Acesse o banco de dados em: http://localhost:9001/

    6.1 Informe o nome do Servidor: **mysql_db**

## Contribuição

Sinta-se à vontade para contribuir para este projeto enviando pull requests ou relatando problemas para o e-mail: **ylm@icomp.ufam.edu.br**.


