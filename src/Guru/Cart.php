<?php

namespace Guru {
    /**
     * Class Cart
     *
     * @package Guru
     * @method $siteId               // SiteId is part of configuration
     * @method $id                   // Cart reference
     * @method $creationDate         // Date of the cart as string in json format (2016-07-26T08:21:25.689Z)
     *            (optional)
     * @method totalATI              // Total price including taxes
     * @method totalET               // Total price excluding taxes
     * @method currency             // Currency, ISO code 						(optional)
     * @method accountId            // Account id of the buyer (we advise to use the email address)
     * @method ip                   // Visitor IP address 						(optional)
     * @method recoverUrl           // Link to recover the cart (link to cart with security token included)
     *         (optional)
     * @method civility             // Use string in this list : 'mister','madam','miss' 			(optional)
     * @method lastname             // Lastname 							(optional)
     * @method firstname            // Firstname
     * @method email                // Email address
     * @method homePhoneNumber      // Landline phone number 						(optional)
     * @method mobilePhoneNumber    // Mobile phone number						(optional)
     * @method phoneNumber          // Phone number of buyer, if you don’t know the kind of it 		(optional)
     * @method country              // Country of the buyer (you can send country or country code)
     * @method countryCode          // Country ISO code of the buyer (you can send country or country code)
     * @method custom            // Any custom fields you want to send with the cart. Standard fields are language
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