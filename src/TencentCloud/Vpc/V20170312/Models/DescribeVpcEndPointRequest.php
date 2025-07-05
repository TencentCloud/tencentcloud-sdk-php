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
 * DescribeVpcEndPoint请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。当前支持如下过滤条件：
<li> end-point-service-id- String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>end-point-name - String - （过滤条件）终端节点实例名称。</li>
<li> end-point-id- String - （过滤条件）终端节点实例ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
接口获取。</li>
<li> vpc-id- String - （过滤条件）VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
</li>
 * @method void setFilters(array $Filters) 设置过滤条件。当前支持如下过滤条件：
<li> end-point-service-id- String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>end-point-name - String - （过滤条件）终端节点实例名称。</li>
<li> end-point-id- String - （过滤条件）终端节点实例ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
接口获取。</li>
<li> vpc-id- String - （过滤条件）VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取单页返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置单页返回数量，默认为20，最大值为100。
 * @method array getEndPointId() 获取终端节点ID列表。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
获取。
 * @method void setEndPointId(array $EndPointId) 设置终端节点ID列表。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
获取。
 * @method string getIpAddressType() 获取协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 * @method void setIpAddressType(string $IpAddressType) 设置协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 */
class DescribeVpcEndPointRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。当前支持如下过滤条件：
<li> end-point-service-id- String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>end-point-name - String - （过滤条件）终端节点实例名称。</li>
<li> end-point-id- String - （过滤条件）终端节点实例ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
接口获取。</li>
<li> vpc-id- String - （过滤条件）VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 单页返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array 终端节点ID列表。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
获取。
     */
    public $EndPointId;

    /**
     * @var string 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
     */
    public $IpAddressType;

    /**
     * @param array $Filters 过滤条件。当前支持如下过滤条件：
<li> end-point-service-id- String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>end-point-name - String - （过滤条件）终端节点实例名称。</li>
<li> end-point-id- String - （过滤条件）终端节点实例ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
接口获取。</li>
<li> vpc-id- String - （过滤条件）VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 单页返回数量，默认为20，最大值为100。
     * @param array $EndPointId 终端节点ID列表。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 
获取。
     * @param string $IpAddressType 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
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

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("IpAddressType",$param) and $param["IpAddressType"] !== null) {
            $this->IpAddressType = $param["IpAddressType"];
        }
    }
}
