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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例枚举类型参数描述
 *
 * @method string getParamName() 获取<p>参数名称。</p>
 * @method void setParamName(string $ParamName) 设置<p>参数名称。</p>
 * @method string getValueType() 获取<p>参数类型，例如：Enum。</p>
 * @method void setValueType(string $ValueType) 设置<p>参数类型，例如：Enum。</p>
 * @method string getNeedRestart() 获取<p>参数值修改后是否需要重启。</p><ul><li>true：需要。</li><li>false：不需要。</li></ul>
 * @method void setNeedRestart(string $NeedRestart) 设置<p>参数值修改后是否需要重启。</p><ul><li>true：需要。</li><li>false：不需要。</li></ul>
 * @method string getDefaultValue() 获取<p>参数默认值。</p>
 * @method void setDefaultValue(string $DefaultValue) 设置<p>参数默认值。</p>
 * @method string getCurrentValue() 获取<p>参数当前运行值。</p>
 * @method void setCurrentValue(string $CurrentValue) 设置<p>参数当前运行值。</p>
 * @method string getTips() 获取<p>参数说明。</p>
 * @method void setTips(string $Tips) 设置<p>参数说明。</p>
 * @method array getEnumValue() 获取<p>参数可取的值。</p>
 * @method void setEnumValue(array $EnumValue) 设置<p>参数可取的值。</p>
 * @method integer getStatus() 获取<p>参数修改状态。</p><ul><li>1: 修改中。</li><li>2：修改完成。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>参数修改状态。</p><ul><li>1: 修改中。</li><li>2：修改完成。</li></ul>
 * @method string getParamType() 获取<p>参数类型</p><p>枚举值：</p><ul><li>redis： cache节点支持的参数</li><li>redis-interface： 代理proxy支持的参数</li><li>tendis： tendis支持的参数</li></ul>
 * @method void setParamType(string $ParamType) 设置<p>参数类型</p><p>枚举值：</p><ul><li>redis： cache节点支持的参数</li><li>redis-interface： 代理proxy支持的参数</li><li>tendis： tendis支持的参数</li></ul>
 * @method boolean getFeatureSupported() 获取<p>当前实例是否支持该特性</p>
 * @method void setFeatureSupported(boolean $FeatureSupported) 设置<p>当前实例是否支持该特性</p>
 * @method string getNewFeatureOnlineTime() 获取<p>新特性上线日期</p><p>参数格式：时间格式YYYY-MM-DD</p>
 * @method void setNewFeatureOnlineTime(string $NewFeatureOnlineTime) 设置<p>新特性上线日期</p><p>参数格式：时间格式YYYY-MM-DD</p>
 * @method string getPattern() 获取<p>正则校验规则</p>
 * @method void setPattern(string $Pattern) 设置<p>正则校验规则</p>
 * @method string getInputDescription() 获取<p>输入格式描述</p>
 * @method void setInputDescription(string $InputDescription) 设置<p>输入格式描述</p>
 */
class InstanceEnumParam extends AbstractModel
{
    /**
     * @var string <p>参数名称。</p>
     */
    public $ParamName;

    /**
     * @var string <p>参数类型，例如：Enum。</p>
     */
    public $ValueType;

    /**
     * @var string <p>参数值修改后是否需要重启。</p><ul><li>true：需要。</li><li>false：不需要。</li></ul>
     */
    public $NeedRestart;

    /**
     * @var string <p>参数默认值。</p>
     */
    public $DefaultValue;

    /**
     * @var string <p>参数当前运行值。</p>
     */
    public $CurrentValue;

    /**
     * @var string <p>参数说明。</p>
     */
    public $Tips;

    /**
     * @var array <p>参数可取的值。</p>
     */
    public $EnumValue;

    /**
     * @var integer <p>参数修改状态。</p><ul><li>1: 修改中。</li><li>2：修改完成。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>参数类型</p><p>枚举值：</p><ul><li>redis： cache节点支持的参数</li><li>redis-interface： 代理proxy支持的参数</li><li>tendis： tendis支持的参数</li></ul>
     */
    public $ParamType;

    /**
     * @var boolean <p>当前实例是否支持该特性</p>
     */
    public $FeatureSupported;

    /**
     * @var string <p>新特性上线日期</p><p>参数格式：时间格式YYYY-MM-DD</p>
     */
    public $NewFeatureOnlineTime;

    /**
     * @var string <p>正则校验规则</p>
     */
    public $Pattern;

    /**
     * @var string <p>输入格式描述</p>
     */
    public $InputDescription;

    /**
     * @param string $ParamName <p>参数名称。</p>
     * @param string $ValueType <p>参数类型，例如：Enum。</p>
     * @param string $NeedRestart <p>参数值修改后是否需要重启。</p><ul><li>true：需要。</li><li>false：不需要。</li></ul>
     * @param string $DefaultValue <p>参数默认值。</p>
     * @param string $CurrentValue <p>参数当前运行值。</p>
     * @param string $Tips <p>参数说明。</p>
     * @param array $EnumValue <p>参数可取的值。</p>
     * @param integer $Status <p>参数修改状态。</p><ul><li>1: 修改中。</li><li>2：修改完成。</li></ul>
     * @param string $ParamType <p>参数类型</p><p>枚举值：</p><ul><li>redis： cache节点支持的参数</li><li>redis-interface： 代理proxy支持的参数</li><li>tendis： tendis支持的参数</li></ul>
     * @param boolean $FeatureSupported <p>当前实例是否支持该特性</p>
     * @param string $NewFeatureOnlineTime <p>新特性上线日期</p><p>参数格式：时间格式YYYY-MM-DD</p>
     * @param string $Pattern <p>正则校验规则</p>
     * @param string $InputDescription <p>输入格式描述</p>
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("FeatureSupported",$param) and $param["FeatureSupported"] !== null) {
            $this->FeatureSupported = $param["FeatureSupported"];
        }

        if (array_key_exists("NewFeatureOnlineTime",$param) and $param["NewFeatureOnlineTime"] !== null) {
            $this->NewFeatureOnlineTime = $param["NewFeatureOnlineTime"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("InputDescription",$param) and $param["InputDescription"] !== null) {
            $this->InputDescription = $param["InputDescription"];
        }
    }
}
