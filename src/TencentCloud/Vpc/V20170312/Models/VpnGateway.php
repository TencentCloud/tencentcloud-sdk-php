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
 * VPN网关对象。
 *
 * @method string getVpnGatewayId() 获取<p>网关实例ID。</p>
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置<p>网关实例ID。</p>
 * @method string getVpcId() 获取<p>VPC实例ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC实例ID。</p>
 * @method string getVpnGatewayName() 获取<p>网关实例名称。</p>
 * @method void setVpnGatewayName(string $VpnGatewayName) 设置<p>网关实例名称。</p>
 * @method string getType() 获取<p>网关实例类型</p><p>枚举值：</p><ul><li>IPSEC： IPSEC VPC类型VPN</li><li>SSL： SSL VPC类型VPN</li><li>CCN： IPSEC CCN类型VPN</li><li>SSL_CCN： SSL CCN类型VPN</li></ul><p>默认值：IPSEC</p>
 * @method void setType(string $Type) 设置<p>网关实例类型</p><p>枚举值：</p><ul><li>IPSEC： IPSEC VPC类型VPN</li><li>SSL： SSL VPC类型VPN</li><li>CCN： IPSEC CCN类型VPN</li><li>SSL_CCN： SSL CCN类型VPN</li></ul><p>默认值：IPSEC</p>
 * @method string getState() 获取<p>网关实例状态。</p><p>枚举值：</p><ul><li>PENDING： 生产中</li><li>PENDING_ERROR： 生产失败</li><li>DELETING： 删除中</li><li>DELETING_ERROR： 生产失败</li><li>AVAILABLE： 运行中</li></ul>
 * @method void setState(string $State) 设置<p>网关实例状态。</p><p>枚举值：</p><ul><li>PENDING： 生产中</li><li>PENDING_ERROR： 生产失败</li><li>DELETING： 删除中</li><li>DELETING_ERROR： 生产失败</li><li>AVAILABLE： 运行中</li></ul>
 * @method string getPublicIpAddress() 获取<p>网关公网IP。</p>
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置<p>网关公网IP。</p>
 * @method string getRenewFlag() 获取<p>网关续费类型：&#39;NOTIFY_AND_MANUAL_RENEW&#39;：手动续费，&#39;NOTIFY_AND_AUTO_RENEW&#39;：自动续费，&#39;NOT_NOTIFY_AND_NOT_RENEW&#39;：到期不续费。</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>网关续费类型：&#39;NOTIFY_AND_MANUAL_RENEW&#39;：手动续费，&#39;NOTIFY_AND_AUTO_RENEW&#39;：自动续费，&#39;NOT_NOTIFY_AND_NOT_RENEW&#39;：到期不续费。</p>
 * @method string getInstanceChargeType() 获取<p>网关付费类型：POSTPAID_BY_HOUR：按量计费，PREPAID：包年包月预付费。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>网关付费类型：POSTPAID_BY_HOUR：按量计费，PREPAID：包年包月预付费。</p>
 * @method integer getInternetMaxBandwidthOut() 获取<p>网关出带宽</p><p>单位：Mbps</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>网关出带宽</p><p>单位：Mbps</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method string getExpiredTime() 获取<p>预付费网关过期时间。</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>预付费网关过期时间。</p>
 * @method boolean getIsAddressBlocked() 获取<p>公网IP是否被封堵。</p>
 * @method void setIsAddressBlocked(boolean $IsAddressBlocked) 设置<p>公网IP是否被封堵。</p>
 * @method string getNewPurchasePlan() 获取<p>计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。</p>
 * @method void setNewPurchasePlan(string $NewPurchasePlan) 设置<p>计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。</p>
 * @method string getRestrictState() 获取<p>网关计费状态，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。</p>
 * @method void setRestrictState(string $RestrictState) 设置<p>网关计费状态，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。</p>
 * @method string getZone() 获取<p>可用区，如：ap-guangzhou-2。</p>
 * @method void setZone(string $Zone) 设置<p>可用区，如：ap-guangzhou-2。</p>
 * @method array getVpnGatewayQuotaSet() 获取<p>网关带宽配额信息。</p>
 * @method void setVpnGatewayQuotaSet(array $VpnGatewayQuotaSet) 设置<p>网关带宽配额信息。</p>
 * @method string getVersion() 获取<p>网关实例版本信息。</p>
 * @method void setVersion(string $Version) 设置<p>网关实例版本信息。</p>
 * @method string getNetworkInstanceId() 获取<p>Type值为CCN/SSL_CCN时，该值表示云联网实例ID。</p>
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置<p>Type值为CCN/SSL_CCN时，该值表示云联网实例ID。</p>
 * @method string getCdcId() 获取<p>CDC 实例ID。</p>
 * @method void setCdcId(string $CdcId) 设置<p>CDC 实例ID。</p>
 * @method integer getMaxConnection() 获取<p>SSL-VPN 客户端连接数。</p>
 * @method void setMaxConnection(integer $MaxConnection) 设置<p>SSL-VPN 客户端连接数。</p>
 * @method integer getBgpAsn() 获取<p>Bgp ASN</p>
 * @method void setBgpAsn(integer $BgpAsn) 设置<p>Bgp ASN</p>
 * @method array getTagSet() 获取<p>标签列表</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签列表</p>
 */
class VpnGateway extends AbstractModel
{
    /**
     * @var string <p>网关实例ID。</p>
     */
    public $VpnGatewayId;

    /**
     * @var string <p>VPC实例ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>网关实例名称。</p>
     */
    public $VpnGatewayName;

    /**
     * @var string <p>网关实例类型</p><p>枚举值：</p><ul><li>IPSEC： IPSEC VPC类型VPN</li><li>SSL： SSL VPC类型VPN</li><li>CCN： IPSEC CCN类型VPN</li><li>SSL_CCN： SSL CCN类型VPN</li></ul><p>默认值：IPSEC</p>
     */
    public $Type;

