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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务注册引擎实例
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getEdition() 获取<p>版本号</p>
 * @method void setEdition(string $Edition) 设置<p>版本号</p>
 * @method string getStatus() 获取<p>状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail</p>
 * @method void setStatus(string $Status) 设置<p>状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail</p>
 * @method string getSpecId() 获取<p>规格ID</p>
 * @method void setSpecId(string $SpecId) 设置<p>规格ID</p>
 * @method integer getReplica() 获取<p>副本数</p>
 * @method void setReplica(integer $Replica) 设置<p>副本数</p>
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method string getVpcId() 获取<p>Vpc iD</p>
 * @method void setVpcId(string $VpcId) 设置<p>Vpc iD</p>
 * @method array getSubnetIds() 获取<p>子网ID</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网ID</p>
 * @method boolean getEnableStorage() 获取<p>是否开启持久化存储</p>
 * @method void setEnableStorage(boolean $EnableStorage) 设置<p>是否开启持久化存储</p>
 * @method string getStorageType() 获取<p>数据存储方式</p>
 * @method void setStorageType(string $StorageType) 设置<p>数据存储方式</p>
 * @method integer getStorageCapacity() 获取<p>云硬盘容量</p>
 * @method void setStorageCapacity(integer $StorageCapacity) 设置<p>云硬盘容量</p>
 * @method string getPaymode() 获取<p>计费方式</p>
 * @method void setPaymode(string $Paymode) 设置<p>计费方式</p>
 * @method string getEKSClusterID() 获取<p>EKS集群的ID</p>
 * @method void setEKSClusterID(string $EKSClusterID) 设置<p>EKS集群的ID</p>
 * @method string getCreateTime() 获取<p>集群创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>集群创建时间</p>
 * @method array getEnvInfos() 获取<p>环境配置信息列表</p>
 * @method void setEnvInfos(array $EnvInfos) 设置<p>环境配置信息列表</p>
 * @method string getEngineRegion() 获取<p>引擎所在的区域</p>
 * @method void setEngineRegion(string $EngineRegion) 设置<p>引擎所在的区域</p>
 * @method boolean getEnableInternet() 获取<p>注册引擎是否开启公网</p>
 * @method void setEnableInternet(boolean $EnableInternet) 设置<p>注册引擎是否开启公网</p>
 * @method array getVpcInfos() 获取<p>私有网络列表信息</p>
 * @method void setVpcInfos(array $VpcInfos) 设置<p>私有网络列表信息</p>
 * @method array getServiceGovernanceInfos() 获取<p>服务治理相关信息列表</p>
 * @method void setServiceGovernanceInfos(array $ServiceGovernanceInfos) 设置<p>服务治理相关信息列表</p>
 * @method array getTags() 获取<p>实例的标签信息</p>
 * @method void setTags(array $Tags) 设置<p>实例的标签信息</p>
 * @method boolean getEnableConsoleInternet() 获取<p>引擎实例是否开启控制台公网访问地址</p>
 * @method void setEnableConsoleInternet(boolean $EnableConsoleInternet) 设置<p>引擎实例是否开启控制台公网访问地址</p>
 * @method boolean getEnableConsoleIntranet() 获取<p>引擎实例是否开启控制台内网访问地址</p>
 * @method void setEnableConsoleIntranet(boolean $EnableConsoleIntranet) 设置<p>引擎实例是否开启控制台内网访问地址</p>
 * @method boolean getConfigInfoVisible() 获取<p>引擎实例是否展示参数配置页面</p>
 * @method void setConfigInfoVisible(boolean $ConfigInfoVisible) 设置<p>引擎实例是否展示参数配置页面</p>
 * @method string getConsoleDefaultPwd() 获取<p>引擎实例控制台默认密码</p>
 * @method void setConsoleDefaultPwd(string $ConsoleDefaultPwd) 设置<p>引擎实例控制台默认密码</p>
 * @method integer getTradeType() 获取<p>交易付费类型，0后付费/1预付费</p>
 * @method void setTradeType(integer $TradeType) 设置<p>交易付费类型，0后付费/1预付费</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费</p>
 * @method string getCurDeadline() 获取<p>预付费到期时间</p>
 * @method void setCurDeadline(string $CurDeadline) 设置<p>预付费到期时间</p>
 * @method string getIsolateTime() 获取<p>隔离开始时间</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离开始时间</p>
 * @method array getRegionInfos() 获取<p>实例地域相关的描述信息</p>
 * @method void setRegionInfos(array $RegionInfos) 设置<p>实例地域相关的描述信息</p>
 * @method string getEKSType() 获取<p>所在EKS环境，分为common和yunti</p>
 * @method void setEKSType(string $EKSType) 设置<p>所在EKS环境，分为common和yunti</p>
 * @method string getFeatureVersion() 获取<p>引擎的产品版本</p>
 * @method void setFeatureVersion(string $FeatureVersion) 设置<p>引擎的产品版本</p>
 * @method boolean getEnableClientIntranet() 获取<p>引擎实例是否开启客户端内网访问地址</p>
 * @method void setEnableClientIntranet(boolean $EnableClientIntranet) 设置<p>引擎实例是否开启客户端内网访问地址</p>
 * @method array getStorageOption() 获取<p>存储额外配置选项</p>
 * @method void setStorageOption(array $StorageOption) 设置<p>存储额外配置选项</p>
 * @method ZookeeperRegionInfo getZookeeperRegionInfo() 获取<p>Zookeeper的额外环境数据信息</p>
 * @method void setZookeeperRegionInfo(ZookeeperRegionInfo $ZookeeperRegionInfo) 设置<p>Zookeeper的额外环境数据信息</p>
 * @method string getDeployMode() 获取<p>部署架构</p>
 * @method void setDeployMode(string $DeployMode) 设置<p>部署架构</p>
 * @method string getGlobalType() 获取<p>全局属性</p>
 * @method void setGlobalType(string $GlobalType) 设置<p>全局属性</p>
 * @method string getGroupType() 获取<p>所属组类型</p>
 * @method void setGroupType(string $GroupType) 设置<p>所属组类型</p>
 * @method array getGroupId() 获取<p>组id</p>
 * @method void setGroupId(array $GroupId) 设置<p>组id</p>
 * @method boolean getIsMainRegion() 获取<p>是否为主地域</p>
 * @method void setIsMainRegion(boolean $IsMainRegion) 设置<p>是否为主地域</p>
 * @method boolean getMutationEnabled() 获取<p>是否禁止变更</p>
 * @method void setMutationEnabled(boolean $MutationEnabled) 设置<p>是否禁止变更</p>
 * @method boolean getMaxCapacityLimitEnabled() 获取<p>禁止限流</p>
 * @method void setMaxCapacityLimitEnabled(boolean $MaxCapacityLimitEnabled) 设置<p>禁止限流</p>
 */
