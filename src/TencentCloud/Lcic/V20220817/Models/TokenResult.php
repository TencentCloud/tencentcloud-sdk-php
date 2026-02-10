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
 * token结果
 *
 * @method integer getRoomId() 获取<p>房间id</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间id</p>
 * @method string getToken() 获取<p>该房间信令回放的token</p>
 * @method void setToken(string $Token) 设置<p>该房间信令回放的token</p>
 */
class TokenResult extends AbstractModel
{
    /**
     * @var integer <p>房间id</p>
     */
    public $RoomId;

    /**
     * @var string <p>该房间信令回放的token</p>
     */
    public $Token;

    /**
     * @param integer $RoomId <p>房间id</p>
     * @param string $Token <p>该房间信令回放的token</p>
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

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
