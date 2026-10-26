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
【消费者批量自动分配 API Key｜修改：内部并发/配额逻辑，字段不变】ResourceType=Consumer 时与批量预留共用实例写锁，单消费者绑定配额使用当前锁定读。仍按原 SecretKeyId、ResourceIds 绑定；消费者目标最多一个，单密钥不能同时绑定多个消费者，成功仍返回 Result=true。此入口不新增 OperationDenied.BatchKeyPending；该错误属于下述四个变更入口的保护逻辑。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
 * @method Models\CheckCloudNativeAPIGatewayMCPRouteMatchResponse CheckCloudNativeAPIGatewayMCPRouteMatch(Models\CheckCloudNativeAPIGatewayMCPRouteMatchRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\CheckCloudNativeAPIGatewayMCPToolVersionExistResponse CheckCloudNativeAPIGatewayMCPToolVersionExist(Models\CheckCloudNativeAPIGatewayMCPToolVersionExistRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\CompareCloudNativeAPIGatewayMCPToolVersionResponse CompareCloudNativeAPIGatewayMCPToolVersion(Models\CompareCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\CreateCloudNativeAPIGatewayAIServiceSourceResponse CreateCloudNativeAPIGatewayAIServiceSource(Models\CreateCloudNativeAPIGatewayAIServiceSourceRequest $req) 创建云原生网关AI服务来源
 * @method Models\CreateCloudNativeAPIGatewayConsumerResponse CreateCloudNativeAPIGatewayConsumer(Models\CreateCloudNativeAPIGatewayConsumerRequest $req) 创建AI网关消费者。
 * @method Models\CreateCloudNativeAPIGatewayConsumerGroupResponse CreateCloudNativeAPIGatewayConsumerGroup(Models\CreateCloudNativeAPIGatewayConsumerGroupRequest $req) 创建AI 网关消费者组
 * @method Models\CreateCloudNativeAPIGatewayLLMModelAPIResponse CreateCloudNativeAPIGatewayLLMModelAPI(Models\CreateCloudNativeAPIGatewayLLMModelAPIRequest $req) 创建 LLM 模型 API。
 * @method Models\CreateCloudNativeAPIGatewayLLMModelServiceResponse CreateCloudNativeAPIGatewayLLMModelService(Models\CreateCloudNativeAPIGatewayLLMModelServiceRequest $req) 创建 LLM 模型服务。同一网关下 Name 唯一。
 * @method Models\CreateCloudNativeAPIGatewayMCPRouteResponse CreateCloudNativeAPIGatewayMCPRoute(Models\CreateCloudNativeAPIGatewayMCPRouteRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\CreateCloudNativeAPIGatewayMCPServerResponse CreateCloudNativeAPIGatewayMCPServer(Models\CreateCloudNativeAPIGatewayMCPServerRequest $req) 创建AI网关MCP Server
 * @method Models\CreateCloudNativeAPIGatewayMCPToolResponse CreateCloudNativeAPIGatewayMCPTool(Models\CreateCloudNativeAPIGatewayMCPToolRequest $req) 创建AI网关MCP Tool
 * @method Models\CreateCloudNativeAPIGatewaySecretKeyResponse CreateCloudNativeAPIGatewaySecretKey(Models\CreateCloudNativeAPIGatewaySecretKeyRequest $req) 创建消费者密钥。
【消费者批量自动分配 API Key｜修改：内部并发/配额逻辑，字段不变】消费者密钥单条创建在事务中使用与批量预留相同的实例写锁，配额检查使用当前锁定读，避免单条与批量并发绕过配额。仍是单条创建；原 GenerateType、请求字段、既有配额错误语义及 Result.Success/ID 不变，不增加 ConsumerIds/ClientToken。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
 * @method Models\DeleteCloudNativeAPIGatewayAIServiceSourceResponse DeleteCloudNativeAPIGatewayAIServiceSource(Models\DeleteCloudNativeAPIGatewayAIServiceSourceRequest $req) 删除云原生网关AI服务来源
 * @method Models\DeleteCloudNativeAPIGatewayConsumerResponse DeleteCloudNativeAPIGatewayConsumer(Models\DeleteCloudNativeAPIGatewayConsumerRequest $req) 删除AI 网关消费者（被绑定到消费者组/密钥时需先解绑）。
 * @method Models\DeleteCloudNativeAPIGatewayConsumerGroupResponse DeleteCloudNativeAPIGatewayConsumerGroup(Models\DeleteCloudNativeAPIGatewayConsumerGroupRequest $req) 删除AI网关消费者组

同步组仅在 soft_deleted 状态且全部依赖已清理后允许手动硬删除；ConsumerGroupId 使用组织 UUID。存在配额规则时须先删除规则，单纯停用不能解除依赖。硬删除时重新校验，依赖变化可能导致删除失败。
 * @method Models\DeleteCloudNativeAPIGatewayLLMModelAPIResponse DeleteCloudNativeAPIGatewayLLMModelAPI(Models\DeleteCloudNativeAPIGatewayLLMModelAPIRequest $req) 删除 LLM 模型 API。
 * @method Models\DeleteCloudNativeAPIGatewayLLMModelServiceResponse DeleteCloudNativeAPIGatewayLLMModelService(Models\DeleteCloudNativeAPIGatewayLLMModelServiceRequest $req) 删除 LLM 模型服务（被模型 API 绑定时需先解绑）。
 * @method Models\DeleteCloudNativeAPIGatewayMCPRouteResponse DeleteCloudNativeAPIGatewayMCPRoute(Models\DeleteCloudNativeAPIGatewayMCPRouteRequest $req) 上传插件前置操作，获取COS相关信息
 * @method Models\DeleteCloudNativeAPIGatewayMCPServerResponse DeleteCloudNativeAPIGatewayMCPServer(Models\DeleteCloudNativeAPIGatewayMCPServerRequest $req) 删除AI网关MCP服务
 * @method Models\DeleteCloudNativeAPIGatewayMCPToolResponse DeleteCloudNativeAPIGatewayMCPTool(Models\DeleteCloudNativeAPIGatewayMCPToolRequest $req) 删除AI网关MCP Tool
 * @method Models\DeleteCloudNativeAPIGatewayMCPToolVersionResponse DeleteCloudNativeAPIGatewayMCPToolVersion(Models\DeleteCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\DeleteCloudNativeAPIGatewaySecretKeyResponse DeleteCloudNativeAPIGatewaySecretKey(Models\DeleteCloudNativeAPIGatewaySecretKeyRequest $req) 删除消费者密钥（被绑定时需先解绑）。
【消费者批量自动分配 API Key｜修改：新增未完成批次保护，字段不变】目标密钥属于批次且对应项处于 Pending/Running/Reconciling 时，删除返回 OperationDenied.BatchKeyPending。完成后仍执行原绑定/依赖删除检查；原 GatewayId/SecretKeyId 不变，成功不新增业务 Result。删除已生成密钥不改写批次历史成功，后续批次明文读取返回逐项 ResourceNotFound.SecretKey。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
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
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelAPIResponse DescribeCloudNativeAPIGatewayLLMModelAPI(Models\DescribeCloudNativeAPIGatewayLLMModelAPIRequest $req) 查询单个 LLM 模型 API 详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelAPIsResponse DescribeCloudNativeAPIGatewayLLMModelAPIs(Models\DescribeCloudNativeAPIGatewayLLMModelAPIsRequest $req) 查询指定网关实例下的所有 LLM 模型 API 列表。支持按名称关键词模糊搜索、按过滤器筛选，以及分页查询。用于绑定场景时，可通过 ConsumerGroupId 和 UseToBind 参数筛选可绑定的模型 API。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelServiceResponse DescribeCloudNativeAPIGatewayLLMModelService(Models\DescribeCloudNativeAPIGatewayLLMModelServiceRequest $req) 查询单个 LLM 模型服务详情。
 * @method Models\DescribeCloudNativeAPIGatewayLLMModelServicesResponse DescribeCloudNativeAPIGatewayLLMModelServices(Models\DescribeCloudNativeAPIGatewayLLMModelServicesRequest $req) 查询 LLM 模型服务列表。
 * @method Models\DescribeCloudNativeAPIGatewayLLMTokenUsageListResponse DescribeCloudNativeAPIGatewayLLMTokenUsageList(Models\DescribeCloudNativeAPIGatewayLLMTokenUsageListRequest $req) 查询 AI 网关Token 消耗统计（消费者消费金额数据）
 * @method Models\DescribeCloudNativeAPIGatewayLLMTokenUsageStatisticsResponse DescribeCloudNativeAPIGatewayLLMTokenUsageStatistics(Models\DescribeCloudNativeAPIGatewayLLMTokenUsageStatisticsRequest $req) 查询 AI 网关Token 消耗统计汇总含（消费者消费金额数据）
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
普通版批量新建密钥的生成来源扩展：新页面按需 IncludeCreationInfo=true，省略/false 保持原响应字段。原 GenerateType 不新增 Batch；批量记录仍为 System。协议：https://iwiki.woa.com/p/4042678235。
【消费者批量自动分配 API Key｜修改：可选参数及可选出参】增加可选 IncludeCreationInfo（默认 false）。仅 true 且 ResourceType=Consumer 时在原 Result 增加 CredentialGenerateType、CreationSource、BatchId 三个非必返字段；省略/false 保持旧响应。原字段、SecretValue 脱敏和单条详情结构不变。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyListResponse DescribeCloudNativeAPIGatewaySecretKeyList(Models\DescribeCloudNativeAPIGatewaySecretKeyListRequest $req) 查询密钥列表。
普通版批量新建密钥的生成来源扩展：新页面按需 IncludeCreationInfo=true，省略/false 保持原响应字段。原 GenerateType 不新增 Batch；批量记录仍为 System。协议：https://iwiki.woa.com/p/4042678235。
【消费者批量自动分配 API Key｜修改：可选参数、可选出参及筛选】增加可选 IncludeCreationInfo（默认 false）。仅 true 且 ResourceType=Consumer 时在原 Result.SecretKeys[] 增加 CredentialGenerateType、CreationSource、BatchId 三个非必返字段；Result.TotalCount/SecretKeys 结构不变。Filters 新增 CredentialGenerateType、CreationSource，先过滤后计数分页，与是否返回来源字段独立；保留原 GenerateType 枚举和原分页上限。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
 * @method Models\DescribeCloudNativeAPIGatewaySecretKeyValueResponse DescribeCloudNativeAPIGatewaySecretKeyValue(Models\DescribeCloudNativeAPIGatewaySecretKeyValueRequest $req) 查询密钥明文值（KMS 类型密钥不可获取）。
 * @method Models\ModifyCloudNativeAPIGatewayAIServiceSourceResponse ModifyCloudNativeAPIGatewayAIServiceSource(Models\ModifyCloudNativeAPIGatewayAIServiceSourceRequest $req) 修改云原生网关AI服务来源
 * @method Models\ModifyCloudNativeAPIGatewayConsumerResponse ModifyCloudNativeAPIGatewayConsumer(Models\ModifyCloudNativeAPIGatewayConsumerRequest $req) 修改AI网关消费者
 * @method Models\ModifyCloudNativeAPIGatewayConsumerGroupResponse ModifyCloudNativeAPIGatewayConsumerGroup(Models\ModifyCloudNativeAPIGatewayConsumerGroupRequest $req) 修改消费者组。
 * @method Models\ModifyCloudNativeAPIGatewayLLMModelAPIResponse ModifyCloudNativeAPIGatewayLLMModelAPI(Models\ModifyCloudNativeAPIGatewayLLMModelAPIRequest $req) 修改 LLM 模型 API。
 * @method Models\ModifyCloudNativeAPIGatewayLLMModelServiceResponse ModifyCloudNativeAPIGatewayLLMModelService(Models\ModifyCloudNativeAPIGatewayLLMModelServiceRequest $req) 修改 LLM 模型服务。
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
【消费者批量自动分配 API Key｜修改：新增未完成批次保护，字段不变】目标密钥属于批次且对应项处于 Pending/Running/Reconciling 时，编辑返回 OperationDenied.BatchKeyPending，提示等待批次完成。其他情况继续原编辑校验和行为；原 GatewayId/SecretKeyId/Name/Description 不变，成功不新增业务 Result。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
 * @method Models\RemoveCloudNativeAPIGatewayConsumerGroupAuthResponse RemoveCloudNativeAPIGatewayConsumerGroupAuth(Models\RemoveCloudNativeAPIGatewayConsumerGroupAuthRequest $req) 从资源（模型 API / MCP Server）移除消费者组授权。
 * @method Models\RemoveCloudNativeAPIGatewayConsumerInGroupResponse RemoveCloudNativeAPIGatewayConsumerInGroup(Models\RemoveCloudNativeAPIGatewayConsumerInGroupRequest $req) 将消费者从消费者组移除。
 * @method Models\RollbackCloudNativeAPIGatewayMCPToolVersionResponse RollbackCloudNativeAPIGatewayMCPToolVersion(Models\RollbackCloudNativeAPIGatewayMCPToolVersionRequest $req) 修改云原生智能网关MCP Tool
 * @method Models\UnbindCloudNativeAPIGatewaySecretKeyResponse UnbindCloudNativeAPIGatewaySecretKey(Models\UnbindCloudNativeAPIGatewaySecretKeyRequest $req) 解绑密钥
【消费者批量自动分配 API Key｜修改：新增未完成批次保护，字段不变】目标密钥属于批次且对应项处于 Pending/Running/Reconciling 时，解绑返回 OperationDenied.BatchKeyPending。完成后继续原解绑；原 GatewayId/SecretKeyId/ResourceType/ResourceIds 不变，成功不新增业务 Result。解绑不改写批次历史成功，后续批次明文读取返回逐项 OperationDenied.BindingChanged。 完整接口清单与逐项说明：https://iwiki.woa.com/p/4042678235（第 2、2.4 节）。
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
