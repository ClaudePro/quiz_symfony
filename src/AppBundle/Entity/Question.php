<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=true)
     */
    public $idCategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    public $question;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;


}
