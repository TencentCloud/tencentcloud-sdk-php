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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播会员用户信息
 *
 * @method string getRoomId() 获取房间标识。
 * @method void setRoomId(string $RoomId) 设置房间标识。
 * @method string getLiveVipEndTime() 获取直播会员结束时间。
 * @method void setLiveVipEndTime(string $LiveVipEndTime) 设置直播会员结束时间。
 * @method string getLiveVipStatus() 获取会员生效状态
<li>Valid：生效</li><li>Invalid：无效</li>
 * @method void setLiveVipStatus(string $LiveVipStatus) 设置会员生效状态
<li>Valid：生效</li><li>Invalid：无效</li>
 */
class LiveVipUserInfo extends AbstractModel
{
    /**
     * @var string 房间标识。
     */
    public $RoomId;

    /**
     * @var string 直播会员结束时间。
     */
    public $LiveVipEndTime;

    /**
     * @var string 会员生效状态
<li>Valid：生效</li><li>Invalid：无效</li>
     */
    public $LiveVipStatus;

    /**
     * @param string $RoomId 房间标识。
     * @param string $LiveVipEndTime 直播会员结束时间。
     * @param string $LiveVipStatus 会员生效状态
<li>Valid：生效</li><li>Invalid：无效</li>
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

        if (array_key_exists("LiveVipEndTime",$param) and $param["LiveVipEndTime"] !== null) {
            $this->LiveVipEndTime = $param["LiveVipEndTime"];
        }

        if (array_key_exists("LiveVipStatus",$param) and $param["LiveVipStatus"] !== null) {
            $this->LiveVipStatus = $param["LiveVipStatus"];
        }
    }
}
