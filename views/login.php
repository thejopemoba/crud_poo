<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?php require_once '../includes/menu.php'; ?>

    <div class="col-md-12 text-center">
        <h2>Cadastro de Usuário</h2>
    </div>
    <form id="form-login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha" placeholder="••••••••">
                </div>
                <div class="col-md-12">
                    <button class="btn btn-success" type="submit">Login</button>
                </div>
            </div>
        </div>

    </form>

    <div id="loader" style="display:none; text-align:center; margin:10px;">
        <img src="../assets/images/loader.gif" alt="Carregando..." style="width: 90px;">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/login.js"></script>


</body>

</html>