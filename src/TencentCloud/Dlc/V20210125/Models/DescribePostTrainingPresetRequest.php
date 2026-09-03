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
 * DescribePostTrainingPreset请求参数结构体
 *
 * @method string getMode() 获取<p>使用的大模型微调算法</p><p>枚举值：</p><ul><li>sft： Supervised Fine-Tuning，监督微调</li><li>dpo： Direct Preference Optimization，模型偏好训练微调</li><li>grpo： Group Relative Policy Optimization，组相对策略优化</li></ul>
 * @method void setMode(string $Mode) 设置<p>使用的大模型微调算法</p><p>枚举值：</p><ul><li>sft： Supervised Fine-Tuning，监督微调</li><li>dpo： Direct Preference Optimization，模型偏好训练微调</li><li>grpo： Group Relative Policy Optimization，组相对策略优化</li></ul>
 * @method string getTrainingMode() 获取<p>训练模式，会根据不同训练模式推荐不同的训练参数</p><p>枚举值：</p><ul><li>balanced： 均衡模式，标准配置，兼顾训练速度和模型效果</li><li>quality： 质量优先，更低学习率 / 更多轮次 / 更大 LoRA rank，追求最佳效果</li><li>speed： 速度优先，大 batch / 关闭 grad_ckpt / 短序列，最快迭代验证</li><li>custom： 自定义模式，手动调整各项参数</li></ul><p>默认值：balanced</p>
 * @method void setTrainingMode(string $TrainingMode) 设置<p>训练模式，会根据不同训练模式推荐不同的训练参数</p><p>枚举值：</p><ul><li>balanced： 均衡模式，标准配置，兼顾训练速度和模型效果</li><li>quality： 质量优先，更低学习率 / 更多轮次 / 更大 LoRA rank，追求最佳效果</li><li>speed： 速度优先，大 batch / 关闭 grad_ckpt / 短序列，最快迭代验证</li><li>custom： 自定义模式，手动调整各项参数</li></ul><p>默认值：balanced</p>
 * @method string getFineTuneType() 获取<p>参数微调方式</p><p>枚举值：</p><ul><li>lora： 轻量级微调大模型的方法</li><li>full： 全参数大模型微调</li></ul>
 * @method void setFineTuneType(string $FineTuneType) 设置<p>参数微调方式</p><p>枚举值：</p><ul><li>lora： 轻量级微调大模型的方法</li><li>full： 全参数大模型微调</li></ul>
 * @method float getParameterSize() 获取<p>模型参数大小，如 0.8B，就是 0.8的参数量。370B 模型，就是 370</p>
 * @method void setParameterSize(float $ParameterSize) 设置<p>模型参数大小，如 0.8B，就是 0.8的参数量。370B 模型，就是 370</p>
 */
class DescribePostTrainingPresetRequest extends AbstractModel
{
    /**
     * @var string <p>使用的大模型微调算法</p><p>枚举值：</p><ul><li>sft： Supervised Fine-Tuning，监督微调</li><li>dpo： Direct Preference Optimization，模型偏好训练微调</li><li>grpo： Group Relative Policy Optimization，组相对策略优化</li></ul>
     */
    public $Mode;

    /**
     * @var string <p>训练模式，会根据不同训练模式推荐不同的训练参数</p><p>枚举值：</p><ul><li>balanced： 均衡模式，标准配置，兼顾训练速度和模型效果</li><li>quality： 质量优先，更低学习率 / 更多轮次 / 更大 LoRA rank，追求最佳效果</li><li>speed： 速度优先，大 batch / 关闭 grad_ckpt / 短序列，最快迭代验证</li><li>custom： 自定义模式，手动调整各项参数</li></ul><p>默认值：balanced</p>
     */
    public $TrainingMode;

    /**
     * @var string <p>参数微调方式</p><p>枚举值：</p><ul><li>lora： 轻量级微调大模型的方法</li><li>full： 全参数大模型微调</li></ul>
     */
    public $FineTuneType;

    /**
     * @var float <p>模型参数大小，如 0.8B，就是 0.8的参数量。370B 模型，就是 370</p>
     */
    public $ParameterSize;

    /**
     * @param string $Mode <p>使用的大模型微调算法</p><p>枚举值：</p><ul><li>sft： Supervised Fine-Tuning，监督微调</li><li>dpo： Direct Preference Optimization，模型偏好训练微调</li><li>grpo： Group Relative Policy Optimization，组相对策略优化</li></ul>
     * @param string $TrainingMode <p>训练模式，会根据不同训练模式推荐不同的训练参数</p><p>枚举值：</p><ul><li>balanced： 均衡模式，标准配置，兼顾训练速度和模型效果</li><li>quality： 质量优先，更低学习率 / 更多轮次 / 更大 LoRA rank，追求最佳效果</li><li>speed： 速度优先，大 batch / 关闭 grad_ckpt / 短序列，最快迭代验证</li><li>custom： 自定义模式，手动调整各项参数</li></ul><p>默认值：balanced</p>
     * @param string $FineTuneType <p>参数微调方式</p><p>枚举值：</p><ul><li>lora： 轻量级微调大模型的方法</li><li>full： 全参数大模型微调</li></ul>
     * @param float $ParameterSize <p>模型参数大小，如 0.8B，就是 0.8的参数量。370B 模型，就是 370</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
        }

        if (array_key_exists("FineTuneType",$param) and $param["FineTuneType"] !== null) {
            $this->FineTuneType = $param["FineTuneType"];
        }

        if (array_key_exists("ParameterSize",$param) and $param["ParameterSize"] !== null) {
            $this->ParameterSize = $param["ParameterSize"];
        }
    }
}
