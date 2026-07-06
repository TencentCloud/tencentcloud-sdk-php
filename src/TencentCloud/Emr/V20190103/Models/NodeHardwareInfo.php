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
 * 节点硬件信息
 *
 * @method integer getAppId() 获取<p>用户APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户APPID</p>
 * @method string getSerialNo() 获取<p>序列号</p>
 * @method void setSerialNo(string $SerialNo) 设置<p>序列号</p>
 * @method string getOrderNo() 获取<p>机器实例ID</p>
 * @method void setOrderNo(string $OrderNo) 设置<p>机器实例ID</p>
 * @method string getWanIp() 获取<p>master节点绑定外网IP</p>
 * @method void setWanIp(string $WanIp) 设置<p>master节点绑定外网IP</p>
 * @method integer getFlag() 获取<p>节点类型。0:common节点；1:master节点<br>；2:core节点；3:task节点</p>
 * @method void setFlag(integer $Flag) 设置<p>节点类型。0:common节点；1:master节点<br>；2:core节点；3:task节点</p>
 * @method string getSpec() 获取<p>节点规格</p>
 * @method void setSpec(string $Spec) 设置<p>节点规格</p>
 * @method integer getCpuNum() 获取<p>节点核数</p>
 * @method void setCpuNum(integer $CpuNum) 设置<p>节点核数</p>
 * @method integer getMemSize() 获取<p>节点内存,单位b</p>
 * @method void setMemSize(integer $MemSize) 设置<p>节点内存,单位b</p>
 * @method string getMemDesc() 获取<p>节点内存描述，单位GB</p>
 * @method void setMemDesc(string $MemDesc) 设置<p>节点内存描述，单位GB</p>
 * @method integer getRegionId() 获取<p>节点所在region</p>
 * @method void setRegionId(integer $RegionId) 设置<p>节点所在region</p>
 * @method integer getZoneId() 获取<p>节点所在Zone</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>节点所在Zone</p>
 * @method string getApplyTime() 获取<p>申请时间</p>
 * @method void setApplyTime(string $ApplyTime) 设置<p>申请时间</p>
 * @method string getFreeTime() 获取<p>释放时间</p>
 * @method void setFreeTime(string $FreeTime) 设置<p>释放时间</p>
 * @method string getDiskSize() 获取<p>硬盘大小</p>
 * @method void setDiskSize(string $DiskSize) 设置<p>硬盘大小</p>
 * @method string getNameTag() 获取<p>节点描述</p>
 * @method void setNameTag(string $NameTag) 设置<p>节点描述</p>
 * @method string getServices() 获取<p>节点部署服务</p>
 * @method void setServices(string $Services) 设置<p>节点部署服务</p>
 * @method integer getStorageType() 获取<p>磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
 * @method void setStorageType(integer $StorageType) 设置<p>磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
 * @method integer getRootSize() 获取<p>系统盘大小，单位GB</p>
 * @method void setRootSize(integer $RootSize) 设置<p>系统盘大小，单位GB</p>
 * @method integer getChargeType() 获取<p>付费类型，0：按量计费；1：包年包月</p>
 * @method void setChargeType(integer $ChargeType) 设置<p>付费类型，0：按量计费；1：包年包月</p>
 * @method string getCdbIp() 获取<p>数据库IP</p>
 * @method void setCdbIp(string $CdbIp) 设置<p>数据库IP</p>
 * @method integer getCdbPort() 获取<p>数据库端口</p>
 * @method void setCdbPort(integer $CdbPort) 设置<p>数据库端口</p>
 * @method integer getHwDiskSize() 获取<p>硬盘容量,单位b</p>
 * @method void setHwDiskSize(integer $HwDiskSize) 设置<p>硬盘容量,单位b</p>
 * @method string getHwDiskSizeDesc() 获取<p>硬盘容量描述</p>
 * @method void setHwDiskSizeDesc(string $HwDiskSizeDesc) 设置<p>硬盘容量描述</p>
 * @method integer getHwMemSize() 获取<p>内存容量，单位b</p>
 * @method void setHwMemSize(integer $HwMemSize) 设置<p>内存容量，单位b</p>
 * @method string getHwMemSizeDesc() 获取<p>内存容量描述</p>
 * @method void setHwMemSizeDesc(string $HwMemSizeDesc) 设置<p>内存容量描述</p>
 * @method string getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
 * @method string getEmrResourceId() 获取<p>节点资源ID</p>
 * @method void setEmrResourceId(string $EmrResourceId) 设置<p>节点资源ID</p>
 * @method integer getIsAutoRenew() 获取<p>续费标志</p>
 * @method void setIsAutoRenew(integer $IsAutoRenew) 设置<p>续费标志</p>
 * @method string getDeviceClass() 获取<p>设备标识</p>
 * @method void setDeviceClass(string $DeviceClass) 设置<p>设备标识</p>
 * @method integer getMutable() 获取<p>支持变配</p>
 * @method void setMutable(integer $Mutable) 设置<p>支持变配</p>
 * @method array getMCMultiDisk() 获取<p>多云盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCMultiDisk(array $MCMultiDisk) 设置<p>多云盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CdbInfo getCdbNodeInfo() 获取<p>数据库信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdbNodeInfo(CdbInfo $CdbNodeInfo) 设置<p>数据库信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取<p>内网IP</p>
 * @method void setIp(string $Ip) 设置<p>内网IP</p>
 * @method integer getDestroyable() 获取<p>此节点是否可销毁，1可销毁，0不可销毁</p>
 * @method void setDestroyable(integer $Destroyable) 设置<p>此节点是否可销毁，1可销毁，0不可销毁</p>
 * @method array getTags() 获取<p>节点绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>节点绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoFlag() 获取<p>是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。</p>
 * @method void setAutoFlag(integer $AutoFlag) 设置<p>是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。</p>
 * @method string getHardwareResourceType() 获取<p>资源类型, host/pod</p>
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置<p>资源类型, host/pod</p>
 * @method integer getIsDynamicSpec() 获取<p>是否浮动规格，1是，0否</p>
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) 设置<p>是否浮动规格，1是，0否</p>
 * @method string getDynamicPodSpec() 获取<p>浮动规格值json字符串</p>
 * @method void setDynamicPodSpec(string $DynamicPodSpec) 设置<p>浮动规格值json字符串</p>
 * @method integer getSupportModifyPayMode() 获取<p>是否支持变更计费类型 1是，0否</p>
 * @method void setSupportModifyPayMode(integer $SupportModifyPayMode) 设置<p>是否支持变更计费类型 1是，0否</p>
 * @method integer getRootStorageType() 获取<p>系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
 * @method void setRootStorageType(integer $RootStorageType) 设置<p>系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
 * @method string getZone() 获取<p>可用区信息</p>
 * @method void setZone(string $Zone) 设置<p>可用区信息</p>
 * @method SubnetInfo getSubnetInfo() 获取<p>子网</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetInfo(SubnetInfo $SubnetInfo) 设置<p>子网</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClients() 获取<p>客户端</p>
 * @method void setClients(string $Clients) 设置<p>客户端</p>
 * @method string getCurrentTime() 获取<p>系统当前时间</p>
 * @method void setCurrentTime(string $CurrentTime) 设置<p>系统当前时间</p>
 * @method integer getIsFederation() 获取<p>是否用于联邦 ,1是，0否</p>
 * @method void setIsFederation(integer $IsFederation) 设置<p>是否用于联邦 ,1是，0否</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getServiceClient() 获取<p>服务</p>
 * @method void setServiceClient(string $ServiceClient) 设置<p>服务</p>
 * @method boolean getDisableApiTermination() 获取<p>该实例是否开启实例保护，true为开启 false为关闭</p>
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置<p>该实例是否开启实例保护，true为开启 false为关闭</p>
 * @method integer getTradeVersion() 获取<p>0表示老计费，1表示新计费</p>
 * @method void setTradeVersion(integer $TradeVersion) 设置<p>0表示老计费，1表示新计费</p>
 * @method string getServicesStatus() 获取<p>各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止</p>
 * @method void setServicesStatus(string $ServicesStatus) 设置<p>各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getSharedClusterId() 获取<p>共享集群id</p>
 * @method void setSharedClusterId(string $SharedClusterId) 设置<p>共享集群id</p>
 * @method string getSharedClusterIdDesc() 获取<p>共享集群id描述</p>
 * @method void setSharedClusterIdDesc(string $SharedClusterIdDesc) 设置<p>共享集群id描述</p>
 * @method boolean getTimingResource() 获取<p>是否是定时销毁资源</p>
 * @method void setTimingResource(boolean $TimingResource) 设置<p>是否是定时销毁资源</p>
 * @method string getTkeClusterId() 获取<p>资源类型（HardwareResourceType）为pod时，对应的TKE集群id</p>
 * @method void setTkeClusterId(string $TkeClusterId) 设置<p>资源类型（HardwareResourceType）为pod时，对应的TKE集群id</p>
 * @method array getConfigurableServices() 获取<p>新挂磁盘时可支持配置的服务名称列表</p>
 * @method void setConfigurableServices(array $ConfigurableServices) 设置<p>新挂磁盘时可支持配置的服务名称列表</p>
 * @method string getNodeMark() 获取<p>节点标注信息，目前只提供给tf平台使用</p>
 * @method void setNodeMark(string $NodeMark) 设置<p>节点标注信息，目前只提供给tf平台使用</p>
 * @method boolean getUnderwriteSetAutoRenew() 获取<p>包销资源是否支持设置自动续费</p>
 * @method void setUnderwriteSetAutoRenew(boolean $UnderwriteSetAutoRenew) 设置<p>包销资源是否支持设置自动续费</p>
 * @method string getGpuDesc() 获取<p>Gpu信息</p>
 * @method void setGpuDesc(string $GpuDesc) 设置<p>Gpu信息</p>
 * @method array getDiskHealthIssues() 获取<p>磁盘问题描述</p>
 * @method void setDiskHealthIssues(array $DiskHealthIssues) 设置<p>磁盘问题描述</p>
 */
