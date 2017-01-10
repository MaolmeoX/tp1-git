<?php
/**
 * Created by PhpStorm.
 * User: MaolmeoX
 * Date: 10/01/2017
 * Time: 11:59
 */

namespace src;


class Poney
{
    private $taille;
    private $couleur;
    private $nbJambes;
    private $age;

    function __construct()
    {
        // TODO: Implement __construct() method.
    }

    /**
     * @param mixed $taille
     */
    public function setTaille(Int $taille)
    {
        $this->taille = $taille;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur(String $couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @param mixed $nbJambes
     */
    public function setNbJambes(Int $nbJambes)
    {
        $this->nbJambes = $nbJambes;
    }

    /**
     * @param mixed $age
     */
    public function setAge(Int $age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getNbJambes()
    {
        return $this->nbJambes;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}