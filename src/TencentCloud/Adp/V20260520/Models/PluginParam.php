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
 * MCP插件参数信息
 *
 * @method boolean getIsGlobalHidden() 获取参数配置是否隐藏不可见
 * @method void setIsGlobalHidden(boolean $IsGlobalHidden) 设置参数配置是否隐藏不可见
 * @method boolean getIsRequired() 获取参数是否必填
 * @method void setIsRequired(boolean $IsRequired) 设置参数是否必填
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method string getValue() 获取参数值
 * @method void setValue(string $Value) 设置参数值
 */
class PluginParam extends AbstractModel
{
    /**
     * @var boolean 参数配置是否隐藏不可见
     */
    public $IsGlobalHidden;

    /**
     * @var boolean 参数是否必填
     */
    public $IsRequired;

    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var string 参数值
     */
    public $Value;

    /**
     * @param boolean $IsGlobalHidden 参数配置是否隐藏不可见
     * @param boolean $IsRequired 参数是否必填
     * @param string $Name 参数名称
     * @param string $Value 参数值
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
        if (array_key_exists("IsGlobalHidden",$param) and $param["IsGlobalHidden"] !== null) {
            $this->IsGlobalHidden = $param["IsGlobalHidden"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
