<?php
/**
 * User: waitfor9527
 */

namespace App\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}