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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APM 浮点数类型键值对
 *
 * @method string getKey() 获取Key 值定义
 * @method void setKey(string $Key) 设置Key 值定义
 * @method float getValue() 获取Value 值定义
 * @method void setValue(float $Value) 设置Value 值定义
 */
class APMKV extends AbstractModel
{
    /**
     * @var string Key 值定义
     */
    public $Key;

    /**
     * @var float Value 值定义
     */
    public $Value;

    /**
     * @param string $Key Key 值定义
     * @param float $Value Value 值定义
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
