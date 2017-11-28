<?php 
    try{
        require_once("global.php");
        Usuario::verificaUsuario();
        $produtoDao = new ProdutoDao();
        $listaProdutos = $produtoDao->listar();
        require_once("cabecalho.php");
    }catch(Exception $e){
        Erro::trataErro($e);
    }
?>

<form action="form-cadastro-produtos.php" method="post">
    <button class="btn btn-secondary btn-lg">Cadastar Produtos</button>
</form>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor Uni</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Editar</th>
                <th scope="col">Remover</th>
            </tr>
        </thead>
        <?php foreach($listaProdutos as $produto):?>
        <tr class="produto">
            <td class="produto-nome"><?=$produto['nome']?></td>
            <td class="produto-quantidade"><?=$produto['quantidade']?></td>
            <td class="produto-valor"><?=$produto['valor']?></td>
            <td class="produto-valor-total">
                <?php
                    echo $produto['quantidade'] * $produto['valor'];
                ?>
            </td>
            <td>
                <form action="form-editar-produto.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-success">Editar</button>
                </form>
            </td>
            <td>
                <form action="produto-remover.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach?>
    </table>
    <h5>Valor total da compra: R$<span class="totalDaCompra">100</span></h3>
</div>
<script src="js/principal.js"></script>
<?php require_once("rodape.php");?>
