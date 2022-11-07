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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TKE集群信息详情
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getStatus() 获取TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常)
 * @method void setStatus(string $Status) 设置TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常)
 * @method boolean getHasAgent() 获取是否安装Agent，true: 是，false: 否
 * @method void setHasAgent(boolean $HasAgent) 设置是否安装Agent，true: 是，false: 否
 * @method string getAgentId() 获取采集器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置采集器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getTkeRegion() 获取TKE集群区域ID
 * @method void setTkeRegion(string $TkeRegion) 设置TKE集群区域ID
 * @method string getClusterType() 获取集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER
 * @method void setClusterType(string $ClusterType) 设置集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER
 */
class InLongTkeDetail extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常)
     */
    public $Status;

    /**
     * @var boolean 是否安装Agent，true: 是，false: 否
     */
    public $HasAgent;

    /**
     * @var string 采集器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string TKE集群区域ID
     */
    public $TkeRegion;

    /**
     * @var string 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER
     */
    public $ClusterType;

    /**
     * @param string $ClusterId 集群Id
     * @param string $ClusterName 集群名称
     * @param string $Status TKE集群状态 (Running 运行中 Creating 创建中 Idling 闲置中 Abnormal 异常)
     * @param boolean $HasAgent 是否安装Agent，true: 是，false: 否
     * @param string $AgentId 采集器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC ID
     * @param string $TkeRegion TKE集群区域ID
     * @param string $ClusterType 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HasAgent",$param) and $param["HasAgent"] !== null) {
            $this->HasAgent = $param["HasAgent"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TkeRegion",$param) and $param["TkeRegion"] !== null) {
            $this->TkeRegion = $param["TkeRegion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
