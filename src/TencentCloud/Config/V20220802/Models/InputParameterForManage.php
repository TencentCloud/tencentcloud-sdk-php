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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则入参
 *
 * @method string getValueType() 获取值类型。数值：Integer， 字符串：String
 * @method void setValueType(string $ValueType) 设置值类型。数值：Integer， 字符串：String
 * @method string getParameterKey() 获取参数Key
 * @method void setParameterKey(string $ParameterKey) 设置参数Key
 * @method string getType() 获取参数类型。必填类型：Require，可选类型：Optional。
 * @method void setType(string $Type) 设置参数类型。必填类型：Require，可选类型：Optional。
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class InputParameterForManage extends AbstractModel
{
    /**
     * @var string 值类型。数值：Integer， 字符串：String
     */
    public $ValueType;

    /**
     * @var string 参数Key
     */
    public $ParameterKey;

    /**
     * @var string 参数类型。必填类型：Require，可选类型：Optional。
     */
    public $Type;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $ValueType 值类型。数值：Integer， 字符串：String
     * @param string $ParameterKey 参数Key
     * @param string $Type 参数类型。必填类型：Require，可选类型：Optional。
     * @param string $DefaultValue 默认值
     * @param string $Description 描述
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
        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("ParameterKey",$param) and $param["ParameterKey"] !== null) {
            $this->ParameterKey = $param["ParameterKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
