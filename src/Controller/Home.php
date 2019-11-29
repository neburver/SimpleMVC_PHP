<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleManager;

class Home implements ControllerInterface
{
    protected $plates;
    protected $articles;

    public function __construct(Engine $plates, ArticleManager $articleManager)
    {
        $this->plates = $plates;
        $this->articles = $articleManager;
    }

    public function execute(ServerRequestInterface $request)
    {
        echo $this->plates->render('home', ['userArticles' => $this->articles->getAllArticles()]);
    }
}
