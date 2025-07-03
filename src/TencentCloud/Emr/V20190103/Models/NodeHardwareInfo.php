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
 * 节点硬件信息
 *
 * @method integer getAppId() 获取用户APPID
 * @method void setAppId(integer $AppId) 设置用户APPID
 * @method string getSerialNo() 获取序列号
 * @method void setSerialNo(string $SerialNo) 设置序列号
 * @method string getOrderNo() 获取机器实例ID
 * @method void setOrderNo(string $OrderNo) 设置机器实例ID
 * @method string getWanIp() 获取master节点绑定外网IP
 * @method void setWanIp(string $WanIp) 设置master节点绑定外网IP
 * @method integer getFlag() 获取节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
 * @method void setFlag(integer $Flag) 设置节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
 * @method string getSpec() 获取节点规格
 * @method void setSpec(string $Spec) 设置节点规格
 * @method integer getCpuNum() 获取节点核数
 * @method void setCpuNum(integer $CpuNum) 设置节点核数
 * @method integer getMemSize() 获取节点内存,单位b
 * @method void setMemSize(integer $MemSize) 设置节点内存,单位b
 * @method string getMemDesc() 获取节点内存描述，单位GB
 * @method void setMemDesc(string $MemDesc) 设置节点内存描述，单位GB
 * @method integer getRegionId() 获取节点所在region
 * @method void setRegionId(integer $RegionId) 设置节点所在region
 * @method integer getZoneId() 获取节点所在Zone
 * @method void setZoneId(integer $ZoneId) 设置节点所在Zone
 * @method string getApplyTime() 获取申请时间
 * @method void setApplyTime(string $ApplyTime) 设置申请时间
 * @method string getFreeTime() 获取释放时间
 * @method void setFreeTime(string $FreeTime) 设置释放时间
 * @method string getDiskSize() 获取硬盘大小
 * @method void setDiskSize(string $DiskSize) 设置硬盘大小
 * @method string getNameTag() 获取节点描述
 * @method void setNameTag(string $NameTag) 设置节点描述
 * @method string getServices() 获取节点部署服务
 * @method void setServices(string $Services) 设置节点部署服务
 * @method integer getStorageType() 获取磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

 * @method void setStorageType(integer $StorageType) 设置磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

 * @method integer getRootSize() 获取系统盘大小，单位GB
 * @method void setRootSize(integer $RootSize) 设置系统盘大小，单位GB
 * @method integer getChargeType() 获取付费类型，0：按量计费；1：包年包月
 * @method void setChargeType(integer $ChargeType) 设置付费类型，0：按量计费；1：包年包月
 * @method string getCdbIp() 获取数据库IP
 * @method void setCdbIp(string $CdbIp) 设置数据库IP
 * @method integer getCdbPort() 获取数据库端口
 * @method void setCdbPort(integer $CdbPort) 设置数据库端口
 * @method integer getHwDiskSize() 获取硬盘容量,单位b
 * @method void setHwDiskSize(integer $HwDiskSize) 设置硬盘容量,单位b
 * @method string getHwDiskSizeDesc() 获取硬盘容量描述
 * @method void setHwDiskSizeDesc(string $HwDiskSizeDesc) 设置硬盘容量描述
 * @method integer getHwMemSize() 获取内存容量，单位b
 * @method void setHwMemSize(integer $HwMemSize) 设置内存容量，单位b
 * @method string getHwMemSizeDesc() 获取内存容量描述
 * @method void setHwMemSizeDesc(string $HwMemSizeDesc) 设置内存容量描述
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getEmrResourceId() 获取节点资源ID
 * @method void setEmrResourceId(string $EmrResourceId) 设置节点资源ID
 * @method integer getIsAutoRenew() 获取续费标志
 * @method void setIsAutoRenew(integer $IsAutoRenew) 设置续费标志
 * @method string getDeviceClass() 获取设备标识
 * @method void setDeviceClass(string $DeviceClass) 设置设备标识
 * @method integer getMutable() 获取支持变配
 * @method void setMutable(integer $Mutable) 设置支持变配
 * @method array getMCMultiDisk() 获取多云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCMultiDisk(array $MCMultiDisk) 设置多云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method CdbInfo getCdbNodeInfo() 获取数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdbNodeInfo(CdbInfo $CdbNodeInfo) 设置数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取内网IP
 * @method void setIp(string $Ip) 设置内网IP
 * @method integer getDestroyable() 获取此节点是否可销毁，1可销毁，0不可销毁
 * @method void setDestroyable(integer $Destroyable) 设置此节点是否可销毁，1可销毁，0不可销毁
 * @method array getTags() 获取节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoFlag() 获取是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
 * @method void setAutoFlag(integer $AutoFlag) 设置是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
 * @method string getHardwareResourceType() 获取资源类型, host/pod
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置资源类型, host/pod
 * @method integer getIsDynamicSpec() 获取是否浮动规格，1是，0否
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) 设置是否浮动规格，1是，0否
 * @method string getDynamicPodSpec() 获取浮动规格值json字符串
 * @method void setDynamicPodSpec(string $DynamicPodSpec) 设置浮动规格值json字符串
 * @method integer getSupportModifyPayMode() 获取是否支持变更计费类型 1是，0否
 * @method void setSupportModifyPayMode(integer $SupportModifyPayMode) 设置是否支持变更计费类型 1是，0否
 * @method integer getRootStorageType() 获取系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

 * @method void setRootStorageType(integer $RootStorageType) 设置系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method SubnetInfo getSubnetInfo() 获取子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetInfo(SubnetInfo $SubnetInfo) 设置子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClients() 获取客户端
 * @method void setClients(string $Clients) 设置客户端
 * @method string getCurrentTime() 获取系统当前时间
 * @method void setCurrentTime(string $CurrentTime) 设置系统当前时间
 * @method integer getIsFederation() 获取是否用于联邦 ,1是，0否
 * @method void setIsFederation(integer $IsFederation) 设置是否用于联邦 ,1是，0否
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceClient() 获取服务
 * @method void setServiceClient(string $ServiceClient) 设置服务
 * @method boolean getDisableApiTermination() 获取该实例是否开启实例保护，true为开启 false为关闭
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置该实例是否开启实例保护，true为开启 false为关闭
 * @method integer getTradeVersion() 获取0表示老计费，1表示新计费
 * @method void setTradeVersion(integer $TradeVersion) 设置0表示老计费，1表示新计费
 * @method string getServicesStatus() 获取各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止
 * @method void setServicesStatus(string $ServicesStatus) 设置各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getSharedClusterId() 获取共享集群id
 * @method void setSharedClusterId(string $SharedClusterId) 设置共享集群id
 * @method string getSharedClusterIdDesc() 获取共享集群id描述
 * @method void setSharedClusterIdDesc(string $SharedClusterIdDesc) 设置共享集群id描述
 * @method boolean getTimingResource() 获取是否是定时销毁资源
 * @method void setTimingResource(boolean $TimingResource) 设置是否是定时销毁资源
 * @method string getTkeClusterId() 获取资源类型（HardwareResourceType）为pod时，对应的TKE集群id
 * @method void setTkeClusterId(string $TkeClusterId) 设置资源类型（HardwareResourceType）为pod时，对应的TKE集群id
 * @method array getConfigurableServices() 获取新挂磁盘时可支持配置的服务名称列表
 * @method void setConfigurableServices(array $ConfigurableServices) 设置新挂磁盘时可支持配置的服务名称列表
 * @method string getNodeMark() 获取节点标注信息，目前只提供给tf平台使用
 * @method void setNodeMark(string $NodeMark) 设置节点标注信息，目前只提供给tf平台使用
 */
