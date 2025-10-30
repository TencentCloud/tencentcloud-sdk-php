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
 * 查询返回预算完整信息
 *
 * @method string getBudgetName() 获取预算名称
 * @method void setBudgetName(string $BudgetName) 设置预算名称
 * @method string getBudgetQuota() 获取预算额度
 * @method void setBudgetQuota(string $BudgetQuota) 设置预算额度
 * @method string getCycleType() 获取DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
 * @method void setCycleType(string $CycleType) 设置DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
 * @method string getBillType() 获取BILL  系统账单，CONSUMPTION  消耗账单
 * @method void setBillType(string $BillType) 设置BILL  系统账单，CONSUMPTION  消耗账单
 * @method string getFeeType() 获取COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
 * @method void setFeeType(string $FeeType) 设置COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
 * @method string getPeriodBegin() 获取有效期起始时间 2025-01-01
 * @method void setPeriodBegin(string $PeriodBegin) 设置有效期起始时间 2025-01-01
 * @method string getPeriodEnd() 获取有效期结束时间  2025-12-01
 * @method void setPeriodEnd(string $PeriodEnd) 设置有效期结束时间  2025-12-01
 * @method string getDimensions() 获取COST，USAGE，RI，SP
 * @method void setDimensions(string $Dimensions) 设置COST，USAGE，RI，SP
 * @method string getPlanType() 获取FIX 固定值，CYCLE 不同值
 * @method void setPlanType(string $PlanType) 设置FIX 固定值，CYCLE 不同值
 * @method array getWarnJson() 获取阈值提醒
 * @method void setWarnJson(array $WarnJson) 设置阈值提醒
 * @method integer getPayerUin() 获取用户Uin
 * @method void setPayerUin(integer $PayerUin) 设置用户Uin
 * @method array getWaveThresholdJson() 获取波动提醒
 * @method void setWaveThresholdJson(array $WaveThresholdJson) 设置波动提醒
 * @method string getBudgetNote() 获取预算备注
 * @method void setBudgetNote(string $BudgetNote) 设置预算备注
 * @method string getSendDetail() 获取自定义发送对象信息
 * @method void setSendDetail(string $SendDetail) 设置自定义发送对象信息
 * @method integer getDefaultMode() 获取0:默认uin发送
 * @method void setDefaultMode(integer $DefaultMode) 设置0:默认uin发送
 * @method string getTemplateType() 获取CUS 自定义预算，ZERO_COST 零支出预算模板，BY_MONTH 按月费用预算模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateType(string $TemplateType) 设置CUS 自定义预算，ZERO_COST 零支出预算模板，BY_MONTH 按月费用预算模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMoneyStatus() 获取(1, "未超支"),
(2, "超支")
 * @method void setMoneyStatus(integer $MoneyStatus) 设置(1, "未超支"),
(2, "超支")
 * @method integer getRemindTimes() 获取提醒次数
 * @method void setRemindTimes(integer $RemindTimes) 设置提醒次数
 * @method string getCreateTime() 获取创建预算时间
 * @method void setCreateTime(string $CreateTime) 设置创建预算时间
 * @method string getUpdateTime() 获取更新预算时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新预算时间
 * @method string getBudgetId() 获取预算关联Id
 * @method void setBudgetId(string $BudgetId) 设置预算关联Id
 * @method string getHasForecast() 获取NO_FORECAST(没有设置预测),
 FORECAST_NO_DATA(设置了预测,但是没有数据),
FORECAST_HAS_DATA(设置了预测,且有预测数据)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasForecast(string $HasForecast) 设置NO_FORECAST(没有设置预测),
 FORECAST_NO_DATA(设置了预测,但是没有数据),
FORECAST_HAS_DATA(设置了预测,且有预测数据)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getForecastCost() 获取预测费用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForecastCost(string $ForecastCost) 设置预测费用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getForecastProgress() 获取预测进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForecastProgress(string $ForecastProgress) 设置预测进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealCost() 获取实际费用
 * @method void setRealCost(string $RealCost) 设置实际费用
 * @method array getBudgetSendInfoForm() 获取自定义发送
 * @method void setBudgetSendInfoForm(array $BudgetSendInfoForm) 设置自定义发送
 * @method string getCurDateDesc() 获取当前周期
 * @method void setCurDateDesc(string $CurDateDesc) 设置当前周期
 * @method string getBudgetStatus() 获取 EXPIRED  已过期
ACTIVE 生效中
UNACTIVATED 已失效
ACTIVATED 待生效
 * @method void setBudgetStatus(string $BudgetStatus) 设置 EXPIRED  已过期
