<?php

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 7/25/17
 * Time: 4:55 PM
 */

namespace Guru {

    abstract class AbstractElement
    {
        // Define the fieds in the subclass

        // protected $id       = ""; // SKU or product id
        // protected $label    = "";        // Designation
        // protected $quantity = 1;        // Count
        // protected $totalATI = 0;        // Total price included taxes
        // protected $totalET  = 0;        // Total price excluded taxes
        // protected $url      = "";        // URL of product sheet
        // protected $imageUrl = "";        // Image URL of product, size should be min 150*150, max 180*180
        // protected $universe = "";            // Main category of the product 					(optional)
        // protected $category = "";        // Sub category of the product 					(optional)


        public function get($object = null)
        {
            $retval = [];
            foreach ($this as $property_name => $property_value) {
                $retval[$property_name] = $property_value;
            }

            return $retval;
        }

        /**
         * @param $name
         * @param $arguments
         * @return $this
         */
        public function __call($name, $arguments)
        {
            /*
             * If the value passed is empty or null, let's not add it to the array
             * that way we can pass everything that comes in from the page and the
             * object will handle it properly so when it sends to Cart Guru's API,
             * it doesn't send empty values and overrides whatever has been stored
             * already.
             */
            $data = $arguments[0];
            if (!is_null($data) && !empty($data)) {
                $this->$name = $arguments[0];
            }

            return $this;
        }


    }

}