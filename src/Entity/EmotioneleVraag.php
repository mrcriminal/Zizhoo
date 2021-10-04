<?php

namespace App\Entity;

use App\Repository\EmotioneleVraagRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmotioneleVraagRepository::class)
 */
class EmotioneleVraag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vragen;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $antwoord1;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $antwoord2;


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $antwoord3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVragen(): ?string
    {
        return $this->vragen;
    }

    public function setVragen(string $vragen): self
    {
        $this->vragen = $vragen;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAntwoord1()
    {
        return $this->antwoord1;
    }

    /**
     * @param mixed $antwoord1
     */
    public function setAntwoord1($antwoord1): void
    {
        $this->antwoord1 = $antwoord1;
    }

    /**
     * @return mixed
     */
    public function getAntwoord2()
    {
        return $this->antwoord2;
    }

    /**
     * @param mixed $antwoord2
     */
    public function setAntwoord2($antwoord2): void
    {
        $this->antwoord2 = $antwoord2;
    }

    /**
     * @return mixed
     */
    public function getAntwoord3()
    {
        return $this->antwoord3;
    }

    /**
     * @param mixed $antwoord3
     */
    public function setAntwoord3($antwoord3): void
    {
        $this->antwoord3 = $antwoord3;
    }



}
