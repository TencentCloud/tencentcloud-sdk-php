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
 * 集群列表

集群防护状态，左边枚举,右边为显示
集群防护状态 
0:未接入
1:未防护 
2:部分防护 
3:防护中 
4:接入异常 
5:接入中 
6:卸载中 
7:卸载异常
 *
 * @method integer getAppId() 获取租户id
 * @method void setAppId(integer $AppId) 设置租户id
 * @method string getUin() 获取租户uin
 * @method void setUin(string $Uin) 设置租户uin
 * @method string getNick() 获取租户昵称
 * @method void setNick(string $Nick) 设置租户昵称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getAssetId() 获取集群id
 * @method void setAssetId(string $AssetId) 设置集群id
 * @method string getAssetName() 获取集群名称
 * @method void setAssetName(string $AssetName) 设置集群名称
 * @method string getAssetType() 获取集群类型
 * @method void setAssetType(string $AssetType) 设置集群类型
 * @method string getInstanceCreateTime() 获取集群创建时间
 * @method void setInstanceCreateTime(string $InstanceCreateTime) 设置集群创建时间
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method integer getProtectStatus() 获取集群防护状态，左边枚举,右边为显示
集群防护状态 
0:未接入
1:未防护 
2:部分防护 
3:防护中 
4:接入异常 
5:接入中 
6:卸载中 
7:卸载异常
 * @method void setProtectStatus(integer $ProtectStatus) 设置集群防护状态，左边枚举,右边为显示
集群防护状态 
0:未接入
1:未防护 
2:部分防护 
3:防护中 
4:接入异常 
5:接入中 
6:卸载中 
7:卸载异常
 * @method string getProtectInfo() 获取接入信息，不为空表示有接入异常信息
 * @method void setProtectInfo(string $ProtectInfo) 设置接入信息，不为空表示有接入异常信息
 * @method string getVpcId() 获取私有网络id
 * @method void setVpcId(string $VpcId) 设置私有网络id
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method string getKubernetesVersion() 获取kubernetes版本
 * @method void setKubernetesVersion(string $KubernetesVersion) 设置kubernetes版本
 * @method string getComponent() 获取运行时组件
 * @method void setComponent(string $Component) 设置运行时组件
 * @method string getComponentVersion() 获取运行时组件版本
 * @method void setComponentVersion(string $ComponentVersion) 设置运行时组件版本
 * @method string getComponentStatus() 获取组件状态
 * @method void setComponentStatus(string $ComponentStatus) 设置组件状态
 * @method string getCheckTime() 获取体检时间
 * @method void setCheckTime(string $CheckTime) 设置体检时间
 * @method integer getMachineCount() 获取关联主机数
 * @method void setMachineCount(integer $MachineCount) 设置关联主机数
 * @method integer getPodCount() 获取关联pod数
 * @method void setPodCount(integer $PodCount) 设置关联pod数
 * @method integer getServiceCount() 获取关联service数
 * @method void setServiceCount(integer $ServiceCount) 设置关联service数
 * @method integer getVulRisk() 获取漏洞风险
 * @method void setVulRisk(integer $VulRisk) 设置漏洞风险
 * @method integer getCFGRisk() 获取配置风险
 * @method void setCFGRisk(integer $CFGRisk) 设置配置风险
 * @method integer getCheckCount() 获取体检数
 * @method void setCheckCount(integer $CheckCount) 设置体检数
 * @method integer getIsCore() 获取是否核心：1:核心，2:非核心
 * @method void setIsCore(integer $IsCore) 设置是否核心：1:核心，2:非核心
 * @method integer getIsNewAsset() 获取是否新资产 1新
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产 1新
 * @method integer getCloudType() 获取云资产类型：0：腾讯云，1：aws，2：azure
 * @method void setCloudType(integer $CloudType) 设置云资产类型：0：腾讯云，1：aws，2：azure
 */
class AssetCluster extends AbstractModel
{
    /**
     * @var integer 租户id
     */
    public $AppId;

    /**
     * @var string 租户uin
     */
    public $Uin;

    /**
     * @var string 租户昵称
     */
    public $Nick;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 集群id
     */
    public $AssetId;

    /**
     * @var string 集群名称
     */
    public $AssetName;

