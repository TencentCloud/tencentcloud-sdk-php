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
 * 云企付-退款查询结果
 *
 * @method string getOutRefundId() 获取外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutRefundId(string $OutRefundId) 设置外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelRefundId() 获取渠道退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelRefundId(string $ChannelRefundId) 设置渠道退款单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundReason() 获取退款原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundReason(string $RefundReason) 设置退款原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefundAmount() 获取退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundAmount(integer $RefundAmount) 设置退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealRefundAmount() 获取实际退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealRefundAmount(integer $RealRefundAmount) 设置实际退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalAmount() 获取原支付订单总金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalAmount(integer $TotalAmount) 设置原支付订单总金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeFinish() 获取退款完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeFinish(string $TimeFinish) 设置退款完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundStatus() 获取退款订单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundStatus(string $RefundStatus) 设置退款订单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundInfo() 获取退款明细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundInfo(string $RefundInfo) 设置退款明细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeAmount() 获取退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeAmount(integer $FeeAmount) 设置退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundMessage() 获取退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundMessage(string $RefundMessage) 设置退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProfitShareRespInfoList() 获取分账信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfitShareRespInfoList(array $ProfitShareRespInfoList) 设置分账信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpenBankQueryRefundOrderResult extends AbstractModel
{
    /**
     * @var string 外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutRefundId;

    /**
     * @var string 渠道退款单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelRefundId;

    /**
     * @var string 退款原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundReason;

    /**
     * @var integer 退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundAmount;

    /**
     * @var integer 实际退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealRefundAmount;

    /**
     * @var integer 原支付订单总金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalAmount;

    /**
     * @var string 退款完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeFinish;

    /**
     * @var string 退款订单状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundStatus;

    /**
     * @var string 退款明细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundInfo;

    /**
     * @var integer 退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeAmount;

    /**
     * @var string 退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundMessage;

    /**
     * @var array 分账信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProfitShareRespInfoList;

    /**
     * @param string $OutRefundId 外部商户退款单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelRefundId 渠道退款单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundReason 退款原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefundAmount 退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealRefundAmount 实际退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalAmount 原支付订单总金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeFinish 退款完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundStatus 退款订单状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundInfo 退款明细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeAmount 退款手续费金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundMessage 退款返回描述，比如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProfitShareRespInfoList 分账信息
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
        if (array_key_exists("OutRefundId",$param) and $param["OutRefundId"] !== null) {
            $this->OutRefundId = $param["OutRefundId"];
        }

        if (array_key_exists("ChannelRefundId",$param) and $param["ChannelRefundId"] !== null) {
            $this->ChannelRefundId = $param["ChannelRefundId"];
        }

        if (array_key_exists("RefundReason",$param) and $param["RefundReason"] !== null) {
            $this->RefundReason = $param["RefundReason"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("RealRefundAmount",$param) and $param["RealRefundAmount"] !== null) {
            $this->RealRefundAmount = $param["RealRefundAmount"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("TimeFinish",$param) and $param["TimeFinish"] !== null) {
            $this->TimeFinish = $param["TimeFinish"];
        }

        if (array_key_exists("RefundStatus",$param) and $param["RefundStatus"] !== null) {
            $this->RefundStatus = $param["RefundStatus"];
        }

        if (array_key_exists("RefundInfo",$param) and $param["RefundInfo"] !== null) {
            $this->RefundInfo = $param["RefundInfo"];
        }

        if (array_key_exists("FeeAmount",$param) and $param["FeeAmount"] !== null) {
            $this->FeeAmount = $param["FeeAmount"];
        }

        if (array_key_exists("RefundMessage",$param) and $param["RefundMessage"] !== null) {
            $this->RefundMessage = $param["RefundMessage"];
        }

        if (array_key_exists("ProfitShareRespInfoList",$param) and $param["ProfitShareRespInfoList"] !== null) {
            $this->ProfitShareRespInfoList = [];
            foreach ($param["ProfitShareRespInfoList"] as $key => $value){
                $obj = new OpenBankProfitShareRespInfo();
                $obj->deserialize($value);
                array_push($this->ProfitShareRespInfoList, $obj);
            }
        }
    }
}
