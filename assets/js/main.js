$(document).ready(function () {

    $('#telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');


    $('#form-cadastro').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '../ajax/processaCadastro.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (res) {
                if (res.status === '200') {
                    $('#resposta').html('<p style="color:green;">Usuário cadastrado com sucesso!</p>');
                } else if (res.status === '402') {
                    $('#resposta').html('<p style="color:orange;">Preencha todos os campos.</p>');
                } else {
                    $('#resposta').html('<p style="color:red;">Erro ao cadastrar!</p>');
                }
            }
        });
    });



});
