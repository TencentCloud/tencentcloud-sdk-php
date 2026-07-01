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

namespace TencentCloud\Adp\V20260520;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Adp\V20260520\Models as Models;

/**
 * @method Models\CopyAgentFromAppResponse CopyAgentFromApp(Models\CopyAgentFromAppRequest $req) 创建Agent
 * @method Models\CopyAppResponse CopyApp(Models\CopyAppRequest $req) 复制应用
 * @method Models\CreateAgentResponse CreateAgent(Models\CreateAgentRequest $req) 创建Agent
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) 创建应用
 * @method Models\CreateConversationResponse CreateConversation(Models\CreateConversationRequest $req) 新建会话
 * @method Models\CreateReleaseResponse CreateRelease(Models\CreateReleaseRequest $req) 新增发布任务
 * @method Models\CreateSpaceResponse CreateSpace(Models\CreateSpaceRequest $req) 创建空间
 * @method Models\CreateVariableResponse CreateVariable(Models\CreateVariableRequest $req) 创建参数变量
 * @method Models\CreateWebSocketTokenResponse CreateWebSocketToken(Models\CreateWebSocketTokenRequest $req) 创建 WebSocket Token
 * @method Models\CreateWorkspaceCredentialResponse CreateWorkspaceCredential(Models\CreateWorkspaceCredentialRequest $req) 创建工作空间凭证
 * @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) 删除应用
 * @method Models\DeleteConversationResponse DeleteConversation(Models\DeleteConversationRequest $req) 删除会话
 * @method Models\DeleteSpaceResponse DeleteSpace(Models\DeleteSpaceRequest $req) 删除空间
 * @method Models\DeleteVariableResponse DeleteVariable(Models\DeleteVariableRequest $req) 删除参数变量
 * @method Models\DescribeAgentDetailResponse DescribeAgentDetail(Models\DescribeAgentDetailRequest $req) 查询 Agent 详情
 * @method Models\DescribeAgentReleasePreviewListResponse DescribeAgentReleasePreviewList(Models\DescribeAgentReleasePreviewListRequest $req) 获取应用下 Agent 的发布预览列表
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) 获取应用信息
 * @method Models\DescribeAppSummaryListResponse DescribeAppSummaryList(Models\DescribeAppSummaryListRequest $req) 获取应用摘要列表
 * @method Models\DescribeConversationResponse DescribeConversation(Models\DescribeConversationRequest $req) 查看会话信息
 * @method Models\DescribeConversationListResponse DescribeConversationList(Models\DescribeConversationListRequest $req) 获取会话列表
 * @method Models\DescribeConversationMessageListResponse DescribeConversationMessageList(Models\DescribeConversationMessageListRequest $req) 获取会话历史消息
 * @method Models\DescribeLatestReleaseResponse DescribeLatestRelease(Models\DescribeLatestReleaseRequest $req) 拉取最新发布信息(包含发布时间、状态、渠道)
 * @method Models\DescribeModelListResponse DescribeModelList(Models\DescribeModelListRequest $req) 查询模型列表
 * @method Models\DescribePluginResponse DescribePlugin(Models\DescribePluginRequest $req) 获取插件详情
 * @method Models\DescribePluginSummaryListResponse DescribePluginSummaryList(Models\DescribePluginSummaryListRequest $req) 获取插件列表
 * @method Models\DescribeReleaseListResponse DescribeReleaseList(Models\DescribeReleaseListRequest $req) 发布记录列表
 * @method Models\DescribeReleaseSummaryResponse DescribeReleaseSummary(Models\DescribeReleaseSummaryRequest $req) 查询发布任务
 * @method Models\DescribeSkillCategoryListResponse DescribeSkillCategoryList(Models\DescribeSkillCategoryListRequest $req) 查询 Skill 分类列表
 * @method Models\DescribeSkillSummaryListResponse DescribeSkillSummaryList(Models\DescribeSkillSummaryListRequest $req) 查询 Skill 列表
 * @method Models\DescribeSpaceListResponse DescribeSpaceList(Models\DescribeSpaceListRequest $req) 获取空间列表
 * @method Models\DescribeSystemVariableListResponse DescribeSystemVariableList(Models\DescribeSystemVariableListRequest $req) 获取系统变量
 * @method Models\DescribeVariableResponse DescribeVariable(Models\DescribeVariableRequest $req) 获取参数变量
 * @method Models\DescribeVariableListResponse DescribeVariableList(Models\DescribeVariableListRequest $req) 获取参数变量列表
 * @method Models\ModifyAgentResponse ModifyAgent(Models\ModifyAgentRequest $req) 修改Agent配置信息
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) 修改应用
 * @method Models\ModifyConversationResponse ModifyConversation(Models\ModifyConversationRequest $req) 修改会话信息
 * @method Models\ModifySpaceResponse ModifySpace(Models\ModifySpaceRequest $req) 编辑空间
 * @method Models\ModifyVariableResponse ModifyVariable(Models\ModifyVariableRequest $req) 更新参数变量
 * @method Models\ResetConversationResponse ResetConversation(Models\ResetConversationRequest $req) 重置会话
 * @method Models\RetryReleaseResponse RetryRelease(Models\RetryReleaseRequest $req) 重试发布(发布暂停之后再次重新发布)
 * @method Models\RollbackReleaseResponse RollbackRelease(Models\RollbackReleaseRequest $req) 回滚发布
 */

class AdpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "adp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "adp";

    /**
     * @var string
     */
    protected $version = "2026-05-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("adp")."\\"."V20260520\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
