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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制流信息
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getStopTime() 获取结束时间
 * @method void setStopTime(integer $StopTime) 设置结束时间
 * @method integer getDuration() 获取总时长
 * @method void setDuration(integer $Duration) 设置总时长
 * @method string getFileFormat() 获取文件格式
 * @method void setFileFormat(string $FileFormat) 设置文件格式
 * @method string getRecordUrl() 获取流url
 * @method void setRecordUrl(string $RecordUrl) 设置流url
 * @method integer getRecordSize() 获取流大小
 * @method void setRecordSize(integer $RecordSize) 设置流大小
 * @method string getVideoId() 获取流ID
 * @method void setVideoId(string $VideoId) 设置流ID
 * @method string getRole() 获取流类型
 * @method void setRole(string $Role) 设置流类型
 */
class SingleStreamInfo extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $StopTime;

    /**
     * @var integer 总时长
     */
    public $Duration;

    /**
     * @var string 文件格式
     */
    public $FileFormat;

    /**
     * @var string 流url
     */
    public $RecordUrl;

    /**
     * @var integer 流大小
     */
    public $RecordSize;

    /**
     * @var string 流ID
     */
    public $VideoId;

    /**
     * @var string 流类型
     */
    public $Role;

    /**
     * @param string $UserId 用户ID
     * @param integer $StartTime 开始时间
     * @param integer $StopTime 结束时间
     * @param integer $Duration 总时长
     * @param string $FileFormat 文件格式
     * @param string $RecordUrl 流url
     * @param integer $RecordSize 流大小
     * @param string $VideoId 流ID
     * @param string $Role 流类型
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FileFormat",$param) and $param["FileFormat"] !== null) {
            $this->FileFormat = $param["FileFormat"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("RecordSize",$param) and $param["RecordSize"] !== null) {
            $this->RecordSize = $param["RecordSize"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
