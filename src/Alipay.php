<?php
namespace noecs\alipay;

/**
 * This file is pay base class,config
 * @author noecs<noecs@qq.com>
 *
 * @param PC API
 * 1.alipay.trade.page.pay                              统一收单下单并支付页面接口
 * 2.alipay.trade.refund                                统一收单交易退款接口
 * 3.alipay.trade.fastpay.refund.query                  统一收单交易退款查询接口
 * 4.alipay.trade.query                                 统一收单线下交易查询接口
 * 5.alipay.trade.close                                 统一收单交易关闭接口
 * 6.alipay.data.dataservice.bill.downloadurl.query     查询对账单下载地址
 *
 * @param Mobile API
 * 1.alipay.trade.wap.pay                               手机网站支付接口2.0
 * 2.alipay.trade.app.pay                               app支付接口2.0（未开发）
 */
class Alipay extends Config
{
    /*商户订单号*/
    public $out_trade_no;

    /*PC网站支付*/
    public function alipayTradePagePay()
    {
        $this->method = 'alipay.trade.page.pay';
    }

}
