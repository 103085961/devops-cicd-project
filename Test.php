<?php

class AuthorTest
{
    public $author_name;

    public function getAuthorName()
    {
        return trim("$this->author_name");
    }
}
