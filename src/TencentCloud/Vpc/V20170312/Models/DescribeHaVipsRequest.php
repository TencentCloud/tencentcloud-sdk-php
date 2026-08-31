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
 * DescribeHaVips请求参数结构体
 *
 * @method array getHaVipIds() 获取<p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
 * @method void setHaVipIds(array $HaVipIds) 设置<p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
 * @method array getFilters() 获取<p>过滤条件，参数不支持同时指定<code>HaVipIds</code>和<code>Filters</code>。Filter 数量限制为10个，以及单Filter 的value值限制为5个。<li>havip-id - String - <code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</li><li>havip-name - String - <code>HAVIP</code>名称。</li><li>vpc-id - String - <code>HAVIP</code>所在私有网络<code>ID</code>。</li><li>subnet-id - String - <code>HAVIP</code>所在子网<code>ID</code>。</li><li>vip - String - <code>HAVIP</code>的地址<code>VIP</code>。</li><li>address-ip - String - <code>HAVIP</code>绑定的弹性公网<code>IP</code>。</li><li>havip-association.instance-id - String - <code>HAVIP</code>绑定的子机或网卡。</li><li>havip-association.instance-type - String - <code>HAVIP</code>绑定的类型，取值:CVM, ENI。</li><li>check-associate - Bool - 是否开启HaVip飘移时校验绑定的子机或网卡。</li><li>cdc-id - String - CDC实例ID。</li></p><li>type - String - HAVIP类型。取值: NORMAL(普通); GWLB(网关负载均衡); OPTIMIZATION(优化模式)。</li><li>termination-protection - String - 删除保护。取值: true; false。</li><li>traffic-protection - String - 流量保护。取值: true; false。</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，参数不支持同时指定<code>HaVipIds</code>和<code>Filters</code>。Filter 数量限制为10个，以及单Filter 的value值限制为5个。<li>havip-id - String - <code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</li><li>havip-name - String - <code>HAVIP</code>名称。</li><li>vpc-id - String - <code>HAVIP</code>所在私有网络<code>ID</code>。</li><li>subnet-id - String - <code>HAVIP</code>所在子网<code>ID</code>。</li><li>vip - String - <code>HAVIP</code>的地址<code>VIP</code>。</li><li>address-ip - String - <code>HAVIP</code>绑定的弹性公网<code>IP</code>。</li><li>havip-association.instance-id - String - <code>HAVIP</code>绑定的子机或网卡。</li><li>havip-association.instance-type - String - <code>HAVIP</code>绑定的类型，取值:CVM, ENI。</li><li>check-associate - Bool - 是否开启HaVip飘移时校验绑定的子机或网卡。</li><li>cdc-id - String - CDC实例ID。</li></p><li>type - String - HAVIP类型。取值: NORMAL(普通); GWLB(网关负载均衡); OPTIMIZATION(优化模式)。</li><li>termination-protection - String - 删除保护。取值: true; false。</li><li>traffic-protection - String - 流量保护。取值: true; false。</li>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 */
class DescribeHaVipsRequest extends AbstractModel
{
    /**
     * @var array <p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
     */
    public $HaVipIds;

    /**
     * @var array <p>过滤条件，参数不支持同时指定<code>HaVipIds</code>和<code>Filters</code>。Filter 数量限制为10个，以及单Filter 的value值限制为5个。<li>havip-id - String - <code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</li><li>havip-name - String - <code>HAVIP</code>名称。</li><li>vpc-id - String - <code>HAVIP</code>所在私有网络<code>ID</code>。</li><li>subnet-id - String - <code>HAVIP</code>所在子网<code>ID</code>。</li><li>vip - String - <code>HAVIP</code>的地址<code>VIP</code>。</li><li>address-ip - String - <code>HAVIP</code>绑定的弹性公网<code>IP</code>。</li><li>havip-association.instance-id - String - <code>HAVIP</code>绑定的子机或网卡。</li><li>havip-association.instance-type - String - <code>HAVIP</code>绑定的类型，取值:CVM, ENI。</li><li>check-associate - Bool - 是否开启HaVip飘移时校验绑定的子机或网卡。</li><li>cdc-id - String - CDC实例ID。</li></p><li>type - String - HAVIP类型。取值: NORMAL(普通); GWLB(网关负载均衡); OPTIMIZATION(优化模式)。</li><li>termination-protection - String - 删除保护。取值: true; false。</li><li>traffic-protection - String - 流量保护。取值: true; false。</li>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @param array $HaVipIds <p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
     * @param array $Filters <p>过滤条件，参数不支持同时指定<code>HaVipIds</code>和<code>Filters</code>。Filter 数量限制为10个，以及单Filter 的value值限制为5个。<li>havip-id - String - <code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</li><li>havip-name - String - <code>HAVIP</code>名称。</li><li>vpc-id - String - <code>HAVIP</code>所在私有网络<code>ID</code>。</li><li>subnet-id - String - <code>HAVIP</code>所在子网<code>ID</code>。</li><li>vip - String - <code>HAVIP</code>的地址<code>VIP</code>。</li><li>address-ip - String - <code>HAVIP</code>绑定的弹性公网<code>IP</code>。</li><li>havip-association.instance-id - String - <code>HAVIP</code>绑定的子机或网卡。</li><li>havip-association.instance-type - String - <code>HAVIP</code>绑定的类型，取值:CVM, ENI。</li><li>check-associate - Bool - 是否开启HaVip飘移时校验绑定的子机或网卡。</li><li>cdc-id - String - CDC实例ID。</li></p><li>type - String - HAVIP类型。取值: NORMAL(普通); GWLB(网关负载均衡); OPTIMIZATION(优化模式)。</li><li>termination-protection - String - 删除保护。取值: true; false。</li><li>traffic-protection - String - 流量保护。取值: true; false。</li>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
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
        if (array_key_exists("HaVipIds",$param) and $param["HaVipIds"] !== null) {
            $this->HaVipIds = $param["HaVipIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
