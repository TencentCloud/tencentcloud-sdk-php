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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用配置MCP插件header信息
 *
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method string getParamValue() 获取参数值
 * @method void setParamValue(string $ParamValue) 设置参数值
 * @method boolean getGlobalHidden() 获取header参数配置是否隐藏不可见
 * @method void setGlobalHidden(boolean $GlobalHidden) 设置header参数配置是否隐藏不可见
 * @method AgentInput getInput() 获取输入的值
 * @method void setInput(AgentInput $Input) 设置输入的值
 * @method boolean getIsRequired() 获取参数是否可以为空
 * @method void setIsRequired(boolean $IsRequired) 设置参数是否可以为空
 */
class AgentPluginHeader extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var string 参数值
     */
    public $ParamValue;

    /**
     * @var boolean header参数配置是否隐藏不可见
     */
    public $GlobalHidden;

    /**
     * @var AgentInput 输入的值
     */
    public $Input;

    /**
     * @var boolean 参数是否可以为空
     */
    public $IsRequired;

    /**
     * @param string $ParamName 参数名称
     * @param string $ParamValue 参数值
     * @param boolean $GlobalHidden header参数配置是否隐藏不可见
     * @param AgentInput $Input 输入的值
     * @param boolean $IsRequired 参数是否可以为空
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

        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }

        if (array_key_exists("GlobalHidden",$param) and $param["GlobalHidden"] !== null) {
            $this->GlobalHidden = $param["GlobalHidden"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }
    }
}
