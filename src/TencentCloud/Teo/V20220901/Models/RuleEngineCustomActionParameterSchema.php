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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则引擎操作定制配置参数结构定义。
 *
 * @method string getName() 获取<p>参数字段名称。</p>
 * @method void setName(string $Name) 设置<p>参数字段名称。</p>
 * @method string getValueType() 获取<p>参数字段类型，取值有：<li>Boolean：布尔；</li><li>Integer：整型；</li><li>Float：浮点型；</li><li>String：字符串；</li><li>ArrayOfInteger：整型数组；</li><li>ArrayOfFloat：浮点型数组；</li><li>ArrayOfString：字符串数组。</li></p>
 * @method void setValueType(string $ValueType) 设置<p>参数字段类型，取值有：<li>Boolean：布尔；</li><li>Integer：整型；</li><li>Float：浮点型；</li><li>String：字符串；</li><li>ArrayOfInteger：整型数组；</li><li>ArrayOfFloat：浮点型数组；</li><li>ArrayOfString：字符串数组。</li></p>
 * @method string getDescription() 获取<p>参数字段描述。</p>
 * @method void setDescription(string $Description) 设置<p>参数字段描述。</p>
 * @method string getDefault() 获取<p>参数字段默认值。</p>
 * @method void setDefault(string $Default) 设置<p>参数字段默认值。</p>
 * @method string getUnit() 获取<p>参数字段单位。</p>
 * @method void setUnit(string $Unit) 设置<p>参数字段单位。</p>
 * @method boolean getRequired() 获取<p>参数字段是否必填。</p><p>默认值：false</p><p>若填充，则适用于所有参数字段类型校验；若不填充则不校验。</p>
 * @method void setRequired(boolean $Required) 设置<p>参数字段是否必填。</p><p>默认值：false</p><p>若填充，则适用于所有参数字段类型校验；若不填充则不校验。</p>
 * @method float getMinValue() 获取<p>参数字段最小值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMinValue(float $MinValue) 设置<p>参数字段最小值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
 * @method float getMaxValue() 获取<p>参数字段最大值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMaxValue(float $MaxValue) 设置<p>参数字段最大值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
 * @method integer getMinLength() 获取<p>参数字段最小长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMinLength(integer $MinLength) 设置<p>参数字段最小长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
 * @method integer getMaxLength() 获取<p>参数字段最大长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMaxLength(integer $MaxLength) 设置<p>参数字段最大长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
 * @method integer getMinItems() 获取<p>参数字段最小项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMinItems(integer $MinItems) 设置<p>参数字段最小项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
 * @method integer getMaxItems() 获取<p>参数字段最大项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMaxItems(integer $MaxItems) 设置<p>参数字段最大项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
 * @method boolean getUniqueItems() 获取<p>参数字段项是否唯一。</p><p>默认值：false</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setUniqueItems(boolean $UniqueItems) 设置<p>参数字段项是否唯一。</p><p>默认值：false</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
 * @method string getAllowedPattern() 获取<p>参数字段允许的格式。</p><p>若填充，需要校验字符串或者字符串数组内容合适；若不填充则不校验。</p>
 * @method void setAllowedPattern(string $AllowedPattern) 设置<p>参数字段允许的格式。</p><p>若填充，需要校验字符串或者字符串数组内容合适；若不填充则不校验。</p>
 * @method array getAllowedValues() 获取<p>参数字段允许的取值，若为空则不校验。</p><p>若本参数填充，则说明对应参数为枚举类型，仅允许填充本参数数组中的值；若不填充则不校验。</p>
 * @method void setAllowedValues(array $AllowedValues) 设置<p>参数字段允许的取值，若为空则不校验。</p><p>若本参数填充，则说明对应参数为枚举类型，仅允许填充本参数数组中的值；若不填充则不校验。</p>
 * @method string getMultipleOf() 获取<p>参数字段最小步长。若填充，适用于浮点型和浮点型数组类型参数的数值校验；若不填充则不校验。</p>
 * @method void setMultipleOf(string $MultipleOf) 设置<p>参数字段最小步长。若填充，适用于浮点型和浮点型数组类型参数的数值校验；若不填充则不校验。</p>
 */
class RuleEngineCustomActionParameterSchema extends AbstractModel
{
    /**
     * @var string <p>参数字段名称。</p>
     */
    public $Name;

    /**
     * @var string <p>参数字段类型，取值有：<li>Boolean：布尔；</li><li>Integer：整型；</li><li>Float：浮点型；</li><li>String：字符串；</li><li>ArrayOfInteger：整型数组；</li><li>ArrayOfFloat：浮点型数组；</li><li>ArrayOfString：字符串数组。</li></p>
     */
    public $ValueType;

