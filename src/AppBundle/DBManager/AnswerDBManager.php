<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 7.11.17
 * Time: 17.37
 */

namespace AppBundle\DBManager;

use AppBundle\Entity\Answer;
use AppBundle\Entity\UserAnswer;
use Doctrine\Common\Persistence\ManagerRegistry;

class AnswerDBManager
{
    private $db;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->db = $doctrine->getManager();
    }

    public function AddAnswer(Answer $newAnswer)
    {
        
    }
}