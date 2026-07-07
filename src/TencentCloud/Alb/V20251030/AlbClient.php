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

namespace TencentCloud\Alb\V20251030;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Alb\V20251030\Models as Models;

/**
 * @method Models\AddTargetsToTargetGroupResponse AddTargetsToTargetGroup(Models\AddTargetsToTargetGroupRequest $req) 向目标组内添加后端服务
 * @method Models\AssociateBandwidthPackageWithLoadBalancerResponse AssociateBandwidthPackageWithLoadBalancer(Models\AssociateBandwidthPackageWithLoadBalancerRequest $req) 将共享带宽包绑定到应用型负载均衡实例。
 * @method Models\AssociateListenerAdditionalCertificatesResponse AssociateListenerAdditionalCertificates(Models\AssociateListenerAdditionalCertificatesRequest $req) AssociateListenerAdditionalCertificates属于异步接口，即系统返回一个请求 ID，但该扩展证书尚未添加成功，系统后台的添加任务仍在进行。您可以调用DescribeListenerCertificates接口查询扩展证书的添加状态：
当HTTPS和QUIC监听器处于Associating状态时，表示扩展证书正在添加中。
当HTTPS和QUIC监听器处于Associated状态时，表示扩展证书添加成功。
 * @method Models\CreateHealthCheckTemplateResponse CreateHealthCheckTemplate(Models\CreateHealthCheckTemplateRequest $req) 创建健康检查模板
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 创建监听器
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) **CreateLoadBalancer**接口属于异步接口，即系统返回一个实例ID，但该应用型负载均衡实例尚未创建成功，系统后台的创建任务仍在进行。您可以调用[DescribeLoadBalancerDetail](214362)查询应用型负载均衡实例的创建状态：
- 当应用型负载均衡实例处于**Provisioning**状态时，表示应用型负载均衡实例正在创建中。
- 当应用型负载均衡实例处于**Active**状态时，表示应用型负载均衡实例创建成功。
 * @method Models\CreateRulesResponse CreateRules(Models\CreateRulesRequest $req) CreateRules创建转发规则，本接口为异步接口，返回成功后需以返回的RequestID为入参，调用DescribeAsyncJobs接口查询本次任务是否成功。
一条规则最多支持10个转发条件（Conditions），5个转发动作（Actions）。
 * @method Models\CreateSecurityPolicyResponse CreateSecurityPolicy(Models\CreateSecurityPolicyRequest $req) 创建自定义安全策略，用于配置 HTTPS 监听器的 TLS 协议版本和加密套件。通过安全策略，您可以灵活控制客户端与负载均衡之间 HTTPS 通信的安全级别。
 * @method Models\CreateTargetGroupResponse CreateTargetGroup(Models\CreateTargetGroupRequest $req) 目标组相关接口
 * @method Models\DeleteHealthCheckTemplatesResponse DeleteHealthCheckTemplates(Models\DeleteHealthCheckTemplatesRequest $req) 删除健康检查模板
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 删除监听器
 * @method Models\DeleteLoadBalancersResponse DeleteLoadBalancers(Models\DeleteLoadBalancersRequest $req) **DeleteLoadBalancers**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡实例尚未删除成功，系统后台的删除任务仍在进行。您可以调用[DescribeLoadBalancerDetails](214362)查询应用型负载均衡实例的删除状态：
- 当应用型负载均衡实例处于**Deleting**状态时，表示应用型负载均衡实例正在删除中。
- 当查询不到指定的应用型负载均衡实例时，表示应用型负载均衡实例删除成功。
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) DeleteRules删除转发规则，本接口为异步接口，返回成功后需以返回的RequestID为入参，调用DescribeAsyncJobs接口查询本次任务是否成功。
 * @method Models\DeleteSecurityPolicyResponse DeleteSecurityPolicy(Models\DeleteSecurityPolicyRequest $req) 删除一个或多个自定义安全策略。删除安全策略前，请确保该策略未被任何 HTTPS 监听器引用，否则删除操作将失败。
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) 删除目标组。
 * @method Models\DescribeAsyncJobsResponse DescribeAsyncJobs(Models\DescribeAsyncJobsRequest $req) 异步任务查询接口
 * @method Models\DescribeHealthCheckTemplatesResponse DescribeHealthCheckTemplates(Models\DescribeHealthCheckTemplatesRequest $req) 查询健康检查模板列表
 * @method Models\DescribeListenerCertificatesResponse DescribeListenerCertificates(Models\DescribeListenerCertificatesRequest $req) 根据实例id和监听器id，查询指定监听器绑定的证书列表
若输入CertificateType为SVR，返回扩展服务器证书与默认服务器证书的信息
若输入CertificateType为CA，返回默认CA证书的信息
 * @method Models\DescribeListenerDetailResponse DescribeListenerDetail(Models\DescribeListenerDetailRequest $req) 查询单个监听器详情
 * @method Models\DescribeListenerHealthStatusResponse DescribeListenerHealthStatus(Models\DescribeListenerHealthStatusRequest $req) 查询监听器健康状态。
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) 查询监听器列表
 * @method Models\DescribeLoadBalancerDetailResponse DescribeLoadBalancerDetail(Models\DescribeLoadBalancerDetailRequest $req) 查询指定负载均衡实例的详细信息。
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) 查询实例配置。
 * @method Models\DescribeQuotaResponse DescribeQuota(Models\DescribeQuotaRequest $req) 查询当前账号的 ALB 配额配置。支持按配额类型查询，也支持传入资源ID查询资源级配额；可通过 DisplayFields 按需返回已使用量和剩余可用量。
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 查询转发规则
 * @method Models\DescribeSecurityPoliciesResponse DescribeSecurityPolicies(Models\DescribeSecurityPoliciesRequest $req) 查询自定义安全策略列表，支持按安全策略 ID、名称或标签进行筛选，并支持分页查询。
 * @method Models\DescribeSecurityPolicyCapabilitiesResponse DescribeSecurityPolicyCapabilities(Models\DescribeSecurityPolicyCapabilitiesRequest $req) 查询当前地域支持的安全策略配置能力，包括可选的 TLS 协议版本及各版本对应的加密套件列表。在创建或修改自定义安全策略前，建议先调用此接口获取可用的配置选项。
 * @method Models\DescribeSecurityPolicyRelationsResponse DescribeSecurityPolicyRelations(Models\DescribeSecurityPolicyRelationsRequest $req) 查询安全策略的关联关系，即安全策略被哪些 HTTPS 监听器引用。在删除或修改安全策略前，建议先调用此接口确认影响范围。
 * @method Models\DescribeSystemSecurityPoliciesResponse DescribeSystemSecurityPolicies(Models\DescribeSystemSecurityPoliciesRequest $req) 查询系统安全策略。
 * @method Models\DescribeTargetGroupTargetsResponse DescribeTargetGroupTargets(Models\DescribeTargetGroupTargetsRequest $req) 查询目标组内后端服务
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) 查询目标组列表
 * @method Models\DescribeTargetGroupsByTargetResponse DescribeTargetGroupsByTarget(Models\DescribeTargetGroupsByTargetRequest $req) 根据子机查询绑定的目标组
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 查询可用区
 * @method Models\DisassociateBandwidthPackageFromLoadBalancerResponse DisassociateBandwidthPackageFromLoadBalancer(Models\DisassociateBandwidthPackageFromLoadBalancerRequest $req) 将共享带宽包从应用型负载均衡实例解绑。
 * @method Models\DisassociateListenerAdditionalCertificatesResponse DisassociateListenerAdditionalCertificates(Models\DisassociateListenerAdditionalCertificatesRequest $req) DisassociateListenerAdditionalCertificates属于异步接口，即系统返回一个请求 ID，但该扩展证书尚未解绑成功，系统后台的解绑任务仍在进行。您可以调用DescribeListenerCertificates接口查询证书的解绑状态：若证书处于Disassociating状态，则证书正在解绑中。
 * @method Models\InquirePriceCreateLoadBalancerResponse InquirePriceCreateLoadBalancer(Models\InquirePriceCreateLoadBalancerRequest $req) InquirePriceCreateLoadBalancer接口查询创建负载均衡的价格。
 * @method Models\ModifyHealthCheckTemplateResponse ModifyHealthCheckTemplate(Models\ModifyHealthCheckTemplateRequest $req) 修改健康检查模板
 * @method Models\ModifyListenerAttributesResponse ModifyListenerAttributes(Models\ModifyListenerAttributesRequest $req) 修改监听器属性
 * @method Models\ModifyLoadBalancerAddressTypeResponse ModifyLoadBalancerAddressType(Models\ModifyLoadBalancerAddressTypeRequest $req) **前提条件：**
您已经创建应用型负载均衡实例，具体操作，请参见 CreateLoadBalancer 。
当您需要通过此接口将应用型负载均衡实例的网络类型由私网变为公网时，您需要先创建一个弹性公网 IP。
**使用说明：**
ModifyLoadBalancerAddressType 接口属于异步接口，即系统返回一个请求 ID，但该应用型负载均衡实例的网络类型尚未变更成功，系统后台的变更任务仍在进行。您可以调用 DescribeLoadBalancerDetail 查询应用型负载均衡实例的网络类型的变更状态：
当应用型负载均衡实例处于 Configuring 状态时，表示应用型负载均衡实例的网络类型正在变更中。
当应用型负载均衡实例处于 Active 状态时，表示应用型负载均衡实例的网络类型变更成功。
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) **ModifyLoadBalancerAttributes**接口属于异步接口，即系统返回一个请求ID，但该应用型负载均衡实例属性尚未修改成功，系统后台的修改任务仍在进行。您可以调用[DescribeLoadBalancerAttribute](214362)查询应用型负载均衡实例属性的修改状态：
- 当应用型负载均衡实例属性处于**Configuring**状态时，表示应用型负载均衡实例属性正在修改中。
- 当应用型负载均衡实例属性处于**Active**状态时，表示应用型负载均衡实例属性修改成功。
 * @method Models\ModifyLoadBalancerModificationProtectionResponse ModifyLoadBalancerModificationProtection(Models\ModifyLoadBalancerModificationProtectionRequest $req) 设置负载均衡实例修改保护。
 * @method Models\ModifyRulesAttributesResponse ModifyRulesAttributes(Models\ModifyRulesAttributesRequest $req) ModifyRulesAttributes修改转发规则属性，本接口为异步接口，返回成功后需以返回的RequestID为入参，调用DescribeAsyncJobs接口查询本次任务是否成功。
一条规则最多支持10个转发条件（Conditions），5个转发动作（Actions）。
 * @method Models\ModifySecurityPolicyAttributesResponse ModifySecurityPolicyAttributes(Models\ModifySecurityPolicyAttributesRequest $req) 修改自定义安全策略的属性，包括策略名称、TLS 协议版本和加密套件。修改后的配置将立即应用到所有关联该策略的 HTTPS 监听器。
 * @method Models\ModifyTargetGroupAttributesResponse ModifyTargetGroupAttributes(Models\ModifyTargetGroupAttributesRequest $req) 修改目标组。
 * @method Models\ModifyTargetsInTargetGroupResponse ModifyTargetsInTargetGroup(Models\ModifyTargetsInTargetGroupRequest $req) 修改目标组内后端服务信息
 * @method Models\NotifyUnbindTargetResponse NotifyUnbindTarget(Models\NotifyUnbindTargetRequest $req) 通知负载均衡解绑后端服务
 * @method Models\RemoveTargetsFromTargetGroupResponse RemoveTargetsFromTargetGroup(Models\RemoveTargetsFromTargetGroupRequest $req) 从目标组内移除后端服务
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) SetLoadBalancerSecurityGroups 接口支持对一个公网负载均衡实例执行设置（绑定、解绑）安全组操作。查询一个负载均衡实例目前已绑定的安全组，可使用 [DescribeLoadBalancerDetail](xxx) 接口。本接口是set语义，
绑定操作时，入参需要传入负载均衡实例要绑定的所有安全组（已绑定的+新增绑定的）。
解绑操作时，入参需要传入负载均衡实例执行解绑后所绑定的所有安全组；如果要解绑所有安全组，可不传此参数，或传入空数组。
 */

class AlbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "alb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "alb";

    /**
     * @var string
     */
    protected $version = "2025-10-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("alb")."\\"."V20251030\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
