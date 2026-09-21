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
 * AssignIpv6CidrBlock请求参数结构体
 *
 * @method string getVpcId() 获取<p><code>VPC</code>实例<code>ID</code>，形如：<code>vpc-f49l6u0z</code>。</p>
 * @method void setVpcId(string $VpcId) 设置<p><code>VPC</code>实例<code>ID</code>，形如：<code>vpc-f49l6u0z</code>。</p>
 * @method string getAddressType() 获取<p>申请IPv6 Cidr 的类型，<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</p>
 * @method void setAddressType(string $AddressType) 设置<p>申请IPv6 Cidr 的类型，<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</p>
 */
class AssignIpv6CidrBlockRequest extends AbstractModel
{
    /**
     * @var string <p><code>VPC</code>实例<code>ID</code>，形如：<code>vpc-f49l6u0z</code>。</p>
     */
    public $VpcId;

    /**
     * @var string <p>申请IPv6 Cidr 的类型，<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</p>
     */
    public $AddressType;

    /**
     * @param string $VpcId <p><code>VPC</code>实例<code>ID</code>，形如：<code>vpc-f49l6u0z</code>。</p>
     * @param string $AddressType <p>申请IPv6 Cidr 的类型，<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
