<!--
	180403 - 3 de abril de 2018
	Acréscimo de cometários para tornar o código mais didático
*******************************************************
Tutorial PHP para entrada de dados
2 abril 2011
retirado de 
http://www.tizag.com/phpT/examples/formex.php

Input fields are the simplest forms to grasp. 
As mentioned in the Forms Tutorial, just be sure to place the name attribute within the tags 
and specify a name for the field. 
Also be aware that for our form's action we have placed the $PHP_SELF super global to send our form to itself. 
We will be integrating more PHP code into our form as we continue on so be sure to save the file with a .php extension.
Code:
-->

<html>
<head>
<title>Formulário para matrícula na disciplina de educação física</title>
</head>
<body>
<h1>Tipos de entrada de dados</h1>
<i><b>1) Campos comuns</i></b>


<!-- o comando <form> dá início ao bloco de entrada de dados. 
Dentro dele devem fcar todas as variáveis de entrada inclusive o botão -->

<form action="02_dataentry_recebe.php" method = "post">
<!--<form action="02_dataentry_recebe.php" method = "get">-->
Nome:<input type="text" size="12" maxlength="12" name="Nome"><br />
<br>
Sobrenome:<input type="text" size="12" maxlength="36" name="Sobrenome"><br />
<br>
Radios and Checkboxes

The catch with radio buttons lies with the value attribute. 
The text you place under the value attribute will be displayed by the browser when the variable is called with PHP.

Check boxes require the use of an array. 
PHP will automatically place the checked boxes into an array if you place [] brackets at the end of each name.
Code:
...

<i><b>2) Botões de rádio (radio buttons)</b></i>
<br>
Sexo:<br />
	Masculino:<input type="radio" value="Masculino" name="genero"><br/>
	Feminino: <input type="radio" value="Feminino"  name="genero"><br/>
<!-- o botão de rádio é uma variável exclusiva, ou seja eu sempre escolho
somente uma de diversas alternativas. Não é possível selecionar duas simulaneamente -->

<br>
<i><b>3) Seletores (observar a diferença com o botão de rádio)x'x</i></b>
<br>
Por favor, entre com o(s) esporte(s) de sua preferência::<br />
Futebol:<input	type="checkbox" value="Futebol"	name="esporte[]">:<br />
Tênis de Mesa:<input	type="checkbox" value="Tênis de Mesa"	name="esporte[]">:<br />
Vôlei:<input	type="checkbox" value="Vôlei"	name="esporte[]">:<br />
<!-- observar que a variável está sucedida das chaves food[] 
Isto significa que não é uma variável escalar mas sim um vetor 
Podem ser marcadas uma, duas ou as três alternativas -->

<br>

<i><b>4) Áreas de texto</i></b>
<br>
Descreva brevemente sua familiaridade com a prática esportiva. 
<!--
Áreas de texto são, na verdade, campos de entrada ampliados.--> 
<br>
<!-- Treat them the same way, just be aware of the wrap attribute and how each type of wrap will turn out. 
PHP relys on this attribute to display the textarea.
Code:
...
-->
Escreva aqui:<textarea rows="3" cols="40" name="quote" wrap="physical">Áreas de texto são, na verdade, campos de entrada ampliados.</textarea>:<br />

<!--  No caso a área de texto  abriu um espaço de 120 caracteres com 3 linhas de 40 caracteres.
Mesmo que na página forem digitados mais caracteres apenas serão recebidos 120 -->

<i><b>5) Listas drop down</i></b>
<br>
<!--
A lista drop down é similar ao botão de rádio e checkbox.
A diferença é a forma de apresentação.
A lista drop down permite selecionar apenas uma de diversas alternativas-->
Selecionar o nível de experiência nos esportes selecionados:<br />
<select name="experiência">
	<option value="Principiante">Prinipiante</option>
	<option value="Praticante">Praticante</option>
	<option value="Profissional">Profissional</option>
</select><br />

<br>
<i><b>6) Lista de seleção</i></b>
<br>
<!-- A diferença da lista de seleção é apenas a forma de apresentação -->
Selecionar o horário preferencial para as atividades::<br />
<select name="PdD" size="4">
	<option value="9:00">9:00</option>
	<option value="11:00">11:00</option>
	<option value="14:00">14:00</option>
	<option value="18:00">18:00</option>
</select><br />

<br><br>
		<input type="reset" name="cancela" value="Apagar">
		<input type="submit" name="submit"  value ="Continua" />
<br><br>

<!--
Matinal, vespertino e noturno é o valor a ser guardado na variável PdD (periodo do dia). 
Manhã, tarde e noite é o valor publicado.
A vantagem de entrada de dado para o usuário escolher valores é evitar digitação errada em um campo em branco.
Um erro de digitação pode dar problema na entrada de dado principalmente se forem valores padronizados.
Be sure to check through your code to double check for bugs or errors especially look at each name 
attribute to be sure your names are all correct. As far as names go, you can copy the ones shown or 
simply make up your own, just be sure you remember what they are. Your form should be similar to the one shown here.-->
</form>
</body>
</html>
