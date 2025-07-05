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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 我预定的域名结构体。
 *
 * @method string getBusinessID() 获取预约ID
 * @method void setBusinessID(string $BusinessID) 设置预约ID
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getAppointPrice() 获取预定价格 单位元
 * @method void setAppointPrice(integer $AppointPrice) 设置预定价格 单位元
 * @method integer getAppointBondPrice() 获取预约保证金 单位元
 * @method void setAppointBondPrice(integer $AppointBondPrice) 设置预约保证金 单位元
 * @method string getAppointEndTime() 获取预约结束时间
 * @method void setAppointEndTime(string $AppointEndTime) 设置预约结束时间
 * @method integer getAppointNum() 获取预约人数
 * @method void setAppointNum(integer $AppointNum) 设置预约人数
 * @method integer getStatus() 获取1 已预约，2 竞价中，3 等待出价 4 竞价失败 5 等待支付 6 等待转移，7 转移中 8 交易成功 9 预约持有者赎回 10 竞价持有者赎回 11 其他阶段持有者赎回 12 违约
 * @method void setStatus(integer $Status) 设置1 已预约，2 竞价中，3 等待出价 4 竞价失败 5 等待支付 6 等待转移，7 转移中 8 交易成功 9 预约持有者赎回 10 竞价持有者赎回 11 其他阶段持有者赎回 12 违约
 */
class BiddingAppointResult extends AbstractModel
{
    /**
     * @var string 预约ID
     */
    public $BusinessID;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 预定价格 单位元
     */
    public $AppointPrice;

    /**
     * @var integer 预约保证金 单位元
     */
    public $AppointBondPrice;

    /**
     * @var string 预约结束时间
     */
    public $AppointEndTime;

    /**
     * @var integer 预约人数
     */
    public $AppointNum;

    /**
     * @var integer 1 已预约，2 竞价中，3 等待出价 4 竞价失败 5 等待支付 6 等待转移，7 转移中 8 交易成功 9 预约持有者赎回 10 竞价持有者赎回 11 其他阶段持有者赎回 12 违约
     */
    public $Status;

    /**
     * @param string $BusinessID 预约ID
     * @param string $Domain 域名
     * @param integer $AppointPrice 预定价格 单位元
     * @param integer $AppointBondPrice 预约保证金 单位元
     * @param string $AppointEndTime 预约结束时间
     * @param integer $AppointNum 预约人数
     * @param integer $Status 1 已预约，2 竞价中，3 等待出价 4 竞价失败 5 等待支付 6 等待转移，7 转移中 8 交易成功 9 预约持有者赎回 10 竞价持有者赎回 11 其他阶段持有者赎回 12 违约
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
        if (array_key_exists("BusinessID",$param) and $param["BusinessID"] !== null) {
            $this->BusinessID = $param["BusinessID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppointPrice",$param) and $param["AppointPrice"] !== null) {
            $this->AppointPrice = $param["AppointPrice"];
        }

        if (array_key_exists("AppointBondPrice",$param) and $param["AppointBondPrice"] !== null) {
            $this->AppointBondPrice = $param["AppointBondPrice"];
        }

        if (array_key_exists("AppointEndTime",$param) and $param["AppointEndTime"] !== null) {
            $this->AppointEndTime = $param["AppointEndTime"];
        }

        if (array_key_exists("AppointNum",$param) and $param["AppointNum"] !== null) {
            $this->AppointNum = $param["AppointNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
