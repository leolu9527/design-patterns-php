<?php

/**
 * 这是一个适配器
 */
namespace App\Adapter;

use App\Adapter\BookInterface;
use App\Adapter\EBookInterface;

class EBookAdapter implements BookInterface
{

    protected $eBook;


    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }


    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}