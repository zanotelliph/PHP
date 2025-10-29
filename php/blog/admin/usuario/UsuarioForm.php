<?php
include '../header.php';
?>


<h3>Formulário do Usuário</h3>
<form action="" method="post">
    <div class="row">
        <div class="col-6">
            <label for="" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome">
        </div>

        <div class="col-6">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" name="email">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label for="" class="form-label">CPF</label>
            <input class="form-control" type="text" name="cpf">
        </div>
        <div class="col-6">
            <label for="" class="form-label">Telefone</label>
            <input class="form-control" type="text" name="telefone">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="" class="form-label">Login</label>
            <input class="form-control" type="text" name="login">
        </div>
        <div class="col">
            <label for="" class="form-label">Senha</label>
            <input class="form-control" type="text" name="senha">
        </div>
        <div class="col">
            <label for="" class="form-label">Confirmar Senha</label>
            <input class="form-control" type="text" name="c_senha">
        </div>
    </div>

    <div class="row">
        <div class="col mt-4">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="./UsuarioList.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

</form>

<?php
include '../footer.php';
?>