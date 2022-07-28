<?php

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function testAuthorName()
    {
        require('Test.php');

        $project = new AuthorTest;

        $project->author_name = "QuanTo";

        $this->assertEquals("QuanTo", $project->getAuthorName());
    }
    
    /**
     * @test
     */
}
