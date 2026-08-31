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
 * CreateScheduledAction请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。</p>
 * @method string getQueueName() 获取<p>队列名称。</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称。</p>
 * @method string getScheduledActionName() 获取<p>定时伸缩任务名称。</p>
 * @method void setScheduledActionName(string $ScheduledActionName) 设置<p>定时伸缩任务名称。</p>
 * @method string getStartTime() 获取<p>定时伸缩任务生效起始时间，格式：YYYY-MM-DD HH:MM:SS。</p>
 * @method void setStartTime(string $StartTime) 设置<p>定时伸缩任务生效起始时间，格式：YYYY-MM-DD HH:MM:SS。</p>
 * @method integer getDesiredCapacity() 获取<p>定时触发后队列期望节点数。</p>
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置<p>定时触发后队列期望节点数。</p>
 * @method string getEndTime() 获取<p>定时伸缩任务生效结束时间，格式：YYYY-MM-DD HH:MM:SS。不传则永久有效。</p>
 * @method void setEndTime(string $EndTime) 设置<p>定时伸缩任务生效结束时间，格式：YYYY-MM-DD HH:MM:SS。不传则永久有效。</p>
 * @method string getRecurrence() 获取<p>重复策略，遵循 cron 表达式格式。不传则只执行一次。</p>
 * @method void setRecurrence(string $Recurrence) 设置<p>重复策略，遵循 cron 表达式格式。不传则只执行一次。</p>
 */
class CreateScheduledActionRequest extends AbstractModel
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
     * @var string <p>定时伸缩任务名称。</p>
     */
    public $ScheduledActionName;

    /**
     * @var string <p>定时伸缩任务生效起始时间，格式：YYYY-MM-DD HH:MM:SS。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>定时触发后队列期望节点数。</p>
     */
    public $DesiredCapacity;

    /**
     * @var string <p>定时伸缩任务生效结束时间，格式：YYYY-MM-DD HH:MM:SS。不传则永久有效。</p>
     */
    public $EndTime;

    /**
     * @var string <p>重复策略，遵循 cron 表达式格式。不传则只执行一次。</p>
     */
    public $Recurrence;

    /**
     * @param string $ClusterId <p>集群 ID。</p>
     * @param string $QueueName <p>队列名称。</p>
     * @param string $ScheduledActionName <p>定时伸缩任务名称。</p>
     * @param string $StartTime <p>定时伸缩任务生效起始时间，格式：YYYY-MM-DD HH:MM:SS。</p>
     * @param integer $DesiredCapacity <p>定时触发后队列期望节点数。</p>
     * @param string $EndTime <p>定时伸缩任务生效结束时间，格式：YYYY-MM-DD HH:MM:SS。不传则永久有效。</p>
     * @param string $Recurrence <p>重复策略，遵循 cron 表达式格式。不传则只执行一次。</p>
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

        if (array_key_exists("ScheduledActionName",$param) and $param["ScheduledActionName"] !== null) {
            $this->ScheduledActionName = $param["ScheduledActionName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }
    }
}
