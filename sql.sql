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
('Leonardo da Vinci', '1452-04-15', ''),
('John William Waterhouse', '1849-04-06', ''),
('Michelangelo di Lodovico Buonarroti Simoni', '1475-03-06', '');

INSERT INTO pintura(nome, tecnica, ano_lancamento, url_imagem, id_artista)
VALUES ('Os Comedores de Batata', 'Tinta a óleo', 1885, '', 1),
('A Anunciação', 'Têmpera, Tinta a óleo', 1472, '', 2),
('Gather Ye Rosebuds While Ye May', 'Tinta a óleo', 1909, '', 3);

INSERT INTO escultura(nome, material, descricao, ano_lancamento, url_imagem, id_artista)
VALUES ('Pietà', 'Escultura em Mármore', 'A Pietà (em português Piedade) de Michelangelo é talvez a pietà mais conhecida e uma das mais famosas esculturas feitas pelo artista. Representa Jesus morto nos braços de sua mãe.', 1499, '', 4),
('Pietà', 'Escultura em Mármore', 'Faz parte da decoração da Arca de São Domingo, na Basílica de São Domingo em Bolonha.', 1494, '', 4),
('Tumba de Júlio II', 'Escultura em Mármore', 'A Tumba de Júlio II é um conjunto decorativo e arquitetônico concebido pelo artista italiano Michelangelo, encomendado primeiramente em 1505 e finalizado em 1545 para servir de mausoléu ao Papa Júlio II.', 1545, '', 4);