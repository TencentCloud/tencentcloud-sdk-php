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

namespace TencentCloud\Config\V20220802;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Config\V20220802\Models as Models;

/**
 * @method Models\AddAggregateCompliancePackResponse AddAggregateCompliancePack(Models\AddAggregateCompliancePackRequest $req) 账号组新建合规包
 * @method Models\AddAggregateConfigRuleResponse AddAggregateConfigRule(Models\AddAggregateConfigRuleRequest $req) 账号组新建规则
 * @method Models\AddCompliancePackResponse AddCompliancePack(Models\AddCompliancePackRequest $req) 新建合规包
 * @method Models\AddConfigRuleResponse AddConfigRule(Models\AddConfigRuleRequest $req) 新建 规则
 * @method Models\CloseAggregateConfigRuleResponse CloseAggregateConfigRule(Models\CloseAggregateConfigRuleRequest $req) 账号组关闭规则
 * @method Models\CloseConfigRecorderResponse CloseConfigRecorder(Models\CloseConfigRecorderRequest $req) 资源监控管理-关闭监控
 * @method Models\CloseConfigRuleResponse CloseConfigRule(Models\CloseConfigRuleRequest $req) 关闭规则
 * @method Models\CreateAggregatorResponse CreateAggregator(Models\CreateAggregatorRequest $req) 新建账号组
 * @method Models\CreateRemediationResponse CreateRemediation(Models\CreateRemediationRequest $req) 新增规则修正设置
 * @method Models\DeleteAggregateCompliancePackResponse DeleteAggregateCompliancePack(Models\DeleteAggregateCompliancePackRequest $req) 账号组删除合规包
 * @method Models\DeleteAggregateConfigRuleResponse DeleteAggregateConfigRule(Models\DeleteAggregateConfigRuleRequest $req) 账号组删除规则
 * @method Models\DeleteCompliancePackResponse DeleteCompliancePack(Models\DeleteCompliancePackRequest $req) 删除合规包
 * @method Models\DeleteConfigRuleResponse DeleteConfigRule(Models\DeleteConfigRuleRequest $req) 删除规则
 * @method Models\DeleteRemediationsResponse DeleteRemediations(Models\DeleteRemediationsRequest $req) 删除规则修正设置
 * @method Models\DescribeAggregateCompliancePackResponse DescribeAggregateCompliancePack(Models\DescribeAggregateCompliancePackRequest $req) 账号组合规包详情
 * @method Models\DescribeAggregateConfigDeliverResponse DescribeAggregateConfigDeliver(Models\DescribeAggregateConfigDeliverRequest $req) 账号组获取投递设置详情
 * @method Models\DescribeAggregateConfigRuleResponse DescribeAggregateConfigRule(Models\DescribeAggregateConfigRuleRequest $req) 账号组获取规则详情
 * @method Models\DescribeAggregateDiscoveredResourceResponse DescribeAggregateDiscoveredResource(Models\DescribeAggregateDiscoveredResourceRequest $req) 账号组资源详情
 * @method Models\DescribeAggregatorResponse DescribeAggregator(Models\DescribeAggregatorRequest $req) 账号组详情
 * @method Models\DescribeCompliancePackResponse DescribeCompliancePack(Models\DescribeCompliancePackRequest $req) 合规包详情
 * @method Models\DescribeConfigDeliverResponse DescribeConfigDeliver(Models\DescribeConfigDeliverRequest $req) 获取投递设置详情
 * @method Models\DescribeConfigRecorderResponse DescribeConfigRecorder(Models\DescribeConfigRecorderRequest $req) 获取监控详情
 * @method Models\DescribeConfigRuleResponse DescribeConfigRule(Models\DescribeConfigRuleRequest $req) 获取规则详情
 * @method Models\DescribeDiscoveredResourceResponse DescribeDiscoveredResource(Models\DescribeDiscoveredResourceRequest $req) 资源详情
 * @method Models\DescribeSystemCompliancePackResponse DescribeSystemCompliancePack(Models\DescribeSystemCompliancePackRequest $req) 获取系统合规包详情
 * @method Models\DescribeSystemRuleResponse DescribeSystemRule(Models\DescribeSystemRuleRequest $req) 预设规则详情
 * @method Models\DetachAggregateConfigRuleToCompliancePackResponse DetachAggregateConfigRuleToCompliancePack(Models\DetachAggregateConfigRuleToCompliancePackRequest $req) 账号组合规包移除规则
 * @method Models\DetachConfigRuleToCompliancePackResponse DetachConfigRuleToCompliancePack(Models\DetachConfigRuleToCompliancePackRequest $req) 合规包移除规则
 * @method Models\ListAggregateCompliancePacksResponse ListAggregateCompliancePacks(Models\ListAggregateCompliancePacksRequest $req) 账号组获取合规包列表
 * @method Models\ListAggregateConfigRuleEvaluationResultsResponse ListAggregateConfigRuleEvaluationResults(Models\ListAggregateConfigRuleEvaluationResultsRequest $req) 账号组获取评估结果--规则维度（某个规则下资源的评估结果列表）
 * @method Models\ListAggregateConfigRulesResponse ListAggregateConfigRules(Models\ListAggregateConfigRulesRequest $req) 账号组获取规则列表
 * @method Models\ListAggregateDiscoveredResourcesResponse ListAggregateDiscoveredResources(Models\ListAggregateDiscoveredResourcesRequest $req) 账号组获取资源列表
 * @method Models\ListAggregatorsResponse ListAggregators(Models\ListAggregatorsRequest $req) 账号组列表
 * @method Models\ListCompliancePacksResponse ListCompliancePacks(Models\ListCompliancePacksRequest $req) 获取合规包列表
 * @method Models\ListConfigRuleEvaluationResultsResponse ListConfigRuleEvaluationResults(Models\ListConfigRuleEvaluationResultsRequest $req)  获取评估结果--规则维度（某个规则下资源的评估结果列表）
 * @method Models\ListConfigRulesResponse ListConfigRules(Models\ListConfigRulesRequest $req) 获取规则列表
 * @method Models\ListDiscoveredResourcesResponse ListDiscoveredResources(Models\ListDiscoveredResourcesRequest $req) 获取资源列表
 * @method Models\ListRemediationExecutionsResponse ListRemediationExecutions(Models\ListRemediationExecutionsRequest $req) 修正记录
 * @method Models\ListRemediationsResponse ListRemediations(Models\ListRemediationsRequest $req) 修正设置列表
 * @method Models\ListResourceTypesResponse ListResourceTypes(Models\ListResourceTypesRequest $req) 获取资源类型列表
 * @method Models\ListSystemCompliancePacksResponse ListSystemCompliancePacks(Models\ListSystemCompliancePacksRequest $req) 获取系统合规包列表
 * @method Models\ListSystemRulesResponse ListSystemRules(Models\ListSystemRulesRequest $req) 获取预设规则列表
 * @method Models\OpenAggregateConfigRuleResponse OpenAggregateConfigRule(Models\OpenAggregateConfigRuleRequest $req) 账号组开启规则
 * @method Models\OpenConfigRecorderResponse OpenConfigRecorder(Models\OpenConfigRecorderRequest $req) 资源监控管理-开启监控
 * @method Models\OpenConfigRuleResponse OpenConfigRule(Models\OpenConfigRuleRequest $req) 开启规则
 * @method Models\PutEvaluationsResponse PutEvaluations(Models\PutEvaluationsRequest $req) 上报自定义规则评估结果
 * @method Models\StartAggregateConfigRuleEvaluationResponse StartAggregateConfigRuleEvaluation(Models\StartAggregateConfigRuleEvaluationRequest $req) 账号组触发评估
 * @method Models\StartConfigRuleEvaluationResponse StartConfigRuleEvaluation(Models\StartConfigRuleEvaluationRequest $req) 触发评估
 * @method Models\StartRemediationResponse StartRemediation(Models\StartRemediationRequest $req) 手动执行规则修复
 * @method Models\UpdateAggregateCompliancePackResponse UpdateAggregateCompliancePack(Models\UpdateAggregateCompliancePackRequest $req) 账号组编辑合规包
 * @method Models\UpdateAggregateCompliancePackStatusResponse UpdateAggregateCompliancePackStatus(Models\UpdateAggregateCompliancePackStatusRequest $req) 账号组开启、关闭合规包
 * @method Models\UpdateAggregateConfigDeliverResponse UpdateAggregateConfigDeliver(Models\UpdateAggregateConfigDeliverRequest $req) 账号组编辑投递设置
 * @method Models\UpdateAggregateConfigRuleResponse UpdateAggregateConfigRule(Models\UpdateAggregateConfigRuleRequest $req) 账号组编辑规则
 * @method Models\UpdateCompliancePackResponse UpdateCompliancePack(Models\UpdateCompliancePackRequest $req) 编辑合规包
 * @method Models\UpdateCompliancePackStatusResponse UpdateCompliancePackStatus(Models\UpdateCompliancePackStatusRequest $req) 开启、关闭合规包
 * @method Models\UpdateConfigDeliverResponse UpdateConfigDeliver(Models\UpdateConfigDeliverRequest $req) 编辑投递设置
 * @method Models\UpdateConfigRecorderResponse UpdateConfigRecorder(Models\UpdateConfigRecorderRequest $req) 编辑监控范围
 * @method Models\UpdateConfigRuleResponse UpdateConfigRule(Models\UpdateConfigRuleRequest $req) 编辑规则
 * @method Models\UpdateRemediationResponse UpdateRemediation(Models\UpdateRemediationRequest $req) 新增告警监控规则
 */

class ConfigClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "config.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "config";

    /**
     * @var string
     */
    protected $version = "2022-08-02";

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
        $respClass = "TencentCloud"."\\".ucfirst("config")."\\"."V20220802\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
