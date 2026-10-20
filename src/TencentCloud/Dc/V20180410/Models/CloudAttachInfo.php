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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏捷上云服务信息
 *
 * @method string getInstanceId() 获取<p>敏捷上云实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>敏捷上云实例id</p>
 * @method string getName() 获取<p>敏捷上云名称</p>
 * @method void setName(string $Name) 设置<p>敏捷上云名称</p>
 * @method string getIapId() 获取<p>合作伙伴的AppId</p>
 * @method void setIapId(string $IapId) 设置<p>合作伙伴的AppId</p>
 * @method string getIdcAddress() 获取<p>需要接入敏捷上云的IDC的地址</p>
 * @method void setIdcAddress(string $IdcAddress) 设置<p>需要接入敏捷上云的IDC的地址</p>
 * @method string getIdcType() 获取<p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
 * @method void setIdcType(string $IdcType) 设置<p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
 * @method integer getBandwidth() 获取<p>敏捷上云的带宽，单位为MB</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>敏捷上云的带宽，单位为MB</p>
 * @method string getTelephone() 获取<p>联系电话</p>
 * @method void setTelephone(string $Telephone) 设置<p>联系电话</p>
 * @method string getStatus() 获取<p>敏捷上云的状态<br>available：就绪状态<br>applying：申请，待审核状态<br>pendingpay：代付款状态<br>building：建设中状态<br>confirming：待确认状态<br>isolate: 隔离状态<br>stoped：终止状态</p>
 * @method void setStatus(string $Status) 设置<p>敏捷上云的状态<br>available：就绪状态<br>applying：申请，待审核状态<br>pendingpay：代付款状态<br>building：建设中状态<br>confirming：待确认状态<br>isolate: 隔离状态<br>stoped：终止状态</p>
 * @method string getApplyTime() 获取<p>敏捷上云申请的时间</p>
 * @method void setApplyTime(string $ApplyTime) 设置<p>敏捷上云申请的时间</p>
 * @method string getReadyTime() 获取<p>敏捷上云建设完成的时间</p>
 * @method void setReadyTime(string $ReadyTime) 设置<p>敏捷上云建设完成的时间</p>
 * @method string getExpireTime() 获取<p>敏捷上云过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>敏捷上云过期时间</p>
 * @method string getRemarks() 获取<p>备注信息</p>
 * @method void setRemarks(string $Remarks) 设置<p>备注信息</p>
 * @method string getRegionStatus() 获取<p>敏捷上云的地域状态。<br>same-region：同地域<br>cross-region：跨地域</p>
 * @method void setRegionStatus(string $RegionStatus) 设置<p>敏捷上云的地域状态。<br>same-region：同地域<br>cross-region：跨地域</p>
 * @method string getAppId() 获取<p>用户的AppId</p>
 * @method void setAppId(string $AppId) 设置<p>用户的AppId</p>
 * @method string getUin() 获取<p>用户的Uin</p>
 * @method void setUin(string $Uin) 设置<p>用户的Uin</p>
 * @method string getCustomerAuthName() 获取<p>用户注册名称</p>
 * @method void setCustomerAuthName(string $CustomerAuthName) 设置<p>用户注册名称</p>
 * @method string getDirectConnectId() 获取<p>物理专线实例ID</p>
 * @method void setDirectConnectId(string $DirectConnectId) 设置<p>物理专线实例ID</p>
 * @method boolean getCloudAttachServiceGatewaysSupport() 获取<p>敏捷上云是否支持创建高速上云专线网关</p>
 * @method void setCloudAttachServiceGatewaysSupport(boolean $CloudAttachServiceGatewaysSupport) 设置<p>敏捷上云是否支持创建高速上云专线网关</p>
 * @method boolean getBUpdateBandwidth() 获取<p>敏捷上云服务是否处于升降配中</p>
 * @method void setBUpdateBandwidth(boolean $BUpdateBandwidth) 设置<p>敏捷上云服务是否处于升降配中</p>
 * @method string getArRegion() 获取<p>接入地域</p>
 * @method void setArRegion(string $ArRegion) 设置<p>接入地域</p>
 * @method string getIapCode() 获取<p>运营商代码</p>
 * @method void setIapCode(string $IapCode) 设置<p>运营商代码</p>
 * @method string getIdcPointType() 获取<p>IDC侧类型。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
 * @method void setIdcPointType(string $IdcPointType) 设置<p>IDC侧类型。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
 * @method boolean getBIapLinkProtected() 获取<p>运营商链路是否有保护</p>
 * @method void setBIapLinkProtected(boolean $BIapLinkProtected) 设置<p>运营商链路是否有保护</p>
 * @method string getServiceType() 获取<p>服务类型：SHARE-共享型，EXCLUSIVE-独占型</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型：SHARE-共享型，EXCLUSIVE-独占型</p>
 * @method string getVlanRange() 获取<p>VLAN范围</p>
 * @method void setVlanRange(string $VlanRange) 设置<p>VLAN范围</p>
 * @method string getRepealStatus() 获取<p>裁撤状态</p><p>枚举值：</p><ul><li>APPLYING： 申请裁撤</li><li>EXECUTING： 裁撤执行中</li><li>FAILED： 裁撤失败</li></ul>
 * @method void setRepealStatus(string $RepealStatus) 设置<p>裁撤状态</p><p>枚举值：</p><ul><li>APPLYING： 申请裁撤</li><li>EXECUTING： 裁撤执行中</li><li>FAILED： 裁撤失败</li></ul>
 * @method string getPlanRepealTime() 获取<p>计划裁撤时间</p>
 * @method void setPlanRepealTime(string $PlanRepealTime) 设置<p>计划裁撤时间</p>
 * @method string getRenewFlag() 获取<p>续费标记</p><p>枚举值：</p><ul><li>MANUAL_RENEW： 手动续费</li><li>AUTO_RENEW： 自动续费</li><li>NO_RENEW： 到期不续</li></ul>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>续费标记</p><p>枚举值：</p><ul><li>MANUAL_RENEW： 手动续费</li><li>AUTO_RENEW： 自动续费</li><li>NO_RENEW： 到期不续</li></ul>
 * @method string getAccessPointId() 获取<p>接入点ID</p>
 * @method void setAccessPointId(string $AccessPointId) 设置<p>接入点ID</p>
 * @method string getAccessPointName() 获取<p>接入点名称</p>
 * @method void setAccessPointName(string $AccessPointName) 设置<p>接入点名称</p>
 * @method integer getBillStairBandwidth() 获取<p>计费阶梯带宽(Mbps)</p>
 * @method void setBillStairBandwidth(integer $BillStairBandwidth) 设置<p>计费阶梯带宽(Mbps)</p>
 */
