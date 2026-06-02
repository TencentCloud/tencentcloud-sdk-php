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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 匹配条件请求参数
 *
 * @method string getKey() 获取<p>字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置<p>字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCondition() 获取<p>匹配方式: eq 等于;ne 不等于;regex 正则;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(string $Condition) 设置<p>匹配方式: eq 等于;ne 不等于;regex 正则;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>字段值 或正则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>字段值 或正则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleCondition extends AbstractModel
{
    /**
     * @var string <p>字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string <p>匹配方式: eq 等于;ne 不等于;regex 正则;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var string <p>字段值 或正则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key <p>字段名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Condition <p>匹配方式: eq 等于;ne 不等于;regex 正则;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>字段值 或正则表达式</p>
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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
