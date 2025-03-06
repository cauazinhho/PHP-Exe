<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Contagem de Valores Negativos</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="valores" class="form-label">Digite 10 valores:</label>
            <?php
       
            for ($i = 1; $i <= 10; $i++) {
                echo "<input type='number' class='form-control' name='valor$i' placeholder='Valor $i'><br><br>";
            }
            ?>
        </div>

        <button type="submit" class="btn btn-primary">Contar Valores Negativos</button>
    </form>
    <br><br>

    <?php 
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $negativos = 0;

             
            for ($i = 1; $i <= 10; $i++) {
                if (isset($_POST["valor$i"])) {
                    $valor = $_POST["valor$i"];
                    
                     
                    if ($valor < 0) {
                        $negativos++;
                    }
                }
            }

            
            echo "Quantidade de valores negativos: $negativos";
        }
    ?>

</body>
</html>
