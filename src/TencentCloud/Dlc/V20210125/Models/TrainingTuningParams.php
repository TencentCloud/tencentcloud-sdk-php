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
 * 调优参数（高级参数，仅 POST_TRAINING 使用；CUSTOM_CODE / LAB 禁止传入）
 *
 * @method string getFineTuneType() 获取<p>微调方式：lora / full / freeze；默认由算法决定（SFT/DPO=lora，CPT/GRPO=full）</p>
 * @method void setFineTuneType(string $FineTuneType) 设置<p>微调方式：lora / full / freeze；默认由算法决定（SFT/DPO=lora，CPT/GRPO=full）</p>
 * @method integer getLoraRank() 获取<p>LoRA rank，仅 finetuneType=lora 时生效</p>
 * @method void setLoraRank(integer $LoraRank) 设置<p>LoRA rank，仅 finetuneType=lora 时生效</p>
 * @method integer getLoraAlpha() 获取<p>LoRA alpha</p>
 * @method void setLoraAlpha(integer $LoraAlpha) 设置<p>LoRA alpha</p>
 * @method float getLoraDropout() 获取<p>LoRA dropout</p>
 * @method void setLoraDropout(float $LoraDropout) 设置<p>LoRA dropout</p>
 * @method string getLoraTarget() 获取<p>LoRA 目标层，默认 all</p>
 * @method void setLoraTarget(string $LoraTarget) 设置<p>LoRA 目标层，默认 all</p>
 * @method string getTrainingMode() 获取<p>训练模式：balanced / quality / speed / custom</p>
 * @method void setTrainingMode(string $TrainingMode) 设置<p>训练模式：balanced / quality / speed / custom</p>
 * @method integer getEpochs() 获取<p>训练轮数</p>
 * @method void setEpochs(integer $Epochs) 设置<p>训练轮数</p>
 * @method float getLearningRate() 获取<p>学习率</p>
 * @method void setLearningRate(float $LearningRate) 设置<p>学习率</p>
 * @method integer getPerDeviceBatchSize() 获取<p>每卡 batch size</p>
 * @method void setPerDeviceBatchSize(integer $PerDeviceBatchSize) 设置<p>每卡 batch size</p>
 * @method integer getGradientAccumulationSteps() 获取<p>梯度累积步数</p>
 * @method void setGradientAccumulationSteps(integer $GradientAccumulationSteps) 设置<p>梯度累积步数</p>
 * @method integer getCutoffLen() 获取<p>上下文长度</p>
 * @method void setCutoffLen(integer $CutoffLen) 设置<p>上下文长度</p>
 * @method integer getMaxSamples() 获取<p>最大样本数</p>
 * @method void setMaxSamples(integer $MaxSamples) 设置<p>最大样本数</p>
 * @method boolean getGradientCheckPointing() 获取<p>是否启用 gradient checkpointing，默认 true</p>
 * @method void setGradientCheckPointing(boolean $GradientCheckPointing) 设置<p>是否启用 gradient checkpointing，默认 true</p>
 * @method string getLrScheduler() 获取<p>学习率调度器类型，默认 cosine</p>
 * @method void setLrScheduler(string $LrScheduler) 设置<p>学习率调度器类型，默认 cosine</p>
 * @method float getWarmupRatio() 获取<p>warmup 比例，默认 0.03</p>
 * @method void setWarmupRatio(float $WarmupRatio) 设置<p>warmup 比例，默认 0.03</p>
 * @method float getDPOBeta() 获取<p>DPO beta，仅 mode=dpo 时生效</p>
 * @method void setDPOBeta(float $DPOBeta) 设置<p>DPO beta，仅 mode=dpo 时生效</p>
 * @method string getDPOLoss() 获取<p>DPO loss：sigmoid / hinge / ipo / kto_pair</p>
 * @method void setDPOLoss(string $DPOLoss) 设置<p>DPO loss：sigmoid / hinge / ipo / kto_pair</p>
 * @method string getRewardFunctionCode() 获取<p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
 * @method void setRewardFunctionCode(string $RewardFunctionCode) 设置<p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
 * @method string getRewardFunctionCosPath() 获取<p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
 * @method void setRewardFunctionCosPath(string $RewardFunctionCosPath) 设置<p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
 * @method float getKLCoefficient() 获取<p>GRPO KL 系数，默认 0.001</p>
 * @method void setKLCoefficient(float $KLCoefficient) 设置<p>GRPO KL 系数，默认 0.001</p>
 * @method integer getNumSamplesPerPrompt() 获取<p>每个 prompt 的采样数（group size），默认 8</p>
 * @method void setNumSamplesPerPrompt(integer $NumSamplesPerPrompt) 设置<p>每个 prompt 的采样数（group size），默认 8</p>
 * @method integer getMaxResponseLength() 获取<p>最大响应生成长度，默认 1024</p>
 * @method void setMaxResponseLength(integer $MaxResponseLength) 设置<p>最大响应生成长度，默认 1024</p>
 * @method float getRollOutTemperature() 获取<p>rollout 生成温度，默认 1.0</p>
 * @method void setRollOutTemperature(float $RollOutTemperature) 设置<p>rollout 生成温度，默认 1.0</p>
 * @method string getRollOutBackend() 获取<p>rollout backend：vllm / sglang，默认 vllm</p>
 * @method void setRollOutBackend(string $RollOutBackend) 设置<p>rollout backend：vllm / sglang，默认 vllm</p>
 * @method float getClipRatio() 获取<p>PPO clip ratio，默认 0.2</p>
 * @method void setClipRatio(float $ClipRatio) 设置<p>PPO clip ratio，默认 0.2</p>
 * @method integer getPPOMiniBatchSize() 获取<p>PPO mini batch size，默认 128</p>
 * @method void setPPOMiniBatchSize(integer $PPOMiniBatchSize) 设置<p>PPO mini batch size，默认 128</p>
 * @method integer getPPOEpochs() 获取<p>PPO epochs（每批数据的更新轮数），默认 1</p>
 * @method void setPPOEpochs(integer $PPOEpochs) 设置<p>PPO epochs（每批数据的更新轮数），默认 1</p>
 * @method integer getTrainBatchSize() 获取<p>训练总 batch size（每步 prompt 数量），默认 128</p>
 * @method void setTrainBatchSize(integer $TrainBatchSize) 设置<p>训练总 batch size（每步 prompt 数量），默认 128</p>
 * @method integer getTensorModelParallelSize() 获取<p>rollout tensor model parallel size，默认 1</p>
 * @method void setTensorModelParallelSize(integer $TensorModelParallelSize) 设置<p>rollout tensor model parallel size，默认 1</p>
 * @method float getGpuMemoryUtilization() 获取<p>vLLM GPU memory utilization，默认 0.5</p>
 * @method void setGpuMemoryUtilization(float $GpuMemoryUtilization) 设置<p>vLLM GPU memory utilization，默认 0.5</p>
 */
