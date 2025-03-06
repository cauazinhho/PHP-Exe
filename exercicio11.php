<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Calcular Idade em Dias</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="anos" class="form-label">Anos:</label>
            <input type="number" class="form-control" id="anos" name="anos" placeholder="Digite sua idade em anos">
        </div><br><br>
        
        <div class="mb-3">
            <label for="meses" class="form-label">Meses:</label>
            <input type="number" class="form-control" id="meses" name="meses" placeholder="Digite seus meses de idade">
        </div><br><br>
        
        <div class="mb-3">
            <label for="dias" class="form-label">Dias:</label>
            <input type="number" class="form-control" id="dias" name="dias" placeholder="Digite seus dias de idade">
        </div><br><br>

        <button type="submit" class="btn btn-primary">Calcular Idade em Dias</button>
    </form>
    <br><br>

    <?php 
        if (isset($_POST['anos']) && isset($_POST['meses']) && isset($_POST['dias'])) {
            $anos = $_POST['anos'];
            $meses = $_POST['meses'];
            $dias = $_POST['dias'];

            // Chama a função para calcular a idade em dias
            echo "A sua idade em dias é: " . exercicio11($anos, $meses, $dias);
        }
    ?>

</body>
</html>
