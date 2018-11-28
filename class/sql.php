<?php 

class sql extends PDO{
    private $conn;

    function __construct(){
        $this->conn = new PDO("mysql:dbname=<dbname>;host=<host>","<usuario>","<senha>");
    }

    function select($idcod){
        $stmt = $this->conn->prepare("select * from users where codCF = ? ");
        $codigo = $idcod;
        $stmt->execute([$codigo]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $resultados) {
            foreach ($resultados as $key => $value) {
                echo "<i style='color:red'>" . $key ."</i> ::" . $value . "</br>";
            }
        }
    }
}