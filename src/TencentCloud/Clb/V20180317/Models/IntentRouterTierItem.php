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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意图路由分层配置对象，包含分层名称和该分层下的模型列表。
 *
 * @method array getModels() 获取<p>该分层下的模型显示名称列表。</p>
 * @method void setModels(array $Models) 设置<p>该分层下的模型显示名称列表。</p>
 * @method string getTierName() 获取<p>Tier 标识。<br>枚举值：</p><ul><li>复杂度分层（4 个固定值，需全部包含）：SIMPLE、MEDIUM、COMPLEX、REASONING</li><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
 * @method void setTierName(string $TierName) 设置<p>Tier 标识。<br>枚举值：</p><ul><li>复杂度分层（4 个固定值，需全部包含）：SIMPLE、MEDIUM、COMPLEX、REASONING</li><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
 */
class IntentRouterTierItem extends AbstractModel
{
    /**
     * @var array <p>该分层下的模型显示名称列表。</p>
     */
    public $Models;

    /**
     * @var string <p>Tier 标识。<br>枚举值：</p><ul><li>复杂度分层（4 个固定值，需全部包含）：SIMPLE、MEDIUM、COMPLEX、REASONING</li><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
     */
    public $TierName;

    /**
     * @param array $Models <p>该分层下的模型显示名称列表。</p>
     * @param string $TierName <p>Tier 标识。<br>枚举值：</p><ul><li>复杂度分层（4 个固定值，需全部包含）：SIMPLE、MEDIUM、COMPLEX、REASONING</li><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
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
        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = $param["Models"];
        }

        if (array_key_exists("TierName",$param) and $param["TierName"] !== null) {
            $this->TierName = $param["TierName"];
        }
    }
}
