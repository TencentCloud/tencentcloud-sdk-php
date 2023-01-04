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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群列表返回示例
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getStatusDesc() 获取状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method integer getZoneId() 获取集群地域
 * @method void setZoneId(integer $ZoneId) 设置集群地域
 * @method integer getAppId() 获取用户APPID
 * @method void setAppId(integer $AppId) 设置用户APPID
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getRunTime() 获取运行时间
 * @method void setRunTime(string $RunTime) 设置运行时间
 * @method string getMasterIp() 获取集群IP
 * @method void setMasterIp(string $MasterIp) 设置集群IP
 * @method string getEmrVersion() 获取集群版本
 * @method void setEmrVersion(string $EmrVersion) 设置集群版本
 * @method integer getChargeType() 获取集群计费类型
 * @method void setChargeType(integer $ChargeType) 设置集群计费类型
 * @method integer getId() 获取emr ID
 * @method void setId(integer $Id) 设置emr ID
 * @method integer getProductId() 获取产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(integer $ProductId) 设置产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(integer $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVpcId() 获取网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(integer $VpcId) 设置网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取实例标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置实例标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmInfo() 获取告警信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmInfo(string $AlarmInfo) 设置告警信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsWoodpeckerCluster() 获取是否是woodpecker集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) 设置是否是woodpecker集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取Vpc中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置Vpc中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取字符串VpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置字符串VpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqSubnetId() 获取字符串子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置字符串子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterClass() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterClass(string $ClusterClass) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMultiZoneCluster() 获取是否为跨AZ集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) 设置是否为跨AZ集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsHandsCluster() 获取是否手戳集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsHandsCluster(boolean $IsHandsCluster) 设置是否手戳集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutSideSoftInfo() 获取体外客户端组件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutSideSoftInfo(array $OutSideSoftInfo) 设置体外客户端组件信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmrListInstance extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var string 集群名字
     */
    public $ClusterName;

    /**
     * @var integer 集群地域
     */
    public $ZoneId;

    /**
     * @var integer 用户APPID
     */
    public $AppId;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 运行时间
     */
    public $RunTime;

    /**
     * @var string 集群IP
     */
    public $MasterIp;

    /**
     * @var string 集群版本
     */
    public $EmrVersion;

    /**
     * @var integer 集群计费类型
     */
    public $ChargeType;

    /**
     * @var integer emr ID
     */
    public $Id;

    /**
     * @var integer 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var integer 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer 状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 实例标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 告警信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmInfo;

    /**
     * @var integer 是否是woodpecker集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string Vpc中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var string 子网中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string 字符串VpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string 字符串子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqSubnetId;

    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterClass;

    /**
     * @var boolean 是否为跨AZ集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean 是否手戳集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsHandsCluster;

    /**
     * @var array 体外客户端组件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutSideSoftInfo;

    /**
     * @param string $ClusterId 集群ID
     * @param string $StatusDesc 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名字
     * @param integer $ZoneId 集群地域
     * @param integer $AppId 用户APPID
     * @param string $AddTime 创建时间
     * @param string $RunTime 运行时间
     * @param string $MasterIp 集群IP
     * @param string $EmrVersion 集群版本
     * @param integer $ChargeType 集群计费类型
     * @param integer $Id emr ID
     * @param integer $ProductId 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VpcId 网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 实例标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmInfo 告警信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsWoodpeckerCluster 是否是woodpecker集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName Vpc中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 字符串VpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqSubnetId 字符串子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterClass 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMultiZoneCluster 是否为跨AZ集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsHandsCluster 是否手戳集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OutSideSoftInfo 体外客户端组件信息
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("MasterIp",$param) and $param["MasterIp"] !== null) {
            $this->MasterIp = $param["MasterIp"];
        }

        if (array_key_exists("EmrVersion",$param) and $param["EmrVersion"] !== null) {
            $this->EmrVersion = $param["EmrVersion"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = $param["AlarmInfo"];
        }

        if (array_key_exists("IsWoodpeckerCluster",$param) and $param["IsWoodpeckerCluster"] !== null) {
            $this->IsWoodpeckerCluster = $param["IsWoodpeckerCluster"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ClusterClass",$param) and $param["ClusterClass"] !== null) {
            $this->ClusterClass = $param["ClusterClass"];
        }

        if (array_key_exists("IsMultiZoneCluster",$param) and $param["IsMultiZoneCluster"] !== null) {
            $this->IsMultiZoneCluster = $param["IsMultiZoneCluster"];
        }

        if (array_key_exists("IsHandsCluster",$param) and $param["IsHandsCluster"] !== null) {
            $this->IsHandsCluster = $param["IsHandsCluster"];
        }

        if (array_key_exists("OutSideSoftInfo",$param) and $param["OutSideSoftInfo"] !== null) {
            $this->OutSideSoftInfo = [];
            foreach ($param["OutSideSoftInfo"] as $key => $value){
                $obj = new SoftDependInfo();
                $obj->deserialize($value);
                array_push($this->OutSideSoftInfo, $obj);
            }
        }
    }
}
