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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 优惠券
 *
 * @method string getCouponId() 获取<p>优惠券ID</p>
 * @method void setCouponId(string $CouponId) 设置<p>优惠券ID</p>
 * @method string getCouponName() 获取<p>优惠券名称</p>
 * @method void setCouponName(string $CouponName) 设置<p>优惠券名称</p>
 * @method string getStartTime() 获取<p>优惠券开始时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>优惠券开始时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method string getExpireTime() 获取<p>优惠券过期时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>优惠券过期时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method float getPercentageRate() 获取<p>折扣百分比，如果折扣为 10%，则发送“0.1”</p>
 * @method void setPercentageRate(float $PercentageRate) 设置<p>折扣百分比，如果折扣为 10%，则发送“0.1”</p>
 * @method Amount getDiscountAmount() 获取<p>折扣金额</p>
 * @method void setDiscountAmount(Amount $DiscountAmount) 设置<p>折扣金额</p>
 * @method float getThreshold() 获取<p>优惠券门槛</p>
 * @method void setThreshold(float $Threshold) 设置<p>优惠券门槛</p>
 */
class Coupon extends AbstractModel
{
    /**
     * @var string <p>优惠券ID</p>
     */
    public $CouponId;

    /**
     * @var string <p>优惠券名称</p>
     */
    public $CouponName;

    /**
     * @var string <p>优惠券开始时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>优惠券过期时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     */
    public $ExpireTime;

    /**
     * @var float <p>折扣百分比，如果折扣为 10%，则发送“0.1”</p>
     */
    public $PercentageRate;

    /**
     * @var Amount <p>折扣金额</p>
     */
    public $DiscountAmount;

    /**
     * @var float <p>优惠券门槛</p>
     */
    public $Threshold;

    /**
     * @param string $CouponId <p>优惠券ID</p>
     * @param string $CouponName <p>优惠券名称</p>
     * @param string $StartTime <p>优惠券开始时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     * @param string $ExpireTime <p>优惠券过期时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     * @param float $PercentageRate <p>折扣百分比，如果折扣为 10%，则发送“0.1”</p>
     * @param Amount $DiscountAmount <p>折扣金额</p>
     * @param float $Threshold <p>优惠券门槛</p>
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
        if (array_key_exists("CouponId",$param) and $param["CouponId"] !== null) {
            $this->CouponId = $param["CouponId"];
        }

        if (array_key_exists("CouponName",$param) and $param["CouponName"] !== null) {
            $this->CouponName = $param["CouponName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PercentageRate",$param) and $param["PercentageRate"] !== null) {
            $this->PercentageRate = $param["PercentageRate"];
        }

        if (array_key_exists("DiscountAmount",$param) and $param["DiscountAmount"] !== null) {
            $this->DiscountAmount = new Amount();
            $this->DiscountAmount->deserialize($param["DiscountAmount"]);
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
