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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流规则的Filter
 *
 * @method string getKey() 获取限流条件的Key
 * @method void setKey(string $Key) 设置限流条件的Key
 * @method array getValues() 获取限流条件的Values
 * @method void setValues(array $Values) 设置限流条件的Values
 * @method string getOperator() 获取操作符
 * @method void setOperator(string $Operator) 设置操作符
 * @method string getName() 获取header或query对应的name
 * @method void setName(string $Name) 设置header或query对应的name
 */
class RuleFilter extends AbstractModel
{
    /**
     * @var string 限流条件的Key
     */
    public $Key;

    /**
     * @var array 限流条件的Values
     */
    public $Values;

    /**
     * @var string 操作符
     */
    public $Operator;

    /**
     * @var string header或query对应的name
     */
    public $Name;

    /**
     * @param string $Key 限流条件的Key
     * @param array $Values 限流条件的Values
     * @param string $Operator 操作符
     * @param string $Name header或query对应的name
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
