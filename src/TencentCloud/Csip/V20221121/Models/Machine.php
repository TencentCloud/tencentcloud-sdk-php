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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机列表
 *
 * @method string getAgentStatus() 获取<p>Agent状态，取值：ONLINE-在线，OFFLINE-离线，UNINSTALL-未安装</p>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>Agent状态，取值：ONLINE-在线，OFFLINE-离线，UNINSTALL-未安装</p>
 * @method string getAgentVersion() 获取<p>Agent版本</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>Agent版本</p>
 * @method integer getAppId() 获取<p>账号AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>账号AppId</p>
 * @method string getCloudFromEnum() 获取<p>云服务商</p>
 * @method void setCloudFromEnum(string $CloudFromEnum) 设置<p>云服务商</p>
 * @method array getCloudTags() 获取<p>云标签列表</p>
 * @method void setCloudTags(array $CloudTags) 设置<p>云标签列表</p>
 * @method string getCsipProtectType() 获取<p>CSIP防护类型，取值：BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版</p>
 * @method void setCsipProtectType(string $CsipProtectType) 设置<p>CSIP防护类型，取值：BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版</p>
 * @method string getExposedStatus() 获取<p>暴露状态</p>
 * @method void setExposedStatus(string $ExposedStatus) 设置<p>暴露状态</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getInstanceStatus() 获取<p>实例状态，取值：RUNNING-运行中，STOPPED-已关机，EXPIRED-待回收</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态，取值：RUNNING-运行中，STOPPED-已关机，EXPIRED-待回收</p>
 * @method array getIpList() 获取<p>网卡IP列表</p>
 * @method void setIpList(array $IpList) 设置<p>网卡IP列表</p>
 * @method boolean getIsNew() 获取<p>是否为新增主机（15天内新增）</p>
 * @method void setIsNew(boolean $IsNew) 设置<p>是否为新增主机（15天内新增）</p>
 * @method string getKernelVersion() 获取<p>内核版本</p>
 * @method void setKernelVersion(string $KernelVersion) 设置<p>内核版本</p>
 * @method integer getLatestOfflineTime() 获取<p>最近一次离线时间（Unix时间戳）</p>
 * @method void setLatestOfflineTime(integer $LatestOfflineTime) 设置<p>最近一次离线时间（Unix时间戳）</p>
 * @method string getMachineIp() 获取<p>内网IP</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>内网IP</p>
 * @method string getMachineName() 获取<p>主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称</p>
 * @method string getMachineOs() 获取<p>操作系统</p>
 * @method void setMachineOs(string $MachineOs) 设置<p>操作系统</p>
 * @method string getMachineWanIp() 获取<p>外网IP</p>
 * @method void setMachineWanIp(string $MachineWanIp) 设置<p>外网IP</p>
 * @method string getPayMode() 获取<p>付费模式，取值：PREPAID-预付费，POSTPAID-后付费</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式，取值：PREPAID-预付费，POSTPAID-后付费</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method string getProtectType() 获取<p>防护类型，取值：NONE-无防护，BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版，PRO_LH-轻量版</p>
 * @method void setProtectType(string $ProtectType) 设置<p>防护类型，取值：NONE-无防护，BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版，PRO_LH-轻量版</p>
 * @method string getQuuid() 获取<p>主机唯一标识</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机唯一标识</p>
 * @method RegionInfo getRegionInfo() 获取<p>地域信息</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置<p>地域信息</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method array getTagItems() 获取<p>资产标签列表</p>
 * @method void setTagItems(array $TagItems) 设置<p>资产标签列表</p>
 * @method AssetTagModifyAssetItem getTagModifyInfo() 获取<p>标签修改信息</p>
 * @method void setTagModifyInfo(AssetTagModifyAssetItem $TagModifyInfo) 设置<p>标签修改信息</p>
 * @method string getTatStatus() 获取<p>TAT状态，取值：ONLINE-在线，OFFLINE-离线</p>
 * @method void setTatStatus(string $TatStatus) 设置<p>TAT状态，取值：ONLINE-在线，OFFLINE-离线</p>
 * @method string getUuid() 获取<p>Agent唯一标识</p>
 * @method void setUuid(string $Uuid) 设置<p>Agent唯一标识</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getNodeType() 获取<p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
 * @method string getContainerDefendStatus() 获取<p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
 * @method void setContainerDefendStatus(string $ContainerDefendStatus) 设置<p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
 * @method integer getContainerCount() 获取<p>容器数量</p>
 * @method void setContainerCount(integer $ContainerCount) 设置<p>容器数量</p>
 * @method integer getCpuCoreCount() 获取<p>核数</p>
 * @method void setCpuCoreCount(integer $CpuCoreCount) 设置<p>核数</p>
 * @method boolean getMigrationRequired() 获取<p>是否支持迁移</p>
 * @method void setMigrationRequired(boolean $MigrationRequired) 设置<p>是否支持迁移</p>
 * @method boolean getIsSupportXSPM() 获取<p>是否支持暴露面扫描</p>
 * @method void setIsSupportXSPM(boolean $IsSupportXSPM) 设置<p>是否支持暴露面扫描</p>
 * @method boolean getCanUnbind() 获取<p>是否能解绑</p>
 * @method void setCanUnbind(boolean $CanUnbind) 设置<p>是否能解绑</p>
 */
