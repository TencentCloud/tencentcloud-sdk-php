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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileCounterSign返回参数结构体
 *
 * @method string getStatus() 获取加签任务的状态。

<ul>
<li><b>PROCESSING</b>: 任务正在执行中。</li>
<li><b>FINISHED</b>: 已执行成功</li>
</ul>
 * @method void setStatus(string $Status) 设置加签任务的状态。

<ul>
<li><b>PROCESSING</b>: 任务正在执行中。</li>
<li><b>FINISHED</b>: 已执行成功</li>
</ul>
 * @method string getResultFileId() 获取加签完成后新的文件Id
 * @method void setResultFileId(string $ResultFileId) 设置加签完成后新的文件Id
 * @method string getTaskId() 获取异步模式下用于轮询状态的任务Id
 * @method void setTaskId(string $TaskId) 设置异步模式下用于轮询状态的任务Id
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFileCounterSignResponse extends AbstractModel
{
    /**
     * @var string 加签任务的状态。

<ul>
<li><b>PROCESSING</b>: 任务正在执行中。</li>
<li><b>FINISHED</b>: 已执行成功</li>
</ul>
     */
    public $Status;

    /**
     * @var string 加签完成后新的文件Id
     */
    public $ResultFileId;

    /**
     * @var string 异步模式下用于轮询状态的任务Id
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 加签任务的状态。

<ul>
<li><b>PROCESSING</b>: 任务正在执行中。</li>
<li><b>FINISHED</b>: 已执行成功</li>
</ul>
     * @param string $ResultFileId 加签完成后新的文件Id
     * @param string $TaskId 异步模式下用于轮询状态的任务Id
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResultFileId",$param) and $param["ResultFileId"] !== null) {
            $this->ResultFileId = $param["ResultFileId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
