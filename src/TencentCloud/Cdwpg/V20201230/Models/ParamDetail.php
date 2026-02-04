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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParamDetail 详细
 *
 * @method string getParamName() 获取参数名
 * @method void setParamName(string $ParamName) 设置参数名
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method boolean getNeedRestart() 获取是否需要重启
 * @method void setNeedRestart(boolean $NeedRestart) 设置是否需要重启
 * @method string getRunningValue() 获取当前运行值
 * @method void setRunningValue(string $RunningValue) 设置当前运行值
 * @method ValueRange getValueRange() 获取取值范围
 * @method void setValueRange(ValueRange $ValueRange) 设置取值范围
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getShortDesc() 获取英文简介
 * @method void setShortDesc(string $ShortDesc) 设置英文简介
 * @method string getParameterName() 获取参数名
 * @method void setParameterName(string $ParameterName) 设置参数名
 * @method string getLatestValue() 获取最新修改值
 * @method void setLatestValue(string $LatestValue) 设置最新修改值
 */
class ParamDetail extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $ParamName;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var boolean 是否需要重启
     */
    public $NeedRestart;

    /**
     * @var string 当前运行值
     */
    public $RunningValue;

    /**
     * @var ValueRange 取值范围
     */
    public $ValueRange;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 英文简介
     */
    public $ShortDesc;

    /**
     * @var string 参数名
     */
    public $ParameterName;

    /**
     * @var string 最新修改值
     */
    public $LatestValue;

    /**
     * @param string $ParamName 参数名
     * @param string $DefaultValue 默认值
     * @param boolean $NeedRestart 是否需要重启
     * @param string $RunningValue 当前运行值
     * @param ValueRange $ValueRange 取值范围
     * @param string $Unit 单位
     * @param string $ShortDesc 英文简介
     * @param string $ParameterName 参数名
     * @param string $LatestValue 最新修改值
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("RunningValue",$param) and $param["RunningValue"] !== null) {
            $this->RunningValue = $param["RunningValue"];
        }

        if (array_key_exists("ValueRange",$param) and $param["ValueRange"] !== null) {
            $this->ValueRange = new ValueRange();
            $this->ValueRange->deserialize($param["ValueRange"]);
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ShortDesc",$param) and $param["ShortDesc"] !== null) {
            $this->ShortDesc = $param["ShortDesc"];
        }

        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("LatestValue",$param) and $param["LatestValue"] !== null) {
            $this->LatestValue = $param["LatestValue"];
        }
    }
}
