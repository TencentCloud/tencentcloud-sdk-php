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
 * 规则引擎可应用于匹配请求的设置详细信息。
 *
 * @method string getName() 获取值为参数名称。
 * @method void setName(string $Name) 设置值为参数名称。
 * @method integer getMin() 获取数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method void setMin(integer $Min) 设置数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method array getChoicesValue() 获取参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
 * @method void setChoicesValue(array $ChoicesValue) 设置参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
 * @method string getType() 获取参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> OBJECT：参数值为对象类型，ChoiceProperties 为改对象类型关联的属性；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>注意：当参数类型为 OBJECT 类型时，请注意参考 [示例2 参数为 OBJECT 类型的创建](https://tcloud4api.woa.com/document/product/1657/79382?!preview&!document=1)
 * @method void setType(string $Type) 设置参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> OBJECT：参数值为对象类型，ChoiceProperties 为改对象类型关联的属性；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>注意：当参数类型为 OBJECT 类型时，请注意参考 [示例2 参数为 OBJECT 类型的创建](https://tcloud4api.woa.com/document/product/1657/79382?!preview&!document=1)
 * @method integer getMax() 获取数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method void setMax(integer $Max) 设置数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
 * @method boolean getIsMultiple() 获取参数值是否支持多选或者填写多个。
 * @method void setIsMultiple(boolean $IsMultiple) 设置参数值是否支持多选或者填写多个。
 * @method boolean getIsAllowEmpty() 获取是否允许为空。
 * @method void setIsAllowEmpty(boolean $IsAllowEmpty) 设置是否允许为空。
 * @method array getChoiceProperties() 获取该参数对应的关联配置参数，属于调用接口的必填参数。
注意：如果可选参数无特殊新增参数则该数组为空数组。
 * @method void setChoiceProperties(array $ChoiceProperties) 设置该参数对应的关联配置参数，属于调用接口的必填参数。
注意：如果可选参数无特殊新增参数则该数组为空数组。
 * @method RuleExtraParameter getExtraParameter() 获取<li> 为 NULL：无特殊参数，RuleAction 选择 NormalAction；</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraParameter(RuleExtraParameter $ExtraParameter) 设置<li> 为 NULL：无特殊参数，RuleAction 选择 NormalAction；</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RulesProperties extends AbstractModel
{
    /**
     * @var string 值为参数名称。
     */
    public $Name;

    /**
     * @var integer 数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     */
    public $Min;

    /**
     * @var array 参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
     */
    public $ChoicesValue;

    /**
     * @var string 参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> OBJECT：参数值为对象类型，ChoiceProperties 为改对象类型关联的属性；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>注意：当参数类型为 OBJECT 类型时，请注意参考 [示例2 参数为 OBJECT 类型的创建](https://tcloud4api.woa.com/document/product/1657/79382?!preview&!document=1)
     */
    public $Type;

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
     * @var array 该参数对应的关联配置参数，属于调用接口的必填参数。
注意：如果可选参数无特殊新增参数则该数组为空数组。
     */
    public $ChoiceProperties;

    /**
     * @var RuleExtraParameter <li> 为 NULL：无特殊参数，RuleAction 选择 NormalAction；</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraParameter;

    /**
     * @param string $Name 值为参数名称。
     * @param integer $Min 数值参数的最小值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     * @param array $ChoicesValue 参数值的可选值。
注意：若参数值为用户自定义则该数组为空数组。
     * @param string $Type 参数值类型。
<li> CHOICE：参数值只能在 ChoicesValue 中选择； </li>
<li> TOGGLE：参数值为开关类型，可在 ChoicesValue 中选择；</li>
<li> OBJECT：参数值为对象类型，ChoiceProperties 为改对象类型关联的属性；</li>
<li> CUSTOM_NUM：参数值用户自定义，整型类型；</li>
<li> CUSTOM_STRING：参数值用户自定义，字符串类型。</li>注意：当参数类型为 OBJECT 类型时，请注意参考 [示例2 参数为 OBJECT 类型的创建](https://tcloud4api.woa.com/document/product/1657/79382?!preview&!document=1)
     * @param integer $Max 数值参数的最大值，非数值参数或 Min 和 Max 值都为 0 则此项无意义。
     * @param boolean $IsMultiple 参数值是否支持多选或者填写多个。
     * @param boolean $IsAllowEmpty 是否允许为空。
     * @param array $ChoiceProperties 该参数对应的关联配置参数，属于调用接口的必填参数。
注意：如果可选参数无特殊新增参数则该数组为空数组。
     * @param RuleExtraParameter $ExtraParameter <li> 为 NULL：无特殊参数，RuleAction 选择 NormalAction；</li>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ChoicesValue",$param) and $param["ChoicesValue"] !== null) {
            $this->ChoicesValue = $param["ChoicesValue"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ChoiceProperties",$param) and $param["ChoiceProperties"] !== null) {
            $this->ChoiceProperties = [];
            foreach ($param["ChoiceProperties"] as $key => $value){
                $obj = new RuleChoicePropertiesItem();
                $obj->deserialize($value);
                array_push($this->ChoiceProperties, $obj);
            }
        }

        if (array_key_exists("ExtraParameter",$param) and $param["ExtraParameter"] !== null) {
            $this->ExtraParameter = new RuleExtraParameter();
            $this->ExtraParameter->deserialize($param["ExtraParameter"]);
        }
    }
}
