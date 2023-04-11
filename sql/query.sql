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

INSERT INTO artista(nome, data_nascimento, url_imagem)
VALUES ('Vincent van Gogh', '1853-03-30', 'https://user-images.githubusercontent.com/64715936/231029969-4043d006-eb4a-4640-b528-21d81b6866e3.jpeg'),
('Leonardo da Vinci', '1452-04-15', 'https://user-images.githubusercontent.com/64715936/231029886-ec4899cb-58b4-4afd-ad44-07f7a54957cd.jpg'),
('John William Waterhouse', '1849-04-06', 'https://user-images.githubusercontent.com/64715936/231030016-d79c6ca7-d326-425a-96b6-40362c0b1e63.jpg'),
('Michelangelo di Lodovico Buonarroti Simoni', '1475-03-06', 'https://user-images.githubusercontent.com/64715936/231030064-cb712f2e-2802-4f1c-9c5c-ebc44b4d016c.jpg');

INSERT INTO pintura(nome, tecnica, ano_lancamento, url_imagem, id_artista)
VALUES ('Os Comedores de Batata', 'Tinta a óleo', 1885, 'https://user-images.githubusercontent.com/64715936/231030115-f17a1caf-b875-4469-88a2-d1daf2e0981c.jpg', 1),
('A Anunciação', 'Têmpera, Tinta a óleo', 1472, 'https://user-images.githubusercontent.com/64715936/231030165-27d99702-0198-4514-9a28-d98e34376f75.jpg', 2),
('Gather Ye Rosebuds While Ye May', 'Tinta a óleo', 1909, 'https://user-images.githubusercontent.com/64715936/231030202-12fb7e97-ca53-46c0-b0de-fe798c815636.jpg', 3);

INSERT INTO escultura(nome, material, descricao, ano_lancamento, url_imagem, id_artista)
VALUES ('Pietà', 'Escultura em Mármore', 'A Pietà (em português Piedade) de Michelangelo é talvez a pietà mais conhecida e uma das mais famosas esculturas feitas pelo artista. Representa Jesus morto nos braços de sua mãe.', 1499, 'https://user-images.githubusercontent.com/64715936/231030282-4fa51022-a489-4bc9-a016-b1eb4b673138.jpg', 4),
('Pietà', 'Escultura em Mármore', 'Faz parte da decoração da Arca de São Domingo, na Basílica de São Domingo em Bolonha.', 1494, 'https://user-images.githubusercontent.com/64715936/231030419-35849ce7-101c-405b-a05e-c2d909382677.jpg', 4),
('Tumba de Júlio II', 'Escultura em Mármore', 'A Tumba de Júlio II é um conjunto decorativo e arquitetônico concebido pelo artista italiano Michelangelo, encomendado primeiramente em 1505 e finalizado em 1545 para servir de mausoléu ao Papa Júlio II.', 1545, 'https://user-images.githubusercontent.com/64715936/231030334-1c6ef04b-8ccd-41d2-a830-81dc0194d3a6.jpg', 4);