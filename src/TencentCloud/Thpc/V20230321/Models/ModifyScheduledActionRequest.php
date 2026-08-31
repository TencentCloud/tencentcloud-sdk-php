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
 * ModifyScheduledAction请求参数结构体
 *
 * @method string getScheduledActionId() 获取<p>定时伸缩任务 ID。</p>
 * @method void setScheduledActionId(string $ScheduledActionId) 设置<p>定时伸缩任务 ID。</p>
 * @method string getScheduledActionName() 获取<p>定时伸缩任务名称。</p>
 * @method void setScheduledActionName(string $ScheduledActionName) 设置<p>定时伸缩任务名称。</p>
 * @method integer getDesiredCapacity() 获取<p>定时触发后队列期望节点数。</p>
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置<p>定时触发后队列期望节点数。</p>
 * @method string getStatus() 获取<p>任务状态。</p>
 * @method void setStatus(string $Status) 设置<p>任务状态。</p>
 */
class ModifyScheduledActionRequest extends AbstractModel
{
    /**
     * @var string <p>定时伸缩任务 ID。</p>
     */
    public $ScheduledActionId;

    /**
     * @var string <p>定时伸缩任务名称。</p>
     */
    public $ScheduledActionName;

    /**
     * @var integer <p>定时触发后队列期望节点数。</p>
     */
    public $DesiredCapacity;

    /**
     * @var string <p>任务状态。</p>
     */
    public $Status;

    /**
     * @param string $ScheduledActionId <p>定时伸缩任务 ID。</p>
     * @param string $ScheduledActionName <p>定时伸缩任务名称。</p>
     * @param integer $DesiredCapacity <p>定时触发后队列期望节点数。</p>
     * @param string $Status <p>任务状态。</p>
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
        if (array_key_exists("ScheduledActionId",$param) and $param["ScheduledActionId"] !== null) {
            $this->ScheduledActionId = $param["ScheduledActionId"];
        }

        if (array_key_exists("ScheduledActionName",$param) and $param["ScheduledActionName"] !== null) {
            $this->ScheduledActionName = $param["ScheduledActionName"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
