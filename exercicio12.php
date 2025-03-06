<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Calculo de Custo das Maçãs</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="quantidade" class="form-label">Número de maçãs compradas:</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Digite o número de maçãs">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Custo</button>
    </form>
    <br><br>

    <?php 
        
        if (isset($_POST['quantidade'])) {
            $quantidade = $_POST['quantidade'];
   
            echo "O custo total da compra é: R$ ". exercicio12($quantidade);
        }
    ?>

</body>
</html>
