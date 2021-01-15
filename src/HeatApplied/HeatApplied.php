<?php

namespace HeatApplied;

class HeatApplied {
    
    const API_URL = 'https://api.heatapplied.com/v1';
    
    protected static $secretKey;
    protected static $publicKey;
    
    public static function setSecretKey($secretKey) {
        if(empty($secretKey)) {
            return;
        }
        if(isset(static::$secretKey)) {
            return;
        }
        static::$secretKey = $secretKey;
    }
    
    public static function getSecretKey() {
        return static::$secretKey;
    }
    
    public static function setPublicKey($publicKey) {
        if(empty($publicKey)) {
            return;
        }
        if(isset(static::$publicKey)) {
            return;
        }
        static::$publicKey = $publicKey;
    }
    
    public static function getPublicKey() {
        return static::$publicKey;
    }
    
}
