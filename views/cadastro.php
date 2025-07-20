<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?php require_once '../includes/menu.php'; ?>

    <div class="col-md-12 text-center">
        <h2>Cadastro de Usuário</h2>
    </div>
    <form id="form-cadastro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="nome">Nome Completo</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="nome">CPF</label>
                    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="999.999.999-99">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha" placeholder="••••••••••">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="telefone">Telefone</label>
                    <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="(11) 99999-9999">
                </div>
                <div class="col-md-12">
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                </div>
            </div>
        </div>

    </form>

    <div id="resposta"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>