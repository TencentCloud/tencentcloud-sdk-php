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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC伴生录制信息。
 *
 * @method integer getSdkAppId() 获取TRTC 应用 ID。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC 应用 ID。
 * @method string getRoomId() 获取TRTC 房间 ID。
 * @method void setRoomId(string $RoomId) 设置TRTC 房间 ID。
 * @method string getTaskId() 获取录制任务 ID。
 * @method void setTaskId(string $TaskId) 设置录制任务 ID。
 * @method array getUserIds() 获取参与录制的用户 ID 列表。
 * @method void setUserIds(array $UserIds) 设置参与录制的用户 ID 列表。
 */
class TrtcRecordInfo extends AbstractModel
{
    /**
     * @var integer TRTC 应用 ID。
     */
    public $SdkAppId;

    /**
     * @var string TRTC 房间 ID。
     */
    public $RoomId;

    /**
     * @var string 录制任务 ID。
     */
    public $TaskId;

    /**
     * @var array 参与录制的用户 ID 列表。
     */
    public $UserIds;

    /**
     * @param integer $SdkAppId TRTC 应用 ID。
     * @param string $RoomId TRTC 房间 ID。
     * @param string $TaskId 录制任务 ID。
     * @param array $UserIds 参与录制的用户 ID 列表。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
