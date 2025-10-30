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
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金
 * @method string getIncentivePayAmount() 获取赠送金
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金
 * @method string getVoucherPayAmount() 获取代金券
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券
 * @method string getTransferPayAmount() 获取分成金
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金
 * @method string getRegionName() 获取地域名称（仅在地域汇总总展示）
 * @method void setRegionName(string $RegionName) 设置地域名称（仅在地域汇总总展示）
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
     */
    public $CashPayAmount;

    /**
     * @var string 赠送金
     */
    public $IncentivePayAmount;

    /**
     * @var string 代金券
     */
    public $VoucherPayAmount;

    /**
     * @var string 分成金
     */
    public $TransferPayAmount;

    /**
     * @var string 地域名称（仅在地域汇总总展示）
     */
    public $RegionName;

    /**
     * @param string $BusinessCode 产品名称代码
     * @param string $BusinessCodeName 产品名称
     * @param string $RealTotalCost 折后总价
     * @param ConsumptionSummaryTrend $Trend 费用趋势
     * @param string $CashPayAmount 现金
     * @param string $IncentivePayAmount 赠送金
     * @param string $VoucherPayAmount 代金券
     * @param string $TransferPayAmount 分成金
     * @param string $RegionName 地域名称（仅在地域汇总总展示）
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
