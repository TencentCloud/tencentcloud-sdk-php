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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReleaseIPv6Addresses请求参数结构体
 *
 * @method array getIPv6AddressIds() 获取IPv6地址唯一ID。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
 * @method void setIPv6AddressIds(array $IPv6AddressIds) 设置IPv6地址唯一ID。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
 */
class ReleaseIPv6AddressesRequest extends AbstractModel
{
    /**
     * @var array IPv6地址唯一ID。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
     */
    public $IPv6AddressIds;

    /**
     * @param array $IPv6AddressIds IPv6地址唯一ID。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
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
        if (array_key_exists("IPv6AddressIds",$param) and $param["IPv6AddressIds"] !== null) {
            $this->IPv6AddressIds = $param["IPv6AddressIds"];
        }
    }
}
