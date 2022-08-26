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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则引擎参数详情信息，特殊参数类型。
 *
 * @method string getId() 获取参数名，取值有：
<li> Action：修改 HTTP 头部所需参数，RuleAction 选择 RewirteAction；</li>
<li> StatusCode：状态码相关功能所需参数，RuleAction 选择 CodeAction。</li>
 * @method void setId(string $Id) 设置参数名，取值有：
<li> Action：修改 HTTP 头部所需参数，RuleAction 选择 RewirteAction；</li>
<li> StatusCode：状态码相关功能所需参数，RuleAction 选择 CodeAction。</li>
 * @method string getType() 获取参数值类型。
<li> CHOICE：参数值只能在 Values 中选择； </li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
 * @method void setType(string $Type) 设置参数值类型。
<li> CHOICE：参数值只能在 Values 中选择； </li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
 * @method string getChoices() 获取可选参数值。
注意：当 Id 的值为 StatusCode 时数组中的值为整型，填写参数值时请填写字符串的整型数值。
 * @method void setChoices(string $Choices) 设置可选参数值。
注意：当 Id 的值为 StatusCode 时数组中的值为整型，填写参数值时请填写字符串的整型数值。
 */
class RuleExtraParameter extends AbstractModel
{
    /**
     * @var string 参数名，取值有：
<li> Action：修改 HTTP 头部所需参数，RuleAction 选择 RewirteAction；</li>
<li> StatusCode：状态码相关功能所需参数，RuleAction 选择 CodeAction。</li>
     */
    public $Id;

    /**
     * @var string 参数值类型。
<li> CHOICE：参数值只能在 Values 中选择； </li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
     */
    public $Type;

    /**
     * @var string 可选参数值。
注意：当 Id 的值为 StatusCode 时数组中的值为整型，填写参数值时请填写字符串的整型数值。
     */
    public $Choices;

    /**
     * @param string $Id 参数名，取值有：
<li> Action：修改 HTTP 头部所需参数，RuleAction 选择 RewirteAction；</li>
<li> StatusCode：状态码相关功能所需参数，RuleAction 选择 CodeAction。</li>
     * @param string $Type 参数值类型。
<li> CHOICE：参数值只能在 Values 中选择； </li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
     * @param string $Choices 可选参数值。
注意：当 Id 的值为 StatusCode 时数组中的值为整型，填写参数值时请填写字符串的整型数值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = $param["Choices"];
        }
    }
}
