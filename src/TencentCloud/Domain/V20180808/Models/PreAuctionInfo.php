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
 * 预释放竞价列表
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getBiddingTime() 获取竞价倒计时
格式:YYYY-MM-DD HH:mm:ss
 * @method void setBiddingTime(string $BiddingTime) 设置竞价倒计时
格式:YYYY-MM-DD HH:mm:ss
 * @method integer getBidCount() 获取出价次数
 * @method void setBidCount(integer $BidCount) 设置出价次数
 * @method float getPrice() 获取当前价格 单位元
 * @method void setPrice(float $Price) 设置当前价格 单位元
 * @method string getOp() 获取用户操作 
bid：出价 
noAction：无法操作
 * @method void setOp(string $Op) 设置用户操作 
bid：出价 
noAction：无法操作
 * @method string getBusinessId() 获取业务ID
 * @method void setBusinessId(string $BusinessId) 设置业务ID
 */
class PreAuctionInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 竞价倒计时
格式:YYYY-MM-DD HH:mm:ss
     */
    public $BiddingTime;

    /**
     * @var integer 出价次数
     */
    public $BidCount;

    /**
     * @var float 当前价格 单位元
     */
    public $Price;

    /**
     * @var string 用户操作 
bid：出价 
noAction：无法操作
     */
    public $Op;

    /**
     * @var string 业务ID
     */
    public $BusinessId;

    /**
     * @param string $Domain 域名
     * @param string $BiddingTime 竞价倒计时
格式:YYYY-MM-DD HH:mm:ss
     * @param integer $BidCount 出价次数
     * @param float $Price 当前价格 单位元
     * @param string $Op 用户操作 
bid：出价 
noAction：无法操作
     * @param string $BusinessId 业务ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("BiddingTime",$param) and $param["BiddingTime"] !== null) {
            $this->BiddingTime = $param["BiddingTime"];
        }

        if (array_key_exists("BidCount",$param) and $param["BidCount"] !== null) {
            $this->BidCount = $param["BidCount"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
