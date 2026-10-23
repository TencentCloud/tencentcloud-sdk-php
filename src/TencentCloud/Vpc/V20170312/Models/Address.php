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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述 EIP 信息
 *
 * @method string getAddressId() 获取<p><code>EIP</code>的<code>ID</code>，是<code>EIP</code>的唯一标识。</p>
 * @method void setAddressId(string $AddressId) 设置<p><code>EIP</code>的<code>ID</code>，是<code>EIP</code>的唯一标识。</p>
 * @method string getAddressName() 获取<p><code>EIP</code>名称。</p>
 * @method void setAddressName(string $AddressName) 设置<p><code>EIP</code>名称。</p>
 * @method string getAddressStatus() 获取<p><code>EIP</code>状态，包含&#39;CREATING&#39;(创建中),&#39;BINDING&#39;(绑定中),&#39;BIND&#39;(已绑定),&#39;UNBINDING&#39;(解绑中),&#39;UNBIND&#39;(已解绑),&#39;OFFLINING&#39;(释放中),&#39;BIND_ENI&#39;(绑定悬空弹性网卡)</p>
 * @method void setAddressStatus(string $AddressStatus) 设置<p><code>EIP</code>状态，包含&#39;CREATING&#39;(创建中),&#39;BINDING&#39;(绑定中),&#39;BIND&#39;(已绑定),&#39;UNBINDING&#39;(解绑中),&#39;UNBIND&#39;(已解绑),&#39;OFFLINING&#39;(释放中),&#39;BIND_ENI&#39;(绑定悬空弹性网卡)</p>
 * @method string getAddressIp() 获取<p>外网IP地址</p>
 * @method void setAddressIp(string $AddressIp) 设置<p>外网IP地址</p>
 * @method string getInstanceId() 获取<p>绑定的资源实例<code>ID</code>。可能是一个<code>CVM</code>，<code>NAT</code>。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>绑定的资源实例<code>ID</code>。可能是一个<code>CVM</code>，<code>NAT</code>。</p>
 * @method string getCreatedTime() 获取<p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
 * @method string getNetworkInterfaceId() 获取<p>绑定的弹性网卡ID，null表示没有绑定弹性网卡。</p>
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置<p>绑定的弹性网卡ID，null表示没有绑定弹性网卡。</p>
 * @method string getPrivateAddressIp() 获取<p>绑定的资源内网ip，null表示没有绑定资源内网ip。</p>
 * @method void setPrivateAddressIp(string $PrivateAddressIp) 设置<p>绑定的资源内网ip，null表示没有绑定资源内网ip。</p>
 * @method boolean getIsArrears() 获取<p>资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态</p>
 * @method void setIsArrears(boolean $IsArrears) 设置<p>资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态</p>
 * @method boolean getIsBlocked() 获取<p>资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态</p>
 * @method void setIsBlocked(boolean $IsBlocked) 设置<p>资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态</p>
 * @method boolean getIsEipDirectConnection() 获取<p>eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式</p>
 * @method void setIsEipDirectConnection(boolean $IsEipDirectConnection) 设置<p>eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式</p>
 * @method string getAddressType() 获取<p>EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：<code>CalcIP</code> 表示设备 IP，<code>WanIP</code> 表示普通公网 IP，<code>EIP</code> 表示弹性公网 IP，<code>AnycastEIP</code> 表示加速 EIP，<code>AntiDDoSEIP</code>表示高防EIP。</p>
 * @method void setAddressType(string $AddressType) 设置<p>EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：<code>CalcIP</code> 表示设备 IP，<code>WanIP</code> 表示普通公网 IP，<code>EIP</code> 表示弹性公网 IP，<code>AnycastEIP</code> 表示加速 EIP，<code>AntiDDoSEIP</code>表示高防EIP。</p>
 * @method boolean getCascadeRelease() 获取<p>eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放</p>
 * @method void setCascadeRelease(boolean $CascadeRelease) 设置<p>eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放</p>
 * @method AlgType getEipAlgType() 获取<p>EIP ALG开启的协议类型。</p>
 * @method void setEipAlgType(AlgType $EipAlgType) 设置<p>EIP ALG开启的协议类型。</p>
 * @method string getInternetServiceProvider() 获取<p>弹性公网IP的运营商信息，当前可能返回值包括&quot;CMCC&quot;(移动),&quot;CTCC&quot;(电信),&quot;CUCC&quot;(联通),&quot;BGP&quot;(常规BGP)。</p>
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置<p>弹性公网IP的运营商信息，当前可能返回值包括&quot;CMCC&quot;(移动),&quot;CTCC&quot;(电信),&quot;CUCC&quot;(联通),&quot;BGP&quot;(常规BGP)。</p>
 * @method boolean getLocalBgp() 获取<p>是否本地带宽EIP，可选值：</p><li>true：本地带宽EIP</li><li>false：非本地带宽EIP</li>
 * @method void setLocalBgp(boolean $LocalBgp) 设置<p>是否本地带宽EIP，可选值：</p><li>true：本地带宽EIP</li><li>false：非本地带宽EIP</li>
 * @method integer getBandwidth() 获取<p>弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置<p>弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternetChargeType() 获取<p>弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。<br>注意：此字段可能返回 null，表示取不到有效值。<br>包括：</p><li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li><p style="padding-left: 30px;">表示包月带宽预付费。</p><li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时流量后付费。</p><li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时带宽后付费。</p><li><strong>BANDWIDTH_PACKAGE</strong></li><p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetChargeType(string $InternetChargeType) 设置<p>弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。<br>注意：此字段可能返回 null，表示取不到有效值。<br>包括：</p><li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li><p style="padding-left: 30px;">表示包月带宽预付费。</p><li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时流量后付费。</p><li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时带宽后付费。</p><li><strong>BANDWIDTH_PACKAGE</strong></li><p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取<p>弹性公网IP关联的标签列表。</p>
 * @method void setTagSet(array $TagSet) 设置<p>弹性公网IP关联的标签列表。</p>
 * @method string getDeadlineDate() 获取<p>预付费包月带宽IP到期时间。<br>时间格式：YYYY-MM-DDThh:mm:ssZ</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineDate(string $DeadlineDate) 设置<p>预付费包月带宽IP到期时间。<br>时间格式：YYYY-MM-DDThh:mm:ssZ</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>EIP绑定的实例类型。可选值：</p><li>CVM：云服务器</li><li>NAT：NAT 网关</li><li>HAVIP：高可用虚拟IP</li><li>ENI：弹性网卡</li><li>CLB：内网CLB</li><li>DHCPIP：弹性内网IP</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置<p>EIP绑定的实例类型。可选值：</p><li>CVM：云服务器</li><li>NAT：NAT 网关</li><li>HAVIP：高可用虚拟IP</li><li>ENI：弹性网卡</li><li>CLB：内网CLB</li><li>DHCPIP：弹性内网IP</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEgress() 获取<p>静态单线IP网络出口</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEgress(string $Egress) 设置<p>静态单线IP网络出口</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAntiDDoSPackageId() 获取<p>高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.</p>
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) 设置<p>高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.</p>
 * @method string getRenewFlag() 获取<p>当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:</p><li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:</p><li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>
 * @method string getBandwidthPackageId() 获取<p>当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置<p>当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnVpcId() 获取<p>传统弹性公网IPv6所属vpc唯一ID</p>
 * @method void setUnVpcId(string $UnVpcId) 设置<p>传统弹性公网IPv6所属vpc唯一ID</p>
 * @method string getDedicatedClusterId() 获取<p>CDC唯一ID</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>CDC唯一ID</p>
 * @method boolean getEipVisibleOnEni() 获取<p>eip是否在网卡上可见。true表示支持，false表示不支持</p>
 * @method void setEipVisibleOnEni(boolean $EipVisibleOnEni) 设置<p>eip是否在网卡上可见。true表示支持，false表示不支持</p>
 */
