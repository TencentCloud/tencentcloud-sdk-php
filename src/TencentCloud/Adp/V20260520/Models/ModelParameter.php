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
 * @method string getDefaultValue() 获取<p>默认值</p>
 * @method void setDefaultValue(string $DefaultValue) 设置<p>默认值</p>
 * @method array getEnumValueList() 获取<p>可选值列表</p>
 * @method void setEnumValueList(array $EnumValueList) 设置<p>可选值列表</p>
 * @method float getMaxValue() 获取<p>最大值（仅数值类型有效）</p>
 * @method void setMaxValue(float $MaxValue) 设置<p>最大值（仅数值类型有效）</p>
 * @method float getMinValue() 获取<p>最小值（仅数值类型有效）</p>
 * @method void setMinValue(float $MinValue) 设置<p>最小值（仅数值类型有效）</p>
 * @method string getName() 获取<p>超参名称</p>
 * @method void setName(string $Name) 设置<p>超参名称</p>
 * @method integer getType() 获取<p>超参类型。1-浮点数, 2-整数, 3-字符串</p>
 * @method void setType(integer $Type) 设置<p>超参类型。1-浮点数, 2-整数, 3-字符串</p>
 */
class ModelParameter extends AbstractModel
{
    /**
     * @var string <p>默认值</p>
     */
    public $DefaultValue;

    /**
     * @var array <p>可选值列表</p>
     */
    public $EnumValueList;

    /**
     * @var float <p>最大值（仅数值类型有效）</p>
     */
    public $MaxValue;

    /**
     * @var float <p>最小值（仅数值类型有效）</p>
     */
    public $MinValue;

    /**
     * @var string <p>超参名称</p>
     */
    public $Name;

    /**
     * @var integer <p>超参类型。1-浮点数, 2-整数, 3-字符串</p>
     */
    public $Type;

    /**
     * @param string $DefaultValue <p>默认值</p>
     * @param array $EnumValueList <p>可选值列表</p>
     * @param float $MaxValue <p>最大值（仅数值类型有效）</p>
     * @param float $MinValue <p>最小值（仅数值类型有效）</p>
     * @param string $Name <p>超参名称</p>
     * @param integer $Type <p>超参类型。1-浮点数, 2-整数, 3-字符串</p>
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
