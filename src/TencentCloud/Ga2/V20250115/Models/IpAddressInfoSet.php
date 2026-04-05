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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速地域公网IP信息
 *
 * @method string getIpAddress() 获取IP地址。
 * @method void setIpAddress(string $IpAddress) 设置IP地址。
 * @method string getIspType() 获取IP类型。
 * @method void setIspType(string $IspType) 设置IP类型。
 */
class IpAddressInfoSet extends AbstractModel
{
    /**
     * @var string IP地址。
     */
    public $IpAddress;

    /**
     * @var string IP类型。
     */
    public $IspType;

    /**
     * @param string $IpAddress IP地址。
     * @param string $IspType IP类型。
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
        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("IspType",$param) and $param["IspType"] !== null) {
            $this->IspType = $param["IspType"];
        }
    }
}
