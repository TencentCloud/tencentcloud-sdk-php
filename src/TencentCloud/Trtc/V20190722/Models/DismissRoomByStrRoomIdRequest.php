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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DismissRoomByStrRoomId请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的SDKAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SDKAppId。
 * @method string getRoomId() 获取字符串类型房间号。
本接口仅支持解散字符串类型房间号，如需解散数字类型房间号，请使用：DismissRoom
 * @method void setRoomId(string $RoomId) 设置字符串类型房间号。
本接口仅支持解散字符串类型房间号，如需解散数字类型房间号，请使用：DismissRoom
 */
class DismissRoomByStrRoomIdRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SDKAppId。
     */
    public $SdkAppId;

    /**
     * @var string 字符串类型房间号。
本接口仅支持解散字符串类型房间号，如需解散数字类型房间号，请使用：DismissRoom
     */
    public $RoomId;

    /**
     * @param integer $SdkAppId TRTC的SDKAppId。
     * @param string $RoomId 字符串类型房间号。
本接口仅支持解散字符串类型房间号，如需解散数字类型房间号，请使用：DismissRoom
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
    }
}
