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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普通设备的录像详情
 *
 * @method string getRecordTaskId() 获取录像任务ID
 * @method void setRecordTaskId(string $RecordTaskId) 设置录像任务ID
 * @method string getRecordPlanId() 获取录制计划ID
 * @method void setRecordPlanId(string $RecordPlanId) 设置录制计划ID
 * @method integer getStartTime() 获取本录制片段开始时间
 * @method void setStartTime(integer $StartTime) 设置本录制片段开始时间
 * @method integer getEndTime() 获取本录制片段结束时间
 * @method void setEndTime(integer $EndTime) 设置本录制片段结束时间
 * @method integer getEventId() 获取录制模式
 * @method void setEventId(integer $EventId) 设置录制模式
 * @method string getVideoUrl() 获取本录制片段对应的录制文件URL
 * @method void setVideoUrl(string $VideoUrl) 设置本录制片段对应的录制文件URL
 * @method integer getRecordStatus() 获取本录制片段当前的录制状态
 * @method void setRecordStatus(integer $RecordStatus) 设置本录制片段当前的录制状态
 * @method integer getSceneId() 获取场景ID
 * @method void setSceneId(integer $SceneId) 设置场景ID
 * @method integer getWarnId() 获取告警ID
 * @method void setWarnId(integer $WarnId) 设置告警ID
 * @method string getRecordId() 获取录制id，NVR下属设备有效
 * @method void setRecordId(string $RecordId) 设置录制id，NVR下属设备有效
 */
class RecordTaskItem extends AbstractModel
{
    /**
     * @var string 录像任务ID
     */
    public $RecordTaskId;

    /**
     * @var string 录制计划ID
     */
    public $RecordPlanId;

    /**
     * @var integer 本录制片段开始时间
     */
    public $StartTime;

    /**
     * @var integer 本录制片段结束时间
     */
    public $EndTime;

    /**
     * @var integer 录制模式
     */
    public $EventId;

    /**
     * @var string 本录制片段对应的录制文件URL
     */
    public $VideoUrl;

    /**
     * @var integer 本录制片段当前的录制状态
     */
    public $RecordStatus;

    /**
     * @var integer 场景ID
     */
    public $SceneId;

    /**
     * @var integer 告警ID
     */
    public $WarnId;

    /**
     * @var string 录制id，NVR下属设备有效
     */
    public $RecordId;

    /**
     * @param string $RecordTaskId 录像任务ID
     * @param string $RecordPlanId 录制计划ID
     * @param integer $StartTime 本录制片段开始时间
     * @param integer $EndTime 本录制片段结束时间
     * @param integer $EventId 录制模式
     * @param string $VideoUrl 本录制片段对应的录制文件URL
     * @param integer $RecordStatus 本录制片段当前的录制状态
     * @param integer $SceneId 场景ID
     * @param integer $WarnId 告警ID
     * @param string $RecordId 录制id，NVR下属设备有效
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
        if (array_key_exists("RecordTaskId",$param) and $param["RecordTaskId"] !== null) {
            $this->RecordTaskId = $param["RecordTaskId"];
        }

        if (array_key_exists("RecordPlanId",$param) and $param["RecordPlanId"] !== null) {
            $this->RecordPlanId = $param["RecordPlanId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("WarnId",$param) and $param["WarnId"] !== null) {
            $this->WarnId = $param["WarnId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
