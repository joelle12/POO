<?php 

namespace Entity;

class Actor
{
    private $id;
    public $lastname;
    public $firstname;
    public $birthday;

    public function getId()
    {
        return $this->id;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getAge()
    {
        $now = new \DateTime();
        $birthday = new \DateTime($this->birthday);

        // Année - année
        $ageAverage = $now->format('Y') - $birthday->format('Y');
        // Âge exact
        $age = $now->diff($birthday)->y;

        return $age;
    }
}

?>

