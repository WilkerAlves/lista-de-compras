<?php
    try{        
        require_once("global.php");
        Usuario::verificaUsuario();
        $id = $_POST['id'];
        $produtoDao = new ProdutoDao();
        $resultado = $produtoDao->buscar($id);
        $nome = $resultado['nome'];
        $quantidade = $resultado['quantidade'];
        $valor = $resultado['valor'];
        $produto = new Produto($nome,$quantidade,$valor);
        $produto->setId($resultado['id']);
        require_once("cabecalho.php");
    }catch(Exception $e){
        Erro::trataErro();
    }
?>
<h2>Edição do produto <?=$produto->getNome()?></h2>
    <form class="form-group" action="produto-alterado.php" method="post">
        <lable for="form-input-name">Nome:</lable>
        <input id="form-input-name" type="text" name="nome" class="form-control" 
                    value="<?=$produto->getNome()?>">
        <lable for="form-input-quantidade">Quantidade:</lable>
        <input id="form-input-quantidade" min="0" type="number" name="quantidade" class="form-control" 
                    value="<?=$produto->getQuantidade()?>">
        <lable for="form-input-valor">Valor:</lable>        
        <input id="form-input-valor" min="0" step="0.01" type="number" name="valor" class="form-control" 
                    value="<?=$produto->getValor()?>">
        <input type="hidden" name="id" class="form-control" value="<?=$produto->getId()?>">
        <button type="submit" class="btn btn-primary">Salvar Edição</button>
    </form>
<?php require_once("rodape.php");?>