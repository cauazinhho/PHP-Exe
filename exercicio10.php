<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Cálculo do Salário Final do Vendedor</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST"> 
      <div class="mb-3">
            <label for="carrosVendidos" class="form-label">Número de Carros Vendidos: </label>
            <input type="text" class="form-control" id="carrosVendidos" name="carrosVendidos" placeholder="Número de carros vendidos">
        </div><br><br>
        
        <div class="mb-3">
            <label for="totalVendas" class="form-label">Total das Vendas: </label>
            <input type="text" class="form-control" id="totalVendas" name="totalVendas" placeholder="Valor total das vendas">
        </div><br><br>
        
        <div class="mb-3">
            <label for="salarioFixo" class="form-label">Salário Fixo: </label>
            <input type="text" class="form-control" id="salarioFixo" name="salarioFixo" placeholder="Salário fixo do vendedor">
        </div><br><br>
        
        <div class="mb-3">
            <label for="comissaoPorCarro" class="form-label">Comissão por Carro Vendido: </label>
            <input type="text" class="form-control" id="comissaoPorCarro" name="comissaoPorCarro" placeholder="Comissão por carro vendido">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Salário Final</button>
    </form>
    <br><br>

    <?php 
    // Verificando se os campos foram preenchidos
    if (isset($_POST['carrosVendidos']) && isset($_POST['totalVendas']) && isset($_POST['salarioFixo']) && isset($_POST['comissaoPorCarro'])) {
        $carrosVendidos = $_POST['carrosVendidos'];
        $totalVendas = $_POST['totalVendas'];
        $salarioFixo = $_POST['salarioFixo'];
        $comissaoPorCarro = $_POST['comissaoPorCarro'];

        // Chamando a função para calcular o salário final
        echo "<h3>Salário Final do Vendedor: R$ " . number_format(exercicio10($carrosVendidos, $totalVendas, $salarioFixo, $comissaoPorCarro), 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>


