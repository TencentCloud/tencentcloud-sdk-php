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
 * api安全用户自定义场景规则结构体
 *
 * @method string getKey() 获取匹配字段
 * @method void setKey(string $Key) 设置匹配字段
 * @method array getValue() 获取匹配值
 * @method void setValue(array $Value) 设置匹配值
 * @method string getOperate() 获取操作符
 * @method void setOperate(string $Operate) 设置操作符
 * @method string getName() 获取当匹配字段是get参数值，post参数值，cookie参数值，header参数值，rsp参数值的时候，可填充此字段
 * @method void setName(string $Name) 设置当匹配字段是get参数值，post参数值，cookie参数值，header参数值，rsp参数值的时候，可填充此字段
 */
class ApiSecSceneRuleEntry extends AbstractModel
{
    /**
     * @var string 匹配字段
     */
    public $Key;

    /**
     * @var array 匹配值
     */
    public $Value;

    /**
     * @var string 操作符
     */
    public $Operate;

    /**
     * @var string 当匹配字段是get参数值，post参数值，cookie参数值，header参数值，rsp参数值的时候，可填充此字段
     */
    public $Name;

    /**
     * @param string $Key 匹配字段
     * @param array $Value 匹配值
     * @param string $Operate 操作符
     * @param string $Name 当匹配字段是get参数值，post参数值，cookie参数值，header参数值，rsp参数值的时候，可填充此字段
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

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
