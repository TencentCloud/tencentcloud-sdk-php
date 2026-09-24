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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境变量
 *
 * @method string getName() 获取<p>环境变量key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>环境变量key</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>环境变量value</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>环境变量value</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPrivate() 获取<p>是否对外不可见,true 表示该环境变量的 Value 为敏感值.</p>
 * @method void setIsPrivate(boolean $IsPrivate) 设置<p>是否对外不可见,true 表示该环境变量的 Value 为敏感值.</p>
 */
class EnvVar extends AbstractModel
{
    /**
     * @var string <p>环境变量key</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>环境变量value</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var boolean <p>是否对外不可见,true 表示该环境变量的 Value 为敏感值.</p>
     */
    public $IsPrivate;

    /**
     * @param string $Name <p>环境变量key</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>环境变量value</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPrivate <p>是否对外不可见,true 表示该环境变量的 Value 为敏感值.</p>
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

        if (array_key_exists("IsPrivate",$param) and $param["IsPrivate"] !== null) {
            $this->IsPrivate = $param["IsPrivate"];
        }
    }
}