class NodeHardwareInfo extends AbstractModel
{
    /**
     * @var integer <p>用户APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>序列号</p>
     */
    public $SerialNo;

    /**
     * @var string <p>机器实例ID</p>
     */
    public $OrderNo;

    /**
     * @var string <p>master节点绑定外网IP</p>
     */
    public $WanIp;

    /**
     * @var integer <p>节点类型。0:common节点；1:master节点<br>；2:core节点；3:task节点</p>
     */
    public $Flag;

    /**
     * @var string <p>节点规格</p>
     */
    public $Spec;

    /**
     * @var integer <p>节点核数</p>
     */
    public $CpuNum;

    /**
     * @var integer <p>节点内存,单位b</p>
     */
    public $MemSize;

    /**
     * @var string <p>节点内存描述，单位GB</p>
     */
    public $MemDesc;

    /**
     * @var integer <p>节点所在region</p>
     */
    public $RegionId;

    /**
     * @var integer <p>节点所在Zone</p>
     */
    public $ZoneId;

    /**
     * @var string <p>申请时间</p>
     */
    public $ApplyTime;

    /**
     * @var string <p>释放时间</p>
     */
    public $FreeTime;

    /**
     * @var string <p>硬盘大小</p>
     */
    public $DiskSize;

    /**
     * @var string <p>节点描述</p>
     */
    public $NameTag;

