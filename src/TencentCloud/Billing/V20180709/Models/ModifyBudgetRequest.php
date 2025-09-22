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
 * ModifyBudget请求参数结构体
 *
 * @method string getBudgetId() 获取预算项目id
 * @method void setBudgetId(string $BudgetId) 设置预算项目id
 * @method string getBudgetName() 获取预算名称
 * @method void setBudgetName(string $BudgetName) 设置预算名称
 * @method string getCycleType() 获取DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
 * @method void setCycleType(string $CycleType) 设置DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
 * @method string getPeriodBegin() 获取有效期起始时间 2025-01-01
 * @method void setPeriodBegin(string $PeriodBegin) 设置有效期起始时间 2025-01-01
 * @method string getPeriodEnd() 获取有效期结束时间  2025-12-01
 * @method void setPeriodEnd(string $PeriodEnd) 设置有效期结束时间  2025-12-01
 * @method string getPlanType() 获取FIX 固定值，CYCLE 不同值
 * @method void setPlanType(string $PlanType) 设置FIX 固定值，CYCLE 不同值
 * @method string getBudgetQuota() 获取预算值额度 
预算计划类型固定预算时设为定值；
预算计划类型为CYCLE(计划预算)时传[{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}]；
 * @method void setBudgetQuota(string $BudgetQuota) 设置预算值额度 
预算计划类型固定预算时设为定值；
预算计划类型为CYCLE(计划预算)时传[{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}]；
 * @method string getBillType() 获取BILL  系统账单，CONSUMPTION  消耗账单
 * @method void setBillType(string $BillType) 设置BILL  系统账单，CONSUMPTION  消耗账单
 * @method string getFeeType() 获取COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
 * @method void setFeeType(string $FeeType) 设置COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
 * @method array getWarnJson() 获取阈值提醒
 * @method void setWarnJson(array $WarnJson) 设置阈值提醒
 * @method string getBudgetNote() 获取预算备注
 * @method void setBudgetNote(string $BudgetNote) 设置预算备注
 * @method BudgetConditionsForm getDimensionsRange() 获取预算维度范围条件
 * @method void setDimensionsRange(BudgetConditionsForm $DimensionsRange) 设置预算维度范围条件
 * @method array getWaveThresholdJson() 获取波动提醒
 * @method void setWaveThresholdJson(array $WaveThresholdJson) 设置波动提醒
 */
class ModifyBudgetRequest extends AbstractModel
{
    /**
     * @var string 预算项目id
     */
    public $BudgetId;

    /**
     * @var string 预算名称
     */
    public $BudgetName;

    /**
     * @var string DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
     */
    public $CycleType;

    /**
     * @var string 有效期起始时间 2025-01-01
     */
    public $PeriodBegin;

    /**
     * @var string 有效期结束时间  2025-12-01
     */
    public $PeriodEnd;

    /**
     * @var string FIX 固定值，CYCLE 不同值
     */
    public $PlanType;

    /**
     * @var string 预算值额度 
预算计划类型固定预算时设为定值；
预算计划类型为CYCLE(计划预算)时传[{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}]；
     */
    public $BudgetQuota;

    /**
     * @var string BILL  系统账单，CONSUMPTION  消耗账单
     */
    public $BillType;

    /**
     * @var string COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
     */
    public $FeeType;

    /**
     * @var array 阈值提醒
     */
    public $WarnJson;

    /**
     * @var string 预算备注
     */
    public $BudgetNote;

    /**
     * @var BudgetConditionsForm 预算维度范围条件
     */
    public $DimensionsRange;

    /**
     * @var array 波动提醒
     */
    public $WaveThresholdJson;

    /**
     * @param string $BudgetId 预算项目id
     * @param string $BudgetName 预算名称
     * @param string $CycleType DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
     * @param string $PeriodBegin 有效期起始时间 2025-01-01
     * @param string $PeriodEnd 有效期结束时间  2025-12-01
     * @param string $PlanType FIX 固定值，CYCLE 不同值
     * @param string $BudgetQuota 预算值额度 
预算计划类型固定预算时设为定值；
预算计划类型为CYCLE(计划预算)时传[{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}]；
     * @param string $BillType BILL  系统账单，CONSUMPTION  消耗账单
     * @param string $FeeType COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
     * @param array $WarnJson 阈值提醒
     * @param string $BudgetNote 预算备注
     * @param BudgetConditionsForm $DimensionsRange 预算维度范围条件
     * @param array $WaveThresholdJson 波动提醒
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
        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("PeriodBegin",$param) and $param["PeriodBegin"] !== null) {
            $this->PeriodBegin = $param["PeriodBegin"];
        }

        if (array_key_exists("PeriodEnd",$param) and $param["PeriodEnd"] !== null) {
            $this->PeriodEnd = $param["PeriodEnd"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("BudgetQuota",$param) and $param["BudgetQuota"] !== null) {
            $this->BudgetQuota = $param["BudgetQuota"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("WarnJson",$param) and $param["WarnJson"] !== null) {
            $this->WarnJson = [];
            foreach ($param["WarnJson"] as $key => $value){
                $obj = new BudgetWarn();
                $obj->deserialize($value);
                array_push($this->WarnJson, $obj);
            }
        }

        if (array_key_exists("BudgetNote",$param) and $param["BudgetNote"] !== null) {
            $this->BudgetNote = $param["BudgetNote"];
        }

        if (array_key_exists("DimensionsRange",$param) and $param["DimensionsRange"] !== null) {
            $this->DimensionsRange = new BudgetConditionsForm();
            $this->DimensionsRange->deserialize($param["DimensionsRange"]);
        }

        if (array_key_exists("WaveThresholdJson",$param) and $param["WaveThresholdJson"] !== null) {
            $this->WaveThresholdJson = [];
            foreach ($param["WaveThresholdJson"] as $key => $value){
                $obj = new WaveThresholdForm();
                $obj->deserialize($value);
                array_push($this->WaveThresholdJson, $obj);
            }
        }
    }
}
