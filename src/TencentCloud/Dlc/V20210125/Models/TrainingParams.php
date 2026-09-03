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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 零代码后训练参数
 *
 * @method integer getPerDeviceBatchSize() 获取<p>每卡 batch size，SFT/DPO 用。GRPO 返回 null</p>
 * @method void setPerDeviceBatchSize(integer $PerDeviceBatchSize) 设置<p>每卡 batch size，SFT/DPO 用。GRPO 返回 null</p>
 * @method integer getGradientAccumulationSteps() 获取<p>梯度累积步数，用于放大有效 batch；GRPO 返回 null。</p>
 * @method void setGradientAccumulationSteps(integer $GradientAccumulationSteps) 设置<p>梯度累积步数，用于放大有效 batch；GRPO 返回 null。</p>
 * @method boolean getGradientCheckpointing() 获取<p>是否开启梯度检查点（省显存换计算），GRPO 返回 null。</p>
 * @method void setGradientCheckpointing(boolean $GradientCheckpointing) 设置<p>是否开启梯度检查点（省显存换计算），GRPO 返回 null。</p>
 * @method integer getCutoffLen() 获取<p>最大序列/上下文长度，所有模式都返回。</p>
 * @method void setCutoffLen(integer $CutoffLen) 设置<p>最大序列/上下文长度，所有模式都返回。</p>
 * @method float getLearningRate() 获取<p>推荐学习率；SFT/DPO 按算法+微调方式给值，GRPO 返回 null（由入口脚本默认值决定）。</p>
 * @method void setLearningRate(float $LearningRate) 设置<p>推荐学习率；SFT/DPO 按算法+微调方式给值，GRPO 返回 null（由入口脚本默认值决定）。</p>
 * @method integer getEpochs() 获取<p>推荐训练轮次，所有模式都返回。</p>
 * @method void setEpochs(integer $Epochs) 设置<p>推荐训练轮次，所有模式都返回。</p>
 * @method integer getLoraRank() 获取<p>推荐 LoRA rank（仅 finetuneType=lora 有值，全参微调/GRPO 返回 null）。</p>
 * @method void setLoraRank(integer $LoraRank) 设置<p>推荐 LoRA rank（仅 finetuneType=lora 有值，全参微调/GRPO 返回 null）。</p>
 * @method float getWarmupRatio() 获取<p>warmup 步数占总步数比例；GRPO 返回 null。</p>
 * @method void setWarmupRatio(float $WarmupRatio) 设置<p>warmup 步数占总步数比例；GRPO 返回 null。</p>
 * @method integer getTrainBatchSize() 获取<p>GRPO 每步训练的 prompt 总数；SFT/DPO 返回 null。</p>
 * @method void setTrainBatchSize(integer $TrainBatchSize) 设置<p>GRPO 每步训练的 prompt 总数；SFT/DPO 返回 null。</p>
 * @method integer getPPOMiniBatchSize() 获取<p>GRPO PPO 阶段 mini-batch 大小；SFT/DPO 返回 null。</p>
 * @method void setPPOMiniBatchSize(integer $PPOMiniBatchSize) 设置<p>GRPO PPO 阶段 mini-batch 大小；SFT/DPO 返回 null。</p>
 * @method float getGpuMemoryUtilization() 获取<p>GRPO rollout（vLLM/sglang）占用 GPU 显存比例（0~1）；SFT/DPO 返回 null。</p>
 * @method void setGpuMemoryUtilization(float $GpuMemoryUtilization) 设置<p>GRPO rollout（vLLM/sglang）占用 GPU 显存比例（0~1）；SFT/DPO 返回 null。</p>
 * @method integer getMaxResponseLength() 获取<p>GRPO rollout 单次最大生成长度；SFT/DPO 返回 null。</p>
 * @method void setMaxResponseLength(integer $MaxResponseLength) 设置<p>GRPO rollout 单次最大生成长度；SFT/DPO 返回 null。</p>
 * @method integer getNumSamplesPerPrompt() 获取<p>GRPO 每个 prompt 的采样数（group size）；SFT/DPO 返回 null。</p>
 * @method void setNumSamplesPerPrompt(integer $NumSamplesPerPrompt) 设置<p>GRPO 每个 prompt 的采样数（group size）；SFT/DPO 返回 null。</p>
 */
class TrainingParams extends AbstractModel
{
    /**
     * @var integer <p>每卡 batch size，SFT/DPO 用。GRPO 返回 null</p>
     */
    public $PerDeviceBatchSize;

    /**
     * @var integer <p>梯度累积步数，用于放大有效 batch；GRPO 返回 null。</p>
     */
    public $GradientAccumulationSteps;

    /**
     * @var boolean <p>是否开启梯度检查点（省显存换计算），GRPO 返回 null。</p>
     */
    public $GradientCheckpointing;

    /**
     * @var integer <p>最大序列/上下文长度，所有模式都返回。</p>
     */
    public $CutoffLen;

    /**
     * @var float <p>推荐学习率；SFT/DPO 按算法+微调方式给值，GRPO 返回 null（由入口脚本默认值决定）。</p>
     */
    public $LearningRate;

    /**
     * @var integer <p>推荐训练轮次，所有模式都返回。</p>
     */
    public $Epochs;

