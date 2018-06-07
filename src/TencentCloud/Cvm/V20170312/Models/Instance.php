<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method Placement getPlacement() 获取实例所在的位置。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。
 * @method string getInstanceId() 获取实例`ID`。
 * @method void setInstanceId(string $InstanceId) 设置实例`ID`。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method integer getCPU() 获取实例的CPU核数，单位：核。
 * @method void setCPU(integer $CPU) 设置实例的CPU核数，单位：核。
 * @method integer getMemory() 获取实例内存容量，单位：`GB`。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：`GB`。
 * @method string getRestrictState() 获取实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
 * @method void setRestrictState(string $RestrictState) 设置实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。
 * @method SystemDisk getSystemDisk() 获取实例系统盘信息。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘信息。
 * @method array getDataDisks() 获取实例数据盘信息。只包含随实例购买的数据盘。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘信息。只包含随实例购买的数据盘。
 * @method array getPrivateIpAddresses() 获取实例主网卡的内网`IP`列表。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置实例主网卡的内网`IP`列表。
 * @method array getPublicIpAddresses() 获取实例主网卡的公网`IP`列表。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置实例主网卡的公网`IP`列表。
 * @method InternetAccessible getInternetAccessible() 获取实例带宽信息。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置实例带宽信息。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取实例所属虚拟私有网络信息。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置实例所属虚拟私有网络信息。
 * @method string getImageId() 获取生产实例所使用的镜像`ID`。
 * @method void setImageId(string $ImageId) 设置生产实例所使用的镜像`ID`。
 * @method string getRenewFlag() 获取自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
 * @method string getCreatedTime() 获取创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getExpiredTime() 获取到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setExpiredTime(string $ExpiredTime) 设置到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getOsName() 获取操作系统名称。
 * @method void setOsName(string $OsName) 设置操作系统名称。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
 * @method LoginSettings getLoginSettings() 获取实例登录设置。目前只返回实例所关联的密钥。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。目前只返回实例所关联的密钥。
 * @method string getInstanceState() 获取实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
 * @method void setInstanceState(string $InstanceState) 设置实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
 */

/**
 *描述实例的信息
 */
class Instance extends AbstractModel
{
    /**
     * @var Placement 实例所在的位置。
     */
    public $Placement;

    /**
     * @var string 实例`ID`。
     */
    public $InstanceId;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var integer 实例的CPU核数，单位：核。
     */
    public $CPU;

    /**
     * @var integer 实例内存容量，单位：`GB`。
     */
    public $Memory;

    /**
     * @var string 实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
     */
    public $RestrictState;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk 实例系统盘信息。
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘信息。只包含随实例购买的数据盘。
     */
    public $DataDisks;

    /**
     * @var array 实例主网卡的内网`IP`列表。
     */
    public $PrivateIpAddresses;

    /**
     * @var array 实例主网卡的公网`IP`列表。
     */
    public $PublicIpAddresses;

    /**
     * @var InternetAccessible 实例带宽信息。
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud 实例所属虚拟私有网络信息。
     */
    public $VirtualPrivateCloud;

    /**
     * @var string 生产实例所使用的镜像`ID`。
     */
    public $ImageId;

    /**
     * @var string 自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
     */
    public $RenewFlag;

    /**
     * @var string 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @var string 到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $ExpiredTime;

    /**
     * @var string 操作系统名称。
     */
    public $OsName;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings 实例登录设置。目前只返回实例所关联的密钥。
     */
    public $LoginSettings;

    /**
     * @var string 实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
     */
    public $InstanceState;
    /**
     * @param Placement $Placement 实例所在的位置。
     * @param string $InstanceId 实例`ID`。
     * @param string $InstanceType 实例机型。
     * @param integer $CPU 实例的CPU核数，单位：核。
     * @param integer $Memory 实例内存容量，单位：`GB`。
     * @param string $RestrictState 实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例<br><li>EXPIRED：表示过期的实例<br><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
     * @param string $InstanceName 实例名称。
     * @param string $InstanceChargeType 实例计费模式。取值范围：<br><li>`PREPAID`：表示预付费，即包年包月<br><li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费<br><li>`CDHPAID`：`CDH`付费，即只对`CDH`计费，不对`CDH`上的实例计费。
     * @param SystemDisk $SystemDisk 实例系统盘信息。
     * @param array $DataDisks 实例数据盘信息。只包含随实例购买的数据盘。
     * @param array $PrivateIpAddresses 实例主网卡的内网`IP`列表。
     * @param array $PublicIpAddresses 实例主网卡的公网`IP`列表。
     * @param InternetAccessible $InternetAccessible 实例带宽信息。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 实例所属虚拟私有网络信息。
     * @param string $ImageId 生产实例所使用的镜像`ID`。
     * @param string $RenewFlag 自动续费标识。取值范围：<br><li>`NOTIFY_AND_MANUAL_RENEW`：表示通知即将过期，但不自动续费<br><li>`NOTIFY_AND_AUTO_RENEW`：表示通知即将过期，而且自动续费<br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`：表示不通知即将过期，也不自动续费。
     * @param string $CreatedTime 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $ExpiredTime 到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $OsName 操作系统名称。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
     * @param LoginSettings $LoginSettings 实例登录设置。目前只返回实例所关联的密钥。
     * @param string $InstanceState 实例状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>RUNNING：表示运行中<br></li><li>STOPPED：表示关机<br></li><li>STARTING：表示开机中<br></li><li>STOPPING：表示关机中<br></li><li>REBOOTING：表示重启中<br></li><li>SHUTDOWN：表示停止待销毁<br></li><li>TERMINATING：表示销毁中。<br></li>
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}
