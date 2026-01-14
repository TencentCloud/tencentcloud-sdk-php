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

namespace TencentCloud\Cls\V20201016;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cls\V20201016\Models as Models;

/**
 * @method Models\AddMachineGroupInfoResponse AddMachineGroupInfo(Models\AddMachineGroupInfoRequest $req) 用于添加机器组信息
 * @method Models\ApplyConfigToMachineGroupResponse ApplyConfigToMachineGroup(Models\ApplyConfigToMachineGroupRequest $req) 应用采集配置到指定机器组
 * @method Models\CancelRebuildIndexTaskResponse CancelRebuildIndexTask(Models\CancelRebuildIndexTaskRequest $req) 取消重建索引任务
 * @method Models\CheckFunctionResponse CheckFunction(Models\CheckFunctionRequest $req) 本接口用于数据加工DSL函数的语法校验。
 * @method Models\CheckRechargeKafkaServerResponse CheckRechargeKafkaServer(Models\CheckRechargeKafkaServerRequest $req) 本接口用于校验Kafka服务集群是否可以正常访问
 * @method Models\CloseKafkaConsumerResponse CloseKafkaConsumer(Models\CloseKafkaConsumerRequest $req) 关闭Kafka协议消费
 * @method Models\CommitConsumerOffsetsResponse CommitConsumerOffsets(Models\CommitConsumerOffsetsRequest $req) 提交消费点位
 * @method Models\CreateAlarmResponse CreateAlarm(Models\CreateAlarmRequest $req) 本接口用于创建告警策略。
 * @method Models\CreateAlarmNoticeResponse CreateAlarmNotice(Models\CreateAlarmNoticeRequest $req) 该接口用于创建通知渠道组，提供两种配置模式，二选一：
1，简易模式，提供最基本的通知渠道功能。需填写如下参数：
- Type
- NoticeReceivers
- WebCallbacks

2，高级模式，在简易模式基础上，支持设定规则，为不同类型的告警分别设定通知渠道，并支持告警升级功能。需填写如下参数：
- NoticeRules
 * @method Models\CreateAlarmShieldResponse CreateAlarmShield(Models\CreateAlarmShieldRequest $req) 该接口用于创建告警屏蔽规则。
 * @method Models\CreateCloudProductLogCollectionResponse CreateCloudProductLogCollection(Models\CreateCloudProductLogCollectionRequest $req) 内部云产品接入使用相关接口
 * @method Models\CreateConfigResponse CreateConfig(Models\CreateConfigRequest $req) 创建采集规则配置
 * @method Models\CreateConfigExtraResponse CreateConfigExtra(Models\CreateConfigExtraRequest $req) 本接口用于创建特殊采集配置任务，特殊采集配置应用于自建K8S环境的采集Agent
 * @method Models\CreateConsoleSharingResponse CreateConsoleSharing(Models\CreateConsoleSharingRequest $req) 创建控制台分享
 * @method Models\CreateConsumerResponse CreateConsumer(Models\CreateConsumerRequest $req) 本接口用于创建投递CKafka任务
 * @method Models\CreateConsumerGroupResponse CreateConsumerGroup(Models\CreateConsumerGroupRequest $req) 消费组心跳
 * @method Models\CreateCosRechargeResponse CreateCosRecharge(Models\CreateCosRechargeRequest $req) 本接口用于创建cos导入任务
 * @method Models\CreateDashboardResponse CreateDashboard(Models\CreateDashboardRequest $req) 本接口用于创建仪表盘
 * @method Models\CreateDashboardSubscribeResponse CreateDashboardSubscribe(Models\CreateDashboardSubscribeRequest $req) 此接口用于创建仪表盘订阅
 * @method Models\CreateDataTransformResponse CreateDataTransform(Models\CreateDataTransformRequest $req) 本接口用于创建数据加工任务。
 * @method Models\CreateDeliverCloudFunctionResponse CreateDeliverCloudFunction(Models\CreateDeliverCloudFunctionRequest $req) 本接口用于创建投递SCF任务
 * @method Models\CreateDlcDeliverResponse CreateDlcDeliver(Models\CreateDlcDeliverRequest $req) 创建DLC投递任务
 * @method Models\CreateEsRechargeResponse CreateEsRecharge(Models\CreateEsRechargeRequest $req) 创建es导入配置
 * @method Models\CreateExportResponse CreateExport(Models\CreateExportRequest $req) 本接口仅创建下载任务。任务返回的下载地址，请用户调用[DescribeExports](https://cloud.tencent.com/document/product/614/56449)查看任务列表，其中有下载地址CosPath参数。
 * @method Models\CreateHostMetricConfigResponse CreateHostMetricConfig(Models\CreateHostMetricConfigRequest $req) 创建主机指标采集配置
 * @method Models\CreateIndexResponse CreateIndex(Models\CreateIndexRequest $req) 本接口用于创建索引
 * @method Models\CreateKafkaRechargeResponse CreateKafkaRecharge(Models\CreateKafkaRechargeRequest $req) 本接口用于创建Kafka数据订阅任务
 * @method Models\CreateLogsetResponse CreateLogset(Models\CreateLogsetRequest $req) 本接口用于创建日志集，返回新创建的日志集的 ID。
 * @method Models\CreateMachineGroupResponse CreateMachineGroup(Models\CreateMachineGroupRequest $req) 创建机器组
 * @method Models\CreateMetricConfigResponse CreateMetricConfig(Models\CreateMetricConfigRequest $req) 创建指标采集配置
 * @method Models\CreateMetricSubscribeResponse CreateMetricSubscribe(Models\CreateMetricSubscribeRequest $req) 创建指标订阅配置
 * @method Models\CreateNoticeContentResponse CreateNoticeContent(Models\CreateNoticeContentRequest $req) 该接口用于创建通知内容。
 * @method Models\CreateRebuildIndexTaskResponse CreateRebuildIndexTask(Models\CreateRebuildIndexTaskRequest $req) 创建重建索引任务
注意：
- 单个日志主题同时仅允许运行一个重建索引任务，单个日志主题最多同时拥有10个重建索引任务记录，需删除不再需要的任务记录后才能新建索引任务。
- 同一时间范围内的日志，仅允许重建一次索引，需删除之前的任务记录后才能再次重建。
- 删除重建索引任务记录将恢复重建索引前的索引数据。
- 所选时间范围对应日志写流量不能超出5TB。
- 重建索引时间范围以日志时间为准，日志上传时间与重建索引时间范围有超过1小时的偏差时（例如16:00上传了一条02:00的日志到 CLS，重建00:00～12:00的日志索引）不会被重建且后续无法进行检索。新上报一条日志到已经被重建的日志时间范围时，也不会被重建且后续无法进行检索。
 * @method Models\CreateScheduledSqlResponse CreateScheduledSql(Models\CreateScheduledSqlRequest $req) 本接口用于创建定时SQL分析任务
 * @method Models\CreateShipperResponse CreateShipper(Models\CreateShipperRequest $req) 新建投递到COS的任务，【！！！注意】使用此接口，需要检查是否配置了投递COS的角色和权限。如果没有配置，请参考文档投递权限查看和配置https://cloud.tencent.com/document/product/614/71623。
 * @method Models\CreateSplunkDeliverResponse CreateSplunkDeliver(Models\CreateSplunkDeliverRequest $req) 创建Splunk投递任务
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 本接口用于创建日志或指标主题。
 * @method Models\CreateWebCallbackResponse CreateWebCallback(Models\CreateWebCallbackRequest $req) 该接口用于创建告警渠道回调配置。
 * @method Models\DeleteAlarmResponse DeleteAlarm(Models\DeleteAlarmRequest $req) 本接口用于删除告警策略。
 * @method Models\DeleteAlarmNoticeResponse DeleteAlarmNotice(Models\DeleteAlarmNoticeRequest $req) 该接口用于删除通知渠道组
 * @method Models\DeleteAlarmShieldResponse DeleteAlarmShield(Models\DeleteAlarmShieldRequest $req) 该接口用于删除告警屏蔽规则。当告警屏蔽规则在生效中或者是在失效中，无法被删除
 * @method Models\DeleteCloudProductLogCollectionResponse DeleteCloudProductLogCollection(Models\DeleteCloudProductLogCollectionRequest $req) 内部云产品接入使用相关接口
 * @method Models\DeleteConfigResponse DeleteConfig(Models\DeleteConfigRequest $req) 删除采集规则配置
 * @method Models\DeleteConfigExtraResponse DeleteConfigExtra(Models\DeleteConfigExtraRequest $req) 本接口用于删除特殊采集规则配置，特殊采集配置应用于自建K8S环境的采集Agent
 * @method Models\DeleteConfigFromMachineGroupResponse DeleteConfigFromMachineGroup(Models\DeleteConfigFromMachineGroupRequest $req) 删除应用到机器组的采集配置
 * @method Models\DeleteConsoleSharingResponse DeleteConsoleSharing(Models\DeleteConsoleSharingRequest $req) 删除控制台分享
 * @method Models\DeleteConsumerResponse DeleteConsumer(Models\DeleteConsumerRequest $req) 删除投递Ckafka任务
 * @method Models\DeleteConsumerGroupResponse DeleteConsumerGroup(Models\DeleteConsumerGroupRequest $req) 删除消费组
 * @method Models\DeleteCosRechargeResponse DeleteCosRecharge(Models\DeleteCosRechargeRequest $req) 本接口用于删除cos导入任务
 * @method Models\DeleteDashboardResponse DeleteDashboard(Models\DeleteDashboardRequest $req) 本接口用于删除仪表盘
 * @method Models\DeleteDashboardSubscribeResponse DeleteDashboardSubscribe(Models\DeleteDashboardSubscribeRequest $req) 此接口用于删除仪表盘订阅
 * @method Models\DeleteDataTransformResponse DeleteDataTransform(Models\DeleteDataTransformRequest $req) 本接口用于删除数据加工任务
 * @method Models\DeleteDlcDeliverResponse DeleteDlcDeliver(Models\DeleteDlcDeliverRequest $req) 删除DLC投递任务
 * @method Models\DeleteEsRechargeResponse DeleteEsRecharge(Models\DeleteEsRechargeRequest $req) 删除es导入配置
 * @method Models\DeleteExportResponse DeleteExport(Models\DeleteExportRequest $req) 本接口用于删除日志下载任务
 * @method Models\DeleteHostMetricConfigResponse DeleteHostMetricConfig(Models\DeleteHostMetricConfigRequest $req) 删除主机指标采集配置
 * @method Models\DeleteIndexResponse DeleteIndex(Models\DeleteIndexRequest $req) 本接口用于删除日志主题的索引配置，删除索引配置后将无法检索和查询采集到的日志。
 * @method Models\DeleteKafkaRechargeResponse DeleteKafkaRecharge(Models\DeleteKafkaRechargeRequest $req) 本接口用于删除Kafka数据订阅任务
 * @method Models\DeleteLogsetResponse DeleteLogset(Models\DeleteLogsetRequest $req) 本接口用于删除日志集。
 * @method Models\DeleteMachineGroupResponse DeleteMachineGroup(Models\DeleteMachineGroupRequest $req) 删除机器组
 * @method Models\DeleteMachineGroupInfoResponse DeleteMachineGroupInfo(Models\DeleteMachineGroupInfoRequest $req) 用于删除机器组信息
 * @method Models\DeleteMetricConfigResponse DeleteMetricConfig(Models\DeleteMetricConfigRequest $req) 删除指标采集配置
 * @method Models\DeleteMetricSubscribeResponse DeleteMetricSubscribe(Models\DeleteMetricSubscribeRequest $req) 删除指标订阅配置
 * @method Models\DeleteNoticeContentResponse DeleteNoticeContent(Models\DeleteNoticeContentRequest $req) 该接口用于删除通知内容配置
 * @method Models\DeleteScheduledSqlResponse DeleteScheduledSql(Models\DeleteScheduledSqlRequest $req) 本接口用于删除定时SQL分析任务
 * @method Models\DeleteShipperResponse DeleteShipper(Models\DeleteShipperRequest $req) 删除投递COS任务
 * @method Models\DeleteSplunkDeliverResponse DeleteSplunkDeliver(Models\DeleteSplunkDeliverRequest $req) 删除Splunk投递任务
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 本接口用于删除日志或指标主题。
 * @method Models\DeleteWebCallbackResponse DeleteWebCallback(Models\DeleteWebCallbackRequest $req) 该接口用于删除告警渠道回调配置。
 * @method Models\DescribeAlarmNoticesResponse DescribeAlarmNotices(Models\DescribeAlarmNoticesRequest $req) 该接口用于获取通知渠道组列表
 * @method Models\DescribeAlarmShieldsResponse DescribeAlarmShields(Models\DescribeAlarmShieldsRequest $req) 获取告警屏蔽配置规则
 * @method Models\DescribeAlarmsResponse DescribeAlarms(Models\DescribeAlarmsRequest $req) 本接口用于获取告警策略列表。
 * @method Models\DescribeAlertRecordHistoryResponse DescribeAlertRecordHistory(Models\DescribeAlertRecordHistoryRequest $req) 获取告警历史，例如今天未恢复的告警
 * @method Models\DescribeCloudProductLogTasksResponse DescribeCloudProductLogTasks(Models\DescribeCloudProductLogTasksRequest $req) 云产品接入使用相关接口
 * @method Models\DescribeClusterBaseMetricConfigsResponse DescribeClusterBaseMetricConfigs(Models\DescribeClusterBaseMetricConfigsRequest $req) 获取指标订阅配置
 * @method Models\DescribeClusterMetricConfigsResponse DescribeClusterMetricConfigs(Models\DescribeClusterMetricConfigsRequest $req) 获取指标订阅配置
 * @method Models\DescribeConfigExtrasResponse DescribeConfigExtras(Models\DescribeConfigExtrasRequest $req) 本接口用于获取特殊采集配置，特殊采集配置应用于自建K8S环境的采集Agent
 * @method Models\DescribeConfigMachineGroupsResponse DescribeConfigMachineGroups(Models\DescribeConfigMachineGroupsRequest $req) 获取采集规则配置所绑定的机器组
 * @method Models\DescribeConfigsResponse DescribeConfigs(Models\DescribeConfigsRequest $req) 获取采集规则配置
 * @method Models\DescribeConsoleSharingListResponse DescribeConsoleSharingList(Models\DescribeConsoleSharingListRequest $req) 批量查询控制台分享列表
 * @method Models\DescribeConsumerResponse DescribeConsumer(Models\DescribeConsumerRequest $req) 本接口用于获取投递配置
 * @method Models\DescribeConsumerGroupsResponse DescribeConsumerGroups(Models\DescribeConsumerGroupsRequest $req) 获取消费组列表
 * @method Models\DescribeConsumerOffsetsResponse DescribeConsumerOffsets(Models\DescribeConsumerOffsetsRequest $req) 获取消费组点位信息
 * @method Models\DescribeConsumerPreviewResponse DescribeConsumerPreview(Models\DescribeConsumerPreviewRequest $req) 本接口用于kafka投递数据预览
 * @method Models\DescribeConsumersResponse DescribeConsumers(Models\DescribeConsumersRequest $req) 获取投递规则信息列表
 * @method Models\DescribeCosRechargesResponse DescribeCosRecharges(Models\DescribeCosRechargesRequest $req) 本接口用于获取cos导入配置
 * @method Models\DescribeDashboardSubscribesResponse DescribeDashboardSubscribes(Models\DescribeDashboardSubscribesRequest $req) 本接口用于获取仪表盘订阅列表，支持分页
 * @method Models\DescribeDashboardsResponse DescribeDashboards(Models\DescribeDashboardsRequest $req) 本接口用于获取仪表盘
 * @method Models\DescribeDataTransformInfoResponse DescribeDataTransformInfo(Models\DescribeDataTransformInfoRequest $req) 本接口用于获取数据加工任务列表基本信息
 * @method Models\DescribeDlcDeliversResponse DescribeDlcDelivers(Models\DescribeDlcDeliversRequest $req) 获取告警渠道回调配置列表。
 * @method Models\DescribeEsRechargePreviewResponse DescribeEsRechargePreview(Models\DescribeEsRechargePreviewRequest $req) es导入预览
 * @method Models\DescribeEsRechargesResponse DescribeEsRecharges(Models\DescribeEsRechargesRequest $req) 获取es导入配置
 * @method Models\DescribeExportsResponse DescribeExports(Models\DescribeExportsRequest $req) 本接口用于获取日志下载任务列表
 * @method Models\DescribeHostMetricConfigsResponse DescribeHostMetricConfigs(Models\DescribeHostMetricConfigsRequest $req) 获取指标订阅配置
 * @method Models\DescribeIndexResponse DescribeIndex(Models\DescribeIndexRequest $req) 本接口用于获取索引配置信息
 * @method Models\DescribeKafkaConsumerResponse DescribeKafkaConsumer(Models\DescribeKafkaConsumerRequest $req) 获取Kafka协议消费信息
 * @method Models\DescribeKafkaConsumerGroupDetailResponse DescribeKafkaConsumerGroupDetail(Models\DescribeKafkaConsumerGroupDetailRequest $req) 获取Kafka协议消费组详情
 * @method Models\DescribeKafkaConsumerGroupListResponse DescribeKafkaConsumerGroupList(Models\DescribeKafkaConsumerGroupListRequest $req) 获取Kafka协议消费组信息列表
 * @method Models\DescribeKafkaConsumerPreviewResponse DescribeKafkaConsumerPreview(Models\DescribeKafkaConsumerPreviewRequest $req) kafka协议消费预览接口
 * @method Models\DescribeKafkaConsumerTopicsResponse DescribeKafkaConsumerTopics(Models\DescribeKafkaConsumerTopicsRequest $req) 本接口用于获取kafka协议消费主题信息列表
 * @method Models\DescribeKafkaRechargesResponse DescribeKafkaRecharges(Models\DescribeKafkaRechargesRequest $req) 本接口用于获取Kafka数据订阅任务
 * @method Models\DescribeLogContextResponse DescribeLogContext(Models\DescribeLogContextRequest $req) 本接口用于搜索日志上下文附近的内容，详情参考[上下文检索](https://cloud.tencent.com/document/product/614/53248)。
API返回数据包最大49MB，建议启用 gzip 压缩（HTTP Request Header Accept-Encoding:gzip）。
 * @method Models\DescribeLogHistogramResponse DescribeLogHistogram(Models\DescribeLogHistogramRequest $req) 本接口用于构建日志数量直方图
 * @method Models\DescribeLogsetsResponse DescribeLogsets(Models\DescribeLogsetsRequest $req) 本接口用于获取日志集信息列表。
 * @method Models\DescribeMachineGroupConfigsResponse DescribeMachineGroupConfigs(Models\DescribeMachineGroupConfigsRequest $req) 获取机器组绑定的采集规则配置
 * @method Models\DescribeMachineGroupsResponse DescribeMachineGroups(Models\DescribeMachineGroupsRequest $req) 获取机器组信息列表
 * @method Models\DescribeMachinesResponse DescribeMachines(Models\DescribeMachinesRequest $req) 获取指定机器组下的机器状态
 * @method Models\DescribeMetricCorrectDimensionResponse DescribeMetricCorrectDimension(Models\DescribeMetricCorrectDimensionRequest $req) 获取指标订阅配置
 * @method Models\DescribeMetricSubscribePreviewResponse DescribeMetricSubscribePreview(Models\DescribeMetricSubscribePreviewRequest $req) 创建指标订阅配置
 * @method Models\DescribeMetricSubscribesResponse DescribeMetricSubscribes(Models\DescribeMetricSubscribesRequest $req) 获取指标订阅配置
 * @method Models\DescribeNoticeContentsResponse DescribeNoticeContents(Models\DescribeNoticeContentsRequest $req) 获取通知内容列表
 * @method Models\DescribePartitionsResponse DescribePartitions(Models\DescribePartitionsRequest $req) 该接口已废弃，如需获取分区数量，请使用DescribeTopics接口。
 * @method Models\DescribeRebuildIndexTasksResponse DescribeRebuildIndexTasks(Models\DescribeRebuildIndexTasksRequest $req) 获取重建索引任务列表
 * @method Models\DescribeScheduledSqlInfoResponse DescribeScheduledSqlInfo(Models\DescribeScheduledSqlInfoRequest $req) 本接口用于获取定时SQL分析任务列表
 * @method Models\DescribeShipperTasksResponse DescribeShipperTasks(Models\DescribeShipperTasksRequest $req) 获取投递任务列表
 * @method Models\DescribeShippersResponse DescribeShippers(Models\DescribeShippersRequest $req) 获取投递到COS的任务配置信息
 * @method Models\DescribeSplunkDeliversResponse DescribeSplunkDelivers(Models\DescribeSplunkDeliversRequest $req) 获取Splunk投递任务列表
 * @method Models\DescribeSplunkPreviewResponse DescribeSplunkPreview(Models\DescribeSplunkPreviewRequest $req) splunk投递任务预览
 * @method Models\DescribeTopicBaseMetricConfigsResponse DescribeTopicBaseMetricConfigs(Models\DescribeTopicBaseMetricConfigsRequest $req) 获取指标订阅配置
 * @method Models\DescribeTopicMetricConfigsResponse DescribeTopicMetricConfigs(Models\DescribeTopicMetricConfigsRequest $req) 获取指标订阅配置
 * @method Models\DescribeTopicsResponse DescribeTopics(Models\DescribeTopicsRequest $req) 本接口用于获取日志或指标主题列表，支持分页
 * @method Models\DescribeWebCallbacksResponse DescribeWebCallbacks(Models\DescribeWebCallbacksRequest $req) 获取告警渠道回调配置列表。
 * @method Models\EstimateRebuildIndexTaskResponse EstimateRebuildIndexTask(Models\EstimateRebuildIndexTaskRequest $req) 预估重建索引任务
 * @method Models\GetAlarmLogResponse GetAlarmLog(Models\GetAlarmLogRequest $req) 本接口用于获取告警策略执行详情
 * @method Models\GetMetricLabelValuesResponse GetMetricLabelValues(Models\GetMetricLabelValuesRequest $req) 获取时序label values列表
 * @method Models\MergePartitionResponse MergePartition(Models\MergePartitionRequest $req) 该接口已废弃，如需修改分区数量，请使用ModifyTopic接口。
 * @method Models\ModifyAlarmResponse ModifyAlarm(Models\ModifyAlarmRequest $req) 本接口用于修改告警策略。需要至少修改一项有效内容。
 * @method Models\ModifyAlarmNoticeResponse ModifyAlarmNotice(Models\ModifyAlarmNoticeRequest $req) 该接口用于修改通知渠道组
 * @method Models\ModifyAlarmShieldResponse ModifyAlarmShield(Models\ModifyAlarmShieldRequest $req) 该接口用于修改告警屏蔽规则。当告警屏蔽规则为失效中时，无法对其进行修改
 * @method Models\ModifyCloudProductLogCollectionResponse ModifyCloudProductLogCollection(Models\ModifyCloudProductLogCollectionRequest $req) 内部云产品接入使用相关接口
 * @method Models\ModifyConfigResponse ModifyConfig(Models\ModifyConfigRequest $req) 修改采集规则配置
 * @method Models\ModifyConfigExtraResponse ModifyConfigExtra(Models\ModifyConfigExtraRequest $req) 本接口用于修改特殊采集配置任务，特殊采集配置应用于自建K8S环境的采集Agent
 * @method Models\ModifyConsoleSharingResponse ModifyConsoleSharing(Models\ModifyConsoleSharingRequest $req) 修改控制台分享，目前仅允许修改有效期
 * @method Models\ModifyConsumerResponse ModifyConsumer(Models\ModifyConsumerRequest $req) 本接口用于修改投递Ckafka任务
 * @method Models\ModifyConsumerGroupResponse ModifyConsumerGroup(Models\ModifyConsumerGroupRequest $req) 更新消费组信息
 * @method Models\ModifyCosRechargeResponse ModifyCosRecharge(Models\ModifyCosRechargeRequest $req) 本接口用于修改cos导入任务
 * @method Models\ModifyDashboardResponse ModifyDashboard(Models\ModifyDashboardRequest $req) 本接口用于修改仪表盘
 * @method Models\ModifyDashboardSubscribeResponse ModifyDashboardSubscribe(Models\ModifyDashboardSubscribeRequest $req) 此接口用于修改仪表盘订阅
 * @method Models\ModifyDataTransformResponse ModifyDataTransform(Models\ModifyDataTransformRequest $req) 本接口用于修改数据加工任务
 * @method Models\ModifyDlcDeliverResponse ModifyDlcDeliver(Models\ModifyDlcDeliverRequest $req) 修改DLC投递任务
 * @method Models\ModifyEsRechargeResponse ModifyEsRecharge(Models\ModifyEsRechargeRequest $req) 修改es导入配置
 * @method Models\ModifyHostMetricConfigResponse ModifyHostMetricConfig(Models\ModifyHostMetricConfigRequest $req) 修改主机指标采集配置
 * @method Models\ModifyIndexResponse ModifyIndex(Models\ModifyIndexRequest $req) 本接口用于修改索引配置，该接口除受默认接口请求频率限制外，针对单个日志主题，并发数不能超过1，即同一时间同一个日志主题只能有一个正在执行的索引配置修改操作。
 * @method Models\ModifyKafkaConsumerResponse ModifyKafkaConsumer(Models\ModifyKafkaConsumerRequest $req) 修改Kafka协议消费信息
 * @method Models\ModifyKafkaConsumerGroupOffsetResponse ModifyKafkaConsumerGroupOffset(Models\ModifyKafkaConsumerGroupOffsetRequest $req) 修改Kafka协议消费组点位
 * @method Models\ModifyKafkaRechargeResponse ModifyKafkaRecharge(Models\ModifyKafkaRechargeRequest $req) 本接口用于修改Kafka数据订阅任务
 * @method Models\ModifyLogsetResponse ModifyLogset(Models\ModifyLogsetRequest $req) 本接口用于修改日志集信息
 * @method Models\ModifyMachineGroupResponse ModifyMachineGroup(Models\ModifyMachineGroupRequest $req) 修改机器组。
注意：修改接口直接覆盖历史数据，改为本次合法入参数据，请谨慎调用此接口。
 * @method Models\ModifyMetricConfigResponse ModifyMetricConfig(Models\ModifyMetricConfigRequest $req) 创建指标采集配置
 * @method Models\ModifyMetricSubscribeResponse ModifyMetricSubscribe(Models\ModifyMetricSubscribeRequest $req) 修改指标订阅配置
 * @method Models\ModifyNoticeContentResponse ModifyNoticeContent(Models\ModifyNoticeContentRequest $req) 该接口用于修改通知内容配置
 * @method Models\ModifyScheduledSqlResponse ModifyScheduledSql(Models\ModifyScheduledSqlRequest $req) 本接口用于修改定时SQL分析任务
 * @method Models\ModifyShipperResponse ModifyShipper(Models\ModifyShipperRequest $req) 修改现有的投递规则，客户如果使用此接口，需要自行处理CLS对指定bucket的写权限。
 * @method Models\ModifySplunkDeliverResponse ModifySplunkDeliver(Models\ModifySplunkDeliverRequest $req) 修改splunk投递任务相关信息
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 本接口用于修改日志或指标主题。
 * @method Models\ModifyWebCallbackResponse ModifyWebCallback(Models\ModifyWebCallbackRequest $req) 该接口用于修改告警渠道回调配置。
 * @method Models\OpenKafkaConsumerResponse OpenKafkaConsumer(Models\OpenKafkaConsumerRequest $req) 打开Kafka协议消费功能
 * @method Models\PreviewKafkaRechargeResponse PreviewKafkaRecharge(Models\PreviewKafkaRechargeRequest $req) 本接口用于预览Kafka数据订阅任务客户日志信息
 * @method Models\QueryMetricResponse QueryMetric(Models\QueryMetricRequest $req) 查询指定时刻指标的最新值。
如果该时刻向前推5分钟内均无指标数据，则无相应的查询结果。
 * @method Models\QueryRangeMetricResponse QueryRangeMetric(Models\QueryRangeMetricRequest $req) 查询指定时间范围内指标的变化趋势
 * @method Models\RetryShipperTaskResponse RetryShipperTask(Models\RetryShipperTaskRequest $req) 重试失败的投递任务
 * @method Models\SearchCosRechargeInfoResponse SearchCosRechargeInfo(Models\SearchCosRechargeInfoRequest $req) 本接口用于预览cos导入信息
 * @method Models\SearchDashboardSubscribeResponse SearchDashboardSubscribe(Models\SearchDashboardSubscribeRequest $req) 此接口用于预览仪表盘订阅
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) 本接口用于检索分析日志，使用该接口时请注意如下事项：
1. 该接口除受默认接口请求频率限制外，针对单个日志主题，查询并发数不能超过15。
2. 检索语法建议使用日志服务专用检索语法CQL，请使用SyntaxRule参数，将值设置为1，控制台默认也使用该语法规则。
3. API返回数据包最大49MB，建议启用 gzip 压缩（HTTP Request Header Accept-Encoding:gzip）。
 * @method Models\SendConsumerHeartbeatResponse SendConsumerHeartbeat(Models\SendConsumerHeartbeatRequest $req) 消费组心跳
 * @method Models\SplitPartitionResponse SplitPartition(Models\SplitPartitionRequest $req) 该接口已废弃，如需修改分区数量，请使用ModifyTopic接口。
 * @method Models\UploadLogResponse UploadLog(Models\UploadLogRequest $req) ## 提示
为了保障您日志数据的可靠性以及更高效地使用日志服务，建议您使用CLS优化后的接口[上传结构化日志](https://cloud.tencent.com/document/product/614/16873)。

同时我们给此接口专门优化定制了多个语言版本的SDK供您选择，SDK提供统一的异步发送、资源控制、自动重试、优雅关闭、感知上报等功能，使上报日志功能更完善，详情请参考[SDK采集](https://cloud.tencent.com/document/product/614/67157)。

同时云API上传日志接口也支持同步上传日志数据，如果您选择继续使用此接口请参考下文。

## 功能描述

本接口用于将日志写入到指定的日志主题。

#### 输入参数(pb二进制流，位于body中)

| 字段名       | 类型    | 位置 | 必须 | 含义                                                         |
| ------------ | ------- | ---- | ---- | ------------------------------------------------------------ |
| logGroupList | message | pb   | 是   | logGroup 列表，封装好的日志组列表内容，建议 logGroup 数量不要超过5个 |

LogGroup 说明：

| 字段名      | 是否必选 | 含义                                                         |
| ----------- | -------- | ------------------------------------------------------------ |
| logs        | 是       | 日志数组，表示有多个 Log 组成的集合，一个 Log 表示一条日志，一个 LogGroup 中 Log 个数不能超过10000 |
| contextFlow | 否       | LogGroup 的唯一ID，需要使用上下文功能时传入。格式："{上下文ID}-{LogGroupID}"。<br>上下文ID：唯一标识一个上下文（连续滚动的一系列日志文件，或者是需要保序的一系列日志），16进制64位整型字符串。<br>LogGroupID：连续递增的一串整型，16进制64位整型字符串。样例："102700A66102516A-59F59"。                        |
| filename    | 否       | 日志文件名                                                   |
| source      | 否       | 日志来源，一般使用机器 IP 作为标识                           |
| logTags     | 否       | 日志的标签列表                                               |

Log 说明：

| 字段名   | 是否必选 | 含义                                                         |
| -------- | -------- | ------------------------------------------------------------ |
| time     | 是       | 日志时间（Unix 格式时间戳），支持秒、毫秒，建议采用毫秒      |
| contents | 否       | key-value 格式的日志内容，表示一条日志里的多个 key-value 组合 |

Content 说明：

| 字段名 | 是否必选 | 含义                                                         |
| ------ | -------- | ------------------------------------------------------------ |
| key    | 是       | 单条日志里某个字段组的 key 值，不能以`_`开头                 |
| value  | 是       | 单条日志某个字段组的 value 值，单条日志 value 不能超过1MB，LogGroup 中所有 value 总和不能超过5MB |

LogTag 说明：

| 字段名 | 是否必选 | 含义                             |
| ------ | -------- | -------------------------------- |
| key    | 是       | 自定义的标签 key                 |
| value  | 是       | 自定义的标签 key 对应的 value 值 |

## PB 编译示例

本示例将说明如何使用官方 protoc 编译工具将 PB 描述文件 编译生成为 C++ 语言可调用的上传日志接口。

> ?目前 protoc 官方支持 Java、C++、Python 等语言的编译，详情请参见 [protoc](https://github.com/protocolbuffers/protobuf)。

#### 1. 安装 Protocol Buffer

下载 [Protocol Buffer](https://main.qcloudimg.com/raw/d7810aaf8b3073fbbc9d4049c21532aa/protobuf-2.6.1.tar.gz) ，解压并安装。示例版本为 protobuf 2.6.1，环境为 Centos 7.3 系统。 解压`protobuf-2.6.1.tar.gz`压缩包至`/usr/local`目录并进入该目录，执行命令如下：

```
tar -zxvf protobuf-2.6.1.tar.gz -C /usr/local/ && cd /usr/local/protobuf-2.6.1
```

开始编译和安装，配置环境变量，执行命令如下：

```
[root@VM_0_8_centos protobuf-2.6.1]# ./configure 
[root@VM_0_8_centos protobuf-2.6.1]# make && make install
[root@VM_0_8_centos protobuf-2.6.1]# export PATH=$PATH:/usr/local/protobuf-2.6.1/bin
```

编译成功后，您可以使用以下命令查看版本：

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --version
liprotoc 2.6.1
```

#### 2. 创建 PB 描述文件

PB 描述文件是通信双方约定的数据交换格式，上传日志时须将规定的协议格式编译成对应语言版本的调用接口，然后添加到工程代码里，详情请参见 [protoc](https://github.com/protocolbuffers/protobuf) 。

以日志服务所规定的 PB 数据格式内容为准， 在本地创建 PB 消息描述文件 cls.proto。

> !PB 描述文件内容不可更改，且文件名须以`.proto`结尾。

cls.proto 内容（PB 描述文件）如下：

```
package cls;

message Log
{
    message Content
    {
        required string key   = 1; // 每组字段的 key
        required string value = 2; // 每组字段的 value
    }
    required int64   time     = 1; // 时间戳，UNIX时间格式
    repeated Content contents = 2; // 一条日志里的多个kv组合
}

message LogTag
{
    required string key       = 1;
    required string value     = 2;
}

message LogGroup
{
    repeated Log    logs        = 1; // 多条日志合成的日志数组
    optional string contextFlow = 2; // 目前暂无效用
    optional string filename    = 3; // 日志文件名
    optional string source      = 4; // 日志来源，一般使用机器IP
    repeated LogTag logTags     = 5;
}

message LogGroupList
{
    repeated LogGroup logGroupList = 1; // 日志组列表
}
```

#### 3. 编译生成

此例中，使用 proto 编译器生成 C++ 语言的文件，在 cls.proto 文件的同一目录下，执行如下编译命令：

```
protoc --cpp_out=./ ./cls.proto 
```

> ?`--cpp_out=./`表示编译成 cpp 格式并输出当前目录下，`./cls.proto`表示位于当前目录下的 cls.proto 描述文件。

编译成功后，会输出对应语言的代码文件。此例会生成 cls.pb.h 头文件和 [cls.pb.cc](http://cls.pb.cc) 代码实现文件，如下所示：

```
[root@VM_0_8_centos protobuf-2.6.1]# protoc --cpp_out=./ ./cls.proto
[root@VM_0_8_centos protobuf-2.6.1]# ls
cls.pb.cc cls.pb.h cls.proto
```

#### 4. 调用

将生成的 cls.pb.h 头文件引入代码中，调用接口进行数据格式封装。
 */

class ClsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cls.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cls";

    /**
     * @var string
     */
    protected $version = "2020-10-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("cls")."\\"."V20201016\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
