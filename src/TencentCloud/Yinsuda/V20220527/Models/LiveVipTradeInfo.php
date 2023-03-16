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
 * 充值直播会员流水信息
 *
 * @method string getTradeSerialNo() 获取交易流水号。
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置交易流水号。
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getRoomId() 获取房间标识。
 * @method void setRoomId(string $RoomId) 设置房间标识。
 * @method integer getVipDays() 获取充值会员天数。
取值有： 
<li>31</li> <li>93</li><li>186</li> <li>372</li>
 * @method void setVipDays(integer $VipDays) 设置充值会员天数。
取值有： 
<li>31</li> <li>93</li><li>186</li> <li>372</li>
 * @method string getStatus() 获取订单状态。 
取值有： 
<li>Success：成功</li><li>Fail：失败</li><li>Processing：订单处理中</li>
 * @method void setStatus(string $Status) 设置订单状态。 
取值有： 
<li>Success：成功</li><li>Fail：失败</li><li>Processing：订单处理中</li>
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 */
class LiveVipTradeInfo extends AbstractModel
{
    /**
     * @var string 交易流水号。
     */
    public $TradeSerialNo;

    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var string 房间标识。
     */
    public $RoomId;

    /**
     * @var integer 充值会员天数。
取值有： 
<li>31</li> <li>93</li><li>186</li> <li>372</li>
     */
    public $VipDays;

    /**
     * @var string 订单状态。 
取值有： 
<li>Success：成功</li><li>Fail：失败</li><li>Processing：订单处理中</li>
     */
    public $Status;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @param string $TradeSerialNo 交易流水号。
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $RoomId 房间标识。
     * @param integer $VipDays 充值会员天数。
取值有： 
<li>31</li> <li>93</li><li>186</li> <li>372</li>
     * @param string $Status 订单状态。 
取值有： 
<li>Success：成功</li><li>Fail：失败</li><li>Processing：订单处理中</li>
     * @param string $CreateTime 创建时间。
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
        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
