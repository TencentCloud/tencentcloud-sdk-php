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
 * @method string getChannelExternalRefundId() 获取渠道方应答的退款ID，透传处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalRefundId(string $ChannelExternalRefundId) 设置渠道方应答的退款ID，透传处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExternalOrderId() 获取渠道方应答的订单号，透传处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalOrderId(string $ChannelExternalOrderId) 设置渠道方应答的订单号，透传处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefundAmt() 获取子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundAmt(integer $RefundAmt) 设置子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubOutTradeNo() 获取子单订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOutTradeNo(string $SubOutTradeNo) 设置子单订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubRefundId() 获取子单退款id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRefundId(string $SubRefundId) 设置子单退款id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAppId() 获取子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAppId(string $SubAppId) 设置子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelSubOrderId() 获取渠道子单支付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSubOrderId(string $ChannelSubOrderId) 设置渠道子单支付订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelSubRefundId() 获取渠道子退款订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSubRefundId(string $ChannelSubRefundId) 设置渠道子退款订单号
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudSubRefundItem extends AbstractModel
{
    /**
     * @var string 渠道方应答的退款ID，透传处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalRefundId;

    /**
     * @var string 渠道方应答的订单号，透传处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalOrderId;

    /**
     * @var integer 子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundAmt;

    /**
     * @var string 子单订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOutTradeNo;

    /**
     * @var string 子单退款id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRefundId;

    /**
     * @var string 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAppId;

    /**
     * @var string 渠道子单支付订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSubOrderId;

    /**
     * @var string 渠道子退款订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSubRefundId;

    /**
     * @param string $ChannelExternalRefundId 渠道方应答的退款ID，透传处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelExternalOrderId 渠道方应答的订单号，透传处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefundAmt 子单退款金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubOutTradeNo 子单订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubRefundId 子单退款id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAppId 子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelSubOrderId 渠道子单支付订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelSubRefundId 渠道子退款订单号
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

        if (array_key_exists("RefundAmt",$param) and $param["RefundAmt"] !== null) {
            $this->RefundAmt = $param["RefundAmt"];
        }

        if (array_key_exists("SubOutTradeNo",$param) and $param["SubOutTradeNo"] !== null) {
            $this->SubOutTradeNo = $param["SubOutTradeNo"];
        }

        if (array_key_exists("SubRefundId",$param) and $param["SubRefundId"] !== null) {
            $this->SubRefundId = $param["SubRefundId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ChannelSubOrderId",$param) and $param["ChannelSubOrderId"] !== null) {
            $this->ChannelSubOrderId = $param["ChannelSubOrderId"];
        }

        if (array_key_exists("ChannelSubRefundId",$param) and $param["ChannelSubRefundId"] !== null) {
            $this->ChannelSubRefundId = $param["ChannelSubRefundId"];
        }
    }
}
