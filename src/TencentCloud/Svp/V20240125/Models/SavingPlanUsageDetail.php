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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划使用率数据
 *
 * @method string getSpId() 获取<p>节省计划资源id</p>
 * @method void setSpId(string $SpId) 设置<p>节省计划资源id</p>
 * @method string getSpType() 获取<p>节省计划类型</p>
 * @method void setSpType(string $SpType) 设置<p>节省计划类型</p>
 * @method integer getStatus() 获取<p>节省计划状态</p>枚举值：<ul><li> 1：  生效</li><li> 2： 失效 </li><li> 3： 作废</li></ul>
 * @method void setStatus(integer $Status) 设置<p>节省计划状态</p>枚举值：<ul><li> 1：  生效</li><li> 2： 失效 </li><li> 3： 作废</li></ul>
 * @method string getDeductAmount() 获取<p>累计抵扣的金额（单位：元）</p>
 * @method void setDeductAmount(string $DeductAmount) 设置<p>累计抵扣的金额（单位：元）</p>
 * @method string getPromiseAmount() 获取<p>累计承诺消费金额（单位：元）</p>
 * @method void setPromiseAmount(string $PromiseAmount) 设置<p>累计承诺消费金额（单位：元）</p>
 * @method string getNetSavings() 获取<p>累计净节省金额（单位：元）</p>
 * @method void setNetSavings(string $NetSavings) 设置<p>累计净节省金额（单位：元）</p>
 * @method float getUtilizationRate() 获取<p>使用率</p>
 * @method void setUtilizationRate(float $UtilizationRate) 设置<p>使用率</p>
 * @method string getLossAmount() 获取<p>累计流失金额（单位：元）</p>
 * @method void setLossAmount(string $LossAmount) 设置<p>累计流失金额（单位：元）</p>
 * @method string getDosageAmount() 获取<p>累计按量计费预期金额（单位：元）</p>
 * @method void setDosageAmount(string $DosageAmount) 设置<p>累计按量计费预期金额（单位：元）</p>
 * @method string getCostAmount() 获取<p>累计成本金额（单位：元）</p>
 * @method void setCostAmount(string $CostAmount) 设置<p>累计成本金额（单位：元）</p>
 * @method array getRegion() 获取<p>地域</p>
 * @method void setRegion(array $Region) 设置<p>地域</p>
 */
class SavingPlanUsageDetail extends AbstractModel
{
    /**
     * @var string <p>节省计划资源id</p>
     */
    public $SpId;

    /**
     * @var string <p>节省计划类型</p>
     */
    public $SpType;

    /**
     * @var integer <p>节省计划状态</p>枚举值：<ul><li> 1：  生效</li><li> 2： 失效 </li><li> 3： 作废</li></ul>
     */
    public $Status;

    /**
     * @var string <p>累计抵扣的金额（单位：元）</p>
     */
    public $DeductAmount;

    /**
     * @var string <p>累计承诺消费金额（单位：元）</p>
     */
    public $PromiseAmount;

    /**
     * @var string <p>累计净节省金额（单位：元）</p>
     */
    public $NetSavings;

    /**
     * @var float <p>使用率</p>
     */
    public $UtilizationRate;

    /**
     * @var string <p>累计流失金额（单位：元）</p>
     */
    public $LossAmount;

    /**
     * @var string <p>累计按量计费预期金额（单位：元）</p>
     */
    public $DosageAmount;

    /**
     * @var string <p>累计成本金额（单位：元）</p>
     */
    public $CostAmount;

    /**
     * @var array <p>地域</p>
     */
    public $Region;

    /**
     * @param string $SpId <p>节省计划资源id</p>
     * @param string $SpType <p>节省计划类型</p>
     * @param integer $Status <p>节省计划状态</p>枚举值：<ul><li> 1：  生效</li><li> 2： 失效 </li><li> 3： 作废</li></ul>
     * @param string $DeductAmount <p>累计抵扣的金额（单位：元）</p>
     * @param string $PromiseAmount <p>累计承诺消费金额（单位：元）</p>
     * @param string $NetSavings <p>累计净节省金额（单位：元）</p>
     * @param float $UtilizationRate <p>使用率</p>
     * @param string $LossAmount <p>累计流失金额（单位：元）</p>
     * @param string $DosageAmount <p>累计按量计费预期金额（单位：元）</p>
     * @param string $CostAmount <p>累计成本金额（单位：元）</p>
     * @param array $Region <p>地域</p>
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
        if (array_key_exists("SpId",$param) and $param["SpId"] !== null) {
            $this->SpId = $param["SpId"];
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
