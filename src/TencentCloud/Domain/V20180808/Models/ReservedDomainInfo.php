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
 * 查询预释放预约列表域名详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getRegTime() 获取注册时间
 * @method void setRegTime(string $RegTime) 设置注册时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getRenewEndTime() 获取续费时间结束
 * @method void setRenewEndTime(string $RenewEndTime) 设置续费时间结束
 * @method string getRestoreEndTime() 获取赎回结束时间
 * @method void setRestoreEndTime(string $RestoreEndTime) 设置赎回结束时间
 * @method string getReservedEndTime() 获取域名预约结束时间
 * @method void setReservedEndTime(string $ReservedEndTime) 设置域名预约结束时间
 */
class ReservedDomainInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 注册时间
     */
    public $RegTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string 续费时间结束
     */
    public $RenewEndTime;

    /**
     * @var string 赎回结束时间
     */
    public $RestoreEndTime;

    /**
     * @var string 域名预约结束时间
     */
    public $ReservedEndTime;

    /**
     * @param string $Domain 域名
     * @param string $RegTime 注册时间
     * @param string $ExpireTime 到期时间
     * @param string $RenewEndTime 续费时间结束
     * @param string $RestoreEndTime 赎回结束时间
     * @param string $ReservedEndTime 域名预约结束时间
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

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RenewEndTime",$param) and $param["RenewEndTime"] !== null) {
            $this->RenewEndTime = $param["RenewEndTime"];
        }

        if (array_key_exists("RestoreEndTime",$param) and $param["RestoreEndTime"] !== null) {
            $this->RestoreEndTime = $param["RestoreEndTime"];
        }

        if (array_key_exists("ReservedEndTime",$param) and $param["ReservedEndTime"] !== null) {
            $this->ReservedEndTime = $param["ReservedEndTime"];
        }
    }
}
