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
 * 规则组监控业务视图
 *
 * @method integer getRuleGroupId() 获取规则组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorStatus() 获取监控状态 0.false 1.true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorStatus(integer $MonitorStatus) 设置监控状态 0.false 1.true
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateUserId() 获取规则组创建人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserId(integer $CreateUserId) 设置规则组创建人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserName() 获取规则组创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserName(string $CreateUserName) 设置规则组创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取规则创建时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置规则创建时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupMonitor extends AbstractModel
{
    /**
     * @var integer 规则组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string 表guid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var integer 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库guid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var integer 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var integer 监控状态 0.false 1.true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorStatus;

    /**
     * @var integer 规则组创建人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserId;

    /**
     * @var string 规则组创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserName;

    /**
     * @var string 规则创建时间 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param integer $RuleGroupId 规则组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表guid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库guid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorStatus 监控状态 0.false 1.true
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateUserId 规则组创建人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserName 规则组创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 规则创建时间 yyyy-MM-dd HH:mm:ss
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

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("CreateUserName",$param) and $param["CreateUserName"] !== null) {
            $this->CreateUserName = $param["CreateUserName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
