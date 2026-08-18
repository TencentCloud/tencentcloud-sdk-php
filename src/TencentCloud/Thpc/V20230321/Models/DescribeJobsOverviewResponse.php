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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobsOverview返回参数结构体
 *
 * @method integer getJobTotal() 获取<p>作业任务数量</p>
 * @method void setJobTotal(integer $JobTotal) 设置<p>作业任务数量</p>
 * @method integer getQueuingJobTotal() 获取<p>排队中的作业任务数量</p>
 * @method void setQueuingJobTotal(integer $QueuingJobTotal) 设置<p>排队中的作业任务数量</p>
 * @method integer getRunningJobTotal() 获取<p>运行中的作业数量</p>
 * @method void setRunningJobTotal(integer $RunningJobTotal) 设置<p>运行中的作业数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobsOverviewResponse extends AbstractModel
{
    /**
     * @var integer <p>作业任务数量</p>
     */
    public $JobTotal;

    /**
     * @var integer <p>排队中的作业任务数量</p>
     */
    public $QueuingJobTotal;

    /**
     * @var integer <p>运行中的作业数量</p>
     */
    public $RunningJobTotal;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $JobTotal <p>作业任务数量</p>
     * @param integer $QueuingJobTotal <p>排队中的作业任务数量</p>
     * @param integer $RunningJobTotal <p>运行中的作业数量</p>
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
        if (array_key_exists("JobTotal",$param) and $param["JobTotal"] !== null) {
            $this->JobTotal = $param["JobTotal"];
        }

        if (array_key_exists("QueuingJobTotal",$param) and $param["QueuingJobTotal"] !== null) {
            $this->QueuingJobTotal = $param["QueuingJobTotal"];
        }

        if (array_key_exists("RunningJobTotal",$param) and $param["RunningJobTotal"] !== null) {
            $this->RunningJobTotal = $param["RunningJobTotal"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
