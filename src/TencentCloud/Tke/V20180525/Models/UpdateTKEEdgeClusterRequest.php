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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTKEEdgeCluster请求参数结构体
 *
 * @method string getClusterId() 获取边缘计算集群ID
 * @method void setClusterId(string $ClusterId) 设置边缘计算集群ID
 * @method string getClusterName() 获取边缘计算集群名称
 * @method void setClusterName(string $ClusterName) 设置边缘计算集群名称
 * @method string getClusterDesc() 获取边缘计算集群描述信息
 * @method void setClusterDesc(string $ClusterDesc) 设置边缘计算集群描述信息
 * @method string getPodCIDR() 获取边缘计算集群的pod cidr
 * @method void setPodCIDR(string $PodCIDR) 设置边缘计算集群的pod cidr
 * @method string getServiceCIDR() 获取边缘计算集群的service cidr
 * @method void setServiceCIDR(string $ServiceCIDR) 设置边缘计算集群的service cidr
 * @method EdgeClusterPublicLB getPublicLB() 获取边缘计算集群公网访问LB信息
 * @method void setPublicLB(EdgeClusterPublicLB $PublicLB) 设置边缘计算集群公网访问LB信息
 * @method EdgeClusterInternalLB getInternalLB() 获取边缘计算集群内网访问LB信息
 * @method void setInternalLB(EdgeClusterInternalLB $InternalLB) 设置边缘计算集群内网访问LB信息
 * @method string getCoreDns() 获取边缘计算集群的CoreDns部署信息
 * @method void setCoreDns(string $CoreDns) 设置边缘计算集群的CoreDns部署信息
 * @method string getHealthRegion() 获取边缘计算集群的健康检查多地域部署信息
 * @method void setHealthRegion(string $HealthRegion) 设置边缘计算集群的健康检查多地域部署信息
 * @method string getHealth() 获取边缘计算集群的健康检查部署信息
 * @method void setHealth(string $Health) 设置边缘计算集群的健康检查部署信息
 * @method string getGridDaemon() 获取边缘计算集群的GridDaemon部署信息
 * @method void setGridDaemon(string $GridDaemon) 设置边缘计算集群的GridDaemon部署信息
 * @method boolean getAutoUpgradeClusterLevel() 获取边缘集群开启自动升配
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) 设置边缘集群开启自动升配
 * @method string getClusterLevel() 获取边缘集群的集群规模
 * @method void setClusterLevel(string $ClusterLevel) 设置边缘集群的集群规模
 */
class UpdateTKEEdgeClusterRequest extends AbstractModel
{
    /**
     * @var string 边缘计算集群ID
     */
    public $ClusterId;

    /**
     * @var string 边缘计算集群名称
     */
    public $ClusterName;

    /**
     * @var string 边缘计算集群描述信息
     */
    public $ClusterDesc;

    /**
     * @var string 边缘计算集群的pod cidr
     */
    public $PodCIDR;

    /**
     * @var string 边缘计算集群的service cidr
     */
    public $ServiceCIDR;

    /**
     * @var EdgeClusterPublicLB 边缘计算集群公网访问LB信息
     */
    public $PublicLB;

    /**
     * @var EdgeClusterInternalLB 边缘计算集群内网访问LB信息
     */
    public $InternalLB;

    /**
     * @var string 边缘计算集群的CoreDns部署信息
     */
    public $CoreDns;

    /**
     * @var string 边缘计算集群的健康检查多地域部署信息
     */
    public $HealthRegion;

    /**
     * @var string 边缘计算集群的健康检查部署信息
     */
    public $Health;

    /**
     * @var string 边缘计算集群的GridDaemon部署信息
     */
    public $GridDaemon;

    /**
     * @var boolean 边缘集群开启自动升配
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var string 边缘集群的集群规模
     */
    public $ClusterLevel;

    /**
     * @param string $ClusterId 边缘计算集群ID
     * @param string $ClusterName 边缘计算集群名称
     * @param string $ClusterDesc 边缘计算集群描述信息
     * @param string $PodCIDR 边缘计算集群的pod cidr
     * @param string $ServiceCIDR 边缘计算集群的service cidr
     * @param EdgeClusterPublicLB $PublicLB 边缘计算集群公网访问LB信息
     * @param EdgeClusterInternalLB $InternalLB 边缘计算集群内网访问LB信息
     * @param string $CoreDns 边缘计算集群的CoreDns部署信息
     * @param string $HealthRegion 边缘计算集群的健康检查多地域部署信息
     * @param string $Health 边缘计算集群的健康检查部署信息
     * @param string $GridDaemon 边缘计算集群的GridDaemon部署信息
     * @param boolean $AutoUpgradeClusterLevel 边缘集群开启自动升配
     * @param string $ClusterLevel 边缘集群的集群规模
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("PublicLB",$param) and $param["PublicLB"] !== null) {
            $this->PublicLB = new EdgeClusterPublicLB();
            $this->PublicLB->deserialize($param["PublicLB"]);
        }

        if (array_key_exists("InternalLB",$param) and $param["InternalLB"] !== null) {
            $this->InternalLB = new EdgeClusterInternalLB();
            $this->InternalLB->deserialize($param["InternalLB"]);
        }

        if (array_key_exists("CoreDns",$param) and $param["CoreDns"] !== null) {
            $this->CoreDns = $param["CoreDns"];
        }

        if (array_key_exists("HealthRegion",$param) and $param["HealthRegion"] !== null) {
            $this->HealthRegion = $param["HealthRegion"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("GridDaemon",$param) and $param["GridDaemon"] !== null) {
            $this->GridDaemon = $param["GridDaemon"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = $param["AutoUpgradeClusterLevel"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }
    }
}
