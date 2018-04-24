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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例 Id，唯一标识一个 TDSQL 实例
 * @method void setInstanceId(string $InstanceId) 设置实例 Id，唯一标识一个 TDSQL 实例
 * @method string getInstanceName() 获取实例名称，用户可修改
 * @method void setInstanceName(string $InstanceName) 设置实例名称，用户可修改
 * @method integer getAppId() 获取实例所属应用 Id
 * @method void setAppId(integer $AppId) 设置实例所属应用 Id
 * @method integer getProjectId() 获取实例所属项目 Id
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目 Id
 * @method string getRegion() 获取实例所在地域名称，如 ap-shanghai
 * @method void setRegion(string $Region) 设置实例所在地域名称，如 ap-shanghai
 * @method string getZone() 获取实例所在可用区名称，如 ap-shanghai-1
 * @method void setZone(string $Zone) 设置实例所在可用区名称，如 ap-shanghai-1
 * @method integer getVpcId() 获取私有网络 Id，基础网络时为 0
 * @method void setVpcId(integer $VpcId) 设置私有网络 Id，基础网络时为 0
 * @method integer getSubnetId() 获取子网 Id，基础网络时为 0
 * @method void setSubnetId(integer $SubnetId) 设置子网 Id，基础网络时为 0
 * @method integer getStatus() 获取实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除
 * @method void setStatus(integer $Status) 设置实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除
 * @method string getVip() 获取内网 IP 地址
 * @method void setVip(string $Vip) 设置内网 IP 地址
 * @method integer getVport() 获取内网端口
 * @method void setVport(integer $Vport) 设置内网端口
 * @method string getWanDomain() 获取外网访问的域名，公网可解析
 * @method void setWanDomain(string $WanDomain) 设置外网访问的域名，公网可解析
 * @method string getWanVip() 获取外网 IP 地址，公网可访问
 * @method void setWanVip(string $WanVip) 设置外网 IP 地址，公网可访问
 * @method integer getWanPort() 获取外网端口
 * @method void setWanPort(integer $WanPort) 设置外网端口
 * @method string getCreateTime() 获取实例创建时间，格式为 2006-01-02 15:04:05
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间，格式为 2006-01-02 15:04:05
 * @method string getUpdateTime() 获取实例最后更新时间，格式为 2006-01-02 15:04:05
 * @method void setUpdateTime(string $UpdateTime) 设置实例最后更新时间，格式为 2006-01-02 15:04:05
 * @method integer getAutoRenewFlag() 获取自动续费标志：0 否，1 是
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志：0 否，1 是
 * @method integer getPid() 获取产品类型 Id
 * @method void setPid(integer $Pid) 设置产品类型 Id
 * @method string getPeriodEndTime() 获取实例到期时间，格式为 2006-01-02 15:04:05
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置实例到期时间，格式为 2006-01-02 15:04:05
 * @method string getUin() 获取实例所属账号
 * @method void setUin(string $Uin) 设置实例所属账号
 * @method string getTdsqlVersion() 获取TDSQL 版本信息，如 10.1.9
 * @method void setTdsqlVersion(string $TdsqlVersion) 设置TDSQL 版本信息，如 10.1.9
 * @method integer getMemory() 获取实例内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位 GB
 * @method integer getStorage() 获取实例存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置实例存储大小，单位 GB
 */

/**
 *描述云数据库实例的详细信息。
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string 实例 Id，唯一标识一个 TDSQL 实例
     */
    public $InstanceId;

    /**
     * @var string 实例名称，用户可修改
     */
    public $InstanceName;

    /**
     * @var integer 实例所属应用 Id
     */
    public $AppId;

    /**
     * @var integer 实例所属项目 Id
     */
    public $ProjectId;

    /**
     * @var string 实例所在地域名称，如 ap-shanghai
     */
    public $Region;

    /**
     * @var string 实例所在可用区名称，如 ap-shanghai-1
     */
    public $Zone;

    /**
     * @var integer 私有网络 Id，基础网络时为 0
     */
    public $VpcId;

    /**
     * @var integer 子网 Id，基础网络时为 0
     */
    public $SubnetId;

    /**
     * @var integer 实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除
     */
    public $Status;

    /**
     * @var string 内网 IP 地址
     */
    public $Vip;

    /**
     * @var integer 内网端口
     */
    public $Vport;

    /**
     * @var string 外网访问的域名，公网可解析
     */
    public $WanDomain;

    /**
     * @var string 外网 IP 地址，公网可访问
     */
    public $WanVip;

    /**
     * @var integer 外网端口
     */
    public $WanPort;

    /**
     * @var string 实例创建时间，格式为 2006-01-02 15:04:05
     */
    public $CreateTime;

    /**
     * @var string 实例最后更新时间，格式为 2006-01-02 15:04:05
     */
    public $UpdateTime;

    /**
     * @var integer 自动续费标志：0 否，1 是
     */
    public $AutoRenewFlag;

    /**
     * @var integer 产品类型 Id
     */
    public $Pid;

    /**
     * @var string 实例到期时间，格式为 2006-01-02 15:04:05
     */
    public $PeriodEndTime;

    /**
     * @var string 实例所属账号
     */
    public $Uin;

    /**
     * @var string TDSQL 版本信息，如 10.1.9
     */
    public $TdsqlVersion;

    /**
     * @var integer 实例内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 实例存储大小，单位 GB
     */
    public $Storage;
    /**
     * @param string $InstanceId 实例 Id，唯一标识一个 TDSQL 实例
     * @param string $InstanceName 实例名称，用户可修改
     * @param integer $AppId 实例所属应用 Id
     * @param integer $ProjectId 实例所属项目 Id
     * @param string $Region 实例所在地域名称，如 ap-shanghai
     * @param string $Zone 实例所在可用区名称，如 ap-shanghai-1
     * @param integer $VpcId 私有网络 Id，基础网络时为 0
     * @param integer $SubnetId 子网 Id，基础网络时为 0
     * @param integer $Status 实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，-2 实例已删除
     * @param string $Vip 内网 IP 地址
     * @param integer $Vport 内网端口
     * @param string $WanDomain 外网访问的域名，公网可解析
     * @param string $WanVip 外网 IP 地址，公网可访问
     * @param integer $WanPort 外网端口
     * @param string $CreateTime 实例创建时间，格式为 2006-01-02 15:04:05
     * @param string $UpdateTime 实例最后更新时间，格式为 2006-01-02 15:04:05
     * @param integer $AutoRenewFlag 自动续费标志：0 否，1 是
     * @param integer $Pid 产品类型 Id
     * @param string $PeriodEndTime 实例到期时间，格式为 2006-01-02 15:04:05
     * @param string $Uin 实例所属账号
     * @param string $TdsqlVersion TDSQL 版本信息，如 10.1.9
     * @param integer $Memory 实例内存大小，单位 GB
     * @param integer $Storage 实例存储大小，单位 GB
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanVip",$param) and $param["WanVip"] !== null) {
            $this->WanVip = $param["WanVip"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TdsqlVersion",$param) and $param["TdsqlVersion"] !== null) {
            $this->TdsqlVersion = $param["TdsqlVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }
    }
}
