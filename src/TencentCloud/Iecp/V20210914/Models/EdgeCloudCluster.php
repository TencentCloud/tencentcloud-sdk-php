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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取边缘集群列表
 *
 * @method integer getEdgeId() 获取IECP侧边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdgeId(integer $EdgeId) 设置IECP侧边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getK8SVersion() 获取集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK8SVersion(string $K8SVersion) 设置集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDesc(string $ClusterDesc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodCIDR() 获取pod cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodCIDR(string $PodCIDR) 设置pod cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceCIDR() 获取service cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCIDR(string $ServiceCIDR) 设置service cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEdgeClusterVersion() 获取边缘版本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdgeClusterVersion(string $EdgeClusterVersion) 设置边缘版本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUID() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUID(string $UID) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeCloudCluster extends AbstractModel
{
    /**
     * @var integer IECP侧边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdgeId;

    /**
     * @var string 边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K8SVersion;

    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDesc;

    /**
     * @var string 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string pod cidr
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodCIDR;

    /**
     * @var string service cidr
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCIDR;

    /**
     * @var string 边缘版本类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdgeClusterVersion;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UID;

    /**
     * @param integer $EdgeId IECP侧边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 边缘集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $K8SVersion 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterDesc 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodCIDR pod cidr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceCIDR service cidr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EdgeClusterVersion 边缘版本类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UID 用户ID
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("EdgeClusterVersion",$param) and $param["EdgeClusterVersion"] !== null) {
            $this->EdgeClusterVersion = $param["EdgeClusterVersion"];
        }

        if (array_key_exists("UID",$param) and $param["UID"] !== null) {
            $this->UID = $param["UID"];
        }
    }
}
