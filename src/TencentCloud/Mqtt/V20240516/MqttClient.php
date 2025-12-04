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

namespace TencentCloud\Mqtt\V20240516;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mqtt\V20240516\Models as Models;

/**
 * @method Models\ActivateCaCertificateResponse ActivateCaCertificate(Models\ActivateCaCertificateRequest $req) 激活Ca证书
 * @method Models\ActivateDeviceCertificateResponse ActivateDeviceCertificate(Models\ActivateDeviceCertificateRequest $req) 生效设备证书
 * @method Models\AddClientSubscriptionResponse AddClientSubscription(Models\AddClientSubscriptionRequest $req) 为MQTT客户端增加一条订阅
 * @method Models\ApplyRegistrationCodeResponse ApplyRegistrationCode(Models\ApplyRegistrationCodeRequest $req) 申请ca注册码
 * @method Models\CreateAuthorizationPolicyResponse CreateAuthorizationPolicy(Models\CreateAuthorizationPolicyRequest $req) 创建MQTT实例的性能测试任务
 * @method Models\CreateDeviceIdentityResponse CreateDeviceIdentity(Models\CreateDeviceIdentityRequest $req) 创建一机一密设备签名
 * @method Models\CreateHttpAuthenticatorResponse CreateHttpAuthenticator(Models\CreateHttpAuthenticatorRequest $req) 创建一个HTTP的认证器
 * @method Models\CreateInsPublicEndpointResponse CreateInsPublicEndpoint(Models\CreateInsPublicEndpointRequest $req) 为MQTT实例创建公网接入点，未开启公网的集群可调用。
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 购买新的MQTT实例
 * @method Models\CreateJWKSAuthenticatorResponse CreateJWKSAuthenticator(Models\CreateJWKSAuthenticatorRequest $req) 创建一个jwks的认证
 * @method Models\CreateJWTAuthenticatorResponse CreateJWTAuthenticator(Models\CreateJWTAuthenticatorRequest $req) 创建一个jwks的认证
 * @method Models\CreateMessageEnrichmentRuleResponse CreateMessageEnrichmentRule(Models\CreateMessageEnrichmentRuleRequest $req) 创建一条消息属性增强规则
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建主题
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 添加mqtt角色
 * @method Models\DeactivateCaCertificateResponse DeactivateCaCertificate(Models\DeactivateCaCertificateRequest $req) 失效Ca证书
 * @method Models\DeactivateDeviceCertificateResponse DeactivateDeviceCertificate(Models\DeactivateDeviceCertificateRequest $req) 失效Ca证书
 * @method Models\DeleteAuthenticatorResponse DeleteAuthenticator(Models\DeleteAuthenticatorRequest $req) 根据认证器类型删除一个MQTT认证器
 * @method Models\DeleteAuthorizationPolicyResponse DeleteAuthorizationPolicy(Models\DeleteAuthorizationPolicyRequest $req) 删除策略规则
 * @method Models\DeleteCaCertificateResponse DeleteCaCertificate(Models\DeleteCaCertificateRequest $req) 删除Ca证书
 * @method Models\DeleteClientSubscriptionResponse DeleteClientSubscription(Models\DeleteClientSubscriptionRequest $req) 删除MQTT客户端下的一条订阅
 * @method Models\DeleteDeviceCertificateResponse DeleteDeviceCertificate(Models\DeleteDeviceCertificateRequest $req) 删除设备证书
 * @method Models\DeleteDeviceIdentityResponse DeleteDeviceIdentity(Models\DeleteDeviceIdentityRequest $req) 删除一机一密设备签名
 * @method Models\DeleteInsPublicEndpointResponse DeleteInsPublicEndpoint(Models\DeleteInsPublicEndpointRequest $req) 删除MQTT实例的公网接入点
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 删除MQTT实例
 * @method Models\DeleteMessageEnrichmentRuleResponse DeleteMessageEnrichmentRule(Models\DeleteMessageEnrichmentRuleRequest $req) 删除消息属性增强规则
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除MQTT主题
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 删除MQTT访问用户
 * @method Models\DescribeAuthenticatorResponse DescribeAuthenticator(Models\DescribeAuthenticatorRequest $req) 查询MQTT认证器
 * @method Models\DescribeAuthorizationPoliciesResponse DescribeAuthorizationPolicies(Models\DescribeAuthorizationPoliciesRequest $req) 查询授权规则
 * @method Models\DescribeCaCertificateResponse DescribeCaCertificate(Models\DescribeCaCertificateRequest $req) 查询Ca证书详情接口
 * @method Models\DescribeCaCertificatesResponse DescribeCaCertificates(Models\DescribeCaCertificatesRequest $req) 查询集群下的ca证书信息
 * @method Models\DescribeClientListResponse DescribeClientList(Models\DescribeClientListRequest $req) 查询 MQTT 客户端详情
 * @method Models\DescribeDeviceCertificateResponse DescribeDeviceCertificate(Models\DescribeDeviceCertificateRequest $req) 查询设备证书详情接口
 * @method Models\DescribeDeviceCertificatesResponse DescribeDeviceCertificates(Models\DescribeDeviceCertificatesRequest $req) 分页查询设备证书
 * @method Models\DescribeDeviceIdentitiesResponse DescribeDeviceIdentities(Models\DescribeDeviceIdentitiesRequest $req) 查询集群下设备标识列表
 * @method Models\DescribeDeviceIdentityResponse DescribeDeviceIdentity(Models\DescribeDeviceIdentityRequest $req) 查询设备一机一密标识
 * @method Models\DescribeInsPublicEndpointsResponse DescribeInsPublicEndpoints(Models\DescribeInsPublicEndpointsRequest $req) 查询MQTT实例公网接入点
 * @method Models\DescribeInsVPCEndpointsResponse DescribeInsVPCEndpoints(Models\DescribeInsVPCEndpointsRequest $req) 查询MQTT实例公网接入点
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 查询实例信息
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceStatus，实例状态查询，支持多选

当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeMessageByTopicResponse DescribeMessageByTopic(Models\DescribeMessageByTopicRequest $req) 根据订阅查询消息
 * @method Models\DescribeMessageDetailsResponse DescribeMessageDetails(Models\DescribeMessageDetailsRequest $req) 查询MQTT消息详情
 * @method Models\DescribeMessageEnrichmentRulesResponse DescribeMessageEnrichmentRules(Models\DescribeMessageEnrichmentRulesRequest $req) 查询消息属性增强规则
 * @method Models\DescribeMessageListResponse DescribeMessageList(Models\DescribeMessageListRequest $req) 根据一级Topic查询消息列表
 * @method Models\DescribeProductSKUListResponse DescribeProductSKUList(Models\DescribeProductSKUListRequest $req) 获取产品售卖规格
 * @method Models\DescribeSharedSubscriptionLagResponse DescribeSharedSubscriptionLag(Models\DescribeSharedSubscriptionLagRequest $req) 查询共享订阅消息堆积量
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) 查询mqtt主题详情
 * @method Models\DescribeTopicListResponse DescribeTopicList(Models\DescribeTopicListRequest $req) 获取主题列表，Filter参数使用说明如下：

1. TopicName，主题名称模糊搜索
2. TopicType，主题类型查询，支持多选，可选值：Normal,Order,Transaction,DelayScheduled
 * @method Models\DescribeUserListResponse DescribeUserList(Models\DescribeUserListRequest $req) 查询用户列表，Filter参数使用说明如下：

1. Username，用户名称模糊搜索
 * @method Models\KickOutClientResponse KickOutClient(Models\KickOutClientRequest $req) 踢出客户端
 * @method Models\ModifyAuthorizationPolicyResponse ModifyAuthorizationPolicy(Models\ModifyAuthorizationPolicyRequest $req) 修改策略规则，可参考 [数据面授权策略说明](https://cloud.tencent.com/document/product/1778/109715)
 * @method Models\ModifyDeviceIdentityResponse ModifyDeviceIdentity(Models\ModifyDeviceIdentityRequest $req) 修改一机一密设备签名
 * @method Models\ModifyHttpAuthenticatorResponse ModifyHttpAuthenticator(Models\ModifyHttpAuthenticatorRequest $req) 修改MQTT HTTP 认证器
 * @method Models\ModifyInsPublicEndpointResponse ModifyInsPublicEndpoint(Models\ModifyInsPublicEndpointRequest $req) 更新MQTT实例公网接入点
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改实例属性，只有运行中的集群可以调用该接口进行变更配置。
 * @method Models\ModifyInstanceCertBindingResponse ModifyInstanceCertBinding(Models\ModifyInstanceCertBindingRequest $req) 更新MQTT集群绑定证书
参数传空，则为删除证书
 * @method Models\ModifyJWKSAuthenticatorResponse ModifyJWKSAuthenticator(Models\ModifyJWKSAuthenticatorRequest $req) 修改MQTT JWKS 认证器，全量配置修改，需要提交完整的修改后配置。
 * @method Models\ModifyJWTAuthenticatorResponse ModifyJWTAuthenticator(Models\ModifyJWTAuthenticatorRequest $req) 修改MQTT JWKS 认证器
 * @method Models\ModifyMessageEnrichmentRuleResponse ModifyMessageEnrichmentRule(Models\ModifyMessageEnrichmentRuleRequest $req) 修改消息属性增强规则
注意：需要提交当前规则的所有属性，即使某些字段没有修改。
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 修改主题属性
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 修改MQTT角色
 * @method Models\PublishMessageResponse PublishMessage(Models\PublishMessageRequest $req) 发布 MQTT 消息到消息主题或客户端
 * @method Models\RegisterCaCertificateResponse RegisterCaCertificate(Models\RegisterCaCertificateRequest $req) 注册CA证书（仅一机一证场景支持），可参考 [自定义 X.509 证书实现 “一机一证”](https://cloud.tencent.com/document/product/1778/114817)
 * @method Models\RegisterDeviceCertificateResponse RegisterDeviceCertificate(Models\RegisterDeviceCertificateRequest $req) 注册设备证书（仅一机一证场景生效），可参考 [自定义 X.509 证书实现 “一机一证”](https://cloud.tencent.com/document/product/1778/114817#6cb39d46-efad-4220-8f11-2e7fab207bc8)
 * @method Models\RevokedDeviceCertificateResponse RevokedDeviceCertificate(Models\RevokedDeviceCertificateRequest $req) 吊销设备证书
 * @method Models\UpdateAuthorizationPolicyPriorityResponse UpdateAuthorizationPolicyPriority(Models\UpdateAuthorizationPolicyPriorityRequest $req) 修改策略规则优先级
 * @method Models\UpdateMessageEnrichmentRulePriorityResponse UpdateMessageEnrichmentRulePriority(Models\UpdateMessageEnrichmentRulePriorityRequest $req) 修改消息属性增强规则优先级
 */

class MqttClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mqtt.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mqtt";

    /**
     * @var string
     */
    protected $version = "2024-05-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("mqtt")."\\"."V20240516\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
