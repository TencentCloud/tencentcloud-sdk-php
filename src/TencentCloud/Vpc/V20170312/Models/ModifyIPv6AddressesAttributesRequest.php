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
 * ModifyIPv6AddressesAttributes请求参数结构体
 *
 * @method array getIPv6AddressIds() 获取弹性公网IPv6唯一ID列表。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressIds。
 * @method void setIPv6AddressIds(array $IPv6AddressIds) 设置弹性公网IPv6唯一ID列表。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressIds。
 * @method string getIPv6AddressName() 获取弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
 * @method void setIPv6AddressName(string $IPv6AddressName) 设置弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
 */
class ModifyIPv6AddressesAttributesRequest extends AbstractModel
{
    /**
     * @var array 弹性公网IPv6唯一ID列表。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressIds。
     */
    public $IPv6AddressIds;

    /**
     * @var string 弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
     */
    public $IPv6AddressName;

    /**
     * @param array $IPv6AddressIds 弹性公网IPv6唯一ID列表。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressIds。
     * @param string $IPv6AddressName 弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
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

        if (array_key_exists("IPv6AddressName",$param) and $param["IPv6AddressName"] !== null) {
            $this->IPv6AddressName = $param["IPv6AddressName"];
        }
    }
}
