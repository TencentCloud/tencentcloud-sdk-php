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

namespace TencentCloud\Trocket\V20230308;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trocket\V20230308\Models as Models;

/**
 * @method Models\CreateConsumerGroupResponse CreateConsumerGroup(Models\CreateConsumerGroupRequest $req) 创建消费组
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建 RocketMQ 5.x 集群
 * @method Models\CreateMQTTInsPublicEndpointResponse CreateMQTTInsPublicEndpoint(Models\CreateMQTTInsPublicEndpointRequest $req) 为MQTT实例创建公网接入点
 * @method Models\CreateMQTTInstanceResponse CreateMQTTInstance(Models\CreateMQTTInstanceRequest $req) 购买新的MQTT实例
 * @method Models\CreateMQTTTopicResponse CreateMQTTTopic(Models\CreateMQTTTopicRequest $req) 创建主题
 * @method Models\CreateMQTTUserResponse CreateMQTTUser(Models\CreateMQTTUserRequest $req) 添加mqtt角色
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 添加角色
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建主题
 * @method Models\DeleteConsumerGroupResponse DeleteConsumerGroup(Models\DeleteConsumerGroupRequest $req) 删除消费组
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 删除实例
 * @method Models\DeleteMQTTInsPublicEndpointResponse DeleteMQTTInsPublicEndpoint(Models\DeleteMQTTInsPublicEndpointRequest $req) 删除MQTT实例的公网接入点
 * @method Models\DeleteMQTTInstanceResponse DeleteMQTTInstance(Models\DeleteMQTTInstanceRequest $req) 删除MQTT实例
 * @method Models\DeleteMQTTTopicResponse DeleteMQTTTopic(Models\DeleteMQTTTopicRequest $req) 删除MQTT主题
 * @method Models\DeleteMQTTUserResponse DeleteMQTTUser(Models\DeleteMQTTUserRequest $req) 删除MQTT访问用户
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) 删除角色
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除主题
 * @method Models\DescribeConsumerGroupResponse DescribeConsumerGroup(Models\DescribeConsumerGroupRequest $req) 查询消费组详情
 * @method Models\DescribeConsumerGroupListResponse DescribeConsumerGroupList(Models\DescribeConsumerGroupListRequest $req) 获取消费组列表，Filter参数使用说明如下：

1. ConsumerGroupName，名称模糊查询
2. ConsumeMessageOrderly，投递顺序性。"true":顺序投递；"false":并发投递
 * @method Models\DescribeFusionInstanceListResponse DescribeFusionInstanceList(Models\DescribeFusionInstanceListRequest $req) 获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceType, 实例类型查询，支持多选
4. Version，实例版本查询
当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 查询实例信息
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceType, 实例类型查询，支持多选
3. InstanceStatus，实例状态查询，支持多选

当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeMQTTClientResponse DescribeMQTTClient(Models\DescribeMQTTClientRequest $req) 查询 MQTT 客户端详情
 * @method Models\DescribeMQTTInsPublicEndpointsResponse DescribeMQTTInsPublicEndpoints(Models\DescribeMQTTInsPublicEndpointsRequest $req) 查询MQTT实例公网接入点
 * @method Models\DescribeMQTTInsVPCEndpointsResponse DescribeMQTTInsVPCEndpoints(Models\DescribeMQTTInsVPCEndpointsRequest $req) 查询MQTT实例公网接入点
 * @method Models\DescribeMQTTInstanceResponse DescribeMQTTInstance(Models\DescribeMQTTInstanceRequest $req) 查询实例信息
 * @method Models\DescribeMQTTInstanceCertResponse DescribeMQTTInstanceCert(Models\DescribeMQTTInstanceCertRequest $req) 查询MQTT集群证书列表
 * @method Models\DescribeMQTTInstanceListResponse DescribeMQTTInstanceList(Models\DescribeMQTTInstanceListRequest $req) 获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceType, 实例类型查询，支持多选
3. InstanceStatus，实例状态查询，支持多选

当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeMQTTMessageResponse DescribeMQTTMessage(Models\DescribeMQTTMessageRequest $req) 查询MQTT消息详情
 * @method Models\DescribeMQTTMessageListResponse DescribeMQTTMessageList(Models\DescribeMQTTMessageListRequest $req) 查询消息列表，如查询死信，请设置ConsumerGroup参数
 * @method Models\DescribeMQTTProductSKUListResponse DescribeMQTTProductSKUList(Models\DescribeMQTTProductSKUListRequest $req) 获取产品售卖规格
 * @method Models\DescribeMQTTTopicResponse DescribeMQTTTopic(Models\DescribeMQTTTopicRequest $req) 查询mqtt主题详情
 * @method Models\DescribeMQTTTopicListResponse DescribeMQTTTopicList(Models\DescribeMQTTTopicListRequest $req) 获取主题列表，Filter参数使用说明如下：

1. TopicName，主题名称模糊搜索
2. TopicType，主题类型查询，支持多选，可选值：Normal,Order,Transaction,DelayScheduled
 * @method Models\DescribeMQTTUserListResponse DescribeMQTTUserList(Models\DescribeMQTTUserListRequest $req) 查询用户列表，Filter参数使用说明如下：

1. Username，用户名称模糊搜索
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) 查询角色列表，Filter参数使用说明如下：

1. RoleName，角色名称模糊搜索
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) 查询主题详情，Offset和Limit参数是指订阅该主题的消费组查询分页参数，Filter参数使用说明如下：

ConsumerGroup，消费组名称过滤
 * @method Models\DescribeTopicListResponse DescribeTopicList(Models\DescribeTopicListRequest $req) 获取主题列表，Filter参数使用说明如下：

1. TopicName，主题名称模糊搜索
2. TopicType，主题类型查询，支持多选，可选值：Normal,Order,Transaction,DelayScheduled
 * @method Models\ImportSourceClusterConsumerGroupsResponse ImportSourceClusterConsumerGroups(Models\ImportSourceClusterConsumerGroupsRequest $req) 导入消费者组列表
 * @method Models\ImportSourceClusterTopicsResponse ImportSourceClusterTopics(Models\ImportSourceClusterTopicsRequest $req) 导入topic列表
 * @method Models\ModifyConsumerGroupResponse ModifyConsumerGroup(Models\ModifyConsumerGroupRequest $req) 修改消费组属性
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改实例属性
 * @method Models\ModifyMQTTInsPublicEndpointResponse ModifyMQTTInsPublicEndpoint(Models\ModifyMQTTInsPublicEndpointRequest $req) 更新MQTT实例公网接入点
 * @method Models\ModifyMQTTInstanceResponse ModifyMQTTInstance(Models\ModifyMQTTInstanceRequest $req) 修改实例属性
 * @method Models\ModifyMQTTInstanceCertBindingResponse ModifyMQTTInstanceCertBinding(Models\ModifyMQTTInstanceCertBindingRequest $req) 更新MQTT集群绑定证书
参数传空，则为删除证书
 * @method Models\ModifyMQTTTopicResponse ModifyMQTTTopic(Models\ModifyMQTTTopicRequest $req) 修改主题属性
 * @method Models\ModifyMQTTUserResponse ModifyMQTTUser(Models\ModifyMQTTUserRequest $req) 修改MQTT角色
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) 修改角色
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 修改主题属性
 */

class TrocketClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trocket.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trocket";

    /**
     * @var string
     */
    protected $version = "2023-03-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("trocket")."\\"."V20230308\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
