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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分账账单概览金额汇总
 *
 * @method string getRealTotalCost() 获取总费用：现金费用合计+分成金费用合计+赠送金费用合计+优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTotalCost(string $RealTotalCost) 设置总费用：现金费用合计+分成金费用合计+赠送金费用合计+优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCashPayAmount() 获取现金： 现金费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金： 现金费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncentivePayAmount() 获取赠送金：赠送金费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金：赠送金费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoucherPayAmount() 获取优惠券：优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置优惠券：优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransferPayAmount() 获取分成金：分成金费用合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金：分成金费用合计
注意：此字段可能返回 null，表示取不到有效值。
 */
class AllocationOverviewTotal extends AbstractModel
{
    /**
     * @var string 总费用：现金费用合计+分成金费用合计+赠送金费用合计+优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTotalCost;

    /**
     * @var string 现金： 现金费用合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CashPayAmount;

    /**
     * @var string 赠送金：赠送金费用合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncentivePayAmount;

    /**
     * @var string 优惠券：优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoucherPayAmount;

    /**
     * @var string 分成金：分成金费用合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferPayAmount;

    /**
     * @param string $RealTotalCost 总费用：现金费用合计+分成金费用合计+赠送金费用合计+优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CashPayAmount 现金： 现金费用合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncentivePayAmount 赠送金：赠送金费用合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoucherPayAmount 优惠券：优惠券费用合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransferPayAmount 分成金：分成金费用合计
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
        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }
    }
}
