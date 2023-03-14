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
 * 单topic和自定义topic的描述
 *
 * @method string getTopicName() 获取topic名
 * @method void setTopicName(string $TopicName) 设置topic名
 * @method string getPartitionType() 获取topic分区策略，如 自定义topic：Random（随机投递），集中投递到单Topic：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)
 * @method void setPartitionType(string $PartitionType) 设置topic分区策略，如 自定义topic：Random（随机投递），集中投递到单Topic：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)
 * @method string getDbMatchMode() 获取库名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中必须有一项为‘Default’
 * @method void setDbMatchMode(string $DbMatchMode) 设置库名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中必须有一项为‘Default’
 * @method string getDbName() 获取库名，仅“自定义topic”时，DbMatchMode=Regular生效
 * @method void setDbName(string $DbName) 设置库名，仅“自定义topic”时，DbMatchMode=Regular生效
 * @method string getTableMatchMode() 获取表名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中必须有一项为‘Default’
 * @method void setTableMatchMode(string $TableMatchMode) 设置表名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中必须有一项为‘Default’
 * @method string getTableName() 获取表名，仅“自定义topic”时，TableMatchMode=Regular生效
 * @method void setTableName(string $TableName) 设置表名，仅“自定义topic”时，TableMatchMode=Regular生效
 */
class TopicRule extends AbstractModel
{
    /**
     * @var string topic名
     */
    public $TopicName;

    /**
     * @var string topic分区策略，如 自定义topic：Random（随机投递），集中投递到单Topic：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)
     */
    public $PartitionType;

    /**
     * @var string 库名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中必须有一项为‘Default’
     */
    public $DbMatchMode;

    /**
     * @var string 库名，仅“自定义topic”时，DbMatchMode=Regular生效
     */
    public $DbName;

    /**
     * @var string 表名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中必须有一项为‘Default’
     */
    public $TableMatchMode;

    /**
     * @var string 表名，仅“自定义topic”时，TableMatchMode=Regular生效
     */
    public $TableName;

    /**
     * @param string $TopicName topic名
     * @param string $PartitionType topic分区策略，如 自定义topic：Random（随机投递），集中投递到单Topic：AllInPartitionZero（全部投递至partition0）、PartitionByTable(按表名分区)、PartitionByTableAndKey(按表名加主键分区)
     * @param string $DbMatchMode 库名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余库)，数组中必须有一项为‘Default’
     * @param string $DbName 库名，仅“自定义topic”时，DbMatchMode=Regular生效
     * @param string $TableMatchMode 表名匹配规则，仅“自定义topic”生效，如Regular（正则匹配）, Default(不符合匹配规则的剩余表)，数组中必须有一项为‘Default’
     * @param string $TableName 表名，仅“自定义topic”时，TableMatchMode=Regular生效
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
    }
}
