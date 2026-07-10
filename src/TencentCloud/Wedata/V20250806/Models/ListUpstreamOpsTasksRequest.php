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
 * ListUpstreamOpsTasks请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目Id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目Id</p>
 * @method string getTaskId() 获取<p>任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务Id</p>
 * @method string getPageNumber() 获取<p>分页页码</p>
 * @method void setPageNumber(string $PageNumber) 设置<p>分页页码</p>
 * @method string getPageSize() 获取<p>分页大小</p>
 * @method void setPageSize(string $PageSize) 设置<p>分页大小</p>
 */
class ListUpstreamOpsTasksRequest extends AbstractModel
{
    /**
     * @var string <p>项目Id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>任务Id</p>
     */
    public $TaskId;

    /**
     * @var string <p>分页页码</p>
     */
    public $PageNumber;

    /**
     * @var string <p>分页大小</p>
     */
    public $PageSize;

    /**
     * @param string $ProjectId <p>项目Id</p>
     * @param string $TaskId <p>任务Id</p>
     * @param string $PageNumber <p>分页页码</p>
     * @param string $PageSize <p>分页大小</p>
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
