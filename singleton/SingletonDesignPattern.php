<?php

class dataBase
{
    /**
     * @instance is used to store the instance of the class
     */
    static private $instance;

    /**
     * @name
     * test variable
     */
    private $name;

    /**
     * @age
     * test variable
     */
    private $age;

    /**
     * we make the construstor private in order to now create an instance from the class directly
     */
    private function __construct(){}

    /**
     * this is the method that we use to create an instance of the class
     */
    static public function getInstance()
    {
        if(SELF::$instance == NULL)
        {
           return SELF::$instance = new dataBase();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}


$instance = dataBase::getInstance();
$instance->setName("oussama");
$instance->setAge(20);


echo $instance->getName();
echo "\n";
echo $instance->getAge();
echo "\n";


