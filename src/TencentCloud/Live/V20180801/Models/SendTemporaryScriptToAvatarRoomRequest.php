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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendTemporaryScriptToAvatarRoom请求参数结构体
 *
 * @method string getRoomId() 获取数字人直播间 ID。
 * @method void setRoomId(string $RoomId) 设置数字人直播间 ID。
 * @method string getContent() 获取临时话术，最长不超过500字。
 * @method void setContent(string $Content) 设置临时话术，最长不超过500字。
 */
class SendTemporaryScriptToAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string 数字人直播间 ID。
     */
    public $RoomId;

    /**
     * @var string 临时话术，最长不超过500字。
     */
    public $Content;

    /**
     * @param string $RoomId 数字人直播间 ID。
     * @param string $Content 临时话术，最长不超过500字。
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