class NodeHardwareInfo extends AbstractModel
{
    /**
     * @var integer 用户APPID
     */
    public $AppId;

    /**
     * @var string 序列号
     */
    public $SerialNo;

    /**
     * @var string 机器实例ID
     */
    public $OrderNo;

    /**
     * @var string master节点绑定外网IP
     */
    public $WanIp;

    /**
     * @var integer 节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
     */
    public $Flag;

    /**
     * @var string 节点规格
     */
    public $Spec;

    /**
     * @var integer 节点核数
     */
    public $CpuNum;

    /**
     * @var integer 节点内存,单位b
     */
    public $MemSize;

    /**
     * @var string 节点内存描述，单位GB
     */
    public $MemDesc;

    /**
     * @var integer 节点所在region
     */
    public $RegionId;

    /**
     * @var integer 节点所在Zone
     */
    public $ZoneId;

    /**
     * @var string 申请时间
     */
    public $ApplyTime;

    /**
     * @var string 释放时间
     */
    public $FreeTime;

    /**
     * @var string 硬盘大小
     */
    public $DiskSize;

    /**
     * @var string 节点描述
     */
    public $NameTag;

    /**
     * @var string 节点部署服务
     */
    public $Services;

    /**
     * @var integer 磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

     */
    public $StorageType;

