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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopTaskExecute请求参数结构体
 *
 * @method string getExecuteId() 获取任务执行ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录页，点击批次ID进入执行详情列表页，第一列即为任务执行ID。
 * @method void setExecuteId(string $ExecuteId) 设置任务执行ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录页，点击批次ID进入执行详情列表页，第一列即为任务执行ID。
 * @method string getBatchId() 获取任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录列表页，第一列即为任务批次ID。
 * @method void setBatchId(string $BatchId) 设置任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录列表页，第一列即为任务批次ID。
 * @method string getTaskId() 获取任务ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页面可以查看任务ID。
 * @method void setTaskId(string $TaskId) 设置任务ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页面可以查看任务ID。
 */
class StopTaskExecuteRequest extends AbstractModel
{
    /**
     * @var string 任务执行ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录页，点击批次ID进入执行详情列表页，第一列即为任务执行ID。
     */
    public $ExecuteId;

    /**
     * @var string 任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录列表页，第一列即为任务批次ID。
     */
    public $BatchId;

    /**
     * @var string 任务ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页面可以查看任务ID。
     */
    public $TaskId;

    /**
     * @param string $ExecuteId 任务执行ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录页，点击批次ID进入执行详情列表页，第一列即为任务执行ID。
     * @param string $BatchId 任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入任务详情，进入执行记录列表页，第一列即为任务批次ID。
     * @param string $TaskId 任务ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页面可以查看任务ID。
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
        if (array_key_exists("ExecuteId",$param) and $param["ExecuteId"] !== null) {
            $this->ExecuteId = $param["ExecuteId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
