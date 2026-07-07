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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡可用区子网映射中的 IP 信息数据结构
 *
 * @method string getAddress() 获取IP 地址
 * @method void setAddress(string $Address) 设置IP 地址
 * @method string getAddressId() 获取EIP AddressId
 * @method void setAddressId(string $AddressId) 设置EIP AddressId
 */
class IPAddressInfo extends AbstractModel
{
    /**
     * @var string IP 地址
     */
    public $Address;

    /**
     * @var string EIP AddressId
     */
    public $AddressId;

    /**
     * @param string $Address IP 地址
     * @param string $AddressId EIP AddressId
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }
    }
}
