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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AbortJob请求参数结构体
 *
 * @method string getJobId() 获取待停止的压测任务的 ID（所有的压测任务 ID 可以从 DescribeJobs 接口获取）
 * @method void setJobId(string $JobId) 设置待停止的压测任务的 ID（所有的压测任务 ID 可以从 DescribeJobs 接口获取）
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getScenarioId() 获取场景ID
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
 * @method integer getAbortReason() 获取中断原因
 * @method void setAbortReason(integer $AbortReason) 设置中断原因
 */
class AbortJobRequest extends AbstractModel
{
    /**
     * @var string 待停止的压测任务的 ID（所有的压测任务 ID 可以从 DescribeJobs 接口获取）
     */
    public $JobId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 场景ID
     */
    public $ScenarioId;

    /**
     * @var integer 中断原因
     */
    public $AbortReason;

    /**
     * @param string $JobId 待停止的压测任务的 ID（所有的压测任务 ID 可以从 DescribeJobs 接口获取）
     * @param string $ProjectId 项目ID
     * @param string $ScenarioId 场景ID
     * @param integer $AbortReason 中断原因
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("AbortReason",$param) and $param["AbortReason"] !== null) {
            $this->AbortReason = $param["AbortReason"];
        }
    }
}
