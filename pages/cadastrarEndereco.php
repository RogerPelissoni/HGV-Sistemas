<?php include('../config.php'); ?>
<?php include ('../pages/templates/header.php'); ?>

<div class="nav-menu">
    <a class="nav-menu-active" href="<?php echo INCLUDE_PATH ?>">Página inicial</a><i class="fas fa-arrow-right"></i><a class="nav-menu-disabled"> Cadastrar endereço</a>
    </div>

<div class="title">
    <div class="line"></div>
    <h2>Cadastro de endereço</h2>
</div>
<form class="formAddress" method="POST">
    <h2>Insira os dados necessários para cadastrar um novo endereço</h2>
    <label>Cidade:</label>
    <p class="invalidoAvisoCidade"><i class='fas fa-exclamation-circle'></i> Campos vazios não são permitidos, digite uma Cidade.</p>
    <input type="text" name="cidade" placeholder="Ex: São Paulo" maxlength="100">
    <label>CEP:</label>
    <p class="invalidoAvisoCEP"><i class='fas fa-exclamation-circle'></i> CEP inválido, insira novamente.</p>
    <input type="text" name="cep" placeholder="Ex: 99950000" maxlength="8">
    <label>Estado:</label>
    <p class="invalidoAvisoUF"><i class='fas fa-exclamation-circle'></i> Campos vazios não são permitidos, digite um Estado.</p>
    <input type="text" name="uf" placeholder="Ex: RS" maxlength="2">
    <div class="btnContainer">
    <input class="btnAdd" type="submit" name="action" value="Cadastrar!">
    </div>
</form>
<div class="modalSuccess">
    <h2><i class="fas fa-check"></i> O cadastro foi efetuado com sucesso!</h2>
    <div class="modalReturn">
        <div class="modalLink">
    <a href="<?php echo INCLUDE_PATH ?>"><p><i class="fas fa-home"></i> Retornar para a lista de endereços</p></a>
    </div>
    <div class="modalLink">
    <a href="<?php echo INCLUDE_PATH ?>pages/cadastrarEndereco.php"><p><i class="fas fa-plus-square"></i> Cadastrar mais endereços</p></a>
    </div>
    <p class="closeModal"><i class="fas fa-times"></i>Fechar</p>
    </div>
</div>

<?php include('templates/footer.php'); ?>