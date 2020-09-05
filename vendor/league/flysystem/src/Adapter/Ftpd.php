<?php

namespace League\Flysystem\Adapter;

class Ftpd extends Ftp
{
    /**
     * @inheritdoc
     */
    public function getMetadata($path)
    {
        if ($path === '') {
            return ['type' => 'dir', 'path' => ''];
        }

<<<<<<< HEAD
        if (@ftp_chdir($this->getConnection(), $path) === true) {
            $this->setConnectionRoot();

            return ['type' => 'dir', 'path' => $path];
        }

        $object = ftp_raw($this->getConnection(), 'STAT ' . $this->escapePath($path));

        if ( ! $object || count($object) < 3) {
=======
        if ( ! ($object = ftp_raw($this->getConnection(), 'STAT ' . $path)) || count($object) < 3) {
>>>>>>> 17e8ade58de7d6c2fad2169002629c2856f06f11
            return false;
        }

        if (substr($object[1], 0, 5) === "ftpd:") {
            return false;
        }

        return $this->normalizeObject($object[1], '');
    }

    /**
     * @inheritdoc
     */
    protected function listDirectoryContents($directory, $recursive = true)
    {
<<<<<<< HEAD
        $listing = ftp_rawlist($this->getConnection(), $this->escapePath($directory), $recursive);
=======
        $listing = ftp_rawlist($this->getConnection(), $directory, $recursive);
>>>>>>> 17e8ade58de7d6c2fad2169002629c2856f06f11

        if ($listing === false || ( ! empty($listing) && substr($listing[0], 0, 5) === "ftpd:")) {
            return [];
        }

        return $this->normalizeListing($listing, $directory);
    }
}
