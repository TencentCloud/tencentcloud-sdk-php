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
 * 数据库信息
 *
 * @method string getRole() 获取<p>表示节点角色，针对分布式数据库，如mongodb中的mongos节点。tdsqlmysql的可选项：proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填。</p>
 * @method void setRole(string $Role) 设置<p>表示节点角色，针对分布式数据库，如mongodb中的mongos节点。tdsqlmysql的可选项：proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填。</p>
 * @method string getDbKernel() 获取<p>内核版本，针对mariadb的不同内核版本等</p>
 * @method void setDbKernel(string $DbKernel) 设置<p>内核版本，针对mariadb的不同内核版本等</p>
 * @method string getHost() 获取<p>实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
 * @method void setHost(string $Host) 设置<p>实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
 * @method integer getPort() 获取<p>实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
 * @method void setPort(integer $Port) 设置<p>实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
 * @method string getUser() 获取<p>实例的用户名</p>
 * @method void setUser(string $User) 设置<p>实例的用户名</p>
 * @method string getPassword() 获取<p>实例的密码</p>
 * @method void setPassword(string $Password) 设置<p>实例的密码</p>
 * @method string getCvmInstanceId() 获取<p>CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填</p>
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置<p>CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填</p>
 * @method string getUniqVpnGwId() 获取<p>VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填</p>
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置<p>VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填</p>
 * @method string getUniqDcgId() 获取<p>专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填</p>
 * @method void setUniqDcgId(string $UniqDcgId) 设置<p>专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填</p>
 * @method string getInstanceId() 获取<p>数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填</p>
 * @method string getCcnGwId() 获取<p>云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method void setCcnGwId(string $CcnGwId) 设置<p>云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method string getVpcId() 获取<p>私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
 * @method string getSubnetId() 获取<p>私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
 * @method string getEngineVersion() 获取<p>数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6</p>
 * @method string getAccount() 获取<p>实例所属账号</p>
 * @method void setAccount(string $Account) 设置<p>实例所属账号</p>
 * @method string getAccountRole() 获取<p>跨账号迁移时的角色,只允许[a-zA-Z0-9-_]+</p>
 * @method void setAccountRole(string $AccountRole) 设置<p>跨账号迁移时的角色,只允许[a-zA-Z0-9-_]+</p>
 * @method string getAccountMode() 获取<p>资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)</p>
 * @method void setAccountMode(string $AccountMode) 设置<p>资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)</p>
 * @method string getTmpSecretId() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method void setTmpSecretId(string $TmpSecretId) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method string getTmpSecretKey() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method string getTmpToken() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method void setTmpToken(string $TmpToken) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method string getEncryptConn() 获取<p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
 * @method void setEncryptConn(string $EncryptConn) 设置<p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
 * @method string getSetId() 获取<p>tdsql的分片id。如节点类型为set必填。</p>
 * @method void setSetId(string $SetId) 设置<p>tdsql的分片id。如节点类型为set必填。</p>
 */
class DBInfo extends AbstractModel
{
    /**
     * @var string <p>表示节点角色，针对分布式数据库，如mongodb中的mongos节点。tdsqlmysql的可选项：proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填。</p>
     */
    public $Role;

    /**
     * @var string <p>内核版本，针对mariadb的不同内核版本等</p>
     */
    public $DbKernel;

    /**
     * @var string <p>实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
     */
    public $Host;

    /**
     * @var integer <p>实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
     */
    public $Port;

    /**
     * @var string <p>实例的用户名</p>
     */
    public $User;

    /**
     * @var string <p>实例的密码</p>
     */
    public $Password;

    /**
     * @var string <p>CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填</p>
     */
    public $CvmInstanceId;

    /**
     * @var string <p>VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填</p>
     */
    public $UniqVpnGwId;

    /**
     * @var string <p>专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填</p>
     */
    public $UniqDcgId;

    /**
     * @var string <p>数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填</p>
     */
    public $InstanceId;

    /**
     * @var string <p>云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。</p>
     */
    public $CcnGwId;

    /**
     * @var string <p>私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
     */
    public $SubnetId;

    /**
     * @var string <p>数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>实例所属账号</p>
     */
    public $Account;

    /**
     * @var string <p>跨账号迁移时的角色,只允许[a-zA-Z0-9-_]+</p>
     */
    public $AccountRole;

    /**
     * @var string <p>资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)</p>
     */
    public $AccountMode;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     */
    public $TmpSecretId;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     */
    public $TmpSecretKey;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     */
    public $TmpToken;

    /**
     * @var string <p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
     */
    public $EncryptConn;

    /**
     * @var string <p>tdsql的分片id。如节点类型为set必填。</p>
     */
    public $SetId;

    /**
     * @param string $Role <p>表示节点角色，针对分布式数据库，如mongodb中的mongos节点。tdsqlmysql的可选项：proxy表示节点类型为主机，set表示节点类型为节点。proxy类型必须填在数组第一项。tdsqlmysql类型的源/目标配置必填。</p>
     * @param string $DbKernel <p>内核版本，针对mariadb的不同内核版本等</p>
     * @param string $Host <p>实例的IP地址，对于公网、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
     * @param integer $Port <p>实例的端口，对于公网、云主机自建、专线、VPN、云联网、自研上云、VPC等接入方式此项必填</p>
     * @param string $User <p>实例的用户名</p>
     * @param string $Password <p>实例的密码</p>
     * @param string $CvmInstanceId <p>CVM实例短ID，格式如：ins-olgl39y8；与云服务器控制台页面显示的实例ID相同；如果接入类型为云主机自建的方式，此项必填</p>
     * @param string $UniqVpnGwId <p>VPN网关ID，格式如：vpngw-9ghexg7q；如果接入类型为vpncloud的方式，此项必填</p>
     * @param string $UniqDcgId <p>专线网关ID，格式如：dcg-0rxtqqxb；如果接入类型为专线接入的方式，此项必填</p>
     * @param string $InstanceId <p>数据库实例ID，格式如：cdb-powiqx8q；如果接入类型为云数据库的方式，此项必填</p>
     * @param string $CcnGwId <p>云联网ID，如：ccn-afp6kltc 注意：此字段可能返回 null，表示取不到有效值。</p>
     * @param string $VpcId <p>私有网络ID，格式如：vpc-92jblxto；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
     * @param string $SubnetId <p>私有网络下的子网ID，格式如：subnet-3paxmkdz；如果接入类型为vpc、vpncloud、ccn、dcg的方式，此项必填</p>
     * @param string $EngineVersion <p>数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6</p>
     * @param string $Account <p>实例所属账号</p>
     * @param string $AccountRole <p>跨账号迁移时的角色,只允许[a-zA-Z0-9-_]+</p>
     * @param string $AccountMode <p>资源所属账号 为空或self(表示本账号内资源)、other(表示其他账户资源)</p>
     * @param string $TmpSecretId <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     * @param string $TmpSecretKey <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     * @param string $TmpToken <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     * @param string $EncryptConn <p>是否走加密传输、UnEncrypted表示不走加密传输，Encrypted表示走加密传输，默认UnEncrypted</p>
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

        if (array_key_exists("EncryptConn",$param) and $param["EncryptConn"] !== null) {
            $this->EncryptConn = $param["EncryptConn"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }
    }
}
