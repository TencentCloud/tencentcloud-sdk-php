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

namespace TencentCloud\Tdmq\V20200217;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdmq\V20200217\Models as Models;

/**
 * @method Models\AcknowledgeMessageResponse AcknowledgeMessage(Models\AcknowledgeMessageRequest $req) 根据提供的 MessageID 确认指定 topic 中的消息
 * @method Models\ClearCmqQueueResponse ClearCmqQueue(Models\ClearCmqQueueRequest $req) 清空cmq消息队列中的消息
 * @method Models\ClearCmqSubscriptionFilterTagsResponse ClearCmqSubscriptionFilterTags(Models\ClearCmqSubscriptionFilterTagsRequest $req) 清空订阅者消息标签
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 创建用户的集群
 * @method Models\CreateCmqQueueResponse CreateCmqQueue(Models\CreateCmqQueueRequest $req) 创建cmq队列接口
 * @method Models\CreateCmqSubscribeResponse CreateCmqSubscribe(Models\CreateCmqSubscribeRequest $req) 创建cmq订阅接口
 * @method Models\CreateCmqTopicResponse CreateCmqTopic(Models\CreateCmqTopicRequest $req) 创建cmq主题
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) 用于在用户账户下创建消息队列 Tdmq 命名空间
 * @method Models\CreateEnvironmentRoleResponse CreateEnvironmentRole(Models\CreateEnvironmentRoleRequest $req) 创建环境角色授权
 * @method Models\CreateProClusterResponse CreateProCluster(Models\CreateProClusterRequest $req) 创建专业集群——预付费，仅通过api调用
 * @method Models\CreateRabbitMQBindingResponse CreateRabbitMQBinding(Models\CreateRabbitMQBindingRequest $req) 创建RabbitMQ路由关系
 * @method Models\CreateRabbitMQUserResponse CreateRabbitMQUser(Models\CreateRabbitMQUserRequest $req) 创建RabbitMQ的用户
 * @method Models\CreateRabbitMQVipInstanceResponse CreateRabbitMQVipInstance(Models\CreateRabbitMQVipInstanceRequest $req) 创建 RabbitMQ 托管版实例
 * @method Models\CreateRabbitMQVirtualHostResponse CreateRabbitMQVirtualHost(Models\CreateRabbitMQVirtualHostRequest $req) 创建RabbitMQ的vhost
 * @method Models\CreateRocketMQClusterResponse CreateRocketMQCluster(Models\CreateRocketMQClusterRequest $req) 创建 RocketMQ 集群。
当前 API 适用集群：4.x 虚拟集群。创建 4.x 专享或通用集群的接口文档见 [CreateRocketMQVipInstance](https://cloud.tencent.com/document/api/1179/95721)，创建 5.x 集群接口文档见 [CreateInstance](https://cloud.tencent.com/document/api/1493/97868)。
 * @method Models\CreateRocketMQEnvironmentRoleResponse CreateRocketMQEnvironmentRole(Models\CreateRocketMQEnvironmentRoleRequest $req) 创建角色授权。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的创建角色接口文档见 [CreateRole](https://cloud.tencent.com/document/api/1493/98864)。
 * @method Models\CreateRocketMQGroupResponse CreateRocketMQGroup(Models\CreateRocketMQGroupRequest $req) 创建 RocketMQ 消费组。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。创建 5.x 集群消费组的接口文档见 [CreateConsumerGroup](https://cloud.tencent.com/document/api/1493/97943)。
 * @method Models\CreateRocketMQNamespaceResponse CreateRocketMQNamespace(Models\CreateRocketMQNamespaceRequest $req) 创建 RocketMQ 命名空间。
当前 API 适用集群：4.x 虚拟集群和 4.x 专享集群，其他集群类型均不支持该功能。
 * @method Models\CreateRocketMQRoleResponse CreateRocketMQRole(Models\CreateRocketMQRoleRequest $req) 创建角色。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的创建角色接口文档见 [CreateRole](https://cloud.tencent.com/document/api/1493/98864)。
 * @method Models\CreateRocketMQTopicResponse CreateRocketMQTopic(Models\CreateRocketMQTopicRequest $req) 批量创建 RocketMQ 主题。
当前云 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的创建 Topic 接口文档见 [CreateTopic](https://cloud.tencent.com/document/api/1493/97947)。
 * @method Models\CreateRocketMQTopicV2Response CreateRocketMQTopicV2(Models\CreateRocketMQTopicV2Request $req) 创建 RocketMQ 主题。
当前云 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的创建 Topic 接口文档见 [CreateTopic](https://cloud.tencent.com/document/api/1493/97947)。
 * @method Models\CreateRocketMQVipInstanceResponse CreateRocketMQVipInstance(Models\CreateRocketMQVipInstanceRequest $req) 创建 RocketMQ 4.x 集群。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。创建 5.x 集群的接口文档见 [CreateInstance](https://cloud.tencent.com/document/api/1493/97868)。
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 创建角色
 * @method Models\CreateSubscriptionResponse CreateSubscription(Models\CreateSubscriptionRequest $req) 创建一个主题的订阅关系
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 新增指定分区、类型的消息主题
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 删除集群
 * @method Models\DeleteCmqQueueResponse DeleteCmqQueue(Models\DeleteCmqQueueRequest $req) 删除cmq队列
 * @method Models\DeleteCmqSubscribeResponse DeleteCmqSubscribe(Models\DeleteCmqSubscribeRequest $req) 删除cmq订阅
 * @method Models\DeleteCmqTopicResponse DeleteCmqTopic(Models\DeleteCmqTopicRequest $req) 删除cmq主题
 * @method Models\DeleteEnvironmentRolesResponse DeleteEnvironmentRoles(Models\DeleteEnvironmentRolesRequest $req) 删除环境角色授权。
 * @method Models\DeleteEnvironmentsResponse DeleteEnvironments(Models\DeleteEnvironmentsRequest $req) 批量删除租户下的命名空间
 * @method Models\DeleteProClusterResponse DeleteProCluster(Models\DeleteProClusterRequest $req) 删除专业集群——预付费，仅通过API 调用
 * @method Models\DeleteRabbitMQBindingResponse DeleteRabbitMQBinding(Models\DeleteRabbitMQBindingRequest $req) 解绑RabbitMQ路由关系
 * @method Models\DeleteRabbitMQPermissionResponse DeleteRabbitMQPermission(Models\DeleteRabbitMQPermissionRequest $req) 删除RabbitMQ的权限
 * @method Models\DeleteRabbitMQUserResponse DeleteRabbitMQUser(Models\DeleteRabbitMQUserRequest $req) 删除RabbitMQ的用户
 * @method Models\DeleteRabbitMQVipInstanceResponse DeleteRabbitMQVipInstance(Models\DeleteRabbitMQVipInstanceRequest $req) 删除 RabbitMQ 托管版实例
 * @method Models\DeleteRabbitMQVirtualHostResponse DeleteRabbitMQVirtualHost(Models\DeleteRabbitMQVirtualHostRequest $req) 删除RabbitMQ的vhost
 * @method Models\DeleteRocketMQClusterResponse DeleteRocketMQCluster(Models\DeleteRocketMQClusterRequest $req) 删除 RocketMQ 集群。
当前 API 适用集群：4.x 虚拟集群。删除 4.x 专享或通用集群的接口文档见 [DeleteRocketMQVipInstance](https://cloud.tencent.com/document/api/1179/95802)，删除 5.x 集群的接口文档见 [DeleteInstance](https://cloud.tencent.com/document/product/1493/97867)。
 * @method Models\DeleteRocketMQEnvironmentRolesResponse DeleteRocketMQEnvironmentRoles(Models\DeleteRocketMQEnvironmentRolesRequest $req) 批量删除角色授权。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的删除角色接口文档见 [DeleteRole](https://cloud.tencent.com/document/api/1493/98863)。
 * @method Models\DeleteRocketMQGroupResponse DeleteRocketMQGroup(Models\DeleteRocketMQGroupRequest $req) 删除 RocketMQ 消费组。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。删除 5.x 集群消费组的接口文档见 [DeleteConsumerGroup](https://cloud.tencent.com/document/api/1493/97942)。
 * @method Models\DeleteRocketMQNamespaceResponse DeleteRocketMQNamespace(Models\DeleteRocketMQNamespaceRequest $req) 删除 RocketMQ 命名空间。
当前 API 适用集群：4.x 虚拟集群和 4.x 专享集群，其他集群类型均不支持该功能。
 * @method Models\DeleteRocketMQRolesResponse DeleteRocketMQRoles(Models\DeleteRocketMQRolesRequest $req) 批量删除角色。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的删除角色接口文档见 [DeleteRole](https://cloud.tencent.com/document/api/1493/98863)。
 * @method Models\DeleteRocketMQTopicResponse DeleteRocketMQTopic(Models\DeleteRocketMQTopicRequest $req) 删除 RocketMQ 主题。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。删除 5.x 集群主题的接口文档见 [DeleteTopic](https://cloud.tencent.com/document/api/1493/97946)。
 * @method Models\DeleteRocketMQVipInstanceResponse DeleteRocketMQVipInstance(Models\DeleteRocketMQVipInstanceRequest $req) 删除 RocketMQ 专享或通用集群。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。删除 5.x 集群的接口文档见 [DeleteInstance](https://cloud.tencent.com/document/api/1493/97867)。
 * @method Models\DeleteRolesResponse DeleteRoles(Models\DeleteRolesRequest $req) 删除角色，支持批量。
 * @method Models\DeleteSubscriptionsResponse DeleteSubscriptions(Models\DeleteSubscriptionsRequest $req) 删除订阅关系
 * @method Models\DeleteTopicsResponse DeleteTopics(Models\DeleteTopicsRequest $req) 批量删除topics
 * @method Models\DescribeAMQPClustersResponse DescribeAMQPClusters(Models\DescribeAMQPClustersRequest $req) 历史原因，该接口位于tdmq-manager，目前rabbitmq产品没有使用该接口，当前使用的是DescribeRabbitMQVipInstances。不过从调用链上看，线网还有请求流程，所以走预下线流程。

获取amqp集群列表
 * @method Models\DescribeAllTenantsResponse DescribeAllTenants(Models\DescribeAllTenantsRequest $req) 获取某个租户的虚拟集群列表
 * @method Models\DescribeBindClustersResponse DescribeBindClusters(Models\DescribeBindClustersRequest $req) 获取用户绑定的专享集群列表
 * @method Models\DescribeBindVpcsResponse DescribeBindVpcs(Models\DescribeBindVpcsRequest $req) 获取租户VPC绑定关系
 * @method Models\DescribeClusterDetailResponse DescribeClusterDetail(Models\DescribeClusterDetailRequest $req) 获取集群的详细信息
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 获取集群列表
 * @method Models\DescribeCmqQueueDetailResponse DescribeCmqQueueDetail(Models\DescribeCmqQueueDetailRequest $req) 查询cmq队列详情
 * @method Models\DescribeCmqQueuesResponse DescribeCmqQueues(Models\DescribeCmqQueuesRequest $req) 查询cmq全量队列
 * @method Models\DescribeCmqSubscriptionDetailResponse DescribeCmqSubscriptionDetail(Models\DescribeCmqSubscriptionDetailRequest $req) 查询cmq订阅详情
 * @method Models\DescribeCmqTopicDetailResponse DescribeCmqTopicDetail(Models\DescribeCmqTopicDetailRequest $req) 查询cmq主题详情
 * @method Models\DescribeCmqTopicsResponse DescribeCmqTopics(Models\DescribeCmqTopicsRequest $req) 枚举cmq全量主题
 * @method Models\DescribeEnvironmentAttributesResponse DescribeEnvironmentAttributes(Models\DescribeEnvironmentAttributesRequest $req) 获取指定命名空间的属性
 * @method Models\DescribeEnvironmentRolesResponse DescribeEnvironmentRoles(Models\DescribeEnvironmentRolesRequest $req) 获取命名空间角色列表
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 获取租户下命名空间列表
 * @method Models\DescribeMqMsgTraceResponse DescribeMqMsgTrace(Models\DescribeMqMsgTraceRequest $req) 查询消息轨迹
 * @method Models\DescribeMsgResponse DescribeMsg(Models\DescribeMsgRequest $req) 消息详情
 * @method Models\DescribeMsgTraceResponse DescribeMsgTrace(Models\DescribeMsgTraceRequest $req) 查询单条消息的消息轨迹
 * @method Models\DescribeNamespaceBundlesOptResponse DescribeNamespaceBundlesOpt(Models\DescribeNamespaceBundlesOptRequest $req) 运营端获取命名空间bundle列表
 * @method Models\DescribeNodeHealthOptResponse DescribeNodeHealthOpt(Models\DescribeNodeHealthOptRequest $req) 运营端获节点健康状态
 * @method Models\DescribePublisherSummaryResponse DescribePublisherSummary(Models\DescribePublisherSummaryRequest $req) 获取消息生产概览信息
 * @method Models\DescribePublishersResponse DescribePublishers(Models\DescribePublishersRequest $req) 获取生产者信息列表
 * @method Models\DescribePulsarProInstanceDetailResponse DescribePulsarProInstanceDetail(Models\DescribePulsarProInstanceDetailRequest $req) 获取Pulsar专业版集群实例信息
 * @method Models\DescribePulsarProInstancesResponse DescribePulsarProInstances(Models\DescribePulsarProInstancesRequest $req) 查询用户已购的Pulsar专业版实例列表
 * @method Models\DescribeRabbitMQBindingsResponse DescribeRabbitMQBindings(Models\DescribeRabbitMQBindingsRequest $req) 查询RabbitMQ路由关系列表
 * @method Models\DescribeRabbitMQExchangesResponse DescribeRabbitMQExchanges(Models\DescribeRabbitMQExchangesRequest $req) 查询RabbitMQ exchange 列表
 * @method Models\DescribeRabbitMQNodeListResponse DescribeRabbitMQNodeList(Models\DescribeRabbitMQNodeListRequest $req) 查询 RabbitMQ 托管版节点列表
 * @method Models\DescribeRabbitMQPermissionResponse DescribeRabbitMQPermission(Models\DescribeRabbitMQPermissionRequest $req) 查询RabbitMQ权限列表
 * @method Models\DescribeRabbitMQQueueDetailResponse DescribeRabbitMQQueueDetail(Models\DescribeRabbitMQQueueDetailRequest $req) 查询RabbitMQ队列详情
 * @method Models\DescribeRabbitMQQueuesResponse DescribeRabbitMQQueues(Models\DescribeRabbitMQQueuesRequest $req) 查询RabbitMQ队列列表
 * @method Models\DescribeRabbitMQUserResponse DescribeRabbitMQUser(Models\DescribeRabbitMQUserRequest $req) 查询RabbitMQ用户列表
 * @method Models\DescribeRabbitMQVipInstanceResponse DescribeRabbitMQVipInstance(Models\DescribeRabbitMQVipInstanceRequest $req) 获取单个 RabbitMQ 托管版实例信息
 * @method Models\DescribeRabbitMQVipInstancesResponse DescribeRabbitMQVipInstances(Models\DescribeRabbitMQVipInstancesRequest $req) 查询用户已购的 RabbitMQ 托管版实例列表
 * @method Models\DescribeRabbitMQVirtualHostResponse DescribeRabbitMQVirtualHost(Models\DescribeRabbitMQVirtualHostRequest $req) 查询RabbitMQ vhost列表
 * @method Models\DescribeRocketMQClusterResponse DescribeRocketMQCluster(Models\DescribeRocketMQClusterRequest $req) 查询 RocketMQ 虚拟集群信息。
当前 API 适用集群：4.x 虚拟集群。查询 4.x 专享或通用集群信息的接口文档见 [DescribeRocketMQVipInstanceDetail](https://cloud.tencent.com/document/api/1179/86725)，查询 5.x 集群信息的接口文档见 [DescribeInstance](https://cloud.tencent.com/document/api/1493/97866)。
 * @method Models\DescribeRocketMQClustersResponse DescribeRocketMQClusters(Models\DescribeRocketMQClustersRequest $req) 查询 RocketMQ 虚拟集群列表。
当前 API 适用集群：4.x 虚拟集群。查询 5.x 集群列表接口文档见 [DescribeInstanceList](https://cloud.tencent.com/document/api/1493/96028)，或者使用 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口适用所有集群类型。
 * @method Models\DescribeRocketMQConsumeStatsResponse DescribeRocketMQConsumeStats(Models\DescribeRocketMQConsumeStatsRequest $req) 查询 RocketMQ 消费详情列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。查询 5.x 集群消费详情的接口文档见 [DescribeConsumerGroup](https://cloud.tencent.com/document/api/1493/97941)。
 * @method Models\DescribeRocketMQConsumerConnectionDetailResponse DescribeRocketMQConsumerConnectionDetail(Models\DescribeRocketMQConsumerConnectionDetailRequest $req) 查询 RocketMQ 消费者客户端详情。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的查询消费者客户端详情接口文档见 [DescribeConsumerClient](https://cloud.tencent.com/document/api/1493/115240)。
 * @method Models\DescribeRocketMQConsumerConnectionsResponse DescribeRocketMQConsumerConnections(Models\DescribeRocketMQConsumerConnectionsRequest $req) 查询 RocketMQ 消费组下的客户端连接列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群查询消费组下的客户端连接列表接口文档见 [DescribeConsumerClientList](https://cloud.tencent.com/document/api/1493/120140)。
 * @method Models\DescribeRocketMQEnvironmentRolesResponse DescribeRocketMQEnvironmentRoles(Models\DescribeRocketMQEnvironmentRolesRequest $req) 查询角色授权列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的查询角色列表接口文档见 [DescribeRoleList](https://cloud.tencent.com/document/api/1493/98862)。
 * @method Models\DescribeRocketMQGeneralSKUsResponse DescribeRocketMQGeneralSKUs(Models\DescribeRocketMQGeneralSKUsRequest $req) 查询通用集群售卖规格。
当前 API 适用集群：4.x 通用集群。查询 5.x 集群的售卖规格接口文档见 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676)。
 * @method Models\DescribeRocketMQGroupsResponse DescribeRocketMQGroups(Models\DescribeRocketMQGroupsRequest $req) 查询 RocketMQ 消费组列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。查询 5.x 集群的消费组列表接口文档见 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535)。
 * @method Models\DescribeRocketMQMigratingTopicListResponse DescribeRocketMQMigratingTopicList(Models\DescribeRocketMQMigratingTopicListRequest $req) 查询Topic迁移状态列表，源集群和目标集群客户端数量信息需要配合DescribeRocketMQSmoothMigrationTaskTopicInsNum接口查询
 * @method Models\DescribeRocketMQMsgResponse DescribeRocketMQMsg(Models\DescribeRocketMQMsgRequest $req) 查询 RocketMQ 消息详情。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的查询消息详情接口文档见 [DescribeMessage](https://cloud.tencent.com/document/api/1493/114594)。
 * @method Models\DescribeRocketMQMsgTraceResponse DescribeRocketMQMsgTrace(Models\DescribeRocketMQMsgTraceRequest $req) 查询消息轨迹。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群查询消息轨迹的接口文档见 [DescribeMessageTrace](https://cloud.tencent.com/document/api/1493/114302)。
 * @method Models\DescribeRocketMQNamespacesResponse DescribeRocketMQNamespaces(Models\DescribeRocketMQNamespacesRequest $req) 获取 RocketMQ 命名空间列表。
当前 API 适用集群：4.x 虚拟集群和 4.x 专享集群，其他集群类型均不支持该功能。
 * @method Models\DescribeRocketMQProducersResponse DescribeRocketMQProducers(Models\DescribeRocketMQProducersRequest $req) 查询 RocketMQ 指定主题下的生产者客户端列表。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。查询 5.x 集群主题下的生产者客户端列表接口文档见 [DescribeProducerList](https://cloud.tencent.com/document/api/1493/122548)。
 * @method Models\DescribeRocketMQPublicAccessMonitorDataResponse DescribeRocketMQPublicAccessMonitorData(Models\DescribeRocketMQPublicAccessMonitorDataRequest $req) 查询公网指标监控数据，目前仅支持客户端到 LB 的入带宽和出宽带指标。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。5.x 集群暂不支持该功能。
 * @method Models\DescribeRocketMQPublicAccessPointResponse DescribeRocketMQPublicAccessPoint(Models\DescribeRocketMQPublicAccessPointRequest $req) 查询 RocketMQ 集群的公网接入点信息。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。查询 5.x 集群的公网接入点信息接口文档见 [DescribeInstance](https://cloud.tencent.com/document/api/1493/97866)。
 * @method Models\DescribeRocketMQRolesResponse DescribeRocketMQRoles(Models\DescribeRocketMQRolesRequest $req) 查询角色列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的查询角色列表接口文档见 [DescribeRoleList](https://cloud.tencent.com/document/api/1493/98862)。
 * @method Models\DescribeRocketMQSmoothMigrationTaskResponse DescribeRocketMQSmoothMigrationTask(Models\DescribeRocketMQSmoothMigrationTaskRequest $req) 用于获取RocketMQ平滑迁移任务详情
 * @method Models\DescribeRocketMQSubscriptionsResponse DescribeRocketMQSubscriptions(Models\DescribeRocketMQSubscriptionsRequest $req) 查询 RocketMQ 消费组订阅关系列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群查询消费组订阅的主题列表接口文档见 [DescribeTopicListByGroup](https://cloud.tencent.com/document/api/1493/115314)。
 * @method Models\DescribeRocketMQTopUsagesResponse DescribeRocketMQTopUsages(Models\DescribeRocketMQTopUsagesRequest $req) 用于获取RocketMQ指标排序列表，比如集群实例下占用存储空间最多的主题排序。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群暂不支持该功能。
 * @method Models\DescribeRocketMQTopicResponse DescribeRocketMQTopic(Models\DescribeRocketMQTopicRequest $req) 获取RocketMQ主题详情
 * @method Models\DescribeRocketMQTopicMsgsResponse DescribeRocketMQTopicMsgs(Models\DescribeRocketMQTopicMsgsRequest $req) 查询 RocketMQ 消息列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的查询消息列表接口文档见 [DescribeMessageList](https://cloud.tencent.com/document/api/1493/114593)。
 * @method Models\DescribeRocketMQTopicStatsResponse DescribeRocketMQTopicStats(Models\DescribeRocketMQTopicStatsRequest $req) 查询 RocketMQ 主题生产详情列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群暂不支持该功能。
 * @method Models\DescribeRocketMQTopicsResponse DescribeRocketMQTopics(Models\DescribeRocketMQTopicsRequest $req) 查询 RocketMQ 主题列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。查询 5.x 集群的主题列表接口文档见 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030)。
 * @method Models\DescribeRocketMQTopicsByGroupResponse DescribeRocketMQTopicsByGroup(Models\DescribeRocketMQTopicsByGroupRequest $req) 查询 RocketMQ 消费组订阅的主题列表。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群查询消费组订阅的主题列表接口文档见 [DescribeTopicListByGroup](https://cloud.tencent.com/document/api/1493/115314)。
 * @method Models\DescribeRocketMQVipInstanceDetailResponse DescribeRocketMQVipInstanceDetail(Models\DescribeRocketMQVipInstanceDetailRequest $req) 查询 RocketMQ 集群信息。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。查询 5.x 集群信息的接口文档见 [DescribeInstance](https://cloud.tencent.com/document/api/1493/97866)。
 * @method Models\DescribeRocketMQVipInstancesResponse DescribeRocketMQVipInstances(Models\DescribeRocketMQVipInstancesRequest $req) 查询 RocketMQ 4.x 集群列表。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。查询 5.x 集群列表接口文档见 [DescribeInstanceList](https://cloud.tencent.com/document/api/1493/96028)，或者使用 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口适用所有集群类型。
 * @method Models\DescribeRolesResponse DescribeRoles(Models\DescribeRolesRequest $req) 获取角色列表
 * @method Models\DescribeSubscriptionsResponse DescribeSubscriptions(Models\DescribeSubscriptionsRequest $req) 查询指定环境和主题下的订阅者列表
 * @method Models\DescribeTopicMsgsResponse DescribeTopicMsgs(Models\DescribeTopicMsgsRequest $req) 消息查询
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req) 获取环境下主题列表
 * @method Models\ExecuteDisasterRecoveryResponse ExecuteDisasterRecovery(Models\ExecuteDisasterRecoveryRequest $req) 执行域名异地访问切换，域名的访问指向将切换至备份集群。
 * @method Models\ExportRocketMQMessageDetailResponse ExportRocketMQMessageDetail(Models\ExportRocketMQMessageDetailRequest $req) 导出RocketMQ消息详情
 * @method Models\GetTopicListResponse GetTopicList(Models\GetTopicListRequest $req) 获取环境下主题列表
 * @method Models\ImportRocketMQConsumerGroupsResponse ImportRocketMQConsumerGroups(Models\ImportRocketMQConsumerGroupsRequest $req) 输入迁移任务id和要导入的Group，导入后台
 * @method Models\ImportRocketMQTopicsResponse ImportRocketMQTopics(Models\ImportRocketMQTopicsRequest $req) 导入topic列表
 * @method Models\ModifyClusterResponse ModifyCluster(Models\ModifyClusterRequest $req) 更新集群信息
 * @method Models\ModifyCmqQueueAttributeResponse ModifyCmqQueueAttribute(Models\ModifyCmqQueueAttributeRequest $req) 修改cmq队列属性
 * @method Models\ModifyCmqSubscriptionAttributeResponse ModifyCmqSubscriptionAttribute(Models\ModifyCmqSubscriptionAttributeRequest $req) 修改cmq订阅属性
 * @method Models\ModifyCmqTopicAttributeResponse ModifyCmqTopicAttribute(Models\ModifyCmqTopicAttributeRequest $req) 修改cmq主题属性
 * @method Models\ModifyEnvironmentAttributesResponse ModifyEnvironmentAttributes(Models\ModifyEnvironmentAttributesRequest $req) 修改指定命名空间的属性值
 * @method Models\ModifyEnvironmentRoleResponse ModifyEnvironmentRole(Models\ModifyEnvironmentRoleRequest $req) 修改环境角色授权。
 * @method Models\ModifyPublicNetworkSecurityPolicyResponse ModifyPublicNetworkSecurityPolicy(Models\ModifyPublicNetworkSecurityPolicyRequest $req) 修改pulsar专业版公网安全策略
 * @method Models\ModifyRabbitMQPermissionResponse ModifyRabbitMQPermission(Models\ModifyRabbitMQPermissionRequest $req) 修改RabbitMQ的权限
 * @method Models\ModifyRabbitMQUserResponse ModifyRabbitMQUser(Models\ModifyRabbitMQUserRequest $req) 修改RabbitMQ的用户
 * @method Models\ModifyRabbitMQVipInstanceResponse ModifyRabbitMQVipInstance(Models\ModifyRabbitMQVipInstanceRequest $req) 修改RabbitMQ专享版实例
 * @method Models\ModifyRabbitMQVirtualHostResponse ModifyRabbitMQVirtualHost(Models\ModifyRabbitMQVirtualHostRequest $req) 修改RabbitMQ的vhost
 * @method Models\ModifyRocketMQClusterResponse ModifyRocketMQCluster(Models\ModifyRocketMQClusterRequest $req) 修改 RocketMQ 集群属性。
当前 API 适用集群：4.x 虚拟集群。修改 4.x 专享或通用集群属性接口文档见 [ModifyRocketMQInstance](https://cloud.tencent.com/document/api/1179/108862)，修改 5.x 集群属性的接口文档见 [ModifyInstance](https://cloud.tencent.com/document/api/1493/97865)。
 * @method Models\ModifyRocketMQEnvironmentRoleResponse ModifyRocketMQEnvironmentRole(Models\ModifyRocketMQEnvironmentRoleRequest $req) 修改角色授权。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的修改角色接口文档见 [ModifyRole](https://cloud.tencent.com/document/api/1493/98861)。
 * @method Models\ModifyRocketMQGroupResponse ModifyRocketMQGroup(Models\ModifyRocketMQGroupRequest $req) 修改 RocketMQ 消费组属性。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。修改 5.x 集群消费组属性的接口文档见 [ModifyConsumerGroup](https://cloud.tencent.com/document/api/1493/97940)。
 * @method Models\ModifyRocketMQInstanceResponse ModifyRocketMQInstance(Models\ModifyRocketMQInstanceRequest $req) 修改 RocketMQ 专享或通用集群属性。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。修改 5.x 集群属性的接口文档见 [ModifyInstance](https://cloud.tencent.com/document/api/1493/97865)。
 * @method Models\ModifyRocketMQInstanceSpecResponse ModifyRocketMQInstanceSpec(Models\ModifyRocketMQInstanceSpecRequest $req) 修改 RocketMQ 专享集群配置，可以支持实例规格、节点数和存储的升配和实例规格的降配。本 API 发起订单并成功支付后进入实例配置变更的流程，可通过 [DescribeRocketMQVipInstances](https://cloud.tencent.com/document/api/1179/80903) 查询实例是否已变更完成。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。修改 5.x 集群规格的接口文档见 [ModifyInstance](https://cloud.tencent.com/document/api/1493/97865)。
 * @method Models\ModifyRocketMQNamespaceResponse ModifyRocketMQNamespace(Models\ModifyRocketMQNamespaceRequest $req) 更新 RocketMQ 命名空间。
当前 API 适用集群：4.x 虚拟集群和 4.x 专享集群，其他集群类型均不支持该功能。
 * @method Models\ModifyRocketMQRoleResponse ModifyRocketMQRole(Models\ModifyRocketMQRoleRequest $req) 修改角色。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的修改角色接口文档见 [ModifyRole](https://cloud.tencent.com/document/api/1493/98861)。
 * @method Models\ModifyRocketMQTopicResponse ModifyRocketMQTopic(Models\ModifyRocketMQTopicRequest $req) 修改 RocketMQ 主题属性。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。修改 5.x 集群主题属性的接口文档见 [ModifyTopic](https://cloud.tencent.com/document/api/1493/97944)。
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
 * @method Models\ResetRocketMQConsumerOffSetResponse ResetRocketMQConsumerOffSet(Models\ResetRocketMQConsumerOffSetRequest $req) 重置消费位点。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的重置消费位点接口文档见 [ResetConsumerGroupOffset](https://cloud.tencent.com/document/api/1493/116942)。
 * @method Models\RetryRocketMQDlqMessageResponse RetryRocketMQDlqMessage(Models\RetryRocketMQDlqMessageRequest $req) 重发 RocketMQ 死信消息。
当前 API 适用集群：4.x 虚拟集群，4.x 专享集群 和 4.x 通用集群。5.x 集群的重发死信消息接口文档见 [ResendDeadLetterMessage](https://cloud.tencent.com/document/api/1493/114592)。
 * @method Models\RewindCmqQueueResponse RewindCmqQueue(Models\RewindCmqQueueRequest $req) 回溯cmq队列
 * @method Models\SendBatchMessagesResponse SendBatchMessages(Models\SendBatchMessagesRequest $req) 批量发送消息

注意：TDMQ 批量发送消息的接口是在 TDMQ-HTTP 的服务侧将消息打包为一个 Batch，然后将该 Batch 在服务内部当作一次 TCP 请求发送出去。所以在使用过程中，用户还是按照单条消息发送的逻辑，每一条消息是一个独立的 HTTP 的请求，在 TDMQ-HTTP 的服务内部，会将多个 HTTP 的请求聚合为一个 Batch 发送到服务端。即，批量发送消息在使用上与发送单条消息是一致的，batch 的聚合是在 TDMQ-HTTP 的服务内部完成的。
 * @method Models\SendCmqMsgResponse SendCmqMsg(Models\SendCmqMsgRequest $req) 发送cmq消息
 * @method Models\SendMessagesResponse SendMessages(Models\SendMessagesRequest $req) 发送单条消息
不支持持久topic
 * @method Models\SendMsgResponse SendMsg(Models\SendMsgRequest $req) 此接口仅用于测试发生消息，不能作为现网正式生产使用
 * @method Models\SendRocketMQMessageResponse SendRocketMQMessage(Models\SendRocketMQMessageRequest $req) 发送 RocketMQ 消息，该接口仅用于控制台发送少量测试消息，不保证SLA，且云 API 存在限流，在真实业务场景下，请使用 RocketMQ SDK 发送消息。
 * @method Models\SetRocketMQPublicAccessPointResponse SetRocketMQPublicAccessPoint(Models\SetRocketMQPublicAccessPointRequest $req) 开启或关闭公网访问、设置安全访问策略。
当前 API 适用集群：4.x 专享集群 和 4.x 通用集群。设置 5.x 集群的公网接入点接口文档见 [ModifyInstanceEndpoint](https://cloud.tencent.com/document/api/1493/115981)。
 * @method Models\UnbindCmqDeadLetterResponse UnbindCmqDeadLetter(Models\UnbindCmqDeadLetterRequest $req) 解绑cmq死信队列
 * @method Models\VerifyRocketMQConsumeResponse VerifyRocketMQConsume(Models\VerifyRocketMQConsumeRequest $req) Rocketmq消费验证
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
