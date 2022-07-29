<?php

require_once ("./Entities/Pokemon.php");
class PokemonsManager {
    
    private $db;

    public function __construct() {
        $dbName = "Pokemon-pokédex";
        $port = 8888;
        $username = "root";
        $password = "root";

        try {
            $this->db = new PDO("mysql:host=localhost;dbname=$dbName;port=$port", $username, $password);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function create(Pokemon $pokemon)
    {
        $req = $this->db->prepare("INSERT INTO `pokemon` (number, name, description, type1, type2) VALUE (:number, :name, :description, :type1, :type2");

        $req->bindValue(":number", $pokemon->getNumber(), PDO::PARAM_INT);
        $req->bindValue(":name", $pokemon->getName(), PDO::PARAM_STR);
        $req->bindValue(":description", $pokemon->getDescription(), PDO::PARAM_STR);
        $req->bindValue(":type1", $pokemon->getType1(), PDO::PARAM_INT);
        $req->bindValue(":type2", $pokemon->getType2(), PDO::PARAM_INT);

        $req->execute();
    }

    public function get(int $id_pokemon)
    {
        $req = $this->db->prepare("SELECT * FROM `pokemon` WHERE id_poekmon = :id_pokemon");
        $req->bindValue(":id_pokemon", $id_pokemon, PDO::PARAM_INT);
        $data = $req->fetch();
        $pokemon = new Pokemon($data);
        return $pokemon;
    }

    public function getAll()
    {
        $pokemons = [];
        $req = $this->db->query("SELECT * FROM `pokemon` ORDER BY number");
        $datas = $req->fetchAll();
        foreach ($datas as $data) {
            $pokemon = new Pokemon($data);
            $pokemons[] = $pokemon;
        }
        $req->closeCursor()
;        return $pokemons;
    }

    public function getAllByString(string $input)
    {
        $pokemons = [];
        $req = $this->db->prepare("SELECT * FROM `pokemon` WHERE name LIKE :input ORDER BY number");
        $req->bindValue(":input", $input, PDO::PARAM_STR);
        $datas = $req->fetchAll();
        foreach ($datas as $data) {
            $pokemon = new Pokemon($data);
            $pokemons[] = $pokemon;
        }
        return $pokemons;
    }

    public function getAllByType(string $input)
    {
        /*if ($input instanceof Type) {
            # code...
        }*/
        $pokemons = [];
        $req = $this->db->prepare("SELECT * FROM `pokemon` WHERE type1 LIKE :input OR type2 LIKE :input ORDER BY number");
        $req->bindValue(":input", $input, PDO::PARAM_STR);
        $datas = $req->fetchAll();
        foreach ($datas as $data) {
            $pokemon = new Pokemon($data);
            $pokemons[] = $pokemon;
        }
        return $pokemons;
    }

    public function upDate(Pokemon $pokemon)
    {
        $req = $this->db->prepare("UPDATE `pokemon` SET number = :number, name = :name, description = :description, type1 = :type1, type2 = :type2");

        $req->bindValue(":number", $pokemon->getNumber(), PDO::PARAM_INT);
        $req->bindValue(":name", $pokemon->getName(), PDO::PARAM_STR);
        $req->bindValue(":description", $pokemon->getDescription(), PDO::PARAM_STR);
        $req->bindValue(":type1", $pokemon->getType1(), PDO::PARAM_INT);
        $req->bindValue(":type2", $pokemon->getType2(), PDO::PARAM_INT);
        
        $req->execute();
    }

    public function delete($id_pokemon)
    {
        $req = $this->db->prepare("DELETE FROM `pokemon` WHERE id_pokemon = :id_pokemon");
        $req->bindValue(":id_pokemon", $id_pokemon, PDO::PARAM_INT);
        $req->execute();
}
}