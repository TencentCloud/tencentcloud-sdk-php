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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型超参
 *
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method array getEnumValueList() 获取可选值列表
 * @method void setEnumValueList(array $EnumValueList) 设置可选值列表
 * @method float getMaxValue() 获取最大值（仅数值类型有效）
 * @method void setMaxValue(float $MaxValue) 设置最大值（仅数值类型有效）
 * @method float getMinValue() 获取最小值（仅数值类型有效）
 * @method void setMinValue(float $MinValue) 设置最小值（仅数值类型有效）
 * @method string getName() 获取超参名称
 * @method void setName(string $Name) 设置超参名称
 * @method integer getType() 获取超参类型。1-浮点数, 2-整数, 3-字符串
 * @method void setType(integer $Type) 设置超参类型。1-浮点数, 2-整数, 3-字符串
 */
class ModelParameter extends AbstractModel
{
    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var array 可选值列表
     */
    public $EnumValueList;

    /**
     * @var float 最大值（仅数值类型有效）
     */
    public $MaxValue;

    /**
     * @var float 最小值（仅数值类型有效）
     */
    public $MinValue;

    /**
     * @var string 超参名称
     */
    public $Name;

    /**
     * @var integer 超参类型。1-浮点数, 2-整数, 3-字符串
     */
    public $Type;

    /**
     * @param string $DefaultValue 默认值
     * @param array $EnumValueList 可选值列表
     * @param float $MaxValue 最大值（仅数值类型有效）
     * @param float $MinValue 最小值（仅数值类型有效）
     * @param string $Name 超参名称
     * @param integer $Type 超参类型。1-浮点数, 2-整数, 3-字符串
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
        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("EnumValueList",$param) and $param["EnumValueList"] !== null) {
            $this->EnumValueList = $param["EnumValueList"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
