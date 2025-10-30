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
namespace TencentCloud\Vms\V20200902\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音验证码发送状态
 *
 * @method string getCallId() 获取标识本次发送 ID，标识一次下发记录。
 * @method void setCallId(string $CallId) 设置标识本次发送 ID，标识一次下发记录。
 * @method string getSessionContext() 获取用户的 session 内容，腾讯 server 回包中会原样返回。
 * @method void setSessionContext(string $SessionContext) 设置用户的 session 内容，腾讯 server 回包中会原样返回。
 */
class SendStatus extends AbstractModel
{
    /**
     * @var string 标识本次发送 ID，标识一次下发记录。
     */
    public $CallId;

    /**
     * @var string 用户的 session 内容，腾讯 server 回包中会原样返回。
     */
    public $SessionContext;

    /**
     * @param string $CallId 标识本次发送 ID，标识一次下发记录。
     * @param string $SessionContext 用户的 session 内容，腾讯 server 回包中会原样返回。
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
        if (array_key_exists("CallId",$param) and $param["CallId"] !== null) {
            $this->CallId = $param["CallId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
