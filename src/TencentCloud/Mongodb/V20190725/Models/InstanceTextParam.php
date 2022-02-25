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
 * 实例可修改参数text类型集合。
 *
 * @method string getCurrentValue() 获取当前值
 * @method void setCurrentValue(string $CurrentValue) 设置当前值
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method string getNeedRestart() 获取是否需要重启
 * @method void setNeedRestart(string $NeedRestart) 设置是否需要重启
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method string getTextValue() 获取text类型值
 * @method void setTextValue(string $TextValue) 设置text类型值
 * @method array getTips() 获取参数说明
 * @method void setTips(array $Tips) 设置参数说明
 * @method string getValueType() 获取值类型说明
 * @method void setValueType(string $ValueType) 设置值类型说明
 * @method string getStatus() 获取是否为运行中参数值 1:运行中参数值；0：非运行中参数值；
 * @method void setStatus(string $Status) 设置是否为运行中参数值 1:运行中参数值；0：非运行中参数值；
 */
class InstanceTextParam extends AbstractModel
{
    /**
     * @var string 当前值
     */
    public $CurrentValue;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var string 是否需要重启
     */
    public $NeedRestart;

    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var string text类型值
     */
    public $TextValue;

    /**
     * @var array 参数说明
     */
    public $Tips;

    /**
     * @var string 值类型说明
     */
    public $ValueType;

    /**
     * @var string 是否为运行中参数值 1:运行中参数值；0：非运行中参数值；
     */
    public $Status;

    /**
     * @param string $CurrentValue 当前值
     * @param string $DefaultValue 默认值
     * @param string $NeedRestart 是否需要重启
     * @param string $ParamName 参数名称
     * @param string $TextValue text类型值
     * @param array $Tips 参数说明
     * @param string $ValueType 值类型说明
     * @param string $Status 是否为运行中参数值 1:运行中参数值；0：非运行中参数值；
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

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("TextValue",$param) and $param["TextValue"] !== null) {
            $this->TextValue = $param["TextValue"];
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
    }
}
