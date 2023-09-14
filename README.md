<!-- criar readme com informações sobre o projeto e instruções de instalação -->
# Projeto de um Sistema de Vendas

## Descrição do Projeto
<p align="justify">
    O projeto consiste em um sistema de vendas, onde é possível cadastrar e vizualizar vendedores e vendas. Além disso, o sistema envia um e-mail através de um comando com o total de vendas realizadas no dia.
    O sistema foi desenvolvido utilizando a linguagem de programação PHP com o framework Laravel e o banco de dados MySQL.
</p>

## Funcionalidades
- [x] Cadastro de vendedores
- [x] Cadastro de vendas
- [x] Relatório de vendas
- [x] Visualização de vendedores
- [x] Visualização de vendas
- [x] Visualização de vendas por vendedor

## Pré-requisitos
- [x] PHP ^7.3|^8.0
- [x] Composer ^1.0
- [x] MySQL ^5.7

## Instalação
1. Clone o repositório
```bash
git clone https://github.com/brunavitoria/sistema-de-vendas.git
```
2. Instale as dependências
```bash
composer install
```
3. Crie um arquivo .env
```bash
cp .env.example .env
```
4. Gere uma nova chave para a aplicação
```bash
php artisan key:generate
```
5. Configure o banco de dados no arquivo .env
```bash
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
6. Execute as migrations
```bash
php artisan migrate
```
7. Execute o npm
```bash
npm install && npm run dev
```
8. Execute o servidor
```bash
php artisan serve
```
9. Acesse o sistema no navegador
```bash
http://localhost:8000
```
## Rotas da API
- [x] GET /api/vendedores (retorna todos os vendedores cadastrados)
- [x] POST /api/vendedor (cadastra um novo vendedor)
- [x] GET /api/vendas/{id} (retorna todas as vendas de um vendedor)
- [x] POST /api/venda (cadastra uma nova venda)

## Rotas do sistema
- [x] /dashboard (retorna a página inicial do sistema)
- [x] /vendedores (retorna a página de vendedores com a lista de vendedores cadastrados)
- [x] /vendedores/novo (retorna a página de cadastro de vendedores)
- [x] /vendas (retorna a página de vendas com a lista de vendas cadastradas, com opção de filtrar por vendedor)
- [x] /vendas/novo (retorna a página de cadastro de vendas)