class CloudAttachInfo extends AbstractModel
{
    /**
     * @var string <p>敏捷上云实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>敏捷上云名称</p>
     */
    public $Name;

    /**
     * @var string <p>合作伙伴的AppId</p>
     */
    public $IapId;

    /**
     * @var string <p>需要接入敏捷上云的IDC的地址</p>
     */
    public $IdcAddress;

    /**
     * @var string <p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
     */
    public $IdcType;

    /**
     * @var integer <p>敏捷上云的带宽，单位为MB</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>联系电话</p>
     */
    public $Telephone;

    /**
     * @var string <p>敏捷上云的状态<br>available：就绪状态<br>applying：申请，待审核状态<br>pendingpay：代付款状态<br>building：建设中状态<br>confirming：待确认状态<br>isolate: 隔离状态<br>stoped：终止状态</p>
     */
    public $Status;

    /**
     * @var string <p>敏捷上云申请的时间</p>
     */
    public $ApplyTime;

    /**
     * @var string <p>敏捷上云建设完成的时间</p>
     */
    public $ReadyTime;

    /**
     * @var string <p>敏捷上云过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remarks;

    /**
     * @var string <p>敏捷上云的地域状态。<br>same-region：同地域<br>cross-region：跨地域</p>
     */
    public $RegionStatus;

