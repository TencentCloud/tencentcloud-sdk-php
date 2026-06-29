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
 * @method string getDeepThinking() 获取是否开启深度思考
 * @method void setDeepThinking(string $DeepThinking) 设置是否开启深度思考
 * @method float getFrequencyPenalty() 获取频率惩罚
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyPenalty(float $FrequencyPenalty) 设置频率惩罚
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxTokens() 获取最大输出长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTokens(integer $MaxTokens) 设置最大输出长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPresencePenalty() 获取存在惩罚
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresencePenalty(float $PresencePenalty) 设置存在惩罚
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningEffort() 获取深度思考效果
 * @method void setReasoningEffort(string $ReasoningEffort) 设置深度思考效果
 * @method float getRepetitionPenalty() 获取重复惩罚
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepetitionPenalty(float $RepetitionPenalty) 设置重复惩罚
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplyFormat() 获取输出格式（text、json_object）
 * @method void setReplyFormat(string $ReplyFormat) 设置输出格式（text、json_object）
 * @method integer getSeed() 获取seed 随机种子
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeed(integer $Seed) 设置seed 随机种子
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStopSequenceList() 获取停止序列
 * @method void setStopSequenceList(array $StopSequenceList) 设置停止序列
 * @method float getTemperature() 获取温度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemperature(float $Temperature) 设置温度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopP() 获取top_p
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopP(float $TopP) 设置top_p
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelParams extends AbstractModel
{
    /**
     * @var string 是否开启深度思考
     */
    public $DeepThinking;

    /**
     * @var float 频率惩罚
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyPenalty;

    /**
     * @var integer 最大输出长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTokens;

    /**
     * @var float 存在惩罚
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresencePenalty;

    /**
     * @var string 深度思考效果
     */
    public $ReasoningEffort;

    /**
     * @var float 重复惩罚
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepetitionPenalty;

    /**
     * @var string 输出格式（text、json_object）
     */
    public $ReplyFormat;

    /**
     * @var integer seed 随机种子
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seed;

    /**
     * @var array 停止序列
     */
    public $StopSequenceList;

    /**
     * @var float 温度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Temperature;

    /**
     * @var float top_p
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopP;

    /**
     * @param string $DeepThinking 是否开启深度思考
     * @param float $FrequencyPenalty 频率惩罚
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxTokens 最大输出长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PresencePenalty 存在惩罚
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningEffort 深度思考效果
     * @param float $RepetitionPenalty 重复惩罚
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplyFormat 输出格式（text、json_object）
     * @param integer $Seed seed 随机种子
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StopSequenceList 停止序列
     * @param float $Temperature 温度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopP top_p
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
    }
}
