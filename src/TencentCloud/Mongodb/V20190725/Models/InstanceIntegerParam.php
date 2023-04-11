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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可修改参数 Integer 类型集合。
 *
 * @method string getCurrentValue() 获取参数当前值。
 * @method void setCurrentValue(string $CurrentValue) 设置参数当前值。
 * @method string getDefaultValue() 获取参数默认值。
 * @method void setDefaultValue(string $DefaultValue) 设置参数默认值。
 * @method string getMax() 获取参数最大值。
 * @method void setMax(string $Max) 设置参数最大值。
 * @method string getMin() 获取最小值。
 * @method void setMin(string $Min) 设置最小值。
 * @method string getNeedRestart() 获取参数修改之后是否需要重启生效。
- 1:需要重启后生效。
- 0：无需重启，设置成功即可生效。
 * @method void setNeedRestart(string $NeedRestart) 设置参数修改之后是否需要重启生效。
- 1:需要重启后生效。
- 0：无需重启，设置成功即可生效。
 * @method string getParamName() 获取参数名称。
 * @method void setParamName(string $ParamName) 设置参数名称。
 * @method array getTips() 获取参数说明。
 * @method void setTips(array $Tips) 设置参数说明。
 * @method string getValueType() 获取参数类型。
 * @method void setValueType(string $ValueType) 设置参数类型。
 * @method integer getStatus() 获取是否为运行中参数值。
- 1：运行中参数值。
- 0：非运行中参数值。
 * @method void setStatus(integer $Status) 设置是否为运行中参数值。
- 1：运行中参数值。
- 0：非运行中参数值。
 * @method string getUnit() 获取冗余字段，可忽略。
 * @method void setUnit(string $Unit) 设置冗余字段，可忽略。
 */
class InstanceIntegerParam extends AbstractModel
{
    /**
     * @var string 参数当前值。
     */
    public $CurrentValue;

    /**
     * @var string 参数默认值。
     */
    public $DefaultValue;

    /**
     * @var string 参数最大值。
     */
    public $Max;

    /**
     * @var string 最小值。
     */
    public $Min;

    /**
     * @var string 参数修改之后是否需要重启生效。
- 1:需要重启后生效。
- 0：无需重启，设置成功即可生效。
     */
    public $NeedRestart;

    /**
     * @var string 参数名称。
     */
    public $ParamName;

    /**
     * @var array 参数说明。
     */
    public $Tips;

    /**
     * @var string 参数类型。
     */
    public $ValueType;

    /**
     * @var integer 是否为运行中参数值。
- 1：运行中参数值。
- 0：非运行中参数值。
     */
    public $Status;

    /**
     * @var string 冗余字段，可忽略。
     */
    public $Unit;

    /**
     * @param string $CurrentValue 参数当前值。
     * @param string $DefaultValue 参数默认值。
     * @param string $Max 参数最大值。
     * @param string $Min 最小值。
     * @param string $NeedRestart 参数修改之后是否需要重启生效。
- 1:需要重启后生效。
- 0：无需重启，设置成功即可生效。
     * @param string $ParamName 参数名称。
     * @param array $Tips 参数说明。
     * @param string $ValueType 参数类型。
     * @param integer $Status 是否为运行中参数值。
- 1：运行中参数值。
- 0：非运行中参数值。
     * @param string $Unit 冗余字段，可忽略。
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

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