class Address extends AbstractModel
{
    /**
     * @var string <p><code>EIP</code>的<code>ID</code>，是<code>EIP</code>的唯一标识。</p>
     */
    public $AddressId;

    /**
     * @var string <p><code>EIP</code>名称。</p>
     */
    public $AddressName;

    /**
     * @var string <p><code>EIP</code>状态，包含&#39;CREATING&#39;(创建中),&#39;BINDING&#39;(绑定中),&#39;BIND&#39;(已绑定),&#39;UNBINDING&#39;(解绑中),&#39;UNBIND&#39;(已解绑),&#39;OFFLINING&#39;(释放中),&#39;BIND_ENI&#39;(绑定悬空弹性网卡)</p>
     */
    public $AddressStatus;

    /**
     * @var string <p>外网IP地址</p>
     */
    public $AddressIp;

    /**
     * @var string <p>绑定的资源实例<code>ID</code>。可能是一个<code>CVM</code>，<code>NAT</code>。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>绑定的弹性网卡ID，null表示没有绑定弹性网卡。</p>
     */
    public $NetworkInterfaceId;

    /**
     * @var string <p>绑定的资源内网ip，null表示没有绑定资源内网ip。</p>
     */
    public $PrivateAddressIp;

    /**
     * @var boolean <p>资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态</p>
     */
    public $IsArrears;

