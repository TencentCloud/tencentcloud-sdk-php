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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallDeviceRRPCSync返回参数结构体
 *
 * @method string getClientToken() 获取<p>平台为本次调用分配的关联 token（v2{instanceId}::{reqId} 形式）</p>
 * @method void setClientToken(string $ClientToken) 设置<p>平台为本次调用分配的关联 token（v2{instanceId}::{reqId} 形式）</p>
 * @method string getStatus() 获取<p>调用状态</p>
 * @method void setStatus(string $Status) 设置<p>调用状态</p>
 * @method integer getMessageId() 获取<p>平台分配的 messageID</p>
 * @method void setMessageId(integer $MessageId) 设置<p>平台分配的 messageID</p>
 * @method string getPayloadBase64() 获取<p>设备回包原始字节的 base64 编码（仅 Status=Replied 有值）</p>
 * @method void setPayloadBase64(string $PayloadBase64) 设置<p>设备回包原始字节的 base64 编码（仅 Status=Replied 有值）</p>
 * @method string getReplyTopic() 获取<p>实际生效的 reply topic 模板（默认模式由平台生成，自定义模式为入参原值）</p>
 * @method void setReplyTopic(string $ReplyTopic) 设置<p>实际生效的 reply topic 模板（默认模式由平台生成，自定义模式为入参原值）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CallDeviceRRPCSyncResponse extends AbstractModel
{
    /**
     * @var string <p>平台为本次调用分配的关联 token（v2{instanceId}::{reqId} 形式）</p>
     */
    public $ClientToken;

    /**
     * @var string <p>调用状态</p>
     */
    public $Status;

    /**
     * @var integer <p>平台分配的 messageID</p>
     */
    public $MessageId;

    /**
     * @var string <p>设备回包原始字节的 base64 编码（仅 Status=Replied 有值）</p>
     */
    public $PayloadBase64;

    /**
     * @var string <p>实际生效的 reply topic 模板（默认模式由平台生成，自定义模式为入参原值）</p>
     */
    public $ReplyTopic;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClientToken <p>平台为本次调用分配的关联 token（v2{instanceId}::{reqId} 形式）</p>
     * @param string $Status <p>调用状态</p>
     * @param integer $MessageId <p>平台分配的 messageID</p>
     * @param string $PayloadBase64 <p>设备回包原始字节的 base64 编码（仅 Status=Replied 有值）</p>
     * @param string $ReplyTopic <p>实际生效的 reply topic 模板（默认模式由平台生成，自定义模式为入参原值）</p>
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
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("PayloadBase64",$param) and $param["PayloadBase64"] !== null) {
            $this->PayloadBase64 = $param["PayloadBase64"];
        }

        if (array_key_exists("ReplyTopic",$param) and $param["ReplyTopic"] !== null) {
            $this->ReplyTopic = $param["ReplyTopic"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
