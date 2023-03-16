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
 * RechargeLiveVip请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getTradeSerialNo() 获取交易流水号，用于标记此次充值记录，多次充值记录传入相同的 TradeSerialNo 会判断为失败，可用于防止重提提交造成重复计费。
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置交易流水号，用于标记此次充值记录，多次充值记录传入相同的 TradeSerialNo 会判断为失败，可用于防止重提提交造成重复计费。
 * @method string getRoomId() 获取房间标识。
 * @method void setRoomId(string $RoomId) 设置房间标识。
 * @method integer getVipDays() 获取充值会员天数。
取值有：
<li>31</li>
<li>93</li>
<li>186</li>
<li>372</li>
 * @method void setVipDays(integer $VipDays) 设置充值会员天数。
取值有：
<li>31</li>
<li>93</li>
<li>186</li>
<li>372</li>
 */
class RechargeLiveVipRequest extends AbstractModel
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
     * @var string 交易流水号，用于标记此次充值记录，多次充值记录传入相同的 TradeSerialNo 会判断为失败，可用于防止重提提交造成重复计费。
     */
    public $TradeSerialNo;

    /**
     * @var string 房间标识。
     */
    public $RoomId;

    /**
     * @var integer 充值会员天数。
取值有：
<li>31</li>
<li>93</li>
<li>186</li>
<li>372</li>
     */
    public $VipDays;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $TradeSerialNo 交易流水号，用于标记此次充值记录，多次充值记录传入相同的 TradeSerialNo 会判断为失败，可用于防止重提提交造成重复计费。
     * @param string $RoomId 房间标识。
     * @param integer $VipDays 充值会员天数。
取值有：
<li>31</li>
<li>93</li>
<li>186</li>
<li>372</li>
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

        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("VipDays",$param) and $param["VipDays"] !== null) {
            $this->VipDays = $param["VipDays"];
        }
    }
}
