<?php

namespace noecs\alipay;

/**
 * This file is pay base class
 * @author noecs<noecs@qq.com>
 */
class Alipay extends \yii\base\Widget
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
