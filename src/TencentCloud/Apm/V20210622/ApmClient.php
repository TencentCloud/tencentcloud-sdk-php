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

namespace TencentCloud\Apm\V20210622;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apm\V20210622\Models as Models;

/**
 * @method Models\CreateApmInstanceResponse CreateApmInstance(Models\CreateApmInstanceRequest $req) 业务购买 APM 业务系统，调用该接口创建
 * @method Models\CreateApmPrometheusRuleResponse CreateApmPrometheusRule(Models\CreateApmPrometheusRuleRequest $req) 用于创建apm业务系统与Prometheus实例的指标匹配规则
 * @method Models\CreateApmSampleConfigResponse CreateApmSampleConfig(Models\CreateApmSampleConfigRequest $req) 创建采样配置接口
 * @method Models\CreateProfileTaskResponse CreateProfileTask(Models\CreateProfileTaskRequest $req) 创建事件任务
 * @method Models\DeleteApmSampleConfigResponse DeleteApmSampleConfig(Models\DeleteApmSampleConfigRequest $req) 删除采样配置接口
 * @method Models\DescribeApmAgentResponse DescribeApmAgent(Models\DescribeApmAgentRequest $req) 获取 APM 接入点
 * @method Models\DescribeApmApplicationConfigResponse DescribeApmApplicationConfig(Models\DescribeApmApplicationConfigRequest $req) 查询应用配置接口
 * @method Models\DescribeApmAssociationResponse DescribeApmAssociation(Models\DescribeApmAssociationRequest $req) 用于查询apm业务系统与其他产品的关联关系
 * @method Models\DescribeApmInstancesResponse DescribeApmInstances(Models\DescribeApmInstancesRequest $req) 获取 APM 业务系统列表
 * @method Models\DescribeApmPrometheusRuleResponse DescribeApmPrometheusRule(Models\DescribeApmPrometheusRuleRequest $req) 用于查询apm业务系统与Prometheus实例的指标匹配规则
 * @method Models\DescribeApmSampleConfigResponse DescribeApmSampleConfig(Models\DescribeApmSampleConfigRequest $req) 查询采样配置接口
 * @method Models\DescribeApmServiceMetricResponse DescribeApmServiceMetric(Models\DescribeApmServiceMetricRequest $req) 获取 APM 应用指标列表
 * @method Models\DescribeGeneralApmApplicationConfigResponse DescribeGeneralApmApplicationConfig(Models\DescribeGeneralApmApplicationConfigRequest $req) 查询应用配置信息
 * @method Models\DescribeGeneralMetricDataResponse DescribeGeneralMetricData(Models\DescribeGeneralMetricDataRequest $req) 获取指标数据通用接口。用户根据需要上送请求参数，返回对应的指标数据。
接口调用频率限制为：20次/秒，1200次/分钟。单请求的数据点数限制为1440个。

获取指标数据通用接口用法：DescribeGeneralMetricData 是通用的指标数据查询接口，支持灵活的获取指标数据。该接口的查询方式类似于使用如下 SQL 语句：SELECT {Metrics} FROM {ViewName} WHERE {Filters} GROUP BY {GroupBy}。在发起请求前，请确定如下关键入参：
1. 视图（ViewName）
决定您要查询的数据领域。
例如：service_metric（服务监控视图）、db_metric（数据库视图）等。关于 APM 支持的视图，请参考 [指标视图](https://cloud.tencent.com/document/product/248/101681#069b06a9-2593-49db-b694-dea4200f3b19)。

2. 指标（Metrics）
用于指定返回结果中包含的一个或多个指标项。
例如：request_count（请求数）、duration_avg（平均耗时）、error_rate（错误率）。关于APM 支持的指标，请参考 [APM 指标协议标准](https://cloud.tencent.com/document/product/248/101681)，每种视图（ViewName）支持专属的指标集。
3. 过滤（Filters）
支持一个或多个键值对（Key-Value）形式的过滤条件。
例如：只查某个特定服务 service.name = "order-service"。通用维度和每种视图（ViewName）支持专属专属维度，可以用作过滤条件中的键（Key），更多详情请参考 [APM 指标协议标准](https://cloud.tencent.com/document/product/248/101681)。

4. 聚合（GroupBy）
支持一个或多个聚合维度，相当于 SQL 的 GROUP BY。
例如：按接口名称 operation 分组，查看每个接口的性能。通用维度和每种视图（ViewName）支持专属专属维度，可以用作聚合维度，更多详情请参考 [APM 指标协议标准](https://cloud.tencent.com/document/product/248/101681)。
5. 粒度 (Period) 
该参数决定了是否需要以时间切片聚合。
    - Period = 1：时间序列模式：返回结果中按时间切片聚合，时间序列（TimeSerial）和数据序列（DataSerial）中包含的多个值一一对应，分别代表特定时间切片上的聚合结果。时间序列模式主要用于展示时间趋势图。
    - Period = 0：汇总统计模式：返回结果中，数据序列（DataSerial）中只包含唯一的值，代表整个时间区间内的汇总数据。
 * @method Models\DescribeGeneralOTSpanListResponse DescribeGeneralOTSpanList(Models\DescribeGeneralOTSpanListRequest $req) 通用查询 OpenTelemetry 调用链列表
 * @method Models\DescribeGeneralSpanListResponse DescribeGeneralSpanList(Models\DescribeGeneralSpanListRequest $req) 通用查询调用链列表
 * @method Models\DescribeMetricRecordsResponse DescribeMetricRecords(Models\DescribeMetricRecordsRequest $req) 查询指标列表接口，查询指标更推荐使用DescribeGeneralMetricData接口
 * @method Models\DescribeServiceOverviewResponse DescribeServiceOverview(Models\DescribeServiceOverviewRequest $req) 应用概览数据拉取
 * @method Models\DescribeTagValuesResponse DescribeTagValues(Models\DescribeTagValuesRequest $req) 根据维度名和过滤条件，查询维度数据.
 * @method Models\DescribeTopologyNewResponse DescribeTopologyNew(Models\DescribeTopologyNewRequest $req) 根据应用名查询服务拓扑图
 * @method Models\ModifyApmApplicationConfigResponse ModifyApmApplicationConfig(Models\ModifyApmApplicationConfigRequest $req) 修改应用配置接口
 * @method Models\ModifyApmAssociationResponse ModifyApmAssociation(Models\ModifyApmAssociationRequest $req) 用于修改apm业务系统与其他产品的关联关系（包括创建和删除）
 * @method Models\ModifyApmInstanceResponse ModifyApmInstance(Models\ModifyApmInstanceRequest $req) 修改APM业务系统接口
 * @method Models\ModifyApmPrometheusRuleResponse ModifyApmPrometheusRule(Models\ModifyApmPrometheusRuleRequest $req) 用于修改apm业务系统与Prometheus实例的指标匹配规则
 * @method Models\ModifyApmSampleConfigResponse ModifyApmSampleConfig(Models\ModifyApmSampleConfigRequest $req) 修改采样配置接口
 * @method Models\ModifyGeneralApmApplicationConfigResponse ModifyGeneralApmApplicationConfig(Models\ModifyGeneralApmApplicationConfigRequest $req) 对外开放的openApi，客户可以灵活的指定需要修改的字段，再加入需要修改的服务列表.
 * @method Models\TerminateApmInstanceResponse TerminateApmInstance(Models\TerminateApmInstanceRequest $req) 销毁 APM 业务系统
 */

class ApmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apm";

    /**
     * @var string
     */
    protected $version = "2021-06-22";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("apm")."\\"."V20210622\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
