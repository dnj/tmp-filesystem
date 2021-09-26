<?php

namespace dnj\Filesystem\Tmp;

use dnj\Filesystem\Local\File as LocalFile;

class File extends LocalFile
{
    use NodeTrait;

    public function __construct()
    {
        $this->setupTempPath();
        $this->touch();
    }
}
