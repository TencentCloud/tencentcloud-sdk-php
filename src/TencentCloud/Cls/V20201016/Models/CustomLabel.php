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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义标签结构体
 *
 * @method string getKey() 获取标签的键。
- 必须以字母或下划线开头，但不可以双下划线（__）开头，后面可以跟任意字母，数字或下划线。
- 最大支持256个字符。
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置标签的键。
- 必须以字母或下划线开头，但不可以双下划线（__）开头，后面可以跟任意字母，数字或下划线。
- 最大支持256个字符。
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取标签的值。
- 最大支持256个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置标签的值。
- 最大支持256个字符。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomLabel extends AbstractModel
{
    /**
     * @var string 标签的键。
- 必须以字母或下划线开头，但不可以双下划线（__）开头，后面可以跟任意字母，数字或下划线。
- 最大支持256个字符。
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 标签的值。
- 最大支持256个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key 标签的键。
- 必须以字母或下划线开头，但不可以双下划线（__）开头，后面可以跟任意字母，数字或下划线。
- 最大支持256个字符。
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 标签的值。
- 最大支持256个字符。
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
