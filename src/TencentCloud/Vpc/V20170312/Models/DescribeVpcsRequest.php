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
 * DescribeVpcs请求参数结构体
 *
 * @method array getVpcIds() 获取VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
 * @method void setVpcIds(array $VpcIds) 设置VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
 * @method array getFilters() 获取过滤条件，不支持同时指定VpcIds和Filters参数。
支持的过滤条件如下：
<li>vpc-name：VPC实例名称，支持模糊查询。</li>
<li>is-default ：是否默认VPC。</li>
<li>vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。</li>
<li>cidr-block：VPC的CIDR。</li>
<li>tag-key ：按照标签键进行过滤，非必填参数。</li>
<li>tag:tag-key：按照标签键值对进行过滤，非必填参数。 其中 tag-key 请使用具体的标签键进行替换，可参考示例2。</li>
  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
<li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li>
<li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 取值范围：'BGP'-默认, 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，不支持同时指定VpcIds和Filters参数。
支持的过滤条件如下：
<li>vpc-name：VPC实例名称，支持模糊查询。</li>
<li>is-default ：是否默认VPC。</li>
<li>vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。</li>
<li>cidr-block：VPC的CIDR。</li>
<li>tag-key ：按照标签键进行过滤，非必填参数。</li>
<li>tag:tag-key：按照标签键值对进行过滤，非必填参数。 其中 tag-key 请使用具体的标签键进行替换，可参考示例2。</li>
  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
<li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li>
<li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 取值范围：'BGP'-默认, 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。</li>
 * @method string getOffset() 获取偏移量，默认为0。
 * @method void setOffset(string $Offset) 设置偏移量，默认为0。
 * @method string getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(string $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeVpcsRequest extends AbstractModel
{
    /**
     * @var array VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
     */
    public $VpcIds;

    /**
     * @var array 过滤条件，不支持同时指定VpcIds和Filters参数。
支持的过滤条件如下：
<li>vpc-name：VPC实例名称，支持模糊查询。</li>
<li>is-default ：是否默认VPC。</li>
<li>vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。</li>
<li>cidr-block：VPC的CIDR。</li>
<li>tag-key ：按照标签键进行过滤，非必填参数。</li>
<li>tag:tag-key：按照标签键值对进行过滤，非必填参数。 其中 tag-key 请使用具体的标签键进行替换，可参考示例2。</li>
  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
<li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li>
<li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 取值范围：'BGP'-默认, 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。</li>
     */
    public $Filters;

    /**
     * @var string 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param array $VpcIds VPC实例ID。形如：vpc-f49l6u0z。每次请求的实例的上限为100。参数不支持同时指定VpcIds和Filters。
     * @param array $Filters 过滤条件，不支持同时指定VpcIds和Filters参数。
支持的过滤条件如下：
<li>vpc-name：VPC实例名称，支持模糊查询。</li>
<li>is-default ：是否默认VPC。</li>
<li>vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。</li>
<li>cidr-block：VPC的CIDR。</li>
<li>tag-key ：按照标签键进行过滤，非必填参数。</li>
<li>tag:tag-key：按照标签键值对进行过滤，非必填参数。 其中 tag-key 请使用具体的标签键进行替换，可参考示例2。</li>
  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
<li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li>
<li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 取值范围：'BGP'-默认, 'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调。</li>
     * @param string $Offset 偏移量，默认为0。
     * @param string $Limit 返回数量，默认为20，最大值为100。
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
        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
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
