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
 * 推理容器运行时的环境变量。
 *
 * @method string getKey() 获取变量名。仅允许包含大小写字母、数字、下划线，且必须以字母或下划线开头。长度限制不超过 64 个字符。
 * @method void setKey(string $Key) 设置变量名。仅允许包含大小写字母、数字、下划线，且必须以字母或下划线开头。长度限制不超过 64 个字符。
 * @method string getValue() 获取变量值。支持任意可见字符如字母、数字、符号等。长度限制不超过 2048 个字符。
 * @method void setValue(string $Value) 设置变量值。支持任意可见字符如字母、数字、符号等。长度限制不超过 2048 个字符。
 */
class InferenceEnvironmentVariable extends AbstractModel
{
    /**
     * @var string 变量名。仅允许包含大小写字母、数字、下划线，且必须以字母或下划线开头。长度限制不超过 64 个字符。
     */
    public $Key;

    /**
     * @var string 变量值。支持任意可见字符如字母、数字、符号等。长度限制不超过 2048 个字符。
     */
    public $Value;

    /**
     * @param string $Key 变量名。仅允许包含大小写字母、数字、下划线，且必须以字母或下划线开头。长度限制不超过 64 个字符。
     * @param string $Value 变量值。支持任意可见字符如字母、数字、符号等。长度限制不超过 2048 个字符。
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