    /**
     * @var integer 系统盘大小，单位GB
     */
    public $RootSize;

    /**
     * @var integer 付费类型，0：按量计费；1：包年包月
     */
    public $ChargeType;

    /**
     * @var string 数据库IP
     */
    public $CdbIp;

    /**
     * @var integer 数据库端口
     */
    public $CdbPort;

    /**
     * @var integer 硬盘容量,单位b
     */
    public $HwDiskSize;

    /**
     * @var string 硬盘容量描述
     */
    public $HwDiskSizeDesc;

    /**
     * @var integer 内存容量，单位b
     */
    public $HwMemSize;

    /**
     * @var string 内存容量描述
     */
    public $HwMemSizeDesc;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 节点资源ID
     */
    public $EmrResourceId;

    /**
     * @var integer 续费标志
     */
    public $IsAutoRenew;

    /**
     * @var string 设备标识
     */
    public $DeviceClass;

    /**
     * @var integer 支持变配
     */
    public $Mutable;

    /**
     * @var array 多云盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCMultiDisk;

    /**
     * @var CdbInfo 数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdbNodeInfo;

    /**
     * @var string 内网IP
     */
    public $Ip;

    /**
     * @var integer 此节点是否可销毁，1可销毁，0不可销毁
     */
    public $Destroyable;

    /**
     * @var array 节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
     */
    public $AutoFlag;

    /**
     * @var string 资源类型, host/pod
     */
    public $HardwareResourceType;

    /**
     * @var integer 是否浮动规格，1是，0否
     */
    public $IsDynamicSpec;

    /**
     * @var string 浮动规格值json字符串
     */
    public $DynamicPodSpec;

    /**
     * @var integer 是否支持变更计费类型 1是，0否
     */
    public $SupportModifyPayMode;

    /**
     * @var integer 系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

     */
    public $RootStorageType;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var SubnetInfo 子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetInfo;

    /**
     * @var string 客户端
     */
    public $Clients;

    /**
     * @var string 系统当前时间
     */
    public $CurrentTime;

    /**
     * @var integer 是否用于联邦 ,1是，0否
     */
    public $IsFederation;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 服务
     */
    public $ServiceClient;

    /**
     * @var boolean 该实例是否开启实例保护，true为开启 false为关闭
     */
    public $DisableApiTermination;

    /**
     * @var integer 0表示老计费，1表示新计费
     */
    public $TradeVersion;

    /**
     * @var string 各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止
     */
    public $ServicesStatus;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 共享集群id
     */
    public $SharedClusterId;

    /**
     * @var string 共享集群id描述
     */
    public $SharedClusterIdDesc;

    /**
     * @var boolean 是否是定时销毁资源
     */
    public $TimingResource;

    /**
     * @var string 资源类型（HardwareResourceType）为pod时，对应的TKE集群id
     */
    public $TkeClusterId;

    /**
     * @var array 新挂磁盘时可支持配置的服务名称列表
     */
    public $ConfigurableServices;

    /**
     * @var string 节点标注信息，目前只提供给tf平台使用
     */
    public $NodeMark;

