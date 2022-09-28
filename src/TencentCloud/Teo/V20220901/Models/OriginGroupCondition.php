<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源配置的条件参数
 *
 * @method string getTarget() 获取匹配类型，取值有：
<li>url：当前站点下匹配URL路径的请求，例如：/example 或 /example/foo.jpg。支持*表示通配符，支持?表示匹配一个字符。
</li>
 * @method void setTarget(string $Target) 设置匹配类型，取值有：
<li>url：当前站点下匹配URL路径的请求，例如：/example 或 /example/foo.jpg。支持*表示通配符，支持?表示匹配一个字符。
</li>
 * @method string getOperator() 获取运算符，取值有：
<li>equal：等于。</li>
 * @method void setOperator(string $Operator) 设置运算符，取值有：
<li>equal：等于。</li>
 * @method array getValues() 获取对应匹配类型的取值。
 * @method void setValues(array $Values) 设置对应匹配类型的取值。
 */
class OriginGroupCondition extends AbstractModel
{
    /**
     * @var string 匹配类型，取值有：
<li>url：当前站点下匹配URL路径的请求，例如：/example 或 /example/foo.jpg。支持*表示通配符，支持?表示匹配一个字符。
</li>
     */
    public $Target;

    /**
     * @var string 运算符，取值有：
<li>equal：等于。</li>
     */
    public $Operator;

    /**
     * @var array 对应匹配类型的取值。
     */
    public $Values;

    /**
     * @param string $Target 匹配类型，取值有：
<li>url：当前站点下匹配URL路径的请求，例如：/example 或 /example/foo.jpg。支持*表示通配符，支持?表示匹配一个字符。
</li>
     * @param string $Operator 运算符，取值有：
<li>equal：等于。</li>
     * @param array $Values 对应匹配类型的取值。
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
        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
