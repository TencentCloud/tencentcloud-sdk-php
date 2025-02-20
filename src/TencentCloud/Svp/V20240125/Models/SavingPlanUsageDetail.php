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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划使用率数据
 *
 * @method string getSpType() 获取节省计划类型
 * @method void setSpType(string $SpType) 设置节省计划类型
 * @method integer getStatus() 获取节省计划状态
 * @method void setStatus(integer $Status) 设置节省计划状态
 * @method string getDeductAmount() 获取累计抵扣的金额（单位：元）
 * @method void setDeductAmount(string $DeductAmount) 设置累计抵扣的金额（单位：元）
 * @method string getPromiseAmount() 获取累计承诺消费金额（单位：元）
 * @method void setPromiseAmount(string $PromiseAmount) 设置累计承诺消费金额（单位：元）
 * @method string getNetSavings() 获取累计净节省金额（单位：元）
 * @method void setNetSavings(string $NetSavings) 设置累计净节省金额（单位：元）
 * @method float getUtilizationRate() 获取使用率
 * @method void setUtilizationRate(float $UtilizationRate) 设置使用率
 * @method string getLossAmount() 获取累计流失金额（单位：元）
 * @method void setLossAmount(string $LossAmount) 设置累计流失金额（单位：元）
 * @method string getDosageAmount() 获取累计按量计费预期金额（单位：元）
 * @method void setDosageAmount(string $DosageAmount) 设置累计按量计费预期金额（单位：元）
 * @method string getCostAmount() 获取累计成本金额（单位：元）
 * @method void setCostAmount(string $CostAmount) 设置累计成本金额（单位：元）
 * @method array getRegion() 获取地域
 * @method void setRegion(array $Region) 设置地域
 */
class SavingPlanUsageDetail extends AbstractModel
{
    /**
     * @var string 节省计划类型
     */
    public $SpType;

    /**
     * @var integer 节省计划状态
     */
    public $Status;

    /**
     * @var string 累计抵扣的金额（单位：元）
     */
    public $DeductAmount;

    /**
     * @var string 累计承诺消费金额（单位：元）
     */
    public $PromiseAmount;

    /**
     * @var string 累计净节省金额（单位：元）
     */
    public $NetSavings;

    /**
     * @var float 使用率
     */
    public $UtilizationRate;

    /**
     * @var string 累计流失金额（单位：元）
     */
    public $LossAmount;

    /**
     * @var string 累计按量计费预期金额（单位：元）
     */
    public $DosageAmount;

    /**
     * @var string 累计成本金额（单位：元）
     */
    public $CostAmount;

    /**
     * @var array 地域
     */
    public $Region;

    /**
     * @param string $SpType 节省计划类型
     * @param integer $Status 节省计划状态
     * @param string $DeductAmount 累计抵扣的金额（单位：元）
     * @param string $PromiseAmount 累计承诺消费金额（单位：元）
     * @param string $NetSavings 累计净节省金额（单位：元）
     * @param float $UtilizationRate 使用率
     * @param string $LossAmount 累计流失金额（单位：元）
     * @param string $DosageAmount 累计按量计费预期金额（单位：元）
     * @param string $CostAmount 累计成本金额（单位：元）
     * @param array $Region 地域
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
        if (array_key_exists("SpType",$param) and $param["SpType"] !== null) {
            $this->SpType = $param["SpType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeductAmount",$param) and $param["DeductAmount"] !== null) {
            $this->DeductAmount = $param["DeductAmount"];
        }

        if (array_key_exists("PromiseAmount",$param) and $param["PromiseAmount"] !== null) {
            $this->PromiseAmount = $param["PromiseAmount"];
        }

        if (array_key_exists("NetSavings",$param) and $param["NetSavings"] !== null) {
            $this->NetSavings = $param["NetSavings"];
        }

        if (array_key_exists("UtilizationRate",$param) and $param["UtilizationRate"] !== null) {
            $this->UtilizationRate = $param["UtilizationRate"];
        }

        if (array_key_exists("LossAmount",$param) and $param["LossAmount"] !== null) {
            $this->LossAmount = $param["LossAmount"];
        }

        if (array_key_exists("DosageAmount",$param) and $param["DosageAmount"] !== null) {
            $this->DosageAmount = $param["DosageAmount"];
        }

        if (array_key_exists("CostAmount",$param) and $param["CostAmount"] !== null) {
            $this->CostAmount = $param["CostAmount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
