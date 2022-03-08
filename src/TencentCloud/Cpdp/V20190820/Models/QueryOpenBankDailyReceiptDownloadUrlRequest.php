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
 * QueryOpenBankDailyReceiptDownloadUrl请求参数结构体
 *
 * @method string getChannelMerchantId() 获取云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method string getChannelSubMerchantId() 获取云企付渠道子商户号。入驻在渠道商户下的子商户ID，如付款方的商户ID，对应创建支付订单中接口参数中的PayerInfo中的payerId。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置云企付渠道子商户号。入驻在渠道商户下的子商户ID，如付款方的商户ID，对应创建支付订单中接口参数中的PayerInfo中的payerId。
 * @method string getChannelName() 获取渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method string getPaymentMethod() 获取付款方式。如
__EBANK_PAYMENT__:ebank付款
__OPENBANK_PAYMENT__: openbank付款
 * @method void setPaymentMethod(string $PaymentMethod) 设置付款方式。如
__EBANK_PAYMENT__:ebank付款
__OPENBANK_PAYMENT__: openbank付款
 * @method string getBindSerialNo() 获取绑卡序列号，银行卡唯一标记，资金账户ID，用于区分商户绑定多卡或多账户场景
 * @method void setBindSerialNo(string $BindSerialNo) 设置绑卡序列号，银行卡唯一标记，资金账户ID，用于区分商户绑定多卡或多账户场景
 * @method string getQueryDate() 获取查询日期，D日查询D-1日的回单文件
 * @method void setQueryDate(string $QueryDate) 设置查询日期，D日查询D-1日的回单文件
 * @method string getEnvironment() 获取环境类型
release:生产环境
sandbox:沙箱环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
release:生产环境
sandbox:沙箱环境
缺省默认为生产环境
 */
class QueryOpenBankDailyReceiptDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     */
    public $ChannelMerchantId;

    /**
     * @var string 云企付渠道子商户号。入驻在渠道商户下的子商户ID，如付款方的商户ID，对应创建支付订单中接口参数中的PayerInfo中的payerId。
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     */
    public $ChannelName;

    /**
     * @var string 付款方式。如
__EBANK_PAYMENT__:ebank付款
__OPENBANK_PAYMENT__: openbank付款
     */
    public $PaymentMethod;

    /**
     * @var string 绑卡序列号，银行卡唯一标记，资金账户ID，用于区分商户绑定多卡或多账户场景
     */
    public $BindSerialNo;

    /**
     * @var string 查询日期，D日查询D-1日的回单文件
     */
    public $QueryDate;

    /**
     * @var string 环境类型
release:生产环境
sandbox:沙箱环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     * @param string $ChannelSubMerchantId 云企付渠道子商户号。入驻在渠道商户下的子商户ID，如付款方的商户ID，对应创建支付订单中接口参数中的PayerInfo中的payerId。
     * @param string $ChannelName 渠道名称。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     * @param string $PaymentMethod 付款方式。如
__EBANK_PAYMENT__:ebank付款
__OPENBANK_PAYMENT__: openbank付款
     * @param string $BindSerialNo 绑卡序列号，银行卡唯一标记，资金账户ID，用于区分商户绑定多卡或多账户场景
     * @param string $QueryDate 查询日期，D日查询D-1日的回单文件
     * @param string $Environment 环境类型
release:生产环境
sandbox:沙箱环境
缺省默认为生产环境
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

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("BindSerialNo",$param) and $param["BindSerialNo"] !== null) {
            $this->BindSerialNo = $param["BindSerialNo"];
        }

        if (array_key_exists("QueryDate",$param) and $param["QueryDate"] !== null) {
            $this->QueryDate = $param["QueryDate"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
