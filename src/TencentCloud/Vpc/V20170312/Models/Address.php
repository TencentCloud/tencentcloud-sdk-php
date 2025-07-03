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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述 EIP 信息
 *
 * @method string getAddressId() 获取`EIP`的`ID`，是`EIP`的唯一标识。
 * @method void setAddressId(string $AddressId) 设置`EIP`的`ID`，是`EIP`的唯一标识。
 * @method string getAddressName() 获取`EIP`名称。
 * @method void setAddressName(string $AddressName) 设置`EIP`名称。
 * @method string getAddressStatus() 获取`EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
 * @method void setAddressStatus(string $AddressStatus) 设置`EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
 * @method string getAddressIp() 获取外网IP地址
 * @method void setAddressIp(string $AddressIp) 设置外网IP地址
 * @method string getInstanceId() 获取绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
 * @method void setInstanceId(string $InstanceId) 设置绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
 * @method string getCreatedTime() 获取创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getNetworkInterfaceId() 获取绑定的弹性网卡ID，null表示没有绑定弹性网卡。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置绑定的弹性网卡ID，null表示没有绑定弹性网卡。
 * @method string getPrivateAddressIp() 获取绑定的资源内网ip，null表示没有绑定资源内网ip。
 * @method void setPrivateAddressIp(string $PrivateAddressIp) 设置绑定的资源内网ip，null表示没有绑定资源内网ip。
 * @method boolean getIsArrears() 获取资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
 * @method void setIsArrears(boolean $IsArrears) 设置资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
 * @method boolean getIsBlocked() 获取资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
 * @method void setIsBlocked(boolean $IsBlocked) 设置资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
 * @method boolean getIsEipDirectConnection() 获取eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
 * @method void setIsEipDirectConnection(boolean $IsEipDirectConnection) 设置eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
 * @method string getAddressType() 获取EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：`CalcIP` 表示设备 IP，`WanIP` 表示普通公网 IP，`EIP` 表示弹性公网 IP，`AnycastEIP` 表示加速 EIP，`AntiDDoSEIP`表示高防EIP。
 * @method void setAddressType(string $AddressType) 设置EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：`CalcIP` 表示设备 IP，`WanIP` 表示普通公网 IP，`EIP` 表示弹性公网 IP，`AnycastEIP` 表示加速 EIP，`AntiDDoSEIP`表示高防EIP。
 * @method boolean getCascadeRelease() 获取eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
 * @method void setCascadeRelease(boolean $CascadeRelease) 设置eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
 * @method AlgType getEipAlgType() 获取EIP ALG开启的协议类型。
 * @method void setEipAlgType(AlgType $EipAlgType) 设置EIP ALG开启的协议类型。
 * @method string getInternetServiceProvider() 获取弹性公网IP的运营商信息，当前可能返回值包括"CMCC"(移动),"CTCC"(电信),"CUCC"(联通),"BGP"(常规BGP)。
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置弹性公网IP的运营商信息，当前可能返回值包括"CMCC"(移动),"CTCC"(电信),"CUCC"(联通),"BGP"(常规BGP)。
 * @method boolean getLocalBgp() 获取是否本地带宽EIP，可选值：
<li>true：本地带宽EIP</li>
<li>false：非本地带宽EIP</li>
 * @method void setLocalBgp(boolean $LocalBgp) 设置是否本地带宽EIP，可选值：
<li>true：本地带宽EIP</li>
<li>false：非本地带宽EIP</li>
 * @method integer getBandwidth() 获取弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternetChargeType() 获取弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
包括：
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">表示包月带宽预付费。</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时流量后付费。</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时带宽后付费。</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetChargeType(string $InternetChargeType) 设置弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
包括：
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">表示包月带宽预付费。</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时流量后付费。</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时带宽后付费。</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取弹性公网IP关联的标签列表。
 * @method void setTagSet(array $TagSet) 设置弹性公网IP关联的标签列表。
 * @method string getDeadlineDate() 获取预付费包月带宽IP到期时间。
