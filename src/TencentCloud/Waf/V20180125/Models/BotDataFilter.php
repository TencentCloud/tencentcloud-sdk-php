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
 * 搜索框内容，冒号前面是key, 冒号是操作，值是最后一位，操作（冒号）默认是相等
 *
 * @method string getEntity() 获取查询维度
 * @method void setEntity(string $Entity) 设置查询维度
 * @method string getOperator() 获取操作符
 * @method void setOperator(string $Operator) 设置操作符
 * @method string getValue() 获取操作值，多个值用
 * @method void setValue(string $Value) 设置操作值，多个值用
 */
class BotDataFilter extends AbstractModel
{
    /**
     * @var string 查询维度
     */
    public $Entity;

    /**
     * @var string 操作符
     */
    public $Operator;

    /**
     * @var string 操作值，多个值用
     */
    public $Value;

    /**
     * @param string $Entity 查询维度
     * @param string $Operator 操作符
     * @param string $Value 操作值，多个值用
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
        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
