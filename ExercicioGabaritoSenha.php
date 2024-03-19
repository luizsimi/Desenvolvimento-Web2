<!DOCTYPE html> <html lang="pt-BR"> <head> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Senha</title>
</head>
<body>
    <?php
 
    if(isset($_POST['senha'])) {
        
    $senha = $_POST['senha'];
 
     
    if($senha == "senha_correta") {
            echo "<p>Senha correta!</p>";
        } else {
        echo "<p>Senha incorreta!</p>";
        }
    } else {
       
    echo "<p>Erro: Nenhuma senha foi enviada.</p>";
    }
    ?>
</body>
</html>
