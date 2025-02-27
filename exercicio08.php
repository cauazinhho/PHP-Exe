<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Salario Mensal</title>
</head>
<body>
    <?php include('funcoes.php') ?>
    <form method="POST"> 
      <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Total de eleitores: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="eleitores" placeholder="Total de Eleitores">
        </div><br><br>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos brancos </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="brancos" placeholder="Votos brancos">
        </div><br><br>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos validos </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="validos" placeholder="Votos validos">
        </div><br><br>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votos Nulos </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nulos" placeholder="Votos nulos">
        </div><br><br>

        //--------------------------------------------

        <button type="submit" class="btn btn-primary">Calcular
        <?php
            //Coletando os números dos campos
            if(isset($_POST['eleitores'])&& isset($_POST['nulos'] && isset($_POST['validos']) &&
             $_POST ['brancos'])) {
                 $eleitores = $_POST['eleitores']
                 $brancos = $_POST['brancos']
                 $validos = $_POST['validos'];
                 $nulos = $_POST['nulos'];
             }


        ?>
    </button>
</form>
        <br><br>
         <?php 
             
        echo exercicio07($brancos, $validos, $nulos, $eleitores);

        ?>

</body>
</html>