class Machine extends AbstractModel
{
    /**
     * @var string <p>Agent状态，取值：ONLINE-在线，OFFLINE-离线，UNINSTALL-未安装</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>Agent版本</p>
     */
    public $AgentVersion;

    /**
     * @var integer <p>账号AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>云服务商</p>
     */
    public $CloudFromEnum;

    /**
     * @var array <p>云标签列表</p>
     */
    public $CloudTags;

    /**
     * @var string <p>CSIP防护类型，取值：BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版</p>
     */
    public $CsipProtectType;

    /**
     * @var string <p>暴露状态</p>
     */
    public $ExposedStatus;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>实例状态，取值：RUNNING-运行中，STOPPED-已关机，EXPIRED-待回收</p>
     */
    public $InstanceStatus;

    /**
     * @var array <p>网卡IP列表</p>
     */
    public $IpList;

    /**
     * @var boolean <p>是否为新增主机（15天内新增）</p>
     */
    public $IsNew;

    /**
     * @var string <p>内核版本</p>
     */
    public $KernelVersion;

    /**
     * @var integer <p>最近一次离线时间（Unix时间戳）</p>
     */
    public $LatestOfflineTime;

    /**
     * @var string <p>内网IP</p>
     */
    public $MachineIp;

    /**
     * @var string <p>主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>操作系统</p>
     */
    public $MachineOs;

    /**
     * @var string <p>外网IP</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>付费模式，取值：PREPAID-预付费，POSTPAID-后付费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>防护类型，取值：NONE-无防护，BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版，PRO_LH-轻量版</p>
     */
    public $ProtectType;

    /**
     * @var string <p>主机唯一标识</p>
     */
    public $Quuid;

    /**
     * @var RegionInfo <p>地域信息</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var array <p>资产标签列表</p>
     */
    public $TagItems;

    /**
     * @var AssetTagModifyAssetItem <p>标签修改信息</p>
     */
    public $TagModifyInfo;

    /**
     * @var string <p>TAT状态，取值：ONLINE-在线，OFFLINE-离线</p>
     */
    public $TatStatus;

    /**
     * @var string <p>Agent唯一标识</p>
     */
    public $Uuid;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
     */
    public $NodeType;

    /**
     * @var string <p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
     */
    public $ContainerDefendStatus;

    /**
     * @var integer <p>容器数量</p>
     */
    public $ContainerCount;

    /**
     * @var integer <p>核数</p>
     */
    public $CpuCoreCount;

    /**
     * @var boolean <p>是否支持迁移</p>
     */
    public $MigrationRequired;

    /**
     * @var boolean <p>是否支持暴露面扫描</p>
     */
    public $IsSupportXSPM;

    /**
     * @var boolean <p>是否能解绑</p>
     */
    public $CanUnbind;

