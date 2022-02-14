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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 展示 redis kill 会话任务状态。
 *
 * @method integer getAsyncRequestId() 获取异步任务 ID。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务 ID。
 * @method array getInstProxyList() 获取当前实例所有 proxy 列表。
 * @method void setInstProxyList(array $InstProxyList) 设置当前实例所有 proxy 列表。
 * @method integer getInstProxyCount() 获取当前实例所有 proxy 数量。
 * @method void setInstProxyCount(integer $InstProxyCount) 设置当前实例所有 proxy 数量。
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method string getStartTime() 获取任务启动时间。
 * @method void setStartTime(string $StartTime) 设置任务启动时间。
 * @method string getTaskStatus() 获取任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
 * @method void setTaskStatus(string $TaskStatus) 设置任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
 * @method array getFinishedProxyList() 获取完成 kill 任务的 proxyId。
 * @method void setFinishedProxyList(array $FinishedProxyList) 设置完成 kill 任务的 proxyId。
 * @method array getFailedProxyList() 获取kill 任务实行失败的 proxyId。
 * @method void setFailedProxyList(array $FailedProxyList) 设置kill 任务实行失败的 proxyId。
 * @method string getEndTime() 获取任务结束时间。
 * @method void setEndTime(string $EndTime) 设置任务结束时间。
 * @method integer getProgress() 获取任务执行进度。
 * @method void setProgress(integer $Progress) 设置任务执行进度。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var integer 异步任务 ID。
     */
    public $AsyncRequestId;

    /**
     * @var array 当前实例所有 proxy 列表。
     */
    public $InstProxyList;

    /**
     * @var integer 当前实例所有 proxy 数量。
     */
    public $InstProxyCount;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var string 任务启动时间。
     */
    public $StartTime;

    /**
     * @var string 任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
     */
    public $TaskStatus;

    /**
     * @var array 完成 kill 任务的 proxyId。
     */
    public $FinishedProxyList;

    /**
     * @var array kill 任务实行失败的 proxyId。
     */
    public $FailedProxyList;

    /**
     * @var string 任务结束时间。
     */
    public $EndTime;

    /**
     * @var integer 任务执行进度。
     */
    public $Progress;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @param integer $AsyncRequestId 异步任务 ID。
     * @param array $InstProxyList 当前实例所有 proxy 列表。
     * @param integer $InstProxyCount 当前实例所有 proxy 数量。
     * @param string $CreateTime 任务创建时间。
     * @param string $StartTime 任务启动时间。
     * @param string $TaskStatus 任务的状态，支持的取值包括："created" - 新建；"chosen" - 待执行； "running" - 执行中；"failed" - 失败；"finished" - 已完成。
     * @param array $FinishedProxyList 完成 kill 任务的 proxyId。
     * @param array $FailedProxyList kill 任务实行失败的 proxyId。
     * @param string $EndTime 任务结束时间。
     * @param integer $Progress 任务执行进度。
     * @param string $InstanceId 实例 ID。
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

        if (array_key_exists("InstProxyList",$param) and $param["InstProxyList"] !== null) {
            $this->InstProxyList = $param["InstProxyList"];
        }

        if (array_key_exists("InstProxyCount",$param) and $param["InstProxyCount"] !== null) {
            $this->InstProxyCount = $param["InstProxyCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("FinishedProxyList",$param) and $param["FinishedProxyList"] !== null) {
            $this->FinishedProxyList = $param["FinishedProxyList"];
        }

        if (array_key_exists("FailedProxyList",$param) and $param["FailedProxyList"] !== null) {
            $this->FailedProxyList = $param["FailedProxyList"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
