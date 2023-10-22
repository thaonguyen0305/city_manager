<?php
namespace model;
use PDO;

class CityModel
{
    public PDO $conn;

    function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }
    function getAllCity()
    {
        $sql = "SELECT id, name, nation FROM citys";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function delete($id)
    {
        $sql = "DELETE FROM citys WHERE id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
    function addCity($name, $nation, $area, $population, $GDP, $introduce)
    {
        $sql = "INSERT INTO citys(name, nation, area, population, GDP, introduce) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $nation);
        $stmt->bindParam(3,$area);
        $stmt->bindParam(4,$population);
        $stmt->bindParam(5,$GDP);
        $stmt->bindParam(6,$introduce);
        $stmt->execute();
    }
    function findCityById($id)
    {
        $sql = "SELECT * FROM citys WHERE id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id); 
        $stmt->execute();
        return $stmt->fetch();
    }
    function updateCity($name, $nation, $area, $population, $GDP, $introduce, $id)
    {
        $sql = "UPDATE citys SET name = ?, nation = ?, area = ?, population = ?, GDP = ?, introduce = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $nation);
        $stmt->bindParam(3, $area);
        $stmt->bindParam(4, $population);
        $stmt->bindParam(5, $GDP);
        $stmt->bindParam(6, $introduce);
        $stmt->bindParam(7, $id);
        $stmt->execute();
    }

    public function InfoCity($id)
    {
        $sql = "SELECT * FROM citys WHERE id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id); 
        $stmt->execute();
        return $stmt->fetch();
    }
}