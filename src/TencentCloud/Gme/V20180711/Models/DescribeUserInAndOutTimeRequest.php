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
 * DescribeUserInAndOutTime请求参数结构体
 *
 * @method integer getBizId() 获取应用ID
 * @method void setBizId(integer $BizId) 设置应用ID
 * @method integer getRoomId() 获取房间ID
 * @method void setRoomId(integer $RoomId) 设置房间ID
 * @method integer getUserId() 获取用户ID
 * @method void setUserId(integer $UserId) 设置用户ID
 * @method string getUserIdStr() 获取字符串类型用户ID
 * @method void setUserIdStr(string $UserIdStr) 设置字符串类型用户ID
 * @method string getRoomIdStr() 获取字符串类型房间ID
 * @method void setRoomIdStr(string $RoomIdStr) 设置字符串类型房间ID
 */
class DescribeUserInAndOutTimeRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $BizId;

    /**
     * @var integer 房间ID
     */
    public $RoomId;

    /**
     * @var integer 用户ID
     */
    public $UserId;

    /**
     * @var string 字符串类型用户ID
     */
    public $UserIdStr;

    /**
     * @var string 字符串类型房间ID
     */
    public $RoomIdStr;

    /**
     * @param integer $BizId 应用ID
     * @param integer $RoomId 房间ID
     * @param integer $UserId 用户ID
     * @param string $UserIdStr 字符串类型用户ID
     * @param string $RoomIdStr 字符串类型房间ID
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserIdStr",$param) and $param["UserIdStr"] !== null) {
            $this->UserIdStr = $param["UserIdStr"];
        }

        if (array_key_exists("RoomIdStr",$param) and $param["RoomIdStr"] !== null) {
            $this->RoomIdStr = $param["RoomIdStr"];
        }
    }
}
