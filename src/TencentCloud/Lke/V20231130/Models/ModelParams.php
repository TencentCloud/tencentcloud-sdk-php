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
 * 模型参数
 *
 * @method string getDeepThinking() 获取<p>深度思考值<br>disabled<br>enabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeepThinking(string $DeepThinking) 设置<p>深度思考值<br>disabled<br>enabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFrequencyPenalty() 获取<p>频率惩罚</p>
 * @method void setFrequencyPenalty(float $FrequencyPenalty) 设置<p>频率惩罚</p>
 * @method integer getMaxTokens() 获取<p>最大输出长度</p>
 * @method void setMaxTokens(integer $MaxTokens) 设置<p>最大输出长度</p>
 * @method float getPresencePenalty() 获取<p>存在惩罚</p>
 * @method void setPresencePenalty(float $PresencePenalty) 设置<p>存在惩罚</p>
 * @method string getReasoningEffort() 获取<p>效果 disabled low medium high</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningEffort(string $ReasoningEffort) 设置<p>效果 disabled low medium high</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRepetitionPenalty() 获取<p>重复惩罚</p>
 * @method void setRepetitionPenalty(float $RepetitionPenalty) 设置<p>重复惩罚</p>
 * @method string getReplyFormat() 获取<p>输出格式</p>
 * @method void setReplyFormat(string $ReplyFormat) 设置<p>输出格式</p>
 * @method integer getSeed() 获取<p>随机种子</p>
 * @method void setSeed(integer $Seed) 设置<p>随机种子</p>
 * @method array getStopSequences() 获取<p>停止序列</p>
 * @method void setStopSequences(array $StopSequences) 设置<p>停止序列</p>
 * @method float getTemperature() 获取<p>温度</p>
 * @method void setTemperature(float $Temperature) 设置<p>温度</p>
 * @method float getTopP() 获取<p>Top_P</p>
 * @method void setTopP(float $TopP) 设置<p>Top_P</p>
 */
class ModelParams extends AbstractModel
{
    /**
     * @var string <p>深度思考值<br>disabled<br>enabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeepThinking;

    /**
     * @var float <p>频率惩罚</p>
     */
    public $FrequencyPenalty;

    /**
     * @var integer <p>最大输出长度</p>
     */
    public $MaxTokens;

    /**
     * @var float <p>存在惩罚</p>
     */
    public $PresencePenalty;

    /**
     * @var string <p>效果 disabled low medium high</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningEffort;

    /**
     * @var float <p>重复惩罚</p>
     */
    public $RepetitionPenalty;

    /**
     * @var string <p>输出格式</p>
     */
    public $ReplyFormat;

    /**
     * @var integer <p>随机种子</p>
     */
    public $Seed;

    /**
     * @var array <p>停止序列</p>
     */
    public $StopSequences;

    /**
     * @var float <p>温度</p>
     */
    public $Temperature;

    /**
     * @var float <p>Top_P</p>
     */
    public $TopP;

    /**
     * @param string $DeepThinking <p>深度思考值<br>disabled<br>enabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FrequencyPenalty <p>频率惩罚</p>
     * @param integer $MaxTokens <p>最大输出长度</p>
     * @param float $PresencePenalty <p>存在惩罚</p>
     * @param string $ReasoningEffort <p>效果 disabled low medium high</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RepetitionPenalty <p>重复惩罚</p>
     * @param string $ReplyFormat <p>输出格式</p>
     * @param integer $Seed <p>随机种子</p>
     * @param array $StopSequences <p>停止序列</p>
     * @param float $Temperature <p>温度</p>
     * @param float $TopP <p>Top_P</p>
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
        if (array_key_exists("DeepThinking",$param) and $param["DeepThinking"] !== null) {
            $this->DeepThinking = $param["DeepThinking"];
        }

        if (array_key_exists("FrequencyPenalty",$param) and $param["FrequencyPenalty"] !== null) {
            $this->FrequencyPenalty = $param["FrequencyPenalty"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("PresencePenalty",$param) and $param["PresencePenalty"] !== null) {
            $this->PresencePenalty = $param["PresencePenalty"];
        }

        if (array_key_exists("ReasoningEffort",$param) and $param["ReasoningEffort"] !== null) {
            $this->ReasoningEffort = $param["ReasoningEffort"];
        }

        if (array_key_exists("RepetitionPenalty",$param) and $param["RepetitionPenalty"] !== null) {
            $this->RepetitionPenalty = $param["RepetitionPenalty"];
        }

        if (array_key_exists("ReplyFormat",$param) and $param["ReplyFormat"] !== null) {
            $this->ReplyFormat = $param["ReplyFormat"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("StopSequences",$param) and $param["StopSequences"] !== null) {
            $this->StopSequences = $param["StopSequences"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }
    }
}
