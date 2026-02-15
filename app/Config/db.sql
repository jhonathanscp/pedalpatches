CREATE TABLE pedals(
	ID VARCHAR(30) PRIMARY KEY,
    Brand VARCHAR(100),
    Model VARCHAR(100),
    ReleaseDate DATE,
)

INSERT INTO pedals(ID, Brand, Model, ReleaseDate)(
    "gp200",
    "Valenton",
    "GP 200",
    "20/12/2020"
);