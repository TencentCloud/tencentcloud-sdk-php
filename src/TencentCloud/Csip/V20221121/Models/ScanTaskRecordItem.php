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
 * 扫描任务记录详情
 *
 * @method string getTaskID() 获取<p>任务ID</p>
 * @method void setTaskID(string $TaskID) 设置<p>任务ID</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method integer getProgress() 获取<p>任务进度</p>
 * @method void setProgress(integer $Progress) 设置<p>任务进度</p>
 * @method integer getCostQuota() 获取<p>消耗配额</p>
 * @method void setCostQuota(integer $CostQuota) 设置<p>消耗配额</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method string getEndTime() 获取<p>任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间</p>
 * @method string getTaskSource() 获取<p>任务来源</p>
 * @method void setTaskSource(string $TaskSource) 设置<p>任务来源</p>
 */
class ScanTaskRecordItem extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskID;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var integer <p>任务进度</p>
     */
    public $Progress;

    /**
     * @var integer <p>消耗配额</p>
     */
    public $CostQuota;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>任务来源</p>
     */
    public $TaskSource;

    /**
     * @param string $TaskID <p>任务ID</p>
     * @param string $Status <p>任务状态</p>
     * @param integer $Progress <p>任务进度</p>
     * @param integer $CostQuota <p>消耗配额</p>
     * @param string $CreateTime <p>任务创建时间</p>
     * @param string $EndTime <p>任务结束时间</p>
     * @param string $TaskSource <p>任务来源</p>
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CostQuota",$param) and $param["CostQuota"] !== null) {
            $this->CostQuota = $param["CostQuota"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }
    }
}
