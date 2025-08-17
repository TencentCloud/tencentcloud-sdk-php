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
 * CreateApp请求参数结构体
 *
 * @method string getAppType() 获取应用类型；knowledge_qa-知识问答管理
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa-知识问答管理
 * @method BaseConfig getBaseConfig() 获取应用基础配置
 * @method void setBaseConfig(BaseConfig $BaseConfig) 设置应用基础配置
 * @method string getPattern() 获取应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
 * @method void setPattern(string $Pattern) 设置应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
 * @method string getAgentType() 获取智能体类型 dialogue 对话式智能体，wechat 公众号智能体
 * @method void setAgentType(string $AgentType) 设置智能体类型 dialogue 对话式智能体，wechat 公众号智能体
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string 应用类型；knowledge_qa-知识问答管理
     */
    public $AppType;

    /**
     * @var BaseConfig 应用基础配置
     */
    public $BaseConfig;

    /**
     * @var string 应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
     */
    public $Pattern;

    /**
     * @var string 智能体类型 dialogue 对话式智能体，wechat 公众号智能体
     */
    public $AgentType;

    /**
     * @param string $AppType 应用类型；knowledge_qa-知识问答管理
     * @param BaseConfig $BaseConfig 应用基础配置
     * @param string $Pattern 应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
     * @param string $AgentType 智能体类型 dialogue 对话式智能体，wechat 公众号智能体
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("BaseConfig",$param) and $param["BaseConfig"] !== null) {
            $this->BaseConfig = new BaseConfig();
            $this->BaseConfig->deserialize($param["BaseConfig"]);
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }
    }
}
