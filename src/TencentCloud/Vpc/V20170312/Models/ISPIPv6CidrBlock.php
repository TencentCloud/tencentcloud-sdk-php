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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回多运营商IPv6 Cidr Block
 *
 * @method string getAddressType() 获取IPv6 Cidr 的类型：`GUA`(全球单播地址), `ULA`(唯一本地地址)
 * @method void setAddressType(string $AddressType) 设置IPv6 Cidr 的类型：`GUA`(全球单播地址), `ULA`(唯一本地地址)
 */
class ISPIPv6CidrBlock extends AbstractModel
{
    /**
     * @var string IPv6 Cidr 的类型：`GUA`(全球单播地址), `ULA`(唯一本地地址)
     */
    public $AddressType;

    /**
     * @param string $AddressType IPv6 Cidr 的类型：`GUA`(全球单播地址), `ULA`(唯一本地地址)
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
        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
