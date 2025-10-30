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
 * DescribeUnPreDomainDetail返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getPreCount() 获取预约人数
 * @method void setPreCount(integer $PreCount) 设置预约人数
 * @method string getRegTime() 获取域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method void setRegTime(string $RegTime) 设置域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method string getDeleteTime() 获取域名删除时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method void setDeleteTime(string $DeleteTime) 设置域名删除时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method string getExpireTime() 获取到期时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method void setExpireTime(string $ExpireTime) 设置到期时间 
格式:YYYY-MM-DD HH:mm:ss
 * @method string getStatus() 获取域名状态
 bid：出价
noAction：无法操作
 * @method void setStatus(string $Status) 设置域名状态
 bid：出价
noAction：无法操作
 * @method float getCurrentPrice() 获取域名价格 单位元
 * @method void setCurrentPrice(float $CurrentPrice) 设置域名价格 单位元
 * @method float getAppointBondPrice() 获取域名保证金 单位元
 * @method void setAppointBondPrice(float $AppointBondPrice) 设置域名保证金 单位元
 * @method boolean getIsAppoint() 获取是否已经预约
 * @method void setIsAppoint(boolean $IsAppoint) 设置是否已经预约
 * @method string getBusinessId() 获取业务ID
 * @method void setBusinessId(string $BusinessId) 设置业务ID
 * @method boolean getIsDomainUser() 获取是否为原持有者域名
 * @method void setIsDomainUser(boolean $IsDomainUser) 设置是否为原持有者域名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUnPreDomainDetailResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 预约人数
     */
    public $PreCount;

    /**
     * @var string 域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
     */
    public $RegTime;

    /**
     * @var string 域名删除时间 
格式:YYYY-MM-DD HH:mm:ss
     */
    public $DeleteTime;

    /**
     * @var string 到期时间 
格式:YYYY-MM-DD HH:mm:ss
     */
    public $ExpireTime;

    /**
     * @var string 域名状态
 bid：出价
noAction：无法操作
     */
    public $Status;

    /**
     * @var float 域名价格 单位元
     */
    public $CurrentPrice;

    /**
     * @var float 域名保证金 单位元
     */
    public $AppointBondPrice;

    /**
     * @var boolean 是否已经预约
     */
    public $IsAppoint;

    /**
     * @var string 业务ID
     */
    public $BusinessId;

    /**
     * @var boolean 是否为原持有者域名
     */
    public $IsDomainUser;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param integer $PreCount 预约人数
     * @param string $RegTime 域名注册时间 
格式:YYYY-MM-DD HH:mm:ss
     * @param string $DeleteTime 域名删除时间 
格式:YYYY-MM-DD HH:mm:ss
     * @param string $ExpireTime 到期时间 
格式:YYYY-MM-DD HH:mm:ss
     * @param string $Status 域名状态
 bid：出价
noAction：无法操作
     * @param float $CurrentPrice 域名价格 单位元
     * @param float $AppointBondPrice 域名保证金 单位元
     * @param boolean $IsAppoint 是否已经预约
     * @param string $BusinessId 业务ID
     * @param boolean $IsDomainUser 是否为原持有者域名
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

        if (array_key_exists("PreCount",$param) and $param["PreCount"] !== null) {
            $this->PreCount = $param["PreCount"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentPrice",$param) and $param["CurrentPrice"] !== null) {
            $this->CurrentPrice = $param["CurrentPrice"];
        }

        if (array_key_exists("AppointBondPrice",$param) and $param["AppointBondPrice"] !== null) {
            $this->AppointBondPrice = $param["AppointBondPrice"];
        }

        if (array_key_exists("IsAppoint",$param) and $param["IsAppoint"] !== null) {
            $this->IsAppoint = $param["IsAppoint"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("IsDomainUser",$param) and $param["IsDomainUser"] !== null) {
            $this->IsDomainUser = $param["IsDomainUser"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
