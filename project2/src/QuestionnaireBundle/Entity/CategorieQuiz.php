<?php

namespace QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieQuiz
 *
 * @ORM\Table(name="categorie_quiz")
 * @ORM\Entity(repositoryClass="QuestionnaireBundle\Repository\CategorieQuizRepository")
 */
class CategorieQuiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return CategorieQuiz
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     *@ORM\ManyToOne(targetEntity="Evaluation")
     * @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     */

    private $evaluation;

    /**
     * @return mixed
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param mixed $evaluation
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    }
}

