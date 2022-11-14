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
 * 规则执行结果详情
 *
 * @method integer getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleExecResult getRuleExecResult() 获取规则执行记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleExecResult(RuleExecResult $RuleExecResult) 设置规则执行记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableOwnerUserId() 获取表负责人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerUserId(integer $TableOwnerUserId) 设置表负责人userId
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleExecResultDetail extends AbstractModel
{
    /**
     * @var integer 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据库guid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 表guid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var RuleExecResult 规则执行记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleExecResult;

    /**
     * @var integer 表负责人userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerUserId;

    /**
     * @param integer $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库guid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表guid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleExecResult $RuleExecResult 规则执行记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableOwnerUserId 表负责人userId
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RuleExecResult",$param) and $param["RuleExecResult"] !== null) {
            $this->RuleExecResult = new RuleExecResult();
            $this->RuleExecResult->deserialize($param["RuleExecResult"]);
        }

        if (array_key_exists("TableOwnerUserId",$param) and $param["TableOwnerUserId"] !== null) {
            $this->TableOwnerUserId = $param["TableOwnerUserId"];
        }
    }
}
