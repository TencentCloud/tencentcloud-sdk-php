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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义字段
 *
 * @method integer getId() 获取字段id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置字段id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取字段key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置字段key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVal() 获取字段值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVal(string $Val) 设置字段值
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomFieldInfo extends AbstractModel
{
    /**
     * @var integer 字段id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 字段key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 字段值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Val;

    /**
     * @param integer $Id 字段id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 字段key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Val 字段值
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Val",$param) and $param["Val"] !== null) {
            $this->Val = $param["Val"];
        }
    }
}
