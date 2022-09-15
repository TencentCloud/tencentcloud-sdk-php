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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC推流进房信息
 *
 * @method string getSign() 获取签名。
 * @method void setSign(string $Sign) 设置签名。
 * @method string getRoomId() 获取房间号。
 * @method void setRoomId(string $RoomId) 设置房间号。
 * @method string getSdkAppId() 获取推流应用ID。
 * @method void setSdkAppId(string $SdkAppId) 设置推流应用ID。
 * @method string getUserId() 获取用户唯一标识。
 * @method void setUserId(string $UserId) 设置用户唯一标识。
 */
class TRTCJoinRoomInput extends AbstractModel
{
    /**
     * @var string 签名。
     */
    public $Sign;

    /**
     * @var string 房间号。
     */
    public $RoomId;

    /**
     * @var string 推流应用ID。
     */
    public $SdkAppId;

    /**
     * @var string 用户唯一标识。
     */
    public $UserId;

    /**
     * @param string $Sign 签名。
     * @param string $RoomId 房间号。
     * @param string $SdkAppId 推流应用ID。
     * @param string $UserId 用户唯一标识。
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
        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
