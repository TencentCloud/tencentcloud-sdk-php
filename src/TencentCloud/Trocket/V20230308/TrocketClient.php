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

namespace TencentCloud\Trocket\V20230308;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trocket\V20230308\Models as Models;

/**
 * @method Models\ChangeMigratingTopicToNextStageResponse ChangeMigratingTopicToNextStage(Models\ChangeMigratingTopicToNextStageRequest $req) 修改迁移中的Topic状态进入下一步
 * @method Models\CreateConsumerGroupResponse CreateConsumerGroup(Models\CreateConsumerGroupRequest $req) 创建消费组。
当前 API 适用集群：5.x 集群。4.x 集群的创建消费组接口文档见 [CreateRocketMQGroup](https://cloud.tencent.com/document/api/1179/63428)。
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 创建 RocketMQ 5.x 集群。
当前 API 适用集群：5.x 集群。创建 4.x 专享/通用集群的接口文档见 [CreateRocketMQVipInstance](https://cloud.tencent.com/document/product/1179/95721)。
 * @method Models\CreateMQTTInsPublicEndpointResponse CreateMQTTInsPublicEndpoint(Models\CreateMQTTInsPublicEndpointRequest $req) 下线trocket下mqtt接口

为MQTT实例创建公网接入点
 * @method Models\CreateMQTTInstanceResponse CreateMQTTInstance(Models\CreateMQTTInstanceRequest $req) 下线trocket下mqtt接口

购买新的MQTT实例
 * @method Models\CreateMQTTTopicResponse CreateMQTTTopic(Models\CreateMQTTTopicRequest $req) 下线trocket下mqtt接口

创建主题
 * @method Models\CreateMQTTUserResponse CreateMQTTUser(Models\CreateMQTTUserRequest $req) 下线trocket下mqtt接口

添加mqtt角色
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 添加角色。
当前 API 适用集群：5.x 集群。4.x 集群的创建角色接口文档见 [CreateRocketMQRole](https://cloud.tencent.com/document/product/1179/107538)，给角色授权接口文档见 [CreateRocketMQEnvironmentRole](https://cloud.tencent.com/document/product/1179/107539)。
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建 RocketMQ 主题。
当前 API 适用集群：5.x 集群。4.x 集群的创建主题接口文档见 [CreateRocketMQTopic](https://cloud.tencent.com/document/api/1179/63426)
 * @method Models\DeleteConsumerGroupResponse DeleteConsumerGroup(Models\DeleteConsumerGroupRequest $req) 删除消费组。消费者组删除后，消费者组的所有配置和相关数据都会被清空，且无法找回。删除后，在线的消费者客户端会出现报错，建议您提前下线客户端。
当前 API 适用集群：5.x 集群。4.x 集群的删除消费组接口文档见 [DeleteRocketMQGroup](https://cloud.tencent.com/document/api/1179/63424)。
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 删除 RocketMQ 5.x 集群，删除前请先删除正在使用的主题、消费组和角色信息。
当前 API 适用集群：5.x 集群。删除 4.x 集群接口文档见 [DeleteRocketMQVipInstance](https://cloud.tencent.com/document/product/1179/95802)。
 * @method Models\DeleteMQTTInsPublicEndpointResponse DeleteMQTTInsPublicEndpoint(Models\DeleteMQTTInsPublicEndpointRequest $req) 下线trocket下mqtt接口

删除MQTT实例的公网接入点
 * @method Models\DeleteMQTTInstanceResponse DeleteMQTTInstance(Models\DeleteMQTTInstanceRequest $req) 下线trocket下mqtt接口

删除MQTT实例
 * @method Models\DeleteMQTTTopicResponse DeleteMQTTTopic(Models\DeleteMQTTTopicRequest $req) 下线trocket下mqtt接口

删除MQTT主题
 * @method Models\DeleteMQTTUserResponse DeleteMQTTUser(Models\DeleteMQTTUserRequest $req) 下线trocket下mqtt接口

删除MQTT访问用户
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) 删除角色。请确保该角色相关信息不在当前代码中被使用。删除角色后，原先使用该角色进行生产或消费消息的密钥（AccessKey 和 SecretKey）将立即失效。
当前 API 适用集群：5.x 集群。4.x 集群的删除角色接口文档见 [DeleteRocketMQRoles](https://cloud.tencent.com/document/product/1179/107536)，删除角色授权接口文档见 [DeleteRocketMQEnvironmentRoles](https://cloud.tencent.com/document/product/1179/107537)。
 * @method Models\DeleteSmoothMigrationTaskResponse DeleteSmoothMigrationTask(Models\DeleteSmoothMigrationTaskRequest $req) 删除平滑迁移任务，只有被取消的任务才可删除
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除主题。主题删除后，主题的所有配置和相关数据都会被清空，且无法找回。
当前 API 适用集群：5.x 集群。4.x 集群的删除主题接口文档见 [DeleteRocketMQTopic](https://cloud.tencent.com/document/api/1179/63423)。
 * @method Models\DescribeConsumerClientResponse DescribeConsumerClient(Models\DescribeConsumerClientRequest $req) 查询消费者客户端详情。
当前 API 适用集群：5.x 集群。4.x 集群的查询消费者客户端详情接口文档见 [DescribeRocketMQConsumerConnectionDetail](https://cloud.tencent.com/document/product/1179/102490)。
 * @method Models\DescribeConsumerClientListResponse DescribeConsumerClientList(Models\DescribeConsumerClientListRequest $req) 查询消费组下的客户端连接列表。
当前 API 适用集群：5.x 集群。4.x 集群的查询消费组下的客户端列表接口文档见 [DescribeRocketMQConsumerConnections](https://cloud.tencent.com/document/product/1179/100460)。
 * @method Models\DescribeConsumerGroupResponse DescribeConsumerGroup(Models\DescribeConsumerGroupRequest $req) 查询消费组详情。
当前 API 适用集群：5.x 集群。4.x 集群的查询消费组详情接口文档见 [DescribeRocketMQConsumerConnections](https://cloud.tencent.com/document/product/1179/100460)。
 * @method Models\DescribeConsumerGroupListResponse DescribeConsumerGroupList(Models\DescribeConsumerGroupListRequest $req) 获取消费组列表，Filter参数使用说明如下：

- ConsumerGroupName 消费组名称，支持模糊查询，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
- ConsumeMessageOrderly，投递顺序性，枚举值如下：
    - true 顺序投递
    - false 并发投递

Filters示例： 
[{ "Name": "ConsumeMessageOrderly", "Values": ["true"] }]
当前 API 适用集群：5.x 集群。4.x 集群的获取消费组列表接口文档见 [DescribeRocketMQGroups](https://cloud.tencent.com/document/api/1179/63420)。
 * @method Models\DescribeConsumerLagResponse DescribeConsumerLag(Models\DescribeConsumerLagRequest $req) 查询指定消费组堆积数。
当前 API 适用集群：4.x 集群和 5.x 集群。
 * @method Models\DescribeFusionInstanceListResponse DescribeFusionInstanceList(Models\DescribeFusionInstanceListRequest $req) 查询集群列表，支持 4.x 和 5.x 集群，其中 Filters 参数使用说明如下：

- InstanceName 集群名称，支持模糊查询，从本接口返回值或控制台获得
- InstanceId 集群ID，精确查询，从当前接口或控制台获得
- InstanceType 集群类型，可参考 [InstanceItem](https://cloud.tencent.com/document/api/1493/96031#InstanceItem) 数据结构，支持多选
- Version 集群版本，枚举值如下：
    - 4 RocketMQ 4.x 集群
    - 5 RocketMQ 5.x 集群

Filters示例：
 [{ "Name": "InstanceId", "Values": ["rmq-72mo3a9o"] }]
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 查询 RocketMQ 5.x 集群信息。
当前 API 适用集群：5.x 集群。查询 4.x 专享/通用集群信息的接口文档见 [DescribeRocketMQVipInstanceDetail](https://cloud.tencent.com/document/product/1179/86725)。
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 查询集群列表，仅支持 5.x 集群。Filters参数使用说明如下：

- InstanceName 集群名称，支持模糊搜索
- InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得
- InstanceType 集群类型，可参考 [InstanceItem](https://cloud.tencent.com/document/api/1493/96031#InstanceItem) 数据结构，支持多选
- InstanceStatus 集群状态，可参考 [InstanceItem](https://cloud.tencent.com/document/api/1493/96031#InstanceItem) 数据结构，支持多选

Filters示例：
[{
    "Name": "InstanceId",
    "Values": ["rmq-72mo3a9o"]
}]
 * @method Models\DescribeMQTTClientResponse DescribeMQTTClient(Models\DescribeMQTTClientRequest $req) 下线trocket下mqtt接口

查询 MQTT 客户端详情
 * @method Models\DescribeMQTTInsPublicEndpointsResponse DescribeMQTTInsPublicEndpoints(Models\DescribeMQTTInsPublicEndpointsRequest $req) 下线trocket下mqtt接口

查询MQTT实例公网接入点
 * @method Models\DescribeMQTTInsVPCEndpointsResponse DescribeMQTTInsVPCEndpoints(Models\DescribeMQTTInsVPCEndpointsRequest $req) 下线trocket下mqtt接口

查询MQTT实例公网接入点
 * @method Models\DescribeMQTTInstanceResponse DescribeMQTTInstance(Models\DescribeMQTTInstanceRequest $req) 下线trocket下mqtt接口

查询实例信息
 * @method Models\DescribeMQTTInstanceCertResponse DescribeMQTTInstanceCert(Models\DescribeMQTTInstanceCertRequest $req) 下线trocket下mqtt接口

查询MQTT集群证书列表
 * @method Models\DescribeMQTTInstanceListResponse DescribeMQTTInstanceList(Models\DescribeMQTTInstanceListRequest $req) 下线trocket下mqtt接口

获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceType, 实例类型查询，支持多选
3. InstanceStatus，实例状态查询，支持多选

当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeMQTTMessageResponse DescribeMQTTMessage(Models\DescribeMQTTMessageRequest $req) 下线trocket下mqtt接口

查询MQTT消息详情
 * @method Models\DescribeMQTTMessageListResponse DescribeMQTTMessageList(Models\DescribeMQTTMessageListRequest $req) 下线trocket下mqtt接口

查询消息列表，如查询死信，请设置ConsumerGroup参数
 * @method Models\DescribeMQTTProductSKUListResponse DescribeMQTTProductSKUList(Models\DescribeMQTTProductSKUListRequest $req) 下线trocket下mqtt接口

获取产品售卖规格
 * @method Models\DescribeMQTTTopicResponse DescribeMQTTTopic(Models\DescribeMQTTTopicRequest $req) 下线trocket下mqtt接口

查询mqtt主题详情
 * @method Models\DescribeMQTTTopicListResponse DescribeMQTTTopicList(Models\DescribeMQTTTopicListRequest $req) 下线trocket下mqtt接口

获取主题列表，Filter参数使用说明如下：

1. TopicName，主题名称模糊搜索
2. TopicType，主题类型查询，支持多选，可选值：Normal,Order,Transaction,DelayScheduled
 * @method Models\DescribeMQTTUserListResponse DescribeMQTTUserList(Models\DescribeMQTTUserListRequest $req) 下线trocket下mqtt接口

查询用户列表，Filter参数使用说明如下：

1. Username，用户名称模糊搜索
 * @method Models\DescribeMessageResponse DescribeMessage(Models\DescribeMessageRequest $req) 查询消息详情。
当前 API 适用集群：5.x 集群。4.x 集群的查询消息详情接口文档见 [DescribeRocketMQMsg](https://cloud.tencent.com/document/product/1179/91055)。
 * @method Models\DescribeMessageListResponse DescribeMessageList(Models\DescribeMessageListRequest $req) 查询消息列表。如果查询死信消息，请设置ConsumerGroup参数。
当前 API 适用集群：5.x 集群。4.x 集群的查询消息列表接口文档见 [DescribeRocketMQTopicMsgs](https://cloud.tencent.com/document/product/1179/97761)。
 * @method Models\DescribeMessageTraceResponse DescribeMessageTrace(Models\DescribeMessageTraceRequest $req) 根据消息 ID 查询消息轨迹。
当前 API 适用集群：5.x 集群。4.x 集群查询消息轨迹接口文档见 [DescribeRocketMQMsgTrace](https://cloud.tencent.com/document/product/1179/97760)。
 * @method Models\DescribeMigratingGroupStatsResponse DescribeMigratingGroupStats(Models\DescribeMigratingGroupStatsRequest $req) 查看迁移消费组的实时信息
 * @method Models\DescribeMigratingTopicListResponse DescribeMigratingTopicList(Models\DescribeMigratingTopicListRequest $req) 查询Topic迁移状态列表。

Filters字段为查询过滤器，支持以下条件：
* TopicName 主题名称，支持模糊查询
* MigrationStatus 迁移状态，可参考[MigratingTopic](https://cloud.tencent.com/document/api/1493/96031#MigratingTopic)数据结构
* Namespace 命名空间，仅4.x集群有效

Filters示例：
[{
    "Name": "TopicName",
    "Values": ["topic-a"]
}]
 * @method Models\DescribeMigratingTopicStatsResponse DescribeMigratingTopicStats(Models\DescribeMigratingTopicStatsRequest $req) 用于查询迁移主题的实时数据
 * @method Models\DescribeMigrationTaskListResponse DescribeMigrationTaskList(Models\DescribeMigrationTaskListRequest $req) 获取数据迁移任务列表，Filter参数使用说明如下：

TaskId，根据任务ID精确查找
InstanceId，根据实例ID精确查找
Type，根据任务类型精确查找
 * @method Models\DescribeProducerListResponse DescribeProducerList(Models\DescribeProducerListRequest $req) 查询主题关联的生产者列表信息，Filters支持以下筛选条件：
- ClientIP，客户端IP
- ClientID，客户端ID
当前 API 适用集群：5.x 集群。4.x 集群的查询生产者客户端列表接口文档见 [DescribeRocketMQProducers](https://cloud.tencent.com/document/api/1179/122749)。
 * @method Models\DescribeProductSKUsResponse DescribeProductSKUs(Models\DescribeProductSKUsRequest $req) 查询产品售卖规格，针对 RocketMQ 5.x 集群。
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) 查询角色列表，Filter参数使用说明如下：

- RoleName 角色名称，支持模糊搜索，从本接口返回值或控制台获得
- AccessKey AccessKey，支持模糊搜索，从本接口返回值或控制台获得

Filters示例： 
[{ "Name": "RoleName", "Values": ["test_role"] }]
当前 API 适用集群：5.x 集群。4.x 集群的查询角色列表接口文档见 [DescribeRocketMQRoles](https://cloud.tencent.com/document/product/1179/107534)，查询角色授权列表接口文档见 [DescribeRocketMQEnvironmentRoles](https://cloud.tencent.com/document/product/1179/107535)。
 * @method Models\DescribeSmoothMigrationTaskListResponse DescribeSmoothMigrationTaskList(Models\DescribeSmoothMigrationTaskListRequest $req) 用于查询平滑迁移任务列表。

查询参数Filters， 支持的字段如下：
* TaskStatus, 任务状态，支持多选 
* ConnectionType，网络连接类型，支持多选，参考[SmoothMigrationTaskItem](https://cloud.tencent.com/document/api/1493/96031#SmoothMigrationTaskItem)的说明
* InstanceId，实例ID，精确搜索 
* TaskName，任务名称，支持模糊搜索

Filters示例：
[{
    "Name": "InstanceId",
    "Values": ["rmq-1gzecldfg"]
}]
 * @method Models\DescribeSourceClusterGroupListResponse DescribeSourceClusterGroupList(Models\DescribeSourceClusterGroupListRequest $req) 平滑迁移过程获取源集群group列表接口。

Filters字段为查询过滤器，支持以下字段：
* GroupName，消费组名称，支持模糊搜索
* Imported，是否已导入
* ImportStatus，导入状态，参考[SourceClusterGroupConfig](https://cloud.tencent.com/document/api/1493/96031#SourceClusterGroupConfig)的说明
* Namespace，命名空间，仅4.x集群有效

Filters示例：
[{
    "Name": "GroupName",
    "Values": ["group-a"]
}]
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) 查询主题详情，Offset和Limit参数是指订阅该主题的消费组查询分页参数，Filter参数使用说明如下：

- ConsumerGroup 消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。

Filters示例： 
[{ "Name": "ConsumerGroup", "Values": ["test_group"] }]
 * @method Models\DescribeTopicListResponse DescribeTopicList(Models\DescribeTopicListRequest $req) 获取主题列表，Filter参数使用说明如下：

- TopicName 主题名称，支持模糊搜索，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得
- TopicType 主题类型查询，支持多选，参考 [DescribeTopic](https://cloud.tencent.com/document/api/1493/97945) 接口 TopicType 字段

Filters示例：
 [{ "Name": "TopicName", "Values": ["test_topic"] }]
当前 API 适用集群：5.x 集群。4.x 集群的获取主题列表接口文档见 [DescribeRocketMQTopics](https://cloud.tencent.com/document/api/1179/63418)。
 * @method Models\DescribeTopicListByGroupResponse DescribeTopicListByGroup(Models\DescribeTopicListByGroupRequest $req) 查询消费组订阅的主题列表，Filter参数使用说明如下：

- TopicName 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。

Filters示例： 
[{ "Name": "TopicName", "Values": ["test_topic"] }]
当前 API 适用集群：5.x 集群。4.x 集群的查询消费组订阅的主题列表接口文档见 [DescribeRocketMQTopicsByGroup](https://cloud.tencent.com/document/product/1179/108863)。
 * @method Models\DoHealthCheckOnMigratingTopicResponse DoHealthCheckOnMigratingTopic(Models\DoHealthCheckOnMigratingTopicRequest $req) 检查迁移中的主题是否处于正常状态，只有处于正常状态的主题，才可以进入下一个迁移阶段
 * @method Models\ImportSourceClusterConsumerGroupsResponse ImportSourceClusterConsumerGroups(Models\ImportSourceClusterConsumerGroupsRequest $req) 导入消费者组列表
 * @method Models\ImportSourceClusterTopicsResponse ImportSourceClusterTopics(Models\ImportSourceClusterTopicsRequest $req) 导入topic列表
 * @method Models\ModifyConsumerGroupResponse ModifyConsumerGroup(Models\ModifyConsumerGroupRequest $req) 修改消费组属性。
当前 API 适用集群：5.x 集群。4.x 集群的修改消费组属性接口文档见 [ModifyRocketMQGroup](https://cloud.tencent.com/document/api/1179/63416)。
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改 RocketMQ 5.x 集群属性，仅支持修改运行中的集群。
当前 API 适用集群：5.x 集群。修改 4.x 集群属性的接口文档见 [ModifyRocketMQInstance](https://cloud.tencent.com/document/product/1179/108862)。
 * @method Models\ModifyInstanceEndpointResponse ModifyInstanceEndpoint(Models\ModifyInstanceEndpointRequest $req) 修改 RocketMQ 5.x 集群接入点，操作前请先确认接入点已存在。
 * @method Models\ModifyMQTTInsPublicEndpointResponse ModifyMQTTInsPublicEndpoint(Models\ModifyMQTTInsPublicEndpointRequest $req) 下线trocket下mqtt接口

更新MQTT实例公网接入点
 * @method Models\ModifyMQTTInstanceResponse ModifyMQTTInstance(Models\ModifyMQTTInstanceRequest $req) 下线trocket下mqtt接口

修改实例属性
 * @method Models\ModifyMQTTInstanceCertBindingResponse ModifyMQTTInstanceCertBinding(Models\ModifyMQTTInstanceCertBindingRequest $req) 下线trocket下mqtt接口

更新MQTT集群绑定证书
参数传空，则为删除证书
 * @method Models\ModifyMQTTTopicResponse ModifyMQTTTopic(Models\ModifyMQTTTopicRequest $req) 下线trocket下mqtt接口

修改主题属性
 * @method Models\ModifyMQTTUserResponse ModifyMQTTUser(Models\ModifyMQTTUserRequest $req) 下线trocket下mqtt接口

修改MQTT角色
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) 修改角色。
当前 API 适用集群：5.x 集群。4.x 集群的修改角色接口文档见 [ModifyRocketMQRole](https://cloud.tencent.com/document/product/1179/107532)，修改角色的授权接口文档见 [ModifyRocketMQEnvironmentRole](https://cloud.tencent.com/document/product/1179/107533)。
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 修改主题属性。
当前 API 适用集群：5.x 集群。4.x 集群的修改主题属性接口文档见 [ModifyRocketMQTopic](https://cloud.tencent.com/document/api/1179/63414)。
 * @method Models\RemoveMigratingTopicResponse RemoveMigratingTopic(Models\RemoveMigratingTopicRequest $req) 从迁移列表中移除主题，仅当主题处于初始状态时有效
 * @method Models\ResendDeadLetterMessageResponse ResendDeadLetterMessage(Models\ResendDeadLetterMessageRequest $req) 重新发送死信消息。
当前 API 适用集群：5.x集群。4.x 集群的重发死信消息接口文档见 [RetryRocketMQDlqMessage](https://cloud.tencent.com/document/api/1179/114595)。
 * @method Models\ResetConsumerGroupOffsetResponse ResetConsumerGroupOffset(Models\ResetConsumerGroupOffsetRequest $req) 重置消费位点。
当前 API 适用集群：5.x 集群。4.x 集群的重置消费位点接口文档见 [ResetRocketMQConsumerOffSet](https://cloud.tencent.com/document/api/1179/71662)。
 * @method Models\RollbackMigratingTopicStageResponse RollbackMigratingTopicStage(Models\RollbackMigratingTopicStageRequest $req) 回滚正在迁移的主题至前一个阶段
 * @method Models\SendMessageResponse SendMessage(Models\SendMessageRequest $req) 发送 RocketMQ 消息，该接口仅用于控制台发送少量测试消息，不保证 SLA，且云 API 存在限流，在真实业务场景下，请使用 RocketMQ SDK 发送消息。
当前 API 适用集群：5.x 集群。4.x 集群的发送消息接口文档见 [SendRocketMQMessage](https://cloud.tencent.com/document/api/1179/94179)。
 * @method Models\VerifyMessageConsumptionResponse VerifyMessageConsumption(Models\VerifyMessageConsumptionRequest $req) 消息消费验证。
当前 API 适用集群：5.x 集群。4.x 集群的消息消费验证接口文档见 [VerifyRocketMQConsume](https://cloud.tencent.com/document/api/1179/101061)。
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