    /**
     * @var string <p>网关实例状态。</p><p>枚举值：</p><ul><li>PENDING： 生产中</li><li>PENDING_ERROR： 生产失败</li><li>DELETING： 删除中</li><li>DELETING_ERROR： 生产失败</li><li>AVAILABLE： 运行中</li></ul>
     */
    public $State;

    /**
     * @var string <p>网关公网IP。</p>
     */
    public $PublicIpAddress;

    /**
     * @var string <p>网关续费类型：&#39;NOTIFY_AND_MANUAL_RENEW&#39;：手动续费，&#39;NOTIFY_AND_AUTO_RENEW&#39;：自动续费，&#39;NOT_NOTIFY_AND_NOT_RENEW&#39;：到期不续费。</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>网关付费类型：POSTPAID_BY_HOUR：按量计费，PREPAID：包年包月预付费。</p>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>网关出带宽</p><p>单位：Mbps</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>预付费网关过期时间。</p>
     */
    public $ExpiredTime;

    /**
     * @var boolean <p>公网IP是否被封堵。</p>
     */
    public $IsAddressBlocked;

    /**
     * @var string <p>计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。</p>
     */
    public $NewPurchasePlan;

    /**
     * @var string <p>网关计费状态，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。</p>
     */
    public $RestrictState;

    /**
     * @var string <p>可用区，如：ap-guangzhou-2。</p>
     */
    public $Zone;

    /**
     * @var array <p>网关带宽配额信息。</p>
     */
    public $VpnGatewayQuotaSet;

    /**
     * @var string <p>网关实例版本信息。</p>
     */
    public $Version;

    /**
     * @var string <p>Type值为CCN/SSL_CCN时，该值表示云联网实例ID。</p>
     */
    public $NetworkInstanceId;

    /**
     * @var string <p>CDC 实例ID。</p>
     */
    public $CdcId;

    /**
     * @var integer <p>SSL-VPN 客户端连接数。</p>
     */
    public $MaxConnection;

    /**
     * @var integer <p>Bgp ASN</p>
     */
    public $BgpAsn;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagSet;

    /**
     * @param string $VpnGatewayId <p>网关实例ID。</p>
     * @param string $VpcId <p>VPC实例ID。</p>
     * @param string $VpnGatewayName <p>网关实例名称。</p>
     * @param string $Type <p>网关实例类型</p><p>枚举值：</p><ul><li>IPSEC： IPSEC VPC类型VPN</li><li>SSL： SSL VPC类型VPN</li><li>CCN： IPSEC CCN类型VPN</li><li>SSL_CCN： SSL CCN类型VPN</li></ul><p>默认值：IPSEC</p>
     * @param string $State <p>网关实例状态。</p><p>枚举值：</p><ul><li>PENDING： 生产中</li><li>PENDING_ERROR： 生产失败</li><li>DELETING： 删除中</li><li>DELETING_ERROR： 生产失败</li><li>AVAILABLE： 运行中</li></ul>
     * @param string $PublicIpAddress <p>网关公网IP。</p>
     * @param string $RenewFlag <p>网关续费类型：&#39;NOTIFY_AND_MANUAL_RENEW&#39;：手动续费，&#39;NOTIFY_AND_AUTO_RENEW&#39;：自动续费，&#39;NOT_NOTIFY_AND_NOT_RENEW&#39;：到期不续费。</p>
     * @param string $InstanceChargeType <p>网关付费类型：POSTPAID_BY_HOUR：按量计费，PREPAID：包年包月预付费。</p>
     * @param integer $InternetMaxBandwidthOut <p>网关出带宽</p><p>单位：Mbps</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param string $ExpiredTime <p>预付费网关过期时间。</p>
     * @param boolean $IsAddressBlocked <p>公网IP是否被封堵。</p>
     * @param string $NewPurchasePlan <p>计费模式变更，PREPAID_TO_POSTPAID：包年包月预付费到期转按小时后付费。</p>
     * @param string $RestrictState <p>网关计费状态，PROTECTIVELY_ISOLATED：被安全隔离的实例，NORMAL：正常。</p>
     * @param string $Zone <p>可用区，如：ap-guangzhou-2。</p>
     * @param array $VpnGatewayQuotaSet <p>网关带宽配额信息。</p>
     * @param string $Version <p>网关实例版本信息。</p>
     * @param string $NetworkInstanceId <p>Type值为CCN/SSL_CCN时，该值表示云联网实例ID。</p>
     * @param string $CdcId <p>CDC 实例ID。</p>
     * @param integer $MaxConnection <p>SSL-VPN 客户端连接数。</p>
     * @param integer $BgpAsn <p>Bgp ASN</p>
     * @param array $TagSet <p>标签列表</p>
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IsAddressBlocked",$param) and $param["IsAddressBlocked"] !== null) {
            $this->IsAddressBlocked = $param["IsAddressBlocked"];
        }

        if (array_key_exists("NewPurchasePlan",$param) and $param["NewPurchasePlan"] !== null) {
            $this->NewPurchasePlan = $param["NewPurchasePlan"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpnGatewayQuotaSet",$param) and $param["VpnGatewayQuotaSet"] !== null) {
            $this->VpnGatewayQuotaSet = [];
            foreach ($param["VpnGatewayQuotaSet"] as $key => $value){
                $obj = new VpnGatewayQuota();
                $obj->deserialize($value);
                array_push($this->VpnGatewayQuotaSet, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }

        if (array_key_exists("BgpAsn",$param) and $param["BgpAsn"] !== null) {
            $this->BgpAsn = $param["BgpAsn"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
