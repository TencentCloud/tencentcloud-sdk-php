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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专家服务-旗舰重保信息
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method integer getProtectDays() 获取重保天数
 * @method void setProtectDays(integer $ProtectDays) 设置重保天数
 * @method integer getStatus() 获取重保状态 0未启动，1重保中，2已完成
 * @method void setStatus(integer $Status) 设置重保状态 0未启动，1重保中，2已完成
 * @method string getStartTime() 获取重保启动时间
 * @method void setStartTime(string $StartTime) 设置重保启动时间
 * @method string getEndTime() 获取重保完成时间
 * @method void setEndTime(string $EndTime) 设置重保完成时间
 * @method string getReportPath() 获取报告下载地址
 * @method void setReportPath(string $ReportPath) 设置报告下载地址
 */
class ProtectNetInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var integer 重保天数
     */
    public $ProtectDays;

    /**
     * @var integer 重保状态 0未启动，1重保中，2已完成
     */
    public $Status;

    /**
     * @var string 重保启动时间
     */
    public $StartTime;

    /**
     * @var string 重保完成时间
     */
    public $EndTime;

    /**
     * @var string 报告下载地址
     */
    public $ReportPath;

    /**
     * @param string $TaskId 任务id
     * @param integer $ProtectDays 重保天数
     * @param integer $Status 重保状态 0未启动，1重保中，2已完成
     * @param string $StartTime 重保启动时间
     * @param string $EndTime 重保完成时间
     * @param string $ReportPath 报告下载地址
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

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
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

        if (array_key_exists("ReportPath",$param) and $param["ReportPath"] !== null) {
            $this->ReportPath = $param["ReportPath"];
        }
    }
}
