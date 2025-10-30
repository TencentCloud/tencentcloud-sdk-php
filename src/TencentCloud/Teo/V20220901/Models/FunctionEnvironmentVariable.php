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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘函数环境变量
 *
 * @method string getKey() 获取变量的名称，限制只能包含大小写字母、数字，特殊字符仅支持 @ . - _ ，最大 64 个字节，不支持重复。
 * @method void setKey(string $Key) 设置变量的名称，限制只能包含大小写字母、数字，特殊字符仅支持 @ . - _ ，最大 64 个字节，不支持重复。
 * @method string getValue() 获取变量的值，限制最大 5000 字节，默认值为空。
 * @method void setValue(string $Value) 设置变量的值，限制最大 5000 字节，默认值为空。
 * @method string getType() 获取变量的类型，取值有：
<li>string：字符串类型；</li>
<li>json：json 对象类型。</li>默认值为：string。
 * @method void setType(string $Type) 设置变量的类型，取值有：
<li>string：字符串类型；</li>
<li>json：json 对象类型。</li>默认值为：string。
 */
class FunctionEnvironmentVariable extends AbstractModel
{
    /**
     * @var string 变量的名称，限制只能包含大小写字母、数字，特殊字符仅支持 @ . - _ ，最大 64 个字节，不支持重复。
     */
    public $Key;

    /**
     * @var string 变量的值，限制最大 5000 字节，默认值为空。
     */
    public $Value;

    /**
     * @var string 变量的类型，取值有：
<li>string：字符串类型；</li>
<li>json：json 对象类型。</li>默认值为：string。
     */
    public $Type;

    /**
     * @param string $Key 变量的名称，限制只能包含大小写字母、数字，特殊字符仅支持 @ . - _ ，最大 64 个字节，不支持重复。
     * @param string $Value 变量的值，限制最大 5000 字节，默认值为空。
     * @param string $Type 变量的类型，取值有：
<li>string：字符串类型；</li>
<li>json：json 对象类型。</li>默认值为：string。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
