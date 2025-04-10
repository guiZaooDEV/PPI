<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "aluno";

        $conn = new mysqli ($servername, $username, $password);

        if($conn->connect_error){
            die("Connection Failed: ". $conn->connect_error);
        }

        echo "Conected successfully <br>";
        
        $sql = "INSERT INTO mydb.myguests(nome, idade) VALUES ('Edson', '25')";

        if ($conn->query($sql) == TRUE){
            echo "registro inserido com sucesso";
        }
        else{
            echo ("Erro: ". $sql . "<br>" . $conn->error);
        }

        $sql = "SELECT * FROM mydb.myGuests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "id: " .$row["id"]. " - Nome: ". $row["nome"] . " - Idade: ". $row["idade"]. "<br>";
            }
            
        }else{
            echo "0 Resultados";
        }
            
        $conn->close()
    ?> 
</body>
</html>