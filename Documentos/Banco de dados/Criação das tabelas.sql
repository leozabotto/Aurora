-- se precisar apagar o banco so descomentar a linha debaixo
-- DROP DATABASE DB_Aurora;

-- cria o banco
CREATE DATABASE DB_Aurora;

USE DB_Aurora;

CREATE TABLE TB_Pessoa 
(
cod_pessoa int PRIMARY KEY auto_increment,
Nome varchar(100),
sexo varchar(15),
Data_de_nascimento varchar(20),
tipo varchar(32),
foto varchar(300),
nivel int,
experienia int
);

CREATE TABLE TB_Usuario
(
cod_user int PRIMARY KEY auto_increment,
email varchar(100),
senha varchar(32),
usernick varchar(50) unique,
pessoa int,
verif int,
cod_verif varchar(30),
FOREIGN KEY(pessoa) REFERENCES TB_Pessoa (cod_pessoa)
);

CREATE TABLE TB_Desempenho
(
cod_desempenho int PRIMARY KEY auto_increment,
pontos int,
data_questionario char(10),
usuario int,
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Materias 
(
cod_materia int PRIMARY KEY auto_increment,
Nome varchar(50),
imagem varchar(100),
cor varchar(50),
tipo varchar(10) 
);

CREATE TABLE TB_Conteudos 
(
cod_conteudo int PRIMARY KEY auto_increment,
tema varchar(50),
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia)
);

CREATE TABLE TB_Imagens_Mapa_mental 
(
cod_map_ment int PRIMARY KEY auto_increment,
tema varchar(100),
imagen varchar(300),
usuario int,
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Perguntas_forum 
(
cod_pergunta int PRIMARY KEY auto_increment,
titulo varchar(100),
pergunta varchar(1000),
datap varchar(30),
usuario int,
disciplina int,
conteudo int,
categoria varchar(50),
FOREIGN KEY (conteudo) REFERENCES TB_Conteudos (cod_conteudo),
FOREIGN KEY(disciplina) REFERENCES TB_Materias (cod_materia),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Respostas_forum 
(
cod_resposta int PRIMARY KEY auto_increment,
resposta varchar(1000),
verificada int,
datap varchar(30),
usuario int,
pergunta int,
FOREIGN KEY(pergunta) REFERENCES TB_Perguntas_forum (cod_pergunta),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Questoes  
(
cod_pergunta int PRIMARY KEY auto_increment,
pergunta varchar(300),
alternatica_1 varchar(100),
alternativa_2 varchar(100),
alternativa_3 varchar(100),
alternativa_4 varchar(100),
alternativa_5 varchar(100),
resposta varchar(100),
disciplina varchar(50),
experiencia int,
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia)
);

CREATE TABLE TB_Respostas  
(
cod_resposta int,
resposta varchar(100),
usuario int,
pergunta int,
PRIMARY KEY(cod_resposta, usuario,pergunta) ,
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user),
FOREIGN KEY(pergunta) REFERENCES TB_Perguntas_forum (cod_pergunta)
);

CREATE TABLE TB_Simulado 
(
cod_quest_sim int PRIMARY KEY auto_increment,
data char(10),
questao int,
FOREIGN KEY(questao) REFERENCES TB_Questoes  (cod_pergunta)
);

CREATE TABLE TB_Exercicio 
(
cod_exercicio int PRIMARY KEY auto_increment,
tema varchar(50),
questao int,
FOREIGN KEY(questao) REFERENCES TB_Questoes  (cod_pergunta)
);
-- adiciona as materias, imagem é o icone que aparece na frente e cor e a cor dele + tipo
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Português', 'spellcheck', 'deep-purple', 'humanas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Matemática', 'plus_one', 'green', 'exatas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Física', 'wb_incandescent', 'text-accent-3 amber', 'exatas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Química', 'whatshot', 'deep-orange', 'exatas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Biologia', 'pan_tool', 'green', 'biologicas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('História', 'local_library', 'purple', 'humanas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Geografia', 'public', 'text-accent-4 cyan', 'humanas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Filosofia', 'lightbulb_outline', 'amber', 'humanas');
INSERT INTO `db_aurora`.`TB_materias` (`Nome`, `imagem`, `cor`,`tipo`) VALUES ('Sociologia', 'directions_walk', 'pink', 'humanas');


-- adiciona os conteudos 1 e pt , 2 e mat, 3 fis, 4 quim, 5 bio, 6 hit, 7 geo, 8 filo, 9 socio
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Gramática', '1');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Literatura', '1');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Interpretação', '1');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Redação', '1');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Literatura', '1');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Álgebra e Aritmética', '2');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Trigonometria', '2');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Geometria Plana', '2');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Geometria Espacial', '2');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Geometria Analítica', '2');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Conceitos Iniciais', '3');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Mecânica', '3');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Termologia', '3');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Óptica', '3');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Ondulatória', '3');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Eletromagnetismo', '3');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Física Geral', '3');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Química Geral e Inorgânica', '4');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Química Orgânico', '4');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Físico-Química', '4');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Conceitos Inciais', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Bioquímica', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Citologia', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Embriologia', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Histologia', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Seres Vivos', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Anatomia Fisiologia', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Genética', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Evolução', '5');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Ecologia', '5');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Conceitos Iniciais', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Mundo Antigo', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Mundo Medieval', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Mundo Moderno', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Mundo Contemporâneo', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Brasil Colonial', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Brasil Império', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Brasil República', '6');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('História Geral', '6');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Geografia do Brasil', '7');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Geografia Física', '7');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Geografia Geral', '7');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Filosofia Antiga', '8');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Filosofia Medieval', '8');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Filosofia Moderna', '8');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Filosofia Contemporânea', '8');

INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Sociólogos', '9');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Cultura', '9');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Movimentos Sociais', '9');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Política', '9');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Democracia', '9');
INSERT INTO `db_aurora`.`TB_conteudos` (`tema`, `materia`) VALUES ('Cidadania', '9');


