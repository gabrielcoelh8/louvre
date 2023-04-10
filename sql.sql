CREATE TABLE artista(
	id SERIAL NOT NULL PRIMARY KEY, 
	nome VARCHAR(50) NOT NULL,
	data_nascimento DATE,
	url_imagem VARCHAR(255) NOT NULL
);

CREATE TABLE pintura(
	id SERIAL NOT NULL PRIMARY KEY,
	nome VARCHAR(50) NOT NULL, 
	tecnica VARCHAR(50) NOT NULL,
	ano_lancamento INT,
	url_imagem VARCHAR(255) NOT NULL,
    id_artista INT REFERENCES artista(id)
);

CREATE TABLE escultura(
	id SERIAL NOT NULL PRIMARY KEY,
	nome VARCHAR(50) NOT NULL, 
	material VARCHAR(50) NOT NULL,
	descricao TEXT NOT NULL,
	ano_lancamento INT,
	url_imagem VARCHAR(255) NOT NULL,
    id_artista INT REFERENCES artista(id)
);

SELECT pintura.*, artista.nome AS artista_nome FROM pintura JOIN artista ON artista.id = pintura.id_artista ORDER BY id_artista

INSERT INTO artista(nome, data_nascimento, url_imagem)
VALUES ('Vincent van Gogh', '1853-03-30', ''),
('Vincent van Gogh', '1853-03-30', ''),
('Vincent van Gogh', '1853-03-30', '');

INSERT INTO artista(nome, tecnica, ano_lancamento, url_imagem, id_artista)
VALUES ('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

INSERT INTO escultura(nome, material, descricao, ano_lancamento, url_imagem, id_artista)
VALUES ('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', '');