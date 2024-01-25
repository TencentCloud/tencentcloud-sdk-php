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
 * Csv 每一行的列元数据
 *
 * @method integer getColumnNumber() 获取列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNumber(integer $ColumnNumber) 设置列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取column 值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置column 值
注意：此字段可能返回 null，表示取不到有效值。
 */
class RowColumn extends AbstractModel
{
    /**
     * @var integer 列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNumber;

    /**
     * @var string column 值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $ColumnNumber 列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value column 值
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
        if (array_key_exists("ColumnNumber",$param) and $param["ColumnNumber"] !== null) {
            $this->ColumnNumber = $param["ColumnNumber"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
