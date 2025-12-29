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
namespace TencentCloud\Cloudmate\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloudMateAgent请求参数结构体
 *
 * @method string getWorkspaceId() 获取空间 ID
 * @method void setWorkspaceId(string $WorkspaceId) 设置空间 ID
 * @method string getMessage() 获取用户提问内容
 * @method void setMessage(string $Message) 设置用户提问内容
 * @method string getScenarioId() 获取场景 ID
 * @method void setScenarioId(string $ScenarioId) 设置场景 ID
 * @method string getSessionId() 获取会话 ID

- 填写上一次接口调用返回的会话 ID（SessionId），可在原有会话基础上继续对话
- 未填写会话 ID 时，创建新会话
 * @method void setSessionId(string $SessionId) 设置会话 ID

- 填写上一次接口调用返回的会话 ID（SessionId），可在原有会话基础上继续对话
- 未填写会话 ID 时，创建新会话
 * @method boolean getStreaming() 获取是否使用流式响应，默认为 false，不启用流式响应
 * @method void setStreaming(boolean $Streaming) 设置是否使用流式响应，默认为 false，不启用流式响应
 */
class CloudMateAgentRequest extends AbstractModel
{
    /**
     * @var string 空间 ID
     */
    public $WorkspaceId;

    /**
     * @var string 用户提问内容
     */
    public $Message;

    /**
     * @var string 场景 ID
     */
    public $ScenarioId;

    /**
     * @var string 会话 ID

- 填写上一次接口调用返回的会话 ID（SessionId），可在原有会话基础上继续对话
- 未填写会话 ID 时，创建新会话
     */
    public $SessionId;

    /**
     * @var boolean 是否使用流式响应，默认为 false，不启用流式响应
     */
    public $Streaming;

    /**
     * @param string $WorkspaceId 空间 ID
     * @param string $Message 用户提问内容
     * @param string $ScenarioId 场景 ID
     * @param string $SessionId 会话 ID

- 填写上一次接口调用返回的会话 ID（SessionId），可在原有会话基础上继续对话
- 未填写会话 ID 时，创建新会话
     * @param boolean $Streaming 是否使用流式响应，默认为 false，不启用流式响应
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Streaming",$param) and $param["Streaming"] !== null) {
            $this->Streaming = $param["Streaming"];
        }
    }
}
