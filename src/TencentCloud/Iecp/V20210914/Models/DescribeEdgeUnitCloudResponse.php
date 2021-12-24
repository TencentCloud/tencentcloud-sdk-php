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
 * DescribeEdgeUnitCloud返回参数结构体
 *
 * @method string getName() 获取边缘集群名称
 * @method void setName(string $Name) 设置边缘集群名称
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLiveTime() 获取集群最后探活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveTime(string $LiveTime) 设置集群最后探活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterStatus() 获取集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterStatus(string $MasterStatus) 设置集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getK8sVersion() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK8sVersion(string $K8sVersion) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodCIDR() 获取pod cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodCIDR(string $PodCIDR) 设置pod cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceCIDR() 获取service cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCIDR(string $ServiceCIDR) 设置service cidr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAPIServerAddress() 获取集群内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPIServerAddress(string $APIServerAddress) 设置集群内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAPIServerExposeAddress() 获取集群外网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPIServerExposeAddress(string $APIServerExposeAddress) 设置集群外网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUID() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUID(string $UID) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnitID() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitID(integer $UnitID) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCluster() 获取集群标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCluster(string $Cluster) 设置集群标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method EdgeUnitStatisticItem getNode() 获取节点统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNode(EdgeUnitStatisticItem $Node) 设置节点统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method EdgeUnitStatisticItem getWorkload() 获取工作负载统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkload(EdgeUnitStatisticItem $Workload) 设置工作负载统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method EdgeUnitStatisticItem getGrid() 获取Grid应用统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrid(EdgeUnitStatisticItem $Grid) 设置Grid应用统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method EdgeUnitStatisticItem getSubDevice() 获取设备统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubDevice(EdgeUnitStatisticItem $SubDevice) 设置设备统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeUnitCloudResponse extends AbstractModel
{
    /**
     * @var string 边缘集群名称
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 集群最后探活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveTime;

    /**
     * @var string 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterStatus;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K8sVersion;

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
     * @var string 集群内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APIServerAddress;

    /**
     * @var string 集群外网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APIServerExposeAddress;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UID;

    /**
     * @var integer 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitID;

    /**
     * @var string 集群标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cluster;

    /**
     * @var EdgeUnitStatisticItem 节点统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Node;

    /**
     * @var EdgeUnitStatisticItem 工作负载统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workload;

    /**
     * @var EdgeUnitStatisticItem Grid应用统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grid;

    /**
     * @var EdgeUnitStatisticItem 设备统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubDevice;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 边缘集群名称
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LiveTime 集群最后探活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterStatus 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $K8sVersion 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodCIDR pod cidr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceCIDR service cidr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $APIServerAddress 集群内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $APIServerExposeAddress 集群外网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UID 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnitID 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cluster 集群标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param EdgeUnitStatisticItem $Node 节点统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param EdgeUnitStatisticItem $Workload 工作负载统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param EdgeUnitStatisticItem $Grid Grid应用统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param EdgeUnitStatisticItem $SubDevice 设备统计
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LiveTime",$param) and $param["LiveTime"] !== null) {
            $this->LiveTime = $param["LiveTime"];
        }

        if (array_key_exists("MasterStatus",$param) and $param["MasterStatus"] !== null) {
            $this->MasterStatus = $param["MasterStatus"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("APIServerAddress",$param) and $param["APIServerAddress"] !== null) {
            $this->APIServerAddress = $param["APIServerAddress"];
        }

        if (array_key_exists("APIServerExposeAddress",$param) and $param["APIServerExposeAddress"] !== null) {
            $this->APIServerExposeAddress = $param["APIServerExposeAddress"];
        }

        if (array_key_exists("UID",$param) and $param["UID"] !== null) {
            $this->UID = $param["UID"];
        }

        if (array_key_exists("UnitID",$param) and $param["UnitID"] !== null) {
            $this->UnitID = $param["UnitID"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = new EdgeUnitStatisticItem();
            $this->Node->deserialize($param["Node"]);
        }

        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = new EdgeUnitStatisticItem();
            $this->Workload->deserialize($param["Workload"]);
        }

        if (array_key_exists("Grid",$param) and $param["Grid"] !== null) {
            $this->Grid = new EdgeUnitStatisticItem();
            $this->Grid->deserialize($param["Grid"]);
        }

        if (array_key_exists("SubDevice",$param) and $param["SubDevice"] !== null) {
            $this->SubDevice = new EdgeUnitStatisticItem();
            $this->SubDevice->deserialize($param["SubDevice"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
