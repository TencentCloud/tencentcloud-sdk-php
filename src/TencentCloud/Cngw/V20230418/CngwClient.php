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
【消费者批量自动分配 API Key｜修改：内部并发/配额逻辑，字段不变】ResourceType=Consumer 时与批量预留共用实例写锁，单消费者绑定配额使用当前锁定读。仍按原 SecretKeyId、ResourceIds 绑定；消费者目标最多一个，单密钥不能同时绑定多个消费者，成功仍返回 Result=true。此入口不新增 OperationDenied.BatchKeyPending；该错误属于下述四个变更入口的保护逻辑。
 * @method Models\CheckCloudNativeAPIGatewayMCPRouteMatchResponse CheckCloudNativeAPIGatewayMCPRouteMatch(Models\CheckCloudNativeAPIGatewayMCPRouteMatchRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\CheckCloudNativeAPIGatewayMCPToolVersionExistResponse CheckCloudNativeAPIGatewayMCPToolVersionExist(Models\CheckCloudNativeAPIGatewayMCPToolVersionExistRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\CompareCloudNativeAPIGatewayMCPToolVersionResponse CompareCloudNativeAPIGatewayMCPToolVersion(Models\CompareCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\CreateAIGWCustomGuardrailPolicyResponse CreateAIGWCustomGuardrailPolicy(Models\CreateAIGWCustomGuardrailPolicyRequest $req) 创建自定义外部审核策略，并把资源绑定配置同步到 Kong Route。建议先调用 DescribeAIGWCustomGuardrailCapabilities、DescribeAIGWCustomGuardrailBindableResources 和 TestAIGWCustomGuardrailPolicy。支持模型 API、MCP Streamable HTTP、A2A Agent API；当前不开放 Dify、Custom Agent、Legacy SSE MCP。请检查 Result.Success、SyncStatus、FailedResources；部分同步失败不等于策略未创建，应按返回 PolicyId 查询并处理，避免重复创建。网关需满足最低版本 3.9.6，且已安装、启用并加载 cngw-ai-custom-guardrail。创建、修改、删除要求网关处于稳定 Running 状态，升级/回滚/撤销升级期间不能修改策略。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。

输入约束：新配置只接受 field_mapping，不再默认为 standard_v2。创建时鉴权和检测行为必须完整填写；修改为 PATCH，省略保留，显式空值不补默认值。存量 standard_v2 策略仍可查询、删除或直接停用；修改其判定配置或重新启用前需迁移到 field_mapping。条件必填由后端按完整配置校验，非法配置不写库、不下发。
 * @method Models\CreateCloudNativeAPIGatewayAIServiceSourceResponse CreateCloudNativeAPIGatewayAIServiceSource(Models\CreateCloudNativeAPIGatewayAIServiceSourceRequest $req) 创建云原生网关AI服务来源
 * @method Models\CreateCloudNativeAPIGatewayConsumerResponse CreateCloudNativeAPIGatewayConsumer(Models\CreateCloudNativeAPIGatewayConsumerRequest $req) 创建AI网关消费者。
 * @method Models\CreateCloudNativeAPIGatewayConsumerGroupResponse CreateCloudNativeAPIGatewayConsumerGroup(Models\CreateCloudNativeAPIGatewayConsumerGroupRequest $req) 创建AI 网关消费者组
 * @method Models\CreateCloudNativeAPIGatewayLLMModelAPIResponse CreateCloudNativeAPIGatewayLLMModelAPI(Models\CreateCloudNativeAPIGatewayLLMModelAPIRequest $req) 创建 LLM 模型 API。
 * @method Models\CreateCloudNativeAPIGatewayLLMModelServiceResponse CreateCloudNativeAPIGatewayLLMModelService(Models\CreateCloudNativeAPIGatewayLLMModelServiceRequest $req) 创建指定网关实例内的 LLM 模型服务。同一网关下 Name 唯一。可为明确请求 gzip 的供应商选择是否关闭上游压缩协商。
 * @method Models\CreateCloudNativeAPIGatewayMCPRouteResponse CreateCloudNativeAPIGatewayMCPRoute(Models\CreateCloudNativeAPIGatewayMCPRouteRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\CreateCloudNativeAPIGatewayMCPServerResponse CreateCloudNativeAPIGatewayMCPServer(Models\CreateCloudNativeAPIGatewayMCPServerRequest $req) 创建AI网关MCP Server
 * @method Models\CreateCloudNativeAPIGatewayMCPToolResponse CreateCloudNativeAPIGatewayMCPTool(Models\CreateCloudNativeAPIGatewayMCPToolRequest $req) 创建AI网关MCP Tool
 * @method Models\CreateCloudNativeAPIGatewaySecretKeyResponse CreateCloudNativeAPIGatewaySecretKey(Models\CreateCloudNativeAPIGatewaySecretKeyRequest $req) 创建消费者密钥。
【消费者批量自动分配 API Key｜修改：内部并发/配额逻辑，字段不变】消费者密钥单条创建在事务中使用与批量预留相同的实例写锁，配额检查使用当前锁定读，避免单条与批量并发绕过配额。仍是单条创建；原 GenerateType、请求字段、既有配额错误语义及 Result.Success/ID 不变，不增加 ConsumerIds/ClientToken。
 * @method Models\CreateOrModifyCloudNativeAPIGatewayIPRestrictionResponse CreateOrModifyCloudNativeAPIGatewayIPRestriction(Models\CreateOrModifyCloudNativeAPIGatewayIPRestrictionRequest $req) 创建或编辑云原生网关访问控制
 * @method Models\DeleteAIGWCustomGuardrailPolicyResponse DeleteAIGWCustomGuardrailPolicy(Models\DeleteAIGWCustomGuardrailPolicyRequest $req) 先清理该策略的 Route 插件投影，再删除策略和绑定。清理失败返回 Result.Success=false，保留策略供排障后重试；不删除绑定的模型、MCP、Agent 或审核引擎服务。网关需满足最低版本 3.9.6，且已安装、启用并加载 cngw-ai-custom-guardrail。创建、修改、删除要求网关处于稳定 Running 状态，升级/回滚/撤销升级期间不能修改策略。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\DeleteCloudNativeAPIGatewayAIServiceSourceResponse DeleteCloudNativeAPIGatewayAIServiceSource(Models\DeleteCloudNativeAPIGatewayAIServiceSourceRequest $req) 删除云原生网关AI服务来源
 * @method Models\DeleteCloudNativeAPIGatewayConsumerResponse DeleteCloudNativeAPIGatewayConsumer(Models\DeleteCloudNativeAPIGatewayConsumerRequest $req) 删除AI 网关消费者（被绑定到消费者组/密钥时需先解绑）。
 * @method Models\DeleteCloudNativeAPIGatewayConsumerGroupResponse DeleteCloudNativeAPIGatewayConsumerGroup(Models\DeleteCloudNativeAPIGatewayConsumerGroupRequest $req) 删除AI网关消费者组

同步组仅在 soft_deleted 状态且全部依赖已清理后允许手动硬删除；ConsumerGroupId 使用组织 UUID。存在配额规则时须先删除规则，单纯停用不能解除依赖。硬删除时重新校验，依赖变化可能导致删除失败。
 * @method Models\DeleteCloudNativeAPIGatewayIPRestrictionResponse DeleteCloudNativeAPIGatewayIPRestriction(Models\DeleteCloudNativeAPIGatewayIPRestrictionRequest $req) 删除云原生网关访问控制
 * @method Models\DeleteCloudNativeAPIGatewayLLMModelAPIResponse DeleteCloudNativeAPIGatewayLLMModelAPI(Models\DeleteCloudNativeAPIGatewayLLMModelAPIRequest $req) 删除 LLM 模型 API。
 * @method Models\DeleteCloudNativeAPIGatewayLLMModelServiceResponse DeleteCloudNativeAPIGatewayLLMModelService(Models\DeleteCloudNativeAPIGatewayLLMModelServiceRequest $req) 删除 LLM 模型服务（被模型 API 绑定时需先解绑）。
 * @method Models\DeleteCloudNativeAPIGatewayMCPRouteResponse DeleteCloudNativeAPIGatewayMCPRoute(Models\DeleteCloudNativeAPIGatewayMCPRouteRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\DeleteCloudNativeAPIGatewayMCPServerResponse DeleteCloudNativeAPIGatewayMCPServer(Models\DeleteCloudNativeAPIGatewayMCPServerRequest $req) 删除AI网关MCP服务
 * @method Models\DeleteCloudNativeAPIGatewayMCPToolResponse DeleteCloudNativeAPIGatewayMCPTool(Models\DeleteCloudNativeAPIGatewayMCPToolRequest $req) 删除AI网关MCP Tool
 * @method Models\DeleteCloudNativeAPIGatewayMCPToolVersionResponse DeleteCloudNativeAPIGatewayMCPToolVersion(Models\DeleteCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\DeleteCloudNativeAPIGatewaySecretKeyResponse DeleteCloudNativeAPIGatewaySecretKey(Models\DeleteCloudNativeAPIGatewaySecretKeyRequest $req) 删除消费者密钥（被绑定时需先解绑）。
【消费者批量自动分配 API Key｜修改：新增未完成批次保护，字段不变】目标密钥属于批次且对应项处于 Pending/Running/Reconciling 时，删除返回 OperationDenied.BatchKeyPending。完成后仍执行原绑定/依赖删除检查；原 GatewayId/SecretKeyId 不变，成功不新增业务 Result。删除已生成密钥不改写批次历史成功，后续批次明文读取返回逐项 ResourceNotFound.SecretKey。
 * @method Models\DescribeAIGWCustomGuardrailBindableResourcesResponse DescribeAIGWCustomGuardrailBindableResources(Models\DescribeAIGWCustomGuardrailBindableResourcesRequest $req) 按一种业务资源类型分页查询绑定候选及 Route 占用情况。编辑策略时传 PolicyId 排除自身占用，选择时同时检查 Supported 和 Occupied。当前屏蔽的 Dify/Custom Agent、Legacy SSE MCP 不进入可绑定列表。创建策略时使用 ResourceId，不使用 RouteIds。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\DescribeAIGWCustomGuardrailCapabilitiesResponse DescribeAIGWCustomGuardrailCapabilities(Models\DescribeAIGWCustomGuardrailCapabilitiesRequest $req) 查询当前控制面支持的协议分类、业务资源类型、审核方向及限制。会校验网关版本和插件可用性。Limits 是能力说明，不等于创建/修改策略可配置的字段，也不是逐个数据面实例的实时状态。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\DescribeAIGWCustomGuardrailHitsResponse DescribeAIGWCustomGuardrailHits(Models\DescribeAIGWCustomGuardrailHitsRequest $req) 从网关 RuntimeEventLog 对应 CLS 主题分页查询审核记录，调用前需开启日志投递。按时间倒序返回，查询时间入参为 Unix 秒，记录 Timestamp 为 Unix 毫秒；同一流式业务请求可有多次审核记录。当前查询无导出接口的 1000 条截断限制，使用 Offset/Limit 翻页。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\DescribeAIGWCustomGuardrailPolicyResponse DescribeAIGWCustomGuardrailPolicy(Models\DescribeAIGWCustomGuardrailPolicyRequest $req) 查询已有策略、脱敏鉴权配置、资源绑定与配置同步状态。Result 本身就是策略对象，不是 Result.Policy。密钥不返回明文，编辑时省略 ApiKey 即可保留。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\DescribeAIGWCustomGuardrailPolicyListResponse DescribeAIGWCustomGuardrailPolicyList(Models\DescribeAIGWCustomGuardrailPolicyListRequest $req) 按网关分页查询策略；Limit 必填，范围 1～100，Offset 默认 0。支持名称/描述搜索及配置过滤；同项多值 OR，不同过滤项 AND。Result.DataList 为策略数组。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\DescribeCNGWServicesWithRoutesResponse DescribeCNGWServicesWithRoutes(Models\DescribeCNGWServicesWithRoutesRequest $req) 查询云原生网关服务和路由列表
 * @method Models\DescribeCloudNativeAPIGatewayAIQuotaResponse DescribeCloudNativeAPIGatewayAIQuota(Models\DescribeCloudNativeAPIGatewayAIQuotaRequest $req) 查询AI网关配额

支持 ConsumerGroup 配额，返回 ConsumerGroupPath、ConsumerGroupActive 及实际用量；失效组的规则仍可查询。
 * @method Models\DescribeCloudNativeAPIGatewayAIQuotaListResponse DescribeCloudNativeAPIGatewayAIQuotaList(Models\DescribeCloudNativeAPIGatewayAIQuotaListRequest $req) 查询AI配额配置列表

支持按 ConsumerGroup 查询组自身配额，默认仍只查询 Consumer；返回组路径、有效状态及实际用量。上下级关联配额请使用 DescribeAIGWConsumerGroupAIQuotaList。
 * @method Models\DescribeCloudNativeAPIGatewayAIServiceSourceListResponse DescribeCloudNativeAPIGatewayAIServiceSourceList(Models\DescribeCloudNativeAPIGatewayAIServiceSourceListRequest $req) 查询云原生网关AI服务来源
 * @method Models\DescribeCloudNativeAPIGatewayConsumerResponse DescribeCloudNativeAPIGatewayConsumer(Models\DescribeCloudNativeAPIGatewayConsumerRequest $req) 查询云原生消费者详情

组织架构扩展：保留原消费者详情与完整字段，ConsumerGroups 补齐对应组织成员关系；同步成员保持目录归属隔离。
 * @method Models\DescribeCloudNativeAPIGatewayConsumerGroupResponse DescribeCloudNativeAPIGatewayConsumerGroup(Models\DescribeCloudNativeAPIGatewayConsumerGroupRequest $req) 查询消费者组详情。

组织架构扩展：ConsumerGroupId 同时支持原 cg-* 和组织部门 UUID；保留状态、数量、时间和描述逻辑。原普通组状态为 Enable/Disable，目录部门状态为 active/disabled/soft_deleted。
 * @method Models\DescribeCloudNativeAPIGatewayIPRestrictionResponse DescribeCloudNativeAPIGatewayIPRestriction(Models\DescribeCloudNativeAPIGatewayIPRestrictionRequest $req) 查询云原生网关访问控制
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelAPIResponse DescribeCloudNativeAPIGatewayLLMModelAPI(Models\DescribeCloudNativeAPIGatewayLLMModelAPIRequest $req) 查询单个 LLM 模型 API 详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelAPIsResponse DescribeCloudNativeAPIGatewayLLMModelAPIs(Models\DescribeCloudNativeAPIGatewayLLMModelAPIsRequest $req) 查询指定网关实例下的所有 LLM 模型 API 列表。支持按名称关键词模糊搜索、按过滤器筛选，以及分页查询。用于绑定场景时，可通过 ConsumerGroupId 和 UseToBind 参数筛选可绑定的模型 API。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelServiceResponse DescribeCloudNativeAPIGatewayLLMModelService(Models\DescribeCloudNativeAPIGatewayLLMModelServiceRequest $req) 查询单个 LLM 模型服务详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelServicesResponse DescribeCloudNativeAPIGatewayLLMModelServices(Models\DescribeCloudNativeAPIGatewayLLMModelServicesRequest $req) 查询 LLM 模型服务列表。
 * @method Models\DescribeCloudNativeAPIGatewayLLMTokenUsageListResponse DescribeCloudNativeAPIGatewayLLMTokenUsageList(Models\DescribeCloudNativeAPIGatewayLLMTokenUsageListRequest $req) 查询 AI 网关 Token 用量列表。网关版本不低于 3.9.8 且 Dimension=ConsumerGroup 时，未指定节点筛选则列出 Kong CP 当前目录的全部真实节点，包含同步、自定义、禁用及保留中的软删节点，排除合成展示节点。按当前名称、节点 UUID 升序，先分页节点再查询历史指标；无调用节点仍返回，Token 与请求数补零。节点指标包含历史下属，同一请求可计入多个组行，不能逐行相加作为网关总量。 网关版本不低于 3.9.8 时，所有支持维度的消费者组筛选统一为 ConsumerGroupId / ConsumerGroupName，均按历史归属查询；旧 OrganizationNodeId / OrganizationNodeName 筛选不再接受。
 * @method Models\DescribeCloudNativeAPIGatewayLLMTokenUsageStatisticsResponse DescribeCloudNativeAPIGatewayLLMTokenUsageStatistics(Models\DescribeCloudNativeAPIGatewayLLMTokenUsageStatisticsRequest $req) 查询 AI 网关 Token 用量汇总。网关版本不低于 3.9.8 且 Dimension=ConsumerGroup 时，按历史归属对日志并集去重统计；无节点筛选则查询全部成功归属且祖先集合非空的日志，不依赖当前组织目录候选。返回一份汇总，TopConsumers 为空数组。 网关版本不低于 3.9.8 时，所有支持维度的消费者组筛选统一为 ConsumerGroupId / ConsumerGroupName，均按历史归属查询；旧 OrganizationNodeId / OrganizationNodeName 筛选不再接受。
 * @method Models\DescribeCloudNativeAPIGatewayMCPRouteListResponse DescribeCloudNativeAPIGatewayMCPRouteList(Models\DescribeCloudNativeAPIGatewayMCPRouteListRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerResponse DescribeCloudNativeAPIGatewayMCPServer(Models\DescribeCloudNativeAPIGatewayMCPServerRequest $req) 查询AI 网关MCP服务信息
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerACLResponse DescribeCloudNativeAPIGatewayMCPServerACL(Models\DescribeCloudNativeAPIGatewayMCPServerACLRequest $req) 查看 MCP Server ACL
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerAuthResponse DescribeCloudNativeAPIGatewayMCPServerAuth(Models\DescribeCloudNativeAPIGatewayMCPServerAuthRequest $req) 查询 MCP Server 的认证配置
 * @method Models\DescribeCloudNativeAPIGatewayMCPServerListResponse DescribeCloudNativeAPIGatewayMCPServerList(Models\DescribeCloudNativeAPIGatewayMCPServerListRequest $req) AI网关查询MCP服务列表
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolResponse DescribeCloudNativeAPIGatewayMCPTool(Models\DescribeCloudNativeAPIGatewayMCPToolRequest $req) 查看AI网关MCP Tool
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolACLListResponse DescribeCloudNativeAPIGatewayMCPToolACLList(Models\DescribeCloudNativeAPIGatewayMCPToolACLListRequest $req) 查询云原生网关 MCP Server 下所有 Tool 的 ACL 状态一览（含 Server ACLType 回显）。
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolImportTaskResponse DescribeCloudNativeAPIGatewayMCPToolImportTask(Models\DescribeCloudNativeAPIGatewayMCPToolImportTaskRequest $req) 查询批量导入MCP Tools的任务进度
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolListResponse DescribeCloudNativeAPIGatewayMCPToolList(Models\DescribeCloudNativeAPIGatewayMCPToolListRequest $req) 查询 AI 网关MCP Tool 列表
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolVersionResponse DescribeCloudNativeAPIGatewayMCPToolVersion(Models\DescribeCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolVersionListResponse DescribeCloudNativeAPIGatewayMCPToolVersionList(Models\DescribeCloudNativeAPIGatewayMCPToolVersionListRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\DescribeCloudNativeAPIGatewayMCPToolsFromFileResponse DescribeCloudNativeAPIGatewayMCPToolsFromFile(Models\DescribeCloudNativeAPIGatewayMCPToolsFromFileRequest $req) 从OpenAPI文件中解析出可导入的MCP tools
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyResponse DescribeCloudNativeAPIGatewaySecretKey(Models\DescribeCloudNativeAPIGatewaySecretKeyRequest $req) 查询密钥详情（SecretValue 字段会被掩码）。
普通版批量新建密钥的生成来源扩展：新页面按需 IncludeCreationInfo=true，省略/false 保持原响应字段。原 GenerateType 不新增 Batch；批量记录仍为 System。
【消费者批量自动分配 API Key｜修改：可选参数及可选出参】增加可选 IncludeCreationInfo（默认 false）。仅 true 且 ResourceType=Consumer 时在原 Result 增加 CredentialGenerateType、CreationSource、BatchId 三个非必返字段；省略/false 保持旧响应。原字段、SecretValue 脱敏和单条详情结构不变。
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyListResponse DescribeCloudNativeAPIGatewaySecretKeyList(Models\DescribeCloudNativeAPIGatewaySecretKeyListRequest $req) 查询密钥列表。
普通版批量新建密钥的生成来源扩展：新页面按需 IncludeCreationInfo=true，省略/false 保持原响应字段。原 GenerateType 不新增 Batch；批量记录仍为 System。
【消费者批量自动分配 API Key｜修改：可选参数、可选出参及筛选】增加可选 IncludeCreationInfo（默认 false）。仅 true 且 ResourceType=Consumer 时在原 Result.SecretKeys[] 增加 CredentialGenerateType、CreationSource、BatchId 三个非必返字段；Result.TotalCount/SecretKeys 结构不变。Filters 新增 CredentialGenerateType、CreationSource，先过滤后计数分页，与是否返回来源字段独立；保留原 GenerateType 枚举和原分页上限。
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyValueResponse DescribeCloudNativeAPIGatewaySecretKeyValue(Models\DescribeCloudNativeAPIGatewaySecretKeyValueRequest $req) 查询密钥明文值（KMS 类型密钥不可获取）。
 * @method Models\ExportAIGWCustomGuardrailHitsResponse ExportAIGWCustomGuardrailHits(Models\ExportAIGWCustomGuardrailHitsRequest $req) 从 RuntimeEventLog 对应 CLS 主题同步导出审核记录，需先开启投递。单次最多 1000 条，可选择 csv（默认）或 json；Result.Content 是 Base64 编码文件内容，不是下载链接。Truncated=true 时可能还有更多记录，请缩小时间范围分别导出。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。
 * @method Models\ModifyAIGWCustomGuardrailPolicyResponse ModifyAIGWCustomGuardrailPolicy(Models\ModifyAIGWCustomGuardrailPolicyRequest $req) 局部修改已有策略并重新同步。省略字段保留原值，显式 false/0/[] 与省略不同；数组按整体替换，Scope 传入时替换完整范围。切换 AddressMode 时会自动清除未显式传入的另一模式地址字段；AuthType=none 会清除已有密钥并默认清空 HeaderName。请检查 Result.Success 和 FailedResources。网关需满足最低版本 3.9.6，且已安装、启用并加载 cngw-ai-custom-guardrail。创建、修改、删除要求网关处于稳定 Running 状态，升级/回滚/撤销升级期间不能修改策略。

本产品为 cngw，版本为 2023-04-18。公共参数及签名按云 API 规范配置；在 API Explorer 选择目标环境，示例正文仅为业务参数，中文诊断示例以公共参数 Language=zh-CN 为前提。响应业务字段统一位于 Response.Result，Response.RequestId 为云 API 请求 ID；HTTP 成功不代表 Result.Success=true。示例 ID、域名和鉴权值均为占位内容，须替换为实际值。

输入约束：新配置只接受 field_mapping，不再默认为 standard_v2。创建时鉴权和检测行为必须完整填写；修改为 PATCH，省略保留，显式空值不补默认值。存量 standard_v2 策略仍可查询、删除或直接停用；修改其判定配置或重新启用前需迁移到 field_mapping。条件必填由后端按完整配置校验，非法配置不写库、不下发。
 * @method Models\ModifyCloudNativeAPIGatewayAIServiceSourceResponse ModifyCloudNativeAPIGatewayAIServiceSource(Models\ModifyCloudNativeAPIGatewayAIServiceSourceRequest $req) 修改云原生网关AI服务来源
 * @method Models\ModifyCloudNativeAPIGatewayConsumerResponse ModifyCloudNativeAPIGatewayConsumer(Models\ModifyCloudNativeAPIGatewayConsumerRequest $req) 修改AI网关消费者
 * @method Models\ModifyCloudNativeAPIGatewayConsumerGroupResponse ModifyCloudNativeAPIGatewayConsumerGroup(Models\ModifyCloudNativeAPIGatewayConsumerGroupRequest $req) 修改消费者组。
 * @method Models\ModifyCloudNativeAPIGatewayLLMModelAPIResponse ModifyCloudNativeAPIGatewayLLMModelAPI(Models\ModifyCloudNativeAPIGatewayLLMModelAPIRequest $req) 修改 LLM 模型 API。
 * @method Models\ModifyCloudNativeAPIGatewayLLMModelServiceResponse ModifyCloudNativeAPIGatewayLLMModelService(Models\ModifyCloudNativeAPIGatewayLLMModelServiceRequest $req) 更新指定网关实例内的 LLM 模型服务，可调整该服务向上游请求压缩响应的协商方式。
 * @method Models\ModifyCloudNativeAPIGatewayMCPRouteResponse ModifyCloudNativeAPIGatewayMCPRoute(Models\ModifyCloudNativeAPIGatewayMCPRouteRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\ModifyCloudNativeAPIGatewayMCPRouteStatusResponse ModifyCloudNativeAPIGatewayMCPRouteStatus(Models\ModifyCloudNativeAPIGatewayMCPRouteStatusRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerResponse ModifyCloudNativeAPIGatewayMCPServer(Models\ModifyCloudNativeAPIGatewayMCPServerRequest $req) 修改MCP服务配置
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerACLResponse ModifyCloudNativeAPIGatewayMCPServerACL(Models\ModifyCloudNativeAPIGatewayMCPServerACLRequest $req) 修改 MCP Server ACL
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerAuthResponse ModifyCloudNativeAPIGatewayMCPServerAuth(Models\ModifyCloudNativeAPIGatewayMCPServerAuthRequest $req) 修改 MCP Server 的认证配置
 * @method Models\ModifyCloudNativeAPIGatewayMCPServerStatusResponse ModifyCloudNativeAPIGatewayMCPServerStatus(Models\ModifyCloudNativeAPIGatewayMCPServerStatusRequest $req) 创建AI 网关MCP Server
 * @method Models\ModifyCloudNativeAPIGatewayMCPToolResponse ModifyCloudNativeAPIGatewayMCPTool(Models\ModifyCloudNativeAPIGatewayMCPToolRequest $req) 修改AI网关MCP Tool
 * @method Models\ModifyCloudNativeAPIGatewayMCPToolACLResponse ModifyCloudNativeAPIGatewayMCPToolACL(Models\ModifyCloudNativeAPIGatewayMCPToolACLRequest $req) 修改 MCP Server Tool ACL
 * @method Models\ModifyCloudNativeAPIGatewayMCPToolStatusResponse ModifyCloudNativeAPIGatewayMCPToolStatus(Models\ModifyCloudNativeAPIGatewayMCPToolStatusRequest $req) AI网关修改MCP Tool上下线状态
 * @method Models\ModifyCloudNativeAPIGatewaySecretKeyResponse ModifyCloudNativeAPIGatewaySecretKey(Models\ModifyCloudNativeAPIGatewaySecretKeyRequest $req) 修改AI网关密钥
【消费者批量自动分配 API Key｜修改：新增未完成批次保护，字段不变】目标密钥属于批次且对应项处于 Pending/Running/Reconciling 时，编辑返回 OperationDenied.BatchKeyPending，提示等待批次完成。其他情况继续原编辑校验和行为；原 GatewayId/SecretKeyId/Name/Description 不变，成功不新增业务 Result。
 * @method Models\RemoveCloudNativeAPIGatewayConsumerGroupAuthResponse RemoveCloudNativeAPIGatewayConsumerGroupAuth(Models\RemoveCloudNativeAPIGatewayConsumerGroupAuthRequest $req) 从资源（模型 API / MCP Server）移除消费者组授权。
 * @method Models\RemoveCloudNativeAPIGatewayConsumerInGroupResponse RemoveCloudNativeAPIGatewayConsumerInGroup(Models\RemoveCloudNativeAPIGatewayConsumerInGroupRequest $req) 将消费者从消费者组移除。
 * @method Models\RollbackCloudNativeAPIGatewayMCPToolVersionResponse RollbackCloudNativeAPIGatewayMCPToolVersion(Models\RollbackCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\UnbindCloudNativeAPIGatewaySecretKeyResponse UnbindCloudNativeAPIGatewaySecretKey(Models\UnbindCloudNativeAPIGatewaySecretKeyRequest $req) 解绑密钥
【消费者批量自动分配 API Key｜修改：新增未完成批次保护，字段不变】目标密钥属于批次且对应项处于 Pending/Running/Reconciling 时，解绑返回 OperationDenied.BatchKeyPending。完成后继续原解绑；原 GatewayId/SecretKeyId/ResourceType/ResourceIds 不变，成功不新增业务 Result。解绑不改写批次历史成功，后续批次明文读取返回逐项 OperationDenied.BindingChanged。
 * @method Models\UpdateCloudNativeAPIGatewayMCPToolsResponse UpdateCloudNativeAPIGatewayMCPTools(Models\UpdateCloudNativeAPIGatewayMCPToolsRequest $req) 批量导入从OpenAPI文件中解析的MCP Tools
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