    /**
     * @var boolean <p>资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态</p>
     */
    public $IsBlocked;

    /**
     * @var boolean <p>eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式</p>
     */
    public $IsEipDirectConnection;

    /**
     * @var string <p>EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：<code>CalcIP</code> 表示设备 IP，<code>WanIP</code> 表示普通公网 IP，<code>EIP</code> 表示弹性公网 IP，<code>AnycastEIP</code> 表示加速 EIP，<code>AntiDDoSEIP</code>表示高防EIP。</p>
     */
    public $AddressType;

    /**
     * @var boolean <p>eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放</p>
     */
    public $CascadeRelease;

    /**
     * @var AlgType <p>EIP ALG开启的协议类型。</p>
     */
    public $EipAlgType;

    /**
     * @var string <p>弹性公网IP的运营商信息，当前可能返回值包括&quot;CMCC&quot;(移动),&quot;CTCC&quot;(电信),&quot;CUCC&quot;(联通),&quot;BGP&quot;(常规BGP)。</p>
     */
    public $InternetServiceProvider;

    /**
     * @var boolean <p>是否本地带宽EIP，可选值：</p><li>true：本地带宽EIP</li><li>false：非本地带宽EIP</li>
     */
    public $LocalBgp;

    /**
     * @var integer <p>弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var string <p>弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。<br>注意：此字段可能返回 null，表示取不到有效值。<br>包括：</p><li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li><p style="padding-left: 30px;">表示包月带宽预付费。</p><li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时流量后付费。</p><li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时带宽后付费。</p><li><strong>BANDWIDTH_PACKAGE</strong></li><p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetChargeType;

    /**
     * @var array <p>弹性公网IP关联的标签列表。</p>
     */
    public $TagSet;

    /**
     * @var string <p>预付费包月带宽IP到期时间。<br>时间格式：YYYY-MM-DDThh:mm:ssZ</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineDate;

    /**
     * @var string <p>EIP绑定的实例类型。可选值：</p><li>CVM：云服务器</li><li>NAT：NAT 网关</li><li>HAVIP：高可用虚拟IP</li><li>ENI：弹性网卡</li><li>CLB：内网CLB</li><li>DHCPIP：弹性内网IP</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string <p>静态单线IP网络出口</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Egress;

    /**
     * @var string <p>高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.</p>
     */
    public $AntiDDoSPackageId;

    /**
     * @var string <p>当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:</p><li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>
     */
    public $RenewFlag;

    /**
     * @var string <p>当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthPackageId;

    /**
     * @var string <p>传统弹性公网IPv6所属vpc唯一ID</p>
     */
    public $UnVpcId;

    /**
     * @var string <p>CDC唯一ID</p>
     */
    public $DedicatedClusterId;

    /**
     * @var boolean <p>eip是否在网卡上可见。true表示支持，false表示不支持</p>
     */
    public $EipVisibleOnEni;

