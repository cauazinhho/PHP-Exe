<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Cálculo do Custo Final do Carro</title>
</head>
<body>
    <?php include('funcoes.php') ?>
    <form method="POST"> 
      <div class="mb-3">
            <label for="custoFabrica" class="form-label">Custo de Fabrica do Carro: </label>
            <input type="text" class="form-control" id="custoFabrica" name="custoFabrica" placeholder="Informe o custo de fabrica">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Custo Final</button>
    </form>
    <br><br>

    <?php 
    
    if (isset($_POST['custoFabrica'])) {
        $custoFabrica = $_POST['custoFabrica'];

        
        echo "Custo Final ao Consumidor: R$ " . number_format(exercicio09($custoFabrica), 2, '.');
    }
    ?>
</body>
</html>

