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
 * 云企付-退款申请结果
 *
 * @method string getChannelOrderId() 获取云企付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelRefundId() 获取云企付退款流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelRefundId(string $ChannelRefundId) 设置云企付退款流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutRefundId() 获取外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutRefundId(string $OutRefundId) 设置外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutOrderId() 获取外部商户订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundMessage() 获取退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundMessage(string $RefundMessage) 设置退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefundAmount() 获取退款金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundAmount(integer $RefundAmount) 设置退款金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeAmount() 获取退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeAmount(integer $FeeAmount) 设置退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundStatus() 获取退款状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundStatus(string $RefundStatus) 设置退款状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpenBankRefundOrderApplyResult extends AbstractModel
{
    /**
     * @var string 云企付订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelOrderId;

    /**
     * @var string 云企付退款流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelRefundId;

    /**
     * @var string 外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutRefundId;

    /**
     * @var string 外部商户订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutOrderId;

    /**
     * @var string 退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundMessage;

    /**
     * @var integer 退款金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundAmount;

    /**
     * @var integer 退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeAmount;

    /**
     * @var string 退款状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundStatus;

    /**
     * @param string $ChannelOrderId 云企付订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelRefundId 云企付退款流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutRefundId 外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutOrderId 外部商户订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundMessage 退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefundAmount 退款金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeAmount 退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundStatus 退款状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("ChannelRefundId",$param) and $param["ChannelRefundId"] !== null) {
            $this->ChannelRefundId = $param["ChannelRefundId"];
        }

        if (array_key_exists("OutRefundId",$param) and $param["OutRefundId"] !== null) {
            $this->OutRefundId = $param["OutRefundId"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("RefundMessage",$param) and $param["RefundMessage"] !== null) {
            $this->RefundMessage = $param["RefundMessage"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("FeeAmount",$param) and $param["FeeAmount"] !== null) {
            $this->FeeAmount = $param["FeeAmount"];
        }

        if (array_key_exists("RefundStatus",$param) and $param["RefundStatus"] !== null) {
            $this->RefundStatus = $param["RefundStatus"];
        }
    }
}
