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
 * NAT防火墙引流集群地域状态
 *
 * @method string getNatInsId() 获取<p>NAT网关ID</p>
 * @method void setNatInsId(string $NatInsId) 设置<p>NAT网关ID</p>
 * @method string getCcnId() 获取<p>云联网ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网ID</p>
 * @method string getRegion() 获取<p>地域，如 ap-guangzhou</p>
 * @method void setRegion(string $Region) 设置<p>地域，如 ap-guangzhou</p>
 * @method string getStatus() 获取<p>地域集群状态，取值：<br>NotDeployed-未部署集群，<br>Deployed-已部署集群但未创建引流网络，<br>DeployedCustomOnly-已部署集群但内网段被覆盖，无法自动选择引流网段，需自定义设置引流网段<br>Auto-已创建引流网络(自动分配CIDR)，<br>Custom-已创建引流网络(自定义CIDR)</p>
 * @method void setStatus(string $Status) 设置<p>地域集群状态，取值：<br>NotDeployed-未部署集群，<br>Deployed-已部署集群但未创建引流网络，<br>DeployedCustomOnly-已部署集群但内网段被覆盖，无法自动选择引流网段，需自定义设置引流网段<br>Auto-已创建引流网络(自动分配CIDR)，<br>Custom-已创建引流网络(自定义CIDR)</p>
 * @method string getCidr() 获取<p>引流网络 CIDR，仅当 Status 为 Auto 或 Custom 时有值</p>
 * @method void setCidr(string $Cidr) 设置<p>引流网络 CIDR，仅当 Status 为 Auto 或 Custom 时有值</p>
 * @method integer getRoutingMode() 获取<p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
 */
class NatFwClusterRegionStatus extends AbstractModel
{
    /**
     * @var string <p>NAT网关ID</p>
     */
    public $NatInsId;

    /**
     * @var string <p>云联网ID</p>
     */
    public $CcnId;

    /**
     * @var string <p>地域，如 ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var string <p>地域集群状态，取值：<br>NotDeployed-未部署集群，<br>Deployed-已部署集群但未创建引流网络，<br>DeployedCustomOnly-已部署集群但内网段被覆盖，无法自动选择引流网段，需自定义设置引流网段<br>Auto-已创建引流网络(自动分配CIDR)，<br>Custom-已创建引流网络(自定义CIDR)</p>
     */
    public $Status;

    /**
     * @var string <p>引流网络 CIDR，仅当 Status 为 Auto 或 Custom 时有值</p>
     */
    public $Cidr;

    /**
     * @var integer <p>引流路由方法，0-多路由表模式，1-策略路由模式</p>
     */
    public $RoutingMode;

    /**
     * @param string $NatInsId <p>NAT网关ID</p>
     * @param string $CcnId <p>云联网ID</p>
     * @param string $Region <p>地域，如 ap-guangzhou</p>
     * @param string $Status <p>地域集群状态，取值：<br>NotDeployed-未部署集群，<br>Deployed-已部署集群但未创建引流网络，<br>DeployedCustomOnly-已部署集群但内网段被覆盖，无法自动选择引流网段，需自定义设置引流网段<br>Auto-已创建引流网络(自动分配CIDR)，<br>Custom-已创建引流网络(自定义CIDR)</p>
     * @param string $Cidr <p>引流网络 CIDR，仅当 Status 为 Auto 或 Custom 时有值</p>
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
        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }
    }
}
