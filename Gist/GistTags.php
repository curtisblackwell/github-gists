<?php

namespace Statamic\Addons\Gist;

use Statamic\Extend\Tags;

class GistTags extends Tags
{

    public function index() {

        $id = $this->getParam('id');
        $file = $this->getParam('file');

        return "<script src=\"http://gist.github.com/{$id}.js" . ($file == '' ? '' : '?file=' . $file) . "\"></script>";
        
    }

}
