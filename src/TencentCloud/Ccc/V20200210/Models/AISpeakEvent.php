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
 * @method string getSpokenType() 获取<p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>SmartFollowUp： 智能追问</li><li>FAQ： FAQ</li><li>TransferWaitingPrompt： 转人工 - 排队等待音</li><li>PlayNoResponseEndPrompt： 无响应挂断前放音</li><li>PlayQueuePrompt： 转人工 - 排队前放音</li><li>PlayPromptBeforeReception： 转人工 - 接待前放音</li><li>PlayQueueTimeoutPrompt： 转人工 - 排队超时放音</li><li>PlayTransferFailPrompt： 转人工 - 转人工失败放音</li><li>Dtmf： DTMF收号（按键用户输入）</li><li>PlayDtmfPrompt： 按键节点 - 播放提示音</li><li>PlayInvalidDtmfPrompt： 按键节点 - 输入错误提示音</li><li>PlayDtmfTimeoutPrompt： 按键节点 - 超时提示音</li><li>TransferAgentPrompt： 转接智能体 - 转接至目标智能体提示音</li><li>Other： 其他类型</li></ul>
 * @method void setSpokenType(string $SpokenType) 设置<p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>SmartFollowUp： 智能追问</li><li>FAQ： FAQ</li><li>TransferWaitingPrompt： 转人工 - 排队等待音</li><li>PlayNoResponseEndPrompt： 无响应挂断前放音</li><li>PlayQueuePrompt： 转人工 - 排队前放音</li><li>PlayPromptBeforeReception： 转人工 - 接待前放音</li><li>PlayQueueTimeoutPrompt： 转人工 - 排队超时放音</li><li>PlayTransferFailPrompt： 转人工 - 转人工失败放音</li><li>Dtmf： DTMF收号（按键用户输入）</li><li>PlayDtmfPrompt： 按键节点 - 播放提示音</li><li>PlayInvalidDtmfPrompt： 按键节点 - 输入错误提示音</li><li>PlayDtmfTimeoutPrompt： 按键节点 - 超时提示音</li><li>TransferAgentPrompt： 转接智能体 - 转接至目标智能体提示音</li><li>Other： 其他类型</li></ul>
 * @method AICallLatencyMetrics getLatencyMetrics() 获取<p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatencyMetrics(AICallLatencyMetrics $LatencyMetrics) 设置<p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeName() 获取<p>用户回复命中的知识库问题标题，仅 SpokenType 为 KnowledgeBase 或 FAQ 等命中知识库的场景有值。</p>
 * @method void setKnowledgeName(string $KnowledgeName) 设置<p>用户回复命中的知识库问题标题，仅 SpokenType 为 KnowledgeBase 或 FAQ 等命中知识库的场景有值。</p>
 * @method string getTraverseReason() 获取<p>节点跳转的原因，仅画布为灵活模式时有值</p>
 * @method void setTraverseReason(string $TraverseReason) 设置<p>节点跳转的原因，仅画布为灵活模式时有值</p>
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
     * @var string <p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>SmartFollowUp： 智能追问</li><li>FAQ： FAQ</li><li>TransferWaitingPrompt： 转人工 - 排队等待音</li><li>PlayNoResponseEndPrompt： 无响应挂断前放音</li><li>PlayQueuePrompt： 转人工 - 排队前放音</li><li>PlayPromptBeforeReception： 转人工 - 接待前放音</li><li>PlayQueueTimeoutPrompt： 转人工 - 排队超时放音</li><li>PlayTransferFailPrompt： 转人工 - 转人工失败放音</li><li>Dtmf： DTMF收号（按键用户输入）</li><li>PlayDtmfPrompt： 按键节点 - 播放提示音</li><li>PlayInvalidDtmfPrompt： 按键节点 - 输入错误提示音</li><li>PlayDtmfTimeoutPrompt： 按键节点 - 超时提示音</li><li>TransferAgentPrompt： 转接智能体 - 转接至目标智能体提示音</li><li>Other： 其他类型</li></ul>
     */
    public $SpokenType;

    /**
     * @var AICallLatencyMetrics <p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatencyMetrics;

    /**
     * @var string <p>用户回复命中的知识库问题标题，仅 SpokenType 为 KnowledgeBase 或 FAQ 等命中知识库的场景有值。</p>
     */
    public $KnowledgeName;

    /**
     * @var string <p>节点跳转的原因，仅画布为灵活模式时有值</p>
     */
    public $TraverseReason;

    /**
     * @param boolean $CanBeInterrupted <p>本次话术是否允许被用户VAD打断</p>
     * @param string $SpokenText <p>智能体播报的话术文本内容</p>
     * @param string $SpokenType <p>智能体发言类型</p><p>枚举值：</p><ul><li>Script： 智能体话术</li><li>KnowledgeBase： 知识库</li><li>LLMFallback： 大模型兜底</li><li>NoResponseTip： 无响应提示</li><li>SmartFollowUp： 智能追问</li><li>FAQ： FAQ</li><li>TransferWaitingPrompt： 转人工 - 排队等待音</li><li>PlayNoResponseEndPrompt： 无响应挂断前放音</li><li>PlayQueuePrompt： 转人工 - 排队前放音</li><li>PlayPromptBeforeReception： 转人工 - 接待前放音</li><li>PlayQueueTimeoutPrompt： 转人工 - 排队超时放音</li><li>PlayTransferFailPrompt： 转人工 - 转人工失败放音</li><li>Dtmf： DTMF收号（按键用户输入）</li><li>PlayDtmfPrompt： 按键节点 - 播放提示音</li><li>PlayInvalidDtmfPrompt： 按键节点 - 输入错误提示音</li><li>PlayDtmfTimeoutPrompt： 按键节点 - 超时提示音</li><li>TransferAgentPrompt： 转接智能体 - 转接至目标智能体提示音</li><li>Other： 其他类型</li></ul>
     * @param AICallLatencyMetrics $LatencyMetrics <p>本次响应生成的时延结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeName <p>用户回复命中的知识库问题标题，仅 SpokenType 为 KnowledgeBase 或 FAQ 等命中知识库的场景有值。</p>
     * @param string $TraverseReason <p>节点跳转的原因，仅画布为灵活模式时有值</p>
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

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("TraverseReason",$param) and $param["TraverseReason"] !== null) {
            $this->TraverseReason = $param["TraverseReason"];
        }
    }
}
