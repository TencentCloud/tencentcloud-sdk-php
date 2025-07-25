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
 * RemoveBandwidthPackageResources请求参数结构体
 *
 * @method array getResourceIds() 获取资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
 * @method void setResourceIds(array $ResourceIds) 设置资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
 * @method string getBandwidthPackageId() 获取带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
 * @method string getResourceType() 获取资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
 * @method void setResourceType(string $ResourceType) 设置资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
 */
class RemoveBandwidthPackageResourcesRequest extends AbstractModel
{
    /**
     * @var array 资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
     */
    public $ResourceIds;

    /**
     * @var string 带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
     */
    public $BandwidthPackageId;

    /**
     * @var string 资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
     */
    public $ResourceType;

    /**
     * @param array $ResourceIds 资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
     * @param string $BandwidthPackageId 带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
     * @param string $ResourceType 资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
