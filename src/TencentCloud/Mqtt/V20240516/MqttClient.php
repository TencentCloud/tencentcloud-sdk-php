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

namespace TencentCloud\Mqtt\V20240516;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mqtt\V20240516\Models as Models;

/**
 * @method Models\CreateAuthorizationPolicyResponse CreateAuthorizationPolicy(Models\CreateAuthorizationPolicyRequest $req) 创建MQTT实例的性能测试任务
 * @method Models\CreateJWKSAuthenticatorResponse CreateJWKSAuthenticator(Models\CreateJWKSAuthenticatorRequest $req) 创建一个jwks的认证
 * @method Models\CreateJWTAuthenticatorResponse CreateJWTAuthenticator(Models\CreateJWTAuthenticatorRequest $req) 创建一个jwks的认证
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建主题
 * @method Models\DeleteAuthenticatorResponse DeleteAuthenticator(Models\DeleteAuthenticatorRequest $req) 根据认证器类型删除一个MQTT认证器
 * @method Models\DeleteAuthorizationPolicyResponse DeleteAuthorizationPolicy(Models\DeleteAuthorizationPolicyRequest $req) 删除策略规则
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除MQTT主题
 * @method Models\DescribeAuthenticatorResponse DescribeAuthenticator(Models\DescribeAuthenticatorRequest $req) 查询MQTT认证器
 * @method Models\DescribeAuthorizationPoliciesResponse DescribeAuthorizationPolicies(Models\DescribeAuthorizationPoliciesRequest $req) 查询授权规则
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 查询实例信息
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceType, 实例类型查询，支持多选
3. InstanceStatus，实例状态查询，支持多选

当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) 查询mqtt主题详情
 * @method Models\DescribeTopicListResponse DescribeTopicList(Models\DescribeTopicListRequest $req) 获取主题列表，Filter参数使用说明如下：

1. TopicName，主题名称模糊搜索
2. TopicType，主题类型查询，支持多选，可选值：Normal,Order,Transaction,DelayScheduled
 * @method Models\ModifyAuthorizationPolicyResponse ModifyAuthorizationPolicy(Models\ModifyAuthorizationPolicyRequest $req) 修改策略规则
 * @method Models\ModifyJWKSAuthenticatorResponse ModifyJWKSAuthenticator(Models\ModifyJWKSAuthenticatorRequest $req) 修改MQTT JWKS 认证器
 * @method Models\ModifyJWTAuthenticatorResponse ModifyJWTAuthenticator(Models\ModifyJWTAuthenticatorRequest $req) 修改MQTT JWKS 认证器
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 修改主题属性
 * @method Models\RegisterDeviceCertificateResponse RegisterDeviceCertificate(Models\RegisterDeviceCertificateRequest $req) 注册设备证书
 * @method Models\UpdateAuthorizationPolicyPriorityResponse UpdateAuthorizationPolicyPriority(Models\UpdateAuthorizationPolicyPriorityRequest $req) 修改策略规则优先级
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