    /**
     * @var string <p>用户的AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>用户的Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>用户注册名称</p>
     */
    public $CustomerAuthName;

    /**
     * @var string <p>物理专线实例ID</p>
     */
    public $DirectConnectId;

    /**
     * @var boolean <p>敏捷上云是否支持创建高速上云专线网关</p>
     */
    public $CloudAttachServiceGatewaysSupport;

    /**
     * @var boolean <p>敏捷上云服务是否处于升降配中</p>
     */
    public $BUpdateBandwidth;

    /**
     * @var string <p>接入地域</p>
     */
    public $ArRegion;

    /**
     * @var string <p>运营商代码</p>
     */
    public $IapCode;

    /**
     * @var string <p>IDC侧类型。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
     */
    public $IdcPointType;

    /**
     * @var boolean <p>运营商链路是否有保护</p>
     */
    public $BIapLinkProtected;

    /**
     * @var string <p>服务类型：SHARE-共享型，EXCLUSIVE-独占型</p>
     */
    public $ServiceType;

    /**
     * @var string <p>VLAN范围</p>
     */
    public $VlanRange;

    /**
     * @var string <p>裁撤状态</p><p>枚举值：</p><ul><li>APPLYING： 申请裁撤</li><li>EXECUTING： 裁撤执行中</li><li>FAILED： 裁撤失败</li></ul>
     */
    public $RepealStatus;

    /**
     * @var string <p>计划裁撤时间</p>
     */
    public $PlanRepealTime;

    /**
     * @var string <p>续费标记</p><p>枚举值：</p><ul><li>MANUAL_RENEW： 手动续费</li><li>AUTO_RENEW： 自动续费</li><li>NO_RENEW： 到期不续</li></ul>
     */
    public $RenewFlag;

    /**
     * @var string <p>接入点ID</p>
     */
    public $AccessPointId;

    /**
     * @var string <p>接入点名称</p>
     */
    public $AccessPointName;

    /**
     * @var integer <p>计费阶梯带宽(Mbps)</p>
     */
    public $BillStairBandwidth;

