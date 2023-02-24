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

namespace TencentCloud\Ckafka\V20190819;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ckafka\V20190819\Models as Models;

/**
 * @method Models\AuthorizeTokenResponse AuthorizeToken(Models\AuthorizeTokenRequest $req) 给实例授权token
 * @method Models\BatchCreateAclResponse BatchCreateAcl(Models\BatchCreateAclRequest $req) 批量添加ACL策略
 * @method Models\BatchModifyGroupOffsetsResponse BatchModifyGroupOffsets(Models\BatchModifyGroupOffsetsRequest $req) 批量修改消费组offset
 * @method Models\BatchModifyTopicAttributesResponse BatchModifyTopicAttributes(Models\BatchModifyTopicAttributesRequest $req) 批量设置主题属性
 * @method Models\CancelAuthorizationTokenResponse CancelAuthorizationToken(Models\CancelAuthorizationTokenRequest $req) 取消授权token
 * @method Models\CheckCdcClusterResponse CheckCdcCluster(Models\CheckCdcClusterRequest $req) 用于查询cdc-ckafka任务状态
 * @method Models\CreateAclResponse CreateAcl(Models\CreateAclRequest $req) 添加 ACL 策略
 * @method Models\CreateCdcClusterResponse CreateCdcCluster(Models\CreateCdcClusterRequest $req) 用于cdc的专用ckafka集群
 * @method Models\CreateConnectResourceResponse CreateConnectResource(Models\CreateConnectResourceRequest $req) 创建Datahub连接源
 * @method Models\CreateConsumerResponse CreateConsumer(Models\CreateConsumerRequest $req) 创建消费者组
 * @method Models\CreateDatahubTaskResponse CreateDatahubTask(Models\CreateDatahubTaskRequest $req) 创建DIP转储任务
 * @method Models\CreateInstancePostResponse CreateInstancePost(Models\CreateInstancePostRequest $req) 创建按量计费实例
 * @method Models\CreateInstancePreResponse CreateInstancePre(Models\CreateInstancePreRequest $req) 创建实例(预付费包年包月)
 * @method Models\CreatePartitionResponse CreatePartition(Models\CreatePartitionRequest $req) 本接口用于增加主题中的分区
 * @method Models\CreateRouteResponse CreateRoute(Models\CreateRouteRequest $req) 添加实例路由
 * @method Models\CreateTokenResponse CreateToken(Models\CreateTokenRequest $req) 创建最高权限的token
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建ckafka主题
 * @method Models\CreateTopicIpWhiteListResponse CreateTopicIpWhiteList(Models\CreateTopicIpWhiteListRequest $req) 创建主题ip白名单
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 添加用户
 * @method Models\DeleteAclResponse DeleteAcl(Models\DeleteAclRequest $req) 删除ACL
 * @method Models\DeleteAclRuleResponse DeleteAclRule(Models\DeleteAclRuleRequest $req) 删除ACL规则
 * @method Models\DeleteConnectResourceResponse DeleteConnectResource(Models\DeleteConnectResourceRequest $req) 删除Datahub连接源
 * @method Models\DeleteDatahubTaskResponse DeleteDatahubTask(Models\DeleteDatahubTaskRequest $req) 删除Datahub任务
 * @method Models\DeleteDatahubTopicResponse DeleteDatahubTopic(Models\DeleteDatahubTopicRequest $req) 删除Datahub主题
 * @method Models\DeleteGroupResponse DeleteGroup(Models\DeleteGroupRequest $req) 删除消费组
 * @method Models\DeleteInstancePreResponse DeleteInstancePre(Models\DeleteInstancePreRequest $req) 删除预付费实例
 * @method Models\DeleteRouteResponse DeleteRoute(Models\DeleteRouteRequest $req) 删除路由
 * @method Models\DeleteRouteTriggerTimeResponse DeleteRouteTriggerTime(Models\DeleteRouteTriggerTimeRequest $req) 修改删除路由延迟触发时间
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除ckafka主题
 * @method Models\DeleteTopicIpWhiteListResponse DeleteTopicIpWhiteList(Models\DeleteTopicIpWhiteListRequest $req) 删除主题IP白名单
 * @method Models\DeleteUserResponse DeleteUser(Models\DeleteUserRequest $req) 删除用户
 * @method Models\DescribeACLResponse DescribeACL(Models\DescribeACLRequest $req) 枚举ACL
 * @method Models\DescribeAppInfoResponse DescribeAppInfo(Models\DescribeAppInfoRequest $req) 查询用户列表
 * @method Models\DescribeCkafkaZoneResponse DescribeCkafkaZone(Models\DescribeCkafkaZoneRequest $req) 用于查看ckafka的可用区列表
 * @method Models\DescribeConnectResourceResponse DescribeConnectResource(Models\DescribeConnectResourceRequest $req) 查询Datahub连接源
 * @method Models\DescribeConnectResourcesResponse DescribeConnectResources(Models\DescribeConnectResourcesRequest $req) 查询Datahub连接源列表
 * @method Models\DescribeConsumerGroupResponse DescribeConsumerGroup(Models\DescribeConsumerGroupRequest $req) 查询消费分组信息
 * @method Models\DescribeDatahubGroupOffsetsResponse DescribeDatahubGroupOffsets(Models\DescribeDatahubGroupOffsetsRequest $req) 获取Datahub消费分组offset
 * @method Models\DescribeDatahubTaskResponse DescribeDatahubTask(Models\DescribeDatahubTaskRequest $req) 查询Datahub任务信息
 * @method Models\DescribeDatahubTasksResponse DescribeDatahubTasks(Models\DescribeDatahubTasksRequest $req) 查询Datahub任务列表 
 * @method Models\DescribeDatahubTopicResponse DescribeDatahubTopic(Models\DescribeDatahubTopicRequest $req) 获取Datahub主题属性
 * @method Models\DescribeDatahubTopicsResponse DescribeDatahubTopics(Models\DescribeDatahubTopicsRequest $req) 查询DIP主题列表
 * @method Models\DescribeGroupResponse DescribeGroup(Models\DescribeGroupRequest $req) 枚举消费分组(精简版)
 * @method Models\DescribeGroupInfoResponse DescribeGroupInfo(Models\DescribeGroupInfoRequest $req) 获取消费分组信息
 * @method Models\DescribeGroupOffsetsResponse DescribeGroupOffsets(Models\DescribeGroupOffsetsRequest $req) 获取消费分组offset
 * @method Models\DescribeInstanceAttributesResponse DescribeInstanceAttributes(Models\DescribeInstanceAttributesRequest $req) 获取实例属性 
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstance）用于在用户账户下获取消息队列 CKafka 实例列表
 * @method Models\DescribeInstancesDetailResponse DescribeInstancesDetail(Models\DescribeInstancesDetailRequest $req) 用户账户下获取实例列表详情
 * @method Models\DescribeRegionResponse DescribeRegion(Models\DescribeRegionRequest $req) 枚举地域,只支持广州地域
 * @method Models\DescribeRouteResponse DescribeRoute(Models\DescribeRouteRequest $req) 查看路由信息
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) 接口请求域名：https://ckafka.tencentcloudapi.com
本接口（DescribeTopic）用于在用户获取消息队列 CKafka 实例的主题列表
 * @method Models\DescribeTopicAttributesResponse DescribeTopicAttributes(Models\DescribeTopicAttributesRequest $req) 获取主题属性

 * @method Models\DescribeTopicDetailResponse DescribeTopicDetail(Models\DescribeTopicDetailRequest $req) 获取主题列表详情（仅控制台调用）
 * @method Models\DescribeTopicProduceConnectionResponse DescribeTopicProduceConnection(Models\DescribeTopicProduceConnectionRequest $req) 查询topic 生产端连接信息
 * @method Models\DescribeTopicSubscribeGroupResponse DescribeTopicSubscribeGroup(Models\DescribeTopicSubscribeGroupRequest $req) 查询订阅某主题消息分组信息
 * @method Models\DescribeTopicSyncReplicaResponse DescribeTopicSyncReplica(Models\DescribeTopicSyncReplicaRequest $req) 获取Topic 副本详情信息
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) 查询用户信息
 * @method Models\FetchDatahubMessageByOffsetResponse FetchDatahubMessageByOffset(Models\FetchDatahubMessageByOffsetRequest $req) 根据指定offset位置的消息
 * @method Models\FetchLatestDatahubMessageListResponse FetchLatestDatahubMessageList(Models\FetchLatestDatahubMessageListRequest $req) 查询最新消息列表
 * @method Models\FetchMessageByOffsetResponse FetchMessageByOffset(Models\FetchMessageByOffsetRequest $req) 根据指定offset位置的消息
 * @method Models\FetchMessageListByOffsetResponse FetchMessageListByOffset(Models\FetchMessageListByOffsetRequest $req) 根据位点查询消息列表
 * @method Models\InquireCkafkaPriceResponse InquireCkafkaPrice(Models\InquireCkafkaPriceRequest $req) Ckafka实例购买/续费询价
 * @method Models\ModifyConnectResourceResponse ModifyConnectResource(Models\ModifyConnectResourceRequest $req) 编辑Datahub连接源
 * @method Models\ModifyDatahubTaskResponse ModifyDatahubTask(Models\ModifyDatahubTaskRequest $req) 修改Datahub任务
 * @method Models\ModifyGroupOffsetsResponse ModifyGroupOffsets(Models\ModifyGroupOffsetsRequest $req) 设置Groups 消费分组offset
 * @method Models\ModifyInstanceAttributesResponse ModifyInstanceAttributes(Models\ModifyInstanceAttributesRequest $req) 设置实例属性
 * @method Models\ModifyInstancePreResponse ModifyInstancePre(Models\ModifyInstancePreRequest $req) 预付费实例变配接口，调整磁盘，带宽
 * @method Models\ModifyPasswordResponse ModifyPassword(Models\ModifyPasswordRequest $req) 修改密码
 * @method Models\ModifyTopicAttributesResponse ModifyTopicAttributes(Models\ModifyTopicAttributesRequest $req) 本接口用于修改主题属性。
 * @method Models\SendMessageResponse SendMessage(Models\SendMessageRequest $req) 通过HTTP接入层发送消息
 */

class CkafkaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ckafka.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ckafka";

    /**
     * @var string
     */
    protected $version = "2019-08-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("ckafka")."\\"."V20190819\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
