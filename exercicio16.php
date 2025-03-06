<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Valores Inteiros</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um número (maior que zero):</label>
            <input type="number" class="form-control" id="numero" name="numero" min="1" placeholder="Digite um número maior que zero">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Imprimir Valores</button>
    </form>
    <br><br>

    <?php 
       
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            
           
            if ($numero > 0) {
                echo exercicio16($numero);
            } else {
                echo "Por favor, digite um número maior que zero.";
            }
        }
    ?>

</body>
</html>
