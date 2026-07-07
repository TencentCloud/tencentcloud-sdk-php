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
 * IntentRouter Tier 字典项
 *
 * @method string getTierId() 获取<p>Tier 标识</p><p>枚举值：</p><ul><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
 * @method void setTierId(string $TierId) 设置<p>Tier 标识</p><p>枚举值：</p><ul><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
 * @method string getDisplayName() 获取<p>Tier 显示名称（已国际化）</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>Tier 显示名称（已国际化）</p>
 * @method string getDescription() 获取<p>Tier 描述（已国际化）</p>
 * @method void setDescription(string $Description) 设置<p>Tier 描述（已国际化）</p>
 */
class IntentRouterTierDictItem extends AbstractModel
{
    /**
     * @var string <p>Tier 标识</p><p>枚举值：</p><ul><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
     */
    public $TierId;

    /**
     * @var string <p>Tier 显示名称（已国际化）</p>
     */
    public $DisplayName;

    /**
     * @var string <p>Tier 描述（已国际化）</p>
     */
    public $Description;

    /**
     * @param string $TierId <p>Tier 标识</p><p>枚举值：</p><ul><li>default： 默认</li><li>general_chat： 通用对话</li><li>transformation_rewrite： 转换与改写</li><li>knowledge_qa： 知识问答</li><li>summarization： 摘要</li><li>extraction_structuring： 抽取与结构化输出</li><li>content_generation： 内容生成</li><li>coding_technical： 编码与技术</li><li>data_math_analysis： 数据、数学与分析</li><li>reasoning_planning： 推理与规划</li><li>tool_agentic_workflow： 工具与智能体工作流</li></ul>
     * @param string $DisplayName <p>Tier 显示名称（已国际化）</p>
     * @param string $Description <p>Tier 描述（已国际化）</p>
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
        if (array_key_exists("TierId",$param) and $param["TierId"] !== null) {
            $this->TierId = $param["TierId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
