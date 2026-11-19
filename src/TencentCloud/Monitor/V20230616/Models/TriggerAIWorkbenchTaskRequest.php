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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerAIWorkbenchTask请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method string getSessionId() 获取<p>session会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>session会话ID</p>
 * @method string getContent() 获取<p>输入内容</p>
 * @method void setContent(string $Content) 设置<p>输入内容</p>
 * @method string getIdempotencyKey() 获取<p>幂等键，调用方保证同一事件重试时携带同一 key</p>
 * @method void setIdempotencyKey(string $IdempotencyKey) 设置<p>幂等键，调用方保证同一事件重试时携带同一 key</p>
 */
class TriggerAIWorkbenchTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>session会话ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>输入内容</p>
     */
    public $Content;

    /**
     * @var string <p>幂等键，调用方保证同一事件重试时携带同一 key</p>
     */
    public $IdempotencyKey;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param string $SessionId <p>session会话ID</p>
     * @param string $Content <p>输入内容</p>
     * @param string $IdempotencyKey <p>幂等键，调用方保证同一事件重试时携带同一 key</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IdempotencyKey",$param) and $param["IdempotencyKey"] !== null) {
            $this->IdempotencyKey = $param["IdempotencyKey"];
        }
    }
}
