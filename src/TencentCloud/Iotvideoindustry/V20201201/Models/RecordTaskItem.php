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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普通设备的录像详情
 *
 * @method string getRecordTaskId() 获取<p>录像任务ID</p>
 * @method void setRecordTaskId(string $RecordTaskId) 设置<p>录像任务ID</p>
 * @method string getRecordPlanId() 获取<p>录制计划ID</p>
 * @method void setRecordPlanId(string $RecordPlanId) 设置<p>录制计划ID</p>
 * @method integer getStartTime() 获取<p>本录制片段开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>本录制片段开始时间</p>
 * @method integer getEndTime() 获取<p>本录制片段结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>本录制片段结束时间</p>
 * @method integer getEventId() 获取<p>录制模式</p>
 * @method void setEventId(integer $EventId) 设置<p>录制模式</p>
 * @method string getVideoUrl() 获取<p>本录制片段对应的录制文件URL</p>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>本录制片段对应的录制文件URL</p>
 * @method integer getRecordStatus() 获取<p>本录制片段当前的录制状态</p>
 * @method void setRecordStatus(integer $RecordStatus) 设置<p>本录制片段当前的录制状态</p>
 * @method integer getSceneId() 获取<p>场景ID</p>
 * @method void setSceneId(integer $SceneId) 设置<p>场景ID</p>
 * @method integer getWarnId() 获取<p>告警ID</p>
 * @method void setWarnId(integer $WarnId) 设置<p>告警ID</p>
 * @method string getRecordId() 获取<p>录制id，NVR下属设备有效</p>
 * @method void setRecordId(string $RecordId) 设置<p>录制id，NVR下属设备有效</p>
 * @method integer getInitID() 获取<p>视频自增ID</p>
 * @method void setInitID(integer $InitID) 设置<p>视频自增ID</p>
 * @method integer getExpectDeleteTime() 获取<p>过期时间</p>
 * @method void setExpectDeleteTime(integer $ExpectDeleteTime) 设置<p>过期时间</p>
 * @method integer getRecordTimeLen() 获取<p>录制时长</p>
 * @method void setRecordTimeLen(integer $RecordTimeLen) 设置<p>录制时长</p>
 * @method integer getFileSize() 获取<p>文件大小</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小</p>
 */
class RecordTaskItem extends AbstractModel
{
    /**
     * @var string <p>录像任务ID</p>
     */
    public $RecordTaskId;

    /**
     * @var string <p>录制计划ID</p>
     */
    public $RecordPlanId;

    /**
     * @var integer <p>本录制片段开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>本录制片段结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>录制模式</p>
     */
    public $EventId;

    /**
     * @var string <p>本录制片段对应的录制文件URL</p>
     */
    public $VideoUrl;

    /**
     * @var integer <p>本录制片段当前的录制状态</p>
     */
    public $RecordStatus;

    /**
     * @var integer <p>场景ID</p>
     */
    public $SceneId;

    /**
     * @var integer <p>告警ID</p>
     */
    public $WarnId;

    /**
     * @var string <p>录制id，NVR下属设备有效</p>
     */
    public $RecordId;

    /**
     * @var integer <p>视频自增ID</p>
     */
    public $InitID;

    /**
     * @var integer <p>过期时间</p>
     */
    public $ExpectDeleteTime;

    /**
     * @var integer <p>录制时长</p>
     */
    public $RecordTimeLen;

    /**
     * @var integer <p>文件大小</p>
     */
    public $FileSize;

    /**
     * @param string $RecordTaskId <p>录像任务ID</p>
     * @param string $RecordPlanId <p>录制计划ID</p>
     * @param integer $StartTime <p>本录制片段开始时间</p>
     * @param integer $EndTime <p>本录制片段结束时间</p>
     * @param integer $EventId <p>录制模式</p>
     * @param string $VideoUrl <p>本录制片段对应的录制文件URL</p>
     * @param integer $RecordStatus <p>本录制片段当前的录制状态</p>
     * @param integer $SceneId <p>场景ID</p>
     * @param integer $WarnId <p>告警ID</p>
     * @param string $RecordId <p>录制id，NVR下属设备有效</p>
     * @param integer $InitID <p>视频自增ID</p>
     * @param integer $ExpectDeleteTime <p>过期时间</p>
     * @param integer $RecordTimeLen <p>录制时长</p>
     * @param integer $FileSize <p>文件大小</p>
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

        if (array_key_exists("InitID",$param) and $param["InitID"] !== null) {
            $this->InitID = $param["InitID"];
        }

        if (array_key_exists("ExpectDeleteTime",$param) and $param["ExpectDeleteTime"] !== null) {
            $this->ExpectDeleteTime = $param["ExpectDeleteTime"];
        }

        if (array_key_exists("RecordTimeLen",$param) and $param["RecordTimeLen"] !== null) {
            $this->RecordTimeLen = $param["RecordTimeLen"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
