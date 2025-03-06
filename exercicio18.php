<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'cabecalho.php'; ?>
    <title>Soma de Números Inferiores a 40</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <div class="mb-3">
            <label for="valores" class="form-label">Digite 10 números:</label>
            <?php
             
            for ($i = 1; $i <= 10; $i++) {
                echo "<input type='number' class='form-control' name='valor$i' placeholder='Número $i'><br><br>";
            }
            ?>
  
