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

namespace TencentCloud\Teo\V20220106;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Teo\V20220106\Models as Models;

/**
 * @method Models\CheckCertificateResponse CheckCertificate(Models\CheckCertificateRequest $req) 校验证书
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) 创建应用代理
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) 创建应用代理规则
 * @method Models\CreateApplicationProxyRulesResponse CreateApplicationProxyRules(Models\CreateApplicationProxyRulesRequest $req) 批量创建应用代理规则
 * @method Models\CreateCustomErrorPageResponse CreateCustomErrorPage(Models\CreateCustomErrorPageRequest $req) 创建自定义规则的自定义页
 * @method Models\CreateDnsRecordResponse CreateDnsRecord(Models\CreateDnsRecordRequest $req) 创建 DNS 记录
 * @method Models\CreateLoadBalancingResponse CreateLoadBalancing(Models\CreateLoadBalancingRequest $req) 创建负载均衡
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) 源站组创建
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) 为未购买套餐的站点购买套餐
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) 创建预热任务
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) 创建清除缓存任务
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 规则引擎创建规则。
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) 用于用户接入新的站点
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) 删除应用代理
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) 删除应用代理规则
 * @method Models\DeleteDnsRecordsResponse DeleteDnsRecords(Models\DeleteDnsRecordsRequest $req) 批量删除 DNS 记录
 * @method Models\DeleteLoadBalancingResponse DeleteLoadBalancing(Models\DeleteLoadBalancingRequest $req) 删除负载均衡
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) 源站组删除
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) 批量删除规则引擎规则。
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) 删除站点
 * @method Models\DescribeApplicationProxyResponse DescribeApplicationProxy(Models\DescribeApplicationProxyRequest $req) 获取应用代理列表
 * @method Models\DescribeApplicationProxyDetailResponse DescribeApplicationProxyDetail(Models\DescribeApplicationProxyDetailRequest $req) 获取应用代理详细信息
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) 查询当前账户可用套餐信息列表
 * @method Models\DescribeBotLogResponse DescribeBotLog(Models\DescribeBotLogRequest $req) 查询Bot攻击日志
 * @method Models\DescribeBotManagedRulesResponse DescribeBotManagedRules(Models\DescribeBotManagedRulesRequest $req) 分页查询Bot托管规则
 * @method Models\DescribeCnameStatusResponse DescribeCnameStatus(Models\DescribeCnameStatusRequest $req) 查询域名 CNAME 状态
 * @method Models\DescribeDDoSPolicyResponse DescribeDDoSPolicy(Models\DescribeDDoSPolicyRequest $req) 查询DDoS防护配置详情
 * @method Models\DescribeDDosAttackDataResponse DescribeDDosAttackData(Models\DescribeDDosAttackDataRequest $req) 查询DDos攻击时序数据
 * @method Models\DescribeDDosAttackEventResponse DescribeDDosAttackEvent(Models\DescribeDDosAttackEventRequest $req) 查询DDos攻击事件
 * @method Models\DescribeDDosAttackEventDetailResponse DescribeDDosAttackEventDetail(Models\DescribeDDosAttackEventDetailRequest $req) 查询DDos攻击事件详情
 * @method Models\DescribeDDosAttackSourceEventResponse DescribeDDosAttackSourceEvent(Models\DescribeDDosAttackSourceEventRequest $req) 查询DDos攻击源信息
 * @method Models\DescribeDDosAttackTopDataResponse DescribeDDosAttackTopData(Models\DescribeDDosAttackTopDataRequest $req) 查询DDos攻击Top数据
 * @method Models\DescribeDDosMajorAttackEventResponse DescribeDDosMajorAttackEvent(Models\DescribeDDosMajorAttackEventRequest $req) 查询DDos主攻击事件
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) 查询默认证书列表
 * @method Models\DescribeDnsDataResponse DescribeDnsData(Models\DescribeDnsDataRequest $req) 获取DNS请求数统计曲线
 * @method Models\DescribeDnsRecordsResponse DescribeDnsRecords(Models\DescribeDnsRecordsRequest $req) 查询 DNS 记录列表，支持搜索、分页、排序、过滤。
 * @method Models\DescribeDnssecResponse DescribeDnssec(Models\DescribeDnssecRequest $req) 用于查询 DNSSEC 相关信息
 * @method Models\DescribeHostsCertificateResponse DescribeHostsCertificate(Models\DescribeHostsCertificateRequest $req) 查询域名证书列表，支持搜索、分页、排序、过滤。
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) 用于查询域名配置信息
 * @method Models\DescribeIdentificationResponse DescribeIdentification(Models\DescribeIdentificationRequest $req) 查询验证结果
 * @method Models\DescribeLoadBalancingResponse DescribeLoadBalancing(Models\DescribeLoadBalancingRequest $req) 获取负载均衡列表
 * @method Models\DescribeLoadBalancingDetailResponse DescribeLoadBalancingDetail(Models\DescribeLoadBalancingDetailRequest $req) 获取负载均衡详细信息
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) 获取源站组信息列表
 * @method Models\DescribeOriginGroupDetailResponse DescribeOriginGroupDetail(Models\DescribeOriginGroupDetailRequest $req) 获取源站组详细信息
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) 本接口（DescribeOverviewL7Data）用于查询七层监控类时序流量数据。
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) 查询预热任务状态
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) 查询清除缓存历史记录
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询规则引擎规则。
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) 返回规则引擎可应用匹配请求的设置列表及其详细建议配置信息
 * @method Models\DescribeSecurityPolicyResponse DescribeSecurityPolicy(Models\DescribeSecurityPolicyRequest $req) 查询安全防护配置详情
 * @method Models\DescribeSecurityPolicyListResponse DescribeSecurityPolicyList(Models\DescribeSecurityPolicyListRequest $req) 查询全部安全实例
 * @method Models\DescribeSecurityPolicyManagedRulesResponse DescribeSecurityPolicyManagedRules(Models\DescribeSecurityPolicyManagedRulesRequest $req) 分页查询门神规则
 * @method Models\DescribeSecurityPolicyManagedRulesIdResponse DescribeSecurityPolicyManagedRulesId(Models\DescribeSecurityPolicyManagedRulesIdRequest $req) 规则id查询门神规则详情
 * @method Models\DescribeSecurityPolicyRegionsResponse DescribeSecurityPolicyRegions(Models\DescribeSecurityPolicyRegionsRequest $req) 查询所有地域信息
 * @method Models\DescribeSecurityPortraitRulesResponse DescribeSecurityPortraitRules(Models\DescribeSecurityPortraitRulesRequest $req) 查询Bot用户画像规则
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) 四层时序流量数据查询
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) 查询七层数据分析类时序流量数据
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) 七层查询缓存分析时序类流量数据
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) 查询top类流量数据
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) 七层查询缓存分析top类流量数据
 * @method Models\DescribeWebManagedRulesAttackEventsResponse DescribeWebManagedRulesAttackEvents(Models\DescribeWebManagedRulesAttackEventsRequest $req) 查询Web托管攻击事件
 * @method Models\DescribeWebManagedRulesDataResponse DescribeWebManagedRulesData(Models\DescribeWebManagedRulesDataRequest $req) 查询waf攻击时序数据
 * @method Models\DescribeWebManagedRulesLogResponse DescribeWebManagedRulesLog(Models\DescribeWebManagedRulesLogRequest $req) 查询waf攻击日志
 * @method Models\DescribeWebManagedRulesTopDataResponse DescribeWebManagedRulesTopData(Models\DescribeWebManagedRulesTopDataRequest $req) 查询waf攻击top数据
 * @method Models\DescribeWebProtectionAttackEventsResponse DescribeWebProtectionAttackEvents(Models\DescribeWebProtectionAttackEventsRequest $req) 查询web防护攻击事件
 * @method Models\DescribeWebProtectionDataResponse DescribeWebProtectionData(Models\DescribeWebProtectionDataRequest $req) 查询CC防护时序数据
 * @method Models\DescribeWebProtectionLogResponse DescribeWebProtectionLog(Models\DescribeWebProtectionLogRequest $req) 查询CC防护日志
 * @method Models\DescribeZoneDDoSPolicyResponse DescribeZoneDDoSPolicy(Models\DescribeZoneDDoSPolicyRequest $req) 查询所有DDoS防护分区
 * @method Models\DescribeZoneDetailsResponse DescribeZoneDetails(Models\DescribeZoneDetailsRequest $req) 根据站点 ID 查询站点的详细信息
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) 用于查询站点的所有配置信息。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 用户查询用户站点信息列表，支持分页
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) 查询七层离线日志
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) 用于验证站点所有权
 * @method Models\ImportDnsRecordsResponse ImportDnsRecords(Models\ImportDnsRecordsRequest $req) 导入 DNS 记录
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) 修改应用代理
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) 修改应用代理规则
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) 修改应用代理规则的状态
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) 修改应用代理的状态
 * @method Models\ModifyDDoSPolicyResponse ModifyDDoSPolicy(Models\ModifyDDoSPolicyRequest $req) 修改DDoS防护分区配置
 * @method Models\ModifyDDoSPolicyHostResponse ModifyDDoSPolicyHost(Models\ModifyDDoSPolicyHostRequest $req) 域名DDoS高可用开关
 * @method Models\ModifyDefaultCertificateResponse ModifyDefaultCertificate(Models\ModifyDefaultCertificateRequest $req) 修改默认证书状态
 * @method Models\ModifyDnsRecordResponse ModifyDnsRecord(Models\ModifyDnsRecordRequest $req) 修改 DNS 记录
 * @method Models\ModifyDnssecResponse ModifyDnssec(Models\ModifyDnssecRequest $req) 修改 DNSSEC 状态
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) 用于修改域名证书
 * @method Models\ModifyLoadBalancingResponse ModifyLoadBalancing(Models\ModifyLoadBalancingRequest $req) 修改负载均衡
 * @method Models\ModifyLoadBalancingStatusResponse ModifyLoadBalancingStatus(Models\ModifyLoadBalancingStatusRequest $req) 修改负载均衡状态
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) 源站组修改
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 修改规则引擎规则。
 * @method Models\ModifyRulePriorityResponse ModifyRulePriority(Models\ModifyRulePriorityRequest $req) 修改规则引擎规则优先级
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) 修改Web&Bot安全配置
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) 用该站点信息
 * @method Models\ModifyZoneCnameSpeedUpResponse ModifyZoneCnameSpeedUp(Models\ModifyZoneCnameSpeedUpRequest $req) 开启，关闭 CNAME 加速
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) 用于修改站点配置
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) 用于开启，关闭站点
 * @method Models\ReclaimZoneResponse ReclaimZone(Models\ReclaimZoneRequest $req) 站点被其他用户接入后，验证了站点所有权之后，可以找回该站点
 * @method Models\ScanDnsRecordsResponse ScanDnsRecords(Models\ScanDnsRecordsRequest $req) 扫描站点历史解析记录
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
    protected $version = "2022-01-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("teo")."\\"."V20220106\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
