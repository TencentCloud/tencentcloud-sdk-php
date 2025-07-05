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
 * AdjustJobSpeed请求参数结构体
 *
 * @method string getJobId() 获取任务ID
 * @method void setJobId(string $JobId) 设置任务ID
 * @method integer getTargetRequestsPerSecond() 获取目标 RPS。其取值应大于起始 RPS，并且小于最大 RPS
 * @method void setTargetRequestsPerSecond(integer $TargetRequestsPerSecond) 设置目标 RPS。其取值应大于起始 RPS，并且小于最大 RPS
 * @method string getProjectId() 获取压测项目ID
 * @method void setProjectId(string $ProjectId) 设置压测项目ID
 * @method string getScenarioId() 获取测试场景ID
 * @method void setScenarioId(string $ScenarioId) 设置测试场景ID
 */
class AdjustJobSpeedRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $JobId;

    /**
     * @var integer 目标 RPS。其取值应大于起始 RPS，并且小于最大 RPS
     */
    public $TargetRequestsPerSecond;

    /**
     * @var string 压测项目ID
     */
    public $ProjectId;

    /**
     * @var string 测试场景ID
     */
    public $ScenarioId;

    /**
     * @param string $JobId 任务ID
     * @param integer $TargetRequestsPerSecond 目标 RPS。其取值应大于起始 RPS，并且小于最大 RPS
     * @param string $ProjectId 压测项目ID
     * @param string $ScenarioId 测试场景ID
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

        if (array_key_exists("TargetRequestsPerSecond",$param) and $param["TargetRequestsPerSecond"] !== null) {
            $this->TargetRequestsPerSecond = $param["TargetRequestsPerSecond"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }
    }
}
