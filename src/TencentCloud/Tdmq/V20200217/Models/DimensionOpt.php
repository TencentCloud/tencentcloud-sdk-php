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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标维度对象
 *
 * @method string getName() 获取查询的维度名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置查询的维度名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取查询维度的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置查询维度的值
注意：此字段可能返回 null，表示取不到有效值。
 */
class DimensionOpt extends AbstractModel
{
    /**
     * @var string 查询的维度名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 查询维度的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Name 查询的维度名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 查询维度的值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
