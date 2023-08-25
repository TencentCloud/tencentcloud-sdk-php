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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DSPA用户资源元信息
 *
 * @method string getResourceId() 获取用户资源ID。
 * @method void setResourceId(string $ResourceId) 设置用户资源ID。
 * @method string getResourceName() 获取资源名称。
 * @method void setResourceName(string $ResourceName) 设置资源名称。
 * @method string getResourceVip() 获取资源VIP。
 * @method void setResourceVip(string $ResourceVip) 设置资源VIP。
 * @method integer getResourceVPort() 获取资源端口。
 * @method void setResourceVPort(integer $ResourceVPort) 设置资源端口。
 * @method string getResourceCreateTime() 获取资源被创建时间。
 * @method void setResourceCreateTime(string $ResourceCreateTime) 设置资源被创建时间。
 * @method string getResourceUniqueVpcId() 获取用户资源VPC ID 字符串。
 * @method void setResourceUniqueVpcId(string $ResourceUniqueVpcId) 设置用户资源VPC ID 字符串。
 * @method string getResourceUniqueSubnetId() 获取用户资源Subnet ID 字符串。
 * @method void setResourceUniqueSubnetId(string $ResourceUniqueSubnetId) 设置用户资源Subnet ID 字符串。
 * @method string getMetaType() 获取用户资源类型信息。
 * @method void setMetaType(string $MetaType) 设置用户资源类型信息。
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method string getResourceSyncTime() 获取资源被同步时间。
 * @method void setResourceSyncTime(string $ResourceSyncTime) 设置资源被同步时间。
 * @method string getAuthStatus() 获取资源被授权状态。
 * @method void setAuthStatus(string $AuthStatus) 设置资源被授权状态。
 * @method string getBuildType() 获取资源创建类型，cloud-云原生资源，build-用户自建资源。
 * @method void setBuildType(string $BuildType) 设置资源创建类型，cloud-云原生资源，build-用户自建资源。
 * @method string getMasterInsId() 获取主实例ID。
 * @method void setMasterInsId(string $MasterInsId) 设置主实例ID。
 * @method integer getResourceVpcId() 获取用户资源VPC ID 整数。
 * @method void setResourceVpcId(integer $ResourceVpcId) 设置用户资源VPC ID 整数。
 * @method integer getResourceSubnetId() 获取用户资源Subnet ID 整数。
 * @method void setResourceSubnetId(integer $ResourceSubnetId) 设置用户资源Subnet ID 整数。
 * @method string getProtocol() 获取协议类型。
 * @method void setProtocol(string $Protocol) 设置协议类型。
 * @method string getResourceVersion() 获取资源版本号。
 * @method void setResourceVersion(string $ResourceVersion) 设置资源版本号。
 * @method string getResourceAuthType() 获取授权方式
 * @method void setResourceAuthType(string $ResourceAuthType) 设置授权方式
 * @method string getResourceAuthAccount() 获取授权账号名
 * @method void setResourceAuthAccount(string $ResourceAuthAccount) 设置授权账号名
 */
class DspaUserResourceMeta extends AbstractModel
{
    /**
     * @var string 用户资源ID。
     */
    public $ResourceId;

    /**
     * @var string 资源名称。
     */
    public $ResourceName;

    /**
     * @var string 资源VIP。
     */
    public $ResourceVip;

    /**
     * @var integer 资源端口。
     */
    public $ResourceVPort;

    /**
     * @var string 资源被创建时间。
     */
    public $ResourceCreateTime;

    /**
     * @var string 用户资源VPC ID 字符串。
     */
    public $ResourceUniqueVpcId;

    /**
     * @var string 用户资源Subnet ID 字符串。
     */
    public $ResourceUniqueSubnetId;

    /**
     * @var string 用户资源类型信息。
     */
    public $MetaType;

    /**
     * @var string 资源所处地域。
     */
    public $ResourceRegion;

    /**
     * @var string 资源被同步时间。
     */
    public $ResourceSyncTime;

    /**
     * @var string 资源被授权状态。
     */
    public $AuthStatus;

