<?php

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 7/25/17
 * Time: 4:39 PM
 */

namespace Guru {

    class Item extends AbstractElement
    {
        //Details of each items

        protected $id       = ""; // SKU or product id
        protected $label    = "";        // Designation
        protected $quantity = 1;        // Count
        protected $totalATI = 0;        // Total price included taxes
        protected $totalET  = 0;        // Total price excluded taxes
        protected $url      = "";        // URL of product sheet
        protected $imageUrl = "";        // Image URL of product, size should be min 150*150, max 180*180
        protected $universe = "";            // Main category of the product 					(optional)
        protected $category = "";        // Sub category of the product 					(optional)

    }
}