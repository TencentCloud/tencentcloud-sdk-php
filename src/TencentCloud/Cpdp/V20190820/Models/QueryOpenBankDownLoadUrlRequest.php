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
 * QueryOpenBankDownLoadUrl请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号。
 * @method string getBillDate() 获取账单日期,yyyy-MM-dd。
 * @method void setBillDate(string $BillDate) 设置账单日期,yyyy-MM-dd。
 * @method string getBillType() 获取账单类型，默认交易账单。
 * @method void setBillType(string $BillType) 设置账单类型，默认交易账单。
 * @method string getEnvironment() 获取接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
 * @method void setEnvironment(string $Environment) 设置接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
 * @method string getChannelName() 获取渠道名称。不填默认为商企付。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。不填默认为商企付。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
 * @method string getPaymentMethod() 获取支付方式。不填默认为ebank支付。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
__SAFT_ISV__: 人资ISV支付
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式。不填默认为ebank支付。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
__SAFT_ISV__: 人资ISV支付
 */
class QueryOpenBankDownLoadUrlRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号。
     */
    public $ChannelMerchantId;

    /**
     * @var string 账单日期,yyyy-MM-dd。
     */
    public $BillDate;

    /**
     * @var string 账单类型，默认交易账单。
     */
    public $BillType;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
     */
    public $Environment;

    /**
     * @var string 渠道名称。不填默认为商企付。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     */
    public $ChannelName;

    /**
     * @var string 支付方式。不填默认为ebank支付。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
__SAFT_ISV__: 人资ISV支付
     */
    public $PaymentMethod;

    /**
     * @param string $ChannelMerchantId 渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号。
     * @param string $BillDate 账单日期,yyyy-MM-dd。
     * @param string $BillType 账单类型，默认交易账单。
     * @param string $Environment 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境。
     * @param string $ChannelName 渠道名称。不填默认为商企付。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
     * @param string $PaymentMethod 支付方式。不填默认为ebank支付。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
__SAFT_ISV__: 人资ISV支付
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

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }
    }
}
