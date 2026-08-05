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
 * 监控指标数据
 *
 * @method float getRequestsPerSecond() 获取<p>每秒请求数（QPS）</p>
 * @method void setRequestsPerSecond(float $RequestsPerSecond) 设置<p>每秒请求数（QPS）</p>
 * @method float getErrorRate() 获取<p>错误率（0~1）</p>
 * @method void setErrorRate(float $ErrorRate) 设置<p>错误率（0~1）</p>
 * @method float getP95LatencyMs() 获取<p>P95 延迟（毫秒）</p>
 * @method void setP95LatencyMs(float $P95LatencyMs) 设置<p>P95 延迟（毫秒）</p>
 * @method float getP99LatencyMs() 获取<p>P99 延迟（毫秒）</p>
 * @method void setP99LatencyMs(float $P99LatencyMs) 设置<p>P99 延迟（毫秒）</p>
 * @method float getQueueDepth() 获取<p>队列深度（排队中的请求数）</p>
 * @method void setQueueDepth(float $QueueDepth) 设置<p>队列深度（排队中的请求数）</p>
 * @method float getTimeToFirstTokenP99Ms() 获取<p>TTFT P99 延迟（毫秒，仅 vLLM）</p>
 * @method void setTimeToFirstTokenP99Ms(float $TimeToFirstTokenP99Ms) 设置<p>TTFT P99 延迟（毫秒，仅 vLLM）</p>
 * @method float getTimePerOutputTokenP99Ms() 获取<p>TPOT P99 延迟（毫秒，仅 vLLM）</p>
 * @method void setTimePerOutputTokenP99Ms(float $TimePerOutputTokenP99Ms) 设置<p>TPOT P99 延迟（毫秒，仅 vLLM）</p>
 * @method float getTokenThroughput() 获取<p>Token 吞吐量（tokens/s，仅 vLLM）</p>
 * @method void setTokenThroughput(float $TokenThroughput) 设置<p>Token 吞吐量（tokens/s，仅 vLLM）</p>
 * @method float getGpuUtilization() 获取<p>GPU 利用率（0~100，百分比）</p>
 * @method void setGpuUtilization(float $GpuUtilization) 设置<p>GPU 利用率（0~100，百分比）</p>
 * @method float getGpuMemoryUsedMB() 获取<p>GPU 显存已用（MB）</p>
 * @method void setGpuMemoryUsedMB(float $GpuMemoryUsedMB) 设置<p>GPU 显存已用（MB）</p>
 * @method float getGpuMemoryTotalMB() 获取<p>GPU 显存总量（MB）</p>
 * @method void setGpuMemoryTotalMB(float $GpuMemoryTotalMB) 设置<p>GPU 显存总量（MB）</p>
 * @method float getCpuUtilization() 获取<p>CPU 利用率（0~100，百分比）</p>
 * @method void setCpuUtilization(float $CpuUtilization) 设置<p>CPU 利用率（0~100，百分比）</p>
 * @method float getMemoryUsedBytes() 获取<p>内存已用（字节）</p>
 * @method void setMemoryUsedBytes(float $MemoryUsedBytes) 设置<p>内存已用（字节）</p>
 * @method float getMemoryTotalBytes() 获取<p>内存总量（字节）</p>
 * @method void setMemoryTotalBytes(float $MemoryTotalBytes) 设置<p>内存总量（字节）</p>
 * @method float getNetworkReceiveMBPerSecond() 获取<p>网络接收速度（MB/s）</p>
 * @method void setNetworkReceiveMBPerSecond(float $NetworkReceiveMBPerSecond) 设置<p>网络接收速度（MB/s）</p>
 * @method float getNetworkSendMBPerSecond() 获取<p>网络发送速度（MB/s）</p>
 * @method void setNetworkSendMBPerSecond(float $NetworkSendMBPerSecond) 设置<p>网络发送速度（MB/s）</p>
 */
class MetricsData extends AbstractModel
{
    /**
     * @var float <p>每秒请求数（QPS）</p>
     */
    public $RequestsPerSecond;

    /**
     * @var float <p>错误率（0~1）</p>
     */
    public $ErrorRate;

    /**
     * @var float <p>P95 延迟（毫秒）</p>
     */
    public $P95LatencyMs;

    /**
     * @var float <p>P99 延迟（毫秒）</p>
     */
    public $P99LatencyMs;

    /**
     * @var float <p>队列深度（排队中的请求数）</p>
     */
    public $QueueDepth;

    /**
     * @var float <p>TTFT P99 延迟（毫秒，仅 vLLM）</p>
     */
    public $TimeToFirstTokenP99Ms;

    /**
     * @var float <p>TPOT P99 延迟（毫秒，仅 vLLM）</p>
     */
    public $TimePerOutputTokenP99Ms;

    /**
     * @var float <p>Token 吞吐量（tokens/s，仅 vLLM）</p>
     */
    public $TokenThroughput;

    /**
     * @var float <p>GPU 利用率（0~100，百分比）</p>
     */
    public $GpuUtilization;

    /**
     * @var float <p>GPU 显存已用（MB）</p>
     */
    public $GpuMemoryUsedMB;

