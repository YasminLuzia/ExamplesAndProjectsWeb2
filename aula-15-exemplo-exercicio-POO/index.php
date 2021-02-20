<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>
		Página POO - Modelo de página com Programação Orientada a Objetos
	</title>
	<meta name="author" content="Yasmin L">
	<meta name="description" content="Página POO - Modelo de página com Programação Orientada a Objetos">
	<meta name="keyword" content="POO, HTML, CSS, PHP, exemplos">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<main class="geral">
		<header class="topo">
			<!--AQUI FICA O BANNER - topo da página-->
		</header>

		<nav class="menu">
			<ul>
				<li> <a href="#home"> POO </a></li>
				<li> <a href="#conteudo2"> Exemplo 01 </a></li>
				<li> <a href="#conteudo3"> Exemplo 02 </a></li>
				<li> <a href="#exercicio"> Exercício </a></li>
			</ul>
		</nav>

		<section class="apresentacao" id="home">
			<article class="poo">
				<h2>PHP - Orientação a Objetos</h2>
				<figure>
					<img src="img/classe.png" alt="Exemplo de Classe">
				</figure>
				<p>
					CLASSES: No mundo real, muitas vezes você vai encontrar objetos que são parecidos, ou que pertencem à mesma espécie. Por exemplo, um cão da raça labrador e um cão da raça bulldog são diferentes na aparência, mas ambos são cães. Podemos ter uma bicicleta de corrida, e outra infantil, mas ambas são bicicletas e partilham características comuns.
				</p>
				<p>
					A classe na programação define as características e ações de cada objeto que será mantido no sistema.
				</p>
			</article>
		</section>

		<section class="conteudo2" id="conteudo2">
			<!--Aqui colocamos o conteúdo do segundo botão do menu-->
			<aside class="exemplo">
				<h2>Exemplo Pessoa</h2>
				<p>Desenvolva um algoritmo que leia nome e idade de uma pessoa. Seu programa deve mostrar o ano que a pessoa nasceu, e se a pessoa é maior ou menor de idade.</p>
				<hr>
				<?php
				//1º ENXERGAR O ARQUIVO DE CLASSE:
				include 'pessoa.class.php';
				//2º INSTANCIAMOS A CLASSE - Criamos um objeto de Pessoa:
				$p1 = new Pessoa();
				//3º ATRIBUIR VALORES AOS ATRIBUTOS:
				$p1->setNome("Roberto");
				$p1->setIdade(17);
				//4º SAÍDA DE DADOS:
				echo "<p>Nome: " . $p1->getNome() . "</p><p>
				Idade: " . $p1->getIdade() . "</p><p>
				Ano de Nascimento: " . $p1->acharAnoNascimento() . "</p><p>
				Resposta: " . $p1->retornarMaiorOuMenor() .
					"</p>";
				?>

			</aside>
		</section>

		<section class="conteudo3" id="conteudo3">
			<!--Aqui colocamos o conteúdo do terceiro botão do menu-->
			<aside class="exemplo">
				<h2>Exemplo Calculo</h2>
				<p>Desenvolva um algoritmo que leia nome e duas notas. Seu programa deve calcular a média e retornar se aprovou, reprovou, ficou em substituição, aprovou com laúrea acadêmica. Para aprovar precisa de 6 ou mais.</p>
				<p>Abaixo de 2: Reprovado</p>
				<p>De 2 até 5.99: Recuperação</p>
				<p>De 6 até 8.99: Aprovado</p>
				<p>De 9 até 10: Aprovado com láurea acadêmica
				</p>

				<hr>
				<?php
				// Enxergar o arquivo classe
				include 'aluno.class.php';

				//Instanciar a classe
				$aluno1 = new Aluno("Yasmin", 10, 7);

				//Atribuir valores
				// $aluno1->setNome("Yasmin");
				// $aluno1->setNota1(9);
				// $aluno1->setNota2(7);

				echo "<p>" . $aluno1->toString() . "</p><p>
				Média: " . $aluno1->calcularMedia() . "</p><p>
				Retorno da aprovação: " . $aluno1->retornarAprovacao() . "
				</p>"

				?>
			</aside>
		</section>

		<section class="exercicio" id="exercicio">
			<!--Aqui colocamos o conteúdo do terceiro botão do menu-->
			<aside class="exemplo">
				<h2>Exercício</h2>
				<p>Desenvolva uma classe calculadora. A mesma deve possuir dois atributos: numero1 e numero2 (privados), os métodos assessores e os métodos: somar(), multiplicar(), dividir(), calcularRaiz1().</p>
				<hr>
				<?php
				// Exergar o arquivo classe
				include 'calculadora.class.php';

				// //Instanciar a classe
				$calculadora1 = new Calculadora();

				//Atribuir valores
				$calculadora1->setNumero1(5);
				$calculadora1->setNumero2(15);

				echo "<p>Utilizando os números " . $calculadora1->getNumero1() . " e " . $calculadora1->getNumero2() . " temos: </p>
				<p>Soma: " . $calculadora1->somar() . "</p>
				<p>Multiplicação: " . $calculadora1->multiplicar() . "</p>
				<p>Divisão: " . round($calculadora1->dividir(), 2) . "</p>
				<p>Raiz do primeiro número: " . round($calculadora1->calcularRaiz1(), 2) . "</p>"

				?>

			</aside>
		</section>

		<footer class="rodape">
			<!--Aqui colocamos o rodapé - informações do site, do autor, contato, patrocinadores...-->
		</footer>
	</main>
</body>

</html>