SELECT * FROM bancocurriculos.usuarios;
CREATE TABLE ... (
...
cpf CHAR 11 NOT NULL DEFAULT '00000000000',
...
CONSTRAINT uk_cpf UNIQUE KEY (cpf),
...
);