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
 * DescribeBiddingDetail返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getBiddingNum() 获取出价次数
 * @method void setBiddingNum(integer $BiddingNum) 设置出价次数
 * @method string getBiddingStartTime() 获取竞价开始时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setBiddingStartTime(string $BiddingStartTime) 设置竞价开始时间
格式:YYYY-MM-DD HH:mm:ss
 * @method string getBiddingEndTime() 获取竞价结束时间
格式:YYYY-MM-DD HH:mm:ss
 * @method void setBiddingEndTime(string $BiddingEndTime) 设置竞价结束时间
格式:YYYY-MM-DD HH:mm:ss
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
 * @method integer getCurrentPrice() 获取当前价格 单位元
 * @method void setCurrentPrice(integer $CurrentPrice) 设置当前价格 单位元
 * @method string getCurrentNickname() 获取当前用户昵称
 * @method void setCurrentNickname(string $CurrentNickname) 设置当前用户昵称
 * @method integer getBiddingBondPrice() 获取竞价保证金 单位元
 * @method void setBiddingBondPrice(integer $BiddingBondPrice) 设置竞价保证金 单位元
 * @method integer getStatus() 获取2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
 * @method void setStatus(integer $Status) 设置2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
 * @method integer getBiddingFlag() 获取竞价标识，1 领先，2 落后
 * @method void setBiddingFlag(integer $BiddingFlag) 设置竞价标识，1 领先，2 落后
 * @method string getBiddingBondRefund() 获取是否退款，yes表示退款，no表示不退款
 * @method void setBiddingBondRefund(string $BiddingBondRefund) 设置是否退款，yes表示退款，no表示不退款
 * @method integer getBiddingPrice() 获取我的出价 单位元
 * @method void setBiddingPrice(integer $BiddingPrice) 设置我的出价 单位元
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBiddingDetailResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 出价次数
     */
    public $BiddingNum;

    /**
     * @var string 竞价开始时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $BiddingStartTime;

    /**
     * @var string 竞价结束时间
格式:YYYY-MM-DD HH:mm:ss
     */
    public $BiddingEndTime;

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
     * @var integer 当前价格 单位元
     */
    public $CurrentPrice;

    /**
     * @var string 当前用户昵称
     */
    public $CurrentNickname;

    /**
     * @var integer 竞价保证金 单位元
     */
    public $BiddingBondPrice;

    /**
     * @var integer 2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
     */
    public $Status;

    /**
     * @var integer 竞价标识，1 领先，2 落后
     */
    public $BiddingFlag;

    /**
     * @var string 是否退款，yes表示退款，no表示不退款
     */
    public $BiddingBondRefund;

    /**
     * @var integer 我的出价 单位元
     */
    public $BiddingPrice;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param integer $BiddingNum 出价次数
     * @param string $BiddingStartTime 竞价开始时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $BiddingEndTime 竞价结束时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $RegTime  注册时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $ExpireTime 过期时间
格式:YYYY-MM-DD HH:mm:ss
     * @param string $DeleteTime 删除时间
格式:YYYY-MM-DD HH:mm:ss
     * @param integer $CurrentPrice 当前价格 单位元
     * @param string $CurrentNickname 当前用户昵称
     * @param integer $BiddingBondPrice 竞价保证金 单位元
     * @param integer $Status 2 竞价中  3 等待出价 4 竞价失败 10 竞价持有者赎回
     * @param integer $BiddingFlag 竞价标识，1 领先，2 落后
     * @param string $BiddingBondRefund 是否退款，yes表示退款，no表示不退款
     * @param integer $BiddingPrice 我的出价 单位元
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

        if (array_key_exists("BiddingNum",$param) and $param["BiddingNum"] !== null) {
            $this->BiddingNum = $param["BiddingNum"];
        }

        if (array_key_exists("BiddingStartTime",$param) and $param["BiddingStartTime"] !== null) {
            $this->BiddingStartTime = $param["BiddingStartTime"];
        }

        if (array_key_exists("BiddingEndTime",$param) and $param["BiddingEndTime"] !== null) {
            $this->BiddingEndTime = $param["BiddingEndTime"];
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

        if (array_key_exists("CurrentPrice",$param) and $param["CurrentPrice"] !== null) {
            $this->CurrentPrice = $param["CurrentPrice"];
        }

        if (array_key_exists("CurrentNickname",$param) and $param["CurrentNickname"] !== null) {
            $this->CurrentNickname = $param["CurrentNickname"];
        }

        if (array_key_exists("BiddingBondPrice",$param) and $param["BiddingBondPrice"] !== null) {
            $this->BiddingBondPrice = $param["BiddingBondPrice"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BiddingFlag",$param) and $param["BiddingFlag"] !== null) {
            $this->BiddingFlag = $param["BiddingFlag"];
        }

        if (array_key_exists("BiddingBondRefund",$param) and $param["BiddingBondRefund"] !== null) {
            $this->BiddingBondRefund = $param["BiddingBondRefund"];
        }

        if (array_key_exists("BiddingPrice",$param) and $param["BiddingPrice"] !== null) {
            $this->BiddingPrice = $param["BiddingPrice"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
