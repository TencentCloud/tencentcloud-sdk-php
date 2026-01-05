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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUpstreamTriggerTasks请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method integer getPageNumber() 获取请求的数据页数。默认值为1，取值大于等于1。
 * @method void setPageNumber(integer $PageNumber) 设置请求的数据页数。默认值为1，取值大于等于1。
 * @method integer getPageSize() 获取请求的数据页数。默认值为1，取值大于等于1。
 * @method void setPageSize(integer $PageSize) 设置请求的数据页数。默认值为1，取值大于等于1。
 */
class ListUpstreamTriggerTasksRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var integer 请求的数据页数。默认值为1，取值大于等于1。
     */
    public $PageNumber;

    /**
     * @var integer 请求的数据页数。默认值为1，取值大于等于1。
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目Id
     * @param string $TaskId 任务Id
     * @param integer $PageNumber 请求的数据页数。默认值为1，取值大于等于1。
     * @param integer $PageSize 请求的数据页数。默认值为1，取值大于等于1。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
