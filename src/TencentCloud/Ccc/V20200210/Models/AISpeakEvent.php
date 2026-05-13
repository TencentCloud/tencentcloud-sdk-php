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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体发言事件
 *
 * @method boolean getCanBeInterrupted() 获取<p>本次话术是否允许被用户VAD打断</p>
 * @method void setCanBeInterrupted(boolean $CanBeInterrupted) 设置<p>本次话术是否允许被用户VAD打断</p>
 * @method string getSpokenText() 获取<p>智能体播报的话术文本内容</p>
 * @method void setSpokenText(string $SpokenText) 设置<p>智能体播报的话术文本内容</p>
 * @method string getSpokenType() 获取<p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>智能追问： SmartFollowUp</li><li>FAQ： FAQ</li><li>转人工 - 排队等待音： TransferWaitingPrompt</li><li>无响应挂断前放音： PlayNoResponseEndPrompt</li><li>转人工 - 排队前放音： PlayQueuePrompt</li><li>转人工 - 接待前放音： PlayPromptBeforeReception</li><li>转人工 - 排队超时放音： PlayQueueTimeoutPrompt</li><li>转人工 - 转人工失败放音： PlayTransferFailPrompt</li><li>DTMF收号（按键用户输入）： Dtmf</li><li>按键节点 - 播放提示音： PlayDtmfPrompt</li><li>按键节点 - 输入错误提示音： PlayInvalidDtmfPrompt</li><li>按键节点 - 超时提示音： PlayDtmfTimeoutPrompt</li><li>其他类型： Other</li></ul>
 * @method void setSpokenType(string $SpokenType) 设置<p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>智能追问： SmartFollowUp</li><li>FAQ： FAQ</li><li>转人工 - 排队等待音： TransferWaitingPrompt</li><li>无响应挂断前放音： PlayNoResponseEndPrompt</li><li>转人工 - 排队前放音： PlayQueuePrompt</li><li>转人工 - 接待前放音： PlayPromptBeforeReception</li><li>转人工 - 排队超时放音： PlayQueueTimeoutPrompt</li><li>转人工 - 转人工失败放音： PlayTransferFailPrompt</li><li>DTMF收号（按键用户输入）： Dtmf</li><li>按键节点 - 播放提示音： PlayDtmfPrompt</li><li>按键节点 - 输入错误提示音： PlayInvalidDtmfPrompt</li><li>按键节点 - 超时提示音： PlayDtmfTimeoutPrompt</li><li>其他类型： Other</li></ul>
 * @method AICallLatencyMetrics getLatencyMetrics() 获取<p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatencyMetrics(AICallLatencyMetrics $LatencyMetrics) 设置<p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AISpeakEvent extends AbstractModel
{
    /**
     * @var boolean <p>本次话术是否允许被用户VAD打断</p>
     */
    public $CanBeInterrupted;

    /**
     * @var string <p>智能体播报的话术文本内容</p>
     */
    public $SpokenText;

    /**
     * @var string <p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>智能追问： SmartFollowUp</li><li>FAQ： FAQ</li><li>转人工 - 排队等待音： TransferWaitingPrompt</li><li>无响应挂断前放音： PlayNoResponseEndPrompt</li><li>转人工 - 排队前放音： PlayQueuePrompt</li><li>转人工 - 接待前放音： PlayPromptBeforeReception</li><li>转人工 - 排队超时放音： PlayQueueTimeoutPrompt</li><li>转人工 - 转人工失败放音： PlayTransferFailPrompt</li><li>DTMF收号（按键用户输入）： Dtmf</li><li>按键节点 - 播放提示音： PlayDtmfPrompt</li><li>按键节点 - 输入错误提示音： PlayInvalidDtmfPrompt</li><li>按键节点 - 超时提示音： PlayDtmfTimeoutPrompt</li><li>其他类型： Other</li></ul>
     */
    public $SpokenType;

    /**
     * @var AICallLatencyMetrics <p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatencyMetrics;

    /**
     * @param boolean $CanBeInterrupted <p>本次话术是否允许被用户VAD打断</p>
     * @param string $SpokenText <p>智能体播报的话术文本内容</p>
     * @param string $SpokenType <p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>智能追问： SmartFollowUp</li><li>FAQ： FAQ</li><li>转人工 - 排队等待音： TransferWaitingPrompt</li><li>无响应挂断前放音： PlayNoResponseEndPrompt</li><li>转人工 - 排队前放音： PlayQueuePrompt</li><li>转人工 - 接待前放音： PlayPromptBeforeReception</li><li>转人工 - 排队超时放音： PlayQueueTimeoutPrompt</li><li>转人工 - 转人工失败放音： PlayTransferFailPrompt</li><li>DTMF收号（按键用户输入）： Dtmf</li><li>按键节点 - 播放提示音： PlayDtmfPrompt</li><li>按键节点 - 输入错误提示音： PlayInvalidDtmfPrompt</li><li>按键节点 - 超时提示音： PlayDtmfTimeoutPrompt</li><li>其他类型： Other</li></ul>
     * @param AICallLatencyMetrics $LatencyMetrics <p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CanBeInterrupted",$param) and $param["CanBeInterrupted"] !== null) {
            $this->CanBeInterrupted = $param["CanBeInterrupted"];
        }

        if (array_key_exists("SpokenText",$param) and $param["SpokenText"] !== null) {
            $this->SpokenText = $param["SpokenText"];
        }

        if (array_key_exists("SpokenType",$param) and $param["SpokenType"] !== null) {
            $this->SpokenType = $param["SpokenType"];
        }

        if (array_key_exists("LatencyMetrics",$param) and $param["LatencyMetrics"] !== null) {
            $this->LatencyMetrics = new AICallLatencyMetrics();
            $this->LatencyMetrics->deserialize($param["LatencyMetrics"]);
        }
    }
}
