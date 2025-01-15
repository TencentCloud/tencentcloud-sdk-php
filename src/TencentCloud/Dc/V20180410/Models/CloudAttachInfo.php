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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏捷上云服务信息
 *
 * @method string getInstanceId() 获取敏捷上云实例id
 * @method void setInstanceId(string $InstanceId) 设置敏捷上云实例id
 * @method string getName() 获取敏捷上云名称
 * @method void setName(string $Name) 设置敏捷上云名称
 * @method string getIapId() 获取合作伙伴的AppId
 * @method void setIapId(string $IapId) 设置合作伙伴的AppId
 * @method string getIdcAddress() 获取需要接入敏捷上云的IDC的地址
 * @method void setIdcAddress(string $IdcAddress) 设置需要接入敏捷上云的IDC的地址
 * @method string getIdcType() 获取需要接入敏捷上云的IDC的互联网服务提供商类型
 * @method void setIdcType(string $IdcType) 设置需要接入敏捷上云的IDC的互联网服务提供商类型
 * @method integer getBandwidth() 获取敏捷上云的带宽，单位为MB
 * @method void setBandwidth(integer $Bandwidth) 设置敏捷上云的带宽，单位为MB
 * @method string getTelephone() 获取联系电话
 * @method void setTelephone(string $Telephone) 设置联系电话
 * @method string getStatus() 获取敏捷上云的状态
available：就绪状态
applying：申请，待审核状态
pendingpay：代付款状态
building：建设中状态
confirming：待确认状态
isolate: 隔离状态
stoped：终止状态
 * @method void setStatus(string $Status) 设置敏捷上云的状态
available：就绪状态
applying：申请，待审核状态
pendingpay：代付款状态
building：建设中状态
confirming：待确认状态
isolate: 隔离状态
stoped：终止状态
 * @method string getApplyTime() 获取敏捷上云申请的时间
 * @method void setApplyTime(string $ApplyTime) 设置敏捷上云申请的时间
 * @method string getReadyTime() 获取敏捷上云建设完成的时间
 * @method void setReadyTime(string $ReadyTime) 设置敏捷上云建设完成的时间
 * @method string getExpireTime() 获取敏捷上云过期时间
 * @method void setExpireTime(string $ExpireTime) 设置敏捷上云过期时间
 * @method string getRemarks() 获取备注信息
 * @method void setRemarks(string $Remarks) 设置备注信息
 * @method string getRegionStatus() 获取敏捷上云的地域状态。
same-region：同地域
cross-region：跨地域
 * @method void setRegionStatus(string $RegionStatus) 设置敏捷上云的地域状态。
same-region：同地域
cross-region：跨地域
 * @method string getAppId() 获取用户的AppId
 * @method void setAppId(string $AppId) 设置用户的AppId
 * @method string getUin() 获取用户的Uin
 * @method void setUin(string $Uin) 设置用户的Uin
 * @method string getCustomerAuthName() 获取用户注册名称
 * @method void setCustomerAuthName(string $CustomerAuthName) 设置用户注册名称
 * @method string getDirectConnectId() 获取物理专线实例ID
 * @method void setDirectConnectId(string $DirectConnectId) 设置物理专线实例ID
 * @method boolean getCloudAttachServiceGatewaysSupport() 获取敏捷上云是否支持创建高速上云专线网关
 * @method void setCloudAttachServiceGatewaysSupport(boolean $CloudAttachServiceGatewaysSupport) 设置敏捷上云是否支持创建高速上云专线网关
 * @method boolean getBUpdateBandwidth() 获取敏捷上云服务是否处于升降配中
 * @method void setBUpdateBandwidth(boolean $BUpdateBandwidth) 设置敏捷上云服务是否处于升降配中
 * @method string getArRegion() 获取接入地域
 * @method void setArRegion(string $ArRegion) 设置接入地域
 */
class CloudAttachInfo extends AbstractModel
{
    /**
     * @var string 敏捷上云实例id
     */
    public $InstanceId;

    /**
     * @var string 敏捷上云名称
     */
    public $Name;

    /**
     * @var string 合作伙伴的AppId
     */
    public $IapId;

    /**
     * @var string 需要接入敏捷上云的IDC的地址
     */
    public $IdcAddress;

    /**
     * @var string 需要接入敏捷上云的IDC的互联网服务提供商类型
     */
    public $IdcType;

    /**
     * @var integer 敏捷上云的带宽，单位为MB
     */
    public $Bandwidth;

    /**
     * @var string 联系电话
     */
    public $Telephone;

    /**
     * @var string 敏捷上云的状态
available：就绪状态
applying：申请，待审核状态
pendingpay：代付款状态
building：建设中状态
confirming：待确认状态
isolate: 隔离状态
stoped：终止状态
     */
    public $Status;

    /**
     * @var string 敏捷上云申请的时间
     */
    public $ApplyTime;

    /**
     * @var string 敏捷上云建设完成的时间
     */
    public $ReadyTime;

    /**
     * @var string 敏捷上云过期时间
     */
    public $ExpireTime;

    /**
     * @var string 备注信息
     */
    public $Remarks;

    /**
     * @var string 敏捷上云的地域状态。
same-region：同地域
cross-region：跨地域
     */
    public $RegionStatus;

    /**
     * @var string 用户的AppId
     */
    public $AppId;

    /**
     * @var string 用户的Uin
     */
    public $Uin;

    /**
     * @var string 用户注册名称
     */
    public $CustomerAuthName;

    /**
     * @var string 物理专线实例ID
     */
    public $DirectConnectId;

    /**
     * @var boolean 敏捷上云是否支持创建高速上云专线网关
     */
    public $CloudAttachServiceGatewaysSupport;

    /**
     * @var boolean 敏捷上云服务是否处于升降配中
     */
    public $BUpdateBandwidth;

    /**
     * @var string 接入地域
     */
    public $ArRegion;

    /**
     * @param string $InstanceId 敏捷上云实例id
     * @param string $Name 敏捷上云名称
     * @param string $IapId 合作伙伴的AppId
     * @param string $IdcAddress 需要接入敏捷上云的IDC的地址
     * @param string $IdcType 需要接入敏捷上云的IDC的互联网服务提供商类型
     * @param integer $Bandwidth 敏捷上云的带宽，单位为MB
     * @param string $Telephone 联系电话
     * @param string $Status 敏捷上云的状态
available：就绪状态
applying：申请，待审核状态
pendingpay：代付款状态
building：建设中状态
confirming：待确认状态
isolate: 隔离状态
stoped：终止状态
     * @param string $ApplyTime 敏捷上云申请的时间
     * @param string $ReadyTime 敏捷上云建设完成的时间
     * @param string $ExpireTime 敏捷上云过期时间
     * @param string $Remarks 备注信息
     * @param string $RegionStatus 敏捷上云的地域状态。
same-region：同地域
cross-region：跨地域
     * @param string $AppId 用户的AppId
     * @param string $Uin 用户的Uin
     * @param string $CustomerAuthName 用户注册名称
     * @param string $DirectConnectId 物理专线实例ID
     * @param boolean $CloudAttachServiceGatewaysSupport 敏捷上云是否支持创建高速上云专线网关
     * @param boolean $BUpdateBandwidth 敏捷上云服务是否处于升降配中
     * @param string $ArRegion 接入地域
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
    }
}
