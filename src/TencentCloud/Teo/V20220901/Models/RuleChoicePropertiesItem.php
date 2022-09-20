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
 * 规则引擎可应用于匹配请求的设置详细信息，可选参数配置项
 *
 * @method string getName() 获取参数名称。
 * @method void setName(string $Name) 设置参数名称。
 * @method string getType() 获取参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
 * @method void setType(string $Type) 设置参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
 * @method array getChoicesValue() 获取参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
 * @method void setChoicesValue(array $ChoicesValue) 设置参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
 * @method integer getMin() 获取数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method void setMin(integer $Min) 设置数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method integer getMax() 获取数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method void setMax(integer $Max) 设置数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method boolean getIsMultiple() 获取参数值是否支持多选或者填写多个。
 * @method void setIsMultiple(boolean $IsMultiple) 设置参数值是否支持多选或者填写多个。
 * @method boolean getIsAllowEmpty() 获取是否允许为空。
 * @method void setIsAllowEmpty(boolean $IsAllowEmpty) 设置是否允许为空。
 * @method RuleExtraParameter getExtraParameter() 获取特殊参数。
<li> 为 NULL：RuleAction 选择 NormalAction；</li>
<li> 成员参数 Id 为 Action：RuleAction 选择 RewirteAction；</li>
<li> 成员参数 Id 为 StatusCode：RuleAction 选择 CodeAction。</li>
 * @method void setExtraParameter(RuleExtraParameter $ExtraParameter) 设置特殊参数。
<li> 为 NULL：RuleAction 选择 NormalAction；</li>
<li> 成员参数 Id 为 Action：RuleAction 选择 RewirteAction；</li>
<li> 成员参数 Id 为 StatusCode：RuleAction 选择 CodeAction。</li>
 */
class RuleChoicePropertiesItem extends AbstractModel
{
    /**
     * @var string 参数名称。
     */
    public $Name;

    /**
     * @var string 参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
     */
    public $Type;

    /**
     * @var array 参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
     */
    public $ChoicesValue;

    /**
     * @var integer 数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     */
    public $Min;

    /**
     * @var integer 数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     */
    public $Max;

    /**
     * @var boolean 参数值是否支持多选或者填写多个。
     */
    public $IsMultiple;

    /**
     * @var boolean 是否允许为空。
     */
    public $IsAllowEmpty;

    /**
     * @var RuleExtraParameter 特殊参数。
<li> 为 NULL：RuleAction 选择 NormalAction；</li>
<li> 成员参数 Id 为 Action：RuleAction 选择 RewirteAction；</li>
<li> 成员参数 Id 为 StatusCode：RuleAction 选择 CodeAction。</li>
     */
    public $ExtraParameter;

    /**
     * @param string $Name 参数名称。
     * @param string $Type 参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>
     * @param array $ChoicesValue 参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
     * @param integer $Min 数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     * @param integer $Max 数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     * @param boolean $IsMultiple 参数值是否支持多选或者填写多个。
     * @param boolean $IsAllowEmpty 是否允许为空。
     * @param RuleExtraParameter $ExtraParameter 特殊参数。
<li> 为 NULL：RuleAction 选择 NormalAction；</li>
<li> 成员参数 Id 为 Action：RuleAction 选择 RewirteAction；</li>
<li> 成员参数 Id 为 StatusCode：RuleAction 选择 CodeAction。</li>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ChoicesValue",$param) and $param["ChoicesValue"] !== null) {
            $this->ChoicesValue = $param["ChoicesValue"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("IsMultiple",$param) and $param["IsMultiple"] !== null) {
            $this->IsMultiple = $param["IsMultiple"];
        }

        if (array_key_exists("IsAllowEmpty",$param) and $param["IsAllowEmpty"] !== null) {
            $this->IsAllowEmpty = $param["IsAllowEmpty"];
        }

        if (array_key_exists("ExtraParameter",$param) and $param["ExtraParameter"] !== null) {
            $this->ExtraParameter = new RuleExtraParameter();
            $this->ExtraParameter->deserialize($param["ExtraParameter"]);
        }
    }
}