class SREInstance extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>版本号</p>
     */
    public $Edition;

    /**
     * @var string <p>状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail</p>
     */
    public $Status;

    /**
     * @var string <p>规格ID</p>
     */
    public $SpecId;

    /**
     * @var integer <p>副本数</p>
     */
    public $Replica;

    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var string <p>Vpc iD</p>
     */
    public $VpcId;

    /**
     * @var array <p>子网ID</p>
     */
    public $SubnetIds;

    /**
     * @var boolean <p>是否开启持久化存储</p>
     */
    public $EnableStorage;

    /**
     * @var string <p>数据存储方式</p>
     */
    public $StorageType;

    /**
     * @var integer <p>云硬盘容量</p>
     */
    public $StorageCapacity;

    /**
     * @var string <p>计费方式</p>
     */
    public $Paymode;

    /**
     * @var string <p>EKS集群的ID</p>
     */
    public $EKSClusterID;

    /**
     * @var string <p>集群创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>环境配置信息列表</p>
     */
    public $EnvInfos;

    /**
     * @var string <p>引擎所在的区域</p>
     */
    public $EngineRegion;

    /**
     * @var boolean <p>注册引擎是否开启公网</p>
     */
    public $EnableInternet;

    /**
     * @var array <p>私有网络列表信息</p>
     */
    public $VpcInfos;

    /**
     * @var array <p>服务治理相关信息列表</p>
     */
    public $ServiceGovernanceInfos;

    /**
     * @var array <p>实例的标签信息</p>
     */
    public $Tags;

    /**
     * @var boolean <p>引擎实例是否开启控制台公网访问地址</p>
     */
    public $EnableConsoleInternet;

    /**
     * @var boolean <p>引擎实例是否开启控制台内网访问地址</p>
     */
    public $EnableConsoleIntranet;

    /**
     * @var boolean <p>引擎实例是否展示参数配置页面</p>
     */
    public $ConfigInfoVisible;

    /**
     * @var string <p>引擎实例控制台默认密码</p>
     */
    public $ConsoleDefaultPwd;

    /**
     * @var integer <p>交易付费类型，0后付费/1预付费</p>
     */
    public $TradeType;

    /**
     * @var integer <p>自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>预付费到期时间</p>
     */
    public $CurDeadline;

    /**
     * @var string <p>隔离开始时间</p>
     */
    public $IsolateTime;

    /**
     * @var array <p>实例地域相关的描述信息</p>
     */
    public $RegionInfos;

    /**
     * @var string <p>所在EKS环境，分为common和yunti</p>
     */
    public $EKSType;

    /**
     * @var string <p>引擎的产品版本</p>
     */
    public $FeatureVersion;

    /**
     * @var boolean <p>引擎实例是否开启客户端内网访问地址</p>
     */
    public $EnableClientIntranet;

    /**
     * @var array <p>存储额外配置选项</p>
     */
    public $StorageOption;

    /**
     * @var ZookeeperRegionInfo <p>Zookeeper的额外环境数据信息</p>
     */
    public $ZookeeperRegionInfo;

    /**
     * @var string <p>部署架构</p>
     */
    public $DeployMode;

    /**
     * @var string <p>全局属性</p>
     */
    public $GlobalType;

    /**
     * @var string <p>所属组类型</p>
     */
    public $GroupType;

    /**
     * @var array <p>组id</p>
     */
    public $GroupId;

    /**
     * @var boolean <p>是否为主地域</p>
     */
    public $IsMainRegion;

    /**
     * @var boolean <p>是否禁止变更</p>
     */
    public $MutationEnabled;

    /**
     * @var boolean <p>禁止限流</p>
     */
    public $MaxCapacityLimitEnabled;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Edition <p>版本号</p>
     * @param string $Status <p>状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail</p>
     * @param string $SpecId <p>规格ID</p>
     * @param integer $Replica <p>副本数</p>
     * @param string $Type <p>类型</p>
     * @param string $VpcId <p>Vpc iD</p>
     * @param array $SubnetIds <p>子网ID</p>
     * @param boolean $EnableStorage <p>是否开启持久化存储</p>
     * @param string $StorageType <p>数据存储方式</p>
     * @param integer $StorageCapacity <p>云硬盘容量</p>
     * @param string $Paymode <p>计费方式</p>
     * @param string $EKSClusterID <p>EKS集群的ID</p>
     * @param string $CreateTime <p>集群创建时间</p>
     * @param array $EnvInfos <p>环境配置信息列表</p>
     * @param string $EngineRegion <p>引擎所在的区域</p>
     * @param boolean $EnableInternet <p>注册引擎是否开启公网</p>
     * @param array $VpcInfos <p>私有网络列表信息</p>
     * @param array $ServiceGovernanceInfos <p>服务治理相关信息列表</p>
     * @param array $Tags <p>实例的标签信息</p>
     * @param boolean $EnableConsoleInternet <p>引擎实例是否开启控制台公网访问地址</p>
     * @param boolean $EnableConsoleIntranet <p>引擎实例是否开启控制台内网访问地址</p>
     * @param boolean $ConfigInfoVisible <p>引擎实例是否展示参数配置页面</p>
     * @param string $ConsoleDefaultPwd <p>引擎实例控制台默认密码</p>
     * @param integer $TradeType <p>交易付费类型，0后付费/1预付费</p>
     * @param integer $AutoRenewFlag <p>自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费</p>
     * @param string $CurDeadline <p>预付费到期时间</p>
     * @param string $IsolateTime <p>隔离开始时间</p>
     * @param array $RegionInfos <p>实例地域相关的描述信息</p>
     * @param string $EKSType <p>所在EKS环境，分为common和yunti</p>
     * @param string $FeatureVersion <p>引擎的产品版本</p>
     * @param boolean $EnableClientIntranet <p>引擎实例是否开启客户端内网访问地址</p>
     * @param array $StorageOption <p>存储额外配置选项</p>
     * @param ZookeeperRegionInfo $ZookeeperRegionInfo <p>Zookeeper的额外环境数据信息</p>
     * @param string $DeployMode <p>部署架构</p>
     * @param string $GlobalType <p>全局属性</p>
     * @param string $GroupType <p>所属组类型</p>
     * @param array $GroupId <p>组id</p>
     * @param boolean $IsMainRegion <p>是否为主地域</p>
     * @param boolean $MutationEnabled <p>是否禁止变更</p>
     * @param boolean $MaxCapacityLimitEnabled <p>禁止限流</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("EnableStorage",$param) and $param["EnableStorage"] !== null) {
            $this->EnableStorage = $param["EnableStorage"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageCapacity",$param) and $param["StorageCapacity"] !== null) {
            $this->StorageCapacity = $param["StorageCapacity"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("EKSClusterID",$param) and $param["EKSClusterID"] !== null) {
            $this->EKSClusterID = $param["EKSClusterID"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnvInfos",$param) and $param["EnvInfos"] !== null) {
            $this->EnvInfos = [];
            foreach ($param["EnvInfos"] as $key => $value){
                $obj = new EnvInfo();
                $obj->deserialize($value);
                array_push($this->EnvInfos, $obj);
            }
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }

        if (array_key_exists("VpcInfos",$param) and $param["VpcInfos"] !== null) {
            $this->VpcInfos = [];
            foreach ($param["VpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfos, $obj);
            }
        }

        if (array_key_exists("ServiceGovernanceInfos",$param) and $param["ServiceGovernanceInfos"] !== null) {
            $this->ServiceGovernanceInfos = [];
            foreach ($param["ServiceGovernanceInfos"] as $key => $value){
                $obj = new ServiceGovernanceInfo();
                $obj->deserialize($value);
                array_push($this->ServiceGovernanceInfos, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableConsoleInternet",$param) and $param["EnableConsoleInternet"] !== null) {
            $this->EnableConsoleInternet = $param["EnableConsoleInternet"];
        }

        if (array_key_exists("EnableConsoleIntranet",$param) and $param["EnableConsoleIntranet"] !== null) {
            $this->EnableConsoleIntranet = $param["EnableConsoleIntranet"];
        }

        if (array_key_exists("ConfigInfoVisible",$param) and $param["ConfigInfoVisible"] !== null) {
            $this->ConfigInfoVisible = $param["ConfigInfoVisible"];
        }

        if (array_key_exists("ConsoleDefaultPwd",$param) and $param["ConsoleDefaultPwd"] !== null) {
            $this->ConsoleDefaultPwd = $param["ConsoleDefaultPwd"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("RegionInfos",$param) and $param["RegionInfos"] !== null) {
            $this->RegionInfos = [];
            foreach ($param["RegionInfos"] as $key => $value){
                $obj = new DescribeInstanceRegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionInfos, $obj);
            }
        }

        if (array_key_exists("EKSType",$param) and $param["EKSType"] !== null) {
            $this->EKSType = $param["EKSType"];
        }

        if (array_key_exists("FeatureVersion",$param) and $param["FeatureVersion"] !== null) {
            $this->FeatureVersion = $param["FeatureVersion"];
        }

        if (array_key_exists("EnableClientIntranet",$param) and $param["EnableClientIntranet"] !== null) {
            $this->EnableClientIntranet = $param["EnableClientIntranet"];
        }

        if (array_key_exists("StorageOption",$param) and $param["StorageOption"] !== null) {
            $this->StorageOption = [];
            foreach ($param["StorageOption"] as $key => $value){
                $obj = new StorageOption();
                $obj->deserialize($value);
                array_push($this->StorageOption, $obj);
            }
        }

        if (array_key_exists("ZookeeperRegionInfo",$param) and $param["ZookeeperRegionInfo"] !== null) {
            $this->ZookeeperRegionInfo = new ZookeeperRegionInfo();
            $this->ZookeeperRegionInfo->deserialize($param["ZookeeperRegionInfo"]);
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("GlobalType",$param) and $param["GlobalType"] !== null) {
            $this->GlobalType = $param["GlobalType"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IsMainRegion",$param) and $param["IsMainRegion"] !== null) {
            $this->IsMainRegion = $param["IsMainRegion"];
        }

        if (array_key_exists("MutationEnabled",$param) and $param["MutationEnabled"] !== null) {
            $this->MutationEnabled = $param["MutationEnabled"];
        }

        if (array_key_exists("MaxCapacityLimitEnabled",$param) and $param["MaxCapacityLimitEnabled"] !== null) {
            $this->MaxCapacityLimitEnabled = $param["MaxCapacityLimitEnabled"];
        }
    }
}
