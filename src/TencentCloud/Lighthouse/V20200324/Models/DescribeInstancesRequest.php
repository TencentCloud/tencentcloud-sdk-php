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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method array getFilters() 获取过滤器列表。
<li>instance-name</li>按照【实例名称】进行过滤。
类型：String
必选：否
<li>private-ip-address</li>按照【实例主网卡的内网 IP】进行过滤。
类型：String
必选：否
<li>public-ip-address</li>按照【实例主网卡的公网 IP】进行过滤。
类型：String
必选：否
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
<li>instance-state</li>按照【实例状态】进行过滤。
类型：String
必选：否
<li>tag-key</li>按照【标签键】进行过滤。
类型：String
必选：否
<li>tag-value</li>按照【标签值】进行过滤。
类型：String
必选：否
<li> tag:tag-key</li>按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 InstanceIds 和 Filters。
 * @method void setFilters(array $Filters) 设置过滤器列表。
<li>instance-name</li>按照【实例名称】进行过滤。
类型：String
必选：否
<li>private-ip-address</li>按照【实例主网卡的内网 IP】进行过滤。
类型：String
必选：否
<li>public-ip-address</li>按照【实例主网卡的公网 IP】进行过滤。
类型：String
必选：否
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
<li>instance-state</li>按照【实例状态】进行过滤。
类型：String
必选：否
<li>tag-key</li>按照【标签键】进行过滤。
类型：String
必选：否
<li>tag-value</li>按照【标签值】进行过滤。
类型：String
必选：否
<li> tag:tag-key</li>按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 InstanceIds 和 Filters。
 * @method integer getOffset() 获取偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
 * @method string getOrderField() 获取指定排序字段 。取值范围： "EXPIRED_TIME"：依据实例的到期时间排序。 
 不传入此字段时, 优先返回实例状态为“待回收”的实例, 其余实例以“创建时间”倒序返回。
 * @method void setOrderField(string $OrderField) 设置指定排序字段 。取值范围： "EXPIRED_TIME"：依据实例的到期时间排序。 
 不传入此字段时, 优先返回实例状态为“待回收”的实例, 其余实例以“创建时间”倒序返回。
 * @method string getOrder() 获取输出实例列表的排列顺序。取值范围：
"ASC"：升序排列。
"DESC"：降序排列。
默认按升序排序。当传入该字段时，必须指定OrderField。
 * @method void setOrder(string $Order) 设置输出实例列表的排列顺序。取值范围：
"ASC"：升序排列。
"DESC"：降序排列。
默认按升序排序。当传入该字段时，必须指定OrderField。
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceIds;

    /**
     * @var array 过滤器列表。
<li>instance-name</li>按照【实例名称】进行过滤。
类型：String
必选：否
<li>private-ip-address</li>按照【实例主网卡的内网 IP】进行过滤。
类型：String
必选：否
<li>public-ip-address</li>按照【实例主网卡的公网 IP】进行过滤。
类型：String
必选：否
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
<li>instance-state</li>按照【实例状态】进行过滤。
类型：String
必选：否
<li>tag-key</li>按照【标签键】进行过滤。
类型：String
必选：否
<li>tag-value</li>按照【标签值】进行过滤。
类型：String
必选：否
<li> tag:tag-key</li>按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 InstanceIds 和 Filters。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     */
    public $Limit;

    /**
     * @var string 指定排序字段 。取值范围： "EXPIRED_TIME"：依据实例的到期时间排序。 
 不传入此字段时, 优先返回实例状态为“待回收”的实例, 其余实例以“创建时间”倒序返回。
     */
    public $OrderField;

    /**
     * @var string 输出实例列表的排列顺序。取值范围：
"ASC"：升序排列。
"DESC"：降序排列。
默认按升序排序。当传入该字段时，必须指定OrderField。
     */
    public $Order;

    /**
     * @param array $InstanceIds 实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     * @param array $Filters 过滤器列表。
<li>instance-name</li>按照【实例名称】进行过滤。
类型：String
必选：否
<li>private-ip-address</li>按照【实例主网卡的内网 IP】进行过滤。
类型：String
必选：否
<li>public-ip-address</li>按照【实例主网卡的公网 IP】进行过滤。
类型：String
必选：否
<li>zone</li>按照【可用区】进行过滤。
类型：String
必选：否
<li>instance-state</li>按照【实例状态】进行过滤。
类型：String
必选：否
<li>tag-key</li>按照【标签键】进行过滤。
类型：String
必选：否
<li>tag-value</li>按照【标签值】进行过滤。
类型：String
必选：否
<li> tag:tag-key</li>按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否
<li>bundle-id</li>按照【套餐 ID】进行过滤。
类型：String
必选：否

每次请求的 Filters 的上限为 10，Filter.Values 的上限为 100。参数不支持同时指定 InstanceIds 和 Filters。
     * @param integer $Offset 偏移量，默认为 0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/product/1207/47578)中的相关小节。
     * @param string $OrderField 指定排序字段 。取值范围： "EXPIRED_TIME"：依据实例的到期时间排序。 
 不传入此字段时, 优先返回实例状态为“待回收”的实例, 其余实例以“创建时间”倒序返回。
     * @param string $Order 输出实例列表的排列顺序。取值范围：
"ASC"：升序排列。
"DESC"：降序排列。
默认按升序排序。当传入该字段时，必须指定OrderField。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
