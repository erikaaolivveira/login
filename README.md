# login
- Sistema de Login em PHP e Javascript 

---

# aula09 22/10/2019
- Altenticação do usuário completa
- Permissão de navegação atraves da SESSAO
- Lmebra senha e usuario com COOKIES

# aula08 21/10/2019
- Autenticação do usuário e permissão de acaso ao perfil php

# aula07 18/10/2019 
- Início da autenticação e entrada no sistema


# aula06 15/10/2019
- Persistencia de dados no banco de dados



# aula05 04/10/2019
- Envio de dados do Front-end para o Back-end, 
- métodos GET e POST



# aula04 01/10/2019
- Validação com HTML5
- Validação dos campos com jQuery


# aula03 30/09/2019
- Formulário de cadastro de novos usuários
- Validação dos campos com jQuery validate
- ~Ocultar e mostrar os formulários com jQuery.
  jQuery é uma biblioteca de funções javascript.                                                                                                                                                            
# aula02 24/09/2019
layout boostrap para os formulários
- formulario de login
- formulario de recuperação de senha
- formulário de  cadastro e novos usuários


# aula01 23/09/2019
Aula inicial, configuração do projeto github.
E criação do passo a passo.

# Passo a passo em todo inicio de aula

## Habilitar o Proxy
Tecla Windows - Abrir a janela Prompt de Comando
Copie e cole a linha abaixo - selecione e pressione as teclas Ctrl C

git config --global http.proxy http://10.1.21.254:3128

Pressione Enter 

 ## Clonar o repositório **login** na pasta **c:\xampp\htdocs**
 
- Tecla windows - abrir o github desktop
- Clique em *sing in to github.com*
- Digite seu login e senha no github
- Selecione o repositório **login** e logo abaixo clique no bot~]ao azul *clone...*
- Slique no botão *Choose* e encontre no disco local htdocs
- Selecione a pasta e confira se o *local path* foi *c:\xampp\htdocs\login*
- Clique no botão clone

## Habilitar o servidor web **apache** e o servidor **MySQL**
- Tecla windows - abrir o XAMPP control panel
- Clique em start Apache
- Clique em start para o MySQL
- Verifique se apareceu a porta 80 Apache e 3306 MySQL
- Verifique se ficou verde o Apache e MySQL

## Testar se está funcionando
- Abra o navegador Firefox Azul e digite http://localhost/login

## Editar utilizando o VS Code
- Tecla Windows - Abrir o Visual Studio Code (azul)
- *Abrir pasta* no Vs Code a pasta c:\xampp\htdocs\login

# Importar o banco de dados 
- Acessar no navegador http://localhost/phpmyadmin
- Clicar em importar
- Selecionar o arquivo, clicando em Browse ou escolha o arquivo
- Abra o arquivo 127.0.0.1.sql e clique em executar
- O banco de dados deve ser importado corretamente 