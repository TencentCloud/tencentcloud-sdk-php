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
 * @method float getTemperature() 获取温度
 * @method void setTemperature(float $Temperature) 设置温度
 * @method float getTopP() 获取Top_P
 * @method void setTopP(float $TopP) 设置Top_P
 * @method integer getSeed() 获取随机种子
 * @method void setSeed(integer $Seed) 设置随机种子
 * @method float getPresencePenalty() 获取存在惩罚
 * @method void setPresencePenalty(float $PresencePenalty) 设置存在惩罚
 * @method float getFrequencyPenalty() 获取频率惩罚
 * @method void setFrequencyPenalty(float $FrequencyPenalty) 设置频率惩罚
 * @method float getRepetitionPenalty() 获取重复惩罚
 * @method void setRepetitionPenalty(float $RepetitionPenalty) 设置重复惩罚
 * @method integer getMaxTokens() 获取最大输出长度
 * @method void setMaxTokens(integer $MaxTokens) 设置最大输出长度
 * @method array getStopSequences() 获取停止序列
 * @method void setStopSequences(array $StopSequences) 设置停止序列
 * @method string getReplyFormat() 获取输出格式
 * @method void setReplyFormat(string $ReplyFormat) 设置输出格式
 * @method string getDeepThinking() 获取深度思考值
disabled
enabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeepThinking(string $DeepThinking) 设置深度思考值
disabled
enabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEffort() 获取效果 disabled low medium high
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReasoningEffort(string $ReasoningEffort) 设置效果 disabled low medium high
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelParams extends AbstractModel
{
    /**
     * @var float 温度
     */
    public $Temperature;

    /**
     * @var float Top_P
     */
    public $TopP;

    /**
     * @var integer 随机种子
     */
    public $Seed;

    /**
     * @var float 存在惩罚
     */
    public $PresencePenalty;

    /**
     * @var float 频率惩罚
     */
    public $FrequencyPenalty;

    /**
     * @var float 重复惩罚
     */
    public $RepetitionPenalty;

    /**
     * @var integer 最大输出长度
     */
    public $MaxTokens;

    /**
     * @var array 停止序列
     */
    public $StopSequences;

    /**
     * @var string 输出格式
     */
    public $ReplyFormat;

    /**
     * @var string 深度思考值
disabled
enabled
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeepThinking;

    /**
     * @var string 效果 disabled low medium high
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReasoningEffort;

    /**
     * @param float $Temperature 温度
     * @param float $TopP Top_P
     * @param integer $Seed 随机种子
     * @param float $PresencePenalty 存在惩罚
     * @param float $FrequencyPenalty 频率惩罚
     * @param float $RepetitionPenalty 重复惩罚
     * @param integer $MaxTokens 最大输出长度
     * @param array $StopSequences 停止序列
     * @param string $ReplyFormat 输出格式
     * @param string $DeepThinking 深度思考值
disabled
enabled
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEffort 效果 disabled low medium high
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
        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("PresencePenalty",$param) and $param["PresencePenalty"] !== null) {
            $this->PresencePenalty = $param["PresencePenalty"];
        }

        if (array_key_exists("FrequencyPenalty",$param) and $param["FrequencyPenalty"] !== null) {
            $this->FrequencyPenalty = $param["FrequencyPenalty"];
        }

        if (array_key_exists("RepetitionPenalty",$param) and $param["RepetitionPenalty"] !== null) {
            $this->RepetitionPenalty = $param["RepetitionPenalty"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("StopSequences",$param) and $param["StopSequences"] !== null) {
            $this->StopSequences = $param["StopSequences"];
        }

        if (array_key_exists("ReplyFormat",$param) and $param["ReplyFormat"] !== null) {
            $this->ReplyFormat = $param["ReplyFormat"];
        }

        if (array_key_exists("DeepThinking",$param) and $param["DeepThinking"] !== null) {
            $this->DeepThinking = $param["DeepThinking"];
        }

        if (array_key_exists("ReasoningEffort",$param) and $param["ReasoningEffort"] !== null) {
            $this->ReasoningEffort = $param["ReasoningEffort"];
        }
    }
}
