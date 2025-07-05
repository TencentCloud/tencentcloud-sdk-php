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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 型号模板的选项
 *
 * @method string getOptionName() 获取选项名称
 * @method void setOptionName(string $OptionName) 设置选项名称
 * @method string getStandard() 获取腾讯的标准
 * @method void setStandard(string $Standard) 设置腾讯的标准
 * @method string getStandardInfo() 获取腾讯标准的展示字段
 * @method void setStandardInfo(string $StandardInfo) 设置腾讯标准的展示字段
 * @method string getOptionKey() 获取选项的唯一标识
 * @method void setOptionKey(string $OptionKey) 设置选项的唯一标识
 * @method string getInputType() 获取输入的类型
 * @method void setInputType(string $InputType) 设置输入的类型
 * @method string getValueType() 获取输入值的类型
 * @method void setValueType(string $ValueType) 设置输入值的类型
 * @method string getCompareType() 获取是否符合腾讯标准的比较方式，-- 为不做比较
 * @method void setCompareType(string $CompareType) 设置是否符合腾讯标准的比较方式，-- 为不做比较
 * @method array getOptionValueSet() 获取下拉列表中填充的选项值
 * @method void setOptionValueSet(array $OptionValueSet) 设置下拉列表中填充的选项值
 * @method string getInputHint() 获取输入框中的占位的提示符
 * @method void setInputHint(string $InputHint) 设置输入框中的占位的提示符
 * @method string getInputInfo() 获取输入框下方的提示文案
 * @method void setInputInfo(string $InputInfo) 设置输入框下方的提示文案
 * @method string getOptionValue() 获取客户写入的值
 * @method void setOptionValue(string $OptionValue) 设置客户写入的值
 */
class TemplateOption extends AbstractModel
{
    /**
     * @var string 选项名称
     */
    public $OptionName;

    /**
     * @var string 腾讯的标准
     */
    public $Standard;

    /**
     * @var string 腾讯标准的展示字段
     */
    public $StandardInfo;

    /**
     * @var string 选项的唯一标识
     */
    public $OptionKey;

    /**
     * @var string 输入的类型
     */
    public $InputType;

    /**
     * @var string 输入值的类型
     */
    public $ValueType;

    /**
     * @var string 是否符合腾讯标准的比较方式，-- 为不做比较
     */
    public $CompareType;

    /**
     * @var array 下拉列表中填充的选项值
     */
    public $OptionValueSet;

    /**
     * @var string 输入框中的占位的提示符
     */
    public $InputHint;

    /**
     * @var string 输入框下方的提示文案
     */
    public $InputInfo;

    /**
     * @var string 客户写入的值
     */
    public $OptionValue;

    /**
     * @param string $OptionName 选项名称
     * @param string $Standard 腾讯的标准
     * @param string $StandardInfo 腾讯标准的展示字段
     * @param string $OptionKey 选项的唯一标识
     * @param string $InputType 输入的类型
     * @param string $ValueType 输入值的类型
     * @param string $CompareType 是否符合腾讯标准的比较方式，-- 为不做比较
     * @param array $OptionValueSet 下拉列表中填充的选项值
     * @param string $InputHint 输入框中的占位的提示符
     * @param string $InputInfo 输入框下方的提示文案
     * @param string $OptionValue 客户写入的值
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
        if (array_key_exists("OptionName",$param) and $param["OptionName"] !== null) {
            $this->OptionName = $param["OptionName"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("StandardInfo",$param) and $param["StandardInfo"] !== null) {
            $this->StandardInfo = $param["StandardInfo"];
        }

        if (array_key_exists("OptionKey",$param) and $param["OptionKey"] !== null) {
            $this->OptionKey = $param["OptionKey"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("OptionValueSet",$param) and $param["OptionValueSet"] !== null) {
            $this->OptionValueSet = [];
            foreach ($param["OptionValueSet"] as $key => $value){
                $obj = new OptionValueItem();
                $obj->deserialize($value);
                array_push($this->OptionValueSet, $obj);
            }
        }

        if (array_key_exists("InputHint",$param) and $param["InputHint"] !== null) {
            $this->InputHint = $param["InputHint"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = $param["InputInfo"];
        }

        if (array_key_exists("OptionValue",$param) and $param["OptionValue"] !== null) {
            $this->OptionValue = $param["OptionValue"];
        }
    }
}
