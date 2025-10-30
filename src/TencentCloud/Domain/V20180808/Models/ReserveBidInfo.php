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
 * 合作商竞价详情
 *
 * @method string getUser() 获取用户
 * @method void setUser(string $User) 设置用户
 * @method integer getPrice() 获取出价
 * @method void setPrice(integer $Price) 设置出价
 * @method string getBidTime() 获取出价时间
 * @method void setBidTime(string $BidTime) 设置出价时间
 * @method string getBidStatus() 获取当前状态
 * @method void setBidStatus(string $BidStatus) 设置当前状态
 */
class ReserveBidInfo extends AbstractModel
{
    /**
     * @var string 用户
     */
    public $User;

    /**
     * @var integer 出价
     */
    public $Price;

    /**
     * @var string 出价时间
     */
    public $BidTime;

    /**
     * @var string 当前状态
     */
    public $BidStatus;

    /**
     * @param string $User 用户
     * @param integer $Price 出价
     * @param string $BidTime 出价时间
     * @param string $BidStatus 当前状态
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("BidTime",$param) and $param["BidTime"] !== null) {
            $this->BidTime = $param["BidTime"];
        }

        if (array_key_exists("BidStatus",$param) and $param["BidStatus"] !== null) {
            $this->BidStatus = $param["BidStatus"];
        }
    }
}
