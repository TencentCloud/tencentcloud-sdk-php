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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 闲置实例。
 *
 * @method string getLoadBalancerId() 获取负载均衡ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡ID
 * @method string getLoadBalancerName() 获取负载均衡名字
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡名字
 * @method string getRegion() 获取负载均衡所在地域
 * @method void setRegion(string $Region) 设置负载均衡所在地域
 * @method string getVip() 获取负载均衡的vip
 * @method void setVip(string $Vip) 设置负载均衡的vip
 * @method string getIdleReason() 获取闲置原因。NO_RULES：没有规则，NO_RS：有规则没有绑定子机。
 * @method void setIdleReason(string $IdleReason) 设置闲置原因。NO_RULES：没有规则，NO_RS：有规则没有绑定子机。
 * @method integer getStatus() 获取负载均衡实例的状态，包括
0：创建中，1：正常运行。
 * @method void setStatus(integer $Status) 设置负载均衡实例的状态，包括
0：创建中，1：正常运行。
 * @method integer getForward() 获取负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
 * @method void setForward(integer $Forward) 设置负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
 * @method string getDomain() 获取负载均衡域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置负载均衡域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class IdleLoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡ID
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡名字
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡所在地域
     */
    public $Region;

    /**
     * @var string 负载均衡的vip
     */
    public $Vip;

    /**
     * @var string 闲置原因。NO_RULES：没有规则，NO_RS：有规则没有绑定子机。
     */
    public $IdleReason;

    /**
     * @var integer 负载均衡实例的状态，包括
0：创建中，1：正常运行。
     */
    public $Status;

    /**
     * @var integer 负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
     */
    public $Forward;

    /**
     * @var string 负载均衡域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @param string $LoadBalancerId 负载均衡ID
     * @param string $LoadBalancerName 负载均衡名字
     * @param string $Region 负载均衡所在地域
     * @param string $Vip 负载均衡的vip
     * @param string $IdleReason 闲置原因。NO_RULES：没有规则，NO_RS：有规则没有绑定子机。
     * @param integer $Status 负载均衡实例的状态，包括
0：创建中，1：正常运行。
     * @param integer $Forward 负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
     * @param string $Domain 负载均衡域名
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("IdleReason",$param) and $param["IdleReason"] !== null) {
            $this->IdleReason = $param["IdleReason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
