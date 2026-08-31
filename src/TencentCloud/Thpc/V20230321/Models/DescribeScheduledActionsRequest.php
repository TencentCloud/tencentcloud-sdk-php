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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScheduledActions请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。</p>
 * @method string getQueueName() 获取<p>队列名称。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。</p>
 * @method array getScheduledActionIds() 获取<p>定时伸缩任务 ID 列表。</p>
 * @method void setScheduledActionIds(array $ScheduledActionIds) 设置<p>定时伸缩任务 ID 列表。</p>
 * @method string getStatus() 获取<p>任务状态过滤条件。</p>
 * @method void setStatus(string $Status) 设置<p>任务状态过滤条件。</p>
 */
class DescribeScheduledActionsRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>队列名称。</p>
     */
    public $QueueName;

    /**
     * @var array <p>定时伸缩任务 ID 列表。</p>
     */
    public $ScheduledActionIds;

    /**
     * @var string <p>任务状态过滤条件。</p>
     */
    public $Status;

    /**
     * @param string $ClusterId <p>集群 ID。</p>
     * @param string $QueueName <p>队列名称。</p>
     * @param array $ScheduledActionIds <p>定时伸缩任务 ID 列表。</p>
     * @param string $Status <p>任务状态过滤条件。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ScheduledActionIds",$param) and $param["ScheduledActionIds"] !== null) {
            $this->ScheduledActionIds = $param["ScheduledActionIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
