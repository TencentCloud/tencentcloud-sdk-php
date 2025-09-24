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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token有效性校验规则
 *
 * @method string getType() 获取校验方式，可选值：验签校验、字段校验
 * @method void setType(string $Type) 设置校验方式，可选值：验签校验、字段校验
 * @method string getKey() 获取键
 * @method void setKey(string $Key) 设置键
 * @method string getOp() 获取操作符
 * @method void setOp(string $Op) 设置操作符
 * @method TokenRuleEntryValue getValue() 获取值
 * @method void setValue(TokenRuleEntryValue $Value) 设置值
 */
class TokenRuleEntry extends AbstractModel
{
    /**
     * @var string 校验方式，可选值：验签校验、字段校验
     */
    public $Type;

    /**
     * @var string 键
     */
    public $Key;

    /**
     * @var string 操作符
     */
    public $Op;

    /**
     * @var TokenRuleEntryValue 值
     */
    public $Value;

    /**
     * @param string $Type 校验方式，可选值：验签校验、字段校验
     * @param string $Key 键
     * @param string $Op 操作符
     * @param TokenRuleEntryValue $Value 值
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new TokenRuleEntryValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
