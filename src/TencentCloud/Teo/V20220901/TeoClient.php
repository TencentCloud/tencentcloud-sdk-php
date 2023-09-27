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
 * @method Models\CheckCnameStatusResponse CheckCnameStatus(Models\CheckCnameStatusRequest $req) 校验域名 CNAME 状态
 * @method Models\CreateAccelerationDomainResponse CreateAccelerationDomain(Models\CreateAccelerationDomainRequest $req) 在创建完站点之后，您可以通过本接口创建加速域名。 

CNAME 模式接入时，若您未完成站点归属权校验，本接口将为您返回域名归属权验证信息，您可以单独对域名进行归属权验证，详情参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789)。
 * @method Models\CreateAliasDomainResponse CreateAliasDomain(Models\CreateAliasDomainRequest $req) 创建别称域名。
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) 创建应用代理
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) 创建应用代理规则
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) 创建源站组
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) 为未购买套餐的站点购买套餐
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) 创建预热任务
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) 当源站资源更新，但节点缓存 TTL 未过期时，用户仍会访问到旧的资源，此时可以通过该接口实现节点资源更新。触发更新的方法有以下两种：<li>直接删除：不做任何校验，直接删除节点缓存，用户请求时触发回源拉取；</li><li>标记过期：将节点资源置为过期，用户请求时触发回源校验，即发送带有 If-None-Match 和 If-Modified-Since 头部的 HTTP 条件请求。若源站响应 200，则节点会回源拉取新的资源并更新缓存；若源站响应 304，则节点不会更新缓存；</li>

清除缓存任务详情请查看[清除缓存](https://cloud.tencent.com/document/product/1552/70759)。
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 规则引擎创建规则。
 * @method Models\CreateSecurityIPGroupResponse CreateSecurityIPGroup(Models\CreateSecurityIPGroupRequest $req) 创建安全 IP 组
 * @method Models\CreateSharedCNAMEResponse CreateSharedCNAME(Models\CreateSharedCNAMERequest $req) 创建共享 CNAME
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) EdgeOne 为您提供 CNAME、NS 和无域名接入三种接入方式，您需要先通过此接口完成站点创建。CNAME 和 NS 接入站点的场景可参考 [从零开始快速接入 EdgeOne](https://cloud.tencent.com/document/product/1552/87601); 无域名接入的场景可参考 [快速启用四层代理服务](https://cloud.tencent.com/document/product/1552/96051)。

> 建议您在账号下已存在套餐时调用本接口创建站点，请在入参时传入 PlanId ，直接将站点绑定至该套餐；不传入 PlanId 时，创建出来的站点会处于未激活状态，无法正常服务，您需要通过 [BindZoneToPlan](https://cloud.tencent.com/document/product/1552/83042) 完成套餐绑定之后，站点才可正常提供服务 。若您当前没有可绑定的套餐时，请前往控制台购买套餐完成站点创建。
 * @method Models\DeleteAccelerationDomainsResponse DeleteAccelerationDomains(Models\DeleteAccelerationDomainsRequest $req) 批量删除加速域名
 * @method Models\DeleteAliasDomainResponse DeleteAliasDomain(Models\DeleteAliasDomainRequest $req) 删除别称域名。
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) 删除应用代理
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) 删除应用代理规则
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) 删除源站组
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) 批量删除规则引擎规则。
 * @method Models\DeleteSecurityIPGroupResponse DeleteSecurityIPGroup(Models\DeleteSecurityIPGroupRequest $req) 删除指定 IP 组，如果有规则引用了 IP 组情况，则不允许删除。
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) 删除站点。
 * @method Models\DescribeAccelerationDomainsResponse DescribeAccelerationDomains(Models\DescribeAccelerationDomainsRequest $req) 您可以通过本接口查看站点下的域名信息，包括加速域名、源站以及域名状态等信息。您可以查看站点下全部域名的信息，也可以指定过滤条件查询对应的域名信息。
 * @method Models\DescribeAliasDomainsResponse DescribeAliasDomains(Models\DescribeAliasDomainsRequest $req) 查询别称域名信息列表。
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) 查询应用代理列表。
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) 查询当前账户可用套餐信息列表
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) 查询内容管理接口配额
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) 本接口（DescribeDDoSAttackData）用于查询DDoS攻击时序数据。
 * @method Models\DescribeDDoSAttackEventResponse DescribeDDoSAttackEvent(Models\DescribeDDoSAttackEventRequest $req) 本接口（DescribeDDoSAttackEvent）用于查询DDoS攻击事件列表。
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) 本接口（DescribeDDoSAttackTopData）用于查询DDoS攻击Top数据。
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) 查询默认证书列表
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) 用于查询域名配置信息
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) 查询站点的验证信息。
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) 获取源站组列表
 * @method Models\DescribeOriginProtectionResponse DescribeOriginProtection(Models\DescribeOriginProtectionRequest $req) 查询源站防护信息
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) 本接口（DescribeOverviewL7Data）用于查询七层监控类时序流量数据。
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) 查询预热任务状态
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) 查询清除缓存历史记录
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询规则引擎规则。
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) 返回规则引擎可应用匹配请求的设置列表及其详细建议配置信息
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) 本接口（DescribeTimingL4Data）用于查询四层时序流量数据列表。
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) 本接口（DescribeTimingL7AnalysisData）查询七层数据分析类时序数据。
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) 本接口（DescribeTimingL7CacheData）用于查询七层缓存分析时序类流量数据。
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) 本接口（DescribeTopL7AnalysisData）用于查询七层流量前topN的数据。
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) 本接口（DescribeTopL7CacheData）用于查询七层缓存分析topN流量数据。
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) 用于查询站点的所有配置信息。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 该接口用于查询您有权限的站点信息。可根据不同查询条件筛选站点。
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
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) 完成域名创建之后，您可以为域名配置自有证书，也可以使用 EdgeOne 为您提供的 [免费证书](https://cloud.tencent.com/document/product/1552/90437)。
如果您需要配置自有证书，请先将证书上传至 [SSL证书控制台](https://console.cloud.tencent.com/certoverview)，然后在本接口中传入对应的证书 ID。详情参考 [部署自有证书至 EdgeOne 域名
](https://cloud.tencent.com/document/product/1552/88874)。
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) 修改源站组
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 修改规则引擎规则。
 * @method Models\ModifySecurityIPGroupResponse ModifySecurityIPGroup(Models\ModifySecurityIPGroupRequest $req) 修改安全 IP 组。
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) 修改Web&Bot安全配置。
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) 修改站点信息。
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) 用于修改站点配置
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) 用于开启，关闭站点。
 * @method Models\VerifyOwnershipResponse VerifyOwnership(Models\VerifyOwnershipRequest $req) 在 CNAME 接入模式下，您需要对站点或者域名的归属权进行验证，可以通过本接口触发验证。若站点通过归属权验证后，后续添加域名无需再验证。详情参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789)。

在 NS 接入模式下，您也可以通过本接口来查询 NS 服务器是否切换成功，详情参考 [修改 DNS 服务器](https://cloud.tencent.com/document/product/1552/90452)。
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
