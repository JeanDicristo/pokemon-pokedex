<?php

class Type {
    private $id_type;
    private $name;
    private $color;

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
      

    /** STAR - GETTERS AND SETTERS **/
    public function getId_type()
    {
        return $this->id_type;
    }

    public function setId_type($id_type)
    {
        $this->id_type = $id_type;

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


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}