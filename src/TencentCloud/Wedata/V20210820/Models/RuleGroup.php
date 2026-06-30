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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量规则组
 *
 * @method integer getRuleGroupId() 获取<p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置<p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取<p>数据源Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置<p>数据源Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取<p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置<p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取<p>数据源类型：2-HIVE(EMR-Hive)，3-DLC，5-TCHouse-P，6-ICEBERG(EMR-Iceberg)，7-DORIS，8-TCHouse-D，9-EMR-StarRocks，11-TCHouse-X</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置<p>数据源类型：2-HIVE(EMR-Hive)，3-DLC，5-TCHouse-P，6-ICEBERG(EMR-Iceberg)，7-DORIS，8-TCHouse-D，9-EMR-StarRocks，11-TCHouse-X</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取<p>监控类型：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置<p>监控类型：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>关联数据表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>关联数据表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取<p>关联数据表Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置<p>关联数据表Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerName() 获取<p>关联数据表负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerName(string $TableOwnerName) 设置<p>关联数据表负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleGroupExecStrategy getExecStrategy() 获取<p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecStrategy(RuleGroupExecStrategy $ExecStrategy) 设置<p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleGroupSubscribe getSubscription() 获取<p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscription(RuleGroupSubscribe $Subscription) 设置<p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取<p>数据库id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置<p>数据库id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取<p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置<p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPermission() 获取<p>是否有权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(boolean $Permission) 设置<p>是否有权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取<p>已经配置的规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置<p>已经配置的规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMonitorStatus() 获取<p>监控是否开启：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorStatus(boolean $MonitorStatus) 设置<p>监控是否开启：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableOwnerUserId() 获取<p>表负责人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerUserId(integer $TableOwnerUserId) 设置<p>表负责人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStrategyConfig() 获取<p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyConfig(boolean $StrategyConfig) 设置<p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubscribeConfig() 获取<p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscribeConfig(boolean $SubscribeConfig) 设置<p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDsEnvType() 获取<p>数据源环境：0或者未返回.未定义，1.生产 2.开发</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDsEnvType(integer $DsEnvType) 设置<p>数据源环境：0或者未返回.未定义，1.生产 2.开发</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterDeployType() 获取<p>EMR集群部署方式：CVM/TKE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDeployType(string $ClusterDeployType) 设置<p>EMR集群部署方式：CVM/TKE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecDetail() 获取<p>执行详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecDetail(string $ExecDetail) 设置<p>执行详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPipelineTaskCount() 获取<p>事中关联任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPipelineTaskCount(integer $PipelineTaskCount) 设置<p>事中关联任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableRuleCount() 获取<p>有效规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRuleCount(integer $EnableRuleCount) 设置<p>有效规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserName() 获取<p>监控创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserName(string $CreateUserName) 设置<p>监控创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupType() 获取<p>任务类型（同MonitorType）：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupType(string $GroupType) 设置<p>任务类型（同MonitorType）：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAspectTaskId() 获取<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAspectTaskId(string $AspectTaskId) 设置<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取<p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置<p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeId() 获取<p>负责人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeId(string $InChargeId) 设置<p>负责人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeName() 获取<p>负责人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeName(string $InChargeName) 设置<p>负责人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroup extends AbstractModel
{
    /**
     * @var integer <p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string <p>数据源Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string <p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var integer <p>数据源类型：2-HIVE(EMR-Hive)，3-DLC，5-TCHouse-P，6-ICEBERG(EMR-Iceberg)，7-DORIS，8-TCHouse-D，9-EMR-StarRocks，11-TCHouse-X</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var integer <p>监控类型：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>关联数据表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string <p>关联数据表Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string <p>关联数据表负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerName;

    /**
     * @var RuleGroupExecStrategy <p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecStrategy;

    /**
     * @var RuleGroupSubscribe <p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subscription;

    /**
     * @var string <p>数据库id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string <p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var boolean <p>是否有权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @var integer <p>已经配置的规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @var boolean <p>监控是否开启：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorStatus;

    /**
     * @var integer <p>表负责人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerUserId;

    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean <p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyConfig;

    /**
     * @var boolean <p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscribeConfig;

    /**
     * @var integer <p>数据源环境：0或者未返回.未定义，1.生产 2.开发</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DsEnvType;

    /**
     * @var string <p>EMR集群部署方式：CVM/TKE</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDeployType;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>执行详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecDetail;

    /**
     * @var integer <p>事中关联任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PipelineTaskCount;

    /**
     * @var integer <p>有效规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRuleCount;

    /**
     * @var string <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>监控创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserName;

    /**
     * @var string <p>任务类型（同MonitorType）：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupType;

    /**
     * @var string <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AspectTaskId;

    /**
     * @var string <p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var string <p>负责人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeId;

    /**
     * @var string <p>负责人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeName;

    /**
     * @param integer $RuleGroupId <p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId <p>数据源Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName <p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType <p>数据源类型：2-HIVE(EMR-Hive)，3-DLC，5-TCHouse-P，6-ICEBERG(EMR-Iceberg)，7-DORIS，8-TCHouse-D，9-EMR-StarRocks，11-TCHouse-X</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType <p>监控类型：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>关联数据表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId <p>关联数据表Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerName <p>关联数据表负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleGroupExecStrategy $ExecStrategy <p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleGroupSubscribe $Subscription <p>执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId <p>数据库id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName <p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Permission <p>是否有权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount <p>已经配置的规则数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MonitorStatus <p>监控是否开启：0-关闭，1-开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableOwnerUserId <p>表负责人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StrategyConfig <p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SubscribeConfig <p>是否已配置执行策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DsEnvType <p>数据源环境：0或者未返回.未定义，1.生产 2.开发</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterDeployType <p>EMR集群部署方式：CVM/TKE</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecDetail <p>执行详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PipelineTaskCount <p>事中关联任务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableRuleCount <p>有效规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserName <p>监控创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupType <p>任务类型（同MonitorType）：1-未配置，2-关联生产调度，3-离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AspectTaskId <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName <p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeId <p>负责人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeName <p>负责人名称</p>
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
            $this->ExecStrategy = new RuleGroupExecStrategy();
            $this->ExecStrategy->deserialize($param["ExecStrategy"]);
        }

        if (array_key_exists("Subscription",$param) and $param["Subscription"] !== null) {
            $this->Subscription = new RuleGroupSubscribe();
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

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("InChargeName",$param) and $param["InChargeName"] !== null) {
            $this->InChargeName = $param["InChargeName"];
        }
    }
}
