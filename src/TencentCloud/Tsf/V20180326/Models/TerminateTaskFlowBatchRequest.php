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
 * TerminateTaskFlowBatch请求参数结构体
 *
 * @method string getFlowBatchId() 获取工作流批次 ID，在[工作流执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=taskflow)列表页第一列获取。
 * @method void setFlowBatchId(string $FlowBatchId) 设置工作流批次 ID，在[工作流执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=taskflow)列表页第一列获取。
 */
class TerminateTaskFlowBatchRequest extends AbstractModel
{
    /**
     * @var string 工作流批次 ID，在[工作流执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=taskflow)列表页第一列获取。
     */
    public $FlowBatchId;

    /**
     * @param string $FlowBatchId 工作流批次 ID，在[工作流执行记录](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=taskflow)列表页第一列获取。
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
        if (array_key_exists("FlowBatchId",$param) and $param["FlowBatchId"] !== null) {
            $this->FlowBatchId = $param["FlowBatchId"];
        }
    }
}
