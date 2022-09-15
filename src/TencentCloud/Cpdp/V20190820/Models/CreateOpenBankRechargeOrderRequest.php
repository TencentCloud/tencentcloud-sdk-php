<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOpenBankRechargeOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method string getOutOrderId() 获取外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
 * @method void setOutOrderId(string $OutOrderId) 设置外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
 * @method integer getTotalAmount() 获取付款金额，单位分。
 * @method void setTotalAmount(integer $TotalAmount) 设置付款金额，单位分。
 * @method string getCurrency() 获取固定值CNY。
 * @method void setCurrency(string $Currency) 设置固定值CNY。
 * @method string getExpireTime() 获取订单过期时间，yyyy-MM-dd HH:mm:ss格式。
 * @method void setExpireTime(string $ExpireTime) 设置订单过期时间，yyyy-MM-dd HH:mm:ss格式。
 * @method string getChannelName() 获取渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method string getPaymentMethod() 获取渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method void setPaymentMethod(string $PaymentMethod) 设置渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method OpenBankRechargePayeeInfo getPayeeInfo() 获取收款方信息。
 * @method void setPayeeInfo(OpenBankRechargePayeeInfo $PayeeInfo) 设置收款方信息。
 * @method string getChannelSubMerchantId() 获取渠道子商户号
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号
 * @method string getNotifyUrl() 获取通知地址，如www.test.com。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址，如www.test.com。
 * @method string getRemark() 获取备注信息。
 * @method void setRemark(string $Remark) 设置备注信息。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankRechargeOrderRequest extends AbstractModel
{
    /**
     * @var string 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
     */
    public $OutOrderId;

    /**
     * @var integer 付款金额，单位分。
     */
    public $TotalAmount;

    /**
     * @var string 固定值CNY。
     */
    public $Currency;

    /**
     * @var string 订单过期时间，yyyy-MM-dd HH:mm:ss格式。
     */
    public $ExpireTime;

    /**
     * @var string 渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     */
    public $ChannelName;

    /**
     * @var string 渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     */
    public $PaymentMethod;

    /**
     * @var OpenBankRechargePayeeInfo 收款方信息。
     */
    public $PayeeInfo;

    /**
     * @var string 渠道子商户号
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 通知地址，如www.test.com。
     */
    public $NotifyUrl;

    /**
     * @var string 备注信息。
     */
    public $Remark;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     * @param string $OutOrderId 外部订单号,只能是数字、大小写字母，且在同一个接入平台下唯一，限定长度40位。
     * @param integer $TotalAmount 付款金额，单位分。
     * @param string $Currency 固定值CNY。
     * @param string $ExpireTime 订单过期时间，yyyy-MM-dd HH:mm:ss格式。
     * @param string $ChannelName 渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     * @param string $PaymentMethod 渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     * @param OpenBankRechargePayeeInfo $PayeeInfo 收款方信息。
     * @param string $ChannelSubMerchantId 渠道子商户号
     * @param string $NotifyUrl 通知地址，如www.test.com。
     * @param string $Remark 备注信息。
     * @param string $Environment 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("PayeeInfo",$param) and $param["PayeeInfo"] !== null) {
            $this->PayeeInfo = new OpenBankRechargePayeeInfo();
            $this->PayeeInfo->deserialize($param["PayeeInfo"]);
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
