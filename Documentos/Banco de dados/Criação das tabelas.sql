-- se precisar apagar o banco so descomentar a linha debaixo
DROP DATABASE DB_Aurora;

-- cria o banco
CREATE DATABASE DB_Aurora;

USE DB_Aurora;

CREATE TABLE TB_Pessoa 
(
cod_pessoa int PRIMARY KEY auto_increment,
Nome varchar(100) NOT NULL,
sexo varchar(15) NOT NULL,
Data_de_nascimento varchar(20) NOT NULL,
tipo varchar(32) NOT NULL,
foto varchar(300) NOT NULL
);

CREATE TABLE TB_Usuario
(
cod_user int PRIMARY KEY auto_increment,
email varchar(100) NOT NULL,
senha varchar(32) NOT NULL,
usernick varchar(50) unique NOT NULL,
pessoa int,
verif int,
cod_verif varchar(30),
FOREIGN KEY(pessoa) REFERENCES TB_Pessoa (cod_pessoa)
);

CREATE TABLE TB_Materias 
(
cod_materia int PRIMARY KEY auto_increment,
Nome varchar(50) NOT NULL,
imagem varchar(100) NOT NULL,
cor varchar(50) NOT NULL,
tipo varchar(10) NOT NULL
);

CREATE TABLE TB_Temas
(
cod_tema int PRIMARY KEY auto_increment,
tema varchar(50) NOT NULL,
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia)
);

CREATE TABLE TB_Conteudo
(
cod_conteudo int PRIMARY KEY auto_increment,
titulo varchar(100) NOT NULL,
texto text NOT NULL,
estado varchar(15) NOT NULL,
tema int,
pessoa int,
FOREIGN KEY(tema) REFERENCES TB_Temas (cod_tema),
FOREIGN KEY(pessoa) REFERENCES TB_Pessoa (cod_pessoa)
);

CREATE TABLE TB_Perguntas_forum 
(
cod_pergunta int PRIMARY KEY auto_increment,
titulo varchar(100) NOT NULL,
pergunta text NOT NULL,
datap varchar(30) NOT NULL,
usuario int,
disciplina int,
conteudo int,
categoria varchar(50) NOT NULL,
visualizacoes int NOT NULL,
FOREIGN KEY (conteudo) REFERENCES TB_Temas (cod_tema),
FOREIGN KEY(disciplina) REFERENCES TB_Materias (cod_materia),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Respostas_forum 
(
cod_resposta int PRIMARY KEY auto_increment,
resposta text NOT NULL,
verificada int NOT NULL,
datap varchar(30) NOT NULL,
usuario int,
pergunta int,
FOREIGN KEY(pergunta) REFERENCES TB_Perguntas_forum (cod_pergunta),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Questoes  
(
cod_pergunta int PRIMARY KEY auto_increment,
enunciado text NOT NULL,
dificuldade varchar(15) NOT NULL,
alt_a text NOT NULL,
alt_b text NOT NULL,
alt_c text NOT NULL,
alt_d text NOT NULL,
alt_e text,
resposta text NOT NULL,
resolucao text NOT NULL,
estado varchar(15) NOT NULL,
tema int,
pessoa int,
FOREIGN KEY(tema) REFERENCES TB_Temas (cod_tema),
FOREIGN KEY(pessoa) REFERENCES TB_Pessoa (cod_pessoa)
);

CREATE TABLE TB_Respostas  
(
cod_resposta int PRIMARY KEY auto_increment,
resposta text,
usuario int,
pergunta int,
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user),
FOREIGN KEY(pergunta) REFERENCES TB_Questoes (cod_pergunta)
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


-- adiciona os temas 1 e pt , 2 e mat, 3 fis, 4 quim, 5 bio, 6 hit, 7 geo, 8 filo, 9 socio
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Gramática', '1');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Literatura', '1');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Interpretação', '1');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Redação', '1');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Álgebra e Aritmética', '2');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Trigonometria', '2');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Geometria Plana', '2');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Geometria Espacial', '2');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Geometria Analítica', '2');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Conceitos Iniciais', '3');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Mecânica', '3');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Termologia', '3');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Óptica', '3');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Ondulatória', '3');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Eletromagnetismo', '3');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Física Geral', '3');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Química Geral e Inorgânica', '4');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Química Orgânica', '4');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Físico-Química', '4');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Conceitos Inciais', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Bioquímica', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Citologia', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Embriologia', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Histologia', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Seres Vivos', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Anatomia e Fisiologia', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Genética', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Evolução', '5');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Ecologia', '5');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Conceitos Iniciais', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Mundo Antigo', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Mundo Medieval', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Mundo Moderno', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Mundo Contemporâneo', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Brasil Colonial', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Brasil Império', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Brasil República', '6');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('História Geral', '6');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Geografia do Brasil', '7');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Geografia Física', '7');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Geografia Geral', '7');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Filosofia Antiga', '8');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Filosofia Medieval', '8');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Filosofia Moderna', '8');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Filosofia Contemporânea', '8');

INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Sociólogos', '9');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Cultura', '9');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Movimentos Sociais', '9');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Política', '9');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Democracia', '9');
INSERT INTO `db_aurora`.`TB_temas` (`tema`, `materia`) VALUES ('Cidadania', '9');

INSERT INTO `db_aurora`.`tb_pessoa` (`Nome`, `sexo`, `Data_de_nascimento`, `tipo`, `foto`) VALUES ('Juliane Faustino Macedo Prilip', 'Feminino', '15 / 08 / 2001', 'ADM', 'usericon.png');
INSERT INTO `db_aurora`.`tb_pessoa` (`Nome`, `sexo`, `Data_de_nascimento`, `tipo`, `foto`) VALUES ('Gustavo Moreira Santos', 'Masculino', '26 / 02 / 2002', 'ADM', 'usericon.png');
INSERT INTO `db_aurora`.`tb_pessoa` (`Nome`, `sexo`, `Data_de_nascimento`, `tipo`, `foto`) VALUES ('Sidney de Jesus Monteiro Junior', 'Masculino', '12 / 02 / 2002', 'ADM', 'usericon.png');
INSERT INTO `db_aurora`.`tb_pessoa` (`Nome`, `sexo`, `Data_de_nascimento`, `tipo`, `foto`) VALUES ('Leonardo Zabotto Lessa', 'Masculino', '27 / 11 / 2002', 'ADM', 'usericon.png');


INSERT INTO `db_aurora`.`tb_usuario` (`email`, `senha`, `usernick`, `pessoa`) VALUES ('juliaprilip.com', '84b967760b21b2934ab19c57576b4ed5', 'akat2001', '1');
INSERT INTO `db_aurora`.`tb_usuario` (`email`, `senha`, `usernick`, `pessoa`) VALUES ('gustavo@gmail.com', 'ace7d13cf36415ca9d08316bede67b0f', 'Paranca', '2');
INSERT INTO `db_aurora`.`tb_usuario` (`email`, `senha`, `usernick`, `pessoa`) VALUES ('sidney@gmail.com', '16ba85daf5b461d351a5d4f9b58b2171', 'Sidsid', '3');
INSERT INTO `db_aurora`.`tb_usuario` (`email`, `senha`, `usernick`, `pessoa`) VALUES ('zabotto@gmail.com', '467740a7eb9b7766f3166f2d0ab86585', 'Zabotto', '4');
