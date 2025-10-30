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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getEdition() 获取版本号
 * @method void setEdition(string $Edition) 设置版本号
 * @method string getStatus() 获取状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
 * @method void setStatus(string $Status) 设置状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
 * @method string getSpecId() 获取规格ID
 * @method void setSpecId(string $SpecId) 设置规格ID
 * @method integer getReplica() 获取副本数
 * @method void setReplica(integer $Replica) 设置副本数
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getVpcId() 获取Vpc iD
 * @method void setVpcId(string $VpcId) 设置Vpc iD
 * @method array getSubnetIds() 获取子网ID
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID
 * @method boolean getEnableStorage() 获取是否开启持久化存储
 * @method void setEnableStorage(boolean $EnableStorage) 设置是否开启持久化存储
 * @method string getStorageType() 获取数据存储方式
 * @method void setStorageType(string $StorageType) 设置数据存储方式
 * @method integer getStorageCapacity() 获取云硬盘容量
 * @method void setStorageCapacity(integer $StorageCapacity) 设置云硬盘容量
 * @method string getPaymode() 获取计费方式
 * @method void setPaymode(string $Paymode) 设置计费方式
 * @method string getEKSClusterID() 获取EKS集群的ID
 * @method void setEKSClusterID(string $EKSClusterID) 设置EKS集群的ID
 * @method string getCreateTime() 获取集群创建时间
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间
 * @method array getEnvInfos() 获取环境配置信息列表
 * @method void setEnvInfos(array $EnvInfos) 设置环境配置信息列表
 * @method string getEngineRegion() 获取引擎所在的区域
 * @method void setEngineRegion(string $EngineRegion) 设置引擎所在的区域
 * @method boolean getEnableInternet() 获取注册引擎是否开启公网
 * @method void setEnableInternet(boolean $EnableInternet) 设置注册引擎是否开启公网
 * @method array getVpcInfos() 获取私有网络列表信息
 * @method void setVpcInfos(array $VpcInfos) 设置私有网络列表信息
 * @method array getServiceGovernanceInfos() 获取服务治理相关信息列表
 * @method void setServiceGovernanceInfos(array $ServiceGovernanceInfos) 设置服务治理相关信息列表
 * @method array getTags() 获取实例的标签信息
 * @method void setTags(array $Tags) 设置实例的标签信息
 * @method boolean getEnableConsoleInternet() 获取引擎实例是否开启控制台公网访问地址
 * @method void setEnableConsoleInternet(boolean $EnableConsoleInternet) 设置引擎实例是否开启控制台公网访问地址
 * @method boolean getEnableConsoleIntranet() 获取引擎实例是否开启控制台内网访问地址
 * @method void setEnableConsoleIntranet(boolean $EnableConsoleIntranet) 设置引擎实例是否开启控制台内网访问地址
 * @method boolean getConfigInfoVisible() 获取引擎实例是否展示参数配置页面
 * @method void setConfigInfoVisible(boolean $ConfigInfoVisible) 设置引擎实例是否展示参数配置页面
 * @method string getConsoleDefaultPwd() 获取引擎实例控制台默认密码
 * @method void setConsoleDefaultPwd(string $ConsoleDefaultPwd) 设置引擎实例控制台默认密码
 * @method integer getTradeType() 获取交易付费类型，0后付费/1预付费
 * @method void setTradeType(integer $TradeType) 设置交易付费类型，0后付费/1预付费
 * @method integer getAutoRenewFlag() 获取自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费
 * @method string getCurDeadline() 获取预付费到期时间
 * @method void setCurDeadline(string $CurDeadline) 设置预付费到期时间
 * @method string getIsolateTime() 获取隔离开始时间
 * @method void setIsolateTime(string $IsolateTime) 设置隔离开始时间
 * @method array getRegionInfos() 获取实例地域相关的描述信息
 * @method void setRegionInfos(array $RegionInfos) 设置实例地域相关的描述信息
 * @method string getEKSType() 获取所在EKS环境，分为common和yunti
 * @method void setEKSType(string $EKSType) 设置所在EKS环境，分为common和yunti
 * @method string getFeatureVersion() 获取引擎的产品版本
 * @method void setFeatureVersion(string $FeatureVersion) 设置引擎的产品版本
 * @method boolean getEnableClientIntranet() 获取引擎实例是否开启客户端内网访问地址
 * @method void setEnableClientIntranet(boolean $EnableClientIntranet) 设置引擎实例是否开启客户端内网访问地址
 * @method array getStorageOption() 获取存储额外配置选项
 * @method void setStorageOption(array $StorageOption) 设置存储额外配置选项
 * @method ZookeeperRegionInfo getZookeeperRegionInfo() 获取Zookeeper的额外环境数据信息
 * @method void setZookeeperRegionInfo(ZookeeperRegionInfo $ZookeeperRegionInfo) 设置Zookeeper的额外环境数据信息
 * @method string getDeployMode() 获取部署架构
 * @method void setDeployMode(string $DeployMode) 设置部署架构
 * @method string getGlobalType() 获取全局属性
 * @method void setGlobalType(string $GlobalType) 设置全局属性
 * @method string getGroupType() 获取所属组类型
 * @method void setGroupType(string $GroupType) 设置所属组类型
 * @method array getGroupId() 获取组id
 * @method void setGroupId(array $GroupId) 设置组id
 * @method boolean getIsMainRegion() 获取是否为主地域
 * @method void setIsMainRegion(boolean $IsMainRegion) 设置是否为主地域
 */
class SREInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 版本号
     */
    public $Edition;

    /**
     * @var string 状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
     */
    public $Status;

    /**
     * @var string 规格ID
     */
    public $SpecId;

    /**
     * @var integer 副本数
     */
    public $Replica;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string Vpc iD
     */
    public $VpcId;

    /**
     * @var array 子网ID
     */
    public $SubnetIds;

    /**
     * @var boolean 是否开启持久化存储
     */
    public $EnableStorage;

    /**
     * @var string 数据存储方式
     */
    public $StorageType;

    /**
     * @var integer 云硬盘容量
     */
    public $StorageCapacity;

    /**
     * @var string 计费方式
     */
    public $Paymode;

    /**
     * @var string EKS集群的ID
     */
    public $EKSClusterID;

    /**
     * @var string 集群创建时间
     */
    public $CreateTime;

    /**
     * @var array 环境配置信息列表
     */
    public $EnvInfos;

    /**
     * @var string 引擎所在的区域
     */
    public $EngineRegion;

    /**
     * @var boolean 注册引擎是否开启公网
     */
    public $EnableInternet;

    /**
     * @var array 私有网络列表信息
     */
    public $VpcInfos;

    /**
     * @var array 服务治理相关信息列表
     */
    public $ServiceGovernanceInfos;

    /**
     * @var array 实例的标签信息
     */
    public $Tags;

    /**
     * @var boolean 引擎实例是否开启控制台公网访问地址
     */
    public $EnableConsoleInternet;

    /**
     * @var boolean 引擎实例是否开启控制台内网访问地址
     */
    public $EnableConsoleIntranet;

    /**
     * @var boolean 引擎实例是否展示参数配置页面
     */
    public $ConfigInfoVisible;

    /**
     * @var string 引擎实例控制台默认密码
     */
    public $ConsoleDefaultPwd;

    /**
     * @var integer 交易付费类型，0后付费/1预付费
     */
    public $TradeType;

    /**
     * @var integer 自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 预付费到期时间
     */
    public $CurDeadline;

    /**
     * @var string 隔离开始时间
     */
    public $IsolateTime;

    /**
     * @var array 实例地域相关的描述信息
     */
    public $RegionInfos;

    /**
     * @var string 所在EKS环境，分为common和yunti
     */
    public $EKSType;

    /**
     * @var string 引擎的产品版本
     */
    public $FeatureVersion;

    /**
     * @var boolean 引擎实例是否开启客户端内网访问地址
     */
    public $EnableClientIntranet;

    /**
     * @var array 存储额外配置选项
     */
    public $StorageOption;

    /**
     * @var ZookeeperRegionInfo Zookeeper的额外环境数据信息
     */
    public $ZookeeperRegionInfo;

    /**
     * @var string 部署架构
     */
    public $DeployMode;

    /**
     * @var string 全局属性
     */
    public $GlobalType;

    /**
     * @var string 所属组类型
     */
    public $GroupType;

    /**
     * @var array 组id
     */
    public $GroupId;

    /**
     * @var boolean 是否为主地域
     */
    public $IsMainRegion;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Name 名称
     * @param string $Edition 版本号
     * @param string $Status 状态, 枚举值:creating/create_fail/running/updating/update_fail/restarting/restart_fail/destroying/destroy_fail
     * @param string $SpecId 规格ID
     * @param integer $Replica 副本数
     * @param string $Type 类型
     * @param string $VpcId Vpc iD
     * @param array $SubnetIds 子网ID
     * @param boolean $EnableStorage 是否开启持久化存储
     * @param string $StorageType 数据存储方式
     * @param integer $StorageCapacity 云硬盘容量
     * @param string $Paymode 计费方式
     * @param string $EKSClusterID EKS集群的ID
     * @param string $CreateTime 集群创建时间
     * @param array $EnvInfos 环境配置信息列表
     * @param string $EngineRegion 引擎所在的区域
     * @param boolean $EnableInternet 注册引擎是否开启公网
     * @param array $VpcInfos 私有网络列表信息
     * @param array $ServiceGovernanceInfos 服务治理相关信息列表
     * @param array $Tags 实例的标签信息
     * @param boolean $EnableConsoleInternet 引擎实例是否开启控制台公网访问地址
     * @param boolean $EnableConsoleIntranet 引擎实例是否开启控制台内网访问地址
     * @param boolean $ConfigInfoVisible 引擎实例是否展示参数配置页面
     * @param string $ConsoleDefaultPwd 引擎实例控制台默认密码
     * @param integer $TradeType 交易付费类型，0后付费/1预付费
     * @param integer $AutoRenewFlag 自动续费标记：0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费
     * @param string $CurDeadline 预付费到期时间
     * @param string $IsolateTime 隔离开始时间
     * @param array $RegionInfos 实例地域相关的描述信息
     * @param string $EKSType 所在EKS环境，分为common和yunti
     * @param string $FeatureVersion 引擎的产品版本
     * @param boolean $EnableClientIntranet 引擎实例是否开启客户端内网访问地址
     * @param array $StorageOption 存储额外配置选项
     * @param ZookeeperRegionInfo $ZookeeperRegionInfo Zookeeper的额外环境数据信息
     * @param string $DeployMode 部署架构
     * @param string $GlobalType 全局属性
     * @param string $GroupType 所属组类型
     * @param array $GroupId 组id
     * @param boolean $IsMainRegion 是否为主地域
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
    }
}
