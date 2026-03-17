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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCurveData请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getMetricName() 获取<h4>文档型数据库相关指标</h4>
<li> DbRead: 数据库读请求数 </li>
<li> DbWrite: 数据库写请求数 </li>
<li> DbCostTime10ms: 数据库耗时在10ms-50ms请求数 </li>
<li> DbCostTime50ms: 数据库耗时在50ms-100ms请求数 </li>
<li> DbCostTime100ms: 数据库耗时在100ms以上请求数 </li>
<li> DbSizepkg: 数据库容量，单位MB </li>

<h4>SQL型数据库相关指标</h4>
<li> MysqlStorageUsage: 关系型数据库容量，单位MB </li>
<li> MysqlCCU: CCU </li>
<li> MysqlCpuUsageRate:CPU利用率 </li>
<li> MysqlDbConnections:数据库连接数 </li>
<li> MysqlMemoryUse: 内存使用量，单位MB </li>
<li> MysqlSlowQueries:慢查询数 </li>
<li> MysqlTps: 提交数 </li>
<li> MysqlQps: QPS </li>

<h4>云函数相关指标</h4>
<li> FunctionCU: 资源用量</li>
<li> FunctionInvocation: 调用次数 </li>
<li> FunctionFlux: 外网出流量, 单位千字节(KB) </li>
<li> FunctionThrottle: 受限次数 </li>
<li> FunctionConcurrentExecutions: 并发执行个数</li>
<li> FunctionTimeout: 函数执行超时次数</li>
<li> FunctionGBs: 资源用量, 单位Mb*Ms </li>
<li> FunctionError: 云错误次数 </li>
<li> FunctionDuration: 运行时间, 单位毫秒 </li>
<li> FunctionConcurrencyMemoryMB: 并发执行内存量 </li>
<li>FunctionMemOverFlow：内存超限次数</li>
<li> FunctionIdleProvisioned: 预置并发闲置量 </li>
<li> FunctionProvisionedConcurrency: 预置并发个数 </li>

<h4>云托管相关指标</h4>
<li>TkeRspTimeService ： 响应时间，单位毫秒</li>
<li>TkeCpuUsedService ： CPU使用量</li>
<li>TkeMemUsedService ： 内存使用量</li>
<li>TkeQPSService ： QPS</li>
<li>TkePodNumService ： 实例个数</li>
<li>TkeHttpServiceNatPkg ： 外网出流量，单位byte</li>
<li>TkeCUUsedService ： 内存使用量(CU单位)</li>
<li>TkeInvokeNumService ： 调用量</li>
<li>TkeHttpErrorService ： 错误响应（404、500等）</li>

<h4>静态网站托管相关指标</h4>
<li>StaticFsFluxPkg：流量，单位byte</li>
<li>StaticFsSizePkg：存储容量，单位MB</li>

<h4>身份认证相关指标</h4>
<li>AuthInvocationNumPkg：调用次数</li>

<h4>API调用相关指标</h4>
<li>GwCloudDevelopmentSecureCallsInvocation：云开发API调用次数</li>
<li>GwWXInvocation：小程序API调用次数</li>

<h4>HTTP网关相关指标</h4>
<li>GwCloudDevelopmentStandardCallsInvocation：HTTP调用次数</li>

<h4>大模型相关指标</h4>
<li>AIPromptTokenNumPkg：输入Token</li>
<li>AICompletionTokenNumPkg：输出Token</li>
<li>AITotalTokenNumPkg：总Token</li>

<h4>知识库相关指标</h4>
<li>KnowledgeBaseCapacity：容量，单位bytes</li>


<h4>用户登录相关指标</h4>
<li>DayActiveLoginAnonymousUser：匿名用户登陆日活</li>
<li>DayActiveLoginAllUser ： 全部用户登陆日活</li>
<li>DayActiveLoginExternalUser ： 外部用户登陆日活</li>
<li>DayActiveLoginInternalUser ： 内部用户登陆日活</li>
 * @method void setMetricName(string $MetricName) 设置<h4>文档型数据库相关指标</h4>
<li> DbRead: 数据库读请求数 </li>
<li> DbWrite: 数据库写请求数 </li>
<li> DbCostTime10ms: 数据库耗时在10ms-50ms请求数 </li>
<li> DbCostTime50ms: 数据库耗时在50ms-100ms请求数 </li>
<li> DbCostTime100ms: 数据库耗时在100ms以上请求数 </li>
<li> DbSizepkg: 数据库容量，单位MB </li>

