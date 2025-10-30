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
 * RedoTaskFlowBatch请求参数结构体
 *
 * @method string getFlowBatchId() 获取工作流批次 ID。在[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)页面，点击第一列的工作流ID进入工作流执行记录列表页面，第一列的内容即为工作流批次ID。
 * @method void setFlowBatchId(string $FlowBatchId) 设置工作流批次 ID。在[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)页面，点击第一列的工作流ID进入工作流执行记录列表页面，第一列的内容即为工作流批次ID。
 */
class RedoTaskFlowBatchRequest extends AbstractModel
{
    /**
     * @var string 工作流批次 ID。在[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)页面，点击第一列的工作流ID进入工作流执行记录列表页面，第一列的内容即为工作流批次ID。
     */
    public $FlowBatchId;

    /**
     * @param string $FlowBatchId 工作流批次 ID。在[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)页面，点击第一列的工作流ID进入工作流执行记录列表页面，第一列的内容即为工作流批次ID。
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
