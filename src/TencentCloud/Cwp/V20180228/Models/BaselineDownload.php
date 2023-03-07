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
 * 基线导出结果下载
 *
 * @method integer getTaskId() 获取任务Id
 * @method void setTaskId(integer $TaskId) 设置任务Id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getStatus() 获取状态0:未完成 1:完成
 * @method void setStatus(integer $Status) 设置状态0:未完成 1:完成
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取完成时间
 * @method void setEndTime(string $EndTime) 设置完成时间
 * @method string getDownloadUrl() 获取下载地址
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载地址
 */
class BaselineDownload extends AbstractModel
{
    /**
     * @var integer 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 状态0:未完成 1:完成
     */
    public $Status;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 完成时间
     */
    public $EndTime;

    /**
     * @var string 下载地址
     */
    public $DownloadUrl;

    /**
     * @param integer $TaskId 任务Id
     * @param string $TaskName 任务名称
     * @param integer $Status 状态0:未完成 1:完成
     * @param string $StartTime 开始时间
     * @param string $EndTime 完成时间
     * @param string $DownloadUrl 下载地址
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
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

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }
    }
}
