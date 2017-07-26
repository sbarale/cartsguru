<?php

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 7/25/17
 * Time: 4:39 PM
 */

namespace Guru {
    /**
     * Class Order
     *
     * @package Guru
     * @method Order siteId($siteId)                         // SiteId is part of configuration
     * @method Order id($id)                                 // Order reference, the same display to the buyer
     * @method Order cartId($cartId)                         // Cart reference, source of the order (optional)
     * @method Order creationDate($creationDate)             // Date of the order as($as)string in json format
     *                                                          (2016-07-26T08:21:25.689Z) (optional)
     * @method Order totalATI($totalATI)                     // Amount included taxes and excluded shipping
     * @method Order totalET($totalET)                       // Amount excluded taxes and excluded shipping
     * @method Order currency($currency)                     // Currency, ISO code                         (optional)
     * @method Order paymentMethod($paymentMethod)           // Payment method used                        (optional)
     * @method Order state($state)                           // Status of the order
     * @method Order ip($ip)                                 // Visitor ip address                         (optional)
     *
     * @method Order accountId($accountId)                   // Account id of the buyer (use same identifier as Carts)
     * @method Order civility($civility)                     // Use string in this list : ‘mister','madam','miss'
     *                                                          (optional)
     * @method Order lastname($lastname)                     // Lastname of the buyer                      (optional)
     * @method Order firstname($firstname)                   // Firstname of the buyer
     * @method Order email($email)                           // Email address of the buyer
     * @method Order homePhoneNumber($homePhoneNumber)       // Landline phone number of buyer
     *         (optional)
     * @method Order mobilePhoneNumber($mobilePhoneNumber)   // Mobile phone number of buyer
     *         (optional)
     * @method Order country($country)                       // Country of the buyer (you can send country or country
     *         code)
     * @method Order countryCode($countryCode)               // Country ISO code of the buyer (you can send country or
     *         country code)
     * @method Order custom($custom)                         // Any custom fields you want to send with the cart.
     *         Standard fields are language
     *                                                          (ISO code), customerGroup and isNewCustomer (Boolean)
     *
     * @method Order items[]($items[])                       // Details of each items
     */
    class Order extends AbstractElement
    {

        protected $siteId;           // SiteId is part of configuration
        protected $id;               // Order reference, the same display to the buyer
        protected $cartId;           // Cart reference, source of the order 				(optional)
        protected $creationDate;     // Date of the order as string in json format (2016-07-26T08:21:25.689Z) (optional)
        protected $totalATI;         // Amount included taxes and excluded shipping
        protected $totalET;          // Amount excluded taxes and excluded shipping
        protected $currency;         // Currency, ISO code 						(optional)
        protected $paymentMethod;    // Payment method used 						(optional)
        protected $state;            // Status of the order
        protected $ip;               // Visitor ip address 						(optional)

        protected $accountId;        // Account id of the buyer (use same identifier as Carts)
        protected $civility;         // Use string in this list : ‘mister','madam','miss' 			(optional)
        protected $lastname;         // Lastname of the buyer 						(optional)
        protected $firstname;        // Firstname of the buyer
        protected $email;            // Email address of the buyer
        protected $homePhoneNumber;  // Landline phone number of buyer 					(optional)
        protected $mobilePhoneNumber;// Mobile phone number of buyer  					(optional)
        protected $country;          // Country of the buyer (you can send country or country code)
        protected $countryCode;      // Country ISO code of the buyer (you can send country or country code)
        protected $custom = [];      // Any custom fields you want to send with the cart. Standard fields are language (ISO code), customerGroup and isNewCustomer (Boolean)

        protected $items = [];        //Details of each items


    }
}