Instalação do Laravel 8 com JWT

Pré-requisitos
Antes de começar, verifique se o seu ambiente atende aos seguintes requisitos:

PHP >= 7.4
Composer (https://getcomposer.org)

Passo 1: Clonar o repositório do GitHub
Abra um terminal e navegue até o diretório onde deseja clonar o repositório.

Execute o seguinte comando para clonar o repositório do GitHub:
git clone https://github.com/seu-usuario/seu-repositorio.git

Certifique-se de substituir seu-usuario e seu-repositorio pelo seu nome de usuário e nome do repositório.

Passo 2: Configurar o JWT
Navegue até o diretório do projeto clonado:
cd seu-repositorio

Execute o seguinte comando para instalar as dependências do projeto Laravel:
composer install

Copie o arquivo .env.example e renomeie-o para .env:
cp .env.example .env

Abra o arquivo .env e configure corretamente as informações de conexão com o banco de dados.

Execute o seguinte comando para gerar a chave do aplicativo Laravel:
php artisan key:generate

Execute o seguinte comando para configurar as tabelas do banco de dados:
php artisan migrate

Execute o seguinte comando para gerar a chave secreta usada para assinar os tokens JWT:
php artisan jwt:secret

Passo 3: Testando a autenticação JWT
Agora você pode testar a autenticação JWT da API Laravel clonada do GitHub.

Conclusão
Pronto! Agora você concluiu a instalação e configuração do projeto Laravel 8 API clonado do GitHub com suporte para autenticação JWT.