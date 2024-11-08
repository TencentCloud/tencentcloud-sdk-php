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
 * @method string getEngineType() 获取实际执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置实际执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleExecResultVOList() 获取规则执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleExecResultVOList(array $RuleExecResultVOList) 设置规则执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleGroupTableId() 获取本地规则表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupTableId(string $RuleGroupTableId) 设置本地规则表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterDeployType() 获取集群部署类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDeployType(string $ClusterDeployType) 设置集群部署类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDsEnvType() 获取数据库所属环境，0.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDsEnvType(string $DsEnvType) 设置数据库所属环境，0.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取实例运行的开始时间
 * @method void setStartTime(string $StartTime) 设置实例运行的开始时间
 * @method string getFinishTime() 获取实例运行的结束时间
 * @method void setFinishTime(string $FinishTime) 设置实例运行的结束时间
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
     * @var string 实际执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var array 规则执行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleExecResultVOList;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 本地规则表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupTableId;

    /**
     * @var string 集群部署类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDeployType;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据库所属环境，0.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DsEnvType;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string 实例运行的开始时间
     */
    public $StartTime;

    /**
     * @var string 实例运行的结束时间
     */
    public $FinishTime;

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
     * @param string $EngineType 实际执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleExecResultVOList 规则执行结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleGroupTableId 本地规则表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterDeployType 集群部署类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DsEnvType 数据库所属环境，0.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 实例运行的开始时间
     * @param string $FinishTime 实例运行的结束时间
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

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("RuleExecResultVOList",$param) and $param["RuleExecResultVOList"] !== null) {
            $this->RuleExecResultVOList = [];
            foreach ($param["RuleExecResultVOList"] as $key => $value){
                $obj = new RuleExecResult();
                $obj->deserialize($value);
                array_push($this->RuleExecResultVOList, $obj);
            }
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("RuleGroupTableId",$param) and $param["RuleGroupTableId"] !== null) {
            $this->RuleGroupTableId = $param["RuleGroupTableId"];
        }

        if (array_key_exists("ClusterDeployType",$param) and $param["ClusterDeployType"] !== null) {
            $this->ClusterDeployType = $param["ClusterDeployType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