    /**
     * @var string 资源创建类型，cloud-云原生资源，build-用户自建资源。
     */
    public $BuildType;

    /**
     * @var string 主实例ID。
     */
    public $MasterInsId;

    /**
     * @var integer 用户资源VPC ID 整数。
     */
    public $ResourceVpcId;

    /**
     * @var integer 用户资源Subnet ID 整数。
     */
    public $ResourceSubnetId;

    /**
     * @var string 协议类型。
     */
    public $Protocol;

    /**
     * @var string 资源版本号。
     */
    public $ResourceVersion;

    /**
     * @var string 授权方式
     */
    public $ResourceAuthType;

    /**
     * @var string 授权账号名
     */
    public $ResourceAuthAccount;

    /**
     * @param string $ResourceId 用户资源ID。
     * @param string $ResourceName 资源名称。
     * @param string $ResourceVip 资源VIP。
     * @param integer $ResourceVPort 资源端口。
     * @param string $ResourceCreateTime 资源被创建时间。
     * @param string $ResourceUniqueVpcId 用户资源VPC ID 字符串。
     * @param string $ResourceUniqueSubnetId 用户资源Subnet ID 字符串。
     * @param string $MetaType 用户资源类型信息。
     * @param string $ResourceRegion 资源所处地域。
     * @param string $ResourceSyncTime 资源被同步时间。
     * @param string $AuthStatus 资源被授权状态。
     * @param string $BuildType 资源创建类型，cloud-云原生资源，build-用户自建资源。
     * @param string $MasterInsId 主实例ID。
     * @param integer $ResourceVpcId 用户资源VPC ID 整数。
     * @param integer $ResourceSubnetId 用户资源Subnet ID 整数。
     * @param string $Protocol 协议类型。
     * @param string $ResourceVersion 资源版本号。
     * @param string $ResourceAuthType 授权方式
     * @param string $ResourceAuthAccount 授权账号名
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceVip",$param) and $param["ResourceVip"] !== null) {
            $this->ResourceVip = $param["ResourceVip"];
        }

        if (array_key_exists("ResourceVPort",$param) and $param["ResourceVPort"] !== null) {
            $this->ResourceVPort = $param["ResourceVPort"];
        }

        if (array_key_exists("ResourceCreateTime",$param) and $param["ResourceCreateTime"] !== null) {
            $this->ResourceCreateTime = $param["ResourceCreateTime"];
        }

        if (array_key_exists("ResourceUniqueVpcId",$param) and $param["ResourceUniqueVpcId"] !== null) {
            $this->ResourceUniqueVpcId = $param["ResourceUniqueVpcId"];
        }

        if (array_key_exists("ResourceUniqueSubnetId",$param) and $param["ResourceUniqueSubnetId"] !== null) {
            $this->ResourceUniqueSubnetId = $param["ResourceUniqueSubnetId"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceSyncTime",$param) and $param["ResourceSyncTime"] !== null) {
            $this->ResourceSyncTime = $param["ResourceSyncTime"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }

        if (array_key_exists("MasterInsId",$param) and $param["MasterInsId"] !== null) {
            $this->MasterInsId = $param["MasterInsId"];
        }

        if (array_key_exists("ResourceVpcId",$param) and $param["ResourceVpcId"] !== null) {
            $this->ResourceVpcId = $param["ResourceVpcId"];
        }

        if (array_key_exists("ResourceSubnetId",$param) and $param["ResourceSubnetId"] !== null) {
            $this->ResourceSubnetId = $param["ResourceSubnetId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ResourceVersion",$param) and $param["ResourceVersion"] !== null) {
            $this->ResourceVersion = $param["ResourceVersion"];
        }

        if (array_key_exists("ResourceAuthType",$param) and $param["ResourceAuthType"] !== null) {
            $this->ResourceAuthType = $param["ResourceAuthType"];
        }

        if (array_key_exists("ResourceAuthAccount",$param) and $param["ResourceAuthAccount"] !== null) {
            $this->ResourceAuthAccount = $param["ResourceAuthAccount"];
        }
    }
}
