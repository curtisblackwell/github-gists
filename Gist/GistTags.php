<?php

namespace Statamic\Addons\Gist;

use Statamic\Extend\Tags;

class GistTags extends Tags
{
    public function __call($method, $params) {
        return $this->index($method);
    }

    public function index($id = null) {
        $id = $this->getParam('id', $id);
        $file = $this->getParam('file');

        return "<script src=\"https://gist.github.com/" . $id . ".js" . ($file == '' ? '' : '?file=' . $file) . "\"></script>";
    }
}
