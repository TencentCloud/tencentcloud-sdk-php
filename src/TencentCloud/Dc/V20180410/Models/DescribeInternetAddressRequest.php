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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInternetAddress请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大值100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值100
 * @method array getFilters() 获取过滤条件： <li>AddrType，地址类型。0：BGP 1；1: 电信；2：移动；3：联通</li> <li>AddrProto，地址类型。0：IPv4；1:IPv6</li> <li>Status，地址状态。 0：使用中；1：已停用； 2：已退还</li> <li>Subnet，互联网公网地址。数组</li> <li>InstanceIds，互联网公网地址ID。数组</li>
 * @method void setFilters(array $Filters) 设置过滤条件： <li>AddrType，地址类型。0：BGP 1；1: 电信；2：移动；3：联通</li> <li>AddrProto，地址类型。0：IPv4；1:IPv6</li> <li>Status，地址状态。 0：使用中；1：已停用； 2：已退还</li> <li>Subnet，互联网公网地址。数组</li> <li>InstanceIds，互联网公网地址ID。数组</li>
 */
class DescribeInternetAddressRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值100
     */
    public $Limit;

    /**
     * @var array 过滤条件： <li>AddrType，地址类型。0：BGP 1；1: 电信；2：移动；3：联通</li> <li>AddrProto，地址类型。0：IPv4；1:IPv6</li> <li>Status，地址状态。 0：使用中；1：已停用； 2：已退还</li> <li>Subnet，互联网公网地址。数组</li> <li>InstanceIds，互联网公网地址ID。数组</li>
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大值100
     * @param array $Filters 过滤条件： <li>AddrType，地址类型。0：BGP 1；1: 电信；2：移动；3：联通</li> <li>AddrProto，地址类型。0：IPv4；1:IPv6</li> <li>Status，地址状态。 0：使用中；1：已停用； 2：已退还</li> <li>Subnet，互联网公网地址。数组</li> <li>InstanceIds，互联网公网地址ID。数组</li>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
