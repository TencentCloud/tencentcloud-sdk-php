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
 * 自定义变量设置参数。
 *
 * @method string getName() 获取<p>自定义变量名称。自定义变量必须先被定义才可进行运算。</p>
 * @method void setName(string $Name) 设置<p>自定义变量名称。自定义变量必须先被定义才可进行运算。</p>
 * @method string getValue() 获取<p>自定义变量赋值。支持使用常量字符串、变量以及公式，不支持中文。长度不能超过 1000 个字符。</p>
 * @method void setValue(string $Value) 设置<p>自定义变量赋值。支持使用常量字符串、变量以及公式，不支持中文。长度不能超过 1000 个字符。</p>
 */
class SetParameters extends AbstractModel
{
    /**
     * @var string <p>自定义变量名称。自定义变量必须先被定义才可进行运算。</p>
     */
    public $Name;

    /**
     * @var string <p>自定义变量赋值。支持使用常量字符串、变量以及公式，不支持中文。长度不能超过 1000 个字符。</p>
     */
    public $Value;

    /**
     * @param string $Name <p>自定义变量名称。自定义变量必须先被定义才可进行运算。</p>
     * @param string $Value <p>自定义变量赋值。支持使用常量字符串、变量以及公式，不支持中文。长度不能超过 1000 个字符。</p>
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
