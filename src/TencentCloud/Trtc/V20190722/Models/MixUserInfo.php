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
 * TRTC用户参数。
 *
 * @method string getUserId() 获取用户ID。
 * @method void setUserId(string $UserId) 设置用户ID。
 * @method string getRoomId() 获取动态布局时房间信息必须和主房间信息保持一致，自定义布局时房间信息必须和MixLayoutList中对应用户的房间信息保持一致，不填时默认与主房间信息一致。
 * @method void setRoomId(string $RoomId) 设置动态布局时房间信息必须和主房间信息保持一致，自定义布局时房间信息必须和MixLayoutList中对应用户的房间信息保持一致，不填时默认与主房间信息一致。
 * @method integer getRoomIdType() 获取房间号类型，0为整形房间号，1为字符串房间号。
 * @method void setRoomIdType(integer $RoomIdType) 设置房间号类型，0为整形房间号，1为字符串房间号。
 */
class MixUserInfo extends AbstractModel
{
    /**
     * @var string 用户ID。
     */
    public $UserId;

    /**
     * @var string 动态布局时房间信息必须和主房间信息保持一致，自定义布局时房间信息必须和MixLayoutList中对应用户的房间信息保持一致，不填时默认与主房间信息一致。
     */
    public $RoomId;

    /**
     * @var integer 房间号类型，0为整形房间号，1为字符串房间号。
     */
    public $RoomIdType;

    /**
     * @param string $UserId 用户ID。
     * @param string $RoomId 动态布局时房间信息必须和主房间信息保持一致，自定义布局时房间信息必须和MixLayoutList中对应用户的房间信息保持一致，不填时默认与主房间信息一致。
     * @param integer $RoomIdType 房间号类型，0为整形房间号，1为字符串房间号。
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }
    }
}
