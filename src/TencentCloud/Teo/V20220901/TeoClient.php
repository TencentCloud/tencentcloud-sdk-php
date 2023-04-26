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

namespace TencentCloud\Teo\V20220901;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Teo\V20220901\Models as Models;

/**
 * @method Models\BindZoneToPlanResponse BindZoneToPlan(Models\BindZoneToPlanRequest $req) 将未绑定套餐的站点绑定到已有套餐
 * @method Models\CheckCertificateResponse CheckCertificate(Models\CheckCertificateRequest $req) 校验证书
 * @method Models\CreateAccelerationDomainResponse CreateAccelerationDomain(Models\CreateAccelerationDomainRequest $req) 创建加速域名
 * @method Models\CreateAliasDomainResponse CreateAliasDomain(Models\CreateAliasDomainRequest $req) 创建别称域名。
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) 创建应用代理
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) 创建应用代理规则
 * @method Models\CreateCredentialResponse CreateCredential(Models\CreateCredentialRequest $req) 用于创建COS回源私有凭证
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) 创建源站组
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) 为未购买套餐的站点购买套餐
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) 创建预热任务
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) 创建清除缓存任务
 * @method Models\CreateReplayTaskResponse CreateReplayTask(Models\CreateReplayTaskRequest $req) 创建刷新/预热重放任务
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 规则引擎创建规则。
 * @method Models\CreateSecurityIPGroupResponse CreateSecurityIPGroup(Models\CreateSecurityIPGroupRequest $req) 创建安全 IP 组
 * @method Models\CreateSpeedTestingResponse CreateSpeedTesting(Models\CreateSpeedTestingRequest $req) 对用户指定的域名进行一次站点拨测
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) 用于用户接入新的站点。
 * @method Models\DeleteAccelerationDomainsResponse DeleteAccelerationDomains(Models\DeleteAccelerationDomainsRequest $req) 批量删除加速域名
 * @method Models\DeleteAliasDomainResponse DeleteAliasDomain(Models\DeleteAliasDomainRequest $req) 删除别称域名。
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) 删除应用代理
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) 删除应用代理规则
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) 删除源站组
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) 批量删除规则引擎规则。
 * @method Models\DeleteSecurityIPGroupResponse DeleteSecurityIPGroup(Models\DeleteSecurityIPGroupRequest $req) 删除指定 IP 组，如果有规则引用了 IP 组情况，则不允许删除。
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) 删除站点。
 * @method Models\DescribeAccelerationDomainsResponse DescribeAccelerationDomains(Models\DescribeAccelerationDomainsRequest $req) 查询加速域名列表，支持搜索、分页、排序、过滤。
 * @method Models\DescribeAddableEntityListResponse DescribeAddableEntityList(Models\DescribeAddableEntityListRequest $req) 本接口（DescribeAddableEntityList）用于查询剩余可添加的日志推送实体列表。
 * @method Models\DescribeAliasDomainsResponse DescribeAliasDomains(Models\DescribeAliasDomainsRequest $req) 查询别称域名信息列表。
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) 查询应用代理列表。
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) 查询当前账户可用套餐信息列表
 * @method Models\DescribeClientRuleListResponse DescribeClientRuleList(Models\DescribeClientRuleListRequest $req) 本接口（DescribeClientRuleList）用于查询封禁客户端信息列表。
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) 查询内容管理接口配额
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) 本接口（DescribeDDoSAttackData）用于查询DDoS攻击时序数据。
 * @method Models\DescribeDDoSAttackEventResponse DescribeDDoSAttackEvent(Models\DescribeDDoSAttackEventRequest $req) 本接口（DescribeDDoSAttackEvent）用于查询DDoS攻击事件列表。
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) 本接口（DescribeDDoSAttackTopData）用于查询DDoS攻击Top数据。
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) 查询默认证书列表
 * @method Models\DescribeDnsDataResponse DescribeDnsData(Models\DescribeDnsDataRequest $req) 获取DNS请求数统计曲线
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) 用于查询域名配置信息
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) 查询站点的验证信息。
 * @method Models\DescribeLogSetsResponse DescribeLogSets(Models\DescribeLogSetsRequest $req) 本接口（DescribeLogSets）用于获取日志集列表。
 * @method Models\DescribeLogTopicTasksResponse DescribeLogTopicTasks(Models\DescribeLogTopicTasksRequest $req) 本接口（DescribeLogTopicTasks）用于获取日志推送任务列表。
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) 获取源站组列表
 * @method Models\DescribeOriginProtectionResponse DescribeOriginProtection(Models\DescribeOriginProtectionRequest $req) 查询源站防护信息
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) 本接口（DescribeOverviewL7Data）用于查询七层监控类时序流量数据。
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) 查询预热任务状态
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) 查询清除缓存历史记录
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询规则引擎规则。
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) 返回规则引擎可应用匹配请求的设置列表及其详细建议配置信息
 * @method Models\DescribeSingleL7AnalysisDataResponse DescribeSingleL7AnalysisData(Models\DescribeSingleL7AnalysisDataRequest $req) 本接口（DescribeSingleL7AnalysisData）用于查询七层流量数据分析单值数据列表，单值数据表示：指标在查询时间范围内的单个统计数据，通常表现为接口仅返回一个统计数值。
 * @method Models\DescribeSpeedTestingDetailsResponse DescribeSpeedTestingDetails(Models\DescribeSpeedTestingDetailsRequest $req) 用于查询拨测分地区数据
 * @method Models\DescribeSpeedTestingMetricDataResponse DescribeSpeedTestingMetricData(Models\DescribeSpeedTestingMetricDataRequest $req) 查询站点拨测结果
 * @method Models\DescribeSpeedTestingQuotaResponse DescribeSpeedTestingQuota(Models\DescribeSpeedTestingQuotaRequest $req) 查询站点拨测配额
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) 本接口（DescribeTimingL4Data）用于查询四层时序流量数据列表。
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) 本接口（DescribeTimingL7AnalysisData）查询七层数据分析类时序数据。
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) 本接口（DescribeTimingL7CacheData）用于查询七层缓存分析时序类流量数据。
 * @method Models\DescribeTimingL7SourceDataResponse DescribeTimingL7SourceData(Models\DescribeTimingL7SourceDataRequest $req) 本接口（DescribeTimingL7SourceData）查询七层回源分析时序数据。
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) 本接口（DescribeTopL7AnalysisData）用于查询七层流量前topN的数据。
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) 本接口（DescribeTopL7CacheData）用于查询七层缓存分析topN流量数据。
 * @method Models\DescribeWebManagedRulesDataResponse DescribeWebManagedRulesData(Models\DescribeWebManagedRulesDataRequest $req) 本接口（DescribeWebManagedRulesData）用于查询WAF攻击的时序数据。
 * @method Models\DescribeWebManagedRulesHitRuleDetailResponse DescribeWebManagedRulesHitRuleDetail(Models\DescribeWebManagedRulesHitRuleDetailRequest $req) 本接口（DescribeWebManagedRulesHitRuleDetail）用于查询WAF攻击命中规则详情。
 * @method Models\DescribeWebManagedRulesLogResponse DescribeWebManagedRulesLog(Models\DescribeWebManagedRulesLogRequest $req) 本接口（DescribeWebManagedRulesLog）用于查询Web攻击日志。
 * @method Models\DescribeWebProtectionClientIpListResponse DescribeWebProtectionClientIpList(Models\DescribeWebProtectionClientIpListRequest $req) 本接口（DescribeWebProtectionClientIpList）用于查询CC防护客户端（攻击源）IP信息。
 * @method Models\DescribeWebProtectionDataResponse DescribeWebProtectionData(Models\DescribeWebProtectionDataRequest $req) 本接口（DescribeWebProtectionData）用于查询CC防护时序数据。
 * @method Models\DescribeWebProtectionHitRuleDetailResponse DescribeWebProtectionHitRuleDetail(Models\DescribeWebProtectionHitRuleDetailRequest $req) 本接口（DescribeWebProtectionHitRuleDetail）用于查询CC防护命中规则详情列表。
 * @method Models\DescribeWebProtectionTopDataResponse DescribeWebProtectionTopData(Models\DescribeWebProtectionTopDataRequest $req) 本接口（DescribeWebProtectionTopData）用于查询CC防护的Top数据。
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) 用于查询站点的所有配置信息。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 用户查询用户站点信息列表，支持分页。
 * @method Models\DownloadL4LogsResponse DownloadL4Logs(Models\DownloadL4LogsRequest $req) 本接口（DownloadL4Logs）用于下载四层离线日志。
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) 本接口（DownloadL7Logs）下载七层离线日志。
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) 用于验证站点所有权。
 * @method Models\ModifyAccelerationDomainResponse ModifyAccelerationDomain(Models\ModifyAccelerationDomainRequest $req) 修改加速域名信息
 * @method Models\ModifyAccelerationDomainStatusesResponse ModifyAccelerationDomainStatuses(Models\ModifyAccelerationDomainStatusesRequest $req) 批量修改加速域名状态
 * @method Models\ModifyAliasDomainResponse ModifyAliasDomain(Models\ModifyAliasDomainRequest $req) 修改别称域名。
 * @method Models\ModifyAliasDomainStatusResponse ModifyAliasDomainStatus(Models\ModifyAliasDomainStatusRequest $req) 修改别称域名状态。
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) 修改应用代理
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) 修改应用代理规则
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) 修改应用代理规则的状态
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) 修改应用代理的状态
 * @method Models\ModifyDefaultCertificateResponse ModifyDefaultCertificate(Models\ModifyDefaultCertificateRequest $req) 修改默认证书状态
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) 用于修改域名证书
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) 修改源站组
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 修改规则引擎规则。
 * @method Models\ModifyRulePriorityResponse ModifyRulePriority(Models\ModifyRulePriorityRequest $req) 修改规则引擎规则优先级
 * @method Models\ModifySecurityIPGroupResponse ModifySecurityIPGroup(Models\ModifySecurityIPGroupRequest $req) 修改安全 IP 组。
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) 修改Web&Bot安全配置。
 * @method Models\ModifySecurityWafGroupPolicyResponse ModifySecurityWafGroupPolicy(Models\ModifySecurityWafGroupPolicyRequest $req) 修改安全配置托管规则
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) 修改站点信息。
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) 用于修改站点配置
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) 用于开启，关闭站点。
 * @method Models\ReclaimAliasDomainResponse ReclaimAliasDomain(Models\ReclaimAliasDomainRequest $req) 当客户取回站定的同时会取回此站点下关联的别称域名，此时入参为ZoneId；当客户接入站点发现已被别称域名接入时通过验证之后可取回域名，此时入参为ZoneName。
 * @method Models\ReclaimZoneResponse ReclaimZone(Models\ReclaimZoneRequest $req) 站点被其他用户接入后，验证了站点所有权之后，可以找回该站点。
 * @method Models\UpdateOriginProtectionIPWhitelistResponse UpdateOriginProtectionIPWhitelist(Models\UpdateOriginProtectionIPWhitelistRequest $req) 更新源站防护IP白名单
 */

class TeoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "teo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "teo";

    /**
     * @var string
     */
    protected $version = "2022-09-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("teo")."\\"."V20220901\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
