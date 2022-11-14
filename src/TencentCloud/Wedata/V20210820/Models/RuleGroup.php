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
 * 数据质量规则组
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
 * @method RuleGroupExecStrategy getExecStrategy() 获取执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecStrategy(RuleGroupExecStrategy $ExecStrategy) 设置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleGroupSubscribe getSubscription() 获取执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscription(RuleGroupSubscribe $Subscription) 设置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
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
 */
class RuleGroup extends AbstractModel
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
     * @var RuleGroupExecStrategy 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecStrategy;

    /**
     * @var RuleGroupSubscribe 执行策略
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
     * @param RuleGroupExecStrategy $ExecStrategy 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleGroupSubscribe $Subscription 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Permission 是否有权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount 已经配置的规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MonitorStatus 监控状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableOwnerUserId 表负责人UserId
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
    }
}
