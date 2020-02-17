<?php

namespace DoubleThreeDigital\GithubGists\Tags;

use Statamic\Tags\Tags;

class GithubGistTag extends Tags
{
    protected static $handle = 'gist';

    public function index()
    {
        $id = $this->getParam('id');
        $file = $this->getParam('file');

        return '<script src="https://gist.github.com/'.$id.'.js'.($file == '' ? '' : '?file='.$file).'"></script>';
    }
}
