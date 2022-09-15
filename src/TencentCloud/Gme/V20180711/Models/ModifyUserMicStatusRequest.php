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
 * ModifyUserMicStatus请求参数结构体
 *
 * @method integer getBizId() 获取应用ID
 * @method void setBizId(integer $BizId) 设置应用ID
 * @method string getRoomId() 获取房间ID
 * @method void setRoomId(string $RoomId) 设置房间ID
 * @method array getUsers() 获取用户麦克风状态，数组长度不超过20
 * @method void setUsers(array $Users) 设置用户麦克风状态，数组长度不超过20
 */
class ModifyUserMicStatusRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $BizId;

    /**
     * @var string 房间ID
     */
    public $RoomId;

    /**
     * @var array 用户麦克风状态，数组长度不超过20
     */
    public $Users;

    /**
     * @param integer $BizId 应用ID
     * @param string $RoomId 房间ID
     * @param array $Users 用户麦克风状态，数组长度不超过20
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new UserMicStatus();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }
    }
}
