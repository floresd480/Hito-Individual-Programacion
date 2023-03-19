<?php
class ConexionMySQL {
    
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $base_de_datos = "hito individual";
    private $connection;

    public function __construct() {
        $this->connection = mysqli_connect($this->host, $this->usuario, $this->password, $this->base_de_datos);
        if(!$this->connection) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
        }
    }
    public function executeQuery($sql) { 
        $result = mysqli_query($this->connection, $sql);
        if(!$result) {
            die("Error al ejecutar la consulta: " . mysqli_error($this->connection));
        }
        return $result;
    }

    public function numRows($result) { 
        return mysqli_num_rows($result);
    }
    public function getDataSingle($sql) { 
        if($this->numRows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    public function executeInstruction($sql) { 
        $result = mysqli_query($this->connection, $sql);
        if(!$result) {
            die("Error al ejecutar la instrucción: " . mysqli_error($this->connection));
        }
        return mysqli_affected_rows($this->connection);
    }

    public function getLastId() { 
        return mysqli_insert_id($this->connection);
    }

    public function close() { 
        mysqli_close($this->connection);
    }
}
?>