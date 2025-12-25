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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机参数，导入外部主机时使用
 *
 * @method string getOsName() 获取操作系统名称，只能是主机（Linux、Windows）、数据库（MySQL、SQL Server、MariaDB、PostgreSQL、MongoDBReplicaSet、MongoDBSharded、Redis）、容器（TKE、EKS）
 * @method void setOsName(string $OsName) 设置操作系统名称，只能是主机（Linux、Windows）、数据库（MySQL、SQL Server、MariaDB、PostgreSQL、MongoDBReplicaSet、MongoDBSharded、Redis）、容器（TKE、EKS）
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method integer getPort() 获取管理端口
 * @method void setPort(integer $Port) 设置管理端口
 * @method string getName() 获取主机名，可为空
 * @method void setName(string $Name) 设置主机名，可为空
 * @method string getDepartmentId() 获取资产所属的部门ID
 * @method void setDepartmentId(string $DepartmentId) 设置资产所属的部门ID
 * @method array getIpPortSet() 获取资产多节点：字段ip和端口
 * @method void setIpPortSet(array $IpPortSet) 设置资产多节点：字段ip和端口
 * @method integer getEnableSSL() 获取是否启用SSL,1:启用 0：禁用，仅支持Redis资产
 * @method void setEnableSSL(integer $EnableSSL) 设置是否启用SSL,1:启用 0：禁用，仅支持Redis资产
 * @method string getSSLCert() 获取SSL证书，EnableSSL时必填
 * @method void setSSLCert(string $SSLCert) 设置SSL证书，EnableSSL时必填
 * @method string getSSLCertName() 获取SSL证书名称，EnableSSL时必填
 * @method void setSSLCertName(string $SSLCertName) 设置SSL证书名称，EnableSSL时必填
 * @method string getInstanceId() 获取资产实例id
 * @method void setInstanceId(string $InstanceId) 设置资产实例id
 * @method string getApCode() 获取资产所属地域
 * @method void setApCode(string $ApCode) 设置资产所属地域
 * @method string getApName() 获取地域名称
 * @method void setApName(string $ApName) 设置地域名称
 * @method string getVpcId() 获取资产所属VPC
 * @method void setVpcId(string $VpcId) 设置资产所属VPC
 * @method string getSubnetId() 获取资产所属子网
 * @method void setSubnetId(string $SubnetId) 设置资产所属子网
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 */
class ExternalDevice extends AbstractModel
{
    /**
     * @var string 操作系统名称，只能是主机（Linux、Windows）、数据库（MySQL、SQL Server、MariaDB、PostgreSQL、MongoDBReplicaSet、MongoDBSharded、Redis）、容器（TKE、EKS）
     */
    public $OsName;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var integer 管理端口
     */
    public $Port;

    /**
     * @var string 主机名，可为空
     */
    public $Name;

    /**
     * @var string 资产所属的部门ID
     */
    public $DepartmentId;

    /**
     * @var array 资产多节点：字段ip和端口
     */
    public $IpPortSet;

    /**
     * @var integer 是否启用SSL,1:启用 0：禁用，仅支持Redis资产
     */
    public $EnableSSL;

    /**
     * @var string SSL证书，EnableSSL时必填
     */
    public $SSLCert;

    /**
     * @var string SSL证书名称，EnableSSL时必填
     */
    public $SSLCertName;

    /**
     * @var string 资产实例id
     */
    public $InstanceId;

    /**
     * @var string 资产所属地域
     */
    public $ApCode;

    /**
     * @var string 地域名称
     */
    public $ApName;

    /**
     * @var string 资产所属VPC
     */
    public $VpcId;

    /**
     * @var string 资产所属子网
     */
    public $SubnetId;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @param string $OsName 操作系统名称，只能是主机（Linux、Windows）、数据库（MySQL、SQL Server、MariaDB、PostgreSQL、MongoDBReplicaSet、MongoDBSharded、Redis）、容器（TKE、EKS）
     * @param string $Ip IP地址
     * @param integer $Port 管理端口
     * @param string $Name 主机名，可为空
     * @param string $DepartmentId 资产所属的部门ID
     * @param array $IpPortSet 资产多节点：字段ip和端口
     * @param integer $EnableSSL 是否启用SSL,1:启用 0：禁用，仅支持Redis资产
     * @param string $SSLCert SSL证书，EnableSSL时必填
     * @param string $SSLCertName SSL证书名称，EnableSSL时必填
     * @param string $InstanceId 资产实例id
     * @param string $ApCode 资产所属地域
     * @param string $ApName 地域名称
     * @param string $VpcId 资产所属VPC
     * @param string $SubnetId 资产所属子网
     * @param string $PublicIp 公网IP
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
        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("IpPortSet",$param) and $param["IpPortSet"] !== null) {
            $this->IpPortSet = $param["IpPortSet"];
        }

        if (array_key_exists("EnableSSL",$param) and $param["EnableSSL"] !== null) {
            $this->EnableSSL = $param["EnableSSL"];
        }

        if (array_key_exists("SSLCert",$param) and $param["SSLCert"] !== null) {
            $this->SSLCert = $param["SSLCert"];
        }

        if (array_key_exists("SSLCertName",$param) and $param["SSLCertName"] !== null) {
            $this->SSLCertName = $param["SSLCertName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("ApName",$param) and $param["ApName"] !== null) {
            $this->ApName = $param["ApName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }
    }
}
