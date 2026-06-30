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

namespace TencentCloud\Cngw\V20230418;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cngw\V20230418\Models as Models;

/**
 * @method Models\AddCloudNativeAPIGatewayConsumerGroupAuthResponse AddCloudNativeAPIGatewayConsumerGroupAuth(Models\AddCloudNativeAPIGatewayConsumerGroupAuthRequest $req) 为资源（模型 API / MCP Server）添加消费者组授权。
 * @method Models\AddCloudNativeAPIGatewayConsumerInGroupResponse AddCloudNativeAPIGatewayConsumerInGroup(Models\AddCloudNativeAPIGatewayConsumerInGroupRequest $req) 将消费者添加到消费者组。
 * @method Models\BindCloudNativeAPIGatewaySecretKeyResponse BindCloudNativeAPIGatewaySecretKey(Models\BindCloudNativeAPIGatewaySecretKeyRequest $req) 添加密钥与资源的引用关系接口
 * @method Models\CreateCloudNativeAPIGatewayConsumerResponse CreateCloudNativeAPIGatewayConsumer(Models\CreateCloudNativeAPIGatewayConsumerRequest $req) 创建AI网关消费者。
 * @method Models\CreateCloudNativeAPIGatewayConsumerGroupResponse CreateCloudNativeAPIGatewayConsumerGroup(Models\CreateCloudNativeAPIGatewayConsumerGroupRequest $req) 创建AI 网关消费者组
 * @method Models\CreateCloudNativeAPIGatewayLLMModelAPIResponse CreateCloudNativeAPIGatewayLLMModelAPI(Models\CreateCloudNativeAPIGatewayLLMModelAPIRequest $req) 创建 LLM 模型 API。
 * @method Models\CreateCloudNativeAPIGatewayLLMModelServiceResponse CreateCloudNativeAPIGatewayLLMModelService(Models\CreateCloudNativeAPIGatewayLLMModelServiceRequest $req) 创建 LLM 模型服务。同一网关下 Name 唯一。
 * @method Models\CreateCloudNativeAPIGatewayMCPServerResponse CreateCloudNativeAPIGatewayMCPServer(Models\CreateCloudNativeAPIGatewayMCPServerRequest $req) 创建AI网关MCP Server
 * @method Models\CreateCloudNativeAPIGatewayMCPToolResponse CreateCloudNativeAPIGatewayMCPTool(Models\CreateCloudNativeAPIGatewayMCPToolRequest $req) 创建AI网关MCP Tool
 * @method Models\CreateCloudNativeAPIGatewaySecretKeyResponse CreateCloudNativeAPIGatewaySecretKey(Models\CreateCloudNativeAPIGatewaySecretKeyRequest $req) 创建消费者密钥。
 * @method Models\DeleteCloudNativeAPIGatewayConsumerResponse DeleteCloudNativeAPIGatewayConsumer(Models\DeleteCloudNativeAPIGatewayConsumerRequest $req) 删除AI 网关消费者（被绑定到消费者组/密钥时需先解绑）。
 * @method Models\DeleteCloudNativeAPIGatewayConsumerGroupResponse DeleteCloudNativeAPIGatewayConsumerGroup(Models\DeleteCloudNativeAPIGatewayConsumerGroupRequest $req) 删除AI网关消费者组
 * @method Models\DeleteCloudNativeAPIGatewayLLMModelAPIResponse DeleteCloudNativeAPIGatewayLLMModelAPI(Models\DeleteCloudNativeAPIGatewayLLMModelAPIRequest $req) 删除 LLM 模型 API。
 * @method Models\DeleteCloudNativeAPIGatewayLLMModelServiceResponse DeleteCloudNativeAPIGatewayLLMModelService(Models\DeleteCloudNativeAPIGatewayLLMModelServiceRequest $req) 删除 LLM 模型服务（被模型 API 绑定时需先解绑）。
 * @method Models\DeleteCloudNativeAPIGatewayMCPServerResponse DeleteCloudNativeAPIGatewayMCPServer(Models\DeleteCloudNativeAPIGatewayMCPServerRequest $req) 删除AI网关MCP服务
 * @method Models\DeleteCloudNativeAPIGatewayMCPToolResponse DeleteCloudNativeAPIGatewayMCPTool(Models\DeleteCloudNativeAPIGatewayMCPToolRequest $req) 删除AI网关MCP Tool
 * @method Models\DeleteCloudNativeAPIGatewaySecretKeyResponse DeleteCloudNativeAPIGatewaySecretKey(Models\DeleteCloudNativeAPIGatewaySecretKeyRequest $req) 删除消费者密钥（被绑定时需先解绑）。
 * @method Models\DescribeCloudNativeAPIGatewayConsumerResponse DescribeCloudNativeAPIGatewayConsumer(Models\DescribeCloudNativeAPIGatewayConsumerRequest $req) 查询云原生消费者详情
 * @method Models\DescribeCloudNativeAPIGatewayConsumerGroupResponse DescribeCloudNativeAPIGatewayConsumerGroup(Models\DescribeCloudNativeAPIGatewayConsumerGroupRequest $req) 查询消费者组详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelAPIResponse DescribeCloudNativeAPIGatewayLLMModelAPI(Models\DescribeCloudNativeAPIGatewayLLMModelAPIRequest $req) 查询单个 LLM 模型 API 详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelAPIsResponse DescribeCloudNativeAPIGatewayLLMModelAPIs(Models\DescribeCloudNativeAPIGatewayLLMModelAPIsRequest $req) 查询 LLM 模型 API 列表。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelServiceResponse DescribeCloudNativeAPIGatewayLLMModelService(Models\DescribeCloudNativeAPIGatewayLLMModelServiceRequest $req) 查询单个 LLM 模型服务详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelServicesResponse DescribeCloudNativeAPIGatewayLLMModelServices(Models\DescribeCloudNativeAPIGatewayLLMModelServicesRequest $req) 查询 LLM 模型服务列表。
 * @method Models\DescribeCloudNativeAPIGatewayLLMTokenUsageListResponse DescribeCloudNativeAPIGatewayLLMTokenUsageList(Models\DescribeCloudNativeAPIGatewayLLMTokenUsageListRequest $req) 查询 AI 网关Token 消耗统计
 * @method Models\DescribeCloudNativeAPIGatewayLLMTokenUsageStatisticsResponse DescribeCloudNativeAPIGatewayLLMTokenUsageStatistics(Models\DescribeCloudNativeAPIGatewayLLMTokenUsageStatisticsRequest $req) 查询 AI 网关Token 消耗统计汇总
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerResponse DescribeCloudNativeAPIGatewayMCPServer(Models\DescribeCloudNativeAPIGatewayMCPServerRequest $req) 查询AI 网关MCP服务信息
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerACLResponse DescribeCloudNativeAPIGatewayMCPServerACL(Models\DescribeCloudNativeAPIGatewayMCPServerACLRequest $req) 查看 MCP Server ACL
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerAuthResponse DescribeCloudNativeAPIGatewayMCPServerAuth(Models\DescribeCloudNativeAPIGatewayMCPServerAuthRequest $req) 查询 MCP Server 的认证配置
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerListResponse DescribeCloudNativeAPIGatewayMCPServerList(Models\DescribeCloudNativeAPIGatewayMCPServerListRequest $req) AI网关查询MCP服务列表
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolResponse DescribeCloudNativeAPIGatewayMCPTool(Models\DescribeCloudNativeAPIGatewayMCPToolRequest $req) 查看AI网关MCP Tool
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolACLListResponse DescribeCloudNativeAPIGatewayMCPToolACLList(Models\DescribeCloudNativeAPIGatewayMCPToolACLListRequest $req) 查询云原生网关 MCP Server 下所有 Tool 的 ACL 状态一览（含 Server ACLType 回显）。
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolListResponse DescribeCloudNativeAPIGatewayMCPToolList(Models\DescribeCloudNativeAPIGatewayMCPToolListRequest $req) 查询 AI 网关MCP Tool 列表
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyResponse DescribeCloudNativeAPIGatewaySecretKey(Models\DescribeCloudNativeAPIGatewaySecretKeyRequest $req) 查询密钥详情（SecretValue 字段会被掩码）。
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyValueResponse DescribeCloudNativeAPIGatewaySecretKeyValue(Models\DescribeCloudNativeAPIGatewaySecretKeyValueRequest $req) 查询密钥明文值（KMS 类型密钥不可获取）。
 * @method Models\ModifyCloudNativeAPIGatewayConsumerResponse ModifyCloudNativeAPIGatewayConsumer(Models\ModifyCloudNativeAPIGatewayConsumerRequest $req) 修改AI网关消费者
 * @method Models\ModifyCloudNativeAPIGatewayConsumerGroupResponse ModifyCloudNativeAPIGatewayConsumerGroup(Models\ModifyCloudNativeAPIGatewayConsumerGroupRequest $req) 修改消费者组。
 * @method Models\ModifyCloudNativeAPIGatewayLLMModelAPIResponse ModifyCloudNativeAPIGatewayLLMModelAPI(Models\ModifyCloudNativeAPIGatewayLLMModelAPIRequest $req) 修改 LLM 模型 API。
 * @method Models\ModifyCloudNativeAPIGatewayLLMModelServiceResponse ModifyCloudNativeAPIGatewayLLMModelService(Models\ModifyCloudNativeAPIGatewayLLMModelServiceRequest $req) 修改 LLM 模型服务。
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerResponse ModifyCloudNativeAPIGatewayMCPServer(Models\ModifyCloudNativeAPIGatewayMCPServerRequest $req) 修改MCP服务配置
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerACLResponse ModifyCloudNativeAPIGatewayMCPServerACL(Models\ModifyCloudNativeAPIGatewayMCPServerACLRequest $req) 修改 MCP Server ACL
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerAuthResponse ModifyCloudNativeAPIGatewayMCPServerAuth(Models\ModifyCloudNativeAPIGatewayMCPServerAuthRequest $req) 修改 MCP Server 的认证配置
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerStatusResponse ModifyCloudNativeAPIGatewayMCPServerStatus(Models\ModifyCloudNativeAPIGatewayMCPServerStatusRequest $req) 创建AI 网关MCP Server
 * @method Models\ModifyCloudNativeAPIGatewayMCPToolResponse ModifyCloudNativeAPIGatewayMCPTool(Models\ModifyCloudNativeAPIGatewayMCPToolRequest $req) 修改AI网关MCP Tool
 * @method Models\ModifyCloudNativeAPIGatewayMCPToolACLResponse ModifyCloudNativeAPIGatewayMCPToolACL(Models\ModifyCloudNativeAPIGatewayMCPToolACLRequest $req) 修改 MCP Server Tool ACL
 * @method Models\ModifyCloudNativeAPIGatewayMCPToolStatusResponse ModifyCloudNativeAPIGatewayMCPToolStatus(Models\ModifyCloudNativeAPIGatewayMCPToolStatusRequest $req) AI网关修改MCP Tool上下线状态
 * @method Models\ModifyCloudNativeAPIGatewaySecretKeyResponse ModifyCloudNativeAPIGatewaySecretKey(Models\ModifyCloudNativeAPIGatewaySecretKeyRequest $req) 修改AI网关密钥
 * @method Models\RemoveCloudNativeAPIGatewayConsumerGroupAuthResponse RemoveCloudNativeAPIGatewayConsumerGroupAuth(Models\RemoveCloudNativeAPIGatewayConsumerGroupAuthRequest $req) 从资源（模型 API / MCP Server）移除消费者组授权。
 * @method Models\RemoveCloudNativeAPIGatewayConsumerInGroupResponse RemoveCloudNativeAPIGatewayConsumerInGroup(Models\RemoveCloudNativeAPIGatewayConsumerInGroupRequest $req) 将消费者从消费者组移除。
 * @method Models\UnbindCloudNativeAPIGatewaySecretKeyResponse UnbindCloudNativeAPIGatewaySecretKey(Models\UnbindCloudNativeAPIGatewaySecretKeyRequest $req) 解绑密钥
 */

class CngwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cngw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cngw";

    /**
     * @var string
     */
    protected $version = "2023-04-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("cngw")."\\"."V20230418\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
