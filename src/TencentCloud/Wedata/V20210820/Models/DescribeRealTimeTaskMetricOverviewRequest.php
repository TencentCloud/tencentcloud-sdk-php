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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealTimeTaskMetricOverview请求参数结构体
 *
 * @method string getTaskId() 获取要查看的实时任务的任务ID，可在任务列表页面中获得
 * @method void setTaskId(string $TaskId) 设置要查看的实时任务的任务ID，可在任务列表页面中获得
 * @method string getProjectId() 获取要查看的项目ID
 * @method void setProjectId(string $ProjectId) 设置要查看的项目ID
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 */
class DescribeRealTimeTaskMetricOverviewRequest extends AbstractModel
{
    /**
     * @var string 要查看的实时任务的任务ID，可在任务列表页面中获得
     */
    public $TaskId;

    /**
     * @var string 要查看的项目ID
     */
    public $ProjectId;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @param string $TaskId 要查看的实时任务的任务ID，可在任务列表页面中获得
     * @param string $ProjectId 要查看的项目ID
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
