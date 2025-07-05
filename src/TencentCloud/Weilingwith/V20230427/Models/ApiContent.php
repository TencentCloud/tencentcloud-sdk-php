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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API参数信息
 *
 * @method string getId() 获取所属API的id
 * @method void setId(string $Id) 设置所属API的id
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method string getType() 获取参数类型
 * @method void setType(string $Type) 设置参数类型
 * @method boolean getDynamic() 获取是否为动态值
 * @method void setDynamic(boolean $Dynamic) 设置是否为动态值
 * @method boolean getRequired() 获取是否必填
 * @method void setRequired(boolean $Required) 设置是否必填
 * @method string getValue() 获取参数值
 * @method void setValue(string $Value) 设置参数值
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 */
class ApiContent extends AbstractModel
{
    /**
     * @var string 所属API的id
     */
    public $Id;

    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var string 参数类型
     */
    public $Type;

    /**
     * @var boolean 是否为动态值
     */
    public $Dynamic;

    /**
     * @var boolean 是否必填
     */
    public $Required;

    /**
     * @var string 参数值
     */
    public $Value;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @param string $Id 所属API的id
     * @param string $Name 参数名称
     * @param string $Type 参数类型
     * @param boolean $Dynamic 是否为动态值
     * @param boolean $Required 是否必填
     * @param string $Value 参数值
     * @param string $DefaultValue 默认值
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Dynamic",$param) and $param["Dynamic"] !== null) {
            $this->Dynamic = $param["Dynamic"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }
    }
}
