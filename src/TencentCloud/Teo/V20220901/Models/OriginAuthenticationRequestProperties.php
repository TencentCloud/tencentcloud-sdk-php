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
 * 回源鉴权请求属性。
 *
 * @method string getType() 获取设置回源鉴权参数类型，取值有：<li>QueryString：表示设置回源鉴权参数类型为查询字符串；</li><li>Header：表示设置回源鉴权参数类型为请求头。</li>
 * @method void setType(string $Type) 设置设置回源鉴权参数类型，取值有：<li>QueryString：表示设置回源鉴权参数类型为查询字符串；</li><li>Header：表示设置回源鉴权参数类型为请求头。</li>
 * @method string getName() 获取设置回源鉴权类型对应的参数名称。
 * @method void setName(string $Name) 设置设置回源鉴权类型对应的参数名称。
 * @method string getValue() 获取设置回源鉴权类型对应的参数值。
 * @method void setValue(string $Value) 设置设置回源鉴权类型对应的参数值。
 */
class OriginAuthenticationRequestProperties extends AbstractModel
{
    /**
     * @var string 设置回源鉴权参数类型，取值有：<li>QueryString：表示设置回源鉴权参数类型为查询字符串；</li><li>Header：表示设置回源鉴权参数类型为请求头。</li>
     */
    public $Type;

    /**
     * @var string 设置回源鉴权类型对应的参数名称。
     */
    public $Name;

    /**
     * @var string 设置回源鉴权类型对应的参数值。
     */
    public $Value;

    /**
     * @param string $Type 设置回源鉴权参数类型，取值有：<li>QueryString：表示设置回源鉴权参数类型为查询字符串；</li><li>Header：表示设置回源鉴权参数类型为请求头。</li>
     * @param string $Name 设置回源鉴权类型对应的参数名称。
     * @param string $Value 设置回源鉴权类型对应的参数值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
