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
 * 白板推流任务结果
 *
 * @method string getFinishReason() 获取AUTO - 自动停止推流， USER_CALL - 用户主动调用停止推流
 * @method void setFinishReason(string $FinishReason) 设置AUTO - 自动停止推流， USER_CALL - 用户主动调用停止推流
 * @method integer getExceptionCnt() 获取异常数
 * @method void setExceptionCnt(integer $ExceptionCnt) 设置异常数
 * @method integer getRoomId() 获取房间号
 * @method void setRoomId(integer $RoomId) 设置房间号
 * @method string getGroupId() 获取IM群组ID
 * @method void setGroupId(string $GroupId) 设置IM群组ID
 * @method integer getPushStartTime() 获取推流真实开始时间
 * @method void setPushStartTime(integer $PushStartTime) 设置推流真实开始时间
 * @method integer getPushStopTime() 获取推流结束时间
 * @method void setPushStopTime(integer $PushStopTime) 设置推流结束时间
 * @method integer getIMSyncTime() 获取白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
 * @method void setIMSyncTime(integer $IMSyncTime) 设置白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
 * @method integer getErrorCode() 获取任务失败错误码
 * @method void setErrorCode(integer $ErrorCode) 设置任务失败错误码
 * @method string getErrorMsg() 获取错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息
 */
class WhiteboardPushResult extends AbstractModel
{
    /**
     * @var string AUTO - 自动停止推流， USER_CALL - 用户主动调用停止推流
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
     * @var string IM群组ID
     */
    public $GroupId;

    /**
     * @var integer 推流真实开始时间
     */
    public $PushStartTime;

    /**
     * @var integer 推流结束时间
     */
    public $PushStopTime;

    /**
     * @var integer 白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
     */
    public $IMSyncTime;

    /**
     * @var integer 任务失败错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误信息
     */
    public $ErrorMsg;

    /**
     * @param string $FinishReason AUTO - 自动停止推流， USER_CALL - 用户主动调用停止推流
     * @param integer $ExceptionCnt 异常数
     * @param integer $RoomId 房间号
     * @param string $GroupId IM群组ID
     * @param integer $PushStartTime 推流真实开始时间
     * @param integer $PushStopTime 推流结束时间
     * @param integer $IMSyncTime 白板推流首帧对应的IM时间戳，可用于录制回放时IM聊天消息与白板推流视频进行同步对时。
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

        if (array_key_exists("PushStartTime",$param) and $param["PushStartTime"] !== null) {
            $this->PushStartTime = $param["PushStartTime"];
        }

        if (array_key_exists("PushStopTime",$param) and $param["PushStopTime"] !== null) {
            $this->PushStopTime = $param["PushStopTime"];
        }

        if (array_key_exists("IMSyncTime",$param) and $param["IMSyncTime"] !== null) {
            $this->IMSyncTime = $param["IMSyncTime"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
