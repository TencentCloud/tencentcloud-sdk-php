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

namespace TencentCloud\Ga2\V20250115;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ga2\V20250115\Models as Models;

/**
 * @method Models\CreateAccelerateAreasResponse CreateAccelerateAreas(Models\CreateAccelerateAreasRequest $req) 创建加速地域
 * @method Models\CreateEndpointGroupResponse CreateEndpointGroup(Models\CreateEndpointGroupRequest $req) 创建终端节点组。
 * @method Models\CreateForwardingPolicyResponse CreateForwardingPolicy(Models\CreateForwardingPolicyRequest $req) 创建七层转发策略
 * @method Models\CreateForwardingRuleResponse CreateForwardingRule(Models\CreateForwardingRuleRequest $req) 创建七层转发规则
 * @method Models\CreateGlobalAcceleratorResponse CreateGlobalAccelerator(Models\CreateGlobalAcceleratorRequest $req) 创建全球加速实例
 * @method Models\CreateGlobalAcceleratorAccessLogResponse CreateGlobalAcceleratorAccessLog(Models\CreateGlobalAcceleratorAccessLogRequest $req) 创建GA访问日志
 * @method Models\CreateGlobalAcceleratorAclPolicyResponse CreateGlobalAcceleratorAclPolicy(Models\CreateGlobalAcceleratorAclPolicyRequest $req) 创建访问控制策略
 * @method Models\CreateGlobalAcceleratorAclRuleResponse CreateGlobalAcceleratorAclRule(Models\CreateGlobalAcceleratorAclRuleRequest $req) 创建ACL规则
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 创建监听器
 * @method Models\CreateListenerAdditionalCertResponse CreateListenerAdditionalCert(Models\CreateListenerAdditionalCertRequest $req) 添加扩展证书
 * @method Models\DeleteAccelerateAreasResponse DeleteAccelerateAreas(Models\DeleteAccelerateAreasRequest $req) 删除加速地域
 * @method Models\DeleteEndpointGroupsResponse DeleteEndpointGroups(Models\DeleteEndpointGroupsRequest $req) 删除终端节点组。
 * @method Models\DeleteForwardingPolicyResponse DeleteForwardingPolicy(Models\DeleteForwardingPolicyRequest $req) 删除七层转发策略
 * @method Models\DeleteForwardingRuleResponse DeleteForwardingRule(Models\DeleteForwardingRuleRequest $req) 删除七层转发规则
 * @method Models\DeleteGlobalAcceleratorResponse DeleteGlobalAccelerator(Models\DeleteGlobalAcceleratorRequest $req) 删除全球加速实例
 * @method Models\DeleteGlobalAcceleratorAccessLogResponse DeleteGlobalAcceleratorAccessLog(Models\DeleteGlobalAcceleratorAccessLogRequest $req) 删除GA日志任务
 * @method Models\DeleteGlobalAcceleratorAclPolicyResponse DeleteGlobalAcceleratorAclPolicy(Models\DeleteGlobalAcceleratorAclPolicyRequest $req) 删除访问控制策略
 * @method Models\DeleteGlobalAcceleratorAclRuleResponse DeleteGlobalAcceleratorAclRule(Models\DeleteGlobalAcceleratorAclRuleRequest $req) 删除ACL规则
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 删除监听器
 * @method Models\DeleteListenerAdditionalCertResponse DeleteListenerAdditionalCert(Models\DeleteListenerAdditionalCertRequest $req) 删除扩展证书
 * @method Models\DescribeAccelerateAreasResponse DescribeAccelerateAreas(Models\DescribeAccelerateAreasRequest $req) 查询加速地域
 * @method Models\DescribeAccelerateRegionsResponse DescribeAccelerateRegions(Models\DescribeAccelerateRegionsRequest $req) 查询可选加速区域
 * @method Models\DescribeAccessLogParamResponse DescribeAccessLogParam(Models\DescribeAccessLogParamRequest $req) 查看访问日志上报参数
 * @method Models\DescribeCrossBorderSettlementResponse DescribeCrossBorderSettlement(Models\DescribeCrossBorderSettlementRequest $req) 查询跨境账单
 * @method Models\DescribeEndpointGroupsResponse DescribeEndpointGroups(Models\DescribeEndpointGroupsRequest $req) 查询终端节点组。
 * @method Models\DescribeForwardingPolicyResponse DescribeForwardingPolicy(Models\DescribeForwardingPolicyRequest $req) 查看七层转发策略
 * @method Models\DescribeForwardingRuleResponse DescribeForwardingRule(Models\DescribeForwardingRuleRequest $req) 查看七层转发规则
 * @method Models\DescribeGlobalAcceleratorAccessLogResponse DescribeGlobalAcceleratorAccessLog(Models\DescribeGlobalAcceleratorAccessLogRequest $req) 查询日志任务
 * @method Models\DescribeGlobalAcceleratorAclPoliciesResponse DescribeGlobalAcceleratorAclPolicies(Models\DescribeGlobalAcceleratorAclPoliciesRequest $req) 查看访问控制策略
 * @method Models\DescribeGlobalAcceleratorAclRulesResponse DescribeGlobalAcceleratorAclRules(Models\DescribeGlobalAcceleratorAclRulesRequest $req) 查看ACL规则
 * @method Models\DescribeGlobalAcceleratorsResponse DescribeGlobalAccelerators(Models\DescribeGlobalAcceleratorsRequest $req) 修改全球加速实例
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) 查询监听器
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) 查询异步任务结果
 * @method Models\ModifyAccelerateAreasResponse ModifyAccelerateAreas(Models\ModifyAccelerateAreasRequest $req) 修改加速地域
 * @method Models\ModifyAccessLogStatusResponse ModifyAccessLogStatus(Models\ModifyAccessLogStatusRequest $req) 修改日志任务状态
 * @method Models\ModifyEndpointGroupResponse ModifyEndpointGroup(Models\ModifyEndpointGroupRequest $req) 修改终端节点组。
 * @method Models\ModifyForwardingPolicyResponse ModifyForwardingPolicy(Models\ModifyForwardingPolicyRequest $req) 修改七层转发策略
 * @method Models\ModifyForwardingRuleResponse ModifyForwardingRule(Models\ModifyForwardingRuleRequest $req) 修改七层转发规则
 * @method Models\ModifyGlobalAcceleratorResponse ModifyGlobalAccelerator(Models\ModifyGlobalAcceleratorRequest $req) 修改全球加速实例
 * @method Models\ModifyGlobalAcceleratorAccessLogResponse ModifyGlobalAcceleratorAccessLog(Models\ModifyGlobalAcceleratorAccessLogRequest $req) 修改GA访问日志
 * @method Models\ModifyGlobalAcceleratorAclPolicyResponse ModifyGlobalAcceleratorAclPolicy(Models\ModifyGlobalAcceleratorAclPolicyRequest $req) 修改访问控制策略状态
 * @method Models\ModifyGlobalAcceleratorAclRuleResponse ModifyGlobalAcceleratorAclRule(Models\ModifyGlobalAcceleratorAclRuleRequest $req) 修改ACL规则
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) 修改监听器
 * @method Models\ReplaceListenerAdditionalCertResponse ReplaceListenerAdditionalCert(Models\ReplaceListenerAdditionalCertRequest $req) 替换扩展证书
 */

class Ga2Client extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ga2.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ga2";

    /**
     * @var string
     */
    protected $version = "2025-01-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("ga2")."\\"."V20250115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
