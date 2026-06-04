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
 * Agent输入值，支持直接赋值和引用
 *
 * @method integer getInputType() 获取<p>输入来源类型：0 用户输入，3 自定义变量（API参数）</p>
 * @method void setInputType(integer $InputType) 设置<p>输入来源类型：0 用户输入，3 自定义变量（API参数）</p>
 * @method AgentUserInputValue getUserInputValue() 获取<p>用户手写输入</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserInputValue(AgentUserInputValue $UserInputValue) 设置<p>用户手写输入</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentSystemVariable getSystemVariable() 获取<p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemVariable(AgentSystemVariable $SystemVariable) 设置<p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomVariableId() 获取<p>自定义变量（API参数）</p>
 * @method void setCustomVariableId(string $CustomVariableId) 设置<p>自定义变量（API参数）</p>
 * @method string getEnvVariableId() 获取<p>环境变量参数</p>
 * @method void setEnvVariableId(string $EnvVariableId) 设置<p>环境变量参数</p>
 * @method string getAppVariableId() 获取<p>应用变量参数</p>
 * @method void setAppVariableId(string $AppVariableId) 设置<p>应用变量参数</p>
 */
class AgentInput extends AbstractModel
{
    /**
     * @var integer <p>输入来源类型：0 用户输入，3 自定义变量（API参数）</p>
     */
    public $InputType;

    /**
     * @var AgentUserInputValue <p>用户手写输入</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserInputValue;

    /**
     * @var AgentSystemVariable <p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemVariable;

    /**
     * @var string <p>自定义变量（API参数）</p>
     */
    public $CustomVariableId;

    /**
     * @var string <p>环境变量参数</p>
     */
    public $EnvVariableId;

    /**
     * @var string <p>应用变量参数</p>
     */
    public $AppVariableId;

    /**
     * @param integer $InputType <p>输入来源类型：0 用户输入，3 自定义变量（API参数）</p>
     * @param AgentUserInputValue $UserInputValue <p>用户手写输入</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentSystemVariable $SystemVariable <p>系统参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomVariableId <p>自定义变量（API参数）</p>
     * @param string $EnvVariableId <p>环境变量参数</p>
     * @param string $AppVariableId <p>应用变量参数</p>
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
            $this->UserInputValue = new AgentUserInputValue();
            $this->UserInputValue->deserialize($param["UserInputValue"]);
        }

        if (array_key_exists("SystemVariable",$param) and $param["SystemVariable"] !== null) {
            $this->SystemVariable = new AgentSystemVariable();
            $this->SystemVariable->deserialize($param["SystemVariable"]);
        }

        if (array_key_exists("CustomVariableId",$param) and $param["CustomVariableId"] !== null) {
            $this->CustomVariableId = $param["CustomVariableId"];
        }

        if (array_key_exists("EnvVariableId",$param) and $param["EnvVariableId"] !== null) {
            $this->EnvVariableId = $param["EnvVariableId"];
        }

        if (array_key_exists("AppVariableId",$param) and $param["AppVariableId"] !== null) {
            $this->AppVariableId = $param["AppVariableId"];
        }
    }
}
