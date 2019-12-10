# Aeogi
Repository para alocar os arquivos do Programa Aeogi 
Bem vindo a pokedex do Ashe.

O programa a seguir foi feito em linguagem PHP, o acesso para o seu funcionamento é: http://pokeviwer.site/

Existe dois arquivos essenciais para o funcionamento do programa que são: Index.php e Pesquisar.php
Index é o arquivo inicial aonde possui o mecanismo de busca ao banco e um link para uma planilha para ajuda.
Pesquisar é o arquivo aonde acontece toda a lógica da programação, desde a conexão ao banco de dados, a leitura dos dados digitados e a busca deles na tabela.
A instância de banco de dados utilizado e o MySQL. Caso queira rodar o programa em seu computador basta fazer alterações mínimas no código para o funcionamento.
Para alterar o funcionamento do banco de dados basta abrir o arquivo com o nome “pesquisar.php” e fazer as alterações nos seguintes campos.
	
 	$servidor = "jupiter.servidordedns.info";
  	$usuario = "poke";
	$senha = "Ok1y6_q6";
	$dbname = "poke";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$servidor séria aonde a conexão com o banco será feita, caso seja outro servidor ou localhost basta fazer a alteração;
	$usuario seria o usuário padrão para efetuar a conexão com o banco de dados, por padrão ele vem como “root”;
	$senha seria a senha definida para efetuar a conexão com o banco;
	$dbname seria o nome do banco de dados que a conexão irá ocorrer;

2) Como conectar ao meu banco usado no projeto.

Abra o MSQL WorckBench e adicione uma nova MySQL Connections clicando no +

	Adicione o nome desejado em "Connection name: poke"
	Connection Method deixar o padrão: Standard (TCP/IP)
	Nos parameters:
	Hostname: jupiter.servidordedns.info
	Port: 3306
	Username: poke
	Password: clicar em Store in Vault e insirir a senha sem aspas "Ok1y6_q6"
	
	Clicar em Test Connection, digitar a senha novamente e clique em Ok.
	Basta clicar OK novamente
	
	Clique duas vezes em cima da Connection criada.
	
	Pronto, servidor acessado com sucesso.

3) Como instalar o banco de dados, Sugiro utilizar o "MSQL WorckBench".

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
	
Para fazer a importação do CSV para o banco de dados, basta baixar neste link: https://gofile.io/?c=w5Sd6S , em seguida no MSQL WorckBench, vá até a tabela, clique com o botão direito e selecione "Table data import wizzard", selecione o arquivo CSV em seu computador e basta iniciar procedimento.

Após ter implantado a tabela no banco de dados basta executar o arquivo "Index.php" e usar o programa.
	
	


