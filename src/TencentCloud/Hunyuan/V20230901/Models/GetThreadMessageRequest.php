<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetThreadMessage请求参数结构体
 *
 * @method string getThreadID() 获取会话 ID
 * @method void setThreadID(string $ThreadID) 设置会话 ID
 * @method string getMessageID() 获取消息 ID
 * @method void setMessageID(string $MessageID) 设置消息 ID
 */
class GetThreadMessageRequest extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $ThreadID;

    /**
     * @var string 消息 ID
     */
    public $MessageID;

    /**
     * @param string $ThreadID 会话 ID
     * @param string $MessageID 消息 ID
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
        if (array_key_exists("ThreadID",$param) and $param["ThreadID"] !== null) {
            $this->ThreadID = $param["ThreadID"];
        }

        if (array_key_exists("MessageID",$param) and $param["MessageID"] !== null) {
            $this->MessageID = $param["MessageID"];
        }
    }
}
