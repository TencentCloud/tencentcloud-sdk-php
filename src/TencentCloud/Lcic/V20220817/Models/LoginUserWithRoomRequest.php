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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoginUserWithRoom请求参数结构体
 *
 * @method string getUserId() 获取<p>注册获取的用户id。</p>
 * @method void setUserId(string $UserId) 设置<p>注册获取的用户id。</p>
 * @method integer getRoomId() 获取<p>课堂 ID</p>
 * @method void setRoomId(integer $RoomId) 设置<p>课堂 ID</p>
 */
class LoginUserWithRoomRequest extends AbstractModel
{
    /**
     * @var string <p>注册获取的用户id。</p>
     */
    public $UserId;

    /**
     * @var integer <p>课堂 ID</p>
     */
    public $RoomId;

    /**
     * @param string $UserId <p>注册获取的用户id。</p>
     * @param integer $RoomId <p>课堂 ID</p>
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
    }
}
