<?php
include 'includes/header.php';
?>
<br>
<main>
<hgroup>
    <h2>Cadastro de Clientes</h2>
    <h3>Preencha o formulário abaixo</h3>
</hgroup><br><br>
<div class="form_cli">
<form action="cad-cli.php" method="post">
    <input type="text" name="nome_txt" required placeholder="Nome" maxlength="100"><br>
    <input type="text" name="cpf_txt" required placeholder="CPF" maxlength="11"><br><br>
    <input type="date" name="data_cli" required placeholder="Data de Nascimento" style="width:120px;"><br>
    <input type="submit" value="Cadastrar" style="width:120px;"><br>
</form>
</div>
</main>

<?php
include 'includes/footer.php';
?>