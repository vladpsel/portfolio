<?php

declare(strict_types=1);

namespace Voopsc\Wild\Controller;

use Voopsc\Wild\Component\BaseController;
use Voopsc\Wild\Component\LangComponent;
use Voopsc\Wild\Response\View;

class PortfolioController extends BaseController
{

    public function index(): View
    {
        $lang = new LangComponent();
        $content = $lang->getDictionary(APP_LANG . '.php');
        $content['vue'] = true;


        return $this->render('user/portfolio.php', [
            ['content' => $content],
        ]);
        
    }
    
}