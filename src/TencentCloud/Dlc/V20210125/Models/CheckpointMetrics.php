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
 * Checkpoint 训练指标（仅 checkpoint 目录且 snapshot 存在时有值）
 *
 * @method float getEpoch() 获取<p>当前 checkpoint 对应的 epoch</p>
 * @method void setEpoch(float $Epoch) 设置<p>当前 checkpoint 对应的 epoch</p>
 * @method integer getStep() 获取<p>全局训练步数</p>
 * @method void setStep(integer $Step) 设置<p>全局训练步数</p>
 * @method float getLoss() 获取<p>训练 loss（归一化后）</p>
 * @method void setLoss(float $Loss) 设置<p>训练 loss（归一化后）</p>
 * @method float getEvalLoss() 获取<p>评估 loss（归一化后）</p>
 * @method void setEvalLoss(float $EvalLoss) 设置<p>评估 loss（归一化后）</p>
 * @method float getLearningRate() 获取<p>学习率</p>
 * @method void setLearningRate(float $LearningRate) 设置<p>学习率</p>
 * @method array getRawMetrics() 获取<p>snapshot 中的原始 metrics 键值对列表（前端可展开查看）</p>
 * @method void setRawMetrics(array $RawMetrics) 设置<p>snapshot 中的原始 metrics 键值对列表（前端可展开查看）</p>
 */
class CheckpointMetrics extends AbstractModel
{
    /**
     * @var float <p>当前 checkpoint 对应的 epoch</p>
     */
    public $Epoch;

    /**
     * @var integer <p>全局训练步数</p>
     */
    public $Step;

    /**
     * @var float <p>训练 loss（归一化后）</p>
     */
    public $Loss;

    /**
     * @var float <p>评估 loss（归一化后）</p>
     */
    public $EvalLoss;

    /**
     * @var float <p>学习率</p>
     */
    public $LearningRate;

    /**
     * @var array <p>snapshot 中的原始 metrics 键值对列表（前端可展开查看）</p>
     */
    public $RawMetrics;

    /**
     * @param float $Epoch <p>当前 checkpoint 对应的 epoch</p>
     * @param integer $Step <p>全局训练步数</p>
     * @param float $Loss <p>训练 loss（归一化后）</p>
     * @param float $EvalLoss <p>评估 loss（归一化后）</p>
     * @param float $LearningRate <p>学习率</p>
     * @param array $RawMetrics <p>snapshot 中的原始 metrics 键值对列表（前端可展开查看）</p>
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
        if (array_key_exists("Epoch",$param) and $param["Epoch"] !== null) {
            $this->Epoch = $param["Epoch"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("Loss",$param) and $param["Loss"] !== null) {
            $this->Loss = $param["Loss"];
        }

        if (array_key_exists("EvalLoss",$param) and $param["EvalLoss"] !== null) {
            $this->EvalLoss = $param["EvalLoss"];
        }

        if (array_key_exists("LearningRate",$param) and $param["LearningRate"] !== null) {
            $this->LearningRate = $param["LearningRate"];
        }

        if (array_key_exists("RawMetrics",$param) and $param["RawMetrics"] !== null) {
            $this->RawMetrics = [];
            foreach ($param["RawMetrics"] as $key => $value){
                $obj = new MetricItem();
                $obj->deserialize($value);
                array_push($this->RawMetrics, $obj);
            }
        }
    }
}
