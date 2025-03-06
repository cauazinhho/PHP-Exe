<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Reajuste de Salário</title>
</head>
<body>
    <?php include('funcoes.php') ?>
    <form method="POST"> 
      <div class="mb-3">
            <label for="salario" class="form-label">Salário Mensal: </label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Informe o salário">
        </div><br><br>
        
        <div class="mb-3">
            <label for="percentual" class="form-label">Percentual de Reajuste: </label>
            <input type="text" class="form-control" id="percentual" name="percentual" placeholder="Informe o percentual de reajuste">
        </div><br><br>
        
        <button type="submit" class="btn btn-primary">Calcular Novo Salário</button>
    </form>
    <br><br>

    <?php
    // Verifica se os campos estão preenchidos
    if (isset($_POST['salario']) && isset($_POST['percentual'])) {
        $salario = $_POST['salario'];
        $percentual = $_POST['percentual'];

        // Verifica se os valores são numéricos
        if (is_numeric($salario) && is_numeric($percentual)) {
            // Chama a função para calcular o novo salário
            $novoSalario = exercicio08($salario, $percentual);
            
            echo "O novo salário é: R$ " . number_format($novoSalario, 2, ".");
        } else {
            echo "Por favor, insira valores válidos para o salário e o percentual.";
        }
    }
    ?>

</body>
</html>