    /**
     * @var string <p>参数字段描述。</p>
     */
    public $Description;

    /**
     * @var string <p>参数字段默认值。</p>
     */
    public $Default;

    /**
     * @var string <p>参数字段单位。</p>
     */
    public $Unit;

    /**
     * @var boolean <p>参数字段是否必填。</p><p>默认值：false</p><p>若填充，则适用于所有参数字段类型校验；若不填充则不校验。</p>
     */
    public $Required;

    /**
     * @var float <p>参数字段最小值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MinValue;

    /**
     * @var float <p>参数字段最大值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MaxValue;

    /**
     * @var integer <p>参数字段最小长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MinLength;

    /**
     * @var integer <p>参数字段最大长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MaxLength;

    /**
     * @var integer <p>参数字段最小项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MinItems;

    /**
     * @var integer <p>参数字段最大项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MaxItems;

    /**
     * @var boolean <p>参数字段项是否唯一。</p><p>默认值：false</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $UniqueItems;

    /**
     * @var string <p>参数字段允许的格式。</p><p>若填充，需要校验字符串或者字符串数组内容合适；若不填充则不校验。</p>
     */
    public $AllowedPattern;

    /**
     * @var array <p>参数字段允许的取值，若为空则不校验。</p><p>若本参数填充，则说明对应参数为枚举类型，仅允许填充本参数数组中的值；若不填充则不校验。</p>
     */
    public $AllowedValues;

    /**
     * @var string <p>参数字段最小步长。若填充，适用于浮点型和浮点型数组类型参数的数值校验；若不填充则不校验。</p>
     */
    public $MultipleOf;

    /**
     * @param string $Name <p>参数字段名称。</p>
     * @param string $ValueType <p>参数字段类型，取值有：<li>Boolean：布尔；</li><li>Integer：整型；</li><li>Float：浮点型；</li><li>String：字符串；</li><li>ArrayOfInteger：整型数组；</li><li>ArrayOfFloat：浮点型数组；</li><li>ArrayOfString：字符串数组。</li></p>
     * @param string $Description <p>参数字段描述。</p>
     * @param string $Default <p>参数字段默认值。</p>
     * @param string $Unit <p>参数字段单位。</p>
     * @param boolean $Required <p>参数字段是否必填。</p><p>默认值：false</p><p>若填充，则适用于所有参数字段类型校验；若不填充则不校验。</p>
     * @param float $MinValue <p>参数字段最小值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
     * @param float $MaxValue <p>参数字段最大值。</p><p>若填充，适用于整数、浮点数、整数数组、浮点数数组类型参数的数值校验；若不填充则不校验。</p>
     * @param integer $MinLength <p>参数字段最小长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
     * @param integer $MaxLength <p>参数字段最大长度。</p><p>若填充，适用于字符串、字符串数组类型参数的数值校验；若不填充则不校验。</p>
     * @param integer $MinItems <p>参数字段最小项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
     * @param integer $MaxItems <p>参数字段最大项数。</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
     * @param boolean $UniqueItems <p>参数字段项是否唯一。</p><p>默认值：false</p><p>若填充，适用于各类数组类型参数的数值校验；若不填充则不校验。</p>
     * @param string $AllowedPattern <p>参数字段允许的格式。</p><p>若填充，需要校验字符串或者字符串数组内容合适；若不填充则不校验。</p>
     * @param array $AllowedValues <p>参数字段允许的取值，若为空则不校验。</p><p>若本参数填充，则说明对应参数为枚举类型，仅允许填充本参数数组中的值；若不填充则不校验。</p>
     * @param string $MultipleOf <p>参数字段最小步长。若填充，适用于浮点型和浮点型数组类型参数的数值校验；若不填充则不校验。</p>
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("MinItems",$param) and $param["MinItems"] !== null) {
            $this->MinItems = $param["MinItems"];
        }

        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            $this->MaxItems = $param["MaxItems"];
        }

        if (array_key_exists("UniqueItems",$param) and $param["UniqueItems"] !== null) {
            $this->UniqueItems = $param["UniqueItems"];
        }

        if (array_key_exists("AllowedPattern",$param) and $param["AllowedPattern"] !== null) {
            $this->AllowedPattern = $param["AllowedPattern"];
        }

        if (array_key_exists("AllowedValues",$param) and $param["AllowedValues"] !== null) {
            $this->AllowedValues = $param["AllowedValues"];
        }

        if (array_key_exists("MultipleOf",$param) and $param["MultipleOf"] !== null) {
            $this->MultipleOf = $param["MultipleOf"];
        }
    }
}