    /**
     * @var float <p>GPU 显存总量（MB）</p>
     */
    public $GpuMemoryTotalMB;

    /**
     * @var float <p>CPU 利用率（0~100，百分比）</p>
     */
    public $CpuUtilization;

    /**
     * @var float <p>内存已用（字节）</p>
     */
    public $MemoryUsedBytes;

    /**
     * @var float <p>内存总量（字节）</p>
     */
    public $MemoryTotalBytes;

    /**
     * @var float <p>网络接收速度（MB/s）</p>
     */
    public $NetworkReceiveMBPerSecond;

    /**
     * @var float <p>网络发送速度（MB/s）</p>
     */
    public $NetworkSendMBPerSecond;

    /**
     * @param float $RequestsPerSecond <p>每秒请求数（QPS）</p>
     * @param float $ErrorRate <p>错误率（0~1）</p>
     * @param float $P95LatencyMs <p>P95 延迟（毫秒）</p>
     * @param float $P99LatencyMs <p>P99 延迟（毫秒）</p>
     * @param float $QueueDepth <p>队列深度（排队中的请求数）</p>
     * @param float $TimeToFirstTokenP99Ms <p>TTFT P99 延迟（毫秒，仅 vLLM）</p>
     * @param float $TimePerOutputTokenP99Ms <p>TPOT P99 延迟（毫秒，仅 vLLM）</p>
     * @param float $TokenThroughput <p>Token 吞吐量（tokens/s，仅 vLLM）</p>
     * @param float $GpuUtilization <p>GPU 利用率（0~100，百分比）</p>
     * @param float $GpuMemoryUsedMB <p>GPU 显存已用（MB）</p>
     * @param float $GpuMemoryTotalMB <p>GPU 显存总量（MB）</p>
     * @param float $CpuUtilization <p>CPU 利用率（0~100，百分比）</p>
     * @param float $MemoryUsedBytes <p>内存已用（字节）</p>
     * @param float $MemoryTotalBytes <p>内存总量（字节）</p>
     * @param float $NetworkReceiveMBPerSecond <p>网络接收速度（MB/s）</p>
     * @param float $NetworkSendMBPerSecond <p>网络发送速度（MB/s）</p>
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
        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = $param["RequestsPerSecond"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }

        if (array_key_exists("P95LatencyMs",$param) and $param["P95LatencyMs"] !== null) {
            $this->P95LatencyMs = $param["P95LatencyMs"];
        }

        if (array_key_exists("P99LatencyMs",$param) and $param["P99LatencyMs"] !== null) {
            $this->P99LatencyMs = $param["P99LatencyMs"];
        }

        if (array_key_exists("QueueDepth",$param) and $param["QueueDepth"] !== null) {
            $this->QueueDepth = $param["QueueDepth"];
        }

        if (array_key_exists("TimeToFirstTokenP99Ms",$param) and $param["TimeToFirstTokenP99Ms"] !== null) {
            $this->TimeToFirstTokenP99Ms = $param["TimeToFirstTokenP99Ms"];
        }

        if (array_key_exists("TimePerOutputTokenP99Ms",$param) and $param["TimePerOutputTokenP99Ms"] !== null) {
            $this->TimePerOutputTokenP99Ms = $param["TimePerOutputTokenP99Ms"];
        }

        if (array_key_exists("TokenThroughput",$param) and $param["TokenThroughput"] !== null) {
            $this->TokenThroughput = $param["TokenThroughput"];
        }

        if (array_key_exists("GpuUtilization",$param) and $param["GpuUtilization"] !== null) {
            $this->GpuUtilization = $param["GpuUtilization"];
        }

        if (array_key_exists("GpuMemoryUsedMB",$param) and $param["GpuMemoryUsedMB"] !== null) {
            $this->GpuMemoryUsedMB = $param["GpuMemoryUsedMB"];
        }

        if (array_key_exists("GpuMemoryTotalMB",$param) and $param["GpuMemoryTotalMB"] !== null) {
            $this->GpuMemoryTotalMB = $param["GpuMemoryTotalMB"];
        }

        if (array_key_exists("CpuUtilization",$param) and $param["CpuUtilization"] !== null) {
            $this->CpuUtilization = $param["CpuUtilization"];
        }

        if (array_key_exists("MemoryUsedBytes",$param) and $param["MemoryUsedBytes"] !== null) {
            $this->MemoryUsedBytes = $param["MemoryUsedBytes"];
        }

        if (array_key_exists("MemoryTotalBytes",$param) and $param["MemoryTotalBytes"] !== null) {
            $this->MemoryTotalBytes = $param["MemoryTotalBytes"];
        }

        if (array_key_exists("NetworkReceiveMBPerSecond",$param) and $param["NetworkReceiveMBPerSecond"] !== null) {
            $this->NetworkReceiveMBPerSecond = $param["NetworkReceiveMBPerSecond"];
        }

        if (array_key_exists("NetworkSendMBPerSecond",$param) and $param["NetworkSendMBPerSecond"] !== null) {
            $this->NetworkSendMBPerSecond = $param["NetworkSendMBPerSecond"];
        }
    }
}