时间格式：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineDate(string $DeadlineDate) 设置预付费包月带宽IP到期时间。
时间格式：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取EIP绑定的实例类型。可选值：
<li>CVM：云服务器</li>
<li>NAT：NAT 网关</li>
<li>HAVIP：高可用虚拟IP</li>
<li>ENI：弹性网卡</li>
<li>CLB：内网CLB</li>
<li>DHCPIP：弹性内网IP</li>


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置EIP绑定的实例类型。可选值：
<li>CVM：云服务器</li>
<li>NAT：NAT 网关</li>
<li>HAVIP：高可用虚拟IP</li>
<li>ENI：弹性网卡</li>
<li>CLB：内网CLB</li>
<li>DHCPIP：弹性内网IP</li>


注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEgress() 获取静态单线IP网络出口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEgress(string $Egress) 设置静态单线IP网络出口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAntiDDoSPackageId() 获取高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) 设置高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.
 * @method string getRenewFlag() 获取当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:
<li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>

 * @method void setRenewFlag(string $RenewFlag) 设置当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:
<li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>

 * @method string getBandwidthPackageId() 获取当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnVpcId() 获取传统弹性公网IPv6所属vpc唯一ID
 * @method void setUnVpcId(string $UnVpcId) 设置传统弹性公网IPv6所属vpc唯一ID
 * @method string getDedicatedClusterId() 获取CDC唯一ID
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置CDC唯一ID
 */
class Address extends AbstractModel
{
    /**
     * @var string `EIP`的`ID`，是`EIP`的唯一标识。
     */
    public $AddressId;

    /**
     * @var string `EIP`名称。
     */
    public $AddressName;

    /**
     * @var string `EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
     */
    public $AddressStatus;

    /**
     * @var string 外网IP地址
     */
    public $AddressIp;

    /**
     * @var string 绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
     */
    public $InstanceId;

    /**
     * @var string 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @var string 绑定的弹性网卡ID，null表示没有绑定弹性网卡。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 绑定的资源内网ip，null表示没有绑定资源内网ip。
     */
    public $PrivateAddressIp;

    /**
     * @var boolean 资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
     */
    public $IsArrears;

    /**
     * @var boolean 资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
     */
    public $IsBlocked;

    /**
     * @var boolean eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
     */
    public $IsEipDirectConnection;

    /**
     * @var string EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：`CalcIP` 表示设备 IP，`WanIP` 表示普通公网 IP，`EIP` 表示弹性公网 IP，`AnycastEIP` 表示加速 EIP，`AntiDDoSEIP`表示高防EIP。
     */
    public $AddressType;

    /**
     * @var boolean eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
     */
    public $CascadeRelease;

    /**
     * @var AlgType EIP ALG开启的协议类型。
     */
    public $EipAlgType;

    /**
     * @var string 弹性公网IP的运营商信息，当前可能返回值包括"CMCC"(移动),"CTCC"(电信),"CUCC"(联通),"BGP"(常规BGP)。
     */
    public $InternetServiceProvider;

    /**
     * @var boolean 是否本地带宽EIP，可选值：
<li>true：本地带宽EIP</li>
<li>false：非本地带宽EIP</li>
     */
    public $LocalBgp;

    /**
     * @var integer 弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var string 弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
包括：
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">表示包月带宽预付费。</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时流量后付费。</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时带宽后付费。</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetChargeType;

    /**
     * @var array 弹性公网IP关联的标签列表。
     */
    public $TagSet;

    /**
     * @var string 预付费包月带宽IP到期时间。
时间格式：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineDate;

    /**
     * @var string EIP绑定的实例类型。可选值：
<li>CVM：云服务器</li>
<li>NAT：NAT 网关</li>
<li>HAVIP：高可用虚拟IP</li>
<li>ENI：弹性网卡</li>
<li>CLB：内网CLB</li>
<li>DHCPIP：弹性内网IP</li>


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 静态单线IP网络出口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Egress;

    /**
     * @var string 高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.
     */
    public $AntiDDoSPackageId;

    /**
     * @var string 当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:
<li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>

     */
    public $RenewFlag;

    /**
     * @var string 当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthPackageId;

    /**
     * @var string 传统弹性公网IPv6所属vpc唯一ID
     */
    public $UnVpcId;

