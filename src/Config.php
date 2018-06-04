<?php

namespace noecs\alipay;

/**
 * This file is pay base class,config
 * @author noecs<noecs@qq.com>
 *
 * config add `main.php` or `main-local.php` array `components`
 *  'alipay' => [
 *       'class' => 'noecs\alipay\Alipay',
 *       
 *       //应用ID,您的APPID。
 *       'app_id' => "",
 *       
 *       //商户私钥
 *       'merchant_private_key' => "",
 *       
 *       //异步通知地址
 *       'notify_url' => "",
 *       
 *       //同步跳转
 *       'return_url' => "",
 *
 *       //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
 *       'alipay_public_key' => "",
 *   ],
 * 
 */
class Config
{
    /**
     * @param alipay app id
     */
    public $app_id;

    /**
     * @param alipay shoper private key
     */
    public $merchant_private_key;
    
    /**
     * @param asynchronous url
     */
    public $notify_url;
    
    /**
     * @param synchronize url
     */
    public $return_url;
    
    /**
     * @param charset (default=UTF-8)
     */
    public $charset = 'UTF-8';
    
    /**
     * @param signature type (default=RSA2)
     */
    public $sign_type = 'RSA2';
    
    /**
     * @param alipay net gateway(default=https://openapi.alipay.com/gateway.do)
     */
    public $gatewayUrl = 'https://openapi.alipay.com/gateway.do';
    
    /**
     * alipay public key (@link https://openhome.alipay.com/platform/keyManage.htm)
     */
    public $alipay_public_key;

}
