<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGraphData请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getMetricName() 获取指标名: 
StorageRead: 存储读请求次数 
StorageWrite: 存储写请求次数 
StorageCdnOriginFlux: CDN回源流量, 单位字节 
CDNFlux: CDN回源流量, 单位字节 
FunctionInvocation: 云函数调用次数 
FunctionGBs: 云函数资源使用量, 单位Mb*Ms 
FunctionFlux: 云函数流量, 单位千字节(KB) 
FunctionError: 云函数调用错误次数 
FunctionDuration: 云函数运行时间, 单位毫秒 
DbRead: 数据库读请求数 
DbWrite: 数据库写请求数 
DbCostTime10ms: 数据库耗时在10ms~50ms请求数 
DbCostTime50ms: 数据库耗时在50ms~100ms请求数 
DbCostTime100ms: 数据库耗时在100ms以上请求数 
TkeCpuRatio: 容器CPU占用率 
TkeMemRatio: 容器内存占用率 
TkeCpuUsed: 容器CPU使用量 
TkeMemUsed: 容器内存使用量 
TkeInvokeNum: 调用量 
FunctionConcurrentExecutions: 云函数并发执行个数
FunctionIdleProvisioned: 云函数预置并发闲置量 
FunctionConcurrencyMemoryMB: 云函数并发执行内存量 
FunctionThrottle: 云函数受限次数 
FunctionProvisionedConcurrency: 云函数预置并发 
 * @method void setMetricName(string $MetricName) 设置指标名: 
StorageRead: 存储读请求次数 
StorageWrite: 存储写请求次数 
StorageCdnOriginFlux: CDN回源流量, 单位字节 
CDNFlux: CDN回源流量, 单位字节 
FunctionInvocation: 云函数调用次数 
FunctionGBs: 云函数资源使用量, 单位Mb*Ms 
FunctionFlux: 云函数流量, 单位千字节(KB) 
FunctionError: 云函数调用错误次数 
FunctionDuration: 云函数运行时间, 单位毫秒 
DbRead: 数据库读请求数 
DbWrite: 数据库写请求数 
DbCostTime10ms: 数据库耗时在10ms~50ms请求数 
DbCostTime50ms: 数据库耗时在50ms~100ms请求数 
DbCostTime100ms: 数据库耗时在100ms以上请求数 
TkeCpuRatio: 容器CPU占用率 
TkeMemRatio: 容器内存占用率 
TkeCpuUsed: 容器CPU使用量 
TkeMemUsed: 容器内存使用量 
TkeInvokeNum: 调用量 
FunctionConcurrentExecutions: 云函数并发执行个数
FunctionIdleProvisioned: 云函数预置并发闲置量 
FunctionConcurrencyMemoryMB: 云函数并发执行内存量 
FunctionThrottle: 云函数受限次数 
FunctionProvisionedConcurrency: 云函数预置并发 
 * @method string getStartTime() 获取开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟).
 * @method void setStartTime(string $StartTime) 设置开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟).
 * @method string getEndTime() 获取结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)..
 * @method void setEndTime(string $EndTime) 设置结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)..
 * @method string getResourceID() 获取资源ID, 目前仅对云函数、容器托管相关的指标有意义。云函数(FunctionInvocation, FunctionGBs, FunctionFlux, FunctionError, FunctionDuration)、容器托管（服务名称）, 如果想查询某个云函数的指标则在ResourceId中传入函数名; 如果只想查询整个namespace的指标, 则留空或不传.如果想查询数据库某个集合相关信息，传入集合名称
 * @method void setResourceID(string $ResourceID) 设置资源ID, 目前仅对云函数、容器托管相关的指标有意义。云函数(FunctionInvocation, FunctionGBs, FunctionFlux, FunctionError, FunctionDuration)、容器托管（服务名称）, 如果想查询某个云函数的指标则在ResourceId中传入函数名; 如果只想查询整个namespace的指标, 则留空或不传.如果想查询数据库某个集合相关信息，传入集合名称
 */
class DescribeGraphDataRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 指标名: 
StorageRead: 存储读请求次数 
StorageWrite: 存储写请求次数 
StorageCdnOriginFlux: CDN回源流量, 单位字节 
CDNFlux: CDN回源流量, 单位字节 
FunctionInvocation: 云函数调用次数 
FunctionGBs: 云函数资源使用量, 单位Mb*Ms 
FunctionFlux: 云函数流量, 单位千字节(KB) 
FunctionError: 云函数调用错误次数 
FunctionDuration: 云函数运行时间, 单位毫秒 
DbRead: 数据库读请求数 
DbWrite: 数据库写请求数 
DbCostTime10ms: 数据库耗时在10ms~50ms请求数 
DbCostTime50ms: 数据库耗时在50ms~100ms请求数 
DbCostTime100ms: 数据库耗时在100ms以上请求数 
TkeCpuRatio: 容器CPU占用率 
TkeMemRatio: 容器内存占用率 
TkeCpuUsed: 容器CPU使用量 
TkeMemUsed: 容器内存使用量 
TkeInvokeNum: 调用量 
FunctionConcurrentExecutions: 云函数并发执行个数
FunctionIdleProvisioned: 云函数预置并发闲置量 
FunctionConcurrencyMemoryMB: 云函数并发执行内存量 
FunctionThrottle: 云函数受限次数 
FunctionProvisionedConcurrency: 云函数预置并发 
     */
    public $MetricName;

    /**
     * @var string 开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟).
     */
    public $StartTime;

    /**
     * @var string 结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)..
     */
    public $EndTime;

    /**
     * @var string 资源ID, 目前仅对云函数、容器托管相关的指标有意义。云函数(FunctionInvocation, FunctionGBs, FunctionFlux, FunctionError, FunctionDuration)、容器托管（服务名称）, 如果想查询某个云函数的指标则在ResourceId中传入函数名; 如果只想查询整个namespace的指标, 则留空或不传.如果想查询数据库某个集合相关信息，传入集合名称
     */
    public $ResourceID;

    /**
     * @param string $EnvId 环境ID
     * @param string $MetricName 指标名: 
StorageRead: 存储读请求次数 
StorageWrite: 存储写请求次数 
StorageCdnOriginFlux: CDN回源流量, 单位字节 
CDNFlux: CDN回源流量, 单位字节 
FunctionInvocation: 云函数调用次数 
FunctionGBs: 云函数资源使用量, 单位Mb*Ms 
FunctionFlux: 云函数流量, 单位千字节(KB) 
FunctionError: 云函数调用错误次数 
FunctionDuration: 云函数运行时间, 单位毫秒 
DbRead: 数据库读请求数 
DbWrite: 数据库写请求数 
DbCostTime10ms: 数据库耗时在10ms~50ms请求数 
DbCostTime50ms: 数据库耗时在50ms~100ms请求数 
DbCostTime100ms: 数据库耗时在100ms以上请求数 
TkeCpuRatio: 容器CPU占用率 
TkeMemRatio: 容器内存占用率 
TkeCpuUsed: 容器CPU使用量 
TkeMemUsed: 容器内存使用量 
TkeInvokeNum: 调用量 
FunctionConcurrentExecutions: 云函数并发执行个数
FunctionIdleProvisioned: 云函数预置并发闲置量 
FunctionConcurrencyMemoryMB: 云函数并发执行内存量 
FunctionThrottle: 云函数受限次数 
FunctionProvisionedConcurrency: 云函数预置并发 
     * @param string $StartTime 开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟).
     * @param string $EndTime 结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)..
     * @param string $ResourceID 资源ID, 目前仅对云函数、容器托管相关的指标有意义。云函数(FunctionInvocation, FunctionGBs, FunctionFlux, FunctionError, FunctionDuration)、容器托管（服务名称）, 如果想查询某个云函数的指标则在ResourceId中传入函数名; 如果只想查询整个namespace的指标, 则留空或不传.如果想查询数据库某个集合相关信息，传入集合名称
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }
    }
}