    /**
     * @var string <p>节点部署服务</p>
     */
    public $Services;

    /**
     * @var integer <p>磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
     */
    public $StorageType;

    /**
     * @var integer <p>系统盘大小，单位GB</p>
     */
    public $RootSize;

    /**
     * @var integer <p>付费类型，0：按量计费；1：包年包月</p>
     */
    public $ChargeType;

    /**
     * @var string <p>数据库IP</p>
     */
    public $CdbIp;

    /**
     * @var integer <p>数据库端口</p>
     */
    public $CdbPort;

    /**
     * @var integer <p>硬盘容量,单位b</p>
     */
    public $HwDiskSize;

    /**
     * @var string <p>硬盘容量描述</p>
     */
    public $HwDiskSizeDesc;

    /**
     * @var integer <p>内存容量，单位b</p>
     */
    public $HwMemSize;

    /**
     * @var string <p>内存容量描述</p>
     */
    public $HwMemSizeDesc;

    /**
     * @var string <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>节点资源ID</p>
     */
    public $EmrResourceId;

    /**
     * @var integer <p>续费标志</p>
     */
    public $IsAutoRenew;

    /**
     * @var string <p>设备标识</p>
     */
    public $DeviceClass;

    /**
     * @var integer <p>支持变配</p>
     */
    public $Mutable;

