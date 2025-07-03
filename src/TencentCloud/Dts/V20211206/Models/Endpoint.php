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
 * 数据同步中的描述源端和目的端的信息
 *
 * @method string getRegion() 获取地域英文名，如：ap-guangzhou
 * @method void setRegion(string $Region) 设置地域英文名，如：ap-guangzhou
 * @method string getRole() 获取节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填
 * @method void setRole(string $Role) 设置节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填
 * @method string getDbKernel() 获取数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。
 * @method void setDbKernel(string $DbKernel) 设置数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。
 * @method string getInstanceId() 获取数据库实例ID，格式如：cdb-powiqx8q
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，格式如：cdb-powiqx8q
 * @method string getIp() 获取实例的IP地址，接入类型为非cdb时此项必填
 * @method void setIp(string $Ip) 设置实例的IP地址，接入类型为非cdb时此项必填
 * @method integer getPort() 获取实例端口，接入类型为非cdb时此项必填
 * @method void setPort(integer $Port) 设置实例端口，接入类型为非cdb时此项必填
 * @method string getUser() 获取用户名，对于访问需要用户名密码认证的实例必填
 * @method void setUser(string $User) 设置用户名，对于访问需要用户名密码认证的实例必填
 * @method string getPassword() 获取密码，对于访问需要用户名密码认证的实例必填
 * @method void setPassword(string $Password) 设置密码，对于访问需要用户名密码认证的实例必填
 * @method string getDbName() 获取数据库名，数据库为cdwpg时，需要提供
 * @method void setDbName(string $DbName) 设置数据库名，数据库为cdwpg时，需要提供
 * @method string getVpcId() 获取私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto
 * @method void setVpcId(string $VpcId) 设置私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto
 * @method string getSubnetId() 获取私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz
 * @method string getCvmInstanceId() 获取CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
 * @method string getUniqDcgId() 获取专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb
 * @method void setUniqDcgId(string $UniqDcgId) 设置专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb
 * @method string getUniqVpnGwId() 获取VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q
 * @method string getCcnId() 获取云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc
 * @method void setCcnId(string $CcnId) 设置云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc
 * @method string getSupplier() 获取云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others
 * @method void setSupplier(string $Supplier) 设置云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others
 * @method string getEngineVersion() 获取数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6
 * @method void setEngineVersion(string $EngineVersion) 设置数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6
 * @method string getAccount() 获取实例所属账号，如果为跨账号实例此项必填
 * @method void setAccount(string $Account) 设置实例所属账号，如果为跨账号实例此项必填
 * @method string getAccountMode() 获取资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)
 * @method void setAccountMode(string $AccountMode) 设置资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)
 * @method string getAccountRole() 获取跨账号同步时的角色，只允许[a-zA-Z0-9\-\_]+，如果为跨账号实例此项必填
 * @method void setAccountRole(string $AccountRole) 设置跨账号同步时的角色，只允许[a-zA-Z0-9\-\_]+，如果为跨账号实例此项必填
 * @method string getRoleExternalId() 获取外部角色id
 * @method void setRoleExternalId(string $RoleExternalId) 设置外部角色id
 * @method string getTmpSecretId() 获取临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
 * @method string getTmpSecretKey() 获取临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
 * @method string getTmpToken() 获取临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
 * @method void setTmpToken(string $TmpToken) 设置临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
 * @method string getEncryptConn() 获取是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted
 * @method void setEncryptConn(string $EncryptConn) 设置是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted
 * @method string getDatabaseNetEnv() 获取数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
 * @method void setDatabaseNetEnv(string $DatabaseNetEnv) 设置数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
 * @method string getCcnOwnerUin() 获取数据库为跨账号云联网下的实例时、表示云联网所属主账号
 * @method void setCcnOwnerUin(string $CcnOwnerUin) 设置数据库为跨账号云联网下的实例时、表示云联网所属主账号
 * @method string getChildInstanceId() 获取数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
 * @method void setChildInstanceId(string $ChildInstanceId) 设置数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
 * @method string getChildInstanceType() 获取数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
 * @method void setChildInstanceType(string $ChildInstanceType) 设置数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
 * @method string getSetId() 获取tdsql的分片id。如节点类型为set必填。
 * @method void setSetId(string $SetId) 设置tdsql的分片id。如节点类型为set必填。
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string 地域英文名，如：ap-guangzhou
     */
    public $Region;

    /**
     * @var string 节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填
     */
    public $Role;

    /**
     * @var string 数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。
     */
    public $DbKernel;

    /**
     * @var string 数据库实例ID，格式如：cdb-powiqx8q
     */
    public $InstanceId;

    /**
     * @var string 实例的IP地址，接入类型为非cdb时此项必填
     */
    public $Ip;

    /**
     * @var integer 实例端口，接入类型为非cdb时此项必填
     */
    public $Port;

    /**
     * @var string 用户名，对于访问需要用户名密码认证的实例必填
     */
    public $User;

    /**
     * @var string 密码，对于访问需要用户名密码认证的实例必填
     */
    public $Password;

    /**
     * @var string 数据库名，数据库为cdwpg时，需要提供
     */
    public $DbName;

    /**
     * @var string 私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz
     */
    public $SubnetId;

    /**
     * @var string CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
     */
    public $CvmInstanceId;

    /**
     * @var string 专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb
     */
    public $UniqDcgId;

    /**
     * @var string VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q
     */
    public $UniqVpnGwId;

    /**
     * @var string 云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc
     */
    public $CcnId;

    /**
     * @var string 云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others
     */
    public $Supplier;

    /**
     * @var string 数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6
     */
    public $EngineVersion;

    /**
     * @var string 实例所属账号，如果为跨账号实例此项必填
     */
    public $Account;

    /**
     * @var string 资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)
     */
    public $AccountMode;

    /**
     * @var string 跨账号同步时的角色，只允许[a-zA-Z0-9\-\_]+，如果为跨账号实例此项必填
     */
    public $AccountRole;

    /**
     * @var string 外部角色id
     */
    public $RoleExternalId;

    /**
     * @var string 临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
     */
    public $TmpSecretKey;

    /**
     * @var string 临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
     */
    public $TmpToken;

    /**
     * @var string 是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted
     */
    public $EncryptConn;

    /**
     * @var string 数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
     */
    public $DatabaseNetEnv;

    /**
     * @var string 数据库为跨账号云联网下的实例时、表示云联网所属主账号
     */
    public $CcnOwnerUin;

    /**
     * @var string 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
     */
    public $ChildInstanceId;

    /**
     * @var string 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
     */
    public $ChildInstanceType;

    /**
     * @var string tdsql的分片id。如节点类型为set必填。
     */
    public $SetId;

    /**
     * @param string $Region 地域英文名，如：ap-guangzhou
     * @param string $Role 节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填
     * @param string $DbKernel 数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。
     * @param string $InstanceId 数据库实例ID，格式如：cdb-powiqx8q
     * @param string $Ip 实例的IP地址，接入类型为非cdb时此项必填
     * @param integer $Port 实例端口，接入类型为非cdb时此项必填
     * @param string $User 用户名，对于访问需要用户名密码认证的实例必填
     * @param string $Password 密码，对于访问需要用户名密码认证的实例必填
     * @param string $DbName 数据库名，数据库为cdwpg时，需要提供
     * @param string $VpcId 私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto
     * @param string $SubnetId 私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz
     * @param string $CvmInstanceId CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
     * @param string $UniqDcgId 专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb
     * @param string $UniqVpnGwId VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q
     * @param string $CcnId 云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc
     * @param string $Supplier 云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others
     * @param string $EngineVersion 数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6
     * @param string $Account 实例所属账号，如果为跨账号实例此项必填
     * @param string $AccountMode 资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)
     * @param string $AccountRole 跨账号同步时的角色，只允许[a-zA-Z0-9\-\_]+，如果为跨账号实例此项必填
     * @param string $RoleExternalId 外部角色id
     * @param string $TmpSecretId 临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
     * @param string $TmpSecretKey 临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
     * @param string $TmpToken 临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。
     * @param string $EncryptConn 是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted
     * @param string $DatabaseNetEnv 数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
     * @param string $CcnOwnerUin 数据库为跨账号云联网下的实例时、表示云联网所属主账号
     * @param string $ChildInstanceId 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
     * @param string $ChildInstanceType 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
     * @param string $SetId tdsql的分片id。如节点类型为set必填。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("DbKernel",$param) and $param["DbKernel"] !== null) {
            $this->DbKernel = $param["DbKernel"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
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

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("AccountRole",$param) and $param["AccountRole"] !== null) {
            $this->AccountRole = $param["AccountRole"];
        }

        if (array_key_exists("RoleExternalId",$param) and $param["RoleExternalId"] !== null) {
            $this->RoleExternalId = $param["RoleExternalId"];
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

        if (array_key_exists("EncryptConn",$param) and $param["EncryptConn"] !== null) {
            $this->EncryptConn = $param["EncryptConn"];
        }

        if (array_key_exists("DatabaseNetEnv",$param) and $param["DatabaseNetEnv"] !== null) {
            $this->DatabaseNetEnv = $param["DatabaseNetEnv"];
        }

        if (array_key_exists("CcnOwnerUin",$param) and $param["CcnOwnerUin"] !== null) {
            $this->CcnOwnerUin = $param["CcnOwnerUin"];
        }

        if (array_key_exists("ChildInstanceId",$param) and $param["ChildInstanceId"] !== null) {
            $this->ChildInstanceId = $param["ChildInstanceId"];
        }

        if (array_key_exists("ChildInstanceType",$param) and $param["ChildInstanceType"] !== null) {
            $this->ChildInstanceType = $param["ChildInstanceType"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }
    }
}
