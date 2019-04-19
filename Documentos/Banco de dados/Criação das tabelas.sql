CREATE DATABASE DB_Aurora;

USE DB_Aurora;

CREATE TABLE TB_Estado
(
cod_estado int PRIMARY KEY,
nome varchar(50),
sigla char(2)
);

CREATE TABLE TB_Cidade 
(
cod_cidade int PRIMARY KEY,
nome varchar(100),
estado int,
FOREIGN KEY(TB_Estado) REFERENCES cidade (cod_estado)
);

CREATE TABLE Pessoa 
(
cod_pessoa int PRIMARY KEY,
Nome varchar(100),
sexo char(1),
Data_de_nascimento char(10),
usernick varchar(50),
tipo varchar(32),
foto varchar(300),
cidade int,
FOREIGN KEY(cidade) REFERENCES cidade (cod_cidade)
);

CREATE TABLE TB_Usuario
(
cod_user int PRIMARY KEY,
email varchar(100),
senha varchar(32),
pessoa int,
FOREIGN KEY(pessoa) REFERENCES cidade (cod_pessoa)
);

CREATE TABLE TB_Desempenho
(
cod_desempenho int PRIMARY KEY,
pontos int,
data_questionario char(10),
usuario int,
FOREIGN KEY(usuario) REFERENCES cidade (cod_user)
);

CREATE TABLE TB_Materias 
(
cod_materia int PRIMARY KEY,
Nome varchar(50)
);

CREATE TABLE TB_Conteudos 
(
cod_conteudo int PRIMARY KEY,
pfd varchar(300),
tema varchar(50),
materia int,
FOREIGN KEY(materia) REFERENCES cidade (cod_materia)
);

CREATE TABLE TB_Imagens_Mapa_mental (
cod_map_ment int PRIMARY KEY,
tema varchar(100),
imagen varchar(300),
usuario int,
materia int,
FOREIGN KEY(materia) REFERENCES cidade (cod_materia),
FOREIGN KEY(usuario) REFERENCES cidade (cod_user)
);

CREATE TABLE TB_Perguntas_forum 
(
cod_pergunta int PRIMARY KEY,
tema varchar(100),
pergunta varchar(1000),
imagem varchar(300),
usuario int,
materia int,
FOREIGN KEY(materia) REFERENCES cidade (cod_materia),
FOREIGN KEY(usuario) REFERENCES cidade (cod_user)
);

CREATE TABLE TB_Respostas_forum 
(
cod_resposta int PRIMARY KEY,
resposta varchar(1000),
usuario int,
pergunta int,
FOREIGN KEY(pergunta) REFERENCES cidade (cod_pergunta),
FOREIGN KEY(usuario) REFERENCES cidade (cod_user)
);

CREATE TABLE TB_Questoes  
(
cod_pergunta int PRIMARY KEY,
pergunta varchar(300),
alternatica_1 varchar(100),
alternativa_2 varchar(100),
alternativa_3 varchar(100),
alternativa_4 varchar(100),
alternativa_5 varchar(100),
resposta varchar(100),
disciplina varchar(50),
materia int,
FOREIGN KEY(materia) REFERENCES materias (cos_materia)
);

CREATE TABLE TB_Respostas  
(
cod_resposta int,
resposta varchar(100),
usuario int,
pergunta int,
PRIMARY KEY(cod_resposta, usuario,pergunta),
FOREIGN KEY(usuario) REFERENCES Pessoa (cod_pessoa),
FOREIGN KEY(pergunta) REFERENCES Questoes  (cod_pergunta)
);

CREATE TABLE TB_Simulado 
(
cod_quest_sim int PRIMARY KEY,
data char(10),
questao int,
FOREIGN KEY(questao) REFERENCES Questoes  (cod_pergunta)
);

CREATE TABLE TB_Exercicio 
(
cod_exercicio int PRIMARY KEY,
tema varchar(50),
questao int,
FOREIGN KEY(questao) REFERENCES Questoes  (cod_pergunta)
);