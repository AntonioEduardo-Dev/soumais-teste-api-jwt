# Sou Mais Teste

Aplicação desenvolvida com o framework Laravel (versão 8).

## Pré-requisitos
Antes de começar, verifique se o seu ambiente atende aos seguintes requisitos:

## Requisitos
- PHP >= 7.4
- Composer

## Instalação

Para utilizar o projeto realize os seguintes passos:

## Passo 1: Clonar o repositório do GitHub
Abra um terminal e navegue até o diretório onde deseja clonar o repositório.

Execute o seguinte comando para clonar o repositório do GitHub:
```bash
git clone https://github.com/AntonioEduardo-Dev/soumais_teste.git
```


Certifique-se de substituir seu-usuario e seu-repositorio pelo seu nome de usuário e nome do repositório.

## Passo 2: Configurar o JWT
Navegue até o diretório do projeto clonado:

```bash
cd soumais_teste
```


Execute o seguinte comando para instalar as dependências do projeto Laravel:

```bash
composer install
```


Copie o arquivo .env.example e renomeie-o para .env:

```bash
cp .env.example .env
```


Agora, configure o arquivo .env com as informações do seu banco de dados e certifique-se de criar uma tabela no banco antes disso!

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_user_do_banco
DB_PASSWORD=sua_senha_do_banco
```


Execute o seguinte comando para gerar a chave do aplicativo Laravel:

```bash
php artisan key:generate
```


Execute o seguinte comando para configurar as tabelas do banco de dados:

```bash
php artisan migrate
```


Execute o seguinte comando para gerar a chave secreta usada para assinar os tokens JWT:

```bash
php artisan jwt:secret
```


## Passo 3: Testando a autenticação JWT
Agora você pode testar a autenticação JWT da API Laravel clonada do GitHub.

# Conclusão
Pronto! Agora você concluiu a instalação e configuração do projeto Laravel 8 API clonado do GitHub com suporte para autenticação JWT.
