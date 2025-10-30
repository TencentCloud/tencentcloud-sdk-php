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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIConversation返回参数结构体
 *
 * @method string getStartTime() 获取任务开始时间。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
 * @method string getStatus() 获取任务状态。有4个值：1、Idle表示任务未开始2、Preparing表示任务准备中3、InProgress表示任务正在运行4、Stopped表示任务已停止，正在清理资源中
 * @method void setStatus(string $Status) 设置任务状态。有4个值：1、Idle表示任务未开始2、Preparing表示任务准备中3、InProgress表示任务正在运行4、Stopped表示任务已停止，正在清理资源中
 * @method string getTaskId() 获取唯一标识一次任务。
 * @method void setTaskId(string $TaskId) 设置唯一标识一次任务。
 * @method string getSessionId() 获取开启对话任务时填写的SessionId，如果没写则不返回。
 * @method void setSessionId(string $SessionId) 设置开启对话任务时填写的SessionId，如果没写则不返回。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAIConversationResponse extends AbstractModel
{
    /**
     * @var string 任务开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务状态。有4个值：1、Idle表示任务未开始2、Preparing表示任务准备中3、InProgress表示任务正在运行4、Stopped表示任务已停止，正在清理资源中
     */
    public $Status;

    /**
     * @var string 唯一标识一次任务。
     */
    public $TaskId;

    /**
     * @var string 开启对话任务时填写的SessionId，如果没写则不返回。
     */
    public $SessionId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StartTime 任务开始时间。
     * @param string $Status 任务状态。有4个值：1、Idle表示任务未开始2、Preparing表示任务准备中3、InProgress表示任务正在运行4、Stopped表示任务已停止，正在清理资源中
     * @param string $TaskId 唯一标识一次任务。
     * @param string $SessionId 开启对话任务时填写的SessionId，如果没写则不返回。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
