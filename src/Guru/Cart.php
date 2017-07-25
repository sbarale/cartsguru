<?php

namespace Guru {
    /**
     * Class Cart
     *
     * @package Guru
     * @method Cart siteId               // SiteId is part of configuration
     * @method Cart id                   // Cart reference
     * @method Cart creationDate         // Date of the cart as string in json format (2016-07-26T08:21:25.689Z)
     *            (optional)
     * @method Cart totalATI              // Total price including taxes
     * @method Cart totalET               // Total price excluding taxes
     * @method Cart currency             // Currency, ISO code 						(optional)
     * @method Cart accountId            // Account id of the buyer (we advise to use the email address)
     * @method Cart ip                   // Visitor IP address 						(optional)
     * @method Cart recoverUrl           // Link to recover the cart (link to cart with security token included)
     *         (optional)
     * @method Cart civility             // Use string in this list : 'mister','madam','miss' 			(optional)
     * @method Cart lastname             // Lastname 							(optional)
     * @method Cart firstname            // Firstname
     * @method Cart email                // Email address
     * @method Cart homePhoneNumber      // Landline phone number 						(optional)
     * @method Cart mobilePhoneNumber    // Mobile phone number						(optional)
     * @method Cart phoneNumber          // Phone number of buyer, if you don’t know the kind of it 		(optional)
     * @method Cart country              // Country of the buyer (you can send country or country code)
     * @method Cart countryCode          // Country ISO code of the buyer (you can send country or country code)
     * @method Cart custom            // Any custom fields you want to send with the cart. Standard fields are language
     *         (ISO code), customerGroup and isNewCustomer (Boolean).
     */
    class Cart extends AbstractElement
    {
        protected $siteId            = "";   // SiteId is part of configuration
        protected $id                = "";   // Cart reference
        protected $creationDate      = "";   // Date of the cart as string in json format (2016-07-26T08:21:25.689Z) 	(optional)
        protected $totalATI          = 0;    // Total price including taxes
        protected $totalET           = 0;    // Total price excluding taxes
        protected $currency          = "";   // Currency, ISO code 						(optional)
        protected $accountId         = "";   // Account id of the buyer (we advise to use the email address)
        protected $ip                = "";   // Visitor IP address 						(optional)
        protected $recoverUrl        = "";   // Link to recover the cart (link to cart with security token included)	(optional)
        protected $civility          = "";   // Use string in this list : 'mister','madam','miss' 			(optional)
        protected $lastname          = "";   // Lastname 							(optional)
        protected $firstname         = "";   // Firstname
        protected $email             = "";   // Email address
        protected $homePhoneNumber   = "";   // Landline phone number 						(optional)
        protected $mobilePhoneNumber = "";   // Mobile phone number						(optional)
        protected $phoneNumber       = "";   // Phone number of buyer, if you don’t know the kind of it 		(optional)
        protected $country           = "";   // Country of the buyer (you can send country or country code)
        protected $countryCode       = "";   // Country ISO code of the buyer (you can send country or country code)
        protected $custom            = [];   // Any custom fields you want to send with the cart. Standard fields are language (ISO code), customerGroup and isNewCustomer (Boolean).
    }
}