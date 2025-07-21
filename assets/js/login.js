$(document).ready(function () {
    $('#form-login').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '../ajax/processaLogin.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function () {
                $('#loader').show();
            },
            success: function (res) {
                if (res.status === '200') {
                    setTimeout(function () {
                        window.location.href = 'painel.php';
                    }, 1000);
                } else if (res.status === '402') {
                    $('#resposta').html('<p style="color:orange;">Preencha todos os campos.</p>');
                } else {
                    $('#resposta').html('<p style="color:red;">E-mail ou senha inválidos!</p>');
                }
            },
            complete: function () {
                $('#loader').hide(); // esconde o loader após o fim da requisição
            }
        });
    });
});
