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
 * 消耗按项目汇总详情
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getProjectName() 获取<p>项目名称</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
 * @method string getRealTotalCost() 获取<p>折后总价</p>
 * @method void setRealTotalCost(string $RealTotalCost) 设置<p>折后总价</p>
 * @method ConsumptionSummaryTrend getTrend() 获取<p>趋势</p>
 * @method void setTrend(ConsumptionSummaryTrend $Trend) 设置<p>趋势</p>
 * @method array getBusiness() 获取<p>产品消耗详情</p>
 * @method void setBusiness(array $Business) 设置<p>产品消耗详情</p>
 * @method string getCashPayAmount() 获取<p>现金</p>
 * @method void setCashPayAmount(string $CashPayAmount) 设置<p>现金</p>
 * @method string getIncentivePayAmount() 获取<p>赠送金</p>
 * @method void setIncentivePayAmount(string $IncentivePayAmount) 设置<p>赠送金</p>
 * @method string getVoucherPayAmount() 获取<p>代金券</p>
 * @method void setVoucherPayAmount(string $VoucherPayAmount) 设置<p>代金券</p>
 * @method string getTransferPayAmount() 获取<p>分成金</p>
 * @method void setTransferPayAmount(string $TransferPayAmount) 设置<p>分成金</p>
 * @method string getLeftRealTotalCost() 获取<p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
 * @method void setLeftRealTotalCost(string $LeftRealTotalCost) 设置<p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
 */
class ConsumptionProjectSummaryDataItem extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
     */
    public $ProjectName;

    /**
     * @var string <p>折后总价</p>
     */
    public $RealTotalCost;

    /**
     * @var ConsumptionSummaryTrend <p>趋势</p>
     */
    public $Trend;

    /**
     * @var array <p>产品消耗详情</p>
     */
    public $Business;

    /**
     * @var string <p>现金</p>
     */
    public $CashPayAmount;

    /**
     * @var string <p>赠送金</p>
     */
    public $IncentivePayAmount;

    /**
     * @var string <p>代金券</p>
     */
    public $VoucherPayAmount;

    /**
     * @var string <p>分成金</p>
     */
    public $TransferPayAmount;

    /**
     * @var string <p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
     */
    public $LeftRealTotalCost;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $ProjectName <p>项目名称</p>
     * @param string $RealTotalCost <p>折后总价</p>
     * @param ConsumptionSummaryTrend $Trend <p>趋势</p>
     * @param array $Business <p>产品消耗详情</p>
     * @param string $CashPayAmount <p>现金</p>
     * @param string $IncentivePayAmount <p>赠送金</p>
     * @param string $VoucherPayAmount <p>代金券</p>
     * @param string $TransferPayAmount <p>分成金</p>
     * @param string $LeftRealTotalCost <p>待分摊金额</p><p>剩余待分摊的折后总金额</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
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

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("LeftRealTotalCost",$param) and $param["LeftRealTotalCost"] !== null) {
            $this->LeftRealTotalCost = $param["LeftRealTotalCost"];
        }
    }
}