class TrainingTuningParams extends AbstractModel
{
    /**
     * @var string <p>微调方式：lora / full / freeze；默认由算法决定（SFT/DPO=lora，CPT/GRPO=full）</p>
     */
    public $FineTuneType;

    /**
     * @var integer <p>LoRA rank，仅 finetuneType=lora 时生效</p>
     */
    public $LoraRank;

    /**
     * @var integer <p>LoRA alpha</p>
     */
    public $LoraAlpha;

    /**
     * @var float <p>LoRA dropout</p>
     */
    public $LoraDropout;

    /**
     * @var string <p>LoRA 目标层，默认 all</p>
     */
    public $LoraTarget;

    /**
     * @var string <p>训练模式：balanced / quality / speed / custom</p>
     */
    public $TrainingMode;

    /**
     * @var integer <p>训练轮数</p>
     */
    public $Epochs;

    /**
     * @var float <p>学习率</p>
     */
    public $LearningRate;

    /**
     * @var integer <p>每卡 batch size</p>
     */
    public $PerDeviceBatchSize;

    /**
     * @var integer <p>梯度累积步数</p>
     */
    public $GradientAccumulationSteps;

    /**
     * @var integer <p>上下文长度</p>
     */
    public $CutoffLen;

    /**
     * @var integer <p>最大样本数</p>
     */
    public $MaxSamples;

    /**
     * @var boolean <p>是否启用 gradient checkpointing，默认 true</p>
     */
    public $GradientCheckPointing;

    /**
     * @var string <p>学习率调度器类型，默认 cosine</p>
     */
    public $LrScheduler;

    /**
     * @var float <p>warmup 比例，默认 0.03</p>
     */
    public $WarmupRatio;

    /**
     * @var float <p>DPO beta，仅 mode=dpo 时生效</p>
     */
    public $DPOBeta;

    /**
     * @var string <p>DPO loss：sigmoid / hinge / ipo / kto_pair</p>
     */
    public $DPOLoss;

    /**
     * @var string <p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
     */
    public $RewardFunctionCode;

    /**
     * @var string <p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
     */
    public $RewardFunctionCosPath;

    /**
     * @var float <p>GRPO KL 系数，默认 0.001</p>
     */
    public $KLCoefficient;

