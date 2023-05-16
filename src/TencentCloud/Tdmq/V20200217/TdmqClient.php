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

namespace TencentCloud\Tdmq\V20200217;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdmq\V20200217\Models as Models;

/**
 * @method Models\AcknowledgeMessageResponse AcknowledgeMessage(Models\AcknowledgeMessageRequest $req) 根据提供的 MessageID 确认指定 topic 中的消息
 * @method Models\ClearCmqQueueResponse ClearCmqQueue(Models\ClearCmqQueueRequest $req) 清空cmq消息队列中的消息
 * @method Models\ClearCmqSubscriptionFilterTagsResponse ClearCmqSubscriptionFilterTags(Models\ClearCmqSubscriptionFilterTagsRequest $req) 清空订阅者消息标签
 * @method Models\CreateAMQPClusterResponse CreateAMQPCluster(Models\CreateAMQPClusterRequest $req) 产品下线了，对应的接口也要下线。

创建AMQP集群
 * @method Models\CreateAMQPExchangeResponse CreateAMQPExchange(Models\CreateAMQPExchangeRequest $req) 产品下线了，对应的接口也要下线。

创建AMQP Exchange
 * @method Models\CreateAMQPQueueResponse CreateAMQPQueue(Models\CreateAMQPQueueRequest $req) 产品下线了，对应的接口也要下线。

创建AMQP队列
 * @method Models\CreateAMQPRouteRelationResponse CreateAMQPRouteRelation(Models\CreateAMQPRouteRelationRequest $req) 产品下线了，对应的接口也要下线。

创建AMQP路由关系
 * @method Models\CreateAMQPVHostResponse CreateAMQPVHost(Models\CreateAMQPVHostRequest $req) 产品下线了，对应的接口也要下线。

创建Amqp Vhost
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建用户的集群
 * @method Models\CreateCmqQueueResponse CreateCmqQueue(Models\CreateCmqQueueRequest $req) 创建cmq队列接口
 * @method Models\CreateCmqSubscribeResponse CreateCmqSubscribe(Models\CreateCmqSubscribeRequest $req) 创建cmq订阅接口
 * @method Models\CreateCmqTopicResponse CreateCmqTopic(Models\CreateCmqTopicRequest $req) 创建cmq主题
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) 用于在用户账户下创建消息队列 Tdmq 命名空间
 * @method Models\CreateEnvironmentRoleResponse CreateEnvironmentRole(Models\CreateEnvironmentRoleRequest $req) 创建环境角色授权
 * @method Models\CreateRabbitMQUserResponse CreateRabbitMQUser(Models\CreateRabbitMQUserRequest $req) 创建RabbitMQ的用户
 * @method Models\CreateRabbitMQVipInstanceResponse CreateRabbitMQVipInstance(Models\CreateRabbitMQVipInstanceRequest $req) 创建RabbitMQ专享版实例
 * @method Models\CreateRabbitMQVirtualHostResponse CreateRabbitMQVirtualHost(Models\CreateRabbitMQVirtualHostRequest $req) 创建RabbitMQ的vhost
 * @method Models\CreateRocketMQClusterResponse CreateRocketMQCluster(Models\CreateRocketMQClusterRequest $req) 此接口用于创建一个RocketMQ集群
 * @method Models\CreateRocketMQGroupResponse CreateRocketMQGroup(Models\CreateRocketMQGroupRequest $req) 创建RocketMQ消费组
 * @method Models\CreateRocketMQNamespaceResponse CreateRocketMQNamespace(Models\CreateRocketMQNamespaceRequest $req) 创建RocketMQ命名空间
 * @method Models\CreateRocketMQTopicResponse CreateRocketMQTopic(Models\CreateRocketMQTopicRequest $req) 创建RocketMQ主题
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 创建角色
 * @method Models\CreateSubscriptionResponse CreateSubscription(Models\CreateSubscriptionRequest $req) 创建一个主题的订阅关系
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 新增指定分区、类型的消息主题
 * @method Models\DeleteAMQPClusterResponse DeleteAMQPCluster(Models\DeleteAMQPClusterRequest $req) 产品下线了，对应的接口也要下线。

删除AMQP集群
 * @method Models\DeleteAMQPExchangeResponse DeleteAMQPExchange(Models\DeleteAMQPExchangeRequest $req) 产品下线了，对应的接口也要下线。

删除Amqp交换机
 * @method Models\DeleteAMQPQueueResponse DeleteAMQPQueue(Models\DeleteAMQPQueueRequest $req) 产品下线了，对应的接口也要下线。

删除Amqp队列
 * @method Models\DeleteAMQPRouteRelationResponse DeleteAMQPRouteRelation(Models\DeleteAMQPRouteRelationRequest $req) 产品下线了，对应的接口也要下线。

删除Amqp路由关系
 * @method Models\DeleteAMQPVHostResponse DeleteAMQPVHost(Models\DeleteAMQPVHostRequest $req) 产品下线了，对应的接口也要下线。

删除Vhost
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除集群
 * @method Models\DeleteCmqQueueResponse DeleteCmqQueue(Models\DeleteCmqQueueRequest $req) 删除cmq队列
 * @method Models\DeleteCmqSubscribeResponse DeleteCmqSubscribe(Models\DeleteCmqSubscribeRequest $req) 删除cmq订阅
 * @method Models\DeleteCmqTopicResponse DeleteCmqTopic(Models\DeleteCmqTopicRequest $req) 删除cmq主题
 * @method Models\DeleteEnvironmentRolesResponse DeleteEnvironmentRoles(Models\DeleteEnvironmentRolesRequest $req) 删除环境角色授权。
 * @method Models\DeleteEnvironmentsResponse DeleteEnvironments(Models\DeleteEnvironmentsRequest $req) 批量删除租户下的命名空间
 * @method Models\DeleteRocketMQClusterResponse DeleteRocketMQCluster(Models\DeleteRocketMQClusterRequest $req) 删除RocketMQ集群
 * @method Models\DeleteRocketMQGroupResponse DeleteRocketMQGroup(Models\DeleteRocketMQGroupRequest $req) 删除RocketMQ消费组
 * @method Models\DeleteRocketMQNamespaceResponse DeleteRocketMQNamespace(Models\DeleteRocketMQNamespaceRequest $req) 删除RocketMQ命名空间
 * @method Models\DeleteRocketMQTopicResponse DeleteRocketMQTopic(Models\DeleteRocketMQTopicRequest $req) 删除RocketMQ主题
 * @method Models\DeleteRolesResponse DeleteRoles(Models\DeleteRolesRequest $req) 删除角色，支持批量。
 * @method Models\DeleteSubscriptionsResponse DeleteSubscriptions(Models\DeleteSubscriptionsRequest $req) 删除订阅关系
 * @method Models\DeleteTopicsResponse DeleteTopics(Models\DeleteTopicsRequest $req) 批量删除topics
 * @method Models\DescribeAMQPClusterResponse DescribeAMQPCluster(Models\DescribeAMQPClusterRequest $req) 产品下线了，对应的接口也要下线。

获取单个Amqp集群信息
 * @method Models\DescribeAMQPClustersResponse DescribeAMQPClusters(Models\DescribeAMQPClustersRequest $req) 获取amqp集群列表
 * @method Models\DescribeAMQPCreateQuotaResponse DescribeAMQPCreateQuota(Models\DescribeAMQPCreateQuotaRequest $req) 产品下线了，对应的接口也要下线。

获取用户的配额，如Queue容量，Exchange容量，Vhost容量，单Vhost Tps数,剩余可创建集群数
 * @method Models\DescribeAMQPExchangesResponse DescribeAMQPExchanges(Models\DescribeAMQPExchangesRequest $req) 产品下线了，对应的接口也要下线。

获取AMQP Exchange列表
 * @method Models\DescribeAMQPQueuesResponse DescribeAMQPQueues(Models\DescribeAMQPQueuesRequest $req) 产品下线了，对应的接口也要下线。

获取Amqp队列列表
 * @method Models\DescribeAMQPRouteRelationsResponse DescribeAMQPRouteRelations(Models\DescribeAMQPRouteRelationsRequest $req) 产品下线了，对应的接口也要下线。

获取Amqp路由关系列表
 * @method Models\DescribeAMQPVHostsResponse DescribeAMQPVHosts(Models\DescribeAMQPVHostsRequest $req) 产品下线了，对应的接口也要下线。

获取Amqp Vhost 列表
 * @method Models\DescribeAllTenantsResponse DescribeAllTenants(Models\DescribeAllTenantsRequest $req) 获取某个租户的虚拟集群列表
 * @method Models\DescribeBindClustersResponse DescribeBindClusters(Models\DescribeBindClustersRequest $req) 获取用户绑定的专享集群列表
 * @method Models\DescribeBindVpcsResponse DescribeBindVpcs(Models\DescribeBindVpcsRequest $req) 获取租户VPC绑定关系
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) 获取集群的详细信息
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 获取集群列表
 * @method Models\DescribeCmqDeadLetterSourceQueuesResponse DescribeCmqDeadLetterSourceQueues(Models\DescribeCmqDeadLetterSourceQueuesRequest $req) 枚举cmq死信队列源队列
 * @method Models\DescribeCmqQueueDetailResponse DescribeCmqQueueDetail(Models\DescribeCmqQueueDetailRequest $req) 查询cmq队列详情
 * @method Models\DescribeCmqQueuesResponse DescribeCmqQueues(Models\DescribeCmqQueuesRequest $req) 查询cmq全量队列
 * @method Models\DescribeCmqSubscriptionDetailResponse DescribeCmqSubscriptionDetail(Models\DescribeCmqSubscriptionDetailRequest $req) 查询cmq订阅详情
 * @method Models\DescribeCmqTopicDetailResponse DescribeCmqTopicDetail(Models\DescribeCmqTopicDetailRequest $req) 查询cmq主题详情
 * @method Models\DescribeCmqTopicsResponse DescribeCmqTopics(Models\DescribeCmqTopicsRequest $req) 枚举cmq全量主题
 * @method Models\DescribeEnvironmentAttributesResponse DescribeEnvironmentAttributes(Models\DescribeEnvironmentAttributesRequest $req) 获取指定命名空间的属性
 * @method Models\DescribeEnvironmentRolesResponse DescribeEnvironmentRoles(Models\DescribeEnvironmentRolesRequest $req) 获取命名空间角色列表
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 获取租户下命名空间列表
 * @method Models\DescribeNamespaceBundlesOptResponse DescribeNamespaceBundlesOpt(Models\DescribeNamespaceBundlesOptRequest $req) 运营端获取命名空间bundle列表
 * @method Models\DescribeNodeHealthOptResponse DescribeNodeHealthOpt(Models\DescribeNodeHealthOptRequest $req) 运营端获节点健康状态
 * @method Models\DescribePublisherSummaryResponse DescribePublisherSummary(Models\DescribePublisherSummaryRequest $req) 获取消息生产概览信息
 * @method Models\DescribePublishersResponse DescribePublishers(Models\DescribePublishersRequest $req) 获取生产者信息列表
 * @method Models\DescribePulsarProInstanceDetailResponse DescribePulsarProInstanceDetail(Models\DescribePulsarProInstanceDetailRequest $req) 获取Pulsar专业版集群实例信息
 * @method Models\DescribePulsarProInstancesResponse DescribePulsarProInstances(Models\DescribePulsarProInstancesRequest $req) 查询用户已购的Pulsar专业版实例列表
 * @method Models\DescribeRabbitMQNodeListResponse DescribeRabbitMQNodeList(Models\DescribeRabbitMQNodeListRequest $req) RabbitMQ专享版查询节点列表
 * @method Models\DescribeRabbitMQVipInstanceResponse DescribeRabbitMQVipInstance(Models\DescribeRabbitMQVipInstanceRequest $req) 获取单个RabbitMQ专享实例信息
 * @method Models\DescribeRabbitMQVipInstancesResponse DescribeRabbitMQVipInstances(Models\DescribeRabbitMQVipInstancesRequest $req) 查询用户已购的RabbitMQ专享实例列表
 * @method Models\DescribeRocketMQClusterResponse DescribeRocketMQCluster(Models\DescribeRocketMQClusterRequest $req) 获取单个RocketMQ集群信息
 * @method Models\DescribeRocketMQClustersResponse DescribeRocketMQClusters(Models\DescribeRocketMQClustersRequest $req) 获取RocketMQ集群列表
 * @method Models\DescribeRocketMQGroupsResponse DescribeRocketMQGroups(Models\DescribeRocketMQGroupsRequest $req) 获取RocketMQ消费组列表
 * @method Models\DescribeRocketMQMsgResponse DescribeRocketMQMsg(Models\DescribeRocketMQMsgRequest $req) rocketmq消息详情
 * @method Models\DescribeRocketMQNamespacesResponse DescribeRocketMQNamespaces(Models\DescribeRocketMQNamespacesRequest $req) 获取RocketMQ命名空间列表
 * @method Models\DescribeRocketMQTopicsResponse DescribeRocketMQTopics(Models\DescribeRocketMQTopicsRequest $req) 获取RocketMQ主题列表
 * @method Models\DescribeRocketMQVipInstanceDetailResponse DescribeRocketMQVipInstanceDetail(Models\DescribeRocketMQVipInstanceDetailRequest $req) 获取单个RocketMQ专享集群信息
 * @method Models\DescribeRocketMQVipInstancesResponse DescribeRocketMQVipInstances(Models\DescribeRocketMQVipInstancesRequest $req) 查询用户已购的RocketMQ专享实例列表
 * @method Models\DescribeRolesResponse DescribeRoles(Models\DescribeRolesRequest $req) 获取角色列表
 * @method Models\DescribeSubscriptionsResponse DescribeSubscriptions(Models\DescribeSubscriptionsRequest $req) 查询指定环境和主题下的订阅者列表
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req) 获取环境下主题列表
 * @method Models\ModifyAMQPClusterResponse ModifyAMQPCluster(Models\ModifyAMQPClusterRequest $req) 更新Amqp集群信息
 * @method Models\ModifyAMQPExchangeResponse ModifyAMQPExchange(Models\ModifyAMQPExchangeRequest $req) 产品下线了，对应的接口也要下线。

更新Amqp交换机
 * @method Models\ModifyAMQPQueueResponse ModifyAMQPQueue(Models\ModifyAMQPQueueRequest $req) 产品下线了，对应的接口也要下线。

更新Amqp队列
 * @method Models\ModifyAMQPVHostResponse ModifyAMQPVHost(Models\ModifyAMQPVHostRequest $req) 产品下线了，对应的接口也要下线。

更新Vhost
 * @method Models\ModifyClusterResponse ModifyCluster(Models\ModifyClusterRequest $req) 更新集群信息
 * @method Models\ModifyCmqQueueAttributeResponse ModifyCmqQueueAttribute(Models\ModifyCmqQueueAttributeRequest $req) 修改cmq队列属性
 * @method Models\ModifyCmqSubscriptionAttributeResponse ModifyCmqSubscriptionAttribute(Models\ModifyCmqSubscriptionAttributeRequest $req) 修改cmq订阅属性
 * @method Models\ModifyCmqTopicAttributeResponse ModifyCmqTopicAttribute(Models\ModifyCmqTopicAttributeRequest $req) 修改cmq主题属性
 * @method Models\ModifyEnvironmentAttributesResponse ModifyEnvironmentAttributes(Models\ModifyEnvironmentAttributesRequest $req) 修改指定命名空间的属性值
 * @method Models\ModifyEnvironmentRoleResponse ModifyEnvironmentRole(Models\ModifyEnvironmentRoleRequest $req) 修改环境角色授权。
 * @method Models\ModifyRabbitMQVipInstanceResponse ModifyRabbitMQVipInstance(Models\ModifyRabbitMQVipInstanceRequest $req) 修改RabbitMQ专享版实例
 * @method Models\ModifyRocketMQClusterResponse ModifyRocketMQCluster(Models\ModifyRocketMQClusterRequest $req) 更新RocketMQ集群信息
 * @method Models\ModifyRocketMQGroupResponse ModifyRocketMQGroup(Models\ModifyRocketMQGroupRequest $req) 更新RocketMQ消费组信息
 * @method Models\ModifyRocketMQInstanceSpecResponse ModifyRocketMQInstanceSpec(Models\ModifyRocketMQInstanceSpecRequest $req) 本API用于修改RocketMQ专享实例配置，可以支持实例规格、节点数和存储的升配和实例规格的降配。本API发起订单并成功支付后进入实例配置变更的流程，可通过DescribeRocketMQVipInstances查询实例是否已变更完成。
 * @method Models\ModifyRocketMQNamespaceResponse ModifyRocketMQNamespace(Models\ModifyRocketMQNamespaceRequest $req) 更新RocketMQ命名空间
 * @method Models\ModifyRocketMQTopicResponse ModifyRocketMQTopic(Models\ModifyRocketMQTopicRequest $req) 更新RocketMQ主题信息
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) 角色修改
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 修改主题备注和分区数
 * @method Models\PublishCmqMsgResponse PublishCmqMsg(Models\PublishCmqMsgRequest $req) 发送cmq主题消息
 * @method Models\ReceiveMessageResponse ReceiveMessage(Models\ReceiveMessageRequest $req) 当前 ReceiveMessage 接口只支持 Partitioned 类型的 Topic。该接口用于接收发送到指定 Partitioned Topic 中的消息，当 Partitioned Topic 中没有消息但还去尝试调用该接口时，会抛出 ReceiveTimeout 的异常。

如何使用 BatchReceivePolicy：

BatchReceive 接口提供了如下三个参数：

● MaxNumMessages: 即每次使用 BatchReceive 的时候，最多一次Receive接口返回多少条消息。
● MaxNumBytes：即每次使用 BatchReceive 的时候，最多一次Receive接口返回多大内容的消息，单位是：bytes。
● Timeout：即每次使用 BatchReceive 的时候，最多一次 Receive 接口的超时时间是多久，单位是：MS。

默认如果上述三个参数都不指定，即关闭 BatchReceive 的特性。如果三个参数中的任意一个参数指定的数值大于 0，即开启 BatchReceive。BatchReceive 的结束条件为到达上述三个参数中任意一个指定的阈值。

注意：MaxNumMessages 和 MaxNumBytes 每一次接收的最大消息同时受限于 ReceiveQueueSize 的大小，如果 ReceiveQueueSize 的大小设置为 5，MaxNumMessages 设置为10，那么一次 BatchReceive 接收的最多的消息是 5条，而不是10条。



BatchReceivePolicy 的接口会一次性返回多条消息：

1. 多条消息的内容之间使用特殊字符 '###' 来进行分割，业务侧接收到消息之后，可以利用不同语言提供的 Split 工具分割不同的消息。
2. 多条消息的 MessageID 之间使用特殊字符 '###' 来进行分割，业务侧接收到消息之后，可以利用不同语言提供的 Split 工具分割不同的消息。（用于在调用 AcknowledgeMessage 接口中填入所需要的 MessageID 字段信息）

 * @method Models\ResetMsgSubOffsetByTimestampResponse ResetMsgSubOffsetByTimestamp(Models\ResetMsgSubOffsetByTimestampRequest $req) 根据时间戳进行消息回溯，精确到毫秒
 * @method Models\ResetRocketMQConsumerOffSetResponse ResetRocketMQConsumerOffSet(Models\ResetRocketMQConsumerOffSetRequest $req) 重置指定Group的消费位点到指定时间戳
 * @method Models\RewindCmqQueueResponse RewindCmqQueue(Models\RewindCmqQueueRequest $req) 回溯cmq队列
 * @method Models\SendBatchMessagesResponse SendBatchMessages(Models\SendBatchMessagesRequest $req) 批量发送消息

注意：TDMQ 批量发送消息的接口是在 TDMQ-HTTP 的服务侧将消息打包为一个 Batch，然后将该 Batch 在服务内部当作一次 TCP 请求发送出去。所以在使用过程中，用户还是按照单条消息发送的逻辑，每一条消息是一个独立的 HTTP 的请求，在 TDMQ-HTTP 的服务内部，会将多个 HTTP 的请求聚合为一个 Batch 发送到服务端。即，批量发送消息在使用上与发送单条消息是一致的，batch 的聚合是在 TDMQ-HTTP 的服务内部完成的。
 * @method Models\SendCmqMsgResponse SendCmqMsg(Models\SendCmqMsgRequest $req) 发送cmq消息
 * @method Models\SendMessagesResponse SendMessages(Models\SendMessagesRequest $req) 发送单条消息
 * @method Models\SendMsgResponse SendMsg(Models\SendMsgRequest $req) 此接口仅用于测试发生消息，不能作为现网正式生产使用
 * @method Models\UnbindCmqDeadLetterResponse UnbindCmqDeadLetter(Models\UnbindCmqDeadLetterRequest $req) 解绑cmq死信队列
 */

class TdmqClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdmq.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdmq";

    /**
     * @var string
     */
    protected $version = "2020-02-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdmq")."\\"."V20200217\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
