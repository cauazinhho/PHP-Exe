<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Calcular Salário Total</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="salarioFixo" class="form-label">Salário Fixo:</label>
            <input type="number" class="form-control" id="salarioFixo" name="salarioFixo" placeholder="Digite o salário fixo do vendedor">
        </div><br><br>

        <div class="mb-3">
            <label for="vendasTotais" class="form-label">Total das Vendas:</label>
            <input type="number" class="form-control" id="vendasTotais" name="vendasTotais" placeholder="Digite o valor total das vendas">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Salário Total</button>
    </form>
    <br><br>

    <?php 
        
        if (isset($_POST['salarioFixo']) && isset($_POST['vendasTotais'])) {
            $salarioFixo = $_POST['salarioFixo'];
            $vendasTotais = $_POST['vendasTotais'];

            
            echo "O salário total do vendedor é: R$ " . exercicio13($salarioFixo, $vendasTotais);
        }
    ?>

</body>
</html>
