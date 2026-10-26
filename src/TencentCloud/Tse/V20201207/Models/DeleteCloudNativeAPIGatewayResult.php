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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除云原生API网关响应结果。
 *
 * @method string getGatewayId() 获取<p>云原生网关ID。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>云原生网关ID。</p>
 * @method string getStatus() 获取<p>云原生网关状态。</p>
 * @method void setStatus(string $Status) 设置<p>云原生网关状态。</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 */
class DeleteCloudNativeAPIGatewayResult extends AbstractModel
{
    /**
     * @var string <p>云原生网关ID。</p>
     */
    public $GatewayId;

    /**
     * @var string <p>云原生网关状态。</p>
     */
    public $Status;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @param string $GatewayId <p>云原生网关ID。</p>
     * @param string $Status <p>云原生网关状态。</p>
     * @param string $TaskId <p>任务ID</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
