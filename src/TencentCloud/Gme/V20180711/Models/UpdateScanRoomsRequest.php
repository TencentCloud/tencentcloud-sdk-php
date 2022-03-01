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
 * UpdateScanRooms请求参数结构体
 *
 * @method integer getBizId() 获取应用ID
 * @method void setBizId(integer $BizId) 设置应用ID
 * @method string getRoomIdString() 获取字符串房间号，逗号分隔
 * @method void setRoomIdString(string $RoomIdString) 设置字符串房间号，逗号分隔
 * @method array getRoomIdRegex() 获取正则表达式房间号，["^6.*"]6开头的房间号
 * @method void setRoomIdRegex(array $RoomIdRegex) 设置正则表达式房间号，["^6.*"]6开头的房间号
 */
class UpdateScanRoomsRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $BizId;

    /**
     * @var string 字符串房间号，逗号分隔
     */
    public $RoomIdString;

    /**
     * @var array 正则表达式房间号，["^6.*"]6开头的房间号
     */
    public $RoomIdRegex;

    /**
     * @param integer $BizId 应用ID
     * @param string $RoomIdString 字符串房间号，逗号分隔
     * @param array $RoomIdRegex 正则表达式房间号，["^6.*"]6开头的房间号
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

        if (array_key_exists("RoomIdString",$param) and $param["RoomIdString"] !== null) {
            $this->RoomIdString = $param["RoomIdString"];
        }

        if (array_key_exists("RoomIdRegex",$param) and $param["RoomIdRegex"] !== null) {
            $this->RoomIdRegex = $param["RoomIdRegex"];
        }
    }
}
