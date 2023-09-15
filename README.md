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

## Instalação utilizando o sail
1. Clone o repositório
```bash
git clone https://github.com/brunavitoria/sistema-de-vendas.git
```
2. Navegue até a pasta do projeto
```bash
cd sistema-de-vendas
```
3. Instale as dependências
```bash
composer install
```
4. Copie o arquivo .env.example para .env
```bash
cp .env.example .env
```
5. Execute o comando Sail de inicialização
```bash
./vendor/bin/sail install
```
6. Inicie os contêineres do Sail
```bash
./vendor/bin/sail up -d
```
7. Execute as migrations
```bash
./vendor/bin/sail artisan migrate
```
8. Execute o npm
```bash
./vendor/bin/sail npm install && ./vendor/bin/sail npm run dev
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
