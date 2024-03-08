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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单topic和自定义topic的描述。投递到单topic时，该数组的最后一项会被视为默认分区策略，所有未匹配到的数据都会按该策略投递，默认策略只支持 投递至partition0、按表名、表名+主键三种。
 *
 * @method string getTopicName() 获取topic名。单topic时，所有的TopicName必须相同
 * @method void setTopicName(string $TopicName) 设置topic名。单topic时，所有的TopicName必须相同
 * @method string getPartitionType() 获取topic分区策略，自定义topic时支持：Random（随机投递），集中投递到单Topic时支持：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)、PartitionByCols(按列分区)
 * @method void setPartitionType(string $PartitionType) 设置topic分区策略，自定义topic时支持：Random（随机投递），集中投递到单Topic时支持：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)、PartitionByCols(按列分区)
 * @method string getDbMatchMode() 获取库名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中最后一项必须为‘Default’
 * @method void setDbMatchMode(string $DbMatchMode) 设置库名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中最后一项必须为‘Default’
 * @method string getDbName() 获取库名，DbMatchMode=Regular时生效
 * @method void setDbName(string $DbName) 设置库名，DbMatchMode=Regular时生效
 * @method string getTableMatchMode() 获取表名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中最后一项必须为‘Default’
 * @method void setTableMatchMode(string $TableMatchMode) 设置表名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中最后一项必须为‘Default’
 * @method string getTableName() 获取表名，仅TableMatchMode=Regular时生效
 * @method void setTableName(string $TableName) 设置表名，仅TableMatchMode=Regular时生效
 * @method array getColumns() 获取按列分区时需要选择配置列名，可以选择多列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置按列分区时需要选择配置列名，可以选择多列
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicRule extends AbstractModel
{
    /**
     * @var string topic名。单topic时，所有的TopicName必须相同
     */
    public $TopicName;

    /**
     * @var string topic分区策略，自定义topic时支持：Random（随机投递），集中投递到单Topic时支持：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)、PartitionByCols(按列分区)
     */
    public $PartitionType;

    /**
     * @var string 库名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中最后一项必须为‘Default’
     */
    public $DbMatchMode;

    /**
     * @var string 库名，DbMatchMode=Regular时生效
     */
    public $DbName;

    /**
     * @var string 表名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中最后一项必须为‘Default’
     */
    public $TableMatchMode;

    /**
     * @var string 表名，仅TableMatchMode=Regular时生效
     */
    public $TableName;

    /**
     * @var array 按列分区时需要选择配置列名，可以选择多列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @param string $TopicName topic名。单topic时，所有的TopicName必须相同
     * @param string $PartitionType topic分区策略，自定义topic时支持：Random（随机投递），集中投递到单Topic时支持：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)、PartitionByCols(按列分区)
     * @param string $DbMatchMode 库名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中最后一项必须为‘Default’
     * @param string $DbName 库名，DbMatchMode=Regular时生效
     * @param string $TableMatchMode 表名匹配规则，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中最后一项必须为‘Default’
     * @param string $TableName 表名，仅TableMatchMode=Regular时生效
     * @param array $Columns 按列分区时需要选择配置列名，可以选择多列
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("DbMatchMode",$param) and $param["DbMatchMode"] !== null) {
            $this->DbMatchMode = $param["DbMatchMode"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableMatchMode",$param) and $param["TableMatchMode"] !== null) {
            $this->TableMatchMode = $param["TableMatchMode"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }
    }
}
