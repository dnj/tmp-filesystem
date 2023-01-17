<?php

namespace dnj\Filesystem\Tmp;

use dnj\Filesystem\Contracts\IFile;
use dnj\Filesystem\Local\File as LocalFile;

class File extends LocalFile
{
    use NodeTrait;

    /**
     * @param callable(LocalFile):mixed $callback
     */
    public static function insureLocal(IFile $file, $callback = null): LocalFile
    {
        if ($file instanceof LocalFile) {
            $localFile = $file;
        } else {
            $localFile = new self();
            if ($file->exists()) {
                $file->copyTo($localFile);
            }
        }
        $originalMd5 = $file->exists() ? $localFile->md5() : null;
        if (null !== $callback) {
            call_user_func($callback, $localFile);
            if ($localFile !== $file) {
                if ($localFile->exists()) {
                    if ($originalMd5 !== $localFile->md5()) {
                        $localFile->copyTo($file);
                    }
                } else {
                    $file->delete();
                }
            }
        }

        return $localFile;
    }

    public function __construct()
    {
        $this->setupTempPath();
        $this->touch();
    }
}
