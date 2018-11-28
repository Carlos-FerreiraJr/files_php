<?php 

$conn = new PDO("mysql:dbname=<dbname>;host=<host>","<usuario>","<senha>");

$stmt = $conn->prepare(" select * from <tabela> order by <coluna>");
$stmt->execute();
//fatiado em 5 arrays
$result = $stmt->fetchAll(pdo::FETCH_ASSOC);

//foreach de array
foreach($result as $key => $resultado){
        echo "<div style='color:blue'>" .$key . "-" . $resultado. "</div>" ."</br>" ;
        foreach ($resultado as $key => $value) {
            echo "<i style='color:red'>" . $key  ."</i>". ":" . $value . "</br>";
        }
        echo "</br></br>";
    }