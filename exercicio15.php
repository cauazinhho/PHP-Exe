<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Tabuada</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="numero" class="form-label">Digite um número (entre 1 e 10):</label>
            <input type="number" class="form-control" id="numero" name="numero" min="1" max="10" placeholder="Digite um número entre 1 e 10">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Tabuada</button>
    </form>
    <br><br>

    <?php 

        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            
           
            if ($numero >= 1 && $numero <= 10) {
                echo exercicio15($numero);
            } else {
                echo "Por favor, digite um número entre 1 e 10.";
            }
        }
    ?>

</body>
</html>
