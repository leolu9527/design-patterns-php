<?php

namespace App\Adapter;

use App\Adapter\EBookInterface;

class IReader implements EBookInterface
{
    private $page = 1;

    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}