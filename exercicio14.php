<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Calcular Saldo Atual</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="numeroConta" class="form-label">Número da Conta:</label>
            <input type="number" class="form-control" id="numeroConta" name="numeroConta" placeholder="Digite o número da conta">
        </div><br><br>

        <div class="mb-3">
            <label for="saldo" class="form-label">Saldo:</label>
            <input type="number" class="form-control" id="saldo" name="saldo" placeholder="Digite o saldo da conta">
        </div><br><br>

        <div class="mb-3">
            <label for="debito" class="form-label">Débito:</label>
            <input type="number" class="form-control" id="debito" name="debito" placeholder="Digite o valor do débito">
        </div><br><br>

        <div class="mb-3">
            <label for="credito" class="form-label">Crédito:</label>
            <input type="number" class="form-control" id="credito" name="credito" placeholder="Digite o valor do crédito">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Saldo Atual</button>
    </form>
    <br><br>

    <?php 
        if (isset($_POST['numeroConta']) && isset($_POST['saldo']) && isset($_POST['debito']) && isset($_POST['credito'])) {
            $numeroConta = $_POST['numeroConta'];
            $saldo = $_POST['saldo'];
            $debito = $_POST['debito'];
            $credito = $_POST['credito'];

            echo exercicio14($numeroConta, $saldo, $debito, $credito);
        }
    ?>

</body>
</html>
