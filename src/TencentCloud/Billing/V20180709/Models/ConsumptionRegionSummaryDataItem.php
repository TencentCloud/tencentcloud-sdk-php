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
 * 消耗按地域汇总详情
 *
 * @method string getRegionId() 获取地域ID
 * @method void setRegionId(string $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getRealTotalCost() 获取折后总价
 * @method void setRealTotalCost(string $RealTotalCost) 设置折后总价
 * @method ConsumptionSummaryTrend getTrend() 获取趋势
 * @method void setTrend(ConsumptionSummaryTrend $Trend) 设置趋势
 * @method array getBusiness() 获取产品消费详情
 * @method void setBusiness(array $Business) 设置产品消费详情
 * @method string getCashPayAmount() 获取现金
 * @method void setCashPayAmount(string $CashPayAmount) 设置现金
 * @method string getVoucherPayAmount() 获取代金券
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置代金券
 * @method string getIncentivePayAmount() 获取赠送金
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置赠送金
 * @method string getTransferPayAmount() 获取分成金
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置分成金
 */
class ConsumptionRegionSummaryDataItem extends AbstractModel
{
    /**
     * @var string 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 折后总价
     */
    public $RealTotalCost;

    /**
     * @var ConsumptionSummaryTrend 趋势
     */
    public $Trend;

    /**
     * @var array 产品消费详情
     */
    public $Business;

    /**
     * @var string 现金
     */
    public $CashPayAmount;

    /**
     * @var string 代金券
     */
    public $VoucherPayAmount;

    /**
     * @var string 赠送金
     */
    public $IncentivePayAmount;

    /**
     * @var string 分成金
     */
    public $TransferPayAmount;

    /**
     * @param string $RegionId 地域ID
     * @param string $RegionName 地域名称
     * @param string $RealTotalCost 折后总价
     * @param ConsumptionSummaryTrend $Trend 趋势
     * @param array $Business 产品消费详情
     * @param string $CashPayAmount 现金
     * @param string $VoucherPayAmount 代金券
     * @param string $IncentivePayAmount 赠送金
     * @param string $TransferPayAmount 分成金
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = new ConsumptionSummaryTrend();
            $this->Trend->deserialize($param["Trend"]);
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new ConsumptionBusinessSummaryDataItem();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }
    }
}
