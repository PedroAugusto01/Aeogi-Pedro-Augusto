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
	$servidor = "jupiter.servidordedns.info";
	$usuario = "poke";
	$senha = "Ok1y6_q6";
	$dbname = "poke";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_poke = "SELECT * FROM poke WHERE name LIKE '%$pesquisar%' LIMIT 1";
	$resultado_poke = mysqli_query($conn, $result_poke);
	
	$pesquisar = $_POST['pesquisar'];
	$result_pokes = "SELECT * FROM poke WHERE pokedex_number LIKE '%$pesquisar%' LIMIT 1";
	$resultado_pokes = mysqli_query($conn, $result_pokes);
	
	$pesquisar = $_POST['pesquisar'];
	$result_att = "SELECT * FROM poke WHERE attack LIKE '%$pesquisar%' LIMIT 1";
	$resultado_att = mysqli_query($conn, $result_att);
	
	$pesquisar = $_POST['pesquisar'];
	$result_class = "SELECT * FROM poke WHERE classfication LIKE '%$pesquisar%' LIMIT 1";
	$resultado_class = mysqli_query($conn, $result_class);
	
	$pesquisar = $_POST['pesquisar'];
	$result_def = "SELECT * FROM poke WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_def = mysqli_query($conn, $result_def);
	
	$pesquisar = $_POST['pesquisar'];
	$result_hei = "SELECT * FROM height_m WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_hei = mysqli_query($conn, $result_hei);
	
	$pesquisar = $_POST['pesquisar'];
	$result_hp = "SELECT * FROM hp WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_hp = mysqli_query($conn, $result_hp);
	
	$pesquisar = $_POST['pesquisar'];
	$result_speed = "SELECT * FROM speed WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_speed = mysqli_query($conn, $result_speed);
	
	$pesquisar = $_POST['pesquisar'];
	$result_type1 = "SELECT * FROM type1 WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_type1 = mysqli_query($conn, $result_type1);
	
	$pesquisar = $_POST['pesquisar'];
	$result_type2 = "SELECT * FROM type2 WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_type2 = mysqli_query($conn, $result_type2);
	
	$pesquisar = $_POST['pesquisar'];
	$result_weight_kg = "SELECT * FROM weight_kg WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_weight_kg = mysqli_query($conn, $result_weight_kg);
	
	$pesquisar = $_POST['pesquisar'];
	$result_gen = "SELECT * FROM generation WHERE defense LIKE '%$pesquisar%' LIMIT 1";
	$resultado_gen = mysqli_query($conn, $result_gen);
	
	$pesquisar = $_POST['pesquisar'];
	$result_legendary = "SELECT * FROM is_legendary WHERE is_legendary LIKE '%$pesquisar%' LIMIT 1";
	$resultado_legendary = mysqli_query($conn, $result_legendary);
	
	$pesquisar = $_POST['pesquisar'];
	$result_abilities = "SELECT * FROM abilities WHERE is_legendary LIKE '%$pesquisar%' LIMIT 1";
	$resultado_abilities = mysqli_query($conn, $result_abilities);
	
	  
	   
	     //Imagem pesquisada por codigo
	   $pokedex_number = $pesquisar;
         $url = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/{$pokedex_number}.png";
	
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
	        <th>E lendário? (1 Sim, 0 Não):
	        <?php
	    echo $rows_cursos['is_legendary']."<br>";
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
	        <th>E lendário? (1 Sim, 0 Não):
	        <?php
	    echo $rows_cursos['is_legendary']."<br>";
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

</center>
</body>
