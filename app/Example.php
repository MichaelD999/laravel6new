<?php


namespace App;


class Example
{
    protected $apikey;

    /**
     * Example constructor.
     */

    public function __construct($apikey)
    {
        $this->apikey = $apikey;

    }

//    protected $collaborator;
//
//    protected $foo;
//
//    public function __construct(Collaborator $collaborator, $foo)
//    {
//        $this->collaborator = $collaborator;
//        $this->foo = $foo;
//    }

    public function handle()
    {
        die('it works');
    }

}
