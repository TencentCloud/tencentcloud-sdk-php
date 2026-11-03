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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScheduledTask返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method string getTaskKey() 获取<p>任务唯一标识</p>
 * @method void setTaskKey(string $TaskKey) 设置<p>任务唯一标识</p>
 * @method string getStatus() 获取<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
 * @method void setStatus(string $Status) 设置<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
 * @method string getNextRunTime() 获取<p>下次执行时间</p>
 * @method void setNextRunTime(string $NextRunTime) 设置<p>下次执行时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateScheduledTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务唯一标识</p>
     */
    public $TaskKey;

    /**
     * @var string <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
     */
    public $Status;

    /**
     * @var string <p>下次执行时间</p>
     */
    public $NextRunTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param string $TaskKey <p>任务唯一标识</p>
     * @param string $Status <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
     * @param string $NextRunTime <p>下次执行时间</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskKey",$param) and $param["TaskKey"] !== null) {
            $this->TaskKey = $param["TaskKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NextRunTime",$param) and $param["NextRunTime"] !== null) {
            $this->NextRunTime = $param["NextRunTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
