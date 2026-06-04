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
 * Agent 插件参数配置
 *
 * @method string getName() 获取<p>参数名称</p>
 * @method void setName(string $Name) 设置<p>参数名称</p>
 * @method boolean getIsRequired() 获取<p>是否必填</p>
 * @method void setIsRequired(boolean $IsRequired) 设置<p>是否必填</p>
 * @method AgentInput getInput() 获取<p>输入的值</p>
 * @method void setInput(AgentInput $Input) 设置<p>输入的值</p>
 */
class AgentPluginParameter extends AbstractModel
{
    /**
     * @var string <p>参数名称</p>
     */
    public $Name;

    /**
     * @var boolean <p>是否必填</p>
     */
    public $IsRequired;

    /**
     * @var AgentInput <p>输入的值</p>
     */
    public $Input;

    /**
     * @param string $Name <p>参数名称</p>
     * @param boolean $IsRequired <p>是否必填</p>
     * @param AgentInput $Input <p>输入的值</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
