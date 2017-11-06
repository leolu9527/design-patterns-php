<?php

/**
 * test 适配器模式
 */
use PHPUnit\Framework\TestCase;
use App\Adapter\EBookAdapter;
use App\Adapter\Book;
use App\Adapter\IReader;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        //
        $kindle = new IReader();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}