    /**
     * @param string $InstanceId <p>敏捷上云实例id</p>
     * @param string $Name <p>敏捷上云名称</p>
     * @param string $IapId <p>合作伙伴的AppId</p>
     * @param string $IdcAddress <p>需要接入敏捷上云的IDC的地址</p>
     * @param string $IdcType <p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
     * @param integer $Bandwidth <p>敏捷上云的带宽，单位为MB</p>
     * @param string $Telephone <p>联系电话</p>
     * @param string $Status <p>敏捷上云的状态<br>available：就绪状态<br>applying：申请，待审核状态<br>pendingpay：代付款状态<br>building：建设中状态<br>confirming：待确认状态<br>isolate: 隔离状态<br>stoped：终止状态</p>
     * @param string $ApplyTime <p>敏捷上云申请的时间</p>
     * @param string $ReadyTime <p>敏捷上云建设完成的时间</p>
     * @param string $ExpireTime <p>敏捷上云过期时间</p>
     * @param string $Remarks <p>备注信息</p>
     * @param string $RegionStatus <p>敏捷上云的地域状态。<br>same-region：同地域<br>cross-region：跨地域</p>
     * @param string $AppId <p>用户的AppId</p>
     * @param string $Uin <p>用户的Uin</p>
     * @param string $CustomerAuthName <p>用户注册名称</p>
     * @param string $DirectConnectId <p>物理专线实例ID</p>
     * @param boolean $CloudAttachServiceGatewaysSupport <p>敏捷上云是否支持创建高速上云专线网关</p>
     * @param boolean $BUpdateBandwidth <p>敏捷上云服务是否处于升降配中</p>
     * @param string $ArRegion <p>接入地域</p>
     * @param string $IapCode <p>运营商代码</p>
     * @param string $IdcPointType <p>IDC侧类型。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
     * @param boolean $BIapLinkProtected <p>运营商链路是否有保护</p>
     * @param string $ServiceType <p>服务类型：SHARE-共享型，EXCLUSIVE-独占型</p>
     * @param string $VlanRange <p>VLAN范围</p>
     * @param string $RepealStatus <p>裁撤状态</p><p>枚举值：</p><ul><li>APPLYING： 申请裁撤</li><li>EXECUTING： 裁撤执行中</li><li>FAILED： 裁撤失败</li></ul>
     * @param string $PlanRepealTime <p>计划裁撤时间</p>
     * @param string $RenewFlag <p>续费标记</p><p>枚举值：</p><ul><li>MANUAL_RENEW： 手动续费</li><li>AUTO_RENEW： 自动续费</li><li>NO_RENEW： 到期不续</li></ul>
     * @param string $AccessPointId <p>接入点ID</p>
     * @param string $AccessPointName <p>接入点名称</p>
     * @param integer $BillStairBandwidth <p>计费阶梯带宽(Mbps)</p>
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

        if (array_key_exists("IapId",$param) and $param["IapId"] !== null) {
            $this->IapId = $param["IapId"];
        }

        if (array_key_exists("IdcAddress",$param) and $param["IdcAddress"] !== null) {
            $this->IdcAddress = $param["IdcAddress"];
        }

        if (array_key_exists("IdcType",$param) and $param["IdcType"] !== null) {
            $this->IdcType = $param["IdcType"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ReadyTime",$param) and $param["ReadyTime"] !== null) {
            $this->ReadyTime = $param["ReadyTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("RegionStatus",$param) and $param["RegionStatus"] !== null) {
            $this->RegionStatus = $param["RegionStatus"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CustomerAuthName",$param) and $param["CustomerAuthName"] !== null) {
            $this->CustomerAuthName = $param["CustomerAuthName"];
        }

        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("CloudAttachServiceGatewaysSupport",$param) and $param["CloudAttachServiceGatewaysSupport"] !== null) {
            $this->CloudAttachServiceGatewaysSupport = $param["CloudAttachServiceGatewaysSupport"];
        }

        if (array_key_exists("BUpdateBandwidth",$param) and $param["BUpdateBandwidth"] !== null) {
            $this->BUpdateBandwidth = $param["BUpdateBandwidth"];
        }

        if (array_key_exists("ArRegion",$param) and $param["ArRegion"] !== null) {
            $this->ArRegion = $param["ArRegion"];
        }

        if (array_key_exists("IapCode",$param) and $param["IapCode"] !== null) {
            $this->IapCode = $param["IapCode"];
        }

        if (array_key_exists("IdcPointType",$param) and $param["IdcPointType"] !== null) {
            $this->IdcPointType = $param["IdcPointType"];
        }

        if (array_key_exists("BIapLinkProtected",$param) and $param["BIapLinkProtected"] !== null) {
            $this->BIapLinkProtected = $param["BIapLinkProtected"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("VlanRange",$param) and $param["VlanRange"] !== null) {
            $this->VlanRange = $param["VlanRange"];
        }

        if (array_key_exists("RepealStatus",$param) and $param["RepealStatus"] !== null) {
            $this->RepealStatus = $param["RepealStatus"];
        }

        if (array_key_exists("PlanRepealTime",$param) and $param["PlanRepealTime"] !== null) {
            $this->PlanRepealTime = $param["PlanRepealTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("AccessPointName",$param) and $param["AccessPointName"] !== null) {
            $this->AccessPointName = $param["AccessPointName"];
        }

        if (array_key_exists("BillStairBandwidth",$param) and $param["BillStairBandwidth"] !== null) {
            $this->BillStairBandwidth = $param["BillStairBandwidth"];
        }
    }
}
