<?php
/**
 * Created by PhpStorm.
 * User: 302567762
 * Date: 14-11-2018
 * Time: 15:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="patienten")
 */
class Pantient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $voornaam;
    /**
     * @ORM\Column(type="string")
     */
    private $tussen_voegsel;
    /**
     * @ORM\Column(type="string")
     */
    private $achternaam;
    /**
     * @ORM\Column(type="string")
     */
    private $verzekeringskaartnummer;
    /**
     * @ORM\Column(type="string")
     */
    private $adres;
    /**
     * @ORM\Column(type="string")
     */
    private $postcode;
    /**
     * @ORM\Column(type="string")
     */
    private $stad;
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    /**
     * @ORM\Column(type="string")
     */
    private $mobiel_nummer;
    /**
     * @ORM\Column(type="string")
     */
    private $arts_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @param mixed $voornaam
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return mixed
     */
    public function getTussen_Voegsel()
    {
        return $this->tussen_voegsel;
    }

    /**
     * @param mixed $tussen_voegsel
     */
    public function setTussen_Voegsel($tussen_voegsel)
    {
        $this->tussen_voegsel = $tussen_voegsel;
    }

    /**
     * @return mixed
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * @param mixed $achternaam
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @return mixed
     */
    public function getVerzekeringskaartnummer()
    {
        return $this->verzekeringskaartnummer;
    }

    /**
     * @param mixed $verzekeringskaartnummer
     */
    public function setVerzekeringskaartnummer($verzekeringskaartnummer)
    {
        $this->verzekeringskaartnummer = $verzekeringskaartnummer;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @param mixed $adres
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getStad()
    {
        return $this->stad;
    }

    /**
     * @param mixed $stad
     */
    public function setStad($stad)
    {
        $this->stad = $stad;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMobielNummer()
    {
        return $this->mobiel_nummer;
    }

    /**
     * @param mixed $mobiel_nummer
     */
    public function setMobielNummer($mobiel_nummer)
    {
        $this->mobiel_nummer = $mobiel_nummer;
    }

    /**
     * @return mixed
     */
    public function getArts_Id()
    {
        return $this->arts_id;
    }

    /**
     * @param mixed $arts_id
     */
    public function setArts_Id($arts_id)
    {
        $this->arts_id = $arts_id;
    }


}