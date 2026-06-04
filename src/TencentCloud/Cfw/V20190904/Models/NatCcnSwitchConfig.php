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
 * NAT CCN防火墙开关配置
 *
 * @method string getNatInsId() 获取<p>NAT防火墙实例ID</p>
 * @method void setNatInsId(string $NatInsId) 设置<p>NAT防火墙实例ID</p>
 * @method string getCcnId() 获取<p>云联网实例ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网实例ID</p>
 * @method integer getSwitchMode() 获取<p>开关接入模式，1:自动接入，2:手动接入</p>
 * @method void setSwitchMode(integer $SwitchMode) 设置<p>开关接入模式，1:自动接入，2:手动接入</p>
 * @method integer getRoutingMode() 获取<p>引流路由方法，0:多路由表，1:策略路由。自动接入模式仅支持策略路由(1)；手动接入模式支持多路由表(0)和策略路由(1)</p>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>引流路由方法，0:多路由表，1:策略路由。自动接入模式仅支持策略路由(1)；手动接入模式支持多路由表(0)和策略路由(1)</p>
 * @method array getAccessInstanceList() 获取<p>接入的实例列表</p>
 * @method void setAccessInstanceList(array $AccessInstanceList) 设置<p>接入的实例列表</p>
 * @method string getLeadVpcCidr() 获取<p>引流VPC的CIDR网段</p>
 * @method void setLeadVpcCidr(string $LeadVpcCidr) 设置<p>引流VPC的CIDR网段</p>
 */
class NatCcnSwitchConfig extends AbstractModel
{
    /**
     * @var string <p>NAT防火墙实例ID</p>
     */
    public $NatInsId;

    /**
     * @var string <p>云联网实例ID</p>
     */
    public $CcnId;

    /**
     * @var integer <p>开关接入模式，1:自动接入，2:手动接入</p>
     */
    public $SwitchMode;

    /**
     * @var integer <p>引流路由方法，0:多路由表，1:策略路由。自动接入模式仅支持策略路由(1)；手动接入模式支持多路由表(0)和策略路由(1)</p>
     */
    public $RoutingMode;

    /**
     * @var array <p>接入的实例列表</p>
     */
    public $AccessInstanceList;

    /**
     * @var string <p>引流VPC的CIDR网段</p>
     */
    public $LeadVpcCidr;

    /**
     * @param string $NatInsId <p>NAT防火墙实例ID</p>
     * @param string $CcnId <p>云联网实例ID</p>
     * @param integer $SwitchMode <p>开关接入模式，1:自动接入，2:手动接入</p>
     * @param integer $RoutingMode <p>引流路由方法，0:多路由表，1:策略路由。自动接入模式仅支持策略路由(1)；手动接入模式支持多路由表(0)和策略路由(1)</p>
     * @param array $AccessInstanceList <p>接入的实例列表</p>
     * @param string $LeadVpcCidr <p>引流VPC的CIDR网段</p>
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

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }

        if (array_key_exists("AccessInstanceList",$param) and $param["AccessInstanceList"] !== null) {
            $this->AccessInstanceList = [];
            foreach ($param["AccessInstanceList"] as $key => $value){
                $obj = new AccessInstanceInfo();
                $obj->deserialize($value);
                array_push($this->AccessInstanceList, $obj);
            }
        }

        if (array_key_exists("LeadVpcCidr",$param) and $param["LeadVpcCidr"] !== null) {
            $this->LeadVpcCidr = $param["LeadVpcCidr"];
        }
    }
}
