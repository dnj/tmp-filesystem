<?php

namespace dnj\Filesystem\Tmp;

trait NodeTrait
{
    public function __destruct()
    {
        $this->delete();
    }

    protected function setupTempPath(): void
    {
        $chars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789';
        $this->directory = sys_get_temp_dir();
        do {
            $this->basename = substr(str_shuffle($chars), 0, rand(5, 10));
        } while ($this->exists());
    }
}
