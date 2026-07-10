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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于购买或者修改使用的可用区及子网映射结构体
 *
 * @method string getSubnetId() 获取<p>子网 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取<p>可用区ID。最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。<br>您可以通过调用<a href="https://cloud.tencent.com/document/api/1822/133727">DescribeZones</a>接口获取可用区ID对应的可用区的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置<p>可用区ID。最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。<br>您可以通过调用<a href="https://cloud.tencent.com/document/api/1822/133727">DescribeZones</a>接口获取可用区ID对应的可用区的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LoadBalancerAddress getLoadBalancerAddress() 获取<p>公网实例绑定的EIP实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerAddress(LoadBalancerAddress $LoadBalancerAddress) 设置<p>公网实例绑定的EIP实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneMappingsItem extends AbstractModel
{
    /**
     * @var string <p>子网 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string <p>可用区ID。最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。<br>您可以通过调用<a href="https://cloud.tencent.com/document/api/1822/133727">DescribeZones</a>接口获取可用区ID对应的可用区的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var LoadBalancerAddress <p>公网实例绑定的EIP实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerAddress;

    /**
     * @param string $SubnetId <p>子网 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId <p>可用区ID。最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。<br>您可以通过调用<a href="https://cloud.tencent.com/document/api/1822/133727">DescribeZones</a>接口获取可用区ID对应的可用区的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LoadBalancerAddress $LoadBalancerAddress <p>公网实例绑定的EIP实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LoadBalancerAddress",$param) and $param["LoadBalancerAddress"] !== null) {
            $this->LoadBalancerAddress = new LoadBalancerAddress();
            $this->LoadBalancerAddress->deserialize($param["LoadBalancerAddress"]);
        }
    }
}
