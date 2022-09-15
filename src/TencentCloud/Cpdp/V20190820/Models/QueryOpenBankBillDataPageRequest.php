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
 * QueryOpenBankBillDataPage请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号;
HELIPAY渠道下，填写渠道子商户号。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号;
HELIPAY渠道下，填写渠道子商户号。
 * @method string getBillDate() 获取账单日期,yyyy-MM-dd。
 * @method void setBillDate(string $BillDate) 设置账单日期,yyyy-MM-dd。
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
HELIPAY：合利宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
HELIPAY：合利宝
 * @method integer getPageNo() 获取分页页码。
 * @method void setPageNo(integer $PageNo) 设置分页页码。
 * @method integer getPageSize() 获取分页大小，最大1000。
 * @method void setPageSize(integer $PageSize) 设置分页大小，最大1000。
 * @method string getBillType() 获取账单类型，默认交易账单。
 * @method void setBillType(string $BillType) 设置账单类型，默认交易账单。
 * @method string getPaymentMethod() 获取支付方式。详见附录-云企付枚举类说明-PaymentMethod。
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式。详见附录-云企付枚举类说明-PaymentMethod。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class QueryOpenBankBillDataPageRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号;
HELIPAY渠道下，填写渠道子商户号。
     */
    public $ChannelMerchantId;

    /**
     * @var string 账单日期,yyyy-MM-dd。
     */
    public $BillDate;

    /**
     * @var string 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
HELIPAY：合利宝
     */
    public $ChannelName;

    /**
     * @var integer 分页页码。
     */
    public $PageNo;

    /**
     * @var integer 分页大小，最大1000。
     */
    public $PageSize;

    /**
     * @var string 账单类型，默认交易账单。
     */
    public $BillType;

    /**
     * @var string 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
     */
    public $PaymentMethod;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号，外部接入平台方入驻云企付平台后下发。
EBANK_PAYMENT支付方式下，填写渠道商户号；
SAFT_ISV支付方式下，填写渠道子商户号;
HELIPAY渠道下，填写渠道子商户号。
     * @param string $BillDate 账单日期,yyyy-MM-dd。
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
HELIPAY：合利宝
     * @param integer $PageNo 分页页码。
     * @param integer $PageSize 分页大小，最大1000。
     * @param string $BillType 账单类型，默认交易账单。
     * @param string $PaymentMethod 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
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

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
