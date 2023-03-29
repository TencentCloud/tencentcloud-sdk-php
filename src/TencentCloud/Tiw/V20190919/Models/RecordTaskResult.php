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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时录制结果
 *
 * @method string getFinishReason() 获取AUTO - 自动停止录制， USER_CALL - 用户主动调用停止录制
 * @method void setFinishReason(string $FinishReason) 设置AUTO - 自动停止录制， USER_CALL - 用户主动调用停止录制
 * @method integer getExceptionCnt() 获取异常数
 * @method void setExceptionCnt(integer $ExceptionCnt) 设置异常数
 * @method integer getRoomId() 获取房间号
 * @method void setRoomId(integer $RoomId) 设置房间号
 * @method string getGroupId() 获取分组
 * @method void setGroupId(string $GroupId) 设置分组
 * @method integer getRecordStartTime() 获取录制真实开始时间
 * @method void setRecordStartTime(integer $RecordStartTime) 设置录制真实开始时间
 * @method integer getRecordStopTime() 获取录制结束时间
 * @method void setRecordStopTime(integer $RecordStopTime) 设置录制结束时间
 * @method integer getTotalTime() 获取录制总时长
 * @method void setTotalTime(integer $TotalTime) 设置录制总时长
 * @method array getVideoInfos() 获取视频信息列表
 * @method void setVideoInfos(array $VideoInfos) 设置视频信息列表
 * @method array getOmittedDurations() 获取被忽略的视频时间段
 * @method void setOmittedDurations(array $OmittedDurations) 设置被忽略的视频时间段
 * @method string getDetails() 获取详情
 * @method void setDetails(string $Details) 设置详情
 * @method integer getErrorCode() 获取任务失败错误码
 * @method void setErrorCode(integer $ErrorCode) 设置任务失败错误码
 * @method string getErrorMsg() 获取错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
 */
class RecordTaskResult extends AbstractModel
{
    /**
     * @var string AUTO - 自动停止录制， USER_CALL - 用户主动调用停止录制
     */
    public $FinishReason;

    /**
     * @var integer 异常数
     */
    public $ExceptionCnt;

    /**
     * @var integer 房间号
     */
    public $RoomId;

    /**
     * @var string 分组
     */
    public $GroupId;

    /**
     * @var integer 录制真实开始时间
     */
    public $RecordStartTime;

    /**
     * @var integer 录制结束时间
     */
    public $RecordStopTime;

    /**
     * @var integer 录制总时长
     */
    public $TotalTime;

    /**
     * @var array 视频信息列表
     */
    public $VideoInfos;

    /**
     * @var array 被忽略的视频时间段
     */
    public $OmittedDurations;

    /**
     * @var string 详情
     */
    public $Details;

    /**
     * @var integer 任务失败错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误信息
     */
    public $ErrorMsg;

    /**
     * @param string $FinishReason AUTO - 自动停止录制， USER_CALL - 用户主动调用停止录制
     * @param integer $ExceptionCnt 异常数
     * @param integer $RoomId 房间号
     * @param string $GroupId 分组
     * @param integer $RecordStartTime 录制真实开始时间
     * @param integer $RecordStopTime 录制结束时间
     * @param integer $TotalTime 录制总时长
     * @param array $VideoInfos 视频信息列表
     * @param array $OmittedDurations 被忽略的视频时间段
     * @param string $Details 详情
     * @param integer $ErrorCode 任务失败错误码
     * @param string $ErrorMsg 错误信息
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("ExceptionCnt",$param) and $param["ExceptionCnt"] !== null) {
            $this->ExceptionCnt = $param["ExceptionCnt"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordStopTime",$param) and $param["RecordStopTime"] !== null) {
            $this->RecordStopTime = $param["RecordStopTime"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new VideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("OmittedDurations",$param) and $param["OmittedDurations"] !== null) {
            $this->OmittedDurations = [];
            foreach ($param["OmittedDurations"] as $key => $value){
                $obj = new OmittedDuration();
                $obj->deserialize($value);
                array_push($this->OmittedDurations, $obj);
            }
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = $param["Details"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
