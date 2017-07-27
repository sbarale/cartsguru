<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 7/27/17
 * Time: 10:00 AM
 */

namespace Guru;


class Data
{
    /*
     * A simple wrapper to make our lives easier. Yes I know it's silly
     * but for this case it'll help a lot.
     */
    public function __get($name)
    {
        if (!property_exists(__CLASS__, $name)) {
            return null;
        } else {
            return $this->$name;
        }
    }
}