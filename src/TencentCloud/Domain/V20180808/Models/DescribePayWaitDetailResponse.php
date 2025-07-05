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
 * DescribePayWaitDetail返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getStatus() 获取域名类型
pay：等待支持
sub：已经预订
wait：等待出价
finish：完成出价
 * @method void setStatus(string $Status) 设置域名类型
pay：等待支持
sub：已经预订
wait：等待出价
finish：完成出价
 * @method string getEndTime() 获取支付结束时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置支付结束时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method string getRegTime() 获取域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method void setRegTime(string $RegTime) 设置域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method float getPrice() 获取域名成交价格 单位元
 * @method void setPrice(float $Price) 设置域名成交价格 单位元
 * @method float getRetDeposit() 获取待退还保证金 单位元
 * @method void setRetDeposit(float $RetDeposit) 设置待退还保证金 单位元
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePayWaitDetailResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名类型
pay：等待支持
sub：已经预订
wait：等待出价
finish：完成出价
     */
    public $Status;

    /**
     * @var string 支付结束时间 
格式:YYYY-MM-DD HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string 域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
     */
    public $RegTime;

    /**
     * @var float 域名成交价格 单位元
     */
    public $Price;

    /**
     * @var float 待退还保证金 单位元
     */
    public $RetDeposit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param string $Status 域名类型
pay：等待支持
sub：已经预订
wait：等待出价
finish：完成出价
     * @param string $EndTime 支付结束时间 
格式:YYYY-MM-DD HH:mm:ss
     * @param string $RegTime 域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
     * @param float $Price 域名成交价格 单位元
     * @param float $RetDeposit 待退还保证金 单位元
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RetDeposit",$param) and $param["RetDeposit"] !== null) {
            $this->RetDeposit = $param["RetDeposit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
