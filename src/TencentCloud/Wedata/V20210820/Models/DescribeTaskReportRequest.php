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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskReport请求参数结构体
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getBeginDate() 获取统计周期的开始日期，格式为 yyyy-MM-dd
 * @method void setBeginDate(string $BeginDate) 设置统计周期的开始日期，格式为 yyyy-MM-dd
 * @method string getEndDate() 获取统计周期的结束日期，格式为 yyyy-MM-dd
 * @method void setEndDate(string $EndDate) 设置统计周期的结束日期，格式为 yyyy-MM-dd
 * @method string getProjectId() 获取WeData项目id
 * @method void setProjectId(string $ProjectId) 设置WeData项目id
 */
class DescribeTaskReportRequest extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 统计周期的开始日期，格式为 yyyy-MM-dd
     */
    public $BeginDate;

    /**
     * @var string 统计周期的结束日期，格式为 yyyy-MM-dd
     */
    public $EndDate;

    /**
     * @var string WeData项目id
     */
    public $ProjectId;

    /**
     * @param string $TaskId 任务Id
     * @param string $BeginDate 统计周期的开始日期，格式为 yyyy-MM-dd
     * @param string $EndDate 统计周期的结束日期，格式为 yyyy-MM-dd
     * @param string $ProjectId WeData项目id
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

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
