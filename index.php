<!--ÁREA DO CABEÇALHO-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO
//include_once em PHP serve para incluir um arquivo em outro, mas apenas uma vez durante a execução do script

include_once("templates/header.php");
include_once("config/processo.php");

?>
<!--fim do cabeçalho-->
<!--INÍCIO DO CORPO DA PÁGINA-->
<!--CORPO DA HOME-->
<!--CHECAR SE EXISTE MENSAGEM NA SESSION, pois sempre que acontecer alguma operação de CRUD, deverá aparecer uma mensagem na SESSION-->
<div id="conteiner
<?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id='msg'><?= $printMsg ?></p>
<?php endif; ?>

<h1 id="main-title">Minha Agenda de Contatos</h1>

<!--MONTAGEM DA TABELA QUE RECEBERÁ TODOS OS REGISTROS DA TABELA DE CONTATOS QUE ESTÁ NO BANCO-->
<?php if(count($contatos)>0):?>

<!--INICIO DAS TABELAS-->
<table class="table-contatos" id="contato-table">

<thead>
<tr>
    <th scope="col">#</th>
    <th scope="col">nome</th>
    <th scope="col">telefone</th>
    <th scope="col"></th>
</tr>

</thead>
<tbody>
    <?php foreach($contatos as $contato): ?>
    <tr>
        <td scope="row" class="col-id"><?= $contato['id'] ?></td>
        <td scope="row" class="col-id"><?= $contato['nome'] ?></td>
        <td scope="row" class="col-id"><?= isset($contato['tel']) ? $contato['tel'] : 'Telefone não disponível' ?></td>
    

        <td class="actions-icon">
            <a href="#">
                <i class="fas fa-eye check-icon"></i>
            </a>
            <a href="#">
            <i class="far fa-edit dit-icon"></i>
            </a>
            <button type="submit" class="btn-deleter">
                <i class="fas fa-times delete-icon"></i>
            </button>

        </td>
    </tr>
    <?php endforeach; ?>
</tbody>

</table>
<?php else: ?>
<h2>não existe contatos cadastrados no banco</h2>
<h3>
    <a href="<?php $Base_url?>addContato.php">clique no botão abaixo para cadastrar um novo contato</a>
</h3>
<?php endif; ?>
<!--fim do corpo da home-->
</div>
<!--ÁREA DO RODAPÉ-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>

<!--fim do rodapé-->