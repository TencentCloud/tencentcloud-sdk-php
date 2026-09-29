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
 * 查询结果的单行数据。云API 数据结构不支持二维数组，故将一行数据包装为对象。
 *
 * @method array getValues() 获取该行各单元格取值，顺序与 Columns 一致。均为字符串：底层预览结果为 CSV 格式不携带类型信息，字段真实类型参见 Columns[].ColumnType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置该行各单元格取值，顺序与 Columns 一致。均为字符串：底层预览结果为 CSV 格式不携带类型信息，字段真实类型参见 Columns[].ColumnType
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlRunResultRow extends AbstractModel
{
    /**
     * @var array 该行各单元格取值，顺序与 Columns 一致。均为字符串：底层预览结果为 CSV 格式不携带类型信息，字段真实类型参见 Columns[].ColumnType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param array $Values 该行各单元格取值，顺序与 Columns 一致。均为字符串：底层预览结果为 CSV 格式不携带类型信息，字段真实类型参见 Columns[].ColumnType
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
