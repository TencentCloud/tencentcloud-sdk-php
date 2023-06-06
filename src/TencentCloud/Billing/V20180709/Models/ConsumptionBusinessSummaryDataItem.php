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
 * 消耗按产品汇总详情
 *
 * @method string getBusinessCode() 获取产品名称代码
 * @method void setBusinessCode(string $BusinessCode) 设置产品名称代码
 * @method string getBusinessCodeName() 获取产品名称
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称
 * @method string getRealTotalCost() 获取折后总价
 * @method void setRealTotalCost(string $RealTotalCost) 设置折后总价
 * @method ConsumptionSummaryTrend getTrend() 获取费用趋势
 * @method void setTrend(ConsumptionSummaryTrend $Trend) 设置费用趋势
 * @method string getCashPayAmount() 获取现金
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncentivePayAmount() 获取赠送金
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoucherPayAmount() 获取代金券
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransferPayAmount() 获取分成金
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumptionBusinessSummaryDataItem extends AbstractModel
{
    /**
     * @var string 产品名称代码
     */
    public $BusinessCode;

    /**
     * @var string 产品名称
     */
    public $BusinessCodeName;

    /**
     * @var string 折后总价
     */
    public $RealTotalCost;

    /**
     * @var ConsumptionSummaryTrend 费用趋势
     */
    public $Trend;

    /**
     * @var string 现金
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CashPayAmount;

    /**
     * @var string 赠送金
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncentivePayAmount;

    /**
     * @var string 代金券
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoucherPayAmount;

    /**
     * @var string 分成金
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferPayAmount;

    /**
     * @param string $BusinessCode 产品名称代码
     * @param string $BusinessCodeName 产品名称
     * @param string $RealTotalCost 折后总价
     * @param ConsumptionSummaryTrend $Trend 费用趋势
     * @param string $CashPayAmount 现金
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncentivePayAmount 赠送金
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoucherPayAmount 代金券
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransferPayAmount 分成金
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = new ConsumptionSummaryTrend();
            $this->Trend->deserialize($param["Trend"]);
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
