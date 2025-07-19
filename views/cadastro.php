<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2>Cadastro de Usuário</h2>
<form id="form-cadastro">
    <input type="text" name="nome" id="nome" placeholder="Nome"><br><br>
    <input type="email" name="email" id="email" placeholder="Email"><br><br>
    <input type="password" name="senha"id="senha" placeholder="Senha"><br><br>
    <input type="tel" name="telefone" id="telefone" placeholder="(11) 99999-9999"><br><br>
    <input type="text" name="cpf" id="cpf" placeholder="999.999.999-99"><br><br>

    <button type="submit">Cadastrar</button>
</form>

<div id="resposta"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>
