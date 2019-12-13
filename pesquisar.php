<center>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
    
<?php
	//Criar a conexao com o banco de dados
	$servidor = "jupiter.servidordedns.info";
	$usuario = "poke";
	$senha = "Ok1y6_q6";
	$dbname = "poke";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	//Pesquisa com o select e condição para buscar o nome desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_poke = "SELECT * FROM poke WHERE name LIKE '%$pesquisar%' LIMIT 1";
	$resultado_poke = mysqli_query($conn, $result_poke);
	
	//Pesquisa com o select e condição para buscar o codigo desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_pokes = "SELECT * FROM poke WHERE pokedex_number LIKE '%$pesquisar%' LIMIT 1";
	$resultado_pokes = mysqli_query($conn, $result_pokes);
	
	//Pesquisa com o select e condição para buscar o ataque desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_att = "SELECT * FROM poke WHERE attack LIKE '%$pesquisar%' LIMIT 1";
	$resultado_att = mysqli_query($conn, $result_att);
	
	//Pesquisa com o select e condição para buscar a classificação desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_class = "SELECT * FROM poke WHERE classfication LIKE '%$pesquisar%' LIMIT 1";
	$resultado_class = mysqli_query($conn, $result_class);
	
	//Pesquisa com o select e condição para buscar a defesa  desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_def = "SELECT * FROM poke WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_def = mysqli_query($conn, $result_def);
	
	//Pesquisa com o select e condição para buscar a altura desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_hei = "SELECT * FROM height_m WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_hei = mysqli_query($conn, $result_hei);
	
	//Pesquisa com o select e condição para buscar a vida desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_hp = "SELECT * FROM hp WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_hp = mysqli_query($conn, $result_hp);
	
	//Pesquisa com o select e condição para buscar a velocidade desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_speed = "SELECT * FROM speed WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_speed = mysqli_query($conn, $result_speed);
	
	//Pesquisa com o select e condição para buscar o tipo 1 desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_type1 = "SELECT * FROM type1 WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_type1 = mysqli_query($conn, $result_type1);

	//Pesquisa com o select e condição para buscar o tipo 2 desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_type2 = "SELECT * FROM type2 WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_type2 = mysqli_query($conn, $result_type2);
	
	//Pesquisa com o select e condição para buscar o peso desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_weight_kg = "SELECT * FROM weight_kg WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_weight_kg = mysqli_query($conn, $result_weight_kg);
	
	//Pesquisa com o select e condição para buscar a geração desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_gen = "SELECT * FROM generation WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_gen = mysqli_query($conn, $result_gen);
	
	//Pesquisa com o select e condição para buscar se e lendario ou não desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_legendary = "SELECT * FROM is_legendary WHERE is_legendary LIKE '%$pesquisar%' LIMIT 1";
	$resultado_legendary = mysqli_query($conn, $result_legendary);
	
	//Pesquisa com o select e condição para buscar as habilidades desejado (referente ao codigo ou nome pesquisado)
	$pesquisar = $_POST['pesquisar'];
	$result_abilities = "SELECT * FROM abilities WHERE is_legendary LIKE '%$pesquisar%' LIMIT 1";
	$resultado_abilities = mysqli_query($conn, $result_abilities);
	
	  
	   
	     //Imagem pesquisada por codigo
	     $pokedex_number = $pesquisar;
         $url = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/{$pokedex_number}.png";
	
	//While para gerar os resultados de acordo com a pesquisa.
	while($rows_cursos = mysqli_fetch_array($resultado_poke)){
	    ?>
	    <table>
	        <th>Pokedex número: 
	        <?php
	    echo $rows_cursos['pokedex_number']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Nome do Pokemon:
	        <?php
		echo $rows_cursos['name']."<br>";
		?>
	    </th>
	    
	    </table>
	    
	    <table>
	        <th>Poder de ataque:
	        <?php
	    echo $rows_cursos['attack']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    </table>
	    
	    <table>
	        <th>Classificação: 
	        <?php
	    echo $rows_cursos['classfication']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Defesa: 
	        <?php
	    echo $rows_cursos['defense']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Altura:
	        <?php
	    echo $rows_cursos['height_m']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Vida:
	        <?php
	    echo $rows_cursos['hp']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Velocidade:
	        <?php
	    echo $rows_cursos['speed']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Tipo 1:
	        <?php
	    echo $rows_cursos['type1']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Tipo 2:
	        <?php
	    echo $rows_cursos['type2']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Peso:
	        <?php
	    echo $rows_cursos['weight_kg']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Geração:
	        <?php
	    echo $rows_cursos['generation']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>E lendário?:
	        <?php
	    echo ($rows_cursos['is_legendary'] == 1 ? ' Sim' : ' Não' ) . "<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Habilidades:
	        <?php
	    echo $rows_cursos['abilities']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <?php
		//Imagem buscada pelo nome
		$pokedex_number = $rows_cursos['pokedex_number'];
         $url2 = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/{$pokedex_number}.png";
	    echo "<img href='link'><img src='$url2'/>";
		
	}
	
	//While para gerar os resultados de acordo com a pesquisa.
	while($rows_cursos = mysqli_fetch_array($resultado_pokes)){
		?>
	    <table>
	        <th>Pokedex número: 
	        <?php
	    echo $rows_cursos['pokedex_number']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Nome do Pokemon:
	        <?php
		echo $rows_cursos['name']."<br>";
		?>
	    </th>
	    
	    </table>
	    
	    <table>
	        <th>Poder de ataque:
	        <?php
	    echo $rows_cursos['attack']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    </table>
	    
	    <table>
	        <th>Classificação: 
	        <?php
	    echo $rows_cursos['classfication']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Defesa: 
	        <?php
	    echo $rows_cursos['defense']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Altura:
	        <?php
	    echo $rows_cursos['height_m']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Vida:
	        <?php
	    echo $rows_cursos['hp']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Velocidade:
	        <?php
	    echo $rows_cursos['speed']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Tipo 1:
	        <?php
	    echo $rows_cursos['type1']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Tipo 2:
	        <?php
	    echo $rows_cursos['type2']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Peso:
	        <?php
	    echo $rows_cursos['weight_kg']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Geração:
	        <?php
	    echo $rows_cursos['generation']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>E lendário?:
	        <?php
	    echo ($rows_cursos['is_legendary'] == 1 ? ' Sim' : ' Não' ) . "<br>";
	    ?>
	    </th>
	    </table>
	    
	    <table>
	        <th>Habilidades:
	        <?php
	    echo $rows_cursos['abilities']."<br>";
	    ?>
	    </th>
	    </table>
	    
	    <?php
		echo "<img href='link'><img src='$url'/>";
		
	}
	
?>
<form method="POST" action="index.php">
	<input type="submit" value="Voltar">
	<p></p></form>
</center>
</body>
