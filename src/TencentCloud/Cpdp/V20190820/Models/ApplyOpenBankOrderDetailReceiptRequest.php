<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * ApplyOpenBankOrderDetailReceipt请求参数结构体
 *
 * @method string getOutApplyId() 获取外部回单申请编号
 * @method void setOutApplyId(string $OutApplyId) 设置外部回单申请编号
 * @method string getChannelMerchantId() 获取渠道商户ID
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户ID
 * @method string getChannelSubMerchantId() 获取渠道子商户ID
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID
 * @method string getChannelName() 获取渠道名称，目前只支持ALIPAY
 * @method void setChannelName(string $ChannelName) 设置渠道名称，目前只支持ALIPAY
 * @method string getPaymentMethod() 获取支付方式，目前只支持SAFT_ISV
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式，目前只支持SAFT_ISV
 * @method string getChannelOrderId() 获取云企付平台订单号
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付平台订单号
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class ApplyOpenBankOrderDetailReceiptRequest extends AbstractModel
{
    /**
     * @var string 外部回单申请编号
     */
    public $OutApplyId;

    /**
     * @var string 渠道商户ID
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道子商户ID
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 渠道名称，目前只支持ALIPAY
     */
    public $ChannelName;

    /**
     * @var string 支付方式，目前只支持SAFT_ISV
     */
    public $PaymentMethod;

    /**
     * @var string 云企付平台订单号
     */
    public $ChannelOrderId;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $OutApplyId 外部回单申请编号
     * @param string $ChannelMerchantId 渠道商户ID
     * @param string $ChannelSubMerchantId 渠道子商户ID
     * @param string $ChannelName 渠道名称，目前只支持ALIPAY
     * @param string $PaymentMethod 支付方式，目前只支持SAFT_ISV
     * @param string $ChannelOrderId 云企付平台订单号
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
        if (array_key_exists("OutApplyId",$param) and $param["OutApplyId"] !== null) {
            $this->OutApplyId = $param["OutApplyId"];
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

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
