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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableClusterDedicatedProxy请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。</p>
 * @method string getVpcId() 获取<p>私有网络ID，形如<code>vpc-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15778">DescribeVpcs</a>获取。若不指定，则使用集群已绑定的VPC。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如<code>vpc-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15778">DescribeVpcs</a>获取。若不指定，则使用集群已绑定的VPC。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如<code>subnet-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>获取。与VpcId需同时指定或同时不指定。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如<code>subnet-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>获取。与VpcId需同时指定或同时不指定。</p>
 */
class EnableClusterDedicatedProxyRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>私有网络ID，形如<code>vpc-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15778">DescribeVpcs</a>获取。若不指定，则使用集群已绑定的VPC。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如<code>subnet-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>获取。与VpcId需同时指定或同时不指定。</p>
     */
    public $SubnetId;

    /**
     * @param string $ClusterId <p>集群ID。</p>
     * @param string $VpcId <p>私有网络ID，形如<code>vpc-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15778">DescribeVpcs</a>获取。若不指定，则使用集群已绑定的VPC。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如<code>subnet-xxx</code>。可通过调用<a href="https://cloud.tencent.com/document/api/215/15784">DescribeSubnets</a>获取。与VpcId需同时指定或同时不指定。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
