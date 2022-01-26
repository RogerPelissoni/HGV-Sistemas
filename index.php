<?php include('config.php'); ?>
<?php include('pages/templates/header.php'); ?>

<div class="nav-menu">
    <a class="nav-menu-active" href="<?php echo INCLUDE_PATH ?>">Página inicial</a><i class="fas fa-arrow-right"></i>
</div>

<div class="title">
    <div class="line"></div>
    <h2>Lista de endereços cadastrados</h2>
</div>
<a href="pages/cadastrarEndereco.php"><input class="addCitiesBtn" type="button" value="Cadastrar novo endereço"></a>
<div class="tbContainer">
<table class="tbCidades">
    <caption>Tabela de endereços dos clientes</caption>
    <thead>
        <tr>
            <th>Cidade</th>
            <th>Cep</th>
            <th>UF</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!isset($_POST['parametro'])) {
            $query = "SELECT * FROM `tb_enderecos` ";

            $porPagina = 8;
            $totalPaginas = MySql::conectar()->prepare("SELECT * FROM `tb_enderecos` ORDER BY id ASC");
            $totalPaginas->execute();
            $totalPaginas = ceil($totalPaginas->rowCount() / $porPagina);
            if (isset($_GET['pagina'])) {
                $pagina = (int)$_GET['pagina'];
                if ($pagina > $totalPaginas)
                    $pagina = 1;
                $queryPg = ($pagina - 1) * $porPagina;
                $query .= " ORDER BY id ASC LIMIT $queryPg,$porPagina";
            } else {
                $pagina = 1;
                $query .= " ORDER BY id ASC LIMIT 0,$porPagina";
            }
        } else {
            $query .= " ORDER BY id ASC";
        }
        $sql = MySql::conectar()->prepare($query);
        $sql->execute();
        $enderecos = $sql->fetchAll();

        $select = MySql::conectar()->prepare("SELECT * FROM `tb_enderecos`");
        $select->execute();
        foreach ($enderecos as $value) {
        ?>
            <tr>
                <td><?php echo $value['cidade']; ?></td>
                <td><?php echo $value['cep']; ?></td>
                <td><?php echo $value['uf']; ?></td>
                <td><a href="<?php echo INCLUDE_PATH ?>pages/editarEndereco.php?editar=<?php echo $value['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a class="btnDel" id="<?php echo $value['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<div class="paginator">
    <?php
    if (!isset($_POST['parametro'])) {
        for ($i = 1; $i <= $totalPaginas; $i++) {
            if ($pagina == $i)
                echo '<a class="active-page">'.$i.'</a>';
            else
                echo '<a class="no-active-page" href="'.INCLUDE_PATH.'?pagina='.$i.'">'.$i.'</a>';
        }
    }
    ?>
</div>
<!--paginaton-->

<div class="delConfirm">
    <h2>Deseja excluir o registro?</h2>
    <a href="#"><i class="fas fa-trash-alt"></i> Excluir</p></a>
    <a href="<?php echo INCLUDE_PATH ?>">
        <p><i class="fas fa-undo"></i> Voltar</p>
    </a>
</div>
</div>
<!--background-->


<?php include('pages/templates/footer.php'); ?>