    /**
     * @param string $AgentStatus <p>Agent状态，取值：ONLINE-在线，OFFLINE-离线，UNINSTALL-未安装</p>
     * @param string $AgentVersion <p>Agent版本</p>
     * @param integer $AppId <p>账号AppId</p>
     * @param string $CloudFromEnum <p>云服务商</p>
     * @param array $CloudTags <p>云标签列表</p>
     * @param string $CsipProtectType <p>CSIP防护类型，取值：BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版</p>
     * @param string $ExposedStatus <p>暴露状态</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $InstanceStatus <p>实例状态，取值：RUNNING-运行中，STOPPED-已关机，EXPIRED-待回收</p>
     * @param array $IpList <p>网卡IP列表</p>
     * @param boolean $IsNew <p>是否为新增主机（15天内新增）</p>
     * @param string $KernelVersion <p>内核版本</p>
     * @param integer $LatestOfflineTime <p>最近一次离线时间（Unix时间戳）</p>
     * @param string $MachineIp <p>内网IP</p>
     * @param string $MachineName <p>主机名称</p>
     * @param string $MachineOs <p>操作系统</p>
     * @param string $MachineWanIp <p>外网IP</p>
     * @param string $PayMode <p>付费模式，取值：PREPAID-预付费，POSTPAID-后付费</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param string $ProtectType <p>防护类型，取值：NONE-无防护，BASIC-基础版，PRO-专业版，ULTIMATE-旗舰版，PRO_LH-轻量版</p>
     * @param string $Quuid <p>主机唯一标识</p>
     * @param RegionInfo $RegionInfo <p>地域信息</p>
     * @param string $Remark <p>备注</p>
     * @param array $TagItems <p>资产标签列表</p>
     * @param AssetTagModifyAssetItem $TagModifyInfo <p>标签修改信息</p>
     * @param string $TatStatus <p>TAT状态，取值：ONLINE-在线，OFFLINE-离线</p>
     * @param string $Uuid <p>Agent唯一标识</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $NodeType <p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
     * @param string $ContainerDefendStatus <p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
     * @param integer $ContainerCount <p>容器数量</p>
     * @param integer $CpuCoreCount <p>核数</p>
     * @param boolean $MigrationRequired <p>是否支持迁移</p>
     * @param boolean $IsSupportXSPM <p>是否支持暴露面扫描</p>
     * @param boolean $CanUnbind <p>是否能解绑</p>
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
        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CloudFromEnum",$param) and $param["CloudFromEnum"] !== null) {
            $this->CloudFromEnum = $param["CloudFromEnum"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("CsipProtectType",$param) and $param["CsipProtectType"] !== null) {
            $this->CsipProtectType = $param["CsipProtectType"];
        }

        if (array_key_exists("ExposedStatus",$param) and $param["ExposedStatus"] !== null) {
            $this->ExposedStatus = $param["ExposedStatus"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("LatestOfflineTime",$param) and $param["LatestOfflineTime"] !== null) {
            $this->LatestOfflineTime = $param["LatestOfflineTime"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("TagModifyInfo",$param) and $param["TagModifyInfo"] !== null) {
            $this->TagModifyInfo = new AssetTagModifyAssetItem();
            $this->TagModifyInfo->deserialize($param["TagModifyInfo"]);
        }

        if (array_key_exists("TatStatus",$param) and $param["TatStatus"] !== null) {
            $this->TatStatus = $param["TatStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ContainerDefendStatus",$param) and $param["ContainerDefendStatus"] !== null) {
            $this->ContainerDefendStatus = $param["ContainerDefendStatus"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("CpuCoreCount",$param) and $param["CpuCoreCount"] !== null) {
            $this->CpuCoreCount = $param["CpuCoreCount"];
        }

        if (array_key_exists("MigrationRequired",$param) and $param["MigrationRequired"] !== null) {
            $this->MigrationRequired = $param["MigrationRequired"];
        }

        if (array_key_exists("IsSupportXSPM",$param) and $param["IsSupportXSPM"] !== null) {
            $this->IsSupportXSPM = $param["IsSupportXSPM"];
        }

        if (array_key_exists("CanUnbind",$param) and $param["CanUnbind"] !== null) {
            $this->CanUnbind = $param["CanUnbind"];
        }
    }
}
