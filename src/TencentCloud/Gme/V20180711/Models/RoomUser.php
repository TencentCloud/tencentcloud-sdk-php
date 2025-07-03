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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 房间内用户信息
 *
 * @method integer getRoomId() 获取房间id
 * @method void setRoomId(integer $RoomId) 设置房间id
 * @method array getUins() 获取房间里用户uin列表
 * @method void setUins(array $Uins) 设置房间里用户uin列表
 * @method string getStrRoomId() 获取字符串房间id
 * @method void setStrRoomId(string $StrRoomId) 设置字符串房间id
 * @method array getStrUins() 获取房间里用户字符串uin列表
 * @method void setStrUins(array $StrUins) 设置房间里用户字符串uin列表
 */
class RoomUser extends AbstractModel
{
    /**
     * @var integer 房间id
     */
    public $RoomId;

    /**
     * @var array 房间里用户uin列表
     */
    public $Uins;

    /**
     * @var string 字符串房间id
     */
    public $StrRoomId;

    /**
     * @var array 房间里用户字符串uin列表
     */
    public $StrUins;

    /**
     * @param integer $RoomId 房间id
     * @param array $Uins 房间里用户uin列表
     * @param string $StrRoomId 字符串房间id
     * @param array $StrUins 房间里用户字符串uin列表
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

        if (array_key_exists("Uins",$param) and $param["Uins"] !== null) {
            $this->Uins = $param["Uins"];
        }

        if (array_key_exists("StrRoomId",$param) and $param["StrRoomId"] !== null) {
            $this->StrRoomId = $param["StrRoomId"];
        }

        if (array_key_exists("StrUins",$param) and $param["StrUins"] !== null) {
            $this->StrUins = $param["StrUins"];
        }
    }
}