    /**
     * @param string $AddressId <p><code>EIP</code>的<code>ID</code>，是<code>EIP</code>的唯一标识。</p>
     * @param string $AddressName <p><code>EIP</code>名称。</p>
     * @param string $AddressStatus <p><code>EIP</code>状态，包含&#39;CREATING&#39;(创建中),&#39;BINDING&#39;(绑定中),&#39;BIND&#39;(已绑定),&#39;UNBINDING&#39;(解绑中),&#39;UNBIND&#39;(已解绑),&#39;OFFLINING&#39;(释放中),&#39;BIND_ENI&#39;(绑定悬空弹性网卡)</p>
     * @param string $AddressIp <p>外网IP地址</p>
     * @param string $InstanceId <p>绑定的资源实例<code>ID</code>。可能是一个<code>CVM</code>，<code>NAT</code>。</p>
     * @param string $CreatedTime <p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
     * @param string $NetworkInterfaceId <p>绑定的弹性网卡ID，null表示没有绑定弹性网卡。</p>
     * @param string $PrivateAddressIp <p>绑定的资源内网ip，null表示没有绑定资源内网ip。</p>
     * @param boolean $IsArrears <p>资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态</p>
     * @param boolean $IsBlocked <p>资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态</p>
     * @param boolean $IsEipDirectConnection <p>eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式</p>
     * @param string $AddressType <p>EIP 资源类型，包括CalcIP、WanIP、EIP和AnycastEIP、高防EIP。其中：<code>CalcIP</code> 表示设备 IP，<code>WanIP</code> 表示普通公网 IP，<code>EIP</code> 表示弹性公网 IP，<code>AnycastEIP</code> 表示加速 EIP，<code>AntiDDoSEIP</code>表示高防EIP。</p>
     * @param boolean $CascadeRelease <p>eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放</p>
     * @param AlgType $EipAlgType <p>EIP ALG开启的协议类型。</p>
     * @param string $InternetServiceProvider <p>弹性公网IP的运营商信息，当前可能返回值包括&quot;CMCC&quot;(移动),&quot;CTCC&quot;(电信),&quot;CUCC&quot;(联通),&quot;BGP&quot;(常规BGP)。</p>
     * @param boolean $LocalBgp <p>是否本地带宽EIP，可选值：</p><li>true：本地带宽EIP</li><li>false：非本地带宽EIP</li>
     * @param integer $Bandwidth <p>弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternetChargeType <p>弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。<br>注意：此字段可能返回 null，表示取不到有效值。<br>包括：</p><li><strong>BANDWIDTH_PREPAID_BY_MONTH</strong></li><p style="padding-left: 30px;">表示包月带宽预付费。</p><li><strong>TRAFFIC_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时流量后付费。</p><li><strong>BANDWIDTH_POSTPAID_BY_HOUR</strong></li><p style="padding-left: 30px;">表示按小时带宽后付费。</p><li><strong>BANDWIDTH_PACKAGE</strong></li><p style="padding-left: 30px;">表示共享带宽包。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet <p>弹性公网IP关联的标签列表。</p>
     * @param string $DeadlineDate <p>预付费包月带宽IP到期时间。<br>时间格式：YYYY-MM-DDThh:mm:ssZ</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>EIP绑定的实例类型。可选值：</p><li>CVM：云服务器</li><li>NAT：NAT 网关</li><li>HAVIP：高可用虚拟IP</li><li>ENI：弹性网卡</li><li>CLB：内网CLB</li><li>DHCPIP：弹性内网IP</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Egress <p>静态单线IP网络出口</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AntiDDoSPackageId <p>高防包ID,当EIP类型为高防EIP时，返回EIP绑定的高防包ID.</p>
     * @param string $RenewFlag <p>当前EIP是否自动续费，只有按月带宽预付费的EIP才会显示该字段，具体值示例如下:</p><li>NOTIFY_AND_MANUAL_RENEW:正常续费</li><li>NOTIFY_AND_AUTO_RENEW:自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW:到期不续费 </li>
     * @param string $BandwidthPackageId <p>当前公网IP所关联的带宽包ID，如果该公网IP未使用带宽包计费，则返回为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnVpcId <p>传统弹性公网IPv6所属vpc唯一ID</p>
     * @param string $DedicatedClusterId <p>CDC唯一ID</p>
     * @param boolean $EipVisibleOnEni <p>eip是否在网卡上可见。true表示支持，false表示不支持</p>
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

        if (array_key_exists("EipVisibleOnEni",$param) and $param["EipVisibleOnEni"] !== null) {
            $this->EipVisibleOnEni = $param["EipVisibleOnEni"];
        }
    }
}
