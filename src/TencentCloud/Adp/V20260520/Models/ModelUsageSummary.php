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
 * 模型资源用量聚合明细（MODEL 域专属）
 *
 * @method float getCallCount() 获取<p>调用次数（业务调用维度的顶层计数）</p>
 * @method void setCallCount(float $CallCount) 设置<p>调用次数（业务调用维度的顶层计数）</p>
 * @method boolean getIsDefaultKB() 获取<p>是否默认知识库</p>
 * @method void setIsDefaultKB(boolean $IsDefaultKB) 设置<p>是否默认知识库</p>
 * @method string getModelName() 获取<p>模型名称，标识使用的 AI 模型</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称，标识使用的 AI 模型</p>
 * @method array getResourceConsumptionList() 获取<p>MODEL 域消耗计量列表（权威字段）：按单位+label 分项列出每类计量。unit=TOKEN 时 label 区分 Token 子类别（input/output/avg_*/cache_*），label 为空表示 total_tokens；unit=PAGE_COUNT 表示模型消耗页数</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) 设置<p>MODEL 域消耗计量列表（权威字段）：按单位+label 分项列出每类计量。unit=TOKEN 时 label 区分 Token 子类别（input/output/avg_*/cache_*），label 为空表示 total_tokens；unit=PAGE_COUNT 表示模型消耗页数</p>
 * @method float getConsumptionPU() 获取<p>模型消耗 PU 总量（聚合维度内的 PU 消耗之和）</p>
 * @method void setConsumptionPU(float $ConsumptionPU) 设置<p>模型消耗 PU 总量（聚合维度内的 PU 消耗之和）</p>
 */
class ModelUsageSummary extends AbstractModel
{
    /**
     * @var float <p>调用次数（业务调用维度的顶层计数）</p>
     */
    public $CallCount;

    /**
     * @var boolean <p>是否默认知识库</p>
     */
    public $IsDefaultKB;

    /**
     * @var string <p>模型名称，标识使用的 AI 模型</p>
     */
    public $ModelName;

    /**
     * @var array <p>MODEL 域消耗计量列表（权威字段）：按单位+label 分项列出每类计量。unit=TOKEN 时 label 区分 Token 子类别（input/output/avg_*/cache_*），label 为空表示 total_tokens；unit=PAGE_COUNT 表示模型消耗页数</p>
     */
    public $ResourceConsumptionList;

    /**
     * @var float <p>模型消耗 PU 总量（聚合维度内的 PU 消耗之和）</p>
     */
    public $ConsumptionPU;

    /**
     * @param float $CallCount <p>调用次数（业务调用维度的顶层计数）</p>
     * @param boolean $IsDefaultKB <p>是否默认知识库</p>
     * @param string $ModelName <p>模型名称，标识使用的 AI 模型</p>
     * @param array $ResourceConsumptionList <p>MODEL 域消耗计量列表（权威字段）：按单位+label 分项列出每类计量。unit=TOKEN 时 label 区分 Token 子类别（input/output/avg_*/cache_*），label 为空表示 total_tokens；unit=PAGE_COUNT 表示模型消耗页数</p>
     * @param float $ConsumptionPU <p>模型消耗 PU 总量（聚合维度内的 PU 消耗之和）</p>
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
        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("IsDefaultKB",$param) and $param["IsDefaultKB"] !== null) {
            $this->IsDefaultKB = $param["IsDefaultKB"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ResourceConsumptionList",$param) and $param["ResourceConsumptionList"] !== null) {
            $this->ResourceConsumptionList = [];
            foreach ($param["ResourceConsumptionList"] as $key => $value){
                $obj = new ResourceConsumption();
                $obj->deserialize($value);
                array_push($this->ResourceConsumptionList, $obj);
            }
        }

        if (array_key_exists("ConsumptionPU",$param) and $param["ConsumptionPU"] !== null) {
            $this->ConsumptionPU = $param["ConsumptionPU"];
        }
    }
}
