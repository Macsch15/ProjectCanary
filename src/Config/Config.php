<?php

namespace Canary\Config;

use Canary\Exceptions\NotFoundException;

class Config
{
    /**
     * Get config value by key and section
     *
     * @param $section
     * @param $key
     * @return mixed
     */
    public function get($section, $key = null)
    {
        try {
            if (file_exists(appRootPath() . '/config/' . $section . '.php') === false) {
                throw new NotFoundException('Config file "' . $section . '" not found');
            }

            $config = array_merge(require appRootPath() . '/config/' . $section . '.php');

            if ($key === null) {
                return $config;
            }

            if (isset($config[$key])) {
                return $config[$key];
            }

            throw new NotFoundException('Key "' . $key . '" not found in config');
        } catch (NotFoundException $exception) {
            die($exception->getMessage());
        }
    }
}
