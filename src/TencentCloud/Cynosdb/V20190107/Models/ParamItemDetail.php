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
 * 实例参数信息
 *
 * @method string getCurrentValue() 获取<p>当前值</p>
 * @method void setCurrentValue(string $CurrentValue) 设置<p>当前值</p>
 * @method string getDefault() 获取<p>默认值</p>
 * @method void setDefault(string $Default) 设置<p>默认值</p>
 * @method array getEnumValue() 获取<p>参数的可选枚举值。如果为非枚举值，则为空</p>
 * @method void setEnumValue(array $EnumValue) 设置<p>参数的可选枚举值。如果为非枚举值，则为空</p>
 * @method integer getIsGlobal() 获取<p>1：全局参数，0：非全局参数</p>
 * @method void setIsGlobal(integer $IsGlobal) 设置<p>1：全局参数，0：非全局参数</p>
 * @method string getMax() 获取<p>最大值</p>
 * @method void setMax(string $Max) 设置<p>最大值</p>
 * @method string getMin() 获取<p>最小值</p>
 * @method void setMin(string $Min) 设置<p>最小值</p>
 * @method integer getNeedReboot() 获取<p>修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。</p>
 * @method void setNeedReboot(integer $NeedReboot) 设置<p>修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。</p>
 * @method string getParamName() 获取<p>参数名称</p>
 * @method void setParamName(string $ParamName) 设置<p>参数名称</p>
 * @method string getParamType() 获取<p>参数类型：integer，enum，float，string，func</p>
 * @method void setParamType(string $ParamType) 设置<p>参数类型：integer，enum，float，string，func</p>
 * @method ModifiableInfo getModifiableInfo() 获取<p>参数是否可修改</p>
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) 设置<p>参数是否可修改</p>
 * @method string getDescription() 获取<p>参数描述</p>
 * @method void setDescription(string $Description) 设置<p>参数描述</p>
 * @method boolean getIsFunc() 获取<p>类型是否为公式</p>
 * @method void setIsFunc(boolean $IsFunc) 设置<p>类型是否为公式</p>
 * @method string getFunc() 获取<p>参数配置公式</p>
 * @method void setFunc(string $Func) 设置<p>参数配置公式</p>
 * @method string getFuncPattern() 获取<p>支持公式的参数的默认公式样式</p>
 * @method void setFuncPattern(string $FuncPattern) 设置<p>支持公式的参数的默认公式样式</p>
 */
class ParamItemDetail extends AbstractModel
{
    /**
     * @var string <p>当前值</p>
     */
    public $CurrentValue;

    /**
     * @var string <p>默认值</p>
     */
    public $Default;

    /**
     * @var array <p>参数的可选枚举值。如果为非枚举值，则为空</p>
     */
    public $EnumValue;

    /**
     * @var integer <p>1：全局参数，0：非全局参数</p>
     */
    public $IsGlobal;

    /**
     * @var string <p>最大值</p>
     */
    public $Max;

    /**
     * @var string <p>最小值</p>
     */
    public $Min;

    /**
     * @var integer <p>修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。</p>
     */
    public $NeedReboot;

    /**
     * @var string <p>参数名称</p>
     */
    public $ParamName;

    /**
     * @var string <p>参数类型：integer，enum，float，string，func</p>
     */
    public $ParamType;

    /**
     * @var ModifiableInfo <p>参数是否可修改</p>
     */
    public $ModifiableInfo;

    /**
     * @var string <p>参数描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>类型是否为公式</p>
     */
    public $IsFunc;

    /**
     * @var string <p>参数配置公式</p>
     */
    public $Func;

    /**
     * @var string <p>支持公式的参数的默认公式样式</p>
     */
    public $FuncPattern;

    /**
     * @param string $CurrentValue <p>当前值</p>
     * @param string $Default <p>默认值</p>
     * @param array $EnumValue <p>参数的可选枚举值。如果为非枚举值，则为空</p>
     * @param integer $IsGlobal <p>1：全局参数，0：非全局参数</p>
     * @param string $Max <p>最大值</p>
     * @param string $Min <p>最小值</p>
     * @param integer $NeedReboot <p>修改参数后，是否需要重启数据库以使参数生效。0-不需要重启，1-需要重启。</p>
     * @param string $ParamName <p>参数名称</p>
     * @param string $ParamType <p>参数类型：integer，enum，float，string，func</p>
     * @param ModifiableInfo $ModifiableInfo <p>参数是否可修改</p>
     * @param string $Description <p>参数描述</p>
     * @param boolean $IsFunc <p>类型是否为公式</p>
     * @param string $Func <p>参数配置公式</p>
     * @param string $FuncPattern <p>支持公式的参数的默认公式样式</p>
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

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("ModifiableInfo",$param) and $param["ModifiableInfo"] !== null) {
            $this->ModifiableInfo = new ModifiableInfo();
            $this->ModifiableInfo->deserialize($param["ModifiableInfo"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsFunc",$param) and $param["IsFunc"] !== null) {
            $this->IsFunc = $param["IsFunc"];
        }

        if (array_key_exists("Func",$param) and $param["Func"] !== null) {
            $this->Func = $param["Func"];
        }

        if (array_key_exists("FuncPattern",$param) and $param["FuncPattern"] !== null) {
            $this->FuncPattern = $param["FuncPattern"];
        }
    }
}
