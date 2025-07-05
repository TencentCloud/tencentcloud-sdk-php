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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RechargeVip请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getRoomId() 获取房间Id。
 * @method void setRoomId(string $RoomId) 设置房间Id。
 * @method integer getVipDays() 获取充值会员天数。(取值有：31、93、186、372)
 * @method void setVipDays(integer $VipDays) 设置充值会员天数。(取值有：31、93、186、372)
 * @method string getAnchorId() 获取主播id。
 * @method void setAnchorId(string $AnchorId) 设置主播id。
 */
class RechargeVipRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var string 房间Id。
     */
    public $RoomId;

    /**
     * @var integer 充值会员天数。(取值有：31、93、186、372)
     */
    public $VipDays;

    /**
     * @var string 主播id。
     */
    public $AnchorId;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $RoomId 房间Id。
     * @param integer $VipDays 充值会员天数。(取值有：31、93、186、372)
     * @param string $AnchorId 主播id。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("VipDays",$param) and $param["VipDays"] !== null) {
            $this->VipDays = $param["VipDays"];
        }

        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }
    }
}
