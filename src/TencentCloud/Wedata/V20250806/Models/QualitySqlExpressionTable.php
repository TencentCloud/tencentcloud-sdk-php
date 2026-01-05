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
 * 数据质量自定义规则时的sql表达式解析表对象
 *
 * @method string getTableExpression() 获取sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableExpression(string $TableExpression) 设置sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumnExpression() 获取sql表达式字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnExpression(array $ColumnExpression) 设置sql表达式字段名
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualitySqlExpressionTable extends AbstractModel
{
    /**
     * @var string sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableExpression;

    /**
     * @var array sql表达式字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnExpression;

    /**
     * @param string $TableExpression sql表达式表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ColumnExpression sql表达式字段名
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
        if (array_key_exists("TableExpression",$param) and $param["TableExpression"] !== null) {
            $this->TableExpression = $param["TableExpression"];
        }

        if (array_key_exists("ColumnExpression",$param) and $param["ColumnExpression"] !== null) {
            $this->ColumnExpression = $param["ColumnExpression"];
        }
    }
}
