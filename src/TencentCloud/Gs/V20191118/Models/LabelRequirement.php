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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签要求
 *
 * @method string getKey() 获取标签键
 * @method void setKey(string $Key) 设置标签键
 * @method string getOperator() 获取运算符类型。
IN：要求对象的标签键 Key 对应的标签值需满足 Values 中的一个
NOT_IN：要求对象的标签键 Key 对应的标签值不满足 Values 中的任何一个
EXISTS：要求对象标签存在标签键 Key
NOT_EXISTS: 要求对象标签不存在标签键 Key
 * @method void setOperator(string $Operator) 设置运算符类型。
IN：要求对象的标签键 Key 对应的标签值需满足 Values 中的一个
NOT_IN：要求对象的标签键 Key 对应的标签值不满足 Values 中的任何一个
EXISTS：要求对象标签存在标签键 Key
NOT_EXISTS: 要求对象标签不存在标签键 Key
 * @method array getValues() 获取标签值列表
 * @method void setValues(array $Values) 设置标签值列表
 */
class LabelRequirement extends AbstractModel
{
    /**
     * @var string 标签键
     */
    public $Key;

    /**
     * @var string 运算符类型。
IN：要求对象的标签键 Key 对应的标签值需满足 Values 中的一个
NOT_IN：要求对象的标签键 Key 对应的标签值不满足 Values 中的任何一个
EXISTS：要求对象标签存在标签键 Key
NOT_EXISTS: 要求对象标签不存在标签键 Key
     */
    public $Operator;

    /**
     * @var array 标签值列表
     */
    public $Values;

    /**
     * @param string $Key 标签键
     * @param string $Operator 运算符类型。
IN：要求对象的标签键 Key 对应的标签值需满足 Values 中的一个
NOT_IN：要求对象的标签键 Key 对应的标签值不满足 Values 中的任何一个
EXISTS：要求对象标签存在标签键 Key
NOT_EXISTS: 要求对象标签不存在标签键 Key
     * @param array $Values 标签值列表
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
