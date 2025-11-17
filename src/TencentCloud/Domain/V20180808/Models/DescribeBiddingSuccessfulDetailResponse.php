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
 * DescribeBiddingSuccessfulDetail返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSuccessfulTime() 获取得标时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setSuccessfulTime(string $SuccessfulTime) 设置得标时间
格式:YYYY-MM-DD HH:mm:ss
 * @method float getSuccessfulPrice() 获取得标价格 单位元
 * @method void setSuccessfulPrice(float $SuccessfulPrice) 设置得标价格 单位元
 * @method string getRegTime() 获取 注册时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setRegTime(string $RegTime) 设置 注册时间
格式:YYYY-MM-DD HH:mm:ss
 * @method string getExpireTime() 获取过期时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
格式:YYYY-MM-DD HH:mm:ss
 * @method string getDeleteTime() 获取删除时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setDeleteTime(string $DeleteTime) 设置删除时间
格式:YYYY-MM-DD HH:mm:ss
 * @method string getPayEndTime() 获取付款结束时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setPayEndTime(string $PayEndTime) 设置付款结束时间
格式:YYYY-MM-DD HH:mm:ss
 * @method string getBiddingBondRefund() 获取保证金，是否退款，yes表示退款，no表示不退款
 * @method void setBiddingBondRefund(string $BiddingBondRefund) 设置保证金，是否退款，yes表示退款，no表示不退款
 * @method float getBiddingBondPrice() 获取保证金 单位元
 * @method void setBiddingBondPrice(float $BiddingBondPrice) 设置保证金 单位元
 * @method integer getStatus() 获取状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
 * @method void setStatus(integer $Status) 设置状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
 * @method string getModifyOwnerEndTime() 获取交割时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setModifyOwnerEndTime(string $ModifyOwnerEndTime) 设置交割时间
格式:YYYY-MM-DD HH:mm:ss
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
格式:YYYY-MM-DD HH:mm:ss
     */
    public $SuccessfulTime;

    /**
     * @var float 得标价格 单位元
     */
    public $SuccessfulPrice;

    /**
     * @var string  注册时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $RegTime;

    /**
     * @var string 过期时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $ExpireTime;

    /**
     * @var string 删除时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $DeleteTime;

    /**
     * @var string 付款结束时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $PayEndTime;

    /**
     * @var string 保证金，是否退款，yes表示退款，no表示不退款
     */
    public $BiddingBondRefund;

    /**
     * @var float 保证金 单位元
     */
    public $BiddingBondPrice;

    /**
     * @var integer 状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
     */
    public $Status;

    /**
     * @var string 交割时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $ModifyOwnerEndTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param string $SuccessfulTime 得标时间
格式:YYYY-MM-DD HH:mm:ss
     * @param float $SuccessfulPrice 得标价格 单位元
     * @param string $RegTime  注册时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $ExpireTime 过期时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $DeleteTime 删除时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $PayEndTime 付款结束时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $BiddingBondRefund 保证金，是否退款，yes表示退款，no表示不退款
     * @param float $BiddingBondPrice 保证金 单位元
     * @param integer $Status 状态：5 等待支付 6 等待转移， 7 转移中，8 交易成功，11 尾款阶段持有者索回，12 已违约
     * @param string $ModifyOwnerEndTime 交割时间
格式:YYYY-MM-DD HH:mm:ss
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

        if (array_key_exists("ModifyOwnerEndTime",$param) and $param["ModifyOwnerEndTime"] !== null) {
            $this->ModifyOwnerEndTime = $param["ModifyOwnerEndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
