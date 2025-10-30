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
 * 我竞价的域名结构体。
 *
 * @method string getBusinessID() 获取预约ID
 * @method void setBusinessID(string $BusinessID) 设置预约ID
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getCurrentPrice() 获取当前价格 单位元
 * @method void setCurrentPrice(integer $CurrentPrice) 设置当前价格 单位元
 * @method string getCurrentNickname() 获取当前用户昵称
 * @method void setCurrentNickname(string $CurrentNickname) 设置当前用户昵称
 * @method integer getBiddingPrice() 获取我的出价 单位元
 * @method void setBiddingPrice(integer $BiddingPrice) 设置我的出价 单位元
 * @method integer getBiddingBondPrice() 获取竞价保证金 单位元
 * @method void setBiddingBondPrice(integer $BiddingBondPrice) 设置竞价保证金 单位元
 * @method string getBiddingEndTime() 获取竞价结束时间
 * @method void setBiddingEndTime(string $BiddingEndTime) 设置竞价结束时间
 * @method integer getBiddingFlag() 获取竞价标识，1 领先，2 落后
 * @method void setBiddingFlag(integer $BiddingFlag) 设置竞价标识，1 领先，2 落后
 * @method integer getBiddingNum() 获取出价次数
 * @method void setBiddingNum(integer $BiddingNum) 设置出价次数
 * @method integer getStatus() 获取2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
 * @method void setStatus(integer $Status) 设置2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
 */
class BiddingResult extends AbstractModel
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
     * @var integer 当前价格 单位元
     */
    public $CurrentPrice;

    /**
     * @var string 当前用户昵称
     */
    public $CurrentNickname;

    /**
     * @var integer 我的出价 单位元
     */
    public $BiddingPrice;

    /**
     * @var integer 竞价保证金 单位元
     */
    public $BiddingBondPrice;

    /**
     * @var string 竞价结束时间
     */
    public $BiddingEndTime;

    /**
     * @var integer 竞价标识，1 领先，2 落后
     */
    public $BiddingFlag;

    /**
     * @var integer 出价次数
     */
    public $BiddingNum;

    /**
     * @var integer 2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
     */
    public $Status;

    /**
     * @param string $BusinessID 预约ID
     * @param string $Domain 域名
     * @param integer $CurrentPrice 当前价格 单位元
     * @param string $CurrentNickname 当前用户昵称
     * @param integer $BiddingPrice 我的出价 单位元
     * @param integer $BiddingBondPrice 竞价保证金 单位元
     * @param string $BiddingEndTime 竞价结束时间
     * @param integer $BiddingFlag 竞价标识，1 领先，2 落后
     * @param integer $BiddingNum 出价次数
     * @param integer $Status 2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
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

        if (array_key_exists("CurrentPrice",$param) and $param["CurrentPrice"] !== null) {
            $this->CurrentPrice = $param["CurrentPrice"];
        }

        if (array_key_exists("CurrentNickname",$param) and $param["CurrentNickname"] !== null) {
            $this->CurrentNickname = $param["CurrentNickname"];
        }

        if (array_key_exists("BiddingPrice",$param) and $param["BiddingPrice"] !== null) {
            $this->BiddingPrice = $param["BiddingPrice"];
        }

        if (array_key_exists("BiddingBondPrice",$param) and $param["BiddingBondPrice"] !== null) {
            $this->BiddingBondPrice = $param["BiddingBondPrice"];
        }

        if (array_key_exists("BiddingEndTime",$param) and $param["BiddingEndTime"] !== null) {
            $this->BiddingEndTime = $param["BiddingEndTime"];
        }

        if (array_key_exists("BiddingFlag",$param) and $param["BiddingFlag"] !== null) {
            $this->BiddingFlag = $param["BiddingFlag"];
        }

        if (array_key_exists("BiddingNum",$param) and $param["BiddingNum"] !== null) {
            $this->BiddingNum = $param["BiddingNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
