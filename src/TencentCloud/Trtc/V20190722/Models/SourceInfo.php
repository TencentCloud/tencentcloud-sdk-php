<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 额外信息透传结构体（房间/主播/业务自定义），原样回带到回调
 *
 * @method string getRoomId() 获取<p>直播间 ID（用于结果透传与去重；数字房间号也用 string 传）</p>
 * @method void setRoomId(string $RoomId) 设置<p>直播间 ID（用于结果透传与去重；数字房间号也用 string 传）</p>
 * @method integer getRoomIdType() 获取<p>房间号类型</p><p>枚举值：</p><ul><li>0： 字符串房间号</li><li>1： 数字房间号</li></ul>
 * @method void setRoomIdType(integer $RoomIdType) 设置<p>房间号类型</p><p>枚举值：</p><ul><li>0： 字符串房间号</li><li>1： 数字房间号</li></ul>
 * @method string getUserId() 获取<p>主播/被审核方 ID</p>
 * @method void setUserId(string $UserId) 设置<p>主播/被审核方 ID</p>
 */
class SourceInfo extends AbstractModel
{
    /**
     * @var string <p>直播间 ID（用于结果透传与去重；数字房间号也用 string 传）</p>
     */
    public $RoomId;

    /**
     * @var integer <p>房间号类型</p><p>枚举值：</p><ul><li>0： 字符串房间号</li><li>1： 数字房间号</li></ul>
     */
    public $RoomIdType;

    /**
     * @var string <p>主播/被审核方 ID</p>
     */
    public $UserId;

    /**
     * @param string $RoomId <p>直播间 ID（用于结果透传与去重；数字房间号也用 string 传）</p>
     * @param integer $RoomIdType <p>房间号类型</p><p>枚举值：</p><ul><li>0： 字符串房间号</li><li>1： 数字房间号</li></ul>
     * @param string $UserId <p>主播/被审核方 ID</p>
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
