CREATE DATABASE `bd_agenda_t342` ;
USE bd_agenda_t342;

CREATE TABLE `bd_agenda_t342`.`tb_contatos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `tel` VARCHAR(15) NOT NULL,
  `obs` TEXT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `bd_agenda_t342`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Paulo Humberto', '(27) 99877-4133', 'Coordenador de RH da empresa CASAS BAHIA');
INSERT INTO `bd_agenda_t342`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Márcia Fortuna', '(27) 9997-5566', 'Professora de Tecnologia do SENAC');
INSERT INTO `bd_agenda_t342`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Emanuel', '(27) 99977-4422', 'Professor de tecnologia do SEBRAE');
INSERT INTO `bd_agenda_t342`.`tb_contatos` (`nome`, `tel`, `obs`) VALUES ('Mc pipokinha', '(27) 99977-4422', 'Influenciador de Moda no Instagram');

CREATE TABLE `bd_agenda_t342`.`tb_usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `login` VARCHAR(10) NOT NULL,
  `senha` VARCHAR(8) NOT NULL,
  `acesso` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO `bd_agenda_t342`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Gabriel Pensador', 'gabpen', '4125@111', 'Funcionário');
INSERT INTO `bd_agenda_t342`.`tb_usuarios` (`nome`, `login`, `senha`, `acesso`) VALUES ('Márcia Fortuna', 'marfortuna', '123456', 'Administrador');
