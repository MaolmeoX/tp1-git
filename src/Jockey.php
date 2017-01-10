<?php
/**
 * Created by PhpStorm.
 * User: MaolmeoX
 * Date: 10/01/2017
 * Time: 12:05
 */

namespace src;


class Jockey
{
    private $age;
    private $taille;
    private $couleurYeux;
    private $nbVictoires;
    private $nbDefaites;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
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
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleurYeux()
    {
        return $this->couleurYeux;
    }

    /**
     * @param mixed $couleurYeux
     */
    public function setCouleurYeux($couleurYeux)
    {
        $this->couleurYeux = $couleurYeux;
    }

    /**
     * @return mixed
     */
    public function getNbVictoires()
    {
        return $this->nbVictoires;
    }

    /**
     * @param mixed $nbVictoires
     */
    public function setNbVictoires($nbVictoires)
    {
        $this->nbVictoires = $nbVictoires;
    }

    /**
     * @return mixed
     */
    public function getNbDefaites()
    {
        return $this->nbDefaites;
    }

    /**
     * @param mixed $nbDefaites
     */
    public function setNbDefaites($nbDefaites)
    {
        $this->nbDefaites = $nbDefaites;
    }


}