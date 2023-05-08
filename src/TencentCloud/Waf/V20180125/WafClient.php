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
 * @method Models\AddCustomRuleResponse AddCustomRule(Models\AddCustomRuleRequest $req) 增加访问控制（自定义策略）
 * @method Models\AddCustomWhiteRuleResponse AddCustomWhiteRule(Models\AddCustomWhiteRuleRequest $req) 增加精准白名单规则
 * @method Models\AddDomainWhiteRuleResponse AddDomainWhiteRule(Models\AddDomainWhiteRuleRequest $req) 增加域名规则白名单
 * @method Models\AddSpartaProtectionResponse AddSpartaProtection(Models\AddSpartaProtectionRequest $req) 添加Spart防护域名
 * @method Models\CreateAccessExportResponse CreateAccessExport(Models\CreateAccessExportRequest $req) 本接口用于创建访问日志导出
 * @method Models\CreateHostResponse CreateHost(Models\CreateHostRequest $req) clb-waf中添加防护的域名
 * @method Models\DeleteAccessExportResponse DeleteAccessExport(Models\DeleteAccessExportRequest $req) 本接口用于删除访问日志导出
 * @method Models\DeleteAttackDownloadRecordResponse DeleteAttackDownloadRecord(Models\DeleteAttackDownloadRecordRequest $req) 删除攻击日志下载任务记录
 * @method Models\DeleteCustomWhiteRuleResponse DeleteCustomWhiteRule(Models\DeleteCustomWhiteRuleRequest $req) 删除精准白名单规则
 * @method Models\DeleteDomainWhiteRulesResponse DeleteDomainWhiteRules(Models\DeleteDomainWhiteRulesRequest $req) 删除域名规则白名单
 * @method Models\DeleteDownloadRecordResponse DeleteDownloadRecord(Models\DeleteDownloadRecordRequest $req) 删除访问日志下载记录
 * @method Models\DeleteIpAccessControlResponse DeleteIpAccessControl(Models\DeleteIpAccessControlRequest $req) Waf IP黑白名单Delete接口
 * @method Models\DeleteSessionResponse DeleteSession(Models\DeleteSessionRequest $req) 删除CC攻击的session设置
 * @method Models\DescribeAccessExportsResponse DescribeAccessExports(Models\DescribeAccessExportsRequest $req) 本接口用于获取访问日志导出列表
 * @method Models\DescribeAccessFastAnalysisResponse DescribeAccessFastAnalysis(Models\DescribeAccessFastAnalysisRequest $req) 本接口用于访问日志的快速分析
 * @method Models\DescribeAccessIndexResponse DescribeAccessIndex(Models\DescribeAccessIndexRequest $req) 本接口用于获取访问日志索引配置信息
 * @method Models\DescribeAttackOverviewResponse DescribeAttackOverview(Models\DescribeAttackOverviewRequest $req) 攻击总览
 * @method Models\DescribeAutoDenyIPResponse DescribeAutoDenyIP(Models\DescribeAutoDenyIPRequest $req) 描述WAF自动封禁IP详情,对齐自动封堵状态
 * @method Models\DescribeCustomWhiteRuleResponse DescribeCustomWhiteRule(Models\DescribeCustomWhiteRuleRequest $req) 获取防护配置中的精准白名单策略列表
 * @method Models\DescribeDomainDetailsSaasResponse DescribeDomainDetailsSaas(Models\DescribeDomainDetailsSaasRequest $req) 查询单个saas域名详情
 * @method Models\DescribeDomainWhiteRulesResponse DescribeDomainWhiteRules(Models\DescribeDomainWhiteRulesRequest $req) 获取域名的规则白名单
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) 查询用户所有域名的详细信息
 * @method Models\DescribeFlowTrendResponse DescribeFlowTrend(Models\DescribeFlowTrendRequest $req) 获取waf流量访问趋势
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询用户所有实例的详细信息
 * @method Models\DescribeIpAccessControlResponse DescribeIpAccessControl(Models\DescribeIpAccessControlRequest $req) Waf ip黑白名单查询
 * @method Models\DescribeIpHitItemsResponse DescribeIpHitItems(Models\DescribeIpHitItemsRequest $req) Waf  IP封堵状态查询
 * @method Models\DescribePeakPointsResponse DescribePeakPoints(Models\DescribePeakPointsRequest $req) 查询业务和攻击概要趋势
 * @method Models\DescribePeakValueResponse DescribePeakValue(Models\DescribePeakValueRequest $req) 获取业务和攻击概览峰值
 * @method Models\DescribePolicyStatusResponse DescribePolicyStatus(Models\DescribePolicyStatusRequest $req) 获取防护状态以及生效的实例id
 * @method Models\DescribeRuleLimitResponse DescribeRuleLimit(Models\DescribeRuleLimitRequest $req) 获取各个模块具体的规格限制
 * @method Models\DescribeUserCdcClbWafRegionsResponse DescribeUserCdcClbWafRegions(Models\DescribeUserCdcClbWafRegionsRequest $req) 在CDC场景下，负载均衡型WAF的添加、编辑域名配置的时候，需要展示CDC负载均衡型WAF（cdc-clb-waf)支持的地域列表，通过DescribeUserCdcClbWafRegions既可以获得当前对客户已经开放的地域列表
 * @method Models\DescribeUserClbWafRegionsResponse DescribeUserClbWafRegions(Models\DescribeUserClbWafRegionsRequest $req) 在负载均衡型WAF的添加、编辑域名配置的时候，需要展示负载均衡型WAF（clb-waf)支持的地域列表，通过DescribeUserClbWafRegions既可以获得当前对客户已经开放的地域列表
 * @method Models\DescribeVipInfoResponse DescribeVipInfo(Models\DescribeVipInfoRequest $req) 根据过滤条件查询VIP信息
 * @method Models\DescribeWafAutoDenyRulesResponse DescribeWafAutoDenyRules(Models\DescribeWafAutoDenyRulesRequest $req) 返回ip惩罚规则详细信息
 * @method Models\DescribeWafAutoDenyStatusResponse DescribeWafAutoDenyStatus(Models\DescribeWafAutoDenyStatusRequest $req) 描述WAF自动封禁模块详情
 * @method Models\DescribeWafThreatenIntelligenceResponse DescribeWafThreatenIntelligence(Models\DescribeWafThreatenIntelligenceRequest $req) 描述WAF威胁情报封禁模块配置详情
 * @method Models\GetAttackDownloadRecordsResponse GetAttackDownloadRecords(Models\GetAttackDownloadRecordsRequest $req) 查询下载攻击日志任务记录列表
 * @method Models\ModifyAccessPeriodResponse ModifyAccessPeriod(Models\ModifyAccessPeriodRequest $req) 本接口用于修改访问日志保存期限及大字段是否存储
 * @method Models\ModifyAreaBanStatusResponse ModifyAreaBanStatus(Models\ModifyAreaBanStatusRequest $req) 修改防护域名的地域封禁状态
 * @method Models\ModifyCustomRuleStatusResponse ModifyCustomRuleStatus(Models\ModifyCustomRuleStatusRequest $req) 开启或禁用访问控制（自定义策略）
 * @method Models\ModifyCustomWhiteRuleResponse ModifyCustomWhiteRule(Models\ModifyCustomWhiteRuleRequest $req) 编辑精准白名单
 * @method Models\ModifyDomainWhiteRuleResponse ModifyDomainWhiteRule(Models\ModifyDomainWhiteRuleRequest $req) 更改某一条规则
 * @method Models\ModifyWafAutoDenyRulesResponse ModifyWafAutoDenyRules(Models\ModifyWafAutoDenyRulesRequest $req) 修改ip惩罚规则
 * @method Models\ModifyWafAutoDenyStatusResponse ModifyWafAutoDenyStatus(Models\ModifyWafAutoDenyStatusRequest $req) 配置WAF自动封禁模块状态
 * @method Models\ModifyWafThreatenIntelligenceResponse ModifyWafThreatenIntelligence(Models\ModifyWafThreatenIntelligenceRequest $req) 配置WAF威胁情报封禁模块详情
 * @method Models\PostAttackDownloadTaskResponse PostAttackDownloadTask(Models\PostAttackDownloadTaskRequest $req) 创建搜索下载攻击日志任务，使用CLS新版本的搜索下载getlog接口
 * @method Models\SearchAccessLogResponse SearchAccessLog(Models\SearchAccessLogRequest $req) 本接口用于搜索WAF访问日志
 * @method Models\SearchAttackLogResponse SearchAttackLog(Models\SearchAttackLogRequest $req) 新版本CLS接口存在参数变化，query改成了query_string支持lucence语法接口搜索查询。
 * @method Models\SwitchDomainRulesResponse SwitchDomainRules(Models\SwitchDomainRulesRequest $req) 切换域名的规则开关
 * @method Models\UpsertIpAccessControlResponse UpsertIpAccessControl(Models\UpsertIpAccessControlRequest $req) Waf IP黑白名单Upsert接口
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
