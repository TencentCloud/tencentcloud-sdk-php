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

namespace TencentCloud\Workbuddyenterprise\V20260709;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Workbuddyenterprise\V20260709\Models as Models;

/**
 * @method Models\BindExternalAgentResponse BindExternalAgent(Models\BindExternalAgentRequest $req) 把外部 agent 绑定到某 managed agent
 * @method Models\CreateAgentResponse CreateAgent(Models\CreateAgentRequest $req) 创建一个新的 Managed Agent，同时自动生成 default 版本。配置采用 Manifest v2.0。
 * @method Models\CreateAgentSessionResponse CreateAgentSession(Models\CreateAgentSessionRequest $req) 为指定 Agent 创建新的会话，返回会话 ID 和聊天凭证。
 * @method Models\CreateAgentVersionResponse CreateAgentVersion(Models\CreateAgentVersionRequest $req) 完全新建版本：外部准备完整 Manifest 后直接传入，不引用任何已有版本。
 * @method Models\CreateAgentVersionFromSourceResponse CreateAgentVersionFromSource(Models\CreateAgentVersionFromSourceRequest $req) 基于源版本创建新版本：Manifest / Model / Description 传入即整体覆盖，未传则沿用源版本。
 * @method Models\DeleteAgentResponse DeleteAgent(Models\DeleteAgentRequest $req) 删除指定的 Agent 及其所有版本。删除后不可恢复。
 * @method Models\DescribeAgentResponse DescribeAgent(Models\DescribeAgentRequest $req) 查询单个 Agent 的详细信息，包括基础配置和路由配置。
 * @method Models\DescribeAgentListResponse DescribeAgentList(Models\DescribeAgentListRequest $req) 查询当前企业的 Agent 列表，支持分页、过滤和排序。
 * @method Models\DescribeAgentSessionResponse DescribeAgentSession(Models\DescribeAgentSessionRequest $req) 查询单个 Agent 会话详情：返回会话基础信息（会话名称 / Agent / 版本 / 状态 / 来源 / 发起人）与可用的聊天接入点列表（EndpointSet）。数据面鉴权走 DescribeUserAccessToken 的用户级访问令牌。
 * @method Models\DescribeAgentSessionListResponse DescribeAgentSessionList(Models\DescribeAgentSessionListRequest $req) 分页查询企业下所有会话（跨 Agent）：支持按 SessionId / Status / AgentId / UserId 过滤，按创建 / 更新时间排序，返回会话摘要列表。
 * @method Models\DescribeAgentVersionResponse DescribeAgentVersion(Models\DescribeAgentVersionRequest $req) 查询单个版本的详细信息，包括 Manifest、Model、状态等。
 * @method Models\DescribeAgentVersionListResponse DescribeAgentVersionList(Models\DescribeAgentVersionListRequest $req) 查询指定 Agent 下的版本列表，支持分页和版本类型过滤。
 * @method Models\DescribeBuiltinModelListResponse DescribeBuiltinModelList(Models\DescribeBuiltinModelListRequest $req) 查询当前企业的内置模型列表，支持分页与过滤。内置模型由平台预置，企业可按需启用/停用。过滤字段支持：ModelId（模型ID，模糊）、Name（模型名称，模糊）、Vendor（供应商，模糊）、Status（状态，精确：enabled/disabled）。
 * @method Models\DescribeConnectorListResponse DescribeConnectorList(Models\DescribeConnectorListRequest $req) 查询指定企业下的连接器列表（PageNumber/PageSize 分页，支持名称模糊与状态、来源过滤）。
 * @method Models\DescribeExpertListResponse DescribeExpertList(Models\DescribeExpertListRequest $req) 分页查询 Expert 列表，支持关键词、分类、发布状态过滤。
 * @method Models\DescribeExternalAgentResponse DescribeExternalAgent(Models\DescribeExternalAgentRequest $req) 查询某 managed agent 绑定的单个外部 agent 详情
 * @method Models\DescribeExternalAgentListResponse DescribeExternalAgentList(Models\DescribeExternalAgentListRequest $req) 列某 managed agent 绑定的外部 agent 列表
 * @method Models\DescribeMessageEventListResponse DescribeMessageEventList(Models\DescribeMessageEventListRequest $req) 按 Session 分页查询消息事件
 * @method Models\DescribeSkillListResponse DescribeSkillList(Models\DescribeSkillListRequest $req) 分页查询 Skill 列表，支持关键词、分类、发布状态过滤。
 * @method Models\MigrateAgentSessionResponse MigrateAgentSession(Models\MigrateAgentSessionRequest $req) 将指定会话迁移到目标版本。SessionID / RuntimeID 保持不变，通过 AgentOS UpdateSession 在原沙箱上更新 manifest 到新版本；AgentId 必须与原 Session 一致（禁止跨 Agent 迁移）；ChatToken 复用旧值不轮转。
 * @method Models\ModifyAgentResponse ModifyAgent(Models\ModifyAgentRequest $req) 修改 Agent 基础信息（名称、描述、头像）。AgentName / Description / AvatarUrl 均为可选，仅传递需要更新的字段。
 * @method Models\ModifyAgentA2AConfigResponse ModifyAgentA2AConfig(Models\ModifyAgentA2AConfigRequest $req) 修改 Agent 的 A2A 配置。A2AEnabled 是 Agent 级唯一开关，与具体版本和流量分发策略无关。
 * @method Models\ModifyAgentRoutingResponse ModifyAgentRouting(Models\ModifyAgentRoutingRequest $req) 覆盖式写入 Agent 路由配置（版本权重）。所有 VersionId 必须属于同一 Agent 且未弃用；允许空数组（下线 Agent 对外流量）；非空时权重总和须等于 1。
 * @method Models\ModifyAgentVersionResponse ModifyAgentVersion(Models\ModifyAgentVersionRequest $req) 原地更新 default 或 test 版本的 Manifest / Model / Description / SandboxTemplateId / ConnectorSet（prod 版本冻结不可修改），五个可选字段至少提供一个。ConnectorSet 为全量覆盖语义：缺省表示不改动连接器绑定；空数组表示解绑全部连接器。
 * @method Models\UnbindExternalAgentResponse UnbindExternalAgent(Models\UnbindExternalAgentRequest $req) 解除外部 agent 与 managed agent 的绑定
 */

class WorkbuddyenterpriseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "workbuddyenterprise.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "workbuddyenterprise";

    /**
     * @var string
     */
    protected $version = "2026-07-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("workbuddyenterprise")."\\"."V20260709\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
