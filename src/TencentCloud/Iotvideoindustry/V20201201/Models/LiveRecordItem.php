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
 * 直播录制详情item
 *
 * @method integer getIntID() 获取录制文件自增ID
 * @method void setIntID(integer $IntID) 设置录制文件自增ID
 * @method string getLiveChannelId() 获取直播频道ID
 * @method void setLiveChannelId(string $LiveChannelId) 设置直播频道ID
 * @method integer getExpectDeleteTime() 获取过期时间
 * @method void setExpectDeleteTime(integer $ExpectDeleteTime) 设置过期时间
 * @method integer getRecordTimeLen() 获取录制时长
 * @method void setRecordTimeLen(integer $RecordTimeLen) 设置录制时长
 * @method integer getFileSize() 获取文件大小
 * @method void setFileSize(integer $FileSize) 设置文件大小
 * @method string getVideoUrl() 获取录制文件url
 * @method void setVideoUrl(string $VideoUrl) 设置录制文件url
 * @method string getRecordPlanId() 获取录制计划ID
 * @method void setRecordPlanId(string $RecordPlanId) 设置录制计划ID
 * @method integer getStartTime() 获取录制开始时间
 * @method void setStartTime(integer $StartTime) 设置录制开始时间
 * @method integer getEndTime() 获取录制结束时间
 * @method void setEndTime(integer $EndTime) 设置录制结束时间
 */
class LiveRecordItem extends AbstractModel
{
    /**
     * @var integer 录制文件自增ID
     */
    public $IntID;

    /**
     * @var string 直播频道ID
     */
    public $LiveChannelId;

    /**
     * @var integer 过期时间
     */
    public $ExpectDeleteTime;

    /**
     * @var integer 录制时长
     */
    public $RecordTimeLen;

    /**
     * @var integer 文件大小
     */
    public $FileSize;

    /**
     * @var string 录制文件url
     */
    public $VideoUrl;

    /**
     * @var string 录制计划ID
     */
    public $RecordPlanId;

    /**
     * @var integer 录制开始时间
     */
    public $StartTime;

    /**
     * @var integer 录制结束时间
     */
    public $EndTime;

    /**
     * @param integer $IntID 录制文件自增ID
     * @param string $LiveChannelId 直播频道ID
     * @param integer $ExpectDeleteTime 过期时间
     * @param integer $RecordTimeLen 录制时长
     * @param integer $FileSize 文件大小
     * @param string $VideoUrl 录制文件url
     * @param string $RecordPlanId 录制计划ID
     * @param integer $StartTime 录制开始时间
     * @param integer $EndTime 录制结束时间
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
        if (array_key_exists("IntID",$param) and $param["IntID"] !== null) {
            $this->IntID = $param["IntID"];
        }

        if (array_key_exists("LiveChannelId",$param) and $param["LiveChannelId"] !== null) {
            $this->LiveChannelId = $param["LiveChannelId"];
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

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
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
    }
}
