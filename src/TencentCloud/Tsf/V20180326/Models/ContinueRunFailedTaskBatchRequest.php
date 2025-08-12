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
 * ContinueRunFailedTaskBatch请求参数结构体
 *
 * @method string getBatchId() 获取任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入执行记录页，第一列即为任务批次ID，在[任务执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=task)页能查看所有任务批次ID。
 * @method void setBatchId(string $BatchId) 设置任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入执行记录页，第一列即为任务批次ID，在[任务执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=task)页能查看所有任务批次ID。
 */
class ContinueRunFailedTaskBatchRequest extends AbstractModel
{
    /**
     * @var string 任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入执行记录页，第一列即为任务批次ID，在[任务执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=task)页能查看所有任务批次ID。
     */
    public $BatchId;

    /**
     * @param string $BatchId 任务批次ID。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)页面点击任务ID进入执行记录页，第一列即为任务批次ID，在[任务执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=task)页能查看所有任务批次ID。
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }
    }
}
