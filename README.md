# 🚀 Sistema de Login e Cadastro (CRUD) - PHP & MySQL

Este repositório contém um sistema completo de gerenciamento de usuários desenvolvido para fins de aprendizado e prática de operações **CRUD** (Create, Read, Update, Delete) utilizando PHP e MySQL.

## 📸 Capturas de Tela

### 🏠 Home
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/d09b5027-387b-4c9a-ad0c-9f86c7110c3d" />

### 🔐 Login
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/41f1ad85-0ccd-4dc4-8761-e6fc6f80d14d" />

### 📝 Cadastro
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/c5fd3c6c-b7ff-4518-99f4-4e5a6886de7a" />

### 📊 Painel do Sistema (Listagem e Busca)
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/9ef411a8-b772-4c95-b18e-2b8585e5e078" />

### ✏️ Edição de Usuário
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/51f1eb06-b312-4a1c-9a12-1f1752e0636c" />

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP.
* **Banco de Dados:** MySQL (via extensão mysqli).
* **Front-end:** HTML5 e CSS3.
* **Ícones:** Bootstrap Icons (via SVG).

## 📋 Funcionalidades

* **Página Inicial:** Porta de entrada com navegação para login e cadastro.
* **Autenticação:** Sistema de login que valida e-mail e senha, iniciando uma sessão segura (`session_start`).
* **Cadastro:** Formulário completo para registro de novos usuários.
* **Painel Administrativo:** Tabela que lista todos os registros de forma decrescente.
* **Sistema de Busca:** Filtro dinâmico que permite pesquisar usuários por ID, Nome ou E-mail.
* **Edição Completa:** Interface para atualizar todos os dados de um usuário existente.
* **Exclusão Segura:** Função para remover usuários do banco de dados através do ID.
* **Controle de Sessão:** Proteção de rotas que redireciona usuários não autenticados para a página de login.

## 📁 Estrutura de Arquivos Principal

* `config.php`: Define as credenciais de conexão com o banco de dados.
* `home.php`: Página de boas-vindas do sistema.
* `login.php` / `teste-login.php`: Interface e lógica de autenticação.
* `cadastro.php`: Processa a inserção de novos dados.
* `sistema.php`: Dashboard com a lista de usuários e campo de pesquisa.
* `editar.php` / `salvar.php`: Gerenciam a modificação de registros existentes.
* `deletar.php`: Executa a remoção de registros.
* `sair.php`: Encerra a sessão do usuário.

## 🚀 Como Instalar e Rodar

1. **Clone o repositório:**
```bash
git clone https://github.com/felipekauan1/sistema-de-login.git

```


2. **Configure o Banco de Dados:**
* Crie um banco de dados chamado `formulario-felipe`.
* Importe o arquivo `database.sql` (ou execute o código SQL de criação da tabela `usuarios`).


3. **Ajuste a Conexão:**
* Se necessário, altere o usuário e senha no arquivo `config.php`.


4. **Inicie o Servidor:**
* Mova a pasta para o diretório do seu servidor local (ex: `htdocs` no XAMPP).
* Acesse `http://localhost/sistema-de-login/home.php`.