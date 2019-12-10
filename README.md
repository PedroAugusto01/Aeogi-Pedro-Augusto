# Aeogi
Repository para alocar os arquivos do Programa Aeogi 
Bem vindo a pokedex do Ashe.

O programa a seguir foi feito em linguagem PHP, o acesso para o seu funcionamento é: https://pokeviwer.000webhostapp.com/

Existe dois arquivos essenciais para o funcionamento do programa que são: Index e Pesquisar
Index é o arquivo inicial onde possui o mecanismo de busca ao banco e um link para uma planilha para ajuda.
Pesquisar é o arquivo aonde acontece toda a lógica da programação, desde a conexão ao banco de dados, a leitura dos dados digitados e a busca deles na tabela.
O instancia de banco de dados usado e a MySQL. Caso queira rodar o programa em seu computador basta fazer alterações mínimas no código para o funcionamento.
Para alterar o funcionamento do banco de dados basta abrir o arquivo com o nome “pesquisar” e fazer as alterações nos seguintes campos.
	
  $servidor = "jupiter.servidordedns.info";
	$usuario = "poke";
	$senha = "Ok1y6_q6";
	$dbname = "poke";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$servidor séria aonde a conexão com o banco será feita, caso seja outro servidor ou localhost basta fazer a alteração.
$usuario seria o usuário padrão para efetuar a conexão com o banco de dados, por padrão ele vem como “root”
$senha seria a senha definida para efetuar a conexão com o banco.
$dbname seria o nome do banco de dados que a conexão irá ocorrer.
