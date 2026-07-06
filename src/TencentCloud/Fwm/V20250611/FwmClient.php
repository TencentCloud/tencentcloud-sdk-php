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

namespace TencentCloud\Fwm\V20250611;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Fwm\V20250611\Models as Models;

/**
 * @method Models\CancelIgnorePolicyRiskResponse CancelIgnorePolicyRisk(Models\CancelIgnorePolicyRiskRequest $req) 取消忽略策略风险
 * @method Models\CreateAnalyzePolicyTaskResponse CreateAnalyzePolicyTask(Models\CreateAnalyzePolicyTaskRequest $req) 创建策略风险分析任务
 * @method Models\CreateEdgeAclRuleResponse CreateEdgeAclRule(Models\CreateEdgeAclRuleRequest $req) 向已有的互联网边界ACL规则组中添加规则。需要先创建规则组，然后通过此接口添加规则。
 * @method Models\CreateEdgeAclRuleGroupResponse CreateEdgeAclRuleGroup(Models\CreateEdgeAclRuleGroupRequest $req) 创建互联网边界ACL规则组，支持同时创建多条规则。Product 必须为 cfw_edge_acl。规则支持 IP、域名、参数模板、实例、标签等多种源/目标类型。
 * @method Models\CreateNatAclRuleResponse CreateNatAclRule(Models\CreateNatAclRuleRequest $req) 在已有规则组中添加NAT ACL规则
 * @method Models\CreateNatAclRuleGroupResponse CreateNatAclRuleGroup(Models\CreateNatAclRuleGroupRequest $req) 创建NAT ACL规则组（NAT边界防火墙规则组管理）
 * @method Models\CreateSecurityGroupRuleResponse CreateSecurityGroupRule(Models\CreateSecurityGroupRuleRequest $req) 规则组编辑时添加规则（规则组管理）
 * @method Models\CreateSecurityGroupRuleGroupResponse CreateSecurityGroupRuleGroup(Models\CreateSecurityGroupRuleGroupRequest $req) 创建规则组（规则组管理）
 * @method Models\CreateStrategyResponse CreateStrategy(Models\CreateStrategyRequest $req) 创建策略
 * @method Models\CreateVpcAclRuleResponse CreateVpcAclRule(Models\CreateVpcAclRuleRequest $req) 在已有规则组中添加VPC ACL规则
 * @method Models\CreateVpcAclRuleGroupResponse CreateVpcAclRuleGroup(Models\CreateVpcAclRuleGroupRequest $req) 创建VPC ACL规则组（VPC间防火墙规则组管理）
 * @method Models\DeleteEdgeAclRuleResponse DeleteEdgeAclRule(Models\DeleteEdgeAclRuleRequest $req) 批量删除互联网边界ACL规则。支持一次删除多条规则。
 * @method Models\DeleteNatAclRuleResponse DeleteNatAclRule(Models\DeleteNatAclRuleRequest $req) 删除NAT ACL规则
 * @method Models\DeleteRuleGroupResponse DeleteRuleGroup(Models\DeleteRuleGroupRequest $req) 删除规则组
 * @method Models\DeleteSecurityGroupRuleResponse DeleteSecurityGroupRule(Models\DeleteSecurityGroupRuleRequest $req) 删除规则（规则组管理）
 * @method Models\DeleteStrategyResponse DeleteStrategy(Models\DeleteStrategyRequest $req) 删除策略
 * @method Models\DeleteVpcAclRuleResponse DeleteVpcAclRule(Models\DeleteVpcAclRuleRequest $req) 删除VPC ACL规则
 * @method Models\DescribeEdgeAclRulesResponse DescribeEdgeAclRules(Models\DescribeEdgeAclRulesRequest $req) 查询指定规则组下的互联网边界ACL规则列表。支持分页和多种过滤条件。
 * @method Models\DescribeNatAclRulesResponse DescribeNatAclRules(Models\DescribeNatAclRulesRequest $req) 查询NAT ACL规则列表
 * @method Models\DescribeOrganMembersResponse DescribeOrganMembers(Models\DescribeOrganMembersRequest $req) 查询集团下所有纳管成员账号列表，支持分页、排序和多条件筛选，仅管理员可调用
 * @method Models\DescribeOrganSummaryResponse DescribeOrganSummary(Models\DescribeOrganSummaryRequest $req) 获取集团概览信息，包括集团名称、管理员信息、成员数量等
 * @method Models\DescribePolicyRiskAccountProductStatsResponse DescribePolicyRiskAccountProductStats(Models\DescribePolicyRiskAccountProductStatsRequest $req) 查询账号+产品维度风险统计，按账号分组返回各产品的体检策略数、待整改风险数、整改率、最近体检时间等信息，支持按账号名称/ID搜索以及仅看待整改、仅超时未体检筛选
 * @method Models\DescribeRiskAnalysisDetailsResponse DescribeRiskAnalysisDetails(Models\DescribeRiskAnalysisDetailsRequest $req) 获取实时分析风险详情
 * @method Models\DescribeRiskCategoryStatsResponse DescribeRiskCategoryStats(Models\DescribeRiskCategoryStatsRequest $req) 查询策略体检风险分类统计数据,包含各类风险的规则数量、处置状态、整改率等信息
 * @method Models\DescribeRiskListResponse DescribeRiskList(Models\DescribeRiskListRequest $req) 查询用户所有规则的策略问题
 * @method Models\DescribeSecurityGroupRuleResponse DescribeSecurityGroupRule(Models\DescribeSecurityGroupRuleRequest $req) 查询规则详情（规则组管理）
 * @method Models\DescribeSecurityGroupRulesResponse DescribeSecurityGroupRules(Models\DescribeSecurityGroupRulesRequest $req) 查询规则组中规则列表接口
 * @method Models\DescribeStrategiesResponse DescribeStrategies(Models\DescribeStrategiesRequest $req) 查询策略列表
 * @method Models\DescribeStrategyResponse DescribeStrategy(Models\DescribeStrategyRequest $req) 查询策略详情
 * @method Models\DescribeStrategyAccountsResponse DescribeStrategyAccounts(Models\DescribeStrategyAccountsRequest $req) 查看防火墙管理规则下发账号列表
 * @method Models\DescribeStrategyDispatchStatusResponse DescribeStrategyDispatchStatus(Models\DescribeStrategyDispatchStatusRequest $req) 查询策略下发状态
 * @method Models\DescribeVpcAclRulesResponse DescribeVpcAclRules(Models\DescribeVpcAclRulesRequest $req) 查询VPC ACL规则列表
 * @method Models\DispatchStrategyResponse DispatchStrategy(Models\DispatchStrategyRequest $req) 下发策略
 * @method Models\IgnorePolicyRiskResponse IgnorePolicyRisk(Models\IgnorePolicyRiskRequest $req) 忽略策略问题
 * @method Models\ModifyEdgeAclRuleResponse ModifyEdgeAclRule(Models\ModifyEdgeAclRuleRequest $req) 修改互联网边界ACL规则。Rule 参数中必须包含 RuleId 用于指定要修改的规则。
 * @method Models\ModifyEdgeAclRuleSequenceResponse ModifyEdgeAclRuleSequence(Models\ModifyEdgeAclRuleSequenceRequest $req) 批量调整互联网边界ACL规则的执行顺序。Sequences 参数必须包含所有受影响的规则序号映射关系。
 * @method Models\ModifyNatAclRuleResponse ModifyNatAclRule(Models\ModifyNatAclRuleRequest $req) 修改NAT ACL规则
 * @method Models\ModifyNatAclRuleSequenceResponse ModifyNatAclRuleSequence(Models\ModifyNatAclRuleSequenceRequest $req) 调整NAT ACL规则优先级顺序
 * @method Models\ModifyRuleGroupResponse ModifyRuleGroup(Models\ModifyRuleGroupRequest $req) 修改规则组信息（规则组管理）
 * @method Models\ModifySecurityGroupRuleResponse ModifySecurityGroupRule(Models\ModifySecurityGroupRuleRequest $req) 修改规则（规则组管理）
 * @method Models\ModifyStrategyResponse ModifyStrategy(Models\ModifyStrategyRequest $req) 修改策略信息
 * @method Models\ModifyStrategySequenceResponse ModifyStrategySequence(Models\ModifyStrategySequenceRequest $req) 快速排序修改策略优先级
 * @method Models\ModifyVpcAclRuleResponse ModifyVpcAclRule(Models\ModifyVpcAclRuleRequest $req) 修改VPC ACL规则
 * @method Models\ModifyVpcAclRuleSequenceResponse ModifyVpcAclRuleSequence(Models\ModifyVpcAclRuleSequenceRequest $req) 调整VPC ACL规则优先级顺序
 */

class FwmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "fwm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "fwm";

    /**
     * @var string
     */
    protected $version = "2025-06-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("fwm")."\\"."V20250611\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