ACTIVE 生效中
UNACTIVATED 已失效
ACTIVATED 待生效
 * @method BudgetConditionsForm getDimensionsRange() 获取预算维度范围条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensionsRange(BudgetConditionsForm $DimensionsRange) 设置预算维度范围条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBudgetProgress() 获取预算进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetProgress(string $BudgetProgress) 设置预算进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBudgetQuotaJson() 获取预算类型设置为计划预算时返回预算额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetQuotaJson(array $BudgetQuotaJson) 设置预算类型设置为计划预算时返回预算额度
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetExtend extends AbstractModel
{
    /**
     * @var string 预算名称
     */
    public $BudgetName;

    /**
     * @var string 预算额度
     */
    public $BudgetQuota;

    /**
     * @var string DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
     */
    public $CycleType;

    /**
     * @var string BILL  系统账单，CONSUMPTION  消耗账单
     */
    public $BillType;

    /**
     * @var string COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
     */
    public $FeeType;

    /**
     * @var string 有效期起始时间 2025-01-01
     */
    public $PeriodBegin;

    /**
     * @var string 有效期结束时间  2025-12-01
     */
    public $PeriodEnd;

    /**
     * @var string COST，USAGE，RI，SP
     */
    public $Dimensions;

    /**
     * @var string FIX 固定值，CYCLE 不同值
     */
    public $PlanType;

    /**
     * @var array 阈值提醒
     */
    public $WarnJson;

    /**
     * @var integer 用户Uin
     */
    public $PayerUin;

    /**
     * @var array 波动提醒
     */
    public $WaveThresholdJson;

    /**
     * @var string 预算备注
     */
    public $BudgetNote;

    /**
     * @var string 自定义发送对象信息
     */
    public $SendDetail;

    /**
     * @var integer 0:默认uin发送
     */
    public $DefaultMode;

    /**
     * @var string CUS 自定义预算，ZERO_COST 零支出预算模板，BY_MONTH 按月费用预算模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateType;

    /**
     * @var integer (1, "未超支"),
(2, "超支")
     */
    public $MoneyStatus;

    /**
     * @var integer 提醒次数
     */
    public $RemindTimes;

    /**
     * @var string 创建预算时间
     */
    public $CreateTime;

    /**
     * @var string 更新预算时间
     */
    public $UpdateTime;

    /**
     * @var string 预算关联Id
     */
    public $BudgetId;

    /**
     * @var string NO_FORECAST(没有设置预测),
 FORECAST_NO_DATA(设置了预测,但是没有数据),
FORECAST_HAS_DATA(设置了预测,且有预测数据)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasForecast;

    /**
     * @var string 预测费用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForecastCost;

    /**
     * @var string 预测进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForecastProgress;

    /**
     * @var string 实际费用
     */
    public $RealCost;

    /**
     * @var array 自定义发送
     */
    public $BudgetSendInfoForm;

    /**
     * @var string 当前周期
     */
    public $CurDateDesc;

    /**
     * @var string  EXPIRED  已过期
ACTIVE 生效中
UNACTIVATED 已失效
ACTIVATED 待生效
     */
    public $BudgetStatus;

    /**
     * @var BudgetConditionsForm 预算维度范围条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimensionsRange;

    /**
     * @var string 预算进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetProgress;

    /**
     * @var array 预算类型设置为计划预算时返回预算额度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetQuotaJson;

    /**
     * @param string $BudgetName 预算名称
     * @param string $BudgetQuota 预算额度
     * @param string $CycleType DAY 天，MONTH 月度，QUARTER 季度 ，YEAR 年度
     * @param string $BillType BILL  系统账单，CONSUMPTION  消耗账单
     * @param string $FeeType COST 原价，REAL_COST 实际费用，CASH 现金，INCENTIVE 赠送金，VOUCHER 代金券，TRANSFER 分成金，TAX 税，AMOUNT_BEFORE_TAX 现金支付(税前)
     * @param string $PeriodBegin 有效期起始时间 2025-01-01
     * @param string $PeriodEnd 有效期结束时间  2025-12-01
     * @param string $Dimensions COST，USAGE，RI，SP
     * @param string $PlanType FIX 固定值，CYCLE 不同值
     * @param array $WarnJson 阈值提醒
     * @param integer $PayerUin 用户Uin
     * @param array $WaveThresholdJson 波动提醒
     * @param string $BudgetNote 预算备注
     * @param string $SendDetail 自定义发送对象信息
     * @param integer $DefaultMode 0:默认uin发送
     * @param string $TemplateType CUS 自定义预算，ZERO_COST 零支出预算模板，BY_MONTH 按月费用预算模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MoneyStatus (1, "未超支"),
(2, "超支")
     * @param integer $RemindTimes 提醒次数
     * @param string $CreateTime 创建预算时间
     * @param string $UpdateTime 更新预算时间
     * @param string $BudgetId 预算关联Id
     * @param string $HasForecast NO_FORECAST(没有设置预测),
 FORECAST_NO_DATA(设置了预测,但是没有数据),
FORECAST_HAS_DATA(设置了预测,且有预测数据)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ForecastCost 预测费用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ForecastProgress 预测进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealCost 实际费用
     * @param array $BudgetSendInfoForm 自定义发送
     * @param string $CurDateDesc 当前周期
     * @param string $BudgetStatus  EXPIRED  已过期
ACTIVE 生效中
UNACTIVATED 已失效
ACTIVATED 待生效
     * @param BudgetConditionsForm $DimensionsRange 预算维度范围条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BudgetProgress 预算进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BudgetQuotaJson 预算类型设置为计划预算时返回预算额度
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
        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("BudgetQuota",$param) and $param["BudgetQuota"] !== null) {
            $this->BudgetQuota = $param["BudgetQuota"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("PeriodBegin",$param) and $param["PeriodBegin"] !== null) {
            $this->PeriodBegin = $param["PeriodBegin"];
        }

        if (array_key_exists("PeriodEnd",$param) and $param["PeriodEnd"] !== null) {
            $this->PeriodEnd = $param["PeriodEnd"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("WarnJson",$param) and $param["WarnJson"] !== null) {
            $this->WarnJson = [];
            foreach ($param["WarnJson"] as $key => $value){
                $obj = new BudgetWarn();
                $obj->deserialize($value);
                array_push($this->WarnJson, $obj);
            }
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("WaveThresholdJson",$param) and $param["WaveThresholdJson"] !== null) {
            $this->WaveThresholdJson = [];
            foreach ($param["WaveThresholdJson"] as $key => $value){
                $obj = new WaveThresholdForm();
                $obj->deserialize($value);
                array_push($this->WaveThresholdJson, $obj);
            }
        }

        if (array_key_exists("BudgetNote",$param) and $param["BudgetNote"] !== null) {
            $this->BudgetNote = $param["BudgetNote"];
        }

        if (array_key_exists("SendDetail",$param) and $param["SendDetail"] !== null) {
            $this->SendDetail = $param["SendDetail"];
        }

        if (array_key_exists("DefaultMode",$param) and $param["DefaultMode"] !== null) {
            $this->DefaultMode = $param["DefaultMode"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("MoneyStatus",$param) and $param["MoneyStatus"] !== null) {
            $this->MoneyStatus = $param["MoneyStatus"];
        }

        if (array_key_exists("RemindTimes",$param) and $param["RemindTimes"] !== null) {
            $this->RemindTimes = $param["RemindTimes"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("HasForecast",$param) and $param["HasForecast"] !== null) {
            $this->HasForecast = $param["HasForecast"];
        }

        if (array_key_exists("ForecastCost",$param) and $param["ForecastCost"] !== null) {
            $this->ForecastCost = $param["ForecastCost"];
        }

        if (array_key_exists("ForecastProgress",$param) and $param["ForecastProgress"] !== null) {
            $this->ForecastProgress = $param["ForecastProgress"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("BudgetSendInfoForm",$param) and $param["BudgetSendInfoForm"] !== null) {
            $this->BudgetSendInfoForm = [];
            foreach ($param["BudgetSendInfoForm"] as $key => $value){
                $obj = new BudgetSendInfoDto();
                $obj->deserialize($value);
                array_push($this->BudgetSendInfoForm, $obj);
            }
        }

        if (array_key_exists("CurDateDesc",$param) and $param["CurDateDesc"] !== null) {
            $this->CurDateDesc = $param["CurDateDesc"];
        }

        if (array_key_exists("BudgetStatus",$param) and $param["BudgetStatus"] !== null) {
            $this->BudgetStatus = $param["BudgetStatus"];
        }

        if (array_key_exists("DimensionsRange",$param) and $param["DimensionsRange"] !== null) {
            $this->DimensionsRange = new BudgetConditionsForm();
            $this->DimensionsRange->deserialize($param["DimensionsRange"]);
        }

        if (array_key_exists("BudgetProgress",$param) and $param["BudgetProgress"] !== null) {
            $this->BudgetProgress = $param["BudgetProgress"];
        }

        if (array_key_exists("BudgetQuotaJson",$param) and $param["BudgetQuotaJson"] !== null) {
            $this->BudgetQuotaJson = [];
            foreach ($param["BudgetQuotaJson"] as $key => $value){
                $obj = new BudgetPlan();
                $obj->deserialize($value);
                array_push($this->BudgetQuotaJson, $obj);
            }
        }
    }
}
