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

namespace TencentCloud\Waf\V20180125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Waf\V20180125\Models as Models;

/**
 * @method Models\AddAntiFakeUrlResponse AddAntiFakeUrl(Models\AddAntiFakeUrlRequest $req) 添加防篡改url
 * @method Models\AddAntiInfoLeakRulesResponse AddAntiInfoLeakRules(Models\AddAntiInfoLeakRulesRequest $req) 添加信息防泄漏规则
 * @method Models\AddCustomRuleResponse AddCustomRule(Models\AddCustomRuleRequest $req) 增加访问控制（自定义策略）
 * @method Models\AddCustomWhiteRuleResponse AddCustomWhiteRule(Models\AddCustomWhiteRuleRequest $req) 增加精准白名单规则
 * @method Models\AddDomainWhiteRuleResponse AddDomainWhiteRule(Models\AddDomainWhiteRuleRequest $req) 增加域名规则白名单
 * @method Models\AddSpartaProtectionResponse AddSpartaProtection(Models\AddSpartaProtectionRequest $req) 添加SaaS型WAF防护域名
 * @method Models\CreateAccessExportResponse CreateAccessExport(Models\CreateAccessExportRequest $req) 本接口用于创建访问日志导出
 * @method Models\CreateHostResponse CreateHost(Models\CreateHostRequest $req) clb-waf中添加防护域名
 * @method Models\DeleteAccessExportResponse DeleteAccessExport(Models\DeleteAccessExportRequest $req) 本接口用于删除访问日志导出
 * @method Models\DeleteAntiFakeUrlResponse DeleteAntiFakeUrl(Models\DeleteAntiFakeUrlRequest $req) 删除防篡改url
 * @method Models\DeleteAntiInfoLeakRuleResponse DeleteAntiInfoLeakRule(Models\DeleteAntiInfoLeakRuleRequest $req) 信息防泄漏删除规则
 * @method Models\DeleteAttackDownloadRecordResponse DeleteAttackDownloadRecord(Models\DeleteAttackDownloadRecordRequest $req) 删除攻击日志下载任务记录
 * @method Models\DeleteCCRuleResponse DeleteCCRule(Models\DeleteCCRuleRequest $req) Waf  CC V2 Delete接口
 * @method Models\DeleteCustomRuleResponse DeleteCustomRule(Models\DeleteCustomRuleRequest $req) 删除自定义规则
 * @method Models\DeleteCustomWhiteRuleResponse DeleteCustomWhiteRule(Models\DeleteCustomWhiteRuleRequest $req) 删除精准白名单规则
 * @method Models\DeleteDomainWhiteRulesResponse DeleteDomainWhiteRules(Models\DeleteDomainWhiteRulesRequest $req) 删除域名规则白名单
 * @method Models\DeleteDownloadRecordResponse DeleteDownloadRecord(Models\DeleteDownloadRecordRequest $req) 删除访问日志下载记录
 * @method Models\DeleteHostResponse DeleteHost(Models\DeleteHostRequest $req) 删除CLB-WAF防护域名
支持批量操作
 * @method Models\DeleteIpAccessControlResponse DeleteIpAccessControl(Models\DeleteIpAccessControlRequest $req) Waf IP黑白名单Delete接口
 * @method Models\DeleteSessionResponse DeleteSession(Models\DeleteSessionRequest $req) 删除CC攻击的session设置
 * @method Models\DeleteSpartaProtectionResponse DeleteSpartaProtection(Models\DeleteSpartaProtectionRequest $req) Saas型WAF删除防护域名
 * @method Models\DescribeAccessExportsResponse DescribeAccessExports(Models\DescribeAccessExportsRequest $req) 本接口用于获取访问日志导出列表
 * @method Models\DescribeAccessFastAnalysisResponse DescribeAccessFastAnalysis(Models\DescribeAccessFastAnalysisRequest $req) 本接口用于访问日志的快速分析
 * @method Models\DescribeAccessHistogramResponse DescribeAccessHistogram(Models\DescribeAccessHistogramRequest $req) 本接口用于访问日志柱状趋势图
 * @method Models\DescribeAccessIndexResponse DescribeAccessIndex(Models\DescribeAccessIndexRequest $req) 本接口用于获取访问日志索引配置信息
 * @method Models\DescribeAntiFakeRulesResponse DescribeAntiFakeRules(Models\DescribeAntiFakeRulesRequest $req) 获取防篡改url
 * @method Models\DescribeAntiFakeUrlResponse DescribeAntiFakeUrl(Models\DescribeAntiFakeUrlRequest $req) 获取防篡改url
 * @method Models\DescribeAntiInfoLeakRulesResponse DescribeAntiInfoLeakRules(Models\DescribeAntiInfoLeakRulesRequest $req) 老接口已经不再使用。

获取信息防泄漏规则列表
 * @method Models\DescribeAntiInfoLeakageRulesResponse DescribeAntiInfoLeakageRules(Models\DescribeAntiInfoLeakageRulesRequest $req) 取得信息防泄漏规则列表
 * @method Models\DescribeAttackOverviewResponse DescribeAttackOverview(Models\DescribeAttackOverviewRequest $req) 攻击总览
 * @method Models\DescribeAutoDenyIPResponse DescribeAutoDenyIP(Models\DescribeAutoDenyIPRequest $req) 接口已废弃

描述WAF自动封禁IP详情,对齐自动封堵状态
 * @method Models\DescribeBatchIpAccessControlResponse DescribeBatchIpAccessControl(Models\DescribeBatchIpAccessControlRequest $req) Waf 多域名ip黑白名单查询
 * @method Models\DescribeCCRuleResponse DescribeCCRule(Models\DescribeCCRuleRequest $req) Waf  CC V2 Query接口
 * @method Models\DescribeCCRuleListResponse DescribeCCRuleList(Models\DescribeCCRuleListRequest $req) 根据多条件查询CC规则
 * @method Models\DescribeCertificateVerifyResultResponse DescribeCertificateVerifyResult(Models\DescribeCertificateVerifyResultRequest $req) 获取证书的检查结果
 * @method Models\DescribeCiphersDetailResponse DescribeCiphersDetail(Models\DescribeCiphersDetailRequest $req) Saas型WAF接入查询加密套件信息
 * @method Models\DescribeCustomRuleListResponse DescribeCustomRuleList(Models\DescribeCustomRuleListRequest $req) 获取防护配置中的访问控制策略列表
 * @method Models\DescribeCustomWhiteRuleResponse DescribeCustomWhiteRule(Models\DescribeCustomWhiteRuleRequest $req) 获取防护配置中的精准白名单策略列表
 * @method Models\DescribeDomainCountInfoResponse DescribeDomainCountInfo(Models\DescribeDomainCountInfoRequest $req) 获取域名概况
 * @method Models\DescribeDomainDetailsClbResponse DescribeDomainDetailsClb(Models\DescribeDomainDetailsClbRequest $req) 获取一个clbwaf域名详情
 * @method Models\DescribeDomainDetailsSaasResponse DescribeDomainDetailsSaas(Models\DescribeDomainDetailsSaasRequest $req) 查询单个saaswaf域名详情
 * @method Models\DescribeDomainVerifyResultResponse DescribeDomainVerifyResult(Models\DescribeDomainVerifyResultRequest $req) 获取添加域名操作的结果
 * @method Models\DescribeDomainWhiteRulesResponse DescribeDomainWhiteRules(Models\DescribeDomainWhiteRulesRequest $req) 获取域名的规则白名单
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) 查询用户所有域名的详细信息
 * @method Models\DescribeFindDomainListResponse DescribeFindDomainList(Models\DescribeFindDomainListRequest $req) 获取发现域名列表接口
 * @method Models\DescribeFlowTrendResponse DescribeFlowTrend(Models\DescribeFlowTrendRequest $req) 获取waf流量访问趋势
 * @method Models\DescribeHostResponse DescribeHost(Models\DescribeHostRequest $req) clb-waf获取防护域名详情
 * @method Models\DescribeHostLimitResponse DescribeHostLimit(Models\DescribeHostLimitRequest $req) 添加域名的首先验证是否购买了套餐，是否没有达到购买套餐的限制，域名是否已经添加
 * @method Models\DescribeHostsResponse DescribeHosts(Models\DescribeHostsRequest $req) clb-waf中获取防护域名列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询用户所有实例的详细信息
 * @method Models\DescribeIpAccessControlResponse DescribeIpAccessControl(Models\DescribeIpAccessControlRequest $req) Waf ip黑白名单查询
 * @method Models\DescribeIpHitItemsResponse DescribeIpHitItems(Models\DescribeIpHitItemsRequest $req) Waf  IP封堵状态查询
 * @method Models\DescribePeakPointsResponse DescribePeakPoints(Models\DescribePeakPointsRequest $req) 查询业务和攻击概要趋势
 * @method Models\DescribePeakValueResponse DescribePeakValue(Models\DescribePeakValueRequest $req) 获取业务和攻击概览峰值
 * @method Models\DescribePolicyStatusResponse DescribePolicyStatus(Models\DescribePolicyStatusRequest $req) 获取防护状态以及生效的实例id
 * @method Models\DescribePortsResponse DescribePorts(Models\DescribePortsRequest $req) 获取Saas型WAF防护端口列表
 * @method Models\DescribeRuleLimitResponse DescribeRuleLimit(Models\DescribeRuleLimitRequest $req) 获取各个模块具体的规格限制
 * @method Models\DescribeSessionResponse DescribeSession(Models\DescribeSessionRequest $req) Waf 会话定义查询接口
 * @method Models\DescribeTlsVersionResponse DescribeTlsVersion(Models\DescribeTlsVersionRequest $req) 查询用户TLS版本
 * @method Models\DescribeUserCdcClbWafRegionsResponse DescribeUserCdcClbWafRegions(Models\DescribeUserCdcClbWafRegionsRequest $req) 在CDC场景下，负载均衡型WAF的添加、编辑域名配置的时候，需要展示CDC负载均衡型WAF（cdc-clb-waf)支持的地域列表，通过DescribeUserCdcClbWafRegions既可以获得当前对客户已经开放的地域列表
 * @method Models\DescribeUserClbWafRegionsResponse DescribeUserClbWafRegions(Models\DescribeUserClbWafRegionsRequest $req) 在负载均衡型WAF的添加、编辑域名配置的时候，需要展示负载均衡型WAF（clb-waf)支持的地域列表，通过DescribeUserClbWafRegions既可以获得当前对客户已经开放的地域列表
 * @method Models\DescribeUserDomainInfoResponse DescribeUserDomainInfo(Models\DescribeUserDomainInfoRequest $req) 查询saas和clb的域名信息
 * @method Models\DescribeVipInfoResponse DescribeVipInfo(Models\DescribeVipInfoRequest $req) 根据过滤条件查询VIP信息
 * @method Models\DescribeWafAutoDenyRulesResponse DescribeWafAutoDenyRules(Models\DescribeWafAutoDenyRulesRequest $req) 返回ip惩罚规则详细信息
 * @method Models\DescribeWafAutoDenyStatusResponse DescribeWafAutoDenyStatus(Models\DescribeWafAutoDenyStatusRequest $req) 描述WAF自动封禁模块详情
 * @method Models\DescribeWafInfoResponse DescribeWafInfo(Models\DescribeWafInfoRequest $req) 获取负载均衡绑定的WAF信息，可以根据租户负载均衡实例ID、负载均衡监听器ID、负载均衡的域名信息来查询对应绑定的 Waf的状态信息。
查询的范围：负载均衡实例ID、负载均衡实例ID+监听器ID、负载均衡实例ID+监听器ID+域名。
可能的错误码：ResourceNotFound（没有找到对应的资源）、UnsupportedRegion（目前clb-waf只支持北京、广州、上海、成都、重庆、香港地域）。

 * @method Models\DescribeWafThreatenIntelligenceResponse DescribeWafThreatenIntelligence(Models\DescribeWafThreatenIntelligenceRequest $req) 描述WAF威胁情报封禁模块配置详情
 * @method Models\FreshAntiFakeUrlResponse FreshAntiFakeUrl(Models\FreshAntiFakeUrlRequest $req) 刷新防篡改url
 * @method Models\GenerateDealsAndPayNewResponse GenerateDealsAndPayNew(Models\GenerateDealsAndPayNewRequest $req) 计费资源购买、续费下单接口
 * @method Models\GetAttackDownloadRecordsResponse GetAttackDownloadRecords(Models\GetAttackDownloadRecordsRequest $req) 查询下载攻击日志任务记录列表
 * @method Models\GetAttackHistogramResponse GetAttackHistogram(Models\GetAttackHistogramRequest $req) 生成攻击日志的产生时间柱状图
 * @method Models\GetAttackTotalCountResponse GetAttackTotalCount(Models\GetAttackTotalCountRequest $req) 按照条件查询展示攻击总次数
 * @method Models\GetInstanceQpsLimitResponse GetInstanceQpsLimit(Models\GetInstanceQpsLimitRequest $req) 获取套餐实例的弹性qps上限
 * @method Models\ModifyAccessPeriodResponse ModifyAccessPeriod(Models\ModifyAccessPeriodRequest $req) 本接口用于修改访问日志保存期限及大字段是否存储
 * @method Models\ModifyAntiFakeUrlResponse ModifyAntiFakeUrl(Models\ModifyAntiFakeUrlRequest $req) 编辑防篡改url
 * @method Models\ModifyAntiFakeUrlStatusResponse ModifyAntiFakeUrlStatus(Models\ModifyAntiFakeUrlStatusRequest $req) 切换防篡改开关
 * @method Models\ModifyAntiInfoLeakRuleStatusResponse ModifyAntiInfoLeakRuleStatus(Models\ModifyAntiInfoLeakRuleStatusRequest $req) 信息防泄漏切换规则开关
 * @method Models\ModifyAntiInfoLeakRulesResponse ModifyAntiInfoLeakRules(Models\ModifyAntiInfoLeakRulesRequest $req) 编辑信息防泄漏规则
 * @method Models\ModifyApiAnalyzeStatusResponse ModifyApiAnalyzeStatus(Models\ModifyApiAnalyzeStatusRequest $req) api分析页面开关
 * @method Models\ModifyAreaBanStatusResponse ModifyAreaBanStatus(Models\ModifyAreaBanStatusRequest $req) 修改防护域名的地域封禁状态
 * @method Models\ModifyBotStatusResponse ModifyBotStatus(Models\ModifyBotStatusRequest $req) Bot_V2 bot总开关更新
 * @method Models\ModifyCustomRuleResponse ModifyCustomRule(Models\ModifyCustomRuleRequest $req) 编辑自定义规则
 * @method Models\ModifyCustomRuleStatusResponse ModifyCustomRuleStatus(Models\ModifyCustomRuleStatusRequest $req) 开启或禁用访问控制（自定义策略）
 * @method Models\ModifyCustomWhiteRuleResponse ModifyCustomWhiteRule(Models\ModifyCustomWhiteRuleRequest $req) 编辑精准白名单
 * @method Models\ModifyCustomWhiteRuleStatusResponse ModifyCustomWhiteRuleStatus(Models\ModifyCustomWhiteRuleStatusRequest $req) 开启或禁用精准白名单
 * @method Models\ModifyDomainIpv6StatusResponse ModifyDomainIpv6Status(Models\ModifyDomainIpv6StatusRequest $req) 切换ipv6开关
 * @method Models\ModifyDomainWhiteRuleResponse ModifyDomainWhiteRule(Models\ModifyDomainWhiteRuleRequest $req) 更改某一条规则
 * @method Models\ModifyDomainsCLSStatusResponse ModifyDomainsCLSStatus(Models\ModifyDomainsCLSStatusRequest $req) 修改域名列表的访问日志开关
 * @method Models\ModifyHostResponse ModifyHost(Models\ModifyHostRequest $req) clb-waf编辑防护域名配置
 * @method Models\ModifyHostFlowModeResponse ModifyHostFlowMode(Models\ModifyHostFlowModeRequest $req) clb-waf 设置防护域名的流量模式
 * @method Models\ModifyHostModeResponse ModifyHostMode(Models\ModifyHostModeRequest $req) clb-waf设置防护域名防护状态
 * @method Models\ModifyHostStatusResponse ModifyHostStatus(Models\ModifyHostStatusRequest $req) clb-waf 设置防护域名WAF开关
支持批量操作。
 * @method Models\ModifyInstanceElasticModeResponse ModifyInstanceElasticMode(Models\ModifyInstanceElasticModeRequest $req) 修改实例的QPS弹性计费开关
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) 修改实例的名称
 * @method Models\ModifyInstanceQpsLimitResponse ModifyInstanceQpsLimit(Models\ModifyInstanceQpsLimitRequest $req) 设置套餐实例的弹性qps上限
 * @method Models\ModifyInstanceRenewFlagResponse ModifyInstanceRenewFlag(Models\ModifyInstanceRenewFlagRequest $req) 修改实例的自动续费开关
 * @method Models\ModifyProtectionStatusResponse ModifyProtectionStatus(Models\ModifyProtectionStatusRequest $req) waf斯巴达-waf开关
 * @method Models\ModifySpartaProtectionResponse ModifySpartaProtection(Models\ModifySpartaProtectionRequest $req) 修改域名配置
 * @method Models\ModifySpartaProtectionModeResponse ModifySpartaProtectionMode(Models\ModifySpartaProtectionModeRequest $req) 设置waf防护状态
 * @method Models\ModifyWafAutoDenyRulesResponse ModifyWafAutoDenyRules(Models\ModifyWafAutoDenyRulesRequest $req) 修改ip惩罚规则
 * @method Models\ModifyWafAutoDenyStatusResponse ModifyWafAutoDenyStatus(Models\ModifyWafAutoDenyStatusRequest $req) 配置WAF自动封禁模块状态
 * @method Models\ModifyWafThreatenIntelligenceResponse ModifyWafThreatenIntelligence(Models\ModifyWafThreatenIntelligenceRequest $req) 配置WAF威胁情报封禁模块详情
 * @method Models\PostAttackDownloadTaskResponse PostAttackDownloadTask(Models\PostAttackDownloadTaskRequest $req) 创建搜索下载攻击日志任务，使用CLS新版本的搜索下载getlog接口
 * @method Models\RefreshAccessCheckResultResponse RefreshAccessCheckResult(Models\RefreshAccessCheckResultRequest $req) 刷新接入检查的结果，后台会生成接入检查任务
 * @method Models\SearchAccessLogResponse SearchAccessLog(Models\SearchAccessLogRequest $req) 本接口用于搜索WAF访问日志
 * @method Models\SearchAttackLogResponse SearchAttackLog(Models\SearchAttackLogRequest $req) 新版本CLS接口存在参数变化，query改成了query_string支持lucence语法接口搜索查询。
 * @method Models\SwitchDomainRulesResponse SwitchDomainRules(Models\SwitchDomainRulesRequest $req) 切换域名的规则开关
 * @method Models\SwitchElasticModeResponse SwitchElasticMode(Models\SwitchElasticModeRequest $req) 切换弹性的开关
 * @method Models\UpsertCCRuleResponse UpsertCCRule(Models\UpsertCCRuleRequest $req) Waf  CC V2 Upsert接口
 * @method Models\UpsertIpAccessControlResponse UpsertIpAccessControl(Models\UpsertIpAccessControlRequest $req) Waf IP黑白名单Upsert接口
 * @method Models\UpsertSessionResponse UpsertSession(Models\UpsertSessionRequest $req) Waf  会话定义 Upsert接口
 */

class WafClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "waf.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "waf";

    /**
     * @var string
     */
    protected $version = "2018-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("waf")."\\"."V20180125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
