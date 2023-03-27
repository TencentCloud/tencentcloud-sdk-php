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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志查询里返回的白板房间数据
 *
 * @method string getRoomId() 获取房间ID
 * @method void setRoomId(string $RoomId) 设置房间ID
 * @method integer getStartTime() 获取房间在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
 * @method void setStartTime(integer $StartTime) 设置房间在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
 * @method integer getEndTime() 获取房间在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
 * @method void setEndTime(integer $EndTime) 设置房间在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
 * @method integer getUserNumber() 获取房间里成员数
 * @method void setUserNumber(integer $UserNumber) 设置房间里成员数
 */
class RoomListItem extends AbstractModel
{
    /**
     * @var string 房间ID
     */
    public $RoomId;

    /**
     * @var integer 房间在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
     */
    public $StartTime;

    /**
     * @var integer 房间在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
     */
    public $EndTime;

    /**
     * @var integer 房间里成员数
     */
    public $UserNumber;

    /**
     * @param string $RoomId 房间ID
     * @param integer $StartTime 房间在查询时间段内最早出现的时间，Unix时间戳，单位毫秒
     * @param integer $EndTime 房间在查询时间段内最晚出现的时间，Unix时间戳，单位毫秒
     * @param integer $UserNumber 房间里成员数
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserNumber",$param) and $param["UserNumber"] !== null) {
            $this->UserNumber = $param["UserNumber"];
        }
    }
}
