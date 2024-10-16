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

namespace TencentCloud\Gwlb\V20240906;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gwlb\V20240906\Models as Models;

/**
 * @method Models\AssociateTargetGroupsResponse AssociateTargetGroups(Models\AssociateTargetGroupsRequest $req) 本接口(AssociateTargetGroups)用来将目标组绑定到负载均衡。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\CreateGatewayLoadBalancerResponse CreateGatewayLoadBalancer(Models\CreateGatewayLoadBalancerRequest $req) 本接口(CreateGatewayLoadBalancer)用来创建网关负载均衡实例。为了使用网关负载均衡服务，您必须购买一个或多个网关负载均衡实例。成功调用该接口后，会返回网关负载均衡实例的唯一 ID。
注意：单个账号在每个地域的默认购买配额为：10个。
本接口为异步接口，接口成功返回后，可使用 DescribeGatewayLoadBalancers 接口查询负载均衡实例的状态（如创建中、正常），以确定是否创建成功。
 * @method Models\CreateTargetGroupResponse CreateTargetGroup(Models\CreateTargetGroupRequest $req) 创建目标组。该功能正在内测中，如需使用，请通过[工单申请](https://console.cloud.tencent.com/workorder/category?level1_id=6&level2_id=163&source=0&data_title=%E8%B4%9F%E8%BD%BD%E5%9D%87%E8%A1%A1%20LB&step=1)。
 * @method Models\DeleteGatewayLoadBalancerResponse DeleteGatewayLoadBalancer(Models\DeleteGatewayLoadBalancerRequest $req) DeleteGatewayLoadBalancer 接口用以删除指定的一个或多个网关负载均衡实例。成功删除后，会把网关负载均衡实例与后端服务解绑。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) 删除目标组
 * @method Models\DeregisterTargetGroupInstancesResponse DeregisterTargetGroupInstances(Models\DeregisterTargetGroupInstancesRequest $req) 从目标组中解绑服务器。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\DescribeGatewayLoadBalancersResponse DescribeGatewayLoadBalancers(Models\DescribeGatewayLoadBalancersRequest $req) 查询一个地域的网关负载均衡实例列表。
 * @method Models\DescribeTargetGroupInstanceStatusResponse DescribeTargetGroupInstanceStatus(Models\DescribeTargetGroupInstanceStatusRequest $req) 查询目标组后端服务状态。目前仅支持网关负载均衡类型的目标组支持查询后端服务状态。
 * @method Models\DescribeTargetGroupInstancesResponse DescribeTargetGroupInstances(Models\DescribeTargetGroupInstancesRequest $req) 获取目标组绑定的服务器信息。
 * @method Models\DescribeTargetGroupListResponse DescribeTargetGroupList(Models\DescribeTargetGroupListRequest $req) 获取目标组列表
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) 查询目标组信息
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口用于查询异步任务的执行状态，对于非查询类的接口（创建/删除负载均衡实例等），在接口调用成功后，都需要使用本接口查询任务最终是否执行成功。
 * @method Models\DisassociateTargetGroupsResponse DisassociateTargetGroups(Models\DisassociateTargetGroupsRequest $req) 解除负载均衡和目标组的关联关系。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\InquirePriceCreateGatewayLoadBalancerResponse InquirePriceCreateGatewayLoadBalancer(Models\InquirePriceCreateGatewayLoadBalancerRequest $req) InquirePriceCreateGatewayLoadBalancer接口查询创建网关负载均衡的价格。
 * @method Models\ModifyGatewayLoadBalancerAttributeResponse ModifyGatewayLoadBalancerAttribute(Models\ModifyGatewayLoadBalancerAttributeRequest $req) ModifyGatewayLoadBalancerAttribute 接口用于修改负载均衡实例的属性。支持修改负载均衡实例的名称、带宽上限。
 * @method Models\ModifyTargetGroupAttributeResponse ModifyTargetGroupAttribute(Models\ModifyTargetGroupAttributeRequest $req) 修改目标组的名称、健康探测等属性。
 * @method Models\ModifyTargetGroupInstancesWeightResponse ModifyTargetGroupInstancesWeight(Models\ModifyTargetGroupInstancesWeightRequest $req) 修改目标组的服务器权重。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\RegisterTargetGroupInstancesResponse RegisterTargetGroupInstances(Models\RegisterTargetGroupInstancesRequest $req) 注册服务器到目标组。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 */

class GwlbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "gwlb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "gwlb";

    /**
     * @var string
     */
    protected $version = "2024-09-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("gwlb")."\\"."V20240906\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
