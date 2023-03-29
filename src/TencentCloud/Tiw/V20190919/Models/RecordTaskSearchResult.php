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
 * 实时录制任务搜索结果
 *
 * @method string getTaskId() 获取任务唯一ID
 * @method void setTaskId(string $TaskId) 设置任务唯一ID
 * @method string getStatus() 获取实时录制任务状态
- PAUSED: 录制已暂停
- PREPARED: 录制在准备阶段
- RECORDING: 正在录制
- STOPPED：录制已停止
- FINISHED: 录制已结束
 * @method void setStatus(string $Status) 设置实时录制任务状态
- PAUSED: 录制已暂停
- PREPARED: 录制在准备阶段
- RECORDING: 正在录制
- STOPPED：录制已停止
- FINISHED: 录制已结束
 * @method integer getRoomId() 获取实时录制房间号
 * @method void setRoomId(integer $RoomId) 设置实时录制房间号
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method integer getSdkAppId() 获取用户应用SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置用户应用SdkAppId
 * @method RecordTaskResult getResult() 获取实时录制结果
 * @method void setResult(RecordTaskResult $Result) 设置实时录制结果
 */
class RecordTaskSearchResult extends AbstractModel
{
    /**
     * @var string 任务唯一ID
     */
    public $TaskId;

    /**
     * @var string 实时录制任务状态
- PAUSED: 录制已暂停
- PREPARED: 录制在准备阶段
- RECORDING: 正在录制
- STOPPED：录制已停止
- FINISHED: 录制已结束
     */
    public $Status;

    /**
     * @var integer 实时录制房间号
     */
    public $RoomId;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var integer 用户应用SdkAppId
     */
    public $SdkAppId;

    /**
     * @var RecordTaskResult 实时录制结果
     */
    public $Result;

    /**
     * @param string $TaskId 任务唯一ID
     * @param string $Status 实时录制任务状态
- PAUSED: 录制已暂停
- PREPARED: 录制在准备阶段
- RECORDING: 正在录制
- STOPPED：录制已停止
- FINISHED: 录制已结束
     * @param integer $RoomId 实时录制房间号
     * @param string $CreateTime 任务创建时间
     * @param integer $SdkAppId 用户应用SdkAppId
     * @param RecordTaskResult $Result 实时录制结果
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new RecordTaskResult();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
