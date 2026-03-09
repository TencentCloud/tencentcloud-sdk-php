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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据同步中的描述源端和目的端的信息
 *
 * @method string getRegion() 获取<p>地域英文名，如：ap-guangzhou</p>
 * @method void setRegion(string $Region) 设置<p>地域英文名，如：ap-guangzhou</p>
 * @method string getRole() 获取<p>节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填</p>
 * @method void setRole(string $Role) 设置<p>节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填</p>
 * @method string getDbKernel() 获取<p>数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。</p>
 * @method void setDbKernel(string $DbKernel) 设置<p>数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。</p>
 * @method string getInstanceId() 获取<p>数据库实例ID，格式如：cdb-powiqx8q</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>数据库实例ID，格式如：cdb-powiqx8q</p>
 * @method string getIp() 获取<p>实例的IP地址，接入类型为非cdb时此项必填</p>
 * @method void setIp(string $Ip) 设置<p>实例的IP地址，接入类型为非cdb时此项必填</p>
 * @method integer getPort() 获取<p>实例端口，接入类型为非cdb时此项必填</p>
 * @method void setPort(integer $Port) 设置<p>实例端口，接入类型为非cdb时此项必填</p>
 * @method string getUser() 获取<p>用户名，对于访问需要用户名密码认证的实例必填</p>
 * @method void setUser(string $User) 设置<p>用户名，对于访问需要用户名密码认证的实例必填</p>
 * @method string getPassword() 获取<p>密码，对于访问需要用户名密码认证的实例必填</p>
 * @method void setPassword(string $Password) 设置<p>密码，对于访问需要用户名密码认证的实例必填</p>
 * @method string getDbName() 获取<p>数据库名，数据库为cdwpg时，需要提供</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名，数据库为cdwpg时，需要提供</p>
 * @method string getVpcId() 获取<p>私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto</p>
 * @method string getSubnetId() 获取<p>私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz</p>
 * @method string getCvmInstanceId() 获取<p>CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段</p>
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置<p>CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段</p>
 * @method string getUniqDcgId() 获取<p>专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb</p>
 * @method void setUniqDcgId(string $UniqDcgId) 设置<p>专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb</p>
 * @method string getUniqVpnGwId() 获取<p>VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q</p>
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置<p>VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q</p>
 * @method string getCcnId() 获取<p>云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc</p>
 * @method string getSupplier() 获取<p>云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others</p>
 * @method void setSupplier(string $Supplier) 设置<p>云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others</p>
 * @method string getEngineVersion() 获取<p>数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6</p>
 * @method string getAccount() 获取<p>实例所属账号，如果为跨账号实例此项必填</p>
 * @method void setAccount(string $Account) 设置<p>实例所属账号，如果为跨账号实例此项必填</p>
 * @method string getAccountMode() 获取<p>资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)</p>
 * @method void setAccountMode(string $AccountMode) 设置<p>资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)</p>
 * @method string getAccountRole() 获取<p>跨账号同步时的角色，只允许[a-zA-Z0-9-_]+，如果为跨账号实例此项必填</p>
 * @method void setAccountRole(string $AccountRole) 设置<p>跨账号同步时的角色，只允许[a-zA-Z0-9-_]+，如果为跨账号实例此项必填</p>
 * @method string getRoleExternalId() 获取<p>外部角色id</p>
 * @method void setRoleExternalId(string $RoleExternalId) 设置<p>外部角色id</p>
 * @method string getTmpSecretId() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
 * @method void setTmpSecretId(string $TmpSecretId) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
 * @method string getTmpSecretKey() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
 * @method string getTmpToken() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
 * @method void setTmpToken(string $TmpToken) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
 * @method string getEncryptConn() 获取<p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
 * @method void setEncryptConn(string $EncryptConn) 设置<p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
 * @method string getDatabaseNetEnv() 获取<p>数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；</p>
 * @method void setDatabaseNetEnv(string $DatabaseNetEnv) 设置<p>数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；</p>
 * @method string getCcnOwnerUin() 获取<p>数据库为跨账号云联网下的实例时、表示云联网所属主账号</p>
 * @method void setCcnOwnerUin(string $CcnOwnerUin) 设置<p>数据库为跨账号云联网下的实例时、表示云联网所属主账号</p>
 * @method string getChildInstanceId() 获取<p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID</p>
 * @method void setChildInstanceId(string $ChildInstanceId) 设置<p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID</p>
 * @method string getChildInstanceType() 获取<p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw</p>
 * @method void setChildInstanceType(string $ChildInstanceType) 设置<p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw</p>
 * @method string getSetId() 获取<p>tdsql的分片id。如节点类型为set必填。</p>
 * @method void setSetId(string $SetId) 设置<p>tdsql的分片id。如节点类型为set必填。</p>
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string <p>地域英文名，如：ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var string <p>节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填</p>
     */
    public $Role;

    /**
     * @var string <p>数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。</p>
     */
    public $DbKernel;

    /**
     * @var string <p>数据库实例ID，格式如：cdb-powiqx8q</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例的IP地址，接入类型为非cdb时此项必填</p>
     */
    public $Ip;

    /**
     * @var integer <p>实例端口，接入类型为非cdb时此项必填</p>
     */
    public $Port;

    /**
     * @var string <p>用户名，对于访问需要用户名密码认证的实例必填</p>
     */
    public $User;

    /**
     * @var string <p>密码，对于访问需要用户名密码认证的实例必填</p>
     */
    public $Password;

    /**
     * @var string <p>数据库名，数据库为cdwpg时，需要提供</p>
     */
    public $DbName;

    /**
     * @var string <p>私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz</p>
     */
    public $SubnetId;

    /**
     * @var string <p>CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段</p>
     */
    public $CvmInstanceId;

    /**
     * @var string <p>专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb</p>
     */
    public $UniqDcgId;

    /**
     * @var string <p>VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q</p>
     */
    public $UniqVpnGwId;

    /**
     * @var string <p>云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc</p>
     */
    public $CcnId;

    /**
     * @var string <p>云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others</p>
     */
    public $Supplier;

    /**
     * @var string <p>数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>实例所属账号，如果为跨账号实例此项必填</p>
     */
    public $Account;

    /**
     * @var string <p>资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)</p>
     */
    public $AccountMode;

    /**
     * @var string <p>跨账号同步时的角色，只允许[a-zA-Z0-9-_]+，如果为跨账号实例此项必填</p>
     */
    public $AccountRole;

    /**
     * @var string <p>外部角色id</p>
     */
    public $RoleExternalId;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
     */
    public $TmpSecretId;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
     */
    public $TmpSecretKey;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
     */
    public $TmpToken;

    /**
     * @var string <p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
     */
    public $EncryptConn;

    /**
     * @var string <p>数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；</p>
     */
    public $DatabaseNetEnv;

    /**
     * @var string <p>数据库为跨账号云联网下的实例时、表示云联网所属主账号</p>
     */
    public $CcnOwnerUin;

    /**
     * @var string <p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID</p>
     */
    public $ChildInstanceId;

    /**
     * @var string <p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw</p>
     */
    public $ChildInstanceType;

    /**
     * @var string <p>tdsql的分片id。如节点类型为set必填。</p>
     */
    public $SetId;

    /**
     * @param string $Region <p>地域英文名，如：ap-guangzhou</p>
     * @param string $Role <p>节点类型，proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填</p>
     * @param string $DbKernel <p>数据库内核类型，tdsql中用于区分不同内核：percona,mariadb,mysql。注意TDSQL-C MySQL、TDSQL PostgreSQL无需填写此项值。</p>
     * @param string $InstanceId <p>数据库实例ID，格式如：cdb-powiqx8q</p>
     * @param string $Ip <p>实例的IP地址，接入类型为非cdb时此项必填</p>
     * @param integer $Port <p>实例端口，接入类型为非cdb时此项必填</p>
     * @param string $User <p>用户名，对于访问需要用户名密码认证的实例必填</p>
     * @param string $Password <p>密码，对于访问需要用户名密码认证的实例必填</p>
     * @param string $DbName <p>数据库名，数据库为cdwpg时，需要提供</p>
     * @param string $VpcId <p>私有网络ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：vpc-92jblxto</p>
     * @param string $SubnetId <p>私有网络下的子网ID，对于私有网络、专线、VPN的接入方式此项必填，格式如：subnet-3paxmkdz</p>
     * @param string $CvmInstanceId <p>CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段</p>
     * @param string $UniqDcgId <p>专线网关ID，对于专线接入类型此项必填，格式如：dcg-0rxtqqxb</p>
     * @param string $UniqVpnGwId <p>VPN网关ID，对于vpn接入类型此项必填，格式如：vpngw-9ghexg7q</p>
     * @param string $CcnId <p>云联网ID，对于云联网接入类型此项必填，如：ccn-afp6kltc</p>
     * @param string $Supplier <p>云厂商类型，当实例为RDS实例时，填写为aliyun, 其他情况均填写others，默认为others</p>
     * @param string $EngineVersion <p>数据库版本，当实例为RDS实例时才有效，其他实例忽略，格式如：5.6或者5.7，默认为5.6</p>
     * @param string $Account <p>实例所属账号，如果为跨账号实例此项必填</p>
     * @param string $AccountMode <p>资源所属账号 为空或self(表示本账号内资源)、other(表示跨账号资源)</p>
     * @param string $AccountRole <p>跨账号同步时的角色，只允许[a-zA-Z0-9-_]+，如果为跨账号实例此项必填</p>
     * @param string $RoleExternalId <p>外部角色id</p>
     * @param string $TmpSecretId <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
     * @param string $TmpSecretKey <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
     * @param string $TmpToken <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号同步文档(https://cloud.tencent.com/document/product/571/68729)第4节中关于角色的定义。</p>
     * @param string $EncryptConn <p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
     * @param string $DatabaseNetEnv <p>数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；</p>
     * @param string $CcnOwnerUin <p>数据库为跨账号云联网下的实例时、表示云联网所属主账号</p>
     * @param string $ChildInstanceId <p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID</p>
     * @param string $ChildInstanceType <p>数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw</p>
     * @param string $SetId <p>tdsql的分片id。如节点类型为set必填。</p>
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