    /**
     * @var array <p>多云盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MCMultiDisk;

    /**
     * @var CdbInfo <p>数据库信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdbNodeInfo;

    /**
     * @var string <p>内网IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>此节点是否可销毁，1可销毁，0不可销毁</p>
     */
    public $Destroyable;

    /**
     * @var array <p>节点绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer <p>是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。</p>
     */
    public $AutoFlag;

    /**
     * @var string <p>资源类型, host/pod</p>
     */
    public $HardwareResourceType;

    /**
     * @var integer <p>是否浮动规格，1是，0否</p>
     */
    public $IsDynamicSpec;

    /**
     * @var string <p>浮动规格值json字符串</p>
     */
    public $DynamicPodSpec;

    /**
     * @var integer <p>是否支持变更计费类型 1是，0否</p>
     */
    public $SupportModifyPayMode;

    /**
     * @var integer <p>系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
     */
    public $RootStorageType;

    /**
     * @var string <p>可用区信息</p>
     */
    public $Zone;

    /**
     * @var SubnetInfo <p>子网</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetInfo;

    /**
     * @var string <p>客户端</p>
     */
    public $Clients;

    /**
     * @var string <p>系统当前时间</p>
     */
    public $CurrentTime;

    /**
     * @var integer <p>是否用于联邦 ,1是，0否</p>
     */
    public $IsFederation;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>服务</p>
     */
    public $ServiceClient;

    /**
     * @var boolean <p>该实例是否开启实例保护，true为开启 false为关闭</p>
     */
    public $DisableApiTermination;

    /**
     * @var integer <p>0表示老计费，1表示新计费</p>
     */
    public $TradeVersion;

    /**
     * @var string <p>各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止</p>
     */
    public $ServicesStatus;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>共享集群id</p>
     */
    public $SharedClusterId;

    /**
     * @var string <p>共享集群id描述</p>
     */
    public $SharedClusterIdDesc;

    /**
     * @var boolean <p>是否是定时销毁资源</p>
     */
    public $TimingResource;

    /**
     * @var string <p>资源类型（HardwareResourceType）为pod时，对应的TKE集群id</p>
     */
    public $TkeClusterId;

    /**
     * @var array <p>新挂磁盘时可支持配置的服务名称列表</p>
     */
    public $ConfigurableServices;

    /**
     * @var string <p>节点标注信息，目前只提供给tf平台使用</p>
     */
    public $NodeMark;

    /**
     * @var boolean <p>包销资源是否支持设置自动续费</p>
     */
    public $UnderwriteSetAutoRenew;

    /**
     * @var string <p>Gpu信息</p>
     */
    public $GpuDesc;

    /**
     * @var array <p>磁盘问题描述</p>
     */
    public $DiskHealthIssues;

