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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例参数详细描述
 *
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method string getParamType() 获取参数类型：integer，enum，float，string，func
 * @method void setParamType(string $ParamType) 设置参数类型：integer，enum，float，string，func
 * @method boolean getSupportFunc() 获取true-支持"func"，false-不支持公式
 * @method void setSupportFunc(boolean $SupportFunc) 设置true-支持"func"，false-不支持公式
 * @method string getDefault() 获取默认值
 * @method void setDefault(string $Default) 设置默认值
 * @method string getDescription() 获取参数描述
 * @method void setDescription(string $Description) 设置参数描述
 * @method string getCurrentValue() 获取参数当前值
 * @method void setCurrentValue(string $CurrentValue) 设置参数当前值
 * @method integer getNeedReboot() 获取修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。
 * @method void setNeedReboot(integer $NeedReboot) 设置修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。
 * @method string getMax() 获取参数容许的最大值
 * @method void setMax(string $Max) 设置参数容许的最大值
 * @method string getMin() 获取参数容许的最小值
 * @method void setMin(string $Min) 设置参数容许的最小值
 * @method array getEnumValue() 获取参数的可选枚举值。如果为非枚举值，则为空
 * @method void setEnumValue(array $EnumValue) 设置参数的可选枚举值。如果为非枚举值，则为空
 * @method integer getIsGlobal() 获取1：全局参数，0：非全局参数
 * @method void setIsGlobal(integer $IsGlobal) 设置1：全局参数，0：非全局参数
 * @method string getMatchType() 获取匹配类型，multiVal
 * @method void setMatchType(string $MatchType) 设置匹配类型，multiVal
 * @method string getMatchValue() 获取匹配目标值，当multiVal时，各个key用，分割
 * @method void setMatchValue(string $MatchValue) 设置匹配目标值，当multiVal时，各个key用，分割
 * @method boolean getIsFunc() 获取true-为公式，false-非公式
 * @method void setIsFunc(boolean $IsFunc) 设置true-为公式，false-非公式
 * @method string getFunc() 获取参数设置为公式时，Func返回设置的公式内容
 * @method void setFunc(string $Func) 设置参数设置为公式时，Func返回设置的公式内容
 * @method ModifiableInfo getModifiableInfo() 获取参数是否可修改
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) 设置参数是否可修改
 * @method string getFuncPattern() 获取支持公式的参数的默认公式样式
 * @method void setFuncPattern(string $FuncPattern) 设置支持公式的参数的默认公式样式
 */
class ParamDetail extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var string 参数类型：integer，enum，float，string，func
     */
    public $ParamType;

    /**
     * @var boolean true-支持"func"，false-不支持公式
     */
    public $SupportFunc;

    /**
     * @var string 默认值
     */
    public $Default;

    /**
     * @var string 参数描述
     */
    public $Description;

    /**
     * @var string 参数当前值
     */
    public $CurrentValue;

    /**
     * @var integer 修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。
     */
    public $NeedReboot;

    /**
     * @var string 参数容许的最大值
     */
    public $Max;

    /**
     * @var string 参数容许的最小值
     */
    public $Min;

    /**
     * @var array 参数的可选枚举值。如果为非枚举值，则为空
     */
    public $EnumValue;

    /**
     * @var integer 1：全局参数，0：非全局参数
     */
    public $IsGlobal;

    /**
     * @var string 匹配类型，multiVal
     */
    public $MatchType;

    /**
     * @var string 匹配目标值，当multiVal时，各个key用，分割
     */
    public $MatchValue;

    /**
     * @var boolean true-为公式，false-非公式
     */
    public $IsFunc;

    /**
     * @var string 参数设置为公式时，Func返回设置的公式内容
     */
    public $Func;

    /**
     * @var ModifiableInfo 参数是否可修改
     */
    public $ModifiableInfo;

    /**
     * @var string 支持公式的参数的默认公式样式
     */
    public $FuncPattern;

    /**
     * @param string $ParamName 参数名称
     * @param string $ParamType 参数类型：integer，enum，float，string，func
     * @param boolean $SupportFunc true-支持"func"，false-不支持公式
     * @param string $Default 默认值
     * @param string $Description 参数描述
     * @param string $CurrentValue 参数当前值
     * @param integer $NeedReboot 修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。
     * @param string $Max 参数容许的最大值
     * @param string $Min 参数容许的最小值
     * @param array $EnumValue 参数的可选枚举值。如果为非枚举值，则为空
     * @param integer $IsGlobal 1：全局参数，0：非全局参数
     * @param string $MatchType 匹配类型，multiVal
     * @param string $MatchValue 匹配目标值，当multiVal时，各个key用，分割
     * @param boolean $IsFunc true-为公式，false-非公式
     * @param string $Func 参数设置为公式时，Func返回设置的公式内容
     * @param ModifiableInfo $ModifiableInfo 参数是否可修改
     * @param string $FuncPattern 支持公式的参数的默认公式样式
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

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("SupportFunc",$param) and $param["SupportFunc"] !== null) {
            $this->SupportFunc = $param["SupportFunc"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }

        if (array_key_exists("IsFunc",$param) and $param["IsFunc"] !== null) {
            $this->IsFunc = $param["IsFunc"];
        }

        if (array_key_exists("Func",$param) and $param["Func"] !== null) {
            $this->Func = $param["Func"];
        }

        if (array_key_exists("ModifiableInfo",$param) and $param["ModifiableInfo"] !== null) {
            $this->ModifiableInfo = new ModifiableInfo();
            $this->ModifiableInfo->deserialize($param["ModifiableInfo"]);
        }

        if (array_key_exists("FuncPattern",$param) and $param["FuncPattern"] !== null) {
            $this->FuncPattern = $param["FuncPattern"];
        }
    }
}
