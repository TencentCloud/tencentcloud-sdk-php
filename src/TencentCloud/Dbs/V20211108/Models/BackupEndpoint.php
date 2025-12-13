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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份源实例详情
 *
 * @method string getDatabaseType() 获取数据库类型。目前支持的值["mysql", "mariadb", "percona"]。注意，该值必须和备份计划的类型一致。
 * @method void setDatabaseType(string $DatabaseType) 设置数据库类型。目前支持的值["mysql", "mariadb", "percona"]。注意，该值必须和备份计划的类型一致。
 * @method string getAccessType() 获取实例接入类型，支持的值包括：
"extranet" - 外网;
"cvm" - cvm自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网接入。
 * @method void setAccessType(string $AccessType) 设置实例接入类型，支持的值包括：
"extranet" - 外网;
"cvm" - cvm自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网接入。
 * @method string getUserName() 获取用户名。
 * @method void setUserName(string $UserName) 设置用户名。
 * @method string getPassword() 获取登录密码。
 * @method void setPassword(string $Password) 设置登录密码。
 * @method string getRegion() 获取接入地域。
 * @method void setRegion(string $Region) 设置接入地域。
 * @method string getSupplier() 获取服务提供商，支持的值包括["aliyun", "aws", "others"]。
 * @method void setSupplier(string $Supplier) 设置服务提供商，支持的值包括["aliyun", "aws", "others"]。
 * @method string getIp() 获取实例 Ip。
 * @method void setIp(string $Ip) 设置实例 Ip。
 * @method integer getPort() 获取实例端口号。
 * @method void setPort(integer $Port) 设置实例端口号。
 * @method string getInstanceId() 获取云数据库实例ID，格式如：cdb-qcloudtest。
 * @method void setInstanceId(string $InstanceId) 设置云数据库实例ID，格式如：cdb-qcloudtest。
 * @method string getCvmInstanceId() 获取CVM 实例ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要填写该字段。
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置CVM 实例ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要填写该字段。
 * @method string getUniqDcgId() 获取专线网关ID，格式如：dcg-0rxtqqxb。
 * @method void setUniqDcgId(string $UniqDcgId) 设置专线网关ID，格式如：dcg-0rxtqqxb。
 * @method string getUniqVpnGwId() 获取VPN网关ID，格式如：vpngw-9ghexg7q。
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置VPN网关ID，格式如：vpngw-9ghexg7q。
 * @method string getVpcId() 获取私有网络ID，格式如：vpc-92jblxto。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，格式如：vpc-92jblxto。
 * @method string getSubnetId() 获取子网ID，格式如：subnet-3paxmkdz。
 * @method void setSubnetId(string $SubnetId) 设置子网ID，格式如：subnet-3paxmkdz。
 * @method string getCcnId() 获取云联网ID，如：ccn-afp6kltc。
 * @method void setCcnId(string $CcnId) 设置云联网ID，如：ccn-afp6kltc。
 * @method string getEngineVersion() 获取数据库版本，当实例为 RDS 或 AWS 实例时才有效，格式如：5.6或者5.7，默认为5.6。
 * @method void setEngineVersion(string $EngineVersion) 设置数据库版本，当实例为 RDS 或 AWS 实例时才有效，格式如：5.6或者5.7，默认为5.6。
 * @method string getDBKernel() 获取mariadb三引擎版本。
 * @method void setDBKernel(string $DBKernel) 设置mariadb三引擎版本。
 */
class BackupEndpoint extends AbstractModel
{
    /**
     * @var string 数据库类型。目前支持的值["mysql", "mariadb", "percona"]。注意，该值必须和备份计划的类型一致。
     */
    public $DatabaseType;

    /**
     * @var string 实例接入类型，支持的值包括：
"extranet" - 外网;
"cvm" - cvm自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网接入。
     */
    public $AccessType;

    /**
     * @var string 用户名。
     */
    public $UserName;

    /**
     * @var string 登录密码。
     */
    public $Password;

    /**
     * @var string 接入地域。
     */
    public $Region;

    /**
     * @var string 服务提供商，支持的值包括["aliyun", "aws", "others"]。
     */
    public $Supplier;

    /**
     * @var string 实例 Ip。
     */
    public $Ip;

    /**
     * @var integer 实例端口号。
     */
    public $Port;

    /**
     * @var string 云数据库实例ID，格式如：cdb-qcloudtest。
     */
    public $InstanceId;

    /**
     * @var string CVM 实例ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要填写该字段。
     */
    public $CvmInstanceId;

    /**
     * @var string 专线网关ID，格式如：dcg-0rxtqqxb。
     */
    public $UniqDcgId;

    /**
     * @var string VPN网关ID，格式如：vpngw-9ghexg7q。
     */
    public $UniqVpnGwId;

    /**
     * @var string 私有网络ID，格式如：vpc-92jblxto。
     */
    public $VpcId;

    /**
     * @var string 子网ID，格式如：subnet-3paxmkdz。
     */
    public $SubnetId;

    /**
     * @var string 云联网ID，如：ccn-afp6kltc。
     */
    public $CcnId;

    /**
     * @var string 数据库版本，当实例为 RDS 或 AWS 实例时才有效，格式如：5.6或者5.7，默认为5.6。
     */
    public $EngineVersion;

    /**
     * @var string mariadb三引擎版本。
     */
    public $DBKernel;

    /**
     * @param string $DatabaseType 数据库类型。目前支持的值["mysql", "mariadb", "percona"]。注意，该值必须和备份计划的类型一致。
     * @param string $AccessType 实例接入类型，支持的值包括：
"extranet" - 外网;
"cvm" - cvm自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网接入。
     * @param string $UserName 用户名。
     * @param string $Password 登录密码。
     * @param string $Region 接入地域。
     * @param string $Supplier 服务提供商，支持的值包括["aliyun", "aws", "others"]。
     * @param string $Ip 实例 Ip。
     * @param integer $Port 实例端口号。
     * @param string $InstanceId 云数据库实例ID，格式如：cdb-qcloudtest。
     * @param string $CvmInstanceId CVM 实例ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要填写该字段。
     * @param string $UniqDcgId 专线网关ID，格式如：dcg-0rxtqqxb。
     * @param string $UniqVpnGwId VPN网关ID，格式如：vpngw-9ghexg7q。
     * @param string $VpcId 私有网络ID，格式如：vpc-92jblxto。
     * @param string $SubnetId 子网ID，格式如：subnet-3paxmkdz。
     * @param string $CcnId 云联网ID，如：ccn-afp6kltc。
     * @param string $EngineVersion 数据库版本，当实例为 RDS 或 AWS 实例时才有效，格式如：5.6或者5.7，默认为5.6。
     * @param string $DBKernel mariadb三引擎版本。
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("DBKernel",$param) and $param["DBKernel"] !== null) {
            $this->DBKernel = $param["DBKernel"];
        }
    }
}
