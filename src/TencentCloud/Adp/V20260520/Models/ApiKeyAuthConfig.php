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
 * @method integer getKeyLocation() 获取密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | Header鉴权 |
| 1 | Query鉴权 |
 * @method void setKeyLocation(integer $KeyLocation) 设置密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | Header鉴权 |
| 1 | Query鉴权 |
 * @method string getKeyParamName() 获取密钥参数名
 * @method void setKeyParamName(string $KeyParamName) 设置密钥参数名
 * @method string getKeyParamValue() 获取密钥参数值
 * @method void setKeyParamValue(string $KeyParamValue) 设置密钥参数值
 */
class ApiKeyAuthConfig extends AbstractModel
{
    /**
     * @var integer 密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | Header鉴权 |
| 1 | Query鉴权 |
     */
    public $KeyLocation;

    /**
     * @var string 密钥参数名
     */
    public $KeyParamName;

    /**
     * @var string 密钥参数值
     */
    public $KeyParamValue;

    /**
     * @param integer $KeyLocation 密钥位置 HEADER/QUERY

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | Header鉴权 |
| 1 | Query鉴权 |
     * @param string $KeyParamName 密钥参数名
     * @param string $KeyParamValue 密钥参数值
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
    }
}
