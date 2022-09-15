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
 * UnifiedCloudOrder返回参数结构体
 *
 * @method string getTransactionId() 获取米大师的交易订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionId(string $TransactionId) 设置米大师的交易订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutTradeNo() 获取开发者的支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutTradeNo(string $OutTradeNo) 设置开发者的支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayInfo() 获取SDK的支付参数。
支付参数透传给米大师SDK（原文透传给SDK即可，不需要解码）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayInfo(string $PayInfo) 设置SDK的支付参数。
支付参数透传给米大师SDK（原文透传给SDK即可，不需要解码）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalAmt() 获取支付金额，单位：分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalAmt(integer $TotalAmt) 设置支付金额，单位：分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelInfo() 获取渠道信息，用于拉起渠道支付。j
son字符串，注意此字段仅会在传入正确的PayScene入参时才会有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelInfo(string $ChannelInfo) 设置渠道信息，用于拉起渠道支付。j
son字符串，注意此字段仅会在传入正确的PayScene入参时才会有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UnifiedCloudOrderResponse extends AbstractModel
{
    /**
     * @var string 米大师的交易订单号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionId;

    /**
     * @var string 开发者的支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutTradeNo;

    /**
     * @var string SDK的支付参数。
支付参数透传给米大师SDK（原文透传给SDK即可，不需要解码）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayInfo;

    /**
     * @var integer 支付金额，单位：分。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalAmt;

    /**
     * @var string 渠道信息，用于拉起渠道支付。j
son字符串，注意此字段仅会在传入正确的PayScene入参时才会有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TransactionId 米大师的交易订单号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutTradeNo 开发者的支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayInfo SDK的支付参数。
支付参数透传给米大师SDK（原文透传给SDK即可，不需要解码）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalAmt 支付金额，单位：分。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelInfo 渠道信息，用于拉起渠道支付。j
son字符串，注意此字段仅会在传入正确的PayScene入参时才会有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("PayInfo",$param) and $param["PayInfo"] !== null) {
            $this->PayInfo = $param["PayInfo"];
        }

        if (array_key_exists("TotalAmt",$param) and $param["TotalAmt"] !== null) {
            $this->TotalAmt = $param["TotalAmt"];
        }

        if (array_key_exists("ChannelInfo",$param) and $param["ChannelInfo"] !== null) {
            $this->ChannelInfo = $param["ChannelInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
