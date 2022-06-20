<?php

declare(strict_types=1);

namespace Voopsc\Wild\Controller\API;

use Voopsc\Wild\Component\BaseController;
use Voopsc\Wild\DTO\CaseObjectMapper;
use Voopsc\Wild\Response\JSONData;

class PostController extends BaseController
{

    public function posts(): JSONData
    {
        $postsAsObj = new CaseObjectMapper();
        $posts = $postsAsObj->getPosts();

        return $this->json($posts);
    }
    
}