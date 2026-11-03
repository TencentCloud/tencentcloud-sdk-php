<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getStatusDesc() 获取<p>常见状态描述：集群生产中,集群运行中,集群创建中,集群已关闭,集群已删除</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>常见状态描述：集群生产中,集群运行中,集群创建中,集群已关闭,集群已删除</p>
 * @method string getClusterName() 获取<p>集群名字</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名字</p>
 * @method integer getZoneId() 获取<p>集群地域</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>集群地域</p>
 * @method integer getAppId() 获取<p>用户APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户APPID</p>
 * @method string getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>创建时间</p>
 * @method string getRunTime() 获取<p>运行时间</p>
 * @method void setRunTime(string $RunTime) 设置<p>运行时间</p>
 * @method string getMasterIp() 获取<p>集群IP</p>
 * @method void setMasterIp(string $MasterIp) 设置<p>集群IP</p>
 * @method string getEmrVersion() 获取<p>集群版本</p>
 * @method void setEmrVersion(string $EmrVersion) 设置<p>集群版本</p>
 * @method integer getChargeType() 获取<p>集群计费类型</p>
 * @method void setChargeType(integer $ChargeType) 设置<p>集群计费类型</p>
 * @method integer getId() 获取<p>emr ID</p>
 * @method void setId(integer $Id) 设置<p>emr ID</p>
 * @method integer getProductId() 获取<p>产品ID</p>
 * @method void setProductId(integer $ProductId) 设置<p>产品ID</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method integer getRegionId() 获取<p>区域</p>
 * @method void setRegionId(integer $RegionId) 设置<p>区域</p>
 * @method integer getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>子网ID</p>
 * @method integer getVpcId() 获取<p>网络ID</p>
 * @method void setVpcId(integer $VpcId) 设置<p>网络ID</p>
 * @method string getZone() 获取<p>地区</p>
 * @method void setZone(string $Zone) 设置<p>地区</p>
 * @method integer getStatus() 获取<p>状态码, 取值为-2(集群已删除), -1(集群已关闭), 0(集群生产中), 2(集群运行中), 3(集群创建中)</p>
 * @method void setStatus(integer $Status) 设置<p>状态码, 取值为-2(集群已删除), -1(集群已关闭), 0(集群生产中), 2(集群运行中), 3(集群创建中)</p>
 * @method array getTags() 获取<p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmInfo() 获取<p>告警信息</p>
 * @method void setAlarmInfo(string $AlarmInfo) 设置<p>告警信息</p>
 * @method integer getIsWoodpeckerCluster() 获取<p>是否是woodpecker集群</p>
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) 设置<p>是否是woodpecker集群</p>
 * @method string getVpcName() 获取<p>Vpc中文</p>
 * @method void setVpcName(string $VpcName) 设置<p>Vpc中文</p>
 * @method string getSubnetName() 获取<p>子网中文</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网中文</p>
 * @method string getUniqVpcId() 获取<p>字符串VpcId</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>字符串VpcId</p>
 * @method string getUniqSubnetId() 获取<p>字符串子网</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>字符串子网</p>
 * @method string getClusterClass() 获取<p>集群类型</p>
 * @method void setClusterClass(string $ClusterClass) 设置<p>集群类型</p>
 * @method boolean getIsMultiZoneCluster() 获取<p>是否为跨AZ集群</p>
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) 设置<p>是否为跨AZ集群</p>
 * @method boolean getIsHandsCluster() 获取<p>是否手戳集群</p>
 * @method void setIsHandsCluster(boolean $IsHandsCluster) 设置<p>是否手戳集群</p>
 * @method array getOutSideSoftInfo() 获取<p>体外客户端组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutSideSoftInfo(array $OutSideSoftInfo) 设置<p>体外客户端组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportOutsideCluster() 获取<p>当前集群的应用场景是否支持体外客户端</p>
 * @method void setIsSupportOutsideCluster(boolean $IsSupportOutsideCluster) 设置<p>当前集群的应用场景是否支持体外客户端</p>
 * @method boolean getIsDedicatedCluster() 获取<p>是否专有集群场景集群</p>
 * @method void setIsDedicatedCluster(boolean $IsDedicatedCluster) 设置<p>是否专有集群场景集群</p>
 * @method boolean getIsSupportClone() 获取<p>集群支持克隆</p>
 * @method void setIsSupportClone(boolean $IsSupportClone) 设置<p>集群支持克隆</p>
 * @method array getSoft() 获取<p>集群包含的组件</p>
 * @method void setSoft(array $Soft) 设置<p>集群包含的组件</p>
 * @method boolean getIsTerminateProtection() 获取<p>是否开启了实例保护</p>
 * @method void setIsTerminateProtection(boolean $IsTerminateProtection) 设置<p>是否开启了实例保护</p>
 * @method McpPasswordInfo getMcpPasswordInfo() 获取<p>mcp密码信息</p>
 * @method void setMcpPasswordInfo(McpPasswordInfo $McpPasswordInfo) 设置<p>mcp密码信息</p>
 */
