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
 * 用于域名预释放详情页面
 *
 * @method string getBidder() 获取竞拍人
 * @method void setBidder(string $Bidder) 设置竞拍人
 * @method string getAuctionTime() 获取竞拍时间
 * @method void setAuctionTime(string $AuctionTime) 设置竞拍时间
 * @method float getAuctionPrice() 获取竞拍价格 单位元
 * @method void setAuctionPrice(float $AuctionPrice) 设置竞拍价格 单位元
 * @method string getStatus() 获取状态 up: 领先 down: 落后
 * @method void setStatus(string $Status) 设置状态 up: 领先 down: 落后
 */
class AuctionInfo extends AbstractModel
{
    /**
     * @var string 竞拍人
     */
    public $Bidder;

    /**
     * @var string 竞拍时间
     */
    public $AuctionTime;

    /**
     * @var float 竞拍价格 单位元
     */
    public $AuctionPrice;

    /**
     * @var string 状态 up: 领先 down: 落后
     */
    public $Status;

    /**
     * @param string $Bidder 竞拍人
     * @param string $AuctionTime 竞拍时间
     * @param float $AuctionPrice 竞拍价格 单位元
     * @param string $Status 状态 up: 领先 down: 落后
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
        if (array_key_exists("Bidder",$param) and $param["Bidder"] !== null) {
            $this->Bidder = $param["Bidder"];
        }

        if (array_key_exists("AuctionTime",$param) and $param["AuctionTime"] !== null) {
            $this->AuctionTime = $param["AuctionTime"];
        }

        if (array_key_exists("AuctionPrice",$param) and $param["AuctionPrice"] !== null) {
            $this->AuctionPrice = $param["AuctionPrice"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
