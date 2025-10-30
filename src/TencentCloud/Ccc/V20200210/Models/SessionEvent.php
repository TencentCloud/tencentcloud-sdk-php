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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通话事件
 *
 * @method integer getTimestamp() 获取事件时间戳，Unix 秒级时间戳
 * @method void setTimestamp(integer $Timestamp) 设置事件时间戳，Unix 秒级时间戳
 * @method string getEventType() 获取事件类型，目前支持 StaffHold StaffUnhold StaffMute StaffUnmute
 * @method void setEventType(string $EventType) 设置事件类型，目前支持 StaffHold StaffUnhold StaffMute StaffUnmute
 * @method EventStaffDetail getStaffEventDetail() 获取座席相关事件详情
 * @method void setStaffEventDetail(EventStaffDetail $StaffEventDetail) 设置座席相关事件详情
 */
class SessionEvent extends AbstractModel
{
    /**
     * @var integer 事件时间戳，Unix 秒级时间戳
     */
    public $Timestamp;

    /**
     * @var string 事件类型，目前支持 StaffHold StaffUnhold StaffMute StaffUnmute
     */
    public $EventType;

    /**
     * @var EventStaffDetail 座席相关事件详情
     */
    public $StaffEventDetail;

    /**
     * @param integer $Timestamp 事件时间戳，Unix 秒级时间戳
     * @param string $EventType 事件类型，目前支持 StaffHold StaffUnhold StaffMute StaffUnmute
     * @param EventStaffDetail $StaffEventDetail 座席相关事件详情
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("StaffEventDetail",$param) and $param["StaffEventDetail"] !== null) {
            $this->StaffEventDetail = new EventStaffDetail();
            $this->StaffEventDetail->deserialize($param["StaffEventDetail"]);
        }
    }
}
