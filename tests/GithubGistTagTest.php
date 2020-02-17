<?php

namespace DoubleThreeDigital\GithubGists\Tests;

use DoubleThreeDigital\GithubGists\Tags\GithubGistTag;
use Statamic\Facades\Antlers;

class GithubGistTagTest extends TestCase
{
    public $tag;

    public function setUp(): void
    {
        parent::setUp();

        $this->tag = (new GithubGistTag())
            ->setParser(Antlers::parser())
            ->setContext([]);
    }

    /** @test */
    public function gist_tag_has_been_registered()
    {
        $this->assertTrue(isset($this->app['statamic.tags']['gist']));
    }

    /** @test */
    public function can_use_gist_tag()
    {
        $this->tag->setParameters(['id' => '539d7cfb635f9408ffabed17d8b294df']);
        $usage = $this->tag->index();

        $this->assertIsString($usage);
        $this->assertStringContainsString('539d7cfb635f9408ffabed17d8b294df', $usage);
        $this->assertStringNotContainsString('?file=', $usage);
    }

    /** @test */
    public function can_use_gist_tag_with_specific_file()
    {
        $this->tag->setParameters(['id' => '97aedcbe6aeee730808996829fcae6a8', 'file' => 'gist-example-03.md']);
        $usage = $this->tag->index();

        $this->assertIsString($usage);
        $this->assertStringContainsString('97aedcbe6aeee730808996829fcae6a8', $usage);
        $this->assertStringContainsString('?file=', $usage);
    }
}
