<?php

class Pokemon {

    private $id_pokemon;
    private $number;
    private $name;
    private $description;
    private $type1;
    private $type2;
    private $image;

    public function __construct(array $data) {
        $this->hydrate($data);
    }
    
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
          // On récupère le nom du setter correspondant à l'attribut
          $method = 'set'.ucfirst($key);
              
          // Si le setter correspondant existe.
          if (method_exists($this, $method)) {
            // On appelle le setter
            $this->$method($value);
          }
        }
      }

    /** START - GETTERS AND SETTERS **/ 
    public function getId_pokemon()
    {
        return $this->id_pokemon;
    }

    public function setId_pokemon($id_pokemon)
    {
        $this->id_pokemon = $id_pokemon;

        return $this;
    }


    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        if (is_int($number) < 905) {
            $this->number = $number;
        }
        return $this;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        if (is_string($description) && strlen($description) > 5 && strlen($description) < 1000) {
            $this->description = $description;
        }
        return $this;
    }


    public function getType1()
    {
        return $this->type1;
    }

    public function setType1($type1)
    {
        $this->type1 = $type1;

        return $this;
    }

    public function getType2()
    {
        return $this->type2;
    }

    public function setType2($type2)
    {
        $this->type2 = $type2;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    /** END - GETTERS AND SETTERS **/ 
}
    
