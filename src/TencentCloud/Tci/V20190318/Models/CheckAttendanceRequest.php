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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getFileContent() 获取输入数据
 * @method void setFileContent(string $FileContent) 设置输入数据
 * @method string getFileType() 获取输入类型，picture_url:图片，vod_url:视频文件
 * @method void setFileType(string $FileType) 设置输入类型，picture_url:图片，vod_url:视频文件
 * @method string getLibraryId() 获取人员库 ID
 * @method void setLibraryId(string $LibraryId) 设置人员库 ID
 * @method array getPersonIdSet() 获取人员 ID 列表
 * @method void setPersonIdSet(array $PersonIdSet) 设置人员 ID 列表
 * @method float getAttendanceThreshold() 获取确定出勤阀值；默认为0.92
 * @method void setAttendanceThreshold(float $AttendanceThreshold) 设置确定出勤阀值；默认为0.92
 * @method integer getEndTime() 获取考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900
 * @method void setEndTime(integer $EndTime) 设置考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900
 * @method integer getStartTime() 获取考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0
 * @method void setStartTime(integer $StartTime) 设置考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0
 * @method float getThreshold() 获取识别阈值；默认为0.7
 * @method void setThreshold(float $Threshold) 设置识别阈值；默认为0.7
 */

/**
 *CheckAttendance请求参数结构体
 */
class CheckAttendanceRequest extends AbstractModel
{
    /**
     * @var string 输入数据
     */
    public $FileContent;

    /**
     * @var string 输入类型，picture_url:图片，vod_url:视频文件
     */
    public $FileType;

    /**
     * @var string 人员库 ID
     */
    public $LibraryId;

    /**
     * @var array 人员 ID 列表
     */
    public $PersonIdSet;

    /**
     * @var float 确定出勤阀值；默认为0.92
     */
    public $AttendanceThreshold;

    /**
     * @var integer 考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900
     */
    public $EndTime;

    /**
     * @var integer 考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0
     */
    public $StartTime;

    /**
     * @var float 识别阈值；默认为0.7
     */
    public $Threshold;
    /**
     * @param string $FileContent 输入数据
     * @param string $FileType 输入类型，picture_url:图片，vod_url:视频文件
     * @param string $LibraryId 人员库 ID
     * @param array $PersonIdSet 人员 ID 列表
     * @param float $AttendanceThreshold 确定出勤阀值；默认为0.92
     * @param integer $EndTime 考勤结束时间（到视频的第几秒结束考勤），单位秒；默认为900
     * @param integer $StartTime 考勤开始时间（从视频的第几秒开始考勤），单位秒；默认为0
     * @param float $Threshold 识别阈值；默认为0.7
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("PersonIdSet",$param) and $param["PersonIdSet"] !== null) {
            $this->PersonIdSet = $param["PersonIdSet"];
        }

        if (array_key_exists("AttendanceThreshold",$param) and $param["AttendanceThreshold"] !== null) {
            $this->AttendanceThreshold = $param["AttendanceThreshold"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
