<?php
/**
 * Carts Guru
 *
 * @author    LINKT IT
 * @copyright Copyright (c) LINKT IT 2016
 * @version 1.0.0
 * @license   Commercial license
 *
 *************************************
 **         CARTS GURU                *
 **          V 1.0.0                 *
 *************************************
 * +
 * + Languages: EN, FR
 */

require_once (dirname(__FILE__) . '/CartsGuruRAPI.php');

class CartsGuru
{
    const AUTH_KEY = 'YOUR_AUTH_KEY';
    const SITE_ID = 'YOUR_SITE_ID';
    
    private function adaptCart($cart){
        $cart_mapped = array(
            'siteId' => self::SITE_ID, 
            'id' => (string) $cart->id
            ///TODO: Do the mapping according to carts guru documentation
        );
        return $cart_mapped;
    }
    
    public function trackCart($cart){
        return $this->doCall('/carts',  $this->adaptCart($cart));
    }
    
    private function adaptOrder($order){
        $order_mapped = array(
            'id' => (string) $cart->id
            //TODO: Do the mapping according to carts guru documentation
        );
        return $order_mapped;
    }
    
    public function trackOrder($order){
        return $this->doCall('/orders',  $this->adaptOrder($order));
    }
    
    /**
     * Map and send data to api
     *
     * @param string $path
     * @param string $mapper_name
     * @param Object $object
     * @param int $id_shop_group
     * @param int $id_shop
     * @param string $sync
     * @return boolean
     */
    public function doCall($path, $data, $sync = false)
    {
        $api = new CartGuruRAPI(self::AUTH_KEY);
        return $api->post($path, $data, $sync);
    }
}