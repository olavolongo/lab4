<!--
Tutorial PHP para entrada de dados
15 abril 2012
complemento da página anterior para receber os dados
-->

<html>
<head>
<title>Recebe dados</title>
</head>
<body>
<h1>Recepção dos dados de campo</h1>
<i><b>1) Campos comuns</i></b>
<?php
$varnome=$_POST['Nome'];  // $varnome recebe o conteúdo da variável Nome
//$varnome=$_GET['Nome'];  // $varnome recebe o conteúdo da variável Nome
$varsobrenome=$_POST['Sobrenome'];  // $varsobrenome recebe o conteúdo da variável sobrenome
//$varsobrenome=$_GET['Sobrenome'];  // $varsobrenome recebe o conteúdo da variável sobrenome
echo 'Seu nome é :'.$varnome.'  '.$varsobrenome.'<br>';
echo '<br><br>';


#######################################################
echo "<i><b>2) Botões de rádio (radio buttons)</b></i><br><br>";


@$genero=$_POST['genero'];  // @ inibe a emissão de mensagem de erro para o caso de nada digitado
// Se não for colocado o @ no caso do usuário não digitar nada dá uma mensagem de erro
if ($genero==NULL)
	{echo 'Nada a declarar sobre sexo<br><br>'; }
else
	{echo 'Com relação ao sexo você declarou : '.$genero.'<br>';}
echo "Observar que o botão de rádio é exclusivo: ou um ou outro:<br>";
echo '<br><br>';


########################################################
echo "<i><b>3) Seletores</i></b><br>";

$esportes=$_POST['esporte'];  // recebe o conteúdo da variável food
// Observar que esta é uma forma de receber diversas variáveis no formato de um array (vetor de uma dimensão)
$indice=count($esporte);
// A função count do PHP conta o número de itens selecionados : tamanho do array

// Aqui trata-se de um loop para extrair as variáveis. A variável i varia de 0 (zero) a $indoce que é o numero de elementos.
// $i++ é uma função de incrementa o valor de in  (soma um). Poderia ser decrementa para contar para baixo $i-- 
for ($i=0; $i<$indice; $i++)  // faz um loop para imprimir cada item selecionado
{
	echo 'Você selecionou <b>'.$esporte[$i].'</b><br>';
}
echo "Observar que nesse caso a variável é selecionada ou desativada individualmente. <br>
Não tem ou exclusivo na seleção.<br>";
echo "A variável que recebe os valores é um vetor e não um escalar pois podem ser recebidos diversos itens.";
echo "<br><br>";

########################################################
echo '<i><b>4) Áreas de texto</i></b><br>';
$textarea=$_POST['quote'];  // recebe a variável
echo '<i>Conteúdo do texto recebido: </i><br><br>';
echo $textarea.'<br><br><br>';
/*
A área de texto é diferente do campo pois serve para se colocar um texto maior
*/

########################################################
echo '<i><b>5) Listas drop down</i></b><br><br>';
$experiência=$_POST['experiência'];  // recebe a variável
echo 'experência esportiva declarada:  <b>'.$experiência.'</b><br><br><br>';

#########################################################
echo '<i><b>6) Lista de seleção</i></b><br><br>';
@$horário=$_POST['PdD'];  // recebe a variável
if ($horário==NULL)  // isto é para evitar que dê erro no caso de não seleiconar nada
	{echo 'Nenhum período selecionado</b><br><br>'; }
else
	{echo 'Período preferencial:  <b>'.$horário.'</b><br><br>';}

?>
<a href='01_dataentry.php' >retornar à página de entrada de dados</a>


