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

namespace TencentCloud\Tse\V20201207;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tse\V20201207\Models as Models;

/**
 * @method Models\CreateCloudNativeAPIGatewayResponse CreateCloudNativeAPIGateway(Models\CreateCloudNativeAPIGatewayRequest $req) 创建云原生API网关实例
 * @method Models\CreateCloudNativeAPIGatewayCanaryRuleResponse CreateCloudNativeAPIGatewayCanaryRule(Models\CreateCloudNativeAPIGatewayCanaryRuleRequest $req) 创建云原生网关的灰度规则
 * @method Models\CreateCloudNativeAPIGatewayCertificateResponse CreateCloudNativeAPIGatewayCertificate(Models\CreateCloudNativeAPIGatewayCertificateRequest $req) 创建云原生网关证书
 * @method Models\CreateCloudNativeAPIGatewayRouteResponse CreateCloudNativeAPIGatewayRoute(Models\CreateCloudNativeAPIGatewayRouteRequest $req) 创建云原生网关路由
 * @method Models\CreateCloudNativeAPIGatewayRouteRateLimitResponse CreateCloudNativeAPIGatewayRouteRateLimit(Models\CreateCloudNativeAPIGatewayRouteRateLimitRequest $req) 创建云原生网关限流插件(路由)
 * @method Models\CreateCloudNativeAPIGatewayServiceResponse CreateCloudNativeAPIGatewayService(Models\CreateCloudNativeAPIGatewayServiceRequest $req) 创建云原生网关服务
 * @method Models\CreateCloudNativeAPIGatewayServiceRateLimitResponse CreateCloudNativeAPIGatewayServiceRateLimit(Models\CreateCloudNativeAPIGatewayServiceRateLimitRequest $req) 创建云原生网关限流插件(服务)
 * @method Models\CreateEngineResponse CreateEngine(Models\CreateEngineRequest $req) 创建引擎实例
 * @method Models\CreateNativeGatewayServerGroupResponse CreateNativeGatewayServerGroup(Models\CreateNativeGatewayServerGroupRequest $req) 创建云原生网关引擎分组
 * @method Models\DeleteCloudNativeAPIGatewayResponse DeleteCloudNativeAPIGateway(Models\DeleteCloudNativeAPIGatewayRequest $req) 删除云原生API网关实例
 * @method Models\DeleteCloudNativeAPIGatewayCanaryRuleResponse DeleteCloudNativeAPIGatewayCanaryRule(Models\DeleteCloudNativeAPIGatewayCanaryRuleRequest $req) 删除云原生网关的灰度规则
 * @method Models\DeleteCloudNativeAPIGatewayCertificateResponse DeleteCloudNativeAPIGatewayCertificate(Models\DeleteCloudNativeAPIGatewayCertificateRequest $req) 删除云原生网关证书
 * @method Models\DeleteCloudNativeAPIGatewayRouteResponse DeleteCloudNativeAPIGatewayRoute(Models\DeleteCloudNativeAPIGatewayRouteRequest $req) 删除云原生网关路由
 * @method Models\DeleteCloudNativeAPIGatewayRouteRateLimitResponse DeleteCloudNativeAPIGatewayRouteRateLimit(Models\DeleteCloudNativeAPIGatewayRouteRateLimitRequest $req) 删除云原生网关的限流插件(路由)
 * @method Models\DeleteCloudNativeAPIGatewayServiceResponse DeleteCloudNativeAPIGatewayService(Models\DeleteCloudNativeAPIGatewayServiceRequest $req) 删除云原生网关服务
 * @method Models\DeleteCloudNativeAPIGatewayServiceRateLimitResponse DeleteCloudNativeAPIGatewayServiceRateLimit(Models\DeleteCloudNativeAPIGatewayServiceRateLimitRequest $req) 删除云原生网关的限流插件(服务)
 * @method Models\DeleteEngineResponse DeleteEngine(Models\DeleteEngineRequest $req) 删除引擎实例
 * @method Models\DeleteNativeGatewayServerGroupResponse DeleteNativeGatewayServerGroup(Models\DeleteNativeGatewayServerGroupRequest $req) 删除网关实例分组
 * @method Models\DescribeCloudNativeAPIGatewayResponse DescribeCloudNativeAPIGateway(Models\DescribeCloudNativeAPIGatewayRequest $req) 获取云原生API网关实例信息
 * @method Models\DescribeCloudNativeAPIGatewayCanaryRulesResponse DescribeCloudNativeAPIGatewayCanaryRules(Models\DescribeCloudNativeAPIGatewayCanaryRulesRequest $req) 查询云原生网关灰度规则列表
 * @method Models\DescribeCloudNativeAPIGatewayCertificateDetailsResponse DescribeCloudNativeAPIGatewayCertificateDetails(Models\DescribeCloudNativeAPIGatewayCertificateDetailsRequest $req) 查询云原生网关单个证书详情
 * @method Models\DescribeCloudNativeAPIGatewayCertificatesResponse DescribeCloudNativeAPIGatewayCertificates(Models\DescribeCloudNativeAPIGatewayCertificatesRequest $req) 查询云原生网关证书列表
 * @method Models\DescribeCloudNativeAPIGatewayConfigResponse DescribeCloudNativeAPIGatewayConfig(Models\DescribeCloudNativeAPIGatewayConfigRequest $req) 获取云原生API网关实例网络配置信息
 * @method Models\DescribeCloudNativeAPIGatewayNodesResponse DescribeCloudNativeAPIGatewayNodes(Models\DescribeCloudNativeAPIGatewayNodesRequest $req) 获取云原生网关节点列表
 * @method Models\DescribeCloudNativeAPIGatewayPortsResponse DescribeCloudNativeAPIGatewayPorts(Models\DescribeCloudNativeAPIGatewayPortsRequest $req) 获取云原生API网关实例端口信息
 * @method Models\DescribeCloudNativeAPIGatewayRouteRateLimitResponse DescribeCloudNativeAPIGatewayRouteRateLimit(Models\DescribeCloudNativeAPIGatewayRouteRateLimitRequest $req) 查询云原生网关的限流插件(路由)
 * @method Models\DescribeCloudNativeAPIGatewayRoutesResponse DescribeCloudNativeAPIGatewayRoutes(Models\DescribeCloudNativeAPIGatewayRoutesRequest $req) 查询云原生网关路由列表
 * @method Models\DescribeCloudNativeAPIGatewayServiceRateLimitResponse DescribeCloudNativeAPIGatewayServiceRateLimit(Models\DescribeCloudNativeAPIGatewayServiceRateLimitRequest $req) 查询云原生网关的限流插件(服务)
 * @method Models\DescribeCloudNativeAPIGatewayServicesResponse DescribeCloudNativeAPIGatewayServices(Models\DescribeCloudNativeAPIGatewayServicesRequest $req) 查询云原生网关服务列表
 * @method Models\DescribeCloudNativeAPIGatewaysResponse DescribeCloudNativeAPIGateways(Models\DescribeCloudNativeAPIGatewaysRequest $req) 获取云原生API网关实例列表
 * @method Models\DescribeNacosReplicasResponse DescribeNacosReplicas(Models\DescribeNacosReplicasRequest $req) 查询Nacos类型引擎实例副本信息
 * @method Models\DescribeNacosServerInterfacesResponse DescribeNacosServerInterfaces(Models\DescribeNacosServerInterfacesRequest $req) 查询nacos服务接口列表
 * @method Models\DescribeNativeGatewayServerGroupsResponse DescribeNativeGatewayServerGroups(Models\DescribeNativeGatewayServerGroupsRequest $req) 查询云原生网关分组信息
 * @method Models\DescribeOneCloudNativeAPIGatewayServiceResponse DescribeOneCloudNativeAPIGatewayService(Models\DescribeOneCloudNativeAPIGatewayServiceRequest $req) 获取云原生网关服务详情
 * @method Models\DescribeSREInstanceAccessAddressResponse DescribeSREInstanceAccessAddress(Models\DescribeSREInstanceAccessAddressRequest $req) 查询引擎实例访问地址
 * @method Models\DescribeSREInstancesResponse DescribeSREInstances(Models\DescribeSREInstancesRequest $req) 用于查询引擎实例列表
 * @method Models\DescribeZookeeperReplicasResponse DescribeZookeeperReplicas(Models\DescribeZookeeperReplicasRequest $req) 查询Zookeeper类型注册引擎实例副本信息
 * @method Models\DescribeZookeeperServerInterfacesResponse DescribeZookeeperServerInterfaces(Models\DescribeZookeeperServerInterfacesRequest $req) 查询zookeeper服务接口列表
 * @method Models\ModifyCloudNativeAPIGatewayResponse ModifyCloudNativeAPIGateway(Models\ModifyCloudNativeAPIGatewayRequest $req) 修改云原生API网关实例基础信息
 * @method Models\ModifyCloudNativeAPIGatewayCanaryRuleResponse ModifyCloudNativeAPIGatewayCanaryRule(Models\ModifyCloudNativeAPIGatewayCanaryRuleRequest $req) 修改云原生网关的灰度规则
 * @method Models\ModifyCloudNativeAPIGatewayRouteResponse ModifyCloudNativeAPIGatewayRoute(Models\ModifyCloudNativeAPIGatewayRouteRequest $req) 修改云原生网关路由
 * @method Models\ModifyCloudNativeAPIGatewayRouteRateLimitResponse ModifyCloudNativeAPIGatewayRouteRateLimit(Models\ModifyCloudNativeAPIGatewayRouteRateLimitRequest $req) 修改云原生网关限流插件(路由)
 * @method Models\ModifyCloudNativeAPIGatewayServiceResponse ModifyCloudNativeAPIGatewayService(Models\ModifyCloudNativeAPIGatewayServiceRequest $req) 修改云原生网关服务
 * @method Models\ModifyCloudNativeAPIGatewayServiceRateLimitResponse ModifyCloudNativeAPIGatewayServiceRateLimit(Models\ModifyCloudNativeAPIGatewayServiceRateLimitRequest $req) 修改云原生网关限流插件(服务)
 * @method Models\ModifyNativeGatewayServerGroupResponse ModifyNativeGatewayServerGroup(Models\ModifyNativeGatewayServerGroupRequest $req) 修改云原生API网关实例分组基础信息
 * @method Models\UpdateCloudNativeAPIGatewayCertificateInfoResponse UpdateCloudNativeAPIGatewayCertificateInfo(Models\UpdateCloudNativeAPIGatewayCertificateInfoRequest $req) 修改云原生网关证书信息
 * @method Models\UpdateCloudNativeAPIGatewaySpecResponse UpdateCloudNativeAPIGatewaySpec(Models\UpdateCloudNativeAPIGatewaySpecRequest $req) 修改云原生API网关实例的节点规格信息，比如节点扩缩容或者升降配
 * @method Models\UpdateEngineInternetAccessResponse UpdateEngineInternetAccess(Models\UpdateEngineInternetAccessRequest $req) 修改引擎公网访问配置
 */

class TseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tse.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tse";

    /**
     * @var string
     */
    protected $version = "2020-12-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("tse")."\\"."V20201207\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
