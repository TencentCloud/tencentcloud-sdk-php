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

namespace TencentCloud\Tdai\V20250717;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdai\V20250717\Models as Models;

/**
 * @method Models\ContinueAgentWorkResponse ContinueAgentWork(Models\ContinueAgentWorkRequest $req) 本接口（ContinueAgentWork）用于重启智能体实例的值守任务，通常在用户需要重启时使用。
 * @method Models\CreateAgentInstanceResponse CreateAgentInstance(Models\CreateAgentInstanceRequest $req) 本接口（CreateAgentInstance）用于创建一个智能体实例，通常在用户购买一个智能体实例时使用。
 * @method Models\CreateChatCompletionResponse CreateChatCompletion(Models\CreateChatCompletionRequest $req) 用于创建一次会话的SSE接口
 * @method Models\DescribeAgentDutyTaskDetailResponse DescribeAgentDutyTaskDetail(Models\DescribeAgentDutyTaskDetailRequest $req) 查询智能体值守任务详情
 * @method Models\DescribeAgentDutyTasksResponse DescribeAgentDutyTasks(Models\DescribeAgentDutyTasksRequest $req) 查询智能体值守任务列表
 * @method Models\DescribeAgentInstanceResponse DescribeAgentInstance(Models\DescribeAgentInstanceRequest $req) 本接口（DescribeAgentInstance）用于查询智能体实例详情，通常在用户查询所购买的所有智能体实例详情时使用。
 * @method Models\DescribeAgentInstancesResponse DescribeAgentInstances(Models\DescribeAgentInstancesRequest $req) 本接口（DescribeAgentInstances）用于查询智能体实例列表，通常在用户查询所购买的所有智能体列表。
 * @method Models\DescribeAgentsResponse DescribeAgents(Models\DescribeAgentsRequest $req) 本接口（DescribeAgents）用于查询智能体列表，通常在用户查询所购买的所有智能体列表。
 * @method Models\DescribeChatDetailResponse DescribeChatDetail(Models\DescribeChatDetailRequest $req) 本接口（DescribeChatDetail）用于查询对话详情，通常在用户查询会话的历史记录时使用。
 * @method Models\DescribeChatsResponse DescribeChats(Models\DescribeChatsRequest $req) 本接口（DescribeChats）用于查询对话列表，通常在用户查询会话列表时使用。
 * @method Models\DescribeReportUrlResponse DescribeReportUrl(Models\DescribeReportUrlRequest $req) 智能体报告地址生成并下载
 * @method Models\IsolateAgentInstanceResponse IsolateAgentInstance(Models\IsolateAgentInstanceRequest $req) 本接口（IsolateAgentInstance）用于隔离智能体实例，通常在用户需要隔离智能体实例时使用。
 * @method Models\ModifyAgentInstanceParametersResponse ModifyAgentInstanceParameters(Models\ModifyAgentInstanceParametersRequest $req) 本接口（ModifyAgentInstanceParameters）用于修改智能体实例的参数列表，通常在用户需要配置智能体实例时使用。
 * @method Models\ModifyChatTitleResponse ModifyChatTitle(Models\ModifyChatTitleRequest $req) 本接口（ModifyChatTitle）用于修改会话标题，通常在用户修改会话标题时使用。
 * @method Models\PauseAgentWorkResponse PauseAgentWork(Models\PauseAgentWorkRequest $req) 本接口（PauseAgentWork）用于暂停智能体实例的值守任务，通常在用户需要暂停时使用。
 * @method Models\RecoverAgentInstanceResponse RecoverAgentInstance(Models\RecoverAgentInstanceRequest $req) 本接口（RecoverAgentInstance）用于解隔离智能体实例，通常在用户需要解隔离智能体实例时使用。
 * @method Models\RemoveChatResponse RemoveChat(Models\RemoveChatRequest $req) 本接口（RemoveChat）用于删除会话，通常在用户删除会话时使用。
 * @method Models\StartAgentTaskResponse StartAgentTask(Models\StartAgentTaskRequest $req) 该接口用于启动一个智能体的任务
 * @method Models\TerminateAgentInstanceResponse TerminateAgentInstance(Models\TerminateAgentInstanceRequest $req) 本接口（TerminateAgentInstance）用于下线智能体实例，通常在用户需要下线智能体实例时使用。
 */

class TdaiClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdai.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdai";

    /**
     * @var string
     */
    protected $version = "2025-07-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdai")."\\"."V20250717\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