    /**
     * @var string CDC唯一ID
     */
    public $DedicatedClusterId;

    /**
     * @param string $AddressId `EIP`的`ID`，是`EIP`的唯一标识。
     * @param string $AddressName `EIP`名称。
     * @param string $AddressStatus `EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
     * @param string $AddressIp 外网IP地址
     * @param string $InstanceId 绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
     * @param string $CreatedTime 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $NetworkInterfaceId 绑定的弹性网卡ID，null表示没有绑定弹性网卡。
     * @param string $PrivateAddressIp 绑定的资源内网ip，null表示没有绑定资源内网ip。
     * @param boolean $IsArrears 资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
     * @param boolean $IsBlocked 资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
     * @param boolean $IsEipDirectConnection eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
     * @param string $AddressType EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：`CalcIP` 表示设备 IP，`WanIP` 表示普通公网 IP，`EIP` 表示弹性公网 IP，`AnycastEIP` 表示加速 EIP，`AntiDDoSEIP`表示高防EIP。
     * @param boolean $CascadeRelease eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
     * @param AlgType $EipAlgType EIP ALG开启的协议类型。
     * @param string $InternetServiceProvider 弹性公网IP的运营商信息，当前可能返回值包括"CMCC"(移动),"CTCC"(电信),"CUCC"(联通),"BGP"(常规BGP)。
     * @param boolean $LocalBgp 是否本地带宽EIP，可选值：
<li>true：本地带宽EIP</li>
<li>false：非本地带宽EIP</li>
     * @param integer $Bandwidth 弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternetChargeType 弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
包括：
<li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li>
<p style="padding-left: 30px;">表示包月带宽预付费。</p>
<li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时流量后付费。</p>
<li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li>
<p style="padding-left: 30px;">表示按小时带宽后付费。</p>
<li><strong>BANDWIDTH_PACKAGE</strong></li>
<p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 弹性公网IP关联的标签列表。
     * @param string $DeadlineDate 预付费包月带宽IP到期时间。
时间格式：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType EIP绑定的实例类型。可选值：
<li>CVM：云服务器</li>
<li>NAT：NAT 网关</li>
<li>HAVIP：高可用虚拟IP</li>
<li>ENI：弹性网卡</li>
<li>CLB：内网CLB</li>
<li>DHCPIP：弹性内网IP</li>


注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Egress 静态单线IP网络出口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AntiDDoSPackageId 高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.
     * @param string $RenewFlag 当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:
<li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>

     * @param string $BandwidthPackageId 当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnVpcId 传统弹性公网IPv6所属vpc唯一ID
     * @param string $DedicatedClusterId CDC唯一ID
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("AddressStatus",$param) and $param["AddressStatus"] !== null) {
            $this->AddressStatus = $param["AddressStatus"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateAddressIp",$param) and $param["PrivateAddressIp"] !== null) {
            $this->PrivateAddressIp = $param["PrivateAddressIp"];
        }

        if (array_key_exists("IsArrears",$param) and $param["IsArrears"] !== null) {
            $this->IsArrears = $param["IsArrears"];
        }

        if (array_key_exists("IsBlocked",$param) and $param["IsBlocked"] !== null) {
            $this->IsBlocked = $param["IsBlocked"];
        }

        if (array_key_exists("IsEipDirectConnection",$param) and $param["IsEipDirectConnection"] !== null) {
            $this->IsEipDirectConnection = $param["IsEipDirectConnection"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("CascadeRelease",$param) and $param["CascadeRelease"] !== null) {
            $this->CascadeRelease = $param["CascadeRelease"];
        }

        if (array_key_exists("EipAlgType",$param) and $param["EipAlgType"] !== null) {
            $this->EipAlgType = new AlgType();
            $this->EipAlgType->deserialize($param["EipAlgType"]);
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("LocalBgp",$param) and $param["LocalBgp"] !== null) {
            $this->LocalBgp = $param["LocalBgp"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("DeadlineDate",$param) and $param["DeadlineDate"] !== null) {
            $this->DeadlineDate = $param["DeadlineDate"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("UnVpcId",$param) and $param["UnVpcId"] !== null) {
            $this->UnVpcId = $param["UnVpcId"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