    /**
     * @param integer $AppId <p>用户APPID</p>
     * @param string $SerialNo <p>序列号</p>
     * @param string $OrderNo <p>机器实例ID</p>
     * @param string $WanIp <p>master节点绑定外网IP</p>
     * @param integer $Flag <p>节点类型。0:common节点；1:master节点<br>；2:core节点；3:task节点</p>
     * @param string $Spec <p>节点规格</p>
     * @param integer $CpuNum <p>节点核数</p>
     * @param integer $MemSize <p>节点内存,单位b</p>
     * @param string $MemDesc <p>节点内存描述，单位GB</p>
     * @param integer $RegionId <p>节点所在region</p>
     * @param integer $ZoneId <p>节点所在Zone</p>
     * @param string $ApplyTime <p>申请时间</p>
     * @param string $FreeTime <p>释放时间</p>
     * @param string $DiskSize <p>硬盘大小</p>
     * @param string $NameTag <p>节点描述</p>
     * @param string $Services <p>节点部署服务</p>
     * @param integer $StorageType <p>磁盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
     * @param integer $RootSize <p>系统盘大小，单位GB</p>
     * @param integer $ChargeType <p>付费类型，0：按量计费；1：包年包月</p>
     * @param string $CdbIp <p>数据库IP</p>
     * @param integer $CdbPort <p>数据库端口</p>
     * @param integer $HwDiskSize <p>硬盘容量,单位b</p>
     * @param string $HwDiskSizeDesc <p>硬盘容量描述</p>
     * @param integer $HwMemSize <p>内存容量，单位b</p>
     * @param string $HwMemSizeDesc <p>内存容量描述</p>
     * @param string $ExpireTime <p>过期时间</p>
     * @param string $EmrResourceId <p>节点资源ID</p>
     * @param integer $IsAutoRenew <p>续费标志</p>
     * @param string $DeviceClass <p>设备标识</p>
     * @param integer $Mutable <p>支持变配</p>
     * @param array $MCMultiDisk <p>多云盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CdbInfo $CdbNodeInfo <p>数据库信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip <p>内网IP</p>
     * @param integer $Destroyable <p>此节点是否可销毁，1可销毁，0不可销毁</p>
     * @param array $Tags <p>节点绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoFlag <p>是否是自动扩缩容节点，0为普通节点，1为自动扩缩容节点。</p>
     * @param string $HardwareResourceType <p>资源类型, host/pod</p>
     * @param integer $IsDynamicSpec <p>是否浮动规格，1是，0否</p>
     * @param string $DynamicPodSpec <p>浮动规格值json字符串</p>
     * @param integer $SupportModifyPayMode <p>是否支持变更计费类型 1是，0否</p>
     * @param integer $RootStorageType <p>系统盘类型，1 :本地盘 2 :云硬盘 3 : 本地SSD 4 : 云SSD 5 : 高效云盘 6 : 增强型SSD云硬盘 11 : 吞吐型云硬盘 12 : 极速型SSD云硬盘 13 : 通用型SSD云硬盘 14 : 大数据型云硬盘 15 : 高IO型云硬盘 16 : 远端SSD盘</p>
     * @param string $Zone <p>可用区信息</p>
     * @param SubnetInfo $SubnetInfo <p>子网</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Clients <p>客户端</p>
     * @param string $CurrentTime <p>系统当前时间</p>
     * @param integer $IsFederation <p>是否用于联邦 ,1是，0否</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $ServiceClient <p>服务</p>
     * @param boolean $DisableApiTermination <p>该实例是否开启实例保护，true为开启 false为关闭</p>
     * @param integer $TradeVersion <p>0表示老计费，1表示新计费</p>
     * @param string $ServicesStatus <p>各组件状态，Zookeeper:STARTED,ResourceManager:STARTED，STARTED已启动，STOPED已停止</p>
     * @param string $Remark <p>备注</p>
     * @param string $SharedClusterId <p>共享集群id</p>
     * @param string $SharedClusterIdDesc <p>共享集群id描述</p>
     * @param boolean $TimingResource <p>是否是定时销毁资源</p>
     * @param string $TkeClusterId <p>资源类型（HardwareResourceType）为pod时，对应的TKE集群id</p>
     * @param array $ConfigurableServices <p>新挂磁盘时可支持配置的服务名称列表</p>
     * @param string $NodeMark <p>节点标注信息，目前只提供给tf平台使用</p>
     * @param boolean $UnderwriteSetAutoRenew <p>包销资源是否支持设置自动续费</p>
     * @param string $GpuDesc <p>Gpu信息</p>
     * @param array $DiskHealthIssues <p>磁盘问题描述</p>
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

        if (array_key_exists("UnderwriteSetAutoRenew",$param) and $param["UnderwriteSetAutoRenew"] !== null) {
            $this->UnderwriteSetAutoRenew = $param["UnderwriteSetAutoRenew"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }

        if (array_key_exists("DiskHealthIssues",$param) and $param["DiskHealthIssues"] !== null) {
            $this->DiskHealthIssues = [];
            foreach ($param["DiskHealthIssues"] as $key => $value){
                $obj = new DiskHealthIssue();
                $obj->deserialize($value);
                array_push($this->DiskHealthIssues, $obj);
            }
        }
    }
}
