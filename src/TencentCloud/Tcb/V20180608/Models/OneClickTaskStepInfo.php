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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一键部署步骤信息
 *
 * @method string getStatus() 获取未启动："todo"
运行中："running"
失败："failed"
成功结束："finished"
 * @method void setStatus(string $Status) 设置未启动："todo"
运行中："running"
失败："failed"
成功结束："finished"
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getCostTime() 获取耗时：秒
 * @method void setCostTime(integer $CostTime) 设置耗时：秒
 * @method string getFailReason() 获取失败原因
 * @method void setFailReason(string $FailReason) 设置失败原因
 * @method string getName() 获取步骤名
 * @method void setName(string $Name) 设置步骤名
 */
class OneClickTaskStepInfo extends AbstractModel
{
    /**
     * @var string 未启动："todo"
运行中："running"
失败："failed"
成功结束："finished"
     */
    public $Status;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 耗时：秒
     */
    public $CostTime;

    /**
     * @var string 失败原因
     */
    public $FailReason;

    /**
     * @var string 步骤名
     */
    public $Name;

    /**
     * @param string $Status 未启动："todo"
运行中："running"
失败："failed"
成功结束："finished"
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $CostTime 耗时：秒
     * @param string $FailReason 失败原因
     * @param string $Name 步骤名
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
