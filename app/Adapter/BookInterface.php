<?php
/**
 * 适配器模式,接口转换
 */

namespace App\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}