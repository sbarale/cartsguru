<?php

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 7/25/17
 * Time: 4:39 PM
 */

namespace Guru {
    /**
     * Class Item
     *
     * @package Guru
     * @method Item id($id)                // SKU or product id
     * @method Item label($label)          // Designation
     * @method Item quantity($quantity)    // Count
     * @method Item totalATI($totalATI)    // Total price included taxes
     * @method Item totalET($totalET)      // Total price excluded taxes
     * @method Item url($url)              // URL of product sheet
     * @method Item imageUrl($url)         // Image URL of product, size should be min 150*150, max 180*180
     * @method Item universe($universe)    // Main category of the product 					(optional)
     * @method Item category($category)    // Sub category of the product 					(optional)
     */
    class Item extends AbstractElement
    {

        protected $id       = "";        // SKU or product id
        protected $label    = "";        // Designation
        protected $quantity = 1;         // Count
        protected $totalATI = 0;         // Total price included taxes
        protected $totalET  = 0;         // Total price excluded taxes
        protected $url      = "";        // URL of product sheet
        protected $imageUrl = "";        // Image URL of product, size should be min 150*150, max 180*180
        protected $universe = "";        // Main category of the product 					(optional)
        protected $category = "";        // Sub category of the product 					(optional)

    }
}