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
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method integer getForward() 获取应用型负载均衡标识，1：应用型负载均衡，0：传统型的负载均衡。
 * @method void setForward(integer $Forward) 设置应用型负载均衡标识，1：应用型负载均衡，0：传统型的负载均衡。
 * @method string getDomain() 获取负载均衡实例的域名，内网类型负载均衡以及应用型负载均衡实例不提供该字段
 * @method void setDomain(string $Domain) 设置负载均衡实例的域名，内网类型负载均衡以及应用型负载均衡实例不提供该字段
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 列表。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 列表。
 * @method integer getStatus() 获取负载均衡实例的状态，包括
0：创建中，1：正常运行。
 * @method void setStatus(integer $Status) 设置负载均衡实例的状态，包括
0：创建中，1：正常运行。
 * @method string getCreateTime() 获取负载均衡实例的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置负载均衡实例的创建时间。
 * @method string getStatusTime() 获取负载均衡实例的上次状态转换时间。
 * @method void setStatusTime(string $StatusTime) 设置负载均衡实例的上次状态转换时间。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID， 0 表示默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID， 0 表示默认项目。
 * @method string getVpcId() 获取私有网络的 ID
 * @method void setVpcId(string $VpcId) 设置私有网络的 ID
 * @method integer getOpenBgp() 获取高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
 * @method void setOpenBgp(integer $OpenBgp) 设置高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
 * @method boolean getSnat() 获取在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
 * @method void setSnat(boolean $Snat) 设置在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
 * @method integer getIsolation() 获取0：表示未被隔离，1：表示被隔离。
 * @method void setIsolation(integer $Isolation) 设置0：表示未被隔离，1：表示被隔离。
 * @method string getLog() 获取用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
 * @method void setLog(string $Log) 设置用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
 * @method string getSubnetId() 获取负载均衡实例所在的子网（仅对内网VPC型LB有意义）
 * @method void setSubnetId(string $SubnetId) 设置负载均衡实例所在的子网（仅对内网VPC型LB有意义）
 */

/**
 *负载均衡实例的信息
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     */
    public $LoadBalancerType;

    /**
     * @var integer 应用型负载均衡标识，1：应用型负载均衡，0：传统型的负载均衡。
     */
    public $Forward;

    /**
     * @var string 负载均衡实例的域名，内网类型负载均衡以及应用型负载均衡实例不提供该字段
     */
    public $Domain;

    /**
     * @var array 负载均衡实例的 VIP 列表。
     */
    public $LoadBalancerVips;

    /**
     * @var integer 负载均衡实例的状态，包括
0：创建中，1：正常运行。
     */
    public $Status;

    /**
     * @var string 负载均衡实例的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 负载均衡实例的上次状态转换时间。
     */
    public $StatusTime;

    /**
     * @var integer 负载均衡实例所属的项目 ID， 0 表示默认项目。
     */
    public $ProjectId;

    /**
     * @var string 私有网络的 ID
     */
    public $VpcId;

    /**
     * @var integer 高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
     */
    public $OpenBgp;

    /**
     * @var boolean 在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
     */
    public $Snat;

    /**
     * @var integer 0：表示未被隔离，1：表示被隔离。
     */
    public $Isolation;

    /**
     * @var string 用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
     */
    public $Log;

    /**
     * @var string 负载均衡实例所在的子网（仅对内网VPC型LB有意义）
     */
    public $SubnetId;
    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $LoadBalancerName 负载均衡实例的名称。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     * @param integer $Forward 应用型负载均衡标识，1：应用型负载均衡，0：传统型的负载均衡。
     * @param string $Domain 负载均衡实例的域名，内网类型负载均衡以及应用型负载均衡实例不提供该字段
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 列表。
     * @param integer $Status 负载均衡实例的状态，包括
0：创建中，1：正常运行。
     * @param string $CreateTime 负载均衡实例的创建时间。
     * @param string $StatusTime 负载均衡实例的上次状态转换时间。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID， 0 表示默认项目。
     * @param string $VpcId 私有网络的 ID
     * @param integer $OpenBgp 高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
     * @param boolean $Snat 在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
     * @param integer $Isolation 0：表示未被隔离，1：表示被隔离。
     * @param string $Log 用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
     * @param string $SubnetId 负载均衡实例所在的子网（仅对内网VPC型LB有意义）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("OpenBgp",$param) and $param["OpenBgp"] !== null) {
            $this->OpenBgp = $param["OpenBgp"];
        }

        if (array_key_exists("Snat",$param) and $param["Snat"] !== null) {
            $this->Snat = $param["Snat"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
