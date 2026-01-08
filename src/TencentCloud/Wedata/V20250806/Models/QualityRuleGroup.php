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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量监控任务
 *
 * @method integer getRuleGroupId() 获取规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取关联数据表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置关联数据表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取关联数据表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置关联数据表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerName() 获取关联数据表负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerName(string $TableOwnerName) 设置关联数据表负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityRuleGroupExecStrategy getExecStrategy() 获取执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecStrategy(QualityRuleGroupExecStrategy $ExecStrategy) 设置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityRuleGroupSubscribe getSubscription() 获取订阅信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscription(QualityRuleGroupSubscribe $Subscription) 设置订阅信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPermission() 获取是否有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(boolean $Permission) 设置是否有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取已经配置的规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置已经配置的规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMonitorStatus() 获取监控状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorStatus(boolean $MonitorStatus) 设置监控状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableOwnerUserId() 获取表负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerUserId(integer $TableOwnerUserId) 设置表负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStrategyConfig() 获取是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyConfig(boolean $StrategyConfig) 设置是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubscribeConfig() 获取是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscribeConfig(boolean $SubscribeConfig) 设置是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDsEnvType() 获取数据源环境：0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDsEnvType(integer $DsEnvType) 设置数据源环境：0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterDeployType() 获取EMR集群部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDeployType(string $ClusterDeployType) 设置EMR集群部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecDetail() 获取执行详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecDetail(string $ExecDetail) 设置执行详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPipelineTaskCount() 获取事中关联任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPipelineTaskCount(integer $PipelineTaskCount) 设置事中关联任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableRuleCount() 获取有效规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRuleCount(integer $EnableRuleCount) 设置有效规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserName() 获取监控创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserName(string $CreateUserName) 设置监控创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupType(string $GroupType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAspectTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAspectTaskId(string $AspectTaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityRuleGroup extends AbstractModel
{
    /**
     * @var integer 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var integer 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var integer 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 关联数据表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 关联数据表Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 关联数据表负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerName;

    /**
     * @var QualityRuleGroupExecStrategy 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecStrategy;

    /**
     * @var QualityRuleGroupSubscribe 订阅信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subscription;

    /**
     * @var string 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var boolean 是否有权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @var integer 已经配置的规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @var boolean 监控状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorStatus;

    /**
     * @var integer 表负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerUserId;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean 是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyConfig;

    /**
     * @var boolean 是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscribeConfig;

    /**
     * @var integer 数据源环境：0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DsEnvType;

    /**
     * @var string EMR集群部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDeployType;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 执行详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecDetail;

    /**
     * @var integer 事中关联任务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PipelineTaskCount;

    /**
     * @var integer 有效规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRuleCount;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 监控创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserName;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupType;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AspectTaskId;

    /**
     * @var string 数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @param integer $RuleGroupId 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 关联数据表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 关联数据表Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerName 关联数据表负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityRuleGroupExecStrategy $ExecStrategy 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityRuleGroupSubscribe $Subscription 订阅信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Permission 是否有权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount 已经配置的规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MonitorStatus 监控状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableOwnerUserId 表负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StrategyConfig 是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SubscribeConfig 是否已配置执行策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DsEnvType 数据源环境：0或者未返回.未定义，1.生产 2.开发
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterDeployType EMR集群部署方式：CVM/TKE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecDetail 执行详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PipelineTaskCount 事中关联任务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableRuleCount 有效规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserName 监控创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AspectTaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName 数据目录名称
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("ExecStrategy",$param) and $param["ExecStrategy"] !== null) {
            $this->ExecStrategy = new QualityRuleGroupExecStrategy();
            $this->ExecStrategy->deserialize($param["ExecStrategy"]);
        }

        if (array_key_exists("Subscription",$param) and $param["Subscription"] !== null) {
            $this->Subscription = new QualityRuleGroupSubscribe();
            $this->Subscription->deserialize($param["Subscription"]);
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("TableOwnerUserId",$param) and $param["TableOwnerUserId"] !== null) {
            $this->TableOwnerUserId = $param["TableOwnerUserId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StrategyConfig",$param) and $param["StrategyConfig"] !== null) {
            $this->StrategyConfig = $param["StrategyConfig"];
        }

        if (array_key_exists("SubscribeConfig",$param) and $param["SubscribeConfig"] !== null) {
            $this->SubscribeConfig = $param["SubscribeConfig"];
        }

        if (array_key_exists("DsEnvType",$param) and $param["DsEnvType"] !== null) {
            $this->DsEnvType = $param["DsEnvType"];
        }

        if (array_key_exists("ClusterDeployType",$param) and $param["ClusterDeployType"] !== null) {
            $this->ClusterDeployType = $param["ClusterDeployType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExecDetail",$param) and $param["ExecDetail"] !== null) {
            $this->ExecDetail = $param["ExecDetail"];
        }

        if (array_key_exists("PipelineTaskCount",$param) and $param["PipelineTaskCount"] !== null) {
            $this->PipelineTaskCount = $param["PipelineTaskCount"];
        }

        if (array_key_exists("EnableRuleCount",$param) and $param["EnableRuleCount"] !== null) {
            $this->EnableRuleCount = $param["EnableRuleCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateUserName",$param) and $param["CreateUserName"] !== null) {
            $this->CreateUserName = $param["CreateUserName"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("AspectTaskId",$param) and $param["AspectTaskId"] !== null) {
            $this->AspectTaskId = $param["AspectTaskId"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
