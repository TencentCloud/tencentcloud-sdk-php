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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计实例信息
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getAuditStatus() 获取审计状态。
 * @method void setAuditStatus(string $AuditStatus) 设置审计状态。
 * @method integer getAuditTask() 获取是否存在审计任务，0：无任务，1：创建中，2：关闭中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditTask(integer $AuditTask) 设置是否存在审计任务，0：无任务，1：创建中，2：关闭中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogExpireDay() 获取审计日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置审计日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHighLogExpireDay() 获取高频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLowLogExpireDay() 获取低频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) 设置低频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getBillingAmount() 获取费用信息。
 * @method void setBillingAmount(float $BillingAmount) 设置费用信息。
 * @method float getHighRealStorage() 获取高频存储容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighRealStorage(float $HighRealStorage) 设置高频存储容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLowRealStorage() 获取低频存储容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowRealStorage(float $LowRealStorage) 设置低频存储容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceInfo getInstanceInfo() 获取实例详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInfo(InstanceInfo $InstanceInfo) 设置实例详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPerformancesAnalyse() 获取性能分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPerformancesAnalyse(integer $PerformancesAnalyse) 设置性能分析
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuditAll() 获取true表示全审计，false表示规则审计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditAll(boolean $AuditAll) 设置true表示全审计，false表示规则审计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateAt() 获取实例审计最近一次的开通时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateAt(string $CreateAt) 设置实例审计最近一次的开通时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleTemplateIds() 获取实例绑定的规则模版ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置实例绑定的规则模版ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliver() 获取是否开启投递：ON，OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliver(string $Deliver) 设置是否开启投递：ON，OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeliverSummary() 获取日志投递信息
 * @method void setDeliverSummary(array $DeliverSummary) 设置日志投递信息
 * @method boolean getOldRule() 获取旧规则
 * @method void setOldRule(boolean $OldRule) 设置旧规则
 * @method float getRealStorage() 获取实际存储容量
 * @method void setRealStorage(float $RealStorage) 设置实际存储容量
 */
class AuditInstance extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 审计状态。
     */
    public $AuditStatus;

    /**
     * @var integer 是否存在审计任务，0：无任务，1：创建中，2：关闭中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditTask;

    /**
     * @var integer 审计日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogExpireDay;

    /**
     * @var integer 高频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighLogExpireDay;

    /**
     * @var integer 低频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowLogExpireDay;

    /**
     * @var float 费用信息。
     */
    public $BillingAmount;

    /**
     * @var float 高频存储容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighRealStorage;

    /**
     * @var float 低频存储容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowRealStorage;

    /**
     * @var InstanceInfo 实例详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInfo;

    /**
     * @var integer 性能分析
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PerformancesAnalyse;

    /**
     * @var boolean true表示全审计，false表示规则审计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditAll;

    /**
     * @var string 实例审计最近一次的开通时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateAt;

    /**
     * @var array 实例绑定的规则模版ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateIds;

    /**
     * @var string 是否开启投递：ON，OFF
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deliver;

    /**
     * @var array 日志投递信息
     */
    public $DeliverSummary;

    /**
     * @var boolean 旧规则
     */
    public $OldRule;

    /**
     * @var float 实际存储容量
     */
    public $RealStorage;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $AuditStatus 审计状态。
     * @param integer $AuditTask 是否存在审计任务，0：无任务，1：创建中，2：关闭中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogExpireDay 审计日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HighLogExpireDay 高频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LowLogExpireDay 低频日志过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $BillingAmount 费用信息。
     * @param float $HighRealStorage 高频存储容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LowRealStorage 低频存储容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceInfo $InstanceInfo 实例详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PerformancesAnalyse 性能分析
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AuditAll true表示全审计，false表示规则审计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateAt 实例审计最近一次的开通时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleTemplateIds 实例绑定的规则模版ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Deliver 是否开启投递：ON，OFF
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeliverSummary 日志投递信息
     * @param boolean $OldRule 旧规则
     * @param float $RealStorage 实际存储容量
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditTask",$param) and $param["AuditTask"] !== null) {
            $this->AuditTask = $param["AuditTask"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("LowLogExpireDay",$param) and $param["LowLogExpireDay"] !== null) {
            $this->LowLogExpireDay = $param["LowLogExpireDay"];
        }

        if (array_key_exists("BillingAmount",$param) and $param["BillingAmount"] !== null) {
            $this->BillingAmount = $param["BillingAmount"];
        }

        if (array_key_exists("HighRealStorage",$param) and $param["HighRealStorage"] !== null) {
            $this->HighRealStorage = $param["HighRealStorage"];
        }

        if (array_key_exists("LowRealStorage",$param) and $param["LowRealStorage"] !== null) {
            $this->LowRealStorage = $param["LowRealStorage"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("PerformancesAnalyse",$param) and $param["PerformancesAnalyse"] !== null) {
            $this->PerformancesAnalyse = $param["PerformancesAnalyse"];
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DeliverSummary",$param) and $param["DeliverSummary"] !== null) {
            $this->DeliverSummary = [];
            foreach ($param["DeliverSummary"] as $key => $value){
                $obj = new DeliverSummary();
                $obj->deserialize($value);
                array_push($this->DeliverSummary, $obj);
            }
        }

        if (array_key_exists("OldRule",$param) and $param["OldRule"] !== null) {
            $this->OldRule = $param["OldRule"];
        }

        if (array_key_exists("RealStorage",$param) and $param["RealStorage"] !== null) {
            $this->RealStorage = $param["RealStorage"];
        }
    }
}
