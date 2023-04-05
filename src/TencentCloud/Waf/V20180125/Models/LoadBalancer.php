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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡的监听器
 *
 * @method string getLoadBalancerId() 获取负载均衡LD的ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡LD的ID
 * @method string getLoadBalancerName() 获取负载均衡LD的名称
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡LD的名称
 * @method string getListenerId() 获取负载均衡监听器的ID
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器的ID
 * @method string getListenerName() 获取负载均衡监听器的名称
 * @method void setListenerName(string $ListenerName) 设置负载均衡监听器的名称
 * @method string getVip() 获取负载均衡实例的IP
 * @method void setVip(string $Vip) 设置负载均衡实例的IP
 * @method integer getVport() 获取负载均衡实例的端口
 * @method void setVport(integer $Vport) 设置负载均衡实例的端口
 * @method string getRegion() 获取负载均衡LD的地域
 * @method void setRegion(string $Region) 设置负载均衡LD的地域
 * @method string getProtocol() 获取监听器协议，http、https
 * @method void setProtocol(string $Protocol) 设置监听器协议，http、https
 * @method string getZone() 获取负载均衡监听器所在的zone
 * @method void setZone(string $Zone) 设置负载均衡监听器所在的zone
 * @method integer getNumericalVpcId() 获取负载均衡的VPCID，公网为-1，内网按实际填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置负载均衡的VPCID，公网为-1，内网按实际填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerType() 获取负载均衡的网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡的网络类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡LD的ID
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡LD的名称
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡监听器的ID
     */
    public $ListenerId;

    /**
     * @var string 负载均衡监听器的名称
     */
    public $ListenerName;

    /**
     * @var string 负载均衡实例的IP
     */
    public $Vip;

    /**
     * @var integer 负载均衡实例的端口
     */
    public $Vport;

    /**
     * @var string 负载均衡LD的地域
     */
    public $Region;

    /**
     * @var string 监听器协议，http、https
     */
    public $Protocol;

    /**
     * @var string 负载均衡监听器所在的zone
     */
    public $Zone;

    /**
     * @var integer 负载均衡的VPCID，公网为-1，内网按实际填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumericalVpcId;

    /**
     * @var string 负载均衡的网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @param string $LoadBalancerId 负载均衡LD的ID
     * @param string $LoadBalancerName 负载均衡LD的名称
     * @param string $ListenerId 负载均衡监听器的ID
     * @param string $ListenerName 负载均衡监听器的名称
     * @param string $Vip 负载均衡实例的IP
     * @param integer $Vport 负载均衡实例的端口
     * @param string $Region 负载均衡LD的地域
     * @param string $Protocol 监听器协议，http、https
     * @param string $Zone 负载均衡监听器所在的zone
     * @param integer $NumericalVpcId 负载均衡的VPCID，公网为-1，内网按实际填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerType 负载均衡的网络类型
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }
    }
}
