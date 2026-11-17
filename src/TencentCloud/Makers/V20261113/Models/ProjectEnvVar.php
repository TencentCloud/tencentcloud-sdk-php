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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目列表里返回的环境变量，只有键和值
 *
 * @method string getKey() 获取<p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置<p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectEnvVar extends AbstractModel
{
    /**
     * @var string <p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string <p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key <p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>变量值</p>
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
    }
}
