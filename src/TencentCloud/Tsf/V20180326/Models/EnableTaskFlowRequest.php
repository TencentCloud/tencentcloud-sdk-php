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
 * EnableTaskFlow请求参数结构体
 *
 * @method string getFlowId() 获取工作流 ID。[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)列表页查看工作流ID。
 * @method void setFlowId(string $FlowId) 设置工作流 ID。[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)列表页查看工作流ID。
 */
class EnableTaskFlowRequest extends AbstractModel
{
    /**
     * @var string 工作流 ID。[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)列表页查看工作流ID。
     */
    public $FlowId;

    /**
     * @param string $FlowId 工作流 ID。[工作流管理](https://console.cloud.tencent.com/tsf/tct?rid=1&tab=workflowManage)列表页查看工作流ID。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
