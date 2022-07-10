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
 * CreateOpenBankVerificationOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置云企付渠道商户号。外部接入平台入驻云企付平台后下发。
 * @method string getOutVerificationId() 获取外部核销申请订单号
 * @method void setOutVerificationId(string $OutVerificationId) 设置外部核销申请订单号
 * @method integer getVerificationAmount() 获取核销金额，单位分
 * @method void setVerificationAmount(integer $VerificationAmount) 设置核销金额，单位分
 * @method string getOutOrderId() 获取外部支付订单号。调用创建支付订单时，下单支付时的外部订单号。与ChannelOrderId不能同时为空。
 * @method void setOutOrderId(string $OutOrderId) 设置外部支付订单号。调用创建支付订单时，下单支付时的外部订单号。与ChannelOrderId不能同时为空。
 * @method string getChannelOrderId() 获取云企付渠道订单号。调用创建支付订单时，下单支付时的云企付渠道订单号。与OutOrderId不能同时为空。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付渠道订单号。调用创建支付订单时，下单支付时的云企付渠道订单号。与OutOrderId不能同时为空。
 * @method string getNotifyUrl() 获取核销成功回调地址。若不上送，则不回调通知。
 * @method void setNotifyUrl(string $NotifyUrl) 设置核销成功回调地址。若不上送，则不回调通知。
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method string getExternalVerificationData() 获取第三方支付渠道需要额外上送字段。详情见附录描述。
 * @method void setExternalVerificationData(string $ExternalVerificationData) 设置第三方支付渠道需要额外上送字段。详情见附录描述。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankVerificationOrderRequest extends AbstractModel
{
    /**
     * @var string 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部核销申请订单号
     */
    public $OutVerificationId;

    /**
     * @var integer 核销金额，单位分
     */
    public $VerificationAmount;

    /**
     * @var string 外部支付订单号。调用创建支付订单时，下单支付时的外部订单号。与ChannelOrderId不能同时为空。
     */
    public $OutOrderId;

    /**
     * @var string 云企付渠道订单号。调用创建支付订单时，下单支付时的云企付渠道订单号。与OutOrderId不能同时为空。
     */
    public $ChannelOrderId;

    /**
     * @var string 核销成功回调地址。若不上送，则不回调通知。
     */
    public $NotifyUrl;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var string 第三方支付渠道需要额外上送字段。详情见附录描述。
     */
    public $ExternalVerificationData;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 云企付渠道商户号。外部接入平台入驻云企付平台后下发。
     * @param string $OutVerificationId 外部核销申请订单号
     * @param integer $VerificationAmount 核销金额，单位分
     * @param string $OutOrderId 外部支付订单号。调用创建支付订单时，下单支付时的外部订单号。与ChannelOrderId不能同时为空。
     * @param string $ChannelOrderId 云企付渠道订单号。调用创建支付订单时，下单支付时的云企付渠道订单号。与OutOrderId不能同时为空。
     * @param string $NotifyUrl 核销成功回调地址。若不上送，则不回调通知。
     * @param string $Remark 备注。
     * @param string $ExternalVerificationData 第三方支付渠道需要额外上送字段。详情见附录描述。
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

        if (array_key_exists("OutVerificationId",$param) and $param["OutVerificationId"] !== null) {
            $this->OutVerificationId = $param["OutVerificationId"];
        }

        if (array_key_exists("VerificationAmount",$param) and $param["VerificationAmount"] !== null) {
            $this->VerificationAmount = $param["VerificationAmount"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ExternalVerificationData",$param) and $param["ExternalVerificationData"] !== null) {
            $this->ExternalVerificationData = $param["ExternalVerificationData"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
