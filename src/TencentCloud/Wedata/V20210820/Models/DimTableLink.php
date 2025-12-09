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
 * 维度关联单个表字段
 *
 * @method string getKey() 获取维度主键KEY对应的表列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置维度主键KEY对应的表列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取维度值对应的表列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置维度值对应的表列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGuid() 获取表 GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGuid(string $TableGuid) 设置表 GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DimTableLink extends AbstractModel
{
    /**
     * @var string 维度主键KEY对应的表列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 维度值对应的表列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 表 GUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGuid;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @param string $Key 维度主键KEY对应的表列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 维度值对应的表列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGuid 表 GUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TableGuid",$param) and $param["TableGuid"] !== null) {
            $this->TableGuid = $param["TableGuid"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