    /**
     * @var integer <p>每个 prompt 的采样数（group size），默认 8</p>
     */
    public $NumSamplesPerPrompt;

    /**
     * @var integer <p>最大响应生成长度，默认 1024</p>
     */
    public $MaxResponseLength;

    /**
     * @var float <p>rollout 生成温度，默认 1.0</p>
     */
    public $RollOutTemperature;

    /**
     * @var string <p>rollout backend：vllm / sglang，默认 vllm</p>
     */
    public $RollOutBackend;

    /**
     * @var float <p>PPO clip ratio，默认 0.2</p>
     */
    public $ClipRatio;

    /**
     * @var integer <p>PPO mini batch size，默认 128</p>
     */
    public $PPOMiniBatchSize;

    /**
     * @var integer <p>PPO epochs（每批数据的更新轮数），默认 1</p>
     */
    public $PPOEpochs;

    /**
     * @var integer <p>训练总 batch size（每步 prompt 数量），默认 128</p>
     */
    public $TrainBatchSize;

    /**
     * @var integer <p>rollout tensor model parallel size，默认 1</p>
     */
    public $TensorModelParallelSize;

    /**
     * @var float <p>vLLM GPU memory utilization，默认 0.5</p>
     */
    public $GpuMemoryUtilization;

    /**
     * @param string $FineTuneType <p>微调方式：lora / full / freeze；默认由算法决定（SFT/DPO=lora，CPT/GRPO=full）</p>
     * @param integer $LoraRank <p>LoRA rank，仅 finetuneType=lora 时生效</p>
     * @param integer $LoraAlpha <p>LoRA alpha</p>
     * @param float $LoraDropout <p>LoRA dropout</p>
     * @param string $LoraTarget <p>LoRA 目标层，默认 all</p>
     * @param string $TrainingMode <p>训练模式：balanced / quality / speed / custom</p>
     * @param integer $Epochs <p>训练轮数</p>
     * @param float $LearningRate <p>学习率</p>
     * @param integer $PerDeviceBatchSize <p>每卡 batch size</p>
     * @param integer $GradientAccumulationSteps <p>梯度累积步数</p>
     * @param integer $CutoffLen <p>上下文长度</p>
     * @param integer $MaxSamples <p>最大样本数</p>
     * @param boolean $GradientCheckPointing <p>是否启用 gradient checkpointing，默认 true</p>
     * @param string $LrScheduler <p>学习率调度器类型，默认 cosine</p>
     * @param float $WarmupRatio <p>warmup 比例，默认 0.03</p>
     * @param float $DPOBeta <p>DPO beta，仅 mode=dpo 时生效</p>
     * @param string $DPOLoss <p>DPO loss：sigmoid / hinge / ipo / kto_pair</p>
     * @param string $RewardFunctionCode <p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
     * @param string $RewardFunctionCosPath <p>兼容旧请求；当前 GRPO 默认使用 verl 内置 rule reward</p>
     * @param float $KLCoefficient <p>GRPO KL 系数，默认 0.001</p>
     * @param integer $NumSamplesPerPrompt <p>每个 prompt 的采样数（group size），默认 8</p>
     * @param integer $MaxResponseLength <p>最大响应生成长度，默认 1024</p>
     * @param float $RollOutTemperature <p>rollout 生成温度，默认 1.0</p>
     * @param string $RollOutBackend <p>rollout backend：vllm / sglang，默认 vllm</p>
     * @param float $ClipRatio <p>PPO clip ratio，默认 0.2</p>
     * @param integer $PPOMiniBatchSize <p>PPO mini batch size，默认 128</p>
     * @param integer $PPOEpochs <p>PPO epochs（每批数据的更新轮数），默认 1</p>
     * @param integer $TrainBatchSize <p>训练总 batch size（每步 prompt 数量），默认 128</p>
     * @param integer $TensorModelParallelSize <p>rollout tensor model parallel size，默认 1</p>
     * @param float $GpuMemoryUtilization <p>vLLM GPU memory utilization，默认 0.5</p>
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
        if (array_key_exists("FineTuneType",$param) and $param["FineTuneType"] !== null) {
            $this->FineTuneType = $param["FineTuneType"];
        }

        if (array_key_exists("LoraRank",$param) and $param["LoraRank"] !== null) {
            $this->LoraRank = $param["LoraRank"];
        }

        if (array_key_exists("LoraAlpha",$param) and $param["LoraAlpha"] !== null) {
            $this->LoraAlpha = $param["LoraAlpha"];
        }

        if (array_key_exists("LoraDropout",$param) and $param["LoraDropout"] !== null) {
            $this->LoraDropout = $param["LoraDropout"];
        }

        if (array_key_exists("LoraTarget",$param) and $param["LoraTarget"] !== null) {
            $this->LoraTarget = $param["LoraTarget"];
        }

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
        }

        if (array_key_exists("Epochs",$param) and $param["Epochs"] !== null) {
            $this->Epochs = $param["Epochs"];
        }

        if (array_key_exists("LearningRate",$param) and $param["LearningRate"] !== null) {
            $this->LearningRate = $param["LearningRate"];
        }

        if (array_key_exists("PerDeviceBatchSize",$param) and $param["PerDeviceBatchSize"] !== null) {
            $this->PerDeviceBatchSize = $param["PerDeviceBatchSize"];
        }

        if (array_key_exists("GradientAccumulationSteps",$param) and $param["GradientAccumulationSteps"] !== null) {
            $this->GradientAccumulationSteps = $param["GradientAccumulationSteps"];
        }

        if (array_key_exists("CutoffLen",$param) and $param["CutoffLen"] !== null) {
            $this->CutoffLen = $param["CutoffLen"];
        }

        if (array_key_exists("MaxSamples",$param) and $param["MaxSamples"] !== null) {
            $this->MaxSamples = $param["MaxSamples"];
        }

        if (array_key_exists("GradientCheckPointing",$param) and $param["GradientCheckPointing"] !== null) {
            $this->GradientCheckPointing = $param["GradientCheckPointing"];
        }

        if (array_key_exists("LrScheduler",$param) and $param["LrScheduler"] !== null) {
            $this->LrScheduler = $param["LrScheduler"];
        }

        if (array_key_exists("WarmupRatio",$param) and $param["WarmupRatio"] !== null) {
            $this->WarmupRatio = $param["WarmupRatio"];
        }

        if (array_key_exists("DPOBeta",$param) and $param["DPOBeta"] !== null) {
            $this->DPOBeta = $param["DPOBeta"];
        }

        if (array_key_exists("DPOLoss",$param) and $param["DPOLoss"] !== null) {
            $this->DPOLoss = $param["DPOLoss"];
        }

        if (array_key_exists("RewardFunctionCode",$param) and $param["RewardFunctionCode"] !== null) {
            $this->RewardFunctionCode = $param["RewardFunctionCode"];
        }

        if (array_key_exists("RewardFunctionCosPath",$param) and $param["RewardFunctionCosPath"] !== null) {
            $this->RewardFunctionCosPath = $param["RewardFunctionCosPath"];
        }

        if (array_key_exists("KLCoefficient",$param) and $param["KLCoefficient"] !== null) {
            $this->KLCoefficient = $param["KLCoefficient"];
        }

        if (array_key_exists("NumSamplesPerPrompt",$param) and $param["NumSamplesPerPrompt"] !== null) {
            $this->NumSamplesPerPrompt = $param["NumSamplesPerPrompt"];
        }

        if (array_key_exists("MaxResponseLength",$param) and $param["MaxResponseLength"] !== null) {
            $this->MaxResponseLength = $param["MaxResponseLength"];
        }

        if (array_key_exists("RollOutTemperature",$param) and $param["RollOutTemperature"] !== null) {
            $this->RollOutTemperature = $param["RollOutTemperature"];
        }

        if (array_key_exists("RollOutBackend",$param) and $param["RollOutBackend"] !== null) {
            $this->RollOutBackend = $param["RollOutBackend"];
        }

        if (array_key_exists("ClipRatio",$param) and $param["ClipRatio"] !== null) {
            $this->ClipRatio = $param["ClipRatio"];
        }

        if (array_key_exists("PPOMiniBatchSize",$param) and $param["PPOMiniBatchSize"] !== null) {
            $this->PPOMiniBatchSize = $param["PPOMiniBatchSize"];
        }

        if (array_key_exists("PPOEpochs",$param) and $param["PPOEpochs"] !== null) {
            $this->PPOEpochs = $param["PPOEpochs"];
        }

        if (array_key_exists("TrainBatchSize",$param) and $param["TrainBatchSize"] !== null) {
            $this->TrainBatchSize = $param["TrainBatchSize"];
        }

        if (array_key_exists("TensorModelParallelSize",$param) and $param["TensorModelParallelSize"] !== null) {
            $this->TensorModelParallelSize = $param["TensorModelParallelSize"];
        }

        if (array_key_exists("GpuMemoryUtilization",$param) and $param["GpuMemoryUtilization"] !== null) {
            $this->GpuMemoryUtilization = $param["GpuMemoryUtilization"];
        }
    }
}
