<?php

namespace DoubleThreeDigital\GithubGists;

use DoubleThreeDigital\GithubGists\Tags\GithubGistTag;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        GithubGistTag::class,
    ];
}
