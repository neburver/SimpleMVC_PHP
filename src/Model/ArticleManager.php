<?php
declare(strict_types=1);

namespace SimpleMVC\Model;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use PDO;

class ArticleManager
{
    private $pdo;

    public function __construct(PDO $pdo){
      $this->pdo = $pdo;
    }

    public function getAllArticles()
    {
      $sth = $this->pdo->prepare('SELECT * FROM Articles');
      $sth->execute();
      return $sth->fetchAll();
    }
}
