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
 * @method string getAppType() 获取<p>应用类型；<code>&quot;knowledge_qa&quot;</code> 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）</p>
 * @method void setAppType(string $AppType) 设置<p>应用类型；<code>&quot;knowledge_qa&quot;</code> 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）</p>
 * @method BaseConfig getBaseConfig() 获取<p>应用基础配置</p>
 * @method void setBaseConfig(BaseConfig $BaseConfig) 设置<p>应用基础配置</p>
 * @method string getPattern() 获取<p>应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式,ClawAgent:Claw模式</p>
 * @method void setPattern(string $Pattern) 设置<p>应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式,ClawAgent:Claw模式</p>
 * @method string getAgentType() 获取<p>智能体类型，用于区分应用最终以何种智能体形态对外服务（对话(&quot;dialogue&quot;) / 公众号(&quot;wechat&quot;)）。当前 ADP 创建页面不区分对话/公众号智能体，ADP 创建页默认走对话智能体。</p>
 * @method void setAgentType(string $AgentType) 设置<p>智能体类型，用于区分应用最终以何种智能体形态对外服务（对话(&quot;dialogue&quot;) / 公众号(&quot;wechat&quot;)）。当前 ADP 创建页面不区分对话/公众号智能体，ADP 创建页默认走对话智能体。</p>
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string <p>应用类型；<code>&quot;knowledge_qa&quot;</code> 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）</p>
     */
    public $AppType;

    /**
     * @var BaseConfig <p>应用基础配置</p>
     */
    public $BaseConfig;

    /**
     * @var string <p>应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式,ClawAgent:Claw模式</p>
     */
    public $Pattern;

    /**
     * @var string <p>智能体类型，用于区分应用最终以何种智能体形态对外服务（对话(&quot;dialogue&quot;) / 公众号(&quot;wechat&quot;)）。当前 ADP 创建页面不区分对话/公众号智能体，ADP 创建页默认走对话智能体。</p>
     */
    public $AgentType;

    /**
     * @param string $AppType <p>应用类型；<code>&quot;knowledge_qa&quot;</code> 知识问答应用（包含标准模式 单工作流 Multi-Agent 等模式）</p>
     * @param BaseConfig $BaseConfig <p>应用基础配置</p>
     * @param string $Pattern <p>应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式,ClawAgent:Claw模式</p>
     * @param string $AgentType <p>智能体类型，用于区分应用最终以何种智能体形态对外服务（对话(&quot;dialogue&quot;) / 公众号(&quot;wechat&quot;)）。当前 ADP 创建页面不区分对话/公众号智能体，ADP 创建页默认走对话智能体。</p>
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
