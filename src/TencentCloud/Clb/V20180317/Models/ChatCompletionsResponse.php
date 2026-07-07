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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions返回参数结构体
 *
 * @method string getChatResponseMessage() 获取<p>聊天的返回信息</p>
 * @method void setChatResponseMessage(string $ChatResponseMessage) 设置<p>聊天的返回信息</p>
 * @method string getErrorInChat() 获取<p>聊天请求发送过程中的失败信息</p>
 * @method void setErrorInChat(string $ErrorInChat) 设置<p>聊天请求发送过程中的失败信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ChatCompletionsResponse extends AbstractModel
{
    /**
     * @var string <p>聊天的返回信息</p>
     */
    public $ChatResponseMessage;

    /**
     * @var string <p>聊天请求发送过程中的失败信息</p>
     */
    public $ErrorInChat;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ChatResponseMessage <p>聊天的返回信息</p>
     * @param string $ErrorInChat <p>聊天请求发送过程中的失败信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ChatResponseMessage",$param) and $param["ChatResponseMessage"] !== null) {
            $this->ChatResponseMessage = $param["ChatResponseMessage"];
        }

        if (array_key_exists("ErrorInChat",$param) and $param["ErrorInChat"] !== null) {
            $this->ErrorInChat = $param["ErrorInChat"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
