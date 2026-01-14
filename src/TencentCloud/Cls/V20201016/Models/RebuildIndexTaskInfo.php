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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引重建任务信息
 *
 * @method string getTaskId() 获取索引重建任务ID
 * @method void setTaskId(string $TaskId) 设置索引重建任务ID
 * @method integer getStatus() 获取索引重建任务当前状态，0:索引重建任务已创建，1:创建索引重建资源，2:索引重建资源创建完成，3:重建中，4:暂停，5:重建索引成功，6:重建成功（可检索），7:重建失败，8:撤销，9:删除元数据和索引
 * @method void setStatus(integer $Status) 设置索引重建任务当前状态，0:索引重建任务已创建，1:创建索引重建资源，2:索引重建资源创建完成，3:重建中，4:暂停，5:重建索引成功，6:重建成功（可检索），7:重建失败，8:撤销，9:删除元数据和索引
 * @method integer getStartTime() 获取重建任务开始时间戳
 * @method void setStartTime(integer $StartTime) 设置重建任务开始时间戳
 * @method integer getEndTime() 获取重建任务结束时间戳
 * @method void setEndTime(integer $EndTime) 设置重建任务结束时间戳
 * @method integer getRemainTime() 获取重投预估剩余时间，单位秒
 * @method void setRemainTime(integer $RemainTime) 设置重投预估剩余时间，单位秒
 * @method integer getCreateTime() 获取重建任务创建时间戳
 * @method void setCreateTime(integer $CreateTime) 设置重建任务创建时间戳
 * @method float getProgress() 获取重投完成度，百分比
 * @method void setProgress(float $Progress) 设置重投完成度，百分比
 * @method integer getUpdateTime() 获取重建任务更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置重建任务更新时间
 * @method string getStatusMessage() 获取附加状态描述信息（目前仅描述失败时失败原因）
 * @method void setStatusMessage(string $StatusMessage) 设置附加状态描述信息（目前仅描述失败时失败原因）
 */
class RebuildIndexTaskInfo extends AbstractModel
{
    /**
     * @var string 索引重建任务ID
     */
    public $TaskId;

    /**
     * @var integer 索引重建任务当前状态，0:索引重建任务已创建，1:创建索引重建资源，2:索引重建资源创建完成，3:重建中，4:暂停，5:重建索引成功，6:重建成功（可检索），7:重建失败，8:撤销，9:删除元数据和索引
     */
    public $Status;

    /**
     * @var integer 重建任务开始时间戳
     */
    public $StartTime;

    /**
     * @var integer 重建任务结束时间戳
     */
    public $EndTime;

    /**
     * @var integer 重投预估剩余时间，单位秒
     */
    public $RemainTime;

    /**
     * @var integer 重建任务创建时间戳
     */
    public $CreateTime;

    /**
     * @var float 重投完成度，百分比
     */
    public $Progress;

    /**
     * @var integer 重建任务更新时间
     */
    public $UpdateTime;

    /**
     * @var string 附加状态描述信息（目前仅描述失败时失败原因）
     */
    public $StatusMessage;

    /**
     * @param string $TaskId 索引重建任务ID
     * @param integer $Status 索引重建任务当前状态，0:索引重建任务已创建，1:创建索引重建资源，2:索引重建资源创建完成，3:重建中，4:暂停，5:重建索引成功，6:重建成功（可检索），7:重建失败，8:撤销，9:删除元数据和索引
     * @param integer $StartTime 重建任务开始时间戳
     * @param integer $EndTime 重建任务结束时间戳
     * @param integer $RemainTime 重投预估剩余时间，单位秒
     * @param integer $CreateTime 重建任务创建时间戳
     * @param float $Progress 重投完成度，百分比
     * @param integer $UpdateTime 重建任务更新时间
     * @param string $StatusMessage 附加状态描述信息（目前仅描述失败时失败原因）
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RemainTime",$param) and $param["RemainTime"] !== null) {
            $this->RemainTime = $param["RemainTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }
    }
}
