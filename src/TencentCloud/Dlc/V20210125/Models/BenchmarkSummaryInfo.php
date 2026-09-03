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
 * 模型评测汇总信息（排行榜数据项）
 *
 * @method string getModelName() 获取<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvider() 获取<p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvider(string $Provider) 设置<p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取<p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置<p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterSize() 获取<p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterSize(string $ParameterSize) 设置<p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>评测所用的服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>评测所用的服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>评测任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>评测任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBenchmarkCount() 获取<p>该模型的评测任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBenchmarkCount(integer $BenchmarkCount) 设置<p>该模型的评测任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputTokens() 获取<p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputTokens() 获取<p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRequestsPerSecond() 获取<p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置<p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrency() 获取<p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置<p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeToFirstTokenAvg() 获取<p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToFirstTokenAvg(float $TimeToFirstTokenAvg) 设置<p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeToFirstTokenMedian() 获取<p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToFirstTokenMedian(float $TimeToFirstTokenMedian) 设置<p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeToFirstTokenP99() 获取<p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeToFirstTokenP99(float $TimeToFirstTokenP99) 设置<p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimePerOutputTokenAvg() 获取<p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimePerOutputTokenAvg(float $TimePerOutputTokenAvg) 设置<p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimePerOutputTokenMedian() 获取<p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimePerOutputTokenMedian(float $TimePerOutputTokenMedian) 设置<p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimePerOutputTokenP99() 获取<p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimePerOutputTokenP99(float $TimePerOutputTokenP99) 设置<p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInterTokenLatencyAvg() 获取<p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterTokenLatencyAvg(float $InterTokenLatencyAvg) 设置<p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInterTokenLatencyMedian() 获取<p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterTokenLatencyMedian(float $InterTokenLatencyMedian) 设置<p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInterTokenLatencyP99() 获取<p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterTokenLatencyP99(float $InterTokenLatencyP99) 设置<p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndToEndAvg() 获取<p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndToEndAvg(float $EndToEndAvg) 设置<p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndToEndMedian() 获取<p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndToEndMedian(float $EndToEndMedian) 设置<p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndToEndP99() 获取<p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndToEndP99(float $EndToEndP99) 设置<p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>评测完成时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>评测完成时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BenchmarkSummaryInfo extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string <p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Provider;

    /**
     * @var string <p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var string <p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterSize;

    /**
     * @var string <p>评测所用的服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string <p>评测任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer <p>该模型的评测任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BenchmarkCount;

    /**
     * @var integer <p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputTokens;

    /**
     * @var integer <p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputTokens;

    /**
     * @var float <p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestsPerSecond;

    /**
     * @var integer <p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrency;

    /**
     * @var float <p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToFirstTokenAvg;

    /**
     * @var float <p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToFirstTokenMedian;

    /**
     * @var float <p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeToFirstTokenP99;

    /**
     * @var float <p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimePerOutputTokenAvg;

    /**
     * @var float <p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimePerOutputTokenMedian;

    /**
     * @var float <p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimePerOutputTokenP99;

    /**
     * @var float <p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterTokenLatencyAvg;

    /**
     * @var float <p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterTokenLatencyMedian;

    /**
     * @var float <p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterTokenLatencyP99;

    /**
     * @var float <p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndToEndAvg;

    /**
     * @var float <p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndToEndMedian;

    /**
     * @var float <p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndToEndP99;

    /**
     * @var integer <p>评测完成时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $ModelName <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Provider <p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType <p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterSize <p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>评测所用的服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>评测任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BenchmarkCount <p>该模型的评测任务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputTokens <p>输入 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputTokens <p>输出 Token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RequestsPerSecond <p>每秒请求数 (QPS)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrency <p>最大并发数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeToFirstTokenAvg <p>TTFT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeToFirstTokenMedian <p>TTFT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeToFirstTokenP99 <p>TTFT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimePerOutputTokenAvg <p>TPOT 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimePerOutputTokenMedian <p>TPOT 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimePerOutputTokenP99 <p>TPOT P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InterTokenLatencyAvg <p>ITL 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InterTokenLatencyMedian <p>ITL 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InterTokenLatencyP99 <p>ITL P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndToEndAvg <p>E2E 平均值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndToEndMedian <p>E2E 中间值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndToEndP99 <p>E2E P99 值(ms)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>评测完成时间（毫秒时间戳）</p>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ParameterSize",$param) and $param["ParameterSize"] !== null) {
            $this->ParameterSize = $param["ParameterSize"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("BenchmarkCount",$param) and $param["BenchmarkCount"] !== null) {
            $this->BenchmarkCount = $param["BenchmarkCount"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = $param["RequestsPerSecond"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("TimeToFirstTokenAvg",$param) and $param["TimeToFirstTokenAvg"] !== null) {
            $this->TimeToFirstTokenAvg = $param["TimeToFirstTokenAvg"];
        }

        if (array_key_exists("TimeToFirstTokenMedian",$param) and $param["TimeToFirstTokenMedian"] !== null) {
            $this->TimeToFirstTokenMedian = $param["TimeToFirstTokenMedian"];
        }

        if (array_key_exists("TimeToFirstTokenP99",$param) and $param["TimeToFirstTokenP99"] !== null) {
            $this->TimeToFirstTokenP99 = $param["TimeToFirstTokenP99"];
        }

        if (array_key_exists("TimePerOutputTokenAvg",$param) and $param["TimePerOutputTokenAvg"] !== null) {
            $this->TimePerOutputTokenAvg = $param["TimePerOutputTokenAvg"];
        }

        if (array_key_exists("TimePerOutputTokenMedian",$param) and $param["TimePerOutputTokenMedian"] !== null) {
            $this->TimePerOutputTokenMedian = $param["TimePerOutputTokenMedian"];
        }

        if (array_key_exists("TimePerOutputTokenP99",$param) and $param["TimePerOutputTokenP99"] !== null) {
            $this->TimePerOutputTokenP99 = $param["TimePerOutputTokenP99"];
        }

        if (array_key_exists("InterTokenLatencyAvg",$param) and $param["InterTokenLatencyAvg"] !== null) {
            $this->InterTokenLatencyAvg = $param["InterTokenLatencyAvg"];
        }

        if (array_key_exists("InterTokenLatencyMedian",$param) and $param["InterTokenLatencyMedian"] !== null) {
            $this->InterTokenLatencyMedian = $param["InterTokenLatencyMedian"];
        }

        if (array_key_exists("InterTokenLatencyP99",$param) and $param["InterTokenLatencyP99"] !== null) {
            $this->InterTokenLatencyP99 = $param["InterTokenLatencyP99"];
        }

        if (array_key_exists("EndToEndAvg",$param) and $param["EndToEndAvg"] !== null) {
            $this->EndToEndAvg = $param["EndToEndAvg"];
        }

        if (array_key_exists("EndToEndMedian",$param) and $param["EndToEndMedian"] !== null) {
            $this->EndToEndMedian = $param["EndToEndMedian"];
        }

        if (array_key_exists("EndToEndP99",$param) and $param["EndToEndP99"] !== null) {
            $this->EndToEndP99 = $param["EndToEndP99"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
