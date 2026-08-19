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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIScheduleStats返回参数结构体
 *
 * @method integer getScheduleCount() 获取<p>定时任务总数。</p>
 * @method void setScheduleCount(integer $ScheduleCount) 设置<p>定时任务总数。</p>
 * @method integer getRunningTaskCount() 获取<p>当前运行中的任务数量。</p>
 * @method void setRunningTaskCount(integer $RunningTaskCount) 设置<p>当前运行中的任务数量。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAIScheduleStatsResponse extends AbstractModel
{
    /**
     * @var integer <p>定时任务总数。</p>
     */
    public $ScheduleCount;

    /**
     * @var integer <p>当前运行中的任务数量。</p>
     */
    public $RunningTaskCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ScheduleCount <p>定时任务总数。</p>
     * @param integer $RunningTaskCount <p>当前运行中的任务数量。</p>
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
        if (array_key_exists("ScheduleCount",$param) and $param["ScheduleCount"] !== null) {
            $this->ScheduleCount = $param["ScheduleCount"];
        }

        if (array_key_exists("RunningTaskCount",$param) and $param["RunningTaskCount"] !== null) {
            $this->RunningTaskCount = $param["RunningTaskCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
