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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则组执行结果
 *
 * @method integer getRuleGroupExecId() 获取规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) 设置规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerType() 获取执行触发类型（1：手动触发， 2：调度事中触发，3：周期调度触发）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(integer $TriggerType) 设置执行触发类型（1：手动触发， 2：调度事中触发，3：周期调度触发）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecTime() 获取执行时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecTime(string $ExecTime) 设置执行时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取执行状态（1.已提交 2.检测中 3.正常 4.异常）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置执行状态（1.已提交 2.检测中 3.正常 4.异常）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmRuleCount() 获取异常规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmRuleCount(integer $AlarmRuleCount) 设置异常规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRuleCount() 获取总规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRuleCount(integer $TotalRuleCount) 设置总规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerName() 获取源表负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerName(string $TableOwnerName) 设置源表负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取源表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置源表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPermission() 获取有无权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(boolean $Permission) 设置有无权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecDetail() 获取执行详情，调度计划或者关联生产任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecDetail(string $ExecDetail) 设置执行详情，调度计划或者关联生产任务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupExecResult extends AbstractModel
{
    /**
     * @var integer 规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupExecId;

    /**
     * @var integer 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var integer 执行触发类型（1：手动触发， 2：调度事中触发，3：周期调度触发）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 执行时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecTime;

    /**
     * @var integer 执行状态（1.已提交 2.检测中 3.正常 4.异常）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 异常规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmRuleCount;

    /**
     * @var integer 总规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRuleCount;

    /**
     * @var string 源表负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerName;

    /**
     * @var string 源表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var boolean 有无权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @var string 执行详情，调度计划或者关联生产任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecDetail;

    /**
     * @param integer $RuleGroupExecId 规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerType 执行触发类型（1：手动触发， 2：调度事中触发，3：周期调度触发）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecTime 执行时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 执行状态（1.已提交 2.检测中 3.正常 4.异常）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmRuleCount 异常规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRuleCount 总规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerName 源表负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 源表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Permission 有无权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecDetail 执行详情，调度计划或者关联生产任务ID
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
        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AlarmRuleCount",$param) and $param["AlarmRuleCount"] !== null) {
            $this->AlarmRuleCount = $param["AlarmRuleCount"];
        }

        if (array_key_exists("TotalRuleCount",$param) and $param["TotalRuleCount"] !== null) {
            $this->TotalRuleCount = $param["TotalRuleCount"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("ExecDetail",$param) and $param["ExecDetail"] !== null) {
            $this->ExecDetail = $param["ExecDetail"];
        }
    }
}
