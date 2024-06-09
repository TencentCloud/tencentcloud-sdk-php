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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBiddingSuccessfulDetail返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSuccessfulTime() 获取得标时间
 * @method void setSuccessfulTime(string $SuccessfulTime) 设置得标时间
 * @method float getSuccessfulPrice() 获取得标价格
 * @method void setSuccessfulPrice(float $SuccessfulPrice) 设置得标价格
 * @method string getRegTime() 获取 注册时间
 * @method void setRegTime(string $RegTime) 设置 注册时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getDeleteTime() 获取删除时间
 * @method void setDeleteTime(string $DeleteTime) 设置删除时间
 * @method string getPayEndTime() 获取付款结束时间
 * @method void setPayEndTime(string $PayEndTime) 设置付款结束时间
 * @method string getBiddingBondRefund() 获取保证金，是否退款，yes表示退款，no表示不退款
 * @method void setBiddingBondRefund(string $BiddingBondRefund) 设置保证金，是否退款，yes表示退款，no表示不退款
 * @method float getBiddingBondPrice() 获取保证金
 * @method void setBiddingBondPrice(float $BiddingBondPrice) 设置保证金
 * @method integer getStatus() 获取状态：1 竞价中，2 待出价，3 竞价失败， 4 等待支付 5 等待转移， 6 转移中，7 交易成功，8 持有者索回，9 已违约
 * @method void setStatus(integer $Status) 设置状态：1 竞价中，2 待出价，3 竞价失败， 4 等待支付 5 等待转移， 6 转移中，7 交易成功，8 持有者索回，9 已违约
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBiddingSuccessfulDetailResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 得标时间
     */
    public $SuccessfulTime;

    /**
     * @var float 得标价格
     */
    public $SuccessfulPrice;

    /**
     * @var string  注册时间
     */
    public $RegTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 删除时间
     */
    public $DeleteTime;

    /**
     * @var string 付款结束时间
     */
    public $PayEndTime;

    /**
     * @var string 保证金，是否退款，yes表示退款，no表示不退款
     */
    public $BiddingBondRefund;

    /**
     * @var float 保证金
     */
    public $BiddingBondPrice;

    /**
     * @var integer 状态：1 竞价中，2 待出价，3 竞价失败， 4 等待支付 5 等待转移， 6 转移中，7 交易成功，8 持有者索回，9 已违约
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param string $SuccessfulTime 得标时间
     * @param float $SuccessfulPrice 得标价格
     * @param string $RegTime  注册时间
     * @param string $ExpireTime 过期时间
     * @param string $DeleteTime 删除时间
     * @param string $PayEndTime 付款结束时间
     * @param string $BiddingBondRefund 保证金，是否退款，yes表示退款，no表示不退款
     * @param float $BiddingBondPrice 保证金
     * @param integer $Status 状态：1 竞价中，2 待出价，3 竞价失败， 4 等待支付 5 等待转移， 6 转移中，7 交易成功，8 持有者索回，9 已违约
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("SuccessfulTime",$param) and $param["SuccessfulTime"] !== null) {
            $this->SuccessfulTime = $param["SuccessfulTime"];
        }

        if (array_key_exists("SuccessfulPrice",$param) and $param["SuccessfulPrice"] !== null) {
            $this->SuccessfulPrice = $param["SuccessfulPrice"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("PayEndTime",$param) and $param["PayEndTime"] !== null) {
            $this->PayEndTime = $param["PayEndTime"];
        }

        if (array_key_exists("BiddingBondRefund",$param) and $param["BiddingBondRefund"] !== null) {
            $this->BiddingBondRefund = $param["BiddingBondRefund"];
        }

        if (array_key_exists("BiddingBondPrice",$param) and $param["BiddingBondPrice"] !== null) {
            $this->BiddingBondPrice = $param["BiddingBondPrice"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
