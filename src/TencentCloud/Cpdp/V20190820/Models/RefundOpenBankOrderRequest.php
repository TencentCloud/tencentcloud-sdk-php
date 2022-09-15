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
 * RefundOpenBankOrder请求参数结构体
 *
 * @method string getOutRefundId() 获取外部商户退款单号。
 * @method void setOutRefundId(string $OutRefundId) 设置外部商户退款单号。
 * @method integer getRefundAmount() 获取退款金额。单位分。
 * @method void setRefundAmount(integer $RefundAmount) 设置退款金额。单位分。
 * @method string getChannelMerchantId() 获取渠道商户号。外部平台接入云企付平台下发。必填。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。外部平台接入云企付平台下发。必填。
 * @method string getOutOrderId() 获取外部商户订单号，与云企付渠道订单号二者不能同时为空。
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号，与云企付渠道订单号二者不能同时为空。
 * @method string getChannelOrderId() 获取云企付渠道订单号，与外部订单号二者不能同时为空。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付渠道订单号，与外部订单号二者不能同时为空。
 * @method string getNotifyUrl() 获取退款通知地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置退款通知地址。
 * @method string getRefundReason() 获取退款原因。
当EBANK_PAYMENT担保支付订单退款时，此字段必传。
 * @method void setRefundReason(string $RefundReason) 设置退款原因。
当EBANK_PAYMENT担保支付订单退款时，此字段必传。
 * @method string getExternalRefundData() 获取第三方渠道退款附加信息。详见附录-复杂类型。
若未作特殊说明，则无需传入。
 * @method void setExternalRefundData(string $ExternalRefundData) 设置第三方渠道退款附加信息。详见附录-复杂类型。
若未作特殊说明，则无需传入。
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method array getProfitShareInfoList() 获取分账信息列表。
 * @method void setProfitShareInfoList(array $ProfitShareInfoList) 设置分账信息列表。
 */
class RefundOpenBankOrderRequest extends AbstractModel
{
    /**
     * @var string 外部商户退款单号。
     */
    public $OutRefundId;

    /**
     * @var integer 退款金额。单位分。
     */
    public $RefundAmount;

    /**
     * @var string 渠道商户号。外部平台接入云企付平台下发。必填。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部商户订单号，与云企付渠道订单号二者不能同时为空。
     */
    public $OutOrderId;

    /**
     * @var string 云企付渠道订单号，与外部订单号二者不能同时为空。
     */
    public $ChannelOrderId;

    /**
     * @var string 退款通知地址。
     */
    public $NotifyUrl;

    /**
     * @var string 退款原因。
当EBANK_PAYMENT担保支付订单退款时，此字段必传。
     */
    public $RefundReason;

    /**
     * @var string 第三方渠道退款附加信息。详见附录-复杂类型。
若未作特殊说明，则无需传入。
     */
    public $ExternalRefundData;

    /**
     * @var string 备注信息
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
     * @var array 分账信息列表。
     */
    public $ProfitShareInfoList;

    /**
     * @param string $OutRefundId 外部商户退款单号。
     * @param integer $RefundAmount 退款金额。单位分。
     * @param string $ChannelMerchantId 渠道商户号。外部平台接入云企付平台下发。必填。
     * @param string $OutOrderId 外部商户订单号，与云企付渠道订单号二者不能同时为空。
     * @param string $ChannelOrderId 云企付渠道订单号，与外部订单号二者不能同时为空。
     * @param string $NotifyUrl 退款通知地址。
     * @param string $RefundReason 退款原因。
当EBANK_PAYMENT担保支付订单退款时，此字段必传。
     * @param string $ExternalRefundData 第三方渠道退款附加信息。详见附录-复杂类型。
若未作特殊说明，则无需传入。
     * @param string $Remark 备注信息
     * @param string $Environment 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     * @param array $ProfitShareInfoList 分账信息列表。
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
        if (array_key_exists("OutRefundId",$param) and $param["OutRefundId"] !== null) {
            $this->OutRefundId = $param["OutRefundId"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
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

        if (array_key_exists("RefundReason",$param) and $param["RefundReason"] !== null) {
            $this->RefundReason = $param["RefundReason"];
        }

        if (array_key_exists("ExternalRefundData",$param) and $param["ExternalRefundData"] !== null) {
            $this->ExternalRefundData = $param["ExternalRefundData"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ProfitShareInfoList",$param) and $param["ProfitShareInfoList"] !== null) {
            $this->ProfitShareInfoList = [];
            foreach ($param["ProfitShareInfoList"] as $key => $value){
                $obj = new OpenBankProfitShareInfo();
                $obj->deserialize($value);
                array_push($this->ProfitShareInfoList, $obj);
            }
        }
    }
}