<h4>SQL型数据库相关指标</h4>
<li> MysqlStorageUsage: 关系型数据库容量，单位MB </li>
<li> MysqlCCU: CCU </li>
<li> MysqlCpuUsageRate:CPU利用率 </li>
<li> MysqlDbConnections:数据库连接数 </li>
<li> MysqlMemoryUse: 内存使用量，单位MB </li>
<li> MysqlSlowQueries:慢查询数 </li>
<li> MysqlTps: 提交数 </li>
<li> MysqlQps: QPS </li>

<h4>云函数相关指标</h4>
<li> FunctionCU: 资源用量</li>
<li> FunctionInvocation: 调用次数 </li>
<li> FunctionFlux: 外网出流量, 单位千字节(KB) </li>
<li> FunctionThrottle: 受限次数 </li>
<li> FunctionConcurrentExecutions: 并发执行个数</li>
<li> FunctionTimeout: 函数执行超时次数</li>
<li> FunctionGBs: 资源用量, 单位Mb*Ms </li>
<li> FunctionError: 云错误次数 </li>
<li> FunctionDuration: 运行时间, 单位毫秒 </li>
<li> FunctionConcurrencyMemoryMB: 并发执行内存量 </li>
<li>FunctionMemOverFlow：内存超限次数</li>
<li> FunctionIdleProvisioned: 预置并发闲置量 </li>
<li> FunctionProvisionedConcurrency: 预置并发个数 </li>

<h4>云托管相关指标</h4>
<li>TkeRspTimeService ： 响应时间，单位毫秒</li>
<li>TkeCpuUsedService ： CPU使用量</li>
<li>TkeMemUsedService ： 内存使用量</li>
<li>TkeQPSService ： QPS</li>
<li>TkePodNumService ： 实例个数</li>
<li>TkeHttpServiceNatPkg ： 外网出流量，单位byte</li>
<li>TkeCUUsedService ： 内存使用量(CU单位)</li>
<li>TkeInvokeNumService ： 调用量</li>
<li>TkeHttpErrorService ： 错误响应（404、500等）</li>

<h4>静态网站托管相关指标</h4>
<li>StaticFsFluxPkg：流量，单位byte</li>
<li>StaticFsSizePkg：存储容量，单位MB</li>

<h4>身份认证相关指标</h4>
<li>AuthInvocationNumPkg：调用次数</li>

<h4>API调用相关指标</h4>
<li>GwCloudDevelopmentSecureCallsInvocation：云开发API调用次数</li>
<li>GwWXInvocation：小程序API调用次数</li>

<h4>HTTP网关相关指标</h4>
<li>GwCloudDevelopmentStandardCallsInvocation：HTTP调用次数</li>

<h4>大模型相关指标</h4>
<li>AIPromptTokenNumPkg：输入Token</li>
<li>AICompletionTokenNumPkg：输出Token</li>
<li>AITotalTokenNumPkg：总Token</li>

<h4>知识库相关指标</h4>
<li>KnowledgeBaseCapacity：容量，单位bytes</li>


<h4>用户登录相关指标</h4>
<li>DayActiveLoginAnonymousUser：匿名用户登陆日活</li>
<li>DayActiveLoginAllUser ： 全部用户登陆日活</li>
<li>DayActiveLoginExternalUser ： 外部用户登陆日活</li>
<li>DayActiveLoginInternalUser ： 内部用户登陆日活</li>
 * @method string getStartTime() 获取开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
 * @method void setStartTime(string $StartTime) 设置开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
 * @method string getEndTime() 获取结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
 * @method void setEndTime(string $EndTime) 设置结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
 * @method string getResourceID() 获取资源ID, 目前仅对文档型数据库、云函数、云托管相关的指标有意义。
如果想查询某个具体云函数/具体数据库集合的指标，则需传入对应的云函数名称/集合名称；如果只想查询整个namespace的指标, 则留空或不传。
云托管相关指标的查询，必须传入云托管服务名称。
 * @method void setResourceID(string $ResourceID) 设置资源ID, 目前仅对文档型数据库、云函数、云托管相关的指标有意义。