    /**
     * @var integer <p>推荐 LoRA rank（仅 finetuneType=lora 有值，全参微调/GRPO 返回 null）。</p>
     */
    public $LoraRank;

    /**
     * @var float <p>warmup 步数占总步数比例；GRPO 返回 null。</p>
     */
    public $WarmupRatio;

    /**
     * @var integer <p>GRPO 每步训练的 prompt 总数；SFT/DPO 返回 null。</p>
     */
    public $TrainBatchSize;

    /**
     * @var integer <p>GRPO PPO 阶段 mini-batch 大小；SFT/DPO 返回 null。</p>
     */
    public $PPOMiniBatchSize;

    /**
     * @var float <p>GRPO rollout（vLLM/sglang）占用 GPU 显存比例（0~1）；SFT/DPO 返回 null。</p>
     */
    public $GpuMemoryUtilization;

    /**
     * @var integer <p>GRPO rollout 单次最大生成长度；SFT/DPO 返回 null。</p>
     */
    public $MaxResponseLength;

    /**
     * @var integer <p>GRPO 每个 prompt 的采样数（group size）；SFT/DPO 返回 null。</p>
     */
    public $NumSamplesPerPrompt;

    /**
     * @param integer $PerDeviceBatchSize <p>每卡 batch size，SFT/DPO 用。GRPO 返回 null</p>
     * @param integer $GradientAccumulationSteps <p>梯度累积步数，用于放大有效 batch；GRPO 返回 null。</p>
     * @param boolean $GradientCheckpointing <p>是否开启梯度检查点（省显存换计算），GRPO 返回 null。</p>
     * @param integer $CutoffLen <p>最大序列/上下文长度，所有模式都返回。</p>
     * @param float $LearningRate <p>推荐学习率；SFT/DPO 按算法+微调方式给值，GRPO 返回 null（由入口脚本默认值决定）。</p>
     * @param integer $Epochs <p>推荐训练轮次，所有模式都返回。</p>
     * @param integer $LoraRank <p>推荐 LoRA rank（仅 finetuneType=lora 有值，全参微调/GRPO 返回 null）。</p>
     * @param float $WarmupRatio <p>warmup 步数占总步数比例；GRPO 返回 null。</p>
     * @param integer $TrainBatchSize <p>GRPO 每步训练的 prompt 总数；SFT/DPO 返回 null。</p>
     * @param integer $PPOMiniBatchSize <p>GRPO PPO 阶段 mini-batch 大小；SFT/DPO 返回 null。</p>
     * @param float $GpuMemoryUtilization <p>GRPO rollout（vLLM/sglang）占用 GPU 显存比例（0~1）；SFT/DPO 返回 null。</p>
     * @param integer $MaxResponseLength <p>GRPO rollout 单次最大生成长度；SFT/DPO 返回 null。</p>
     * @param integer $NumSamplesPerPrompt <p>GRPO 每个 prompt 的采样数（group size）；SFT/DPO 返回 null。</p>
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
        if (array_key_exists("PerDeviceBatchSize",$param) and $param["PerDeviceBatchSize"] !== null) {
            $this->PerDeviceBatchSize = $param["PerDeviceBatchSize"];
        }

        if (array_key_exists("GradientAccumulationSteps",$param) and $param["GradientAccumulationSteps"] !== null) {
            $this->GradientAccumulationSteps = $param["GradientAccumulationSteps"];
        }

        if (array_key_exists("GradientCheckpointing",$param) and $param["GradientCheckpointing"] !== null) {
            $this->GradientCheckpointing = $param["GradientCheckpointing"];
        }

        if (array_key_exists("CutoffLen",$param) and $param["CutoffLen"] !== null) {
            $this->CutoffLen = $param["CutoffLen"];
        }

        if (array_key_exists("LearningRate",$param) and $param["LearningRate"] !== null) {
            $this->LearningRate = $param["LearningRate"];
        }

        if (array_key_exists("Epochs",$param) and $param["Epochs"] !== null) {
            $this->Epochs = $param["Epochs"];
        }

        if (array_key_exists("LoraRank",$param) and $param["LoraRank"] !== null) {
            $this->LoraRank = $param["LoraRank"];
        }

        if (array_key_exists("WarmupRatio",$param) and $param["WarmupRatio"] !== null) {
            $this->WarmupRatio = $param["WarmupRatio"];
        }

        if (array_key_exists("TrainBatchSize",$param) and $param["TrainBatchSize"] !== null) {
            $this->TrainBatchSize = $param["TrainBatchSize"];
        }

        if (array_key_exists("PPOMiniBatchSize",$param) and $param["PPOMiniBatchSize"] !== null) {
            $this->PPOMiniBatchSize = $param["PPOMiniBatchSize"];
        }

        if (array_key_exists("GpuMemoryUtilization",$param) and $param["GpuMemoryUtilization"] !== null) {
            $this->GpuMemoryUtilization = $param["GpuMemoryUtilization"];
        }

        if (array_key_exists("MaxResponseLength",$param) and $param["MaxResponseLength"] !== null) {
            $this->MaxResponseLength = $param["MaxResponseLength"];
        }

        if (array_key_exists("NumSamplesPerPrompt",$param) and $param["NumSamplesPerPrompt"] !== null) {
            $this->NumSamplesPerPrompt = $param["NumSamplesPerPrompt"];
        }
    }
}
