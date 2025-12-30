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
 * CloudMateAgent返回参数结构体
 *
 * @method string getSessionId() 获取会话ID，用于后续继续对话
 * @method void setSessionId(string $SessionId) 设置会话ID，用于后续继续对话
 * @method integer getTimestamp() 获取Unix 时间戳
 * @method void setTimestamp(integer $Timestamp) 设置Unix 时间戳
 * @method ChatContent getContent() 获取诊断内容
 * @method void setContent(ChatContent $Content) 设置诊断内容
 * @method boolean getPartial() 获取是否为部分内容（流式场景）
 * @method void setPartial(boolean $Partial) 设置是否为部分内容（流式场景）
 * @method boolean getTurnComplete() 获取本轮对话是否完成
 * @method void setTurnComplete(boolean $TurnComplete) 设置本轮对话是否完成
 * @method string getErrorCode() 获取错误代码，无错误时无该字段
 * @method void setErrorCode(string $ErrorCode) 设置错误代码，无错误时无该字段
 * @method string getErrorMessage() 获取错误详细信息，无错误时无该字段
 * @method void setErrorMessage(string $ErrorMessage) 设置错误详细信息，无错误时无该字段
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class CloudMateAgentResponse extends AbstractModel
{
    /**
     * @var string 会话ID，用于后续继续对话
     */
    public $SessionId;

    /**
     * @var integer Unix 时间戳
     */
    public $Timestamp;

    /**
     * @var ChatContent 诊断内容
     */
    public $Content;

    /**
     * @var boolean 是否为部分内容（流式场景）
     */
    public $Partial;

    /**
     * @var boolean 本轮对话是否完成
     */
    public $TurnComplete;

    /**
     * @var string 错误代码，无错误时无该字段
     */
    public $ErrorCode;

    /**
     * @var string 错误详细信息，无错误时无该字段
     */
    public $ErrorMessage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param string $SessionId 会话ID，用于后续继续对话
     * @param integer $Timestamp Unix 时间戳
     * @param ChatContent $Content 诊断内容
     * @param boolean $Partial 是否为部分内容（流式场景）
     * @param boolean $TurnComplete 本轮对话是否完成
     * @param string $ErrorCode 错误代码，无错误时无该字段
     * @param string $ErrorMessage 错误详细信息，无错误时无该字段
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ChatContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Partial",$param) and $param["Partial"] !== null) {
            $this->Partial = $param["Partial"];
        }

        if (array_key_exists("TurnComplete",$param) and $param["TurnComplete"] !== null) {
            $this->TurnComplete = $param["TurnComplete"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
