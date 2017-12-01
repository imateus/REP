CREATE SCHEMA exemplo_bd;

use exemplo_bd;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `nome` varchar(9) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `departamento` varchar(20) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `STATUS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO usuario(login,senha,email,nome,cpf,departamento,cargo,status) 
    VALUES('admin', md5('admin'),'adm@site.com','Administrador','46896544848','TI','Diretor','Ativo');

SELECT * FROM usuario LIMIT 100;

