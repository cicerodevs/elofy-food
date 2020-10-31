<?php

namespace App\Model;

use PDOException;

class User
{
    public function all()
    {
        $condition = '';

        $filterRadio = isset($_POST['exampleRadios']) ? $_POST['exampleRadios'] : 0;
        if ($filterRadio == 2) {
            $condition = "WHERE altura >= '1,80'";
        } else if ($filterRadio == 3) {
            $condition = "WHERE altura >= '1,60' AND altura <= '1,79'";
        } else if ($filterRadio == 4) {
            $condition = "WHERE altura <= '1,59'";
        } else if ($filterRadio == 5) {
            $condition = "WHERE peso >= 90";
        } else if ($filterRadio == 6) {
            $condition = "WHERE peso >= 70 AND peso <= 89";
        } else if ($filterRadio == 7) {
            $condition = "WHERE peso <= 69";
        } else if ($filterRadio == 8) {
            $condition = "WHERE lactose = 1"; // 0 => 'sim', para intolerancia a lactose
        } else if ($filterRadio == 9) {
            $condition = "WHERE atleta = 1"; // 1 => 'sim', para atleta
        }

        try {
            $sql = "SELECT * FROM usuario $condition";
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $results;

                echo $results;
            } else {
                return [];
            }
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function saveCSV()
    {
        try {
            if (is_uploaded_file($_FILES['file-csv']['tmp_name'])) {

                $csvFile = fopen($_FILES['file-csv']['tmp_name'], 'r');

                // Skip the firt line
                fgetcsv($csvFile);

                // Parse data from csv file line by line
                while (($line = fgetcsv($csvFile, 1000, ';')) !== FALSE) {
                    $id = $line[0];
                    $nome = $line[1];
                    $altura = $line[2];
                    $lactose = $line[3];
                    $peso = $line[4];
                    $atleta = $line[5];

                    $sql = 'INSERT INTO usuario (id, nome_usuario, altura, lactose, peso, atleta) VALUES(:id, :nome_usuario, :altura, :lactose, :peso, :atleta)';
                    $stmt = Connection::getConn()->prepare($sql);
                    $stmt->execute(array(
                        ':id'           => $id,
                        ':nome_usuario' => $nome,
                        ':altura'       => $altura,
                        ':lactose'      => $lactose,
                        ':peso'         => $peso,
                        ':atleta'       => $atleta
                    ));
                }
                fclose($csvFile);
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function store()
    {
        try {
            $sql = 'INSERT INTO usuario (nome_usuario, altura, lactose, peso, atleta) VALUES(:nome_usuario, :altura, :lactose, :peso, :atleta)';
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->execute(array(
                ':nome_usuario' => addslashes($_POST['nome']),
                ':altura'       => addslashes($_POST['altura']),
                ':lactose'      => addslashes($_POST['lactose']),
                ':peso'         => addslashes($_POST['peso']),
                ':atleta'       => addslashes($_POST['atleta'])
            ));
        } catch (\PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $id = isset($_POST['id']) ? $_POST['id'] : 0;
            if (!empty($id)) {
                $sql = 'UPDATE usuario SET  nome_usuario = :nome_usuario, altura = :altura, lactose = :lactose, peso = :peso, atleta= :atleta WHERE id = :id';
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->execute(array(
                    ':id'           => $id,
                    ':nome_usuario' => addslashes($_POST['nome']),
                    ':altura'       => addslashes($_POST['altura']),
                    ':lactose'      => addslashes($_POST['lactose']),
                    ':peso'         => addslashes($_POST['peso']),
                    ':atleta'       => addslashes($_POST['atleta'])
                ));
            }
        } catch (\PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            if (!empty($id)) {
                $sql = 'DELETE FROM usuario WHERE id = :id';
                $stmt = Connection::getConn()->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }
        } catch (\PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
