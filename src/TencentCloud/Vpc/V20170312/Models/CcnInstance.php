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
 * 云联网（CCN）关联实例（Instance）对象。
 *
 * @method string getInstanceId() 获取<p>关联实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>关联实例ID。</p>
 * @method string getInstanceRegion() 获取<p>关联实例ID所属大区，例如：ap-guangzhou。</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>关联实例ID所属大区，例如：ap-guangzhou。</p>
 * @method string getInstanceType() 获取<p>关联实例类型，可选值：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li><li><code>VPNGW</code>：VPNGW类型</li>
 * @method void setInstanceType(string $InstanceType) 设置<p>关联实例类型，可选值：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li><li><code>VPNGW</code>：VPNGW类型</li>
 * @method string getDescription() 获取<p>备注</p>
 * @method void setDescription(string $Description) 设置<p>备注</p>
 * @method string getRouteTableId() 获取<p>实例关联的路由表ID。</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>实例关联的路由表ID。</p>
 * @method string getOrderType() 获取<p>实例付费方式</p><p>枚举值：</p><ul><li>PayByCcnOwner： CCN所在账号付费</li><li>PayByInstanceOwner： 关联实例所在账号付费</li></ul>
 * @method void setOrderType(string $OrderType) 设置<p>实例付费方式</p><p>枚举值：</p><ul><li>PayByCcnOwner： CCN所在账号付费</li><li>PayByInstanceOwner： 关联实例所在账号付费</li></ul>
 */
class CcnInstance extends AbstractModel
{
    /**
     * @var string <p>关联实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>关联实例ID所属大区，例如：ap-guangzhou。</p>
     */
    public $InstanceRegion;

    /**
     * @var string <p>关联实例类型，可选值：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li><li><code>VPNGW</code>：VPNGW类型</li>
     */
    public $InstanceType;

    /**
     * @var string <p>备注</p>
     */
    public $Description;

    /**
     * @var string <p>实例关联的路由表ID。</p>
     */
    public $RouteTableId;

    /**
     * @var string <p>实例付费方式</p><p>枚举值：</p><ul><li>PayByCcnOwner： CCN所在账号付费</li><li>PayByInstanceOwner： 关联实例所在账号付费</li></ul>
     */
    public $OrderType;

    /**
     * @param string $InstanceId <p>关联实例ID。</p>
     * @param string $InstanceRegion <p>关联实例ID所属大区，例如：ap-guangzhou。</p>
     * @param string $InstanceType <p>关联实例类型，可选值：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li><li><code>VPNGW</code>：VPNGW类型</li>
     * @param string $Description <p>备注</p>
     * @param string $RouteTableId <p>实例关联的路由表ID。</p>
     * @param string $OrderType <p>实例付费方式</p><p>枚举值：</p><ul><li>PayByCcnOwner： CCN所在账号付费</li><li>PayByInstanceOwner： 关联实例所在账号付费</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
