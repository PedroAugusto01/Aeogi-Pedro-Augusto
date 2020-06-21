# Pokedex search
Repository para alocar os arquivos do Programa Aeogi 
Bem vindo a pokedex do Ash.

O programa a seguir foi feito em linguagem PHP, o acesso para o seu funcionamento é: http://pokeviwer.site/

Existe dois arquivos essenciais para o funcionamento do programa que são: Index.php e Pesquisar.php
Index é o arquivo inicial aonde possui o mecanismo de busca ao banco e um link para uma planilha para ajuda.
Pesquisar é o arquivo aonde acontece toda a lógica da programação, desde a conexão ao banco de dados, a leitura dos dados digitados e a busca deles na tabela.

1° Criação de um bando de dados com o nome poke;

	CREATE SCHEMA `poke` ;

2° Criação de uma tabela com o nome poke;

	Tabela:

	CREATE TABLE `poke`.`poke` (
	`pokedex_number` INT(3) UNSIGNED ZEROFILL NOT NULL,
  	`name` VARCHAR(45) NULL DEFAULT NULL,
 	`attack` VARCHAR(45) NULL DEFAULT NULL,
 	`classfication` VARCHAR(45) NULL DEFAULT NULL,
  	`defense` VARCHAR(45) NULL DEFAULT NULL,
  	`height_m` VARCHAR(45) NULL DEFAULT NULL,
  	`hp` VARCHAR(45) NULL DEFAULT NULL,
  	`speed` VARCHAR(45) NULL DEFAULT NULL,
  	`type1` VARCHAR(45) NULL DEFAULT NULL,
  	`type2` VARCHAR(45) NULL DEFAULT NULL,
  	`weight_kg` VARCHAR(45) NULL DEFAULT NULL,
  	`generation` VARCHAR(45) NULL DEFAULT NULL,
  	`is_legendary` VARCHAR(45) NULL DEFAULT NULL,
	`abilities` VARCHAR(45) NULL DEFAULT NULL,
  	PRIMARY KEY (`pokedex_number`),
  	UNIQUE INDEX `pokedex_number_UNIQUE` (`pokedex_number` ASC))
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;
	
Para fazer a importação do CSV para o banco de dados, basta baixar neste link: http://download1494.mediafire.com/reoh39lpdq6g/0p59rpqkkiayjii/Pokemon+Import.csv , em seguida no MSQL WorckBench, vá até a tabela, clique com o botão direito e selecione "Table data import wizzard", selecione o arquivo CSV em seu computador e basta iniciar procedimento.

Após ter implantado a tabela no banco de dados basta executar o arquivo "Index.php" e usar o programa.
	
	


