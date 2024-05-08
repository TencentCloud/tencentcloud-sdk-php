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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTRTCSignaturesWithRoomId请求参数结构体
 *
 * @method array getTRTCUserIds() 获取TRTC进房间的用户名称数组，数组元素不可重复，最长不超过 10 个。
 * @method void setTRTCUserIds(array $TRTCUserIds) 设置TRTC进房间的用户名称数组，数组元素不可重复，最长不超过 10 个。
 * @method string getRoomId() 获取房间id
 * @method void setRoomId(string $RoomId) 设置房间id
 */
class CreateTRTCSignaturesWithRoomIdRequest extends AbstractModel
{
    /**
     * @var array TRTC进房间的用户名称数组，数组元素不可重复，最长不超过 10 个。
     */
    public $TRTCUserIds;

    /**
     * @var string 房间id
     */
    public $RoomId;

    /**
     * @param array $TRTCUserIds TRTC进房间的用户名称数组，数组元素不可重复，最长不超过 10 个。
     * @param string $RoomId 房间id
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
        if (array_key_exists("TRTCUserIds",$param) and $param["TRTCUserIds"] !== null) {
            $this->TRTCUserIds = $param["TRTCUserIds"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }
    }
}
