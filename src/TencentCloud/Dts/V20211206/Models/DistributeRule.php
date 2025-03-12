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
 * 订阅任务的kafka分区规则。符合库名和表名正则表达式的数据将按照RuleType计算该条数据将被投递的kafka分区。如果配置了多个规则，将按照配置的顺序，第一条命中的规则生效。
 *
 * @method string getRuleType() 获取规则类型。非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区，cols-按列名分区。mongo的枚举值为：collection-按集合名分区、collectionAndObjectId-按集合+主键分区。
 * @method void setRuleType(string $RuleType) 设置规则类型。非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区，cols-按列名分区。mongo的枚举值为：collection-按集合名分区、collectionAndObjectId-按集合+主键分区。
 * @method string getDbPattern() 获取库名匹配规则，请填写正则表达式
 * @method void setDbPattern(string $DbPattern) 设置库名匹配规则，请填写正则表达式
 * @method string getTablePattern() 获取表名匹配规则，如果 DatabaseType 为 mongodb，则匹配集合名
 * @method void setTablePattern(string $TablePattern) 设置表名匹配规则，如果 DatabaseType 为 mongodb，则匹配集合名
 * @method array getColumns() 获取列名。如果 RuleType 为 cols，此项必填。订阅任务会用该列的值计算分区。mongo没有按列分区，因此也不用传这个字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置列名。如果 RuleType 为 cols，此项必填。订阅任务会用该列的值计算分区。mongo没有按列分区，因此也不用传这个字段。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DistributeRule extends AbstractModel
{
    /**
     * @var string 规则类型。非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区，cols-按列名分区。mongo的枚举值为：collection-按集合名分区、collectionAndObjectId-按集合+主键分区。
     */
    public $RuleType;

    /**
     * @var string 库名匹配规则，请填写正则表达式
     */
    public $DbPattern;

    /**
     * @var string 表名匹配规则，如果 DatabaseType 为 mongodb，则匹配集合名
     */
    public $TablePattern;

    /**
     * @var array 列名。如果 RuleType 为 cols，此项必填。订阅任务会用该列的值计算分区。mongo没有按列分区，因此也不用传这个字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @param string $RuleType 规则类型。非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区，cols-按列名分区。mongo的枚举值为：collection-按集合名分区、collectionAndObjectId-按集合+主键分区。
     * @param string $DbPattern 库名匹配规则，请填写正则表达式
     * @param string $TablePattern 表名匹配规则，如果 DatabaseType 为 mongodb，则匹配集合名
     * @param array $Columns 列名。如果 RuleType 为 cols，此项必填。订阅任务会用该列的值计算分区。mongo没有按列分区，因此也不用传这个字段。
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("DbPattern",$param) and $param["DbPattern"] !== null) {
            $this->DbPattern = $param["DbPattern"];
        }

        if (array_key_exists("TablePattern",$param) and $param["TablePattern"] !== null) {
            $this->TablePattern = $param["TablePattern"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }
    }
}
