<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个即时拨测任务信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTargetAddress() 获取任务地址
 * @method void setTargetAddress(string $TargetAddress) 设置任务地址
 * @method integer getTaskType() 获取任务类型
 * @method void setTaskType(integer $TaskType) 设置任务类型
 * @method integer getProbeTime() 获取测试时间
 * @method void setProbeTime(integer $ProbeTime) 设置测试时间
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method float getSuccessRate() 获取成功率
 * @method void setSuccessRate(float $SuccessRate) 设置成功率
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method integer getTaskCategory() 获取节点类型
 * @method void setTaskCategory(integer $TaskCategory) 设置节点类型
 */
class SingleInstantTask extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务地址
     */
    public $TargetAddress;

    /**
     * @var integer 任务类型
     */
    public $TaskType;

    /**
     * @var integer 测试时间
     */
    public $ProbeTime;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var float 成功率
     */
    public $SuccessRate;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var integer 节点类型
     */
    public $TaskCategory;

    /**
     * @param string $TaskId 任务ID
     * @param string $TargetAddress 任务地址
     * @param integer $TaskType 任务类型
     * @param integer $ProbeTime 测试时间
     * @param string $Status 任务状态
     * @param float $SuccessRate 成功率
     * @param integer $NodeCount 节点数量
     * @param integer $TaskCategory 节点类型
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProbeTime",$param) and $param["ProbeTime"] !== null) {
            $this->ProbeTime = $param["ProbeTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessRate",$param) and $param["SuccessRate"] !== null) {
            $this->SuccessRate = $param["SuccessRate"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }
    }
}
