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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApiKey鉴权配置
 *
 * @method integer getKeyLocation() 获取<p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | Header鉴权 |<br>| 1 | Query鉴权 |</p>
 * @method void setKeyLocation(integer $KeyLocation) 设置<p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | Header鉴权 |<br>| 1 | Query鉴权 |</p>
 * @method string getKeyParamName() 获取<p>密钥参数名</p>
 * @method void setKeyParamName(string $KeyParamName) 设置<p>密钥参数名</p>
 * @method string getKeyParamValue() 获取<p>密钥参数值</p>
 * @method void setKeyParamValue(string $KeyParamValue) 设置<p>密钥参数值</p>
 * @method integer getKeyValueUsage() 获取<p>密钥值用途，未指定按允许工具调用处理</p><p>枚举值：</p><ul><li>1： 允许用于工具调用</li><li>2： 仅用于连接测试和获取工具列表</li></ul>
 * @method void setKeyValueUsage(integer $KeyValueUsage) 设置<p>密钥值用途，未指定按允许工具调用处理</p><p>枚举值：</p><ul><li>1： 允许用于工具调用</li><li>2： 仅用于连接测试和获取工具列表</li></ul>
 */
class ApiKeyAuthConfig extends AbstractModel
{
    /**
     * @var integer <p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | Header鉴权 |<br>| 1 | Query鉴权 |</p>
     */
    public $KeyLocation;

    /**
     * @var string <p>密钥参数名</p>
     */
    public $KeyParamName;

    /**
     * @var string <p>密钥参数值</p>
     */
    public $KeyParamValue;

    /**
     * @var integer <p>密钥值用途，未指定按允许工具调用处理</p><p>枚举值：</p><ul><li>1： 允许用于工具调用</li><li>2： 仅用于连接测试和获取工具列表</li></ul>
     */
    public $KeyValueUsage;

    /**
     * @param integer $KeyLocation <p>密钥位置 HEADER/QUERY</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | Header鉴权 |<br>| 1 | Query鉴权 |</p>
     * @param string $KeyParamName <p>密钥参数名</p>
     * @param string $KeyParamValue <p>密钥参数值</p>
     * @param integer $KeyValueUsage <p>密钥值用途，未指定按允许工具调用处理</p><p>枚举值：</p><ul><li>1： 允许用于工具调用</li><li>2： 仅用于连接测试和获取工具列表</li></ul>
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
        if (array_key_exists("KeyLocation",$param) and $param["KeyLocation"] !== null) {
            $this->KeyLocation = $param["KeyLocation"];
        }

        if (array_key_exists("KeyParamName",$param) and $param["KeyParamName"] !== null) {
            $this->KeyParamName = $param["KeyParamName"];
        }

        if (array_key_exists("KeyParamValue",$param) and $param["KeyParamValue"] !== null) {
            $this->KeyParamValue = $param["KeyParamValue"];
        }

        if (array_key_exists("KeyValueUsage",$param) and $param["KeyValueUsage"] !== null) {
            $this->KeyValueUsage = $param["KeyValueUsage"];
        }
    }
}