如果想查询某个具体云函数/具体数据库集合的指标，则需传入对应的云函数名称/集合名称；如果只想查询整个namespace的指标, 则留空或不传。
云托管相关指标的查询，必须传入云托管服务名称。
 * @method string getWxAppId() 获取微信AppId，微信必传
 * @method void setWxAppId(string $WxAppId) 设置微信AppId，微信必传
 * @method string getSubresourceID() 获取子资源信息。
查询云托管相关指标的具体版本的监控数据，需传入。
 * @method void setSubresourceID(string $SubresourceID) 设置子资源信息。
查询云托管相关指标的具体版本的监控数据，需传入。
 * @method string getThirdResource() 获取网关路由
 * @method void setThirdResource(string $ThirdResource) 设置网关路由
 * @method integer getPeriod() 获取统计周期(单位秒)，非必传，传入时仅支持传入300，3600，86400。不传采用默认以下默认规则：当时间区间为1天内, 统计周期为300；当时间区间选择为1天以上, 15天以下, 统计周期为3600； 当时间区间选择为15天以上, 180天以下, 统计周期为86400。
如果传入period，需遵循以下规则。EndTime-StartTime的时间范围不超过1 天，Period可以取300或3600；EndTime-StartTime的时间范围满足超过1天且不超过3 天，Period可以取300或3600或86400；EndTime-StartTime的时间范围超过3天时，Period可以取3600或86400。
 * @method void setPeriod(integer $Period) 设置统计周期(单位秒)，非必传，传入时仅支持传入300，3600，86400。不传采用默认以下默认规则：当时间区间为1天内, 统计周期为300；当时间区间选择为1天以上, 15天以下, 统计周期为3600； 当时间区间选择为15天以上, 180天以下, 统计周期为86400。
如果传入period，需遵循以下规则。EndTime-StartTime的时间范围不超过1 天，Period可以取300或3600；EndTime-StartTime的时间范围满足超过1天且不超过3 天，Period可以取300或3600或86400；EndTime-StartTime的时间范围超过3天时，Period可以取3600或86400。
 */
class DescribeCurveDataRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string <h4>文档型数据库相关指标</h4>
<li> DbRead: 数据库读请求数 </li>
<li> DbWrite: 数据库写请求数 </li>
<li> DbCostTime10ms: 数据库耗时在10ms-50ms请求数 </li>
<li> DbCostTime50ms: 数据库耗时在50ms-100ms请求数 </li>
<li> DbCostTime100ms: 数据库耗时在100ms以上请求数 </li>
<li> DbSizepkg: 数据库容量，单位MB </li>

<h4>SQL型数据库相关指标</h4>
<li> MysqlStorageUsage: 关系型数据库容量，单位MB </li>
<li> MysqlCCU: CCU </li>
<li> MysqlCpuUsageRate:CPU利用率 </li>
<li> MysqlDbConnections:数据库连接数 </li>
<li> MysqlMemoryUse: 内存使用量，单位MB </li>
<li> MysqlSlowQueries:慢查询数 </li>
<li> MysqlTps: 提交数 </li>
<li> MysqlQps: QPS </li>

<h4>云函数相关指标</h4>
<li> FunctionCU: 资源用量</li>
<li> FunctionInvocation: 调用次数 </li>
<li> FunctionFlux: 外网出流量, 单位千字节(KB) </li>
<li> FunctionThrottle: 受限次数 </li>
<li> FunctionConcurrentExecutions: 并发执行个数</li>
<li> FunctionTimeout: 函数执行超时次数</li>
<li> FunctionGBs: 资源用量, 单位Mb*Ms </li>
<li> FunctionError: 云错误次数 </li>
<li> FunctionDuration: 运行时间, 单位毫秒 </li>
<li> FunctionConcurrencyMemoryMB: 并发执行内存量 </li>
<li>FunctionMemOverFlow：内存超限次数</li>
<li> FunctionIdleProvisioned: 预置并发闲置量 </li>
<li> FunctionProvisionedConcurrency: 预置并发个数 </li>

<h4>云托管相关指标</h4>
<li>TkeRspTimeService ： 响应时间，单位毫秒</li>
<li>TkeCpuUsedService ： CPU使用量</li>
<li>TkeMemUsedService ： 内存使用量</li>
<li>TkeQPSService ： QPS</li>
<li>TkePodNumService ： 实例个数</li>
<li>TkeHttpServiceNatPkg ： 外网出流量，单位byte</li>
<li>TkeCUUsedService ： 内存使用量(CU单位)</li>
<li>TkeInvokeNumService ： 调用量</li>
<li>TkeHttpErrorService ： 错误响应（404、500等）</li>

