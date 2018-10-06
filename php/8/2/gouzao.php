<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 14:23
 */
class Book
{
    private $title;
    private $isbn;
    private $copies;

    function __construct($isbn)
    {
        $this->setIsbn($isbn);
        $this->getTitle();
        $this->getNumberCopies();
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getTitle()
    {
        $this->title = "Easy PHP Websites with the Zend Frameword";
        print "Title: $this->title<br>".PHP_EOL;
    }
    public function getNumberCopies(){
        $this->copies="5";
        print "Number copies avarlable:$this->copies<br/>".PHP_EOL;
    }
}
$book = new Book("sfddsf");