    /**
     * @var string 集群类型
     */
    public $AssetType;

    /**
     * @var string 集群创建时间
     */
    public $InstanceCreateTime;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var integer 集群防护状态，左边枚举,右边为显示
集群防护状态 
0:未接入
1:未防护 
2:部分防护 
3:防护中 
4:接入异常 
5:接入中 
6:卸载中 
7:卸载异常
     */
    public $ProtectStatus;

    /**
     * @var string 接入信息，不为空表示有接入异常信息
     */
    public $ProtectInfo;

    /**
     * @var string 私有网络id
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var string kubernetes版本
     */
    public $KubernetesVersion;

    /**
     * @var string 运行时组件
     */
    public $Component;

    /**
     * @var string 运行时组件版本
     */
    public $ComponentVersion;

    /**
     * @var string 组件状态
     */
    public $ComponentStatus;

    /**
     * @var string 体检时间
     */
    public $CheckTime;

    /**
     * @var integer 关联主机数
     */
    public $MachineCount;

    /**
     * @var integer 关联pod数
     */
    public $PodCount;

    /**
     * @var integer 关联service数
     */
    public $ServiceCount;

    /**
     * @var integer 漏洞风险
     */
    public $VulRisk;

    /**
     * @var integer 配置风险
     */
    public $CFGRisk;

    /**
     * @var integer 体检数
     */
    public $CheckCount;

    /**
     * @var integer 是否核心：1:核心，2:非核心
     */
    public $IsCore;

    /**
     * @var integer 是否新资产 1新
     */
    public $IsNewAsset;

    /**
     * @var integer 云资产类型：0：腾讯云，1：aws，2：azure
     */
    public $CloudType;

    /**
     * @param integer $AppId 租户id
     * @param string $Uin 租户uin
     * @param string $Nick 租户昵称
     * @param string $Region 地域
     * @param string $AssetId 集群id
     * @param string $AssetName 集群名称
     * @param string $AssetType 集群类型
     * @param string $InstanceCreateTime 集群创建时间
     * @param string $Status 状态
     * @param integer $ProtectStatus 集群防护状态，左边枚举,右边为显示
集群防护状态 
0:未接入
1:未防护 
2:部分防护 
3:防护中 
4:接入异常 
5:接入中 
6:卸载中 
7:卸载异常
     * @param string $ProtectInfo 接入信息，不为空表示有接入异常信息
     * @param string $VpcId 私有网络id
     * @param string $VpcName 私有网络名称
     * @param string $KubernetesVersion kubernetes版本
     * @param string $Component 运行时组件
     * @param string $ComponentVersion 运行时组件版本
     * @param string $ComponentStatus 组件状态
     * @param string $CheckTime 体检时间
     * @param integer $MachineCount 关联主机数
     * @param integer $PodCount 关联pod数
     * @param integer $ServiceCount 关联service数
     * @param integer $VulRisk 漏洞风险
     * @param integer $CFGRisk 配置风险
     * @param integer $CheckCount 体检数
     * @param integer $IsCore 是否核心：1:核心，2:非核心
     * @param integer $IsNewAsset 是否新资产 1新
     * @param integer $CloudType 云资产类型：0：腾讯云，1：aws，2：azure
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("ProtectInfo",$param) and $param["ProtectInfo"] !== null) {
            $this->ProtectInfo = $param["ProtectInfo"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("KubernetesVersion",$param) and $param["KubernetesVersion"] !== null) {
            $this->KubernetesVersion = $param["KubernetesVersion"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("ComponentVersion",$param) and $param["ComponentVersion"] !== null) {
            $this->ComponentVersion = $param["ComponentVersion"];
        }

        if (array_key_exists("ComponentStatus",$param) and $param["ComponentStatus"] !== null) {
            $this->ComponentStatus = $param["ComponentStatus"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }

        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("VulRisk",$param) and $param["VulRisk"] !== null) {
            $this->VulRisk = $param["VulRisk"];
        }

        if (array_key_exists("CFGRisk",$param) and $param["CFGRisk"] !== null) {
            $this->CFGRisk = $param["CFGRisk"];
        }

        if (array_key_exists("CheckCount",$param) and $param["CheckCount"] !== null) {
            $this->CheckCount = $param["CheckCount"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
