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
 * 定制配置的单个字段参数内容。
 *
 * @method string getName() 获取<p>定制配置项下各参数字段名称。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Name 获取，如 &quot;Seconds&quot;、&quot;Ports&quot;、&quot;StatusCode&quot;。</p>
 * @method void setName(string $Name) 设置<p>定制配置项下各参数字段名称。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Name 获取，如 &quot;Seconds&quot;、&quot;Ports&quot;、&quot;StatusCode&quot;。</p>
 * @method string getValueType() 获取<p>定制配置项下各参数字段值的类型。</p><p>枚举值：</p><ul><li>String： 字符串类型。</li><li>Integer： 整型类型。</li><li>Float： 浮点数类型。</li><li>Boolean： 布尔类型。</li><li>ArrayOfString： 字符串数组类型。</li><li>ArrayOfInteger： 整型数组类型。</li><li>ArrayOfFloat： 浮点数数组类型。</li></ul><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Type 获取。</p>
 * @method void setValueType(string $ValueType) 设置<p>定制配置项下各参数字段值的类型。</p><p>枚举值：</p><ul><li>String： 字符串类型。</li><li>Integer： 整型类型。</li><li>Float： 浮点数类型。</li><li>Boolean： 布尔类型。</li><li>ArrayOfString： 字符串数组类型。</li><li>ArrayOfInteger： 整型数组类型。</li><li>ArrayOfFloat： 浮点数数组类型。</li></ul><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Type 获取。</p>
 * @method string getStringValue() 获取<p>字符串类型参数值。当 ValueType 为 String 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setStringValue(string $StringValue) 设置<p>字符串类型参数值。当 ValueType 为 String 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method integer getIntegerValue() 获取<p>整型类型参数值。当 ValueType 为 Integer 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setIntegerValue(integer $IntegerValue) 设置<p>整型类型参数值。当 ValueType 为 Integer 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method float getFloatValue() 获取<p>浮点数类型参数值。当 ValueType 为 Float 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setFloatValue(float $FloatValue) 设置<p>浮点数类型参数值。当 ValueType 为 Float 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method boolean getBooleanValue() 获取<p>布尔类型参数值。当 ValueType 为 Boolean 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setBooleanValue(boolean $BooleanValue) 设置<p>布尔类型参数值。当 ValueType 为 Boolean 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method array getStringArrayValue() 获取<p>字符串数组类型参数值。当 ValueType 为 ArrayOfString 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setStringArrayValue(array $StringArrayValue) 设置<p>字符串数组类型参数值。当 ValueType 为 ArrayOfString 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method array getIntegerArrayValue() 获取<p>整型数组类型参数值。当 ValueType 为 ArrayOfInteger 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setIntegerArrayValue(array $IntegerArrayValue) 设置<p>整型数组类型参数值。当 ValueType 为 ArrayOfInteger 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method array getFloatArrayValue() 获取<p>浮点数数组类型参数值。当 ValueType 为 ArrayOfFloat 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 * @method void setFloatArrayValue(array $FloatArrayValue) 设置<p>浮点数数组类型参数值。当 ValueType 为 ArrayOfFloat 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
 */
class CustomActionParameter extends AbstractModel
{
    /**
     * @var string <p>定制配置项下各参数字段名称。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Name 获取，如 &quot;Seconds&quot;、&quot;Ports&quot;、&quot;StatusCode&quot;。</p>
     */
    public $Name;

    /**
     * @var string <p>定制配置项下各参数字段值的类型。</p><p>枚举值：</p><ul><li>String： 字符串类型。</li><li>Integer： 整型类型。</li><li>Float： 浮点数类型。</li><li>Boolean： 布尔类型。</li><li>ArrayOfString： 字符串数组类型。</li><li>ArrayOfInteger： 整型数组类型。</li><li>ArrayOfFloat： 浮点数数组类型。</li></ul><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Type 获取。</p>
     */
    public $ValueType;

    /**
     * @var string <p>字符串类型参数值。当 ValueType 为 String 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $StringValue;

    /**
     * @var integer <p>整型类型参数值。当 ValueType 为 Integer 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $IntegerValue;

    /**
     * @var float <p>浮点数类型参数值。当 ValueType 为 Float 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $FloatValue;

    /**
     * @var boolean <p>布尔类型参数值。当 ValueType 为 Boolean 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $BooleanValue;

    /**
     * @var array <p>字符串数组类型参数值。当 ValueType 为 ArrayOfString 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $StringArrayValue;

    /**
     * @var array <p>整型数组类型参数值。当 ValueType 为 ArrayOfInteger 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $IntegerArrayValue;

    /**
     * @var array <p>浮点数数组类型参数值。当 ValueType 为 ArrayOfFloat 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     */
    public $FloatArrayValue;

    /**
     * @param string $Name <p>定制配置项下各参数字段名称。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Name 获取，如 &quot;Seconds&quot;、&quot;Ports&quot;、&quot;StatusCode&quot;。</p>
     * @param string $ValueType <p>定制配置项下各参数字段值的类型。</p><p>枚举值：</p><ul><li>String： 字符串类型。</li><li>Integer： 整型类型。</li><li>Float： 浮点数类型。</li><li>Boolean： 布尔类型。</li><li>ArrayOfString： 字符串数组类型。</li><li>ArrayOfInteger： 整型数组类型。</li><li>ArrayOfFloat： 浮点数数组类型。</li></ul><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters[].Type 获取。</p>
     * @param string $StringValue <p>字符串类型参数值。当 ValueType 为 String 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     * @param integer $IntegerValue <p>整型类型参数值。当 ValueType 为 Integer 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     * @param float $FloatValue <p>浮点数类型参数值。当 ValueType 为 Float 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     * @param boolean $BooleanValue <p>布尔类型参数值。当 ValueType 为 Boolean 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     * @param array $StringArrayValue <p>字符串数组类型参数值。当 ValueType 为 ArrayOfString 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     * @param array $IntegerArrayValue <p>整型数组类型参数值。当 ValueType 为 ArrayOfInteger 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
     * @param array $FloatArrayValue <p>浮点数数组类型参数值。当 ValueType 为 ArrayOfFloat 时，该参数必填。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取参数值的默认值、单位、限制等说明。</p>
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

        if (array_key_exists("StringValue",$param) and $param["StringValue"] !== null) {
            $this->StringValue = $param["StringValue"];
        }

        if (array_key_exists("IntegerValue",$param) and $param["IntegerValue"] !== null) {
            $this->IntegerValue = $param["IntegerValue"];
        }

        if (array_key_exists("FloatValue",$param) and $param["FloatValue"] !== null) {
            $this->FloatValue = $param["FloatValue"];
        }

        if (array_key_exists("BooleanValue",$param) and $param["BooleanValue"] !== null) {
            $this->BooleanValue = $param["BooleanValue"];
        }

        if (array_key_exists("StringArrayValue",$param) and $param["StringArrayValue"] !== null) {
            $this->StringArrayValue = $param["StringArrayValue"];
        }

        if (array_key_exists("IntegerArrayValue",$param) and $param["IntegerArrayValue"] !== null) {
            $this->IntegerArrayValue = $param["IntegerArrayValue"];
        }

        if (array_key_exists("FloatArrayValue",$param) and $param["FloatArrayValue"] !== null) {
            $this->FloatArrayValue = $param["FloatArrayValue"];
        }
    }
}
