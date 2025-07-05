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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis大Key分析任务详情。
 *
 * @method integer getAsyncRequestId() 获取异步任务请求 ID。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务请求 ID。
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method string getStartTime() 获取任务开始时间。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
 * @method string getEndTime() 获取任务结束时间。
 * @method void setEndTime(string $EndTime) 设置任务结束时间。
 * @method string getTaskStatus() 获取任务状态。
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态。
 * @method integer getProgress() 获取任务执行进度。
 * @method void setProgress(integer $Progress) 设置任务执行进度。
 * @method array getShardIds() 获取任务包含的分片节点序号列表。
 * @method void setShardIds(array $ShardIds) 设置任务包含的分片节点序号列表。
 */
class RedisBigKeyTask extends AbstractModel
{
    /**
     * @var integer 异步任务请求 ID。
     */
    public $AsyncRequestId;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var string 任务开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间。
     */
    public $EndTime;

    /**
     * @var string 任务状态。
     */
    public $TaskStatus;

    /**
     * @var integer 任务执行进度。
     */
    public $Progress;

    /**
     * @var array 任务包含的分片节点序号列表。
     */
    public $ShardIds;

    /**
     * @param integer $AsyncRequestId 异步任务请求 ID。
     * @param string $CreateTime 任务创建时间。
     * @param string $StartTime 任务开始时间。
     * @param string $EndTime 任务结束时间。
     * @param string $TaskStatus 任务状态。
     * @param integer $Progress 任务执行进度。
     * @param array $ShardIds 任务包含的分片节点序号列表。
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }
    }
}
