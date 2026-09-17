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
 * 模型参数
 *
 * @method string getDeepThinking() 获取<p>是否开启深度思考</p>
 * @method void setDeepThinking(string $DeepThinking) 设置<p>是否开启深度思考</p>
 * @method float getFrequencyPenalty() 获取<p>频率惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyPenalty(float $FrequencyPenalty) 设置<p>频率惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxTokens() 获取<p>最大输出长度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTokens(integer $MaxTokens) 设置<p>最大输出长度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPresencePenalty() 获取<p>存在惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresencePenalty(float $PresencePenalty) 设置<p>存在惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEffort() 获取<p>深度思考效果</p>
 * @method void setReasoningEffort(string $ReasoningEffort) 设置<p>深度思考效果</p>
 * @method float getRepetitionPenalty() 获取<p>重复惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepetitionPenalty(float $RepetitionPenalty) 设置<p>重复惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplyFormat() 获取<p>输出格式（text、json_object）</p>
 * @method void setReplyFormat(string $ReplyFormat) 设置<p>输出格式（text、json_object）</p>
 * @method integer getSeed() 获取<p>seed 随机种子</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeed(integer $Seed) 设置<p>seed 随机种子</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStopSequenceList() 获取<p>停止序列</p>
 * @method void setStopSequenceList(array $StopSequenceList) 设置<p>停止序列</p>
 * @method float getTemperature() 获取<p>温度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemperature(float $Temperature) 设置<p>温度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopP() 获取<p>top_p</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopP(float $TopP) 设置<p>top_p</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopK() 获取<p>top_k</p>
 * @method void setTopK(integer $TopK) 设置<p>top_k</p>
 */
class ModelParams extends AbstractModel
{
    /**
     * @var string <p>是否开启深度思考</p>
     */
    public $DeepThinking;

    /**
     * @var float <p>频率惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyPenalty;

    /**
     * @var integer <p>最大输出长度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTokens;

    /**
     * @var float <p>存在惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresencePenalty;

    /**
     * @var string <p>深度思考效果</p>
     */
    public $ReasoningEffort;

    /**
     * @var float <p>重复惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepetitionPenalty;

    /**
     * @var string <p>输出格式（text、json_object）</p>
     */
    public $ReplyFormat;

    /**
     * @var integer <p>seed 随机种子</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seed;

    /**
     * @var array <p>停止序列</p>
     */
    public $StopSequenceList;

    /**
     * @var float <p>温度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Temperature;

    /**
     * @var float <p>top_p</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopP;

    /**
     * @var integer <p>top_k</p>
     */
    public $TopK;

    /**
     * @param string $DeepThinking <p>是否开启深度思考</p>
     * @param float $FrequencyPenalty <p>频率惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxTokens <p>最大输出长度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PresencePenalty <p>存在惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEffort <p>深度思考效果</p>
     * @param float $RepetitionPenalty <p>重复惩罚</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplyFormat <p>输出格式（text、json_object）</p>
     * @param integer $Seed <p>seed 随机种子</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StopSequenceList <p>停止序列</p>
     * @param float $Temperature <p>温度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopP <p>top_p</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopK <p>top_k</p>
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

        if (array_key_exists("StopSequenceList",$param) and $param["StopSequenceList"] !== null) {
            $this->StopSequenceList = $param["StopSequenceList"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("TopK",$param) and $param["TopK"] !== null) {
            $this->TopK = $param["TopK"];
        }
    }
}