class EmrListInstance extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>常见状态描述：集群生产中,集群运行中,集群创建中,集群已关闭,集群已删除</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>集群名字</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>集群地域</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>用户APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>运行时间</p>
     */
    public $RunTime;

    /**
     * @var string <p>集群IP</p>
     */
    public $MasterIp;

    /**
     * @var string <p>集群版本</p>
     */
    public $EmrVersion;

    /**
     * @var integer <p>集群计费类型</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>emr ID</p>
     */
    public $Id;

    /**
     * @var integer <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>区域</p>
     */
    public $RegionId;

    /**
     * @var integer <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>地区</p>
     */
    public $Zone;

    /**
     * @var integer <p>状态码, 取值为-2(集群已删除), -1(集群已关闭), 0(集群生产中), 2(集群运行中), 3(集群创建中)</p>
     */
    public $Status;

    /**
     * @var array <p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>告警信息</p>
     */
    public $AlarmInfo;

    /**
     * @var integer <p>是否是woodpecker集群</p>
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string <p>Vpc中文</p>
     */
    public $VpcName;

    /**
     * @var string <p>子网中文</p>
     */
    public $SubnetName;

    /**
     * @var string <p>字符串VpcId</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>字符串子网</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>集群类型</p>
     */
    public $ClusterClass;

    /**
     * @var boolean <p>是否为跨AZ集群</p>
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean <p>是否手戳集群</p>
     */
    public $IsHandsCluster;

    /**
     * @var array <p>体外客户端组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutSideSoftInfo;

    /**
     * @var boolean <p>当前集群的应用场景是否支持体外客户端</p>
     */
    public $IsSupportOutsideCluster;

    /**
     * @var boolean <p>是否专有集群场景集群</p>
     */
    public $IsDedicatedCluster;

    /**
     * @var boolean <p>集群支持克隆</p>
     */
    public $IsSupportClone;

    /**
     * @var array <p>集群包含的组件</p>
     */
    public $Soft;

    /**
     * @var boolean <p>是否开启了实例保护</p>
     */
    public $IsTerminateProtection;

    /**
     * @var McpPasswordInfo <p>mcp密码信息</p>
     */
    public $McpPasswordInfo;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $StatusDesc <p>常见状态描述：集群生产中,集群运行中,集群创建中,集群已关闭,集群已删除</p>
     * @param string $ClusterName <p>集群名字</p>
     * @param integer $ZoneId <p>集群地域</p>
     * @param integer $AppId <p>用户APPID</p>
     * @param string $AddTime <p>创建时间</p>
     * @param string $RunTime <p>运行时间</p>
     * @param string $MasterIp <p>集群IP</p>
     * @param string $EmrVersion <p>集群版本</p>
     * @param integer $ChargeType <p>集群计费类型</p>
     * @param integer $Id <p>emr ID</p>
     * @param integer $ProductId <p>产品ID</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param integer $RegionId <p>区域</p>
     * @param integer $SubnetId <p>子网ID</p>
     * @param integer $VpcId <p>网络ID</p>
     * @param string $Zone <p>地区</p>
     * @param integer $Status <p>状态码, 取值为-2(集群已删除), -1(集群已关闭), 0(集群生产中), 2(集群运行中), 3(集群创建中)</p>
     * @param array $Tags <p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmInfo <p>告警信息</p>
     * @param integer $IsWoodpeckerCluster <p>是否是woodpecker集群</p>
     * @param string $VpcName <p>Vpc中文</p>
     * @param string $SubnetName <p>子网中文</p>
     * @param string $UniqVpcId <p>字符串VpcId</p>
     * @param string $UniqSubnetId <p>字符串子网</p>
     * @param string $ClusterClass <p>集群类型</p>
     * @param boolean $IsMultiZoneCluster <p>是否为跨AZ集群</p>
     * @param boolean $IsHandsCluster <p>是否手戳集群</p>
     * @param array $OutSideSoftInfo <p>体外客户端组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportOutsideCluster <p>当前集群的应用场景是否支持体外客户端</p>
     * @param boolean $IsDedicatedCluster <p>是否专有集群场景集群</p>
     * @param boolean $IsSupportClone <p>集群支持克隆</p>
     * @param array $Soft <p>集群包含的组件</p>
     * @param boolean $IsTerminateProtection <p>是否开启了实例保护</p>
     * @param McpPasswordInfo $McpPasswordInfo <p>mcp密码信息</p>
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

        if (array_key_exists("IsSupportOutsideCluster",$param) and $param["IsSupportOutsideCluster"] !== null) {
            $this->IsSupportOutsideCluster = $param["IsSupportOutsideCluster"];
        }

        if (array_key_exists("IsDedicatedCluster",$param) and $param["IsDedicatedCluster"] !== null) {
            $this->IsDedicatedCluster = $param["IsDedicatedCluster"];
        }

        if (array_key_exists("IsSupportClone",$param) and $param["IsSupportClone"] !== null) {
            $this->IsSupportClone = $param["IsSupportClone"];
        }

        if (array_key_exists("Soft",$param) and $param["Soft"] !== null) {
            $this->Soft = $param["Soft"];
        }

        if (array_key_exists("IsTerminateProtection",$param) and $param["IsTerminateProtection"] !== null) {
            $this->IsTerminateProtection = $param["IsTerminateProtection"];
        }

        if (array_key_exists("McpPasswordInfo",$param) and $param["McpPasswordInfo"] !== null) {
            $this->McpPasswordInfo = new McpPasswordInfo();
            $this->McpPasswordInfo->deserialize($param["McpPasswordInfo"]);
        }
    }
}
