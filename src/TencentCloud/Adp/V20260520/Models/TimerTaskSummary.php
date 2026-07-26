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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimerTaskSummary
 *
 * @method string getOwnerUserId() 获取OwnerUserId
 * @method void setOwnerUserId(string $OwnerUserId) 设置OwnerUserId
 * @method string getPolicySummary() 获取定时配置概要
 * @method void setPolicySummary(string $PolicySummary) 设置定时配置概要
 * @method string getSpaceId() 获取空间ID
 * @method void setSpaceId(string $SpaceId) 设置空间ID
 * @method TimerStatus getStatus() 获取任务相关状态
 * @method void setStatus(TimerStatus $Status) 设置任务相关状态
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTimerId() 获取任务ID
 * @method void setTimerId(string $TimerId) 设置任务ID
 */
class TimerTaskSummary extends AbstractModel
{
    /**
     * @var string OwnerUserId
     */
    public $OwnerUserId;

    /**
     * @var string 定时配置概要
     */
    public $PolicySummary;

    /**
     * @var string 空间ID
     */
    public $SpaceId;

    /**
     * @var TimerStatus 任务相关状态
     */
    public $Status;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务ID
     */
    public $TimerId;

    /**
     * @param string $OwnerUserId OwnerUserId
     * @param string $PolicySummary 定时配置概要
     * @param string $SpaceId 空间ID
     * @param TimerStatus $Status 任务相关状态
     * @param string $TaskName 任务名称
     * @param string $TimerId 任务ID
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
        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("PolicySummary",$param) and $param["PolicySummary"] !== null) {
            $this->PolicySummary = $param["PolicySummary"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new TimerStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }
    }
}
