<?php

namespace League\Flysystem\Adapter\Polyfill;

use League\Flysystem\Config;

trait StreamedCopyTrait
{
    /**
     * Copy a file.
     *
     * @param string $path
     * @param string $newpath
     *
     * @return bool
     */
    public function copy($path, $newpath)
    {
        $response = $this->readStream($path);

        if ($response === false || ! is_resource($response['stream'])) {
            return false;
        }

        $result = $this->writeStream($newpath, $response['stream'], new Config());

        if ($result !== false && is_resource($response['stream'])) {
            fclose($response['stream']);
        }

        return $result !== false;
    }

    // Required abstract method

    /**
<<<<<<< HEAD
     * @param string $path
     *
=======
     * @param  string   $path
>>>>>>> 17e8ade58de7d6c2fad2169002629c2856f06f11
     * @return resource
     */
    abstract public function readStream($path);

    /**
<<<<<<< HEAD
     * @param string   $path
     * @param resource $resource
     * @param Config   $config
     *
=======
     * @param  string   $path
     * @param  resource $resource
     * @param  Config   $config
>>>>>>> 17e8ade58de7d6c2fad2169002629c2856f06f11
     * @return resource
     */
    abstract public function writeStream($path, $resource, Config $config);
}
