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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * clb实例和监听器信息
 *
 * @method string getListenerId() 获取监听器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置监听器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerName() 获取监听器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerName(string $ListenerName) 设置监听器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerId() 获取负载均衡Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerName() 获取负载均衡名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVPort(integer $VPort) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumericalVpcId() 获取私有网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置私有网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerType() 获取负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取监听器域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置监听器域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerDomain() 获取负载均衡域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) 设置负载均衡域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbListenerListInfo extends AbstractModel
{
    /**
     * @var string 监听器id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerName;

    /**
     * @var string 负载均衡Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerName;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VPort;

    /**
     * @var string 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer 私有网络id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumericalVpcId;

    /**
     * @var string 负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @var string 监听器域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 负载均衡域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerDomain;

    /**
     * @param string $ListenerId 监听器id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerName 监听器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerId 负载均衡Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerName 负载均衡名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip 负载均衡ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VPort 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumericalVpcId 私有网络id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerType 负载均衡类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 监听器域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerDomain 负载均衡域名
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }
    }
}