<h4>静态网站托管相关指标</h4>
<li>StaticFsFluxPkg：流量，单位byte</li>
<li>StaticFsSizePkg：存储容量，单位MB</li>

<h4>身份认证相关指标</h4>
<li>AuthInvocationNumPkg：调用次数</li>

<h4>API调用相关指标</h4>
<li>GwCloudDevelopmentSecureCallsInvocation：云开发API调用次数</li>
<li>GwWXInvocation：小程序API调用次数</li>

<h4>HTTP网关相关指标</h4>
<li>GwCloudDevelopmentStandardCallsInvocation：HTTP调用次数</li>

<h4>大模型相关指标</h4>
<li>AIPromptTokenNumPkg：输入Token</li>
<li>AICompletionTokenNumPkg：输出Token</li>
<li>AITotalTokenNumPkg：总Token</li>

<h4>知识库相关指标</h4>
<li>KnowledgeBaseCapacity：容量，单位bytes</li>


<h4>用户登录相关指标</h4>
<li>DayActiveLoginAnonymousUser：匿名用户登陆日活</li>
<li>DayActiveLoginAllUser ： 全部用户登陆日活</li>
<li>DayActiveLoginExternalUser ： 外部用户登陆日活</li>
<li>DayActiveLoginInternalUser ： 内部用户登陆日活</li>
     */
    public $MetricName;

    /**
     * @var string 开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
     */
    public $StartTime;

    /**
     * @var string 结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
     */
    public $EndTime;

    /**
     * @var string 资源ID, 目前仅对文档型数据库、云函数、云托管相关的指标有意义。
如果想查询某个具体云函数/具体数据库集合的指标，则需传入对应的云函数名称/集合名称；如果只想查询整个namespace的指标, 则留空或不传。
云托管相关指标的查询，必须传入云托管服务名称。
     */
    public $ResourceID;

    /**
     * @var string 微信AppId，微信必传
     */
    public $WxAppId;

    /**
     * @var string 子资源信息。
查询云托管相关指标的具体版本的监控数据，需传入。
     */
    public $SubresourceID;

    /**
     * @var string 网关路由
     */
    public $ThirdResource;

    /**
     * @var integer 统计周期(单位秒)，非必传，传入时仅支持传入300，3600，86400。不传采用默认以下默认规则：当时间区间为1天内, 统计周期为300；当时间区间选择为1天以上, 15天以下, 统计周期为3600； 当时间区间选择为15天以上, 180天以下, 统计周期为86400。
如果传入period，需遵循以下规则。EndTime-StartTime的时间范围不超过1 天，Period可以取300或3600；EndTime-StartTime的时间范围满足超过1天且不超过3 天，Period可以取300或3600或86400；EndTime-StartTime的时间范围超过3天时，Period可以取3600或86400。
     */
    public $Period;

    /**
     * @param string $EnvId 环境ID
     * @param string $MetricName <h4>文档型数据库相关指标</h4>
<li> DbRead: 数据库读请求数 </li>
<li> DbWrite: 数据库写请求数 </li>
<li> DbCostTime10ms: 数据库耗时在10ms-50ms请求数 </li>
<li> DbCostTime50ms: 数据库耗时在50ms-100ms请求数 </li>
<li> DbCostTime100ms: 数据库耗时在100ms以上请求数 </li>
<li> DbSizepkg: 数据库容量，单位MB </li>

<h4>SQL型数据库相关指标</h4>
<li> MysqlStorageUsage: 关系型数据库容量，单位MB </li>
<li> MysqlCCU: CCU </li>
<li> MysqlCpuUsageRate:CPU利用率 </li>
<li> MysqlDbConnections:数据库连接数 </li>
<li> MysqlMemoryUse: 内存使用量，单位MB </li>
<li> MysqlSlowQueries:慢查询数 </li>
<li> MysqlTps: 提交数 </li>
<li> MysqlQps: QPS </li>

<h4>云函数相关指标</h4>
<li> FunctionCU: 资源用量</li>
<li> FunctionInvocation: 调用次数 </li>
<li> FunctionFlux: 外网出流量, 单位千字节(KB) </li>
<li> FunctionThrottle: 受限次数 </li>
<li> FunctionConcurrentExecutions: 并发执行个数</li>
<li> FunctionTimeout: 函数执行超时次数</li>
<li> FunctionGBs: 资源用量, 单位Mb*Ms </li>
<li> FunctionError: 云错误次数 </li>
<li> FunctionDuration: 运行时间, 单位毫秒 </li>
<li> FunctionConcurrencyMemoryMB: 并发执行内存量 </li>
<li>FunctionMemOverFlow：内存超限次数</li>
<li> FunctionIdleProvisioned: 预置并发闲置量 </li>
<li> FunctionProvisionedConcurrency: 预置并发个数 </li>

<h4>云托管相关指标</h4>
<li>TkeRspTimeService ： 响应时间，单位毫秒</li>
<li>TkeCpuUsedService ： CPU使用量</li>
<li>TkeMemUsedService ： 内存使用量</li>
<li>TkeQPSService ： QPS</li>
<li>TkePodNumService ： 实例个数</li>
<li>TkeHttpServiceNatPkg ： 外网出流量，单位byte</li>
<li>TkeCUUsedService ： 内存使用量(CU单位)</li>
<li>TkeInvokeNumService ： 调用量</li>
<li>TkeHttpErrorService ： 错误响应（404、500等）</li>

<h4>静态网站托管相关指标</h4>
<li>StaticFsFluxPkg：流量，单位byte</li>
<li>StaticFsSizePkg：存储容量，单位MB</li>

<h4>身份认证相关指标</h4>
<li>AuthInvocationNumPkg：调用次数</li>

<h4>API调用相关指标</h4>
<li>GwCloudDevelopmentSecureCallsInvocation：云开发API调用次数</li>
<li>GwWXInvocation：小程序API调用次数</li>

<h4>HTTP网关相关指标</h4>
<li>GwCloudDevelopmentStandardCallsInvocation：HTTP调用次数</li>

<h4>大模型相关指标</h4>
<li>AIPromptTokenNumPkg：输入Token</li>
<li>AICompletionTokenNumPkg：输出Token</li>
<li>AITotalTokenNumPkg：总Token</li>

<h4>知识库相关指标</h4>
<li>KnowledgeBaseCapacity：容量，单位bytes</li>


<h4>用户登录相关指标</h4>
<li>DayActiveLoginAnonymousUser：匿名用户登陆日活</li>
<li>DayActiveLoginAllUser ： 全部用户登陆日活</li>
<li>DayActiveLoginExternalUser ： 外部用户登陆日活</li>
<li>DayActiveLoginInternalUser ： 内部用户登陆日活</li>
     * @param string $StartTime 开始时间，如2018-08-24 10:50:00, 开始时间需要早于结束时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
     * @param string $EndTime 结束时间，如2018-08-24 10:50:00, 结束时间需要晚于开始时间至少五分钟(原因是因为目前统计粒度最小是5分钟)
     * @param string $ResourceID 资源ID, 目前仅对文档型数据库、云函数、云托管相关的指标有意义。
如果想查询某个具体云函数/具体数据库集合的指标，则需传入对应的云函数名称/集合名称；如果只想查询整个namespace的指标, 则留空或不传。
云托管相关指标的查询，必须传入云托管服务名称。
     * @param string $WxAppId 微信AppId，微信必传
     * @param string $SubresourceID 子资源信息。
查询云托管相关指标的具体版本的监控数据，需传入。
     * @param string $ThirdResource 网关路由
     * @param integer $Period 统计周期(单位秒)，非必传，传入时仅支持传入300，3600，86400。不传采用默认以下默认规则：当时间区间为1天内, 统计周期为300；当时间区间选择为1天以上, 15天以下, 统计周期为3600； 当时间区间选择为15天以上, 180天以下, 统计周期为86400。
如果传入period，需遵循以下规则。EndTime-StartTime的时间范围不超过1 天，Period可以取300或3600；EndTime-StartTime的时间范围满足超过1天且不超过3 天，Period可以取300或3600或86400；EndTime-StartTime的时间范围超过3天时，Period可以取3600或86400。
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

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }

        if (array_key_exists("SubresourceID",$param) and $param["SubresourceID"] !== null) {
            $this->SubresourceID = $param["SubresourceID"];
        }

        if (array_key_exists("ThirdResource",$param) and $param["ThirdResource"] !== null) {
            $this->ThirdResource = $param["ThirdResource"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
