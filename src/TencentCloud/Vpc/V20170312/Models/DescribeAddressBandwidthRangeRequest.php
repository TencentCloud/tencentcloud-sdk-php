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
 * DescribeAddressBandwidthRange请求参数结构体
 *
 * @method array getAddressIds() 获取EIP资源ID列表，单次查询上限20，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method void setAddressIds(array $AddressIds) 设置EIP资源ID列表，单次查询上限20，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 */
class DescribeAddressBandwidthRangeRequest extends AbstractModel
{
    /**
     * @var array EIP资源ID列表，单次查询上限20，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     */
    public $AddressIds;

    /**
     * @param array $AddressIds EIP资源ID列表，单次查询上限20，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }
    }
}
