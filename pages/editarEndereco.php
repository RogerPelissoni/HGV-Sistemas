<?php include('../config.php'); ?>
<?php include ('../pages/templates/header.php'); ?>

<div class="nav-menu">
    <a class="nav-menu-active" href="<?php echo INCLUDE_PATH ?>">Página inicial</a><i class="fas fa-arrow-right"></i><a class="nav-menu-disabled">Edição de endereço</a>
</div>

<div class="title">
    <div class="line"></div>
    <h2>Edição de endereço</h2>
</div>
<form class="formAddress" method="POST">
    <?php 
    $id = $_GET['editar'];
    $select = MySql::conectar()->prepare("SELECT * FROM `tb_enderecos` WHERE id = ?");
    $select->execute(array($id));
    foreach ($select as $key => $value) {
    ?>
    <h2>Insira os dados necessários para a alteração do endereço<br>ID do cliente : <?php echo $id ?></h2>
    <label>Cidade:</label>
    <p class="invalidoAvisoCidade"><i class='fas fa-exclamation-circle'></i> Campos vazios não são permitidos, digite uma Cidade.</p>
    <input type="text" name="cidade" placeholder="Ex: São Paulo" maxlength="100" value="<?php echo $value['cidade']; ?>">
    <label>CEP:</label>
    <p class="invalidoAvisoCEP"><i class='fas fa-exclamation-circle'></i> CEP inválido, insira novamente.</p>
    <input type="text" name="cep" placeholder="Ex: 99950000" maxlength="8" value="<?php echo $value['cep']; ?>">
    <label>Estado:</label>
    <p class="invalidoAvisoUF"><i class='fas fa-exclamation-circle'></i> Campos vazios não são permitidos, digite um Estado.</p>
    <input type="text" name="uf" placeholder="Ex: RS" maxlength="2" value="<?php echo $value['uf']; ?>">
    <div class="btnContainer">
        <input name="id" type="hidden" value="<?php echo $id ?>">
    <input class="btnEdit" id="<?php echo $id ?>" type="submit" name="action" value="Editar!">
    </div>
    <?php } ?>
</form>
<div class="modalEdit">
    <h2><i class="fas fa-check"></i> Os dados foram alterados com sucesso!</h2>
    <div class="modalReturn">
        <div class="modalLink">
    <a href="<?php echo INCLUDE_PATH ?>"><p><i class="fas fa-home"></i> Retornar para a lista de endereços</p></a>
    </div>
    <p class="closeModal"><i class="fas fa-times"></i>Fechar</p>
    </div>
</div>

<?php include('templates/footer.php'); ?>