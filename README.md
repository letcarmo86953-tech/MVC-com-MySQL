# MVC com MySQL

## Integrantes
 
* Leticia do Patrocinio
* Mayara Almeida
* Natália dos Santos
 
---
 
### Descrição Geral
 
 O cinema surgiu durante o século XIX e rapidamente se tornou uma fonte de entreteinimento notória, sendo uma das indústrias culturais mais consumidas até os dias atuais. Em vista disso, o projeto 'MiauBoxd' oferece registro de filmes para que o utilizador, ao assistir à obras, avaliá-las e guardar em um espaço pessoal. O acolhimento às necessidades desta forma de lazer é o que torna imperativa construção da referente biblioteca de filmes.

---

### Instruções

#### Execução do Site

 A considerar as limitações do terminal do codespace de um repositório no GitHub, e às diferenciações de sistema (tratando-se de um ambiente Linux), o projeto pôde ser rodado apenas sob as condições de que o repositório fosse clonado no Prompt de Comando ou PowerShell. Para depuração do projeto com os comandos tradicionais (php -S 127.0.0.1:8000 e comandos git), foi realizada a instalação da aplicação Git - permitindo o uso dos comandos do GitHub, e do próprio PHP na versão 8.4. Entretanto, criando um caminho válido para o projeto (como zip, por exemplo) no diretório local, o MiauBoxd pode ser rodado pelo Visual Studio Code normalmente, contanto que as extensões do PHP estejam devidamente instaladas e habilitadas (mysqli e pdo_mysql).

#### Funcionalidades

 

---

### Código SQL

 Inicialmente, o banco foi desenvolvido contendo uma tabela com informações principais para avaliar um filme. A exentricidade maior foi incrementação de capa como campo que salva a uri da foto, seja ela local ou da internet (de preferência).

CREATE DATABASE IF NOT EXISTS biblioteca_filmes;

USE biblioteca_filmes;

CREATE TABLE filmes (\
    id INT(11) AUTO_INCREMENT PRIMARY KEY,\
    titulo VARCHAR(255),\
    diretor VARCHAR(255),\
    ano INT(11),\
    genero VARCHAR(100),\
    capa VARCHAR(255),\
    comentario VARCHAR(455)\
);

 Posteriormente, a coluna de avaliação (entre 0 a 5 estrelas) foi incrementada, como VARCHAR(3) para o caso de pontos, como por exemplo, ao avaliar um filme como 2.5 estrelas.

USE biblioteca_filmes;
ALTER TABLE filmes\
ADD COLUMN avaliacao VARCHAR(3);\

