CREATE TABLE aktuality (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nadpis TEXT NOT NULL,
    datum DATE,
    text_aktuality TEXT NOT NULL,
    foto_cesta VARCHAR(512)
);