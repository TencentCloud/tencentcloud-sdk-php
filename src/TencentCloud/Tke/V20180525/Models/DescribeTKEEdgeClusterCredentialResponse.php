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
 * DescribeTKEEdgeClusterCredential返回参数结构体
 *
 * @method array getAddresses() 获取集群的接入地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddresses(array $Addresses) 设置集群的接入地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClusterCredential getCredential() 获取集群的认证信息
 * @method void setCredential(ClusterCredential $Credential) 设置集群的认证信息
 * @method EdgeClusterPublicLB getPublicLB() 获取集群的公网访问信息
 * @method void setPublicLB(EdgeClusterPublicLB $PublicLB) 设置集群的公网访问信息
 * @method EdgeClusterInternalLB getInternalLB() 获取集群的内网访问信息
 * @method void setInternalLB(EdgeClusterInternalLB $InternalLB) 设置集群的内网访问信息
 * @method string getCoreDns() 获取集群的CoreDns部署信息
 * @method void setCoreDns(string $CoreDns) 设置集群的CoreDns部署信息
 * @method string getHealthRegion() 获取集群的健康检查多地域部署信息
 * @method void setHealthRegion(string $HealthRegion) 设置集群的健康检查多地域部署信息
 * @method string getHealth() 获取集群的健康检查部署信息
 * @method void setHealth(string $Health) 设置集群的健康检查部署信息
 * @method string getGridDaemon() 获取是否部署GridDaemon以支持headless service
 * @method void setGridDaemon(string $GridDaemon) 设置是否部署GridDaemon以支持headless service
 * @method string getUnitCluster() 获取公网访问kins集群
 * @method void setUnitCluster(string $UnitCluster) 设置公网访问kins集群
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTKEEdgeClusterCredentialResponse extends AbstractModel
{
    /**
     * @var array 集群的接入地址信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Addresses;

    /**
     * @var ClusterCredential 集群的认证信息
     */
    public $Credential;

    /**
     * @var EdgeClusterPublicLB 集群的公网访问信息
     */
    public $PublicLB;

    /**
     * @var EdgeClusterInternalLB 集群的内网访问信息
     */
    public $InternalLB;

    /**
     * @var string 集群的CoreDns部署信息
     */
    public $CoreDns;

    /**
     * @var string 集群的健康检查多地域部署信息
     */
    public $HealthRegion;

    /**
     * @var string 集群的健康检查部署信息
     */
    public $Health;

    /**
     * @var string 是否部署GridDaemon以支持headless service
     */
    public $GridDaemon;

    /**
     * @var string 公网访问kins集群
     */
    public $UnitCluster;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Addresses 集群的接入地址信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClusterCredential $Credential 集群的认证信息
     * @param EdgeClusterPublicLB $PublicLB 集群的公网访问信息
     * @param EdgeClusterInternalLB $InternalLB 集群的内网访问信息
     * @param string $CoreDns 集群的CoreDns部署信息
     * @param string $HealthRegion 集群的健康检查多地域部署信息
     * @param string $Health 集群的健康检查部署信息
     * @param string $GridDaemon 是否部署GridDaemon以支持headless service
     * @param string $UnitCluster 公网访问kins集群
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = [];
            foreach ($param["Addresses"] as $key => $value){
                $obj = new IPAddress();
                $obj->deserialize($value);
                array_push($this->Addresses, $obj);
            }
        }

        if (array_key_exists("Credential",$param) and $param["Credential"] !== null) {
            $this->Credential = new ClusterCredential();
            $this->Credential->deserialize($param["Credential"]);
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

        if (array_key_exists("UnitCluster",$param) and $param["UnitCluster"] !== null) {
            $this->UnitCluster = $param["UnitCluster"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
