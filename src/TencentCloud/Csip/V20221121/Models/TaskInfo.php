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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检测任务信息
 *
 * @method string getScanTime() 获取检测时间
 * @method void setScanTime(string $ScanTime) 设置检测时间
 * @method string getTaskID() 获取任务ID
 * @method void setTaskID(string $TaskID) 设置任务ID
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method integer getProgress() 获取任务进度
 * @method void setProgress(integer $Progress) 设置任务进度
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string 检测时间
     */
    public $ScanTime;

    /**
     * @var string 任务ID
     */
    public $TaskID;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var integer 任务进度
     */
    public $Progress;

    /**
     * @param string $ScanTime 检测时间
     * @param string $TaskID 任务ID
     * @param string $Status 任务状态
     * @param integer $Progress 任务进度
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
        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
