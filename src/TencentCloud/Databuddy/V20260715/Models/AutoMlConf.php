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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AutoML配置
 *
 * @method string getEvaluationMetric() 获取评估指标：acc/auc/f1/mse/mae/rmse
 * @method void setEvaluationMetric(string $EvaluationMetric) 设置评估指标：acc/auc/f1/mse/mae/rmse
 * @method array getSearchSpace() 获取搜索空间列表
 * @method void setSearchSpace(array $SearchSpace) 设置搜索空间列表
 * @method integer getMaxRuntimeMinutes() 获取最大运行时间（分钟），默认60
 * @method void setMaxRuntimeMinutes(integer $MaxRuntimeMinutes) 设置最大运行时间（分钟），默认60
 * @method integer getMaxRunCount() 获取最大运行次数，默认100
 * @method void setMaxRunCount(integer $MaxRunCount) 设置最大运行次数，默认100
 * @method integer getMaxConcurrency() 获取最大运行并发，默认1，最大100
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置最大运行并发，默认1，最大100
 */
class AutoMlConf extends AbstractModel
{
    /**
     * @var string 评估指标：acc/auc/f1/mse/mae/rmse
     */
    public $EvaluationMetric;

    /**
     * @var array 搜索空间列表
     */
    public $SearchSpace;

    /**
     * @var integer 最大运行时间（分钟），默认60
     */
    public $MaxRuntimeMinutes;

    /**
     * @var integer 最大运行次数，默认100
     */
    public $MaxRunCount;

    /**
     * @var integer 最大运行并发，默认1，最大100
     */
    public $MaxConcurrency;

    /**
     * @param string $EvaluationMetric 评估指标：acc/auc/f1/mse/mae/rmse
     * @param array $SearchSpace 搜索空间列表
     * @param integer $MaxRuntimeMinutes 最大运行时间（分钟），默认60
     * @param integer $MaxRunCount 最大运行次数，默认100
     * @param integer $MaxConcurrency 最大运行并发，默认1，最大100
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
        if (array_key_exists("EvaluationMetric",$param) and $param["EvaluationMetric"] !== null) {
            $this->EvaluationMetric = $param["EvaluationMetric"];
        }

        if (array_key_exists("SearchSpace",$param) and $param["SearchSpace"] !== null) {
            $this->SearchSpace = $param["SearchSpace"];
        }

        if (array_key_exists("MaxRuntimeMinutes",$param) and $param["MaxRuntimeMinutes"] !== null) {
            $this->MaxRuntimeMinutes = $param["MaxRuntimeMinutes"];
        }

        if (array_key_exists("MaxRunCount",$param) and $param["MaxRunCount"] !== null) {
            $this->MaxRunCount = $param["MaxRunCount"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }
    }
}
