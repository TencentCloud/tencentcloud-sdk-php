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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 常规密钥凭据（出参专用），用于查询详情接口的响应。Value字段返回打码后的值，不暴露明文
 *
 * @method string getKey() 获取凭据键名（原文），如SecretId、SecretKey、Token等
 * @method void setKey(string $Key) 设置凭据键名（原文），如SecretId、SecretKey、Token等
 * @method string getValue() 获取凭据键值（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
 * @method void setValue(string $Value) 设置凭据键值（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
 */
class AccessCredentialOutput extends AbstractModel
{
    /**
     * @var string 凭据键名（原文），如SecretId、SecretKey、Token等
     */
    public $Key;

    /**
     * @var string 凭据键值（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
     */
    public $Value;

    /**
     * @param string $Key 凭据键名（原文），如SecretId、SecretKey、Token等
     * @param string $Value 凭据键值（打码后）
补充说明：保留前3后4位，中间用***替代；长度不足7位时全部替换为***
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
