<<<<<<< HEAD
<!--INÍCIO DA ÁREA DO CABEÇALHO-->
=======
<!--ÁREA DO CABEÇALHO-->
>>>>>>> e2f8454e5638b50728a36d784bcc9f735223dfcd
<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO
//include_once em PHP serve para incluir um arquivo em outro, mas apenas uma vez durante a execução do script

include_once("templates/header.php");
include_once("config/processo.php");

?>
<<<<<<< HEAD
<!--FIM DO CABEÇALHO-->

<!--INÍCIO DO CORPO DA HOME-->
<div id="container">
<!--CHECAR SE EXISTE MENSAGEM NA SESSION, pois sempre que acontecer alguma operação de CRUD, deverá aparecer uma mensagem na SESSION-->

=======
<!--fim do cabeçalho-->
<!--INÍCIO DO CORPO DA PÁGINA-->
<!--CORPO DA HOME-->
<!--CHECAR SE EXISTE MENSAGEM NA SESSION, pois sempre que acontecer alguma operação de CRUD, deverá aparecer uma mensagem na SESSION-->
<div id="conteiner
>>>>>>> e2f8454e5638b50728a36d784bcc9f735223dfcd
<?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id='msg'><?= $printMsg ?></p>
<?php endif; ?>

<h1 id="main-title">Minha Agenda de Contatos</h1>

<!--MONTAGEM DA TABELA QUE RECEBERÁ TODOS OS REGISTROS DA TABELA DE CONTATOS QUE ESTÁ NO BANCO-->
<<<<<<< HEAD

<?php if(count($contatos)>0):?>
    
    <!--Início da Tabela-->
    <table class="table" id="tabela-contatos">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <!--CORPO DA TABELA-->
        <tbody>
            <?php foreach($contatos as $contatos): ?>
                <tr>
                    <td scope="row" class="col-id"><?= $contatos["id"] ?></td>
                    <td scope="row" class="col-name"><?= $contatos["nome"] ?></td>
                    <td scope="row" class="col-cell"><?= $contatos["tel"] ?></td>
                    <!--INSERINDO OS ÍCONES-->
                    <td class="actions-icons">
                        <a href="#">
                            <i class="fas fa-eye eye-icon"></i>
                        </a>
                        <a href="#">
                            <i class="far fa-edit edit-icon"></i>
                        </a>
                        <button type="submit" class="btn-deletar">
                            <i class="fas fa-times delete-icon"></i>
                        </button>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>


    </table>

    <?php else: ?>
        <h2>Não existem Contatos Cadastrados no Banco</h2>
        <h3>
            <a href="<?= $Base_url ?>addContato.php">Clique aqui para Adicionar um novo Contato</a>
        </h3>
<?php endif; ?>
</div>
<!--FIM DO CORPO DA HOME-->

<!--INÍCIO DA ÁREA DO RODAPÉ-->
=======
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
>>>>>>> e2f8454e5638b50728a36d784bcc9f735223dfcd
<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>
<<<<<<< HEAD
<!--FIM DA ÁREA DO RODAPÉ-->
=======

<!--fim do rodapé-->
>>>>>>> e2f8454e5638b50728a36d784bcc9f735223dfcd
