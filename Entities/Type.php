<?php

class Type {
    private $id_type;
    private $name;
    private $color;

    // $type = new Type(["id" => 1, "name" => "Electrik", "color" => "yellow"])

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data): void {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key); // setId, setName, setColor
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


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

    public function setName(string $name)
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