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
 * 正在运行的任务列表项
 *
 * @method integer getSdkAppID() 获取应用SdkAppID
 * @method void setSdkAppID(integer $SdkAppID) 设置应用SdkAppID
 * @method string getTaskID() 获取任务ID
 * @method void setTaskID(string $TaskID) 设置任务ID
 * @method string getTaskType() 获取任务类型
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
 * @method void setTaskType(string $TaskType) 设置任务类型
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getCancelTime() 获取任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCancelTime(string $CancelTime) 设置任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态
- QUEUED: 任务正在排队等待执行中
- PROCESSING: 任务正在执行中 
- FINISHED: 任务已完成
 * @method void setStatus(string $Status) 设置任务状态
- QUEUED: 任务正在排队等待执行中
- PROCESSING: 任务正在执行中 
- FINISHED: 任务已完成
 * @method integer getProgress() 获取任务当前进度
 * @method void setProgress(integer $Progress) 设置任务当前进度
 * @method string getFileURL() 获取转码任务中转码文件的原始URL
此参数只有任务类型为TranscodeH5、TranscodeJPG类型时才会有有效值。其他任务类型为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileURL(string $FileURL) 设置转码任务中转码文件的原始URL
此参数只有任务类型为TranscodeH5、TranscodeJPG类型时才会有有效值。其他任务类型为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoomID() 获取房间号

当任务类型为TranscodeH5、TranscodeJPG时，房间号为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomID(integer $RoomID) 设置房间号

当任务类型为TranscodeH5、TranscodeJPG时，房间号为0。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunningTaskItem extends AbstractModel
{
    /**
     * @var integer 应用SdkAppID
     */
    public $SdkAppID;

    /**
     * @var string 任务ID
     */
    public $TaskID;

    /**
     * @var string 任务类型
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
     */
    public $TaskType;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CancelTime;

    /**
     * @var string 任务状态
- QUEUED: 任务正在排队等待执行中
- PROCESSING: 任务正在执行中 
- FINISHED: 任务已完成
     */
    public $Status;

    /**
     * @var integer 任务当前进度
     */
    public $Progress;

    /**
     * @var string 转码任务中转码文件的原始URL
此参数只有任务类型为TranscodeH5、TranscodeJPG类型时才会有有效值。其他任务类型为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileURL;

    /**
     * @var integer 房间号

当任务类型为TranscodeH5、TranscodeJPG时，房间号为0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomID;

    /**
     * @param integer $SdkAppID 应用SdkAppID
     * @param string $TaskID 任务ID
     * @param string $TaskType 任务类型
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
     * @param string $CreateTime 任务创建时间
     * @param string $CancelTime 任务取消时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
- QUEUED: 任务正在排队等待执行中
- PROCESSING: 任务正在执行中 
- FINISHED: 任务已完成
     * @param integer $Progress 任务当前进度
     * @param string $FileURL 转码任务中转码文件的原始URL
此参数只有任务类型为TranscodeH5、TranscodeJPG类型时才会有有效值。其他任务类型为空字符串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoomID 房间号

当任务类型为TranscodeH5、TranscodeJPG时，房间号为0。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SdkAppID",$param) and $param["SdkAppID"] !== null) {
            $this->SdkAppID = $param["SdkAppID"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CancelTime",$param) and $param["CancelTime"] !== null) {
            $this->CancelTime = $param["CancelTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }

        if (array_key_exists("RoomID",$param) and $param["RoomID"] !== null) {
            $this->RoomID = $param["RoomID"];
        }
    }
}
