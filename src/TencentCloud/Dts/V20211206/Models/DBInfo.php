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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库信息
 *
 * @method string getRole() 获取表示节点角色，针对分布式数据库，如mongodb中的mongos节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(string $Role) 设置表示节点角色，针对分布式数据库，如mongodb中的mongos节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbKernel() 获取内核版本，针对mariadb的不同内核版本等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbKernel(string $DbKernel) 设置内核版本，针对mariadb的不同内核版本等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取实例的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置实例的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取实例的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置实例的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvmInstanceId() 获取CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpnGwId() 获取VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqDcgId() 获取专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqDcgId(string $UniqDcgId) 设置专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCcnGwId() 获取云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnGwId(string $CcnGwId) 设置云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineVersion() 获取数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineVersion(string $EngineVersion) 设置数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccount() 获取实例所属账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccount(string $Account) 设置实例所属账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountRole() 获取跨账号迁移时的角色,只允许[a-zA-Z0-9\-\_]+
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountRole(string $AccountRole) 设置跨账号迁移时的角色,只允许[a-zA-Z0-9\-\_]+
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountMode() 获取资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountMode(string $AccountMode) 设置资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpSecretId() 获取临时密钥Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时密钥Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpSecretKey() 获取临时密钥Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpToken() 获取临时Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpToken(string $TmpToken) 设置临时Token
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBInfo extends AbstractModel
{
    /**
     * @var string 表示节点角色，针对分布式数据库，如mongodb中的mongos节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @var string 内核版本，针对mariadb的不同内核版本等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbKernel;

    /**
     * @var string 实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var integer 实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 实例的用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 实例的密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmInstanceId;

    /**
     * @var string VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpnGwId;

    /**
     * @var string 专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqDcgId;

    /**
     * @var string 数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnGwId;

    /**
     * @var string 私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineVersion;

    /**
     * @var string 实例所属账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Account;

    /**
     * @var string 跨账号迁移时的角色,只允许[a-zA-Z0-9\-\_]+
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountRole;

    /**
     * @var string 资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountMode;

    /**
     * @var string 临时密钥Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpSecretKey;

    /**
     * @var string 临时Token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpToken;

    /**
     * @param string $Role 表示节点角色，针对分布式数据库，如mongodb中的mongos节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbKernel 内核版本，针对mariadb的不同内核版本等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host 实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 实例的用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 实例的密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CvmInstanceId CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpnGwId VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqDcgId 专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CcnGwId 云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineVersion 数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Account 实例所属账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountRole 跨账号迁移时的角色,只允许[a-zA-Z0-9\-\_]+
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountMode 资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpSecretId 临时密钥Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpSecretKey 临时密钥Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpToken 临时Token
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("DbKernel",$param) and $param["DbKernel"] !== null) {
            $this->DbKernel = $param["DbKernel"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CcnGwId",$param) and $param["CcnGwId"] !== null) {
            $this->CcnGwId = $param["CcnGwId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("AccountRole",$param) and $param["AccountRole"] !== null) {
            $this->AccountRole = $param["AccountRole"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
        }
    }
}
