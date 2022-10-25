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
 * 子单退款信息
 *
 * @method string getChannelExternalRefundId() 获取支付机构退款流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalRefundId(string $ChannelExternalRefundId) 设置支付机构退款流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExternalOrderId() 获取支付机构支付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalOrderId(string $ChannelExternalOrderId) 设置支付机构支付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelRefundId() 获取渠道退款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelRefundId(string $ChannelRefundId) 设置渠道退款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubOutTradeNo() 获取子订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOutTradeNo(string $SubOutTradeNo) 设置子订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundAmt() 获取子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundAmt(string $RefundAmt) 设置子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
 */
class OldSubRefund extends AbstractModel
{
    /**
     * @var string 支付机构退款流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalRefundId;

    /**
     * @var string 支付机构支付订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalOrderId;

    /**
     * @var string 渠道退款订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelRefundId;

    /**
     * @var string 子订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOutTradeNo;

    /**
     * @var string 子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundAmt;

    /**
     * @param string $ChannelExternalRefundId 支付机构退款流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelExternalOrderId 支付机构支付订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelRefundId 渠道退款订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubOutTradeNo 子订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundAmt 子单退款金额
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
        if (array_key_exists("ChannelExternalRefundId",$param) and $param["ChannelExternalRefundId"] !== null) {
            $this->ChannelExternalRefundId = $param["ChannelExternalRefundId"];
        }

        if (array_key_exists("ChannelExternalOrderId",$param) and $param["ChannelExternalOrderId"] !== null) {
            $this->ChannelExternalOrderId = $param["ChannelExternalOrderId"];
        }

        if (array_key_exists("ChannelRefundId",$param) and $param["ChannelRefundId"] !== null) {
            $this->ChannelRefundId = $param["ChannelRefundId"];
        }

        if (array_key_exists("SubOutTradeNo",$param) and $param["SubOutTradeNo"] !== null) {
            $this->SubOutTradeNo = $param["SubOutTradeNo"];
        }

        if (array_key_exists("RefundAmt",$param) and $param["RefundAmt"] !== null) {
            $this->RefundAmt = $param["RefundAmt"];
        }
    }
}
