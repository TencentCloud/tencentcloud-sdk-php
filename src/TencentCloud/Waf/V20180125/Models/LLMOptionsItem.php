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
 * 大模型Rule生效条件
 *
 * @method string getKey() 获取键
 * @method void setKey(string $Key) 设置键
 * @method string getOp() 获取操作符
 * @method void setOp(string $Op) 设置操作符
 * @method array getValue() 获取值
 * @method void setValue(array $Value) 设置值
 * @method string getName() 获取Header参数值时使用
 * @method void setName(string $Name) 设置Header参数值时使用
 * @method array getAreas() 获取区域选择
 * @method void setAreas(array $Areas) 设置区域选择
 */
class LLMOptionsItem extends AbstractModel
{
    /**
     * @var string 键
     */
    public $Key;

    /**
     * @var string 操作符
     */
    public $Op;

    /**
     * @var array 值
     */
    public $Value;

    /**
     * @var string Header参数值时使用
     */
    public $Name;

    /**
     * @var array 区域选择
     */
    public $Areas;

    /**
     * @param string $Key 键
     * @param string $Op 操作符
     * @param array $Value 值
     * @param string $Name Header参数值时使用
     * @param array $Areas 区域选择
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

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = [];
            foreach ($param["Areas"] as $key => $value){
                $obj = new Area();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }
    }
}
