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
 * DryRunDIOfflineTask返回参数结构体
 *
 * @method string getCurrentRunDate() 获取数据时间
 * @method void setCurrentRunDate(string $CurrentRunDate) 设置数据时间
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getTaskInstanceKey() 获取任务实例唯一key
 * @method void setTaskInstanceKey(string $TaskInstanceKey) 设置任务实例唯一key
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DryRunDIOfflineTaskResponse extends AbstractModel
{
    /**
     * @var string 数据时间
     */
    public $CurrentRunDate;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务实例唯一key
     */
    public $TaskInstanceKey;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CurrentRunDate 数据时间
     * @param string $ProjectId 项目Id
     * @param string $Status 任务状态
     * @param string $TaskId 任务Id
     * @param string $TaskInstanceKey 任务实例唯一key
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CurrentRunDate",$param) and $param["CurrentRunDate"] !== null) {
            $this->CurrentRunDate = $param["CurrentRunDate"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskInstanceKey",$param) and $param["TaskInstanceKey"] !== null) {
            $this->TaskInstanceKey = $param["TaskInstanceKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
