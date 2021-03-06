<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Answer")
 * @ORM\Entity()
 */
class Answer
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=false)
     */
    private $nameOfAnswer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $right;

    /**
     * @ORM\OneToOne(targetEntity="Question", inversedBy="Answer")
     * @ORM\JoinColumn(name="Question_id", referencedColumnName="id")
     */
    private $idQuestion;

    public function getId(): int
    {
        return $this->id;
    }

    public function setNameOfQuiz(string $nameOfAnswer)
    {
        $this->nameOfAnswer=$nameOfAnswer;
    }

    public function getNameOfQuiz()
    {
        return $this->nameOfAnswer;
    }

    public function setRight(string $right)
    {
        $this->right=$right;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function setIdQuestion(string $idQuestion)
    {
        $this->idQuestion=$idQuestion;
    }

    public function getIdQuestion()
    {
        return $this->idQuestion;
    }
}