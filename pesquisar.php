<html>
<center>

	<head>
		<style>
			table,
			th,
			td {
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

		//Pesquisa com o select e condição para buscar o nome desejado (nome pesquisado)
		$pesquisar = $_POST['pesquisar'];
		$result_poke = "SELECT * FROM poke WHERE name LIKE '%$pesquisar%' LIMIT 1";
		$resultado_poke = mysqli_query($conn, $result_poke);

		//Pesquisa com o select e condição para buscar o nome desejado (referente ao codigo)
		$pesquisar = $_POST['pesquisar'];
		$result_poke = "SELECT * FROM poke WHERE pokedex_number LIKE '%$pesquisar%' LIMIT 1";
		$resultado_poke_number = mysqli_query($conn, $result_poke);

		//Imagem pesquisada por codigo
		$pokedex_number = $pesquisar;
		$url = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/{$pokedex_number}.png";

		//While para gerar os resultados de acordo com a pesquisa.

		if (is_numeric($pesquisar)) {
			$result = $resultado_poke_number;
		} else {
			$result = $resultado_poke;
		}

		while ($rows_cursos = mysqli_fetch_array($result)) {
		?>
			<html>

			<head>
				<style>
					table,
					th,
					td {
						border: 1px solid black;
						padding: 5px;
					}

					table {
						border-spacing: 15px;
					}
				</style>
			</head>

			<body>

				<body>
					<table style="width:100%">
						<th> Pokedex número:
							<?php
							echo $rows_cursos['pokedex_number'] . "<br>";
							?>
						</th>

						<th>Nome do Pokemon:
							<?php
							echo $rows_cursos['name'] . "<br>";
							?>
						</th>

						<th>Poder de ataque:
							<?php
							echo $rows_cursos['attack'] . "<br>";
							?>
						</th>

						<th>Classificação:
							<?php
							echo $rows_cursos['classfication'] . "<br>";
							?>
						</th>

						<th>Defesa:
							<?php
							echo $rows_cursos['defense'] . "<br>";
							?>
						</th>

						<th>Altura:
							<?php
							echo $rows_cursos['height_m'] . "<br>";
							?>
						</th>

						<th>Vida:
							<?php
							echo $rows_cursos['hp'] . "<br>";
							?>
						</th>
					</table>
					<table style="width:100%">
						<th>Velocidade:
							<?php
							echo $rows_cursos['speed'] . "<br>";
							?>
						</th>

						<th>Tipo 1:
							<?php
							echo $rows_cursos['type1'] . "<br>";
							?>
						</th>

						<th>Tipo 2:
							<?php
							echo $rows_cursos['type2'] . "<br>";
							?>
						</th>

						<th>Peso:
							<?php
							echo $rows_cursos['weight_kg'] . "<br>";
							?>
						</th>

						<th>Geração:
							<?php
							echo $rows_cursos['generation'] . "<br>";
							?>
						</th>

						<th>E lendário?:
							<?php
							echo ($rows_cursos['is_legendary'] == 1 ? ' Sim' : ' Não') . "<br>";
							?>
						</th>

						<th>Habilidades:
							<?php
							echo $rows_cursos['abilities'] . "<br>";
							?>
						</th>
					</table>
				</body>

			</html>
		<?php
			//Imagem buscada pelo nome
			$pokedex_number = $rows_cursos['pokedex_number'];
			$url2 = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/{$pokedex_number}.png";
			echo "<img href='link'><img src='$url2'/>";
		}
		?>
		<form method="POST" action="index.php">
			<input type="submit" value="Voltar">
			<p></p>
		</form>
</center>
</body>