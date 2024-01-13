# App Help Desk

## Descrição do Projeto

O **App Help Desk** é um sistema web desenvolvido para gerenciar chamados de suporte técnico. Este projeto utiliza o framework Bootstrap para o front end, proporcionando um design responsivo e moderno. O back end é implementado em PHP e utiliza o servidor Apache. No contexto didático deste projeto, optou-se por utilizar autenticação em memória em vez de um banco de dados.

## Funcionalidades Principais

1. **Requisição Web e Comunicação com o Servidor:**
   - Implementação de lógicas para permitir uma comunicação eficiente entre o front end e o servidor.
   - Utilização de requisições assíncronas para aprimorar a experiência do usuário.

2. **Regras de Negócios e Autenticação de Usuário:**
   - Desenvolvimento de lógicas para aplicar regras de negócios relacionadas ao gerenciamento de chamados de suporte.
   - Sistema robusto de autenticação de usuários para garantir acesso seguro às funcionalidades.

3. **Validação de Login e Controle de Sessão:**
   - Implementação de lógicas para validar informações de login, garantindo autenticidade e segurança.
   - Controle de sessão para gerenciar o estado do usuário durante a interação com a aplicação.

4. **Navegação entre Páginas:**
   - Desenvolvimento de uma navegação fluida entre as diferentes páginas do sistema.
   - Utilização de URLs amigáveis para melhorar a experiência de navegação.

5. **Encerramento de Sessão:**
   - Implementação de mecanismos seguros para encerrar sessões de usuários, garantindo a proteção das informações pessoais.

6. **Registros e Consulta de Chamados:**
   - Sistema de registro de chamados para documentar e acompanhar as solicitações de suporte técnico.
   - Funcionalidade de consulta de chamados para facilitar a visualização e gerenciamento das ocorrências.

7. **Controle de Perfis de Usuários:**
   - Aplicação de um sistema de controle de perfis para gerenciar diferentes níveis de acesso.
   - Definição de permissões específicas para cada tipo de usuário, mantendo a segurança e a integridade do sistema.

8. **Segurança no Back End da Aplicação Web:**
   - Implementação de práticas de segurança no back end para proteger contra ameaças.
   - Utilização de boas práticas de desenvolvimento seguro para garantir a robustez do sistema.

## Tecnologias Utilizadas

- **Front End:**
  - Bootstrap 

- **Back End:**
  - XAMPP:
    - PHP 
    - Servidor Apache 

## Como Executar o Projeto Localmente

1. **Requisitos:**
   - Instale o XAMPP em sua máquina.
   - Start o servidor Apache
   - Certifique-se de ter a versão correta do PHP instalada.

2. **Configuração do Ambiente:**
   - Coloque todos os arquivos do projeto na pasta do seu servidor web.

3. **Acesso à Aplicação:**
   - Acesse a aplicação pelo navegador utilizando a URL correspondente ao seu ambiente local.

## Importante: Configuração de Autenticação em Memória

- Para fins didáticos, a autenticação é feita em memória. As credenciais estão localizadas no arquivo `valida_login.php`.
