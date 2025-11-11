# MVC com MySQL

## Integrantes
 
* Leticia do Patrocinio
* Mayara Almeida
* Natália dos Santos
 
---
 
### Descrição Geral
 
Descrição aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii

---

### Instruções

Instruir aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii

---

### Código SQL

-- Cria o banco de dados se ele ainda não existir
CREATE DATABASE IF NOT EXISTS biblioteca_filmes;

-- Seleciona o banco de dados para que a tabela seja criada dentro dele
USE biblioteca_filmes;

-- Cria a tabela 'filmes'
CREATE TABLE filmes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    diretor VARCHAR(255),
    ano INT(11),
    genero VARCHAR(100),
    capa VARCHAR(255),
    comentario VARCHAR(455)
);
 um tempo depois . . .
USE biblioteca_filmes;
ALTER TABLE filmes
ADD COLUMN avaliacao VARCHAR(3);

