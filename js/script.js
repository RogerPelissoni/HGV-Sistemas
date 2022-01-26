$(document).ready(function () {
    var INCLUDE_PATH = 'http://localhost/projetoHGVsistemas/';
    /*Botão para adicionar endereços*/
    $('.btnAdd').click(function (e) {
        e.preventDefault();
        var form = $('.formAddress').serialize();
        $.ajax({
            type: "POST",
            url: INCLUDE_PATH + 'ajax/adicionarEndereco.php',
            data: form,
            dataType: 'JSON',
            success: function (data) {
                if (data['status'] == 'cidadeInvalido') {
                    $('.invalidoAvisoCidade').show();
                } else if (data['status'] == 'cepInvalido') {
                    $('.invalidoAvisoCEP').show();
                } else if (data['status'] == 'ufInvalido') {
                    $('.invalidoAvisoUF').show();
                } else {
                    $('.greyBG').show();
                    $('.modalSuccess').show();
                    $('.formAddress input[type=text]').val('');
                }
            }
        });
    })
    $('input[name=cidade]').click(function () {
        $('.invalidoAvisoCidade').hide();
    });
    $('input[name=cep]').click(function () {
        $('.invalidoAvisoCEP').hide();
    });
    $('input[name=uf]').click(function () {
        $('.invalidoAvisoUF').hide();
    });
    /*FIM Botão para adicionar endereços*/
    /*Botão para deletar endereços*/
    $('.btnDel').click(function (e) {
        e.preventDefault();
        if (confirm('Deseja excluir o registro?')) {
            var id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: INCLUDE_PATH + 'ajax/deletarEndereco.php',
                data: { id: id },
                dataType: "JSON",
                success: function (data) {
                    location.reload();
                }
            });
        }
    })
    /*FIM Botão para deletar endereços*/
    /*Botão para editar endereços*/
    $('.btnEdit').click(function (e) {
        e.preventDefault();
        var form = $('.formAddress').serialize();
        $.ajax({
            type: "POST",
            url: INCLUDE_PATH + 'ajax/editarEndereco.php',
            data: form,
            dataType: 'JSON',
            success: function (data) {
                if (data['status'] == 'cidadeInvalido') {
                    $('.invalidoAvisoCidade').show();
                } else if (data['status'] == 'cepInvalido') {
                    $('.invalidoAvisoCEP').show();
                } else if (data['status'] == 'ufInvalido') {
                    $('.invalidoAvisoUF').show();
                } else {
                    $('.greyBG').show();
                    $('.modalEdit').show();
                }
            }
        });
    })
    /*FIM Botão para editar endereços*/
    $('.closeModal').click(function () {
        $('.modalSuccess').hide();
        $('.greyBG').hide();
    })
    $('.closeModal').click(function () {
        $('.modalEdit').hide();
        $('.greyBG').hide();
    })
})
