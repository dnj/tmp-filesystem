<?php

namespace dnj\Filesystem\Tmp;

use dnj\Filesystem\Local\Directory as LocalDirectory;

class Directory extends LocalDirectory
{
    use NodeTrait;

    public function __construct()
    {
        $this->setupTempPath();
        $this->make();
    }
}
