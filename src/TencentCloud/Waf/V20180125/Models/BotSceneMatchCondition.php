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
 * 场景匹配条件
 *
 * @method string getKey() 获取匹配参数
 * @method void setKey(string $Key) 设置匹配参数
 * @method string getOp() 获取匹配符
 * @method void setOp(string $Op) 设置匹配符
 * @method string getValue() 获取匹配值
 * @method void setValue(string $Value) 设置匹配值
 * @method string getName() 获取对于头部字段匹配value的时候指定的头部名
 * @method void setName(string $Name) 设置对于头部字段匹配value的时候指定的头部名
 * @method array getValueArray() 获取470后使用此入参存在多值
 * @method void setValueArray(array $ValueArray) 设置470后使用此入参存在多值
 */
class BotSceneMatchCondition extends AbstractModel
{
    /**
     * @var string 匹配参数
     */
    public $Key;

    /**
     * @var string 匹配符
     */
    public $Op;

    /**
     * @var string 匹配值
     */
    public $Value;

    /**
     * @var string 对于头部字段匹配value的时候指定的头部名
     */
    public $Name;

    /**
     * @var array 470后使用此入参存在多值
     */
    public $ValueArray;

    /**
     * @param string $Key 匹配参数
     * @param string $Op 匹配符
     * @param string $Value 匹配值
     * @param string $Name 对于头部字段匹配value的时候指定的头部名
     * @param array $ValueArray 470后使用此入参存在多值
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

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ValueArray",$param) and $param["ValueArray"] !== null) {
            $this->ValueArray = $param["ValueArray"];
        }
    }
}
