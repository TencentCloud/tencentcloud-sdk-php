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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT集群防火墙地域部署状态查询
 *
 * @method string getCcnId() 获取<p>云联网ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网ID</p>
 * @method string getNatInsId() 获取<p>NAT网关ID</p>
 * @method void setNatInsId(string $NatInsId) 设置<p>NAT网关ID</p>
 * @method string getAssetType() 获取<p>资产类型，取值：nat_ccn-CCN+NAT场景，nat-独立NAT场景</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型，取值：nat_ccn-CCN+NAT场景，nat-独立NAT场景</p>
 * @method integer getRoutingMode() 获取<p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
 */
class NatClusterRegionStatusQuery extends AbstractModel
{
    /**
     * @var string <p>云联网ID</p>
     */
    public $CcnId;

    /**
     * @var string <p>NAT网关ID</p>
     */
    public $NatInsId;

    /**
     * @var string <p>资产类型，取值：nat_ccn-CCN+NAT场景，nat-独立NAT场景</p>
     */
    public $AssetType;

    /**
     * @var integer <p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
     */
    public $RoutingMode;

    /**
     * @param string $CcnId <p>云联网ID</p>
     * @param string $NatInsId <p>NAT网关ID</p>
     * @param string $AssetType <p>资产类型，取值：nat_ccn-CCN+NAT场景，nat-独立NAT场景</p>
     * @param integer $RoutingMode <p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }
    }
}
