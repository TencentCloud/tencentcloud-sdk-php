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
 * Agent输入值，支持直接赋值和引用
 *
 * @method integer getInputType() 获取输入来源类型：0 用户输入，3 自定义变量（API参数）
 * @method void setInputType(integer $InputType) 设置输入来源类型：0 用户输入，3 自定义变量（API参数）
 * @method AgentInputUserInputValue getUserInputValue() 获取用户手写输入
 * @method void setUserInputValue(AgentInputUserInputValue $UserInputValue) 设置用户手写输入
 * @method string getCustomVarId() 获取自定义变量（API参数）
 * @method void setCustomVarId(string $CustomVarId) 设置自定义变量（API参数）
 * @method string getEnvVarId() 获取环境变量参数
 * @method void setEnvVarId(string $EnvVarId) 设置环境变量参数
 * @method string getAppVarId() 获取应用变量参数
 * @method void setAppVarId(string $AppVarId) 设置应用变量参数
 * @method AgentInputSystemVariable getSystemVariable() 获取系统参数
 * @method void setSystemVariable(AgentInputSystemVariable $SystemVariable) 设置系统参数
 * @method string getToolParam() 获取工具参数
 * @method void setToolParam(string $ToolParam) 设置工具参数
 */
class AgentInput extends AbstractModel
{
    /**
     * @var integer 输入来源类型：0 用户输入，3 自定义变量（API参数）
     */
    public $InputType;

    /**
     * @var AgentInputUserInputValue 用户手写输入
     */
    public $UserInputValue;

    /**
     * @var string 自定义变量（API参数）
     */
    public $CustomVarId;

    /**
     * @var string 环境变量参数
     */
    public $EnvVarId;

    /**
     * @var string 应用变量参数
     */
    public $AppVarId;

    /**
     * @var AgentInputSystemVariable 系统参数
     */
    public $SystemVariable;

    /**
     * @var string 工具参数
     */
    public $ToolParam;

    /**
     * @param integer $InputType 输入来源类型：0 用户输入，3 自定义变量（API参数）
     * @param AgentInputUserInputValue $UserInputValue 用户手写输入
     * @param string $CustomVarId 自定义变量（API参数）
     * @param string $EnvVarId 环境变量参数
     * @param string $AppVarId 应用变量参数
     * @param AgentInputSystemVariable $SystemVariable 系统参数
     * @param string $ToolParam 工具参数
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("UserInputValue",$param) and $param["UserInputValue"] !== null) {
            $this->UserInputValue = new AgentInputUserInputValue();
            $this->UserInputValue->deserialize($param["UserInputValue"]);
        }

        if (array_key_exists("CustomVarId",$param) and $param["CustomVarId"] !== null) {
            $this->CustomVarId = $param["CustomVarId"];
        }

        if (array_key_exists("EnvVarId",$param) and $param["EnvVarId"] !== null) {
            $this->EnvVarId = $param["EnvVarId"];
        }

        if (array_key_exists("AppVarId",$param) and $param["AppVarId"] !== null) {
            $this->AppVarId = $param["AppVarId"];
        }

        if (array_key_exists("SystemVariable",$param) and $param["SystemVariable"] !== null) {
            $this->SystemVariable = new AgentInputSystemVariable();
            $this->SystemVariable->deserialize($param["SystemVariable"]);
        }

        if (array_key_exists("ToolParam",$param) and $param["ToolParam"] !== null) {
            $this->ToolParam = $param["ToolParam"];
        }
    }
}