    /**
     * @param integer $AppId 用户APPID
     * @param string $SerialNo 序列号
     * @param string $OrderNo 机器实例ID
     * @param string $WanIp master节点绑定外网IP
     * @param integer $Flag 节点类型。0:common节点；1:master节点
；2:core节点；3:task节点
     * @param string $Spec 节点规格
     * @param integer $CpuNum 节点核数
     * @param integer $MemSize 节点内存,单位b
     * @param string $MemDesc 节点内存描述，单位GB
     * @param integer $RegionId 节点所在region
     * @param integer $ZoneId 节点所在Zone
     * @param string $ApplyTime 申请时间
     * @param string $FreeTime 释放时间
     * @param string $DiskSize 硬盘大小
     * @param string $NameTag 节点描述
     * @param string $Services 节点部署服务
     * @param integer $StorageType 磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

     * @param integer $RootSize 系统盘大小，单位GB
     * @param integer $ChargeType 付费类型，0：按量计费；1：包年包月
     * @param string $CdbIp 数据库IP
     * @param integer $CdbPort 数据库端口
     * @param integer $HwDiskSize 硬盘容量,单位b
     * @param string $HwDiskSizeDesc 硬盘容量描述
     * @param integer $HwMemSize 内存容量，单位b
     * @param string $HwMemSizeDesc 内存容量描述
     * @param string $ExpireTime 过期时间
     * @param string $EmrResourceId 节点资源ID
     * @param integer $IsAutoRenew 续费标志
     * @param string $DeviceClass 设备标识
     * @param integer $Mutable 支持变配
     * @param array $MCMultiDisk 多云盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param CdbInfo $CdbNodeInfo 数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip 内网IP
     * @param integer $Destroyable 此节点是否可销毁，1可销毁，0不可销毁
     * @param array $Tags 节点绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoFlag 是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。
     * @param string $HardwareResourceType 资源类型, host/pod
     * @param integer $IsDynamicSpec 是否浮动规格，1是，0否
     * @param string $DynamicPodSpec 浮动规格值json字符串
     * @param integer $SupportModifyPayMode 是否支持变更计费类型 1是，0否
     * @param integer $RootStorageType 系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘

     * @param string $Zone 可用区信息
     * @param SubnetInfo $SubnetInfo 子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Clients 客户端
     * @param string $CurrentTime 系统当前时间
     * @param integer $IsFederation 是否用于联邦 ,1是，0否
     * @param string $DeviceName 设备名称
     * @param string $ServiceClient 服务
     * @param boolean $DisableApiTermination 该实例是否开启实例保护，true为开启 false为关闭
     * @param integer $TradeVersion 0表示老计费，1表示新计费
     * @param string $ServicesStatus 各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止
     * @param string $Remark 备注
     * @param string $SharedClusterId 共享集群id
     * @param string $SharedClusterIdDesc 共享集群id描述
     * @param boolean $TimingResource 是否是定时销毁资源
     * @param string $TkeClusterId 资源类型（HardwareResourceType）为pod时，对应的TKE集群id
     * @param array $ConfigurableServices 新挂磁盘时可支持配置的服务名称列表
     * @param string $NodeMark 节点标注信息，目前只提供给tf平台使用
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

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemDesc",$param) and $param["MemDesc"] !== null) {
            $this->MemDesc = $param["MemDesc"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("FreeTime",$param) and $param["FreeTime"] !== null) {
            $this->FreeTime = $param["FreeTime"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NameTag",$param) and $param["NameTag"] !== null) {
            $this->NameTag = $param["NameTag"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RootSize",$param) and $param["RootSize"] !== null) {
            $this->RootSize = $param["RootSize"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("CdbIp",$param) and $param["CdbIp"] !== null) {
            $this->CdbIp = $param["CdbIp"];
        }

        if (array_key_exists("CdbPort",$param) and $param["CdbPort"] !== null) {
            $this->CdbPort = $param["CdbPort"];
        }

        if (array_key_exists("HwDiskSize",$param) and $param["HwDiskSize"] !== null) {
            $this->HwDiskSize = $param["HwDiskSize"];
        }

        if (array_key_exists("HwDiskSizeDesc",$param) and $param["HwDiskSizeDesc"] !== null) {
            $this->HwDiskSizeDesc = $param["HwDiskSizeDesc"];
        }

        if (array_key_exists("HwMemSize",$param) and $param["HwMemSize"] !== null) {
            $this->HwMemSize = $param["HwMemSize"];
        }

        if (array_key_exists("HwMemSizeDesc",$param) and $param["HwMemSizeDesc"] !== null) {
            $this->HwMemSizeDesc = $param["HwMemSizeDesc"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("Mutable",$param) and $param["Mutable"] !== null) {
            $this->Mutable = $param["Mutable"];
        }

        if (array_key_exists("MCMultiDisk",$param) and $param["MCMultiDisk"] !== null) {
            $this->MCMultiDisk = [];
            foreach ($param["MCMultiDisk"] as $key => $value){
                $obj = new MultiDiskMC();
                $obj->deserialize($value);
                array_push($this->MCMultiDisk, $obj);
            }
        }

        if (array_key_exists("CdbNodeInfo",$param) and $param["CdbNodeInfo"] !== null) {
            $this->CdbNodeInfo = new CdbInfo();
            $this->CdbNodeInfo->deserialize($param["CdbNodeInfo"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Destroyable",$param) and $param["Destroyable"] !== null) {
            $this->Destroyable = $param["Destroyable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoFlag",$param) and $param["AutoFlag"] !== null) {
            $this->AutoFlag = $param["AutoFlag"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("IsDynamicSpec",$param) and $param["IsDynamicSpec"] !== null) {
            $this->IsDynamicSpec = $param["IsDynamicSpec"];
        }

        if (array_key_exists("DynamicPodSpec",$param) and $param["DynamicPodSpec"] !== null) {
            $this->DynamicPodSpec = $param["DynamicPodSpec"];
        }

        if (array_key_exists("SupportModifyPayMode",$param) and $param["SupportModifyPayMode"] !== null) {
            $this->SupportModifyPayMode = $param["SupportModifyPayMode"];
        }

        if (array_key_exists("RootStorageType",$param) and $param["RootStorageType"] !== null) {
            $this->RootStorageType = $param["RootStorageType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetInfo",$param) and $param["SubnetInfo"] !== null) {
            $this->SubnetInfo = new SubnetInfo();
            $this->SubnetInfo->deserialize($param["SubnetInfo"]);
        }

        if (array_key_exists("Clients",$param) and $param["Clients"] !== null) {
            $this->Clients = $param["Clients"];
        }

        if (array_key_exists("CurrentTime",$param) and $param["CurrentTime"] !== null) {
            $this->CurrentTime = $param["CurrentTime"];
        }

        if (array_key_exists("IsFederation",$param) and $param["IsFederation"] !== null) {
            $this->IsFederation = $param["IsFederation"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceClient",$param) and $param["ServiceClient"] !== null) {
            $this->ServiceClient = $param["ServiceClient"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("TradeVersion",$param) and $param["TradeVersion"] !== null) {
            $this->TradeVersion = $param["TradeVersion"];
        }

        if (array_key_exists("ServicesStatus",$param) and $param["ServicesStatus"] !== null) {
            $this->ServicesStatus = $param["ServicesStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SharedClusterId",$param) and $param["SharedClusterId"] !== null) {
            $this->SharedClusterId = $param["SharedClusterId"];
        }

        if (array_key_exists("SharedClusterIdDesc",$param) and $param["SharedClusterIdDesc"] !== null) {
            $this->SharedClusterIdDesc = $param["SharedClusterIdDesc"];
        }

        if (array_key_exists("TimingResource",$param) and $param["TimingResource"] !== null) {
            $this->TimingResource = $param["TimingResource"];
        }

        if (array_key_exists("TkeClusterId",$param) and $param["TkeClusterId"] !== null) {
            $this->TkeClusterId = $param["TkeClusterId"];
        }

        if (array_key_exists("ConfigurableServices",$param) and $param["ConfigurableServices"] !== null) {
            $this->ConfigurableServices = $param["ConfigurableServices"];
        }

        if (array_key_exists("NodeMark",$param) and $param["NodeMark"] !== null) {
            $this->NodeMark = $param["NodeMark"];
        }
    }
}
