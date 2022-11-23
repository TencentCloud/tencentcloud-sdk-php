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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数模板详情
 *
 * @method string getCurrentValue() 获取当前值
 * @method void setCurrentValue(string $CurrentValue) 设置当前值
 * @method string getDefault() 获取默认值
 * @method void setDefault(string $Default) 设置默认值
 * @method array getEnumValue() 获取参数类型为enum时可选的值类型集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnumValue(array $EnumValue) 设置参数类型为enum时可选的值类型集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMax() 获取参数类型为float/integer时的最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMax(string $Max) 设置参数类型为float/integer时的最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMin() 获取参数类型为float/integer时的最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(string $Min) 设置参数类型为float/integer时的最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method integer getNeedReboot() 获取是否需要重启
 * @method void setNeedReboot(integer $NeedReboot) 设置是否需要重启
 * @method string getDescription() 获取参数描述
 * @method void setDescription(string $Description) 设置参数描述
 * @method string getParamType() 获取参数类型，integer/float/string/enum
 * @method void setParamType(string $ParamType) 设置参数类型，integer/float/string/enum
 */
class TemplateParamInfo extends AbstractModel
{
    /**
     * @var string 当前值
     */
    public $CurrentValue;

    /**
     * @var string 默认值
     */
    public $Default;

    /**
     * @var array 参数类型为enum时可选的值类型集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnumValue;

    /**
     * @var string 参数类型为float/integer时的最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Max;

    /**
     * @var string 参数类型为float/integer时的最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var integer 是否需要重启
     */
    public $NeedReboot;

    /**
     * @var string 参数描述
     */
    public $Description;

    /**
     * @var string 参数类型，integer/float/string/enum
     */
    public $ParamType;

    /**
     * @param string $CurrentValue 当前值
     * @param string $Default 默认值
     * @param array $EnumValue 参数类型为enum时可选的值类型集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Max 参数类型为float/integer时的最大值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Min 参数类型为float/integer时的最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamName 参数名称
     * @param integer $NeedReboot 是否需要重启
     * @param string $Description 参数描述
     * @param string $ParamType 参数类型，integer/float/string/enum
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
        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }
    }
}
