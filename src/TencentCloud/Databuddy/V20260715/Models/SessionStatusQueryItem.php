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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询会话任务状态的单条查询项
 *
 * @method string getRuntimeId() 获取沙箱 Runtime ID
 * @method void setRuntimeId(string $RuntimeId) 设置沙箱 Runtime ID
 * @method string getSessionId() 获取对话 Session ID
 * @method void setSessionId(string $SessionId) 设置对话 Session ID
 */
class SessionStatusQueryItem extends AbstractModel
{
    /**
     * @var string 沙箱 Runtime ID
     */
    public $RuntimeId;

    /**
     * @var string 对话 Session ID
     */
    public $SessionId;

    /**
     * @param string $RuntimeId 沙箱 Runtime ID
     * @param string $SessionId 对话 Session ID
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
