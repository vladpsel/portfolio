<?php

declare(strict_types=1);

namespace Voopsc\Wild\DTO;

class CaseObjectMapper
{


    public function getPosts()
    {
        return $this->getData();
    }

    private function getData()
    {
        $file = APP_PUBLIC . '/upload/portfolio.php';

        if (!file_exists($file)) {
            return null;
        }
        return include $file;
    }

}
