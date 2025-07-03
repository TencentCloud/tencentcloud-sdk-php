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
 * 实例信息
 *
 * @method string getRegion() 获取实例所在地域
 * @method void setRegion(string $Region) 设置实例所在地域
 * @method string getAccessType() 获取实例网络接入类型，如：extranet(外网)、ipv6(公网ipv6)、cvm(云主机自建)、dcg(专线接入)、vpncloud(vpn接入的实例)、cdb(云数据库)、ccn(云联网)、intranet(自研上云)、vpc(私有网络)等，注意具体可选值依赖当前链路
 * @method void setAccessType(string $AccessType) 设置实例网络接入类型，如：extranet(外网)、ipv6(公网ipv6)、cvm(云主机自建)、dcg(专线接入)、vpncloud(vpn接入的实例)、cdb(云数据库)、ccn(云联网)、intranet(自研上云)、vpc(私有网络)等，注意具体可选值依赖当前链路
 * @method string getDatabaseType() 获取实例数据库类型，如：mysql,redis,mongodb,postgresql,mariadb,percona 等
 * @method void setDatabaseType(string $DatabaseType) 设置实例数据库类型，如：mysql,redis,mongodb,postgresql,mariadb,percona 等
 * @method string getNodeType() 获取节点类型，simple表示普通节点、cluster表示集群节点；
对于mongo业务，取值为replicaset(mongodb副本集)、standalone(mongodb单节点)、cluster(mongodb集群)；
对于redis实例，simple(单节点)、cluster-cache(直连集群)、cluster-proxy(代理集群)；
 * @method void setNodeType(string $NodeType) 设置节点类型，simple表示普通节点、cluster表示集群节点；
对于mongo业务，取值为replicaset(mongodb副本集)、standalone(mongodb单节点)、cluster(mongodb集群)；
对于redis实例，simple(单节点)、cluster-cache(直连集群)、cluster-proxy(代理集群)；
 * @method array getInfo() 获取实例具体的连接信息，如ip、port、接入方式等
 * @method void setInfo(array $Info) 设置实例具体的连接信息，如ip、port、接入方式等
 * @method string getSupplier() 获取实例服务提供商，如:"aliyun","others"
 * @method void setSupplier(string $Supplier) 设置实例服务提供商，如:"aliyun","others"
 * @method array getExtraAttr() 获取此参数为数组类型，可以传多个键值对结构对象。
MongoDB可定义如下的参数：
'AuthDatabase':'admin',
'AuthFlag': "1",
'AuthMechanism':"SCRAM-SHA-1",
"fetchMethod":"oplog",
"connectMode":"srv",
"EncryptedConnProtocol":"mongo_atlas_ssl"；
其中fetchMethod表示迁移方式，还可支持change_stream；EncryptedConnProtocol值为mongo_atlas_ssl表示使用atlas ssl连接方式。
 * @method void setExtraAttr(array $ExtraAttr) 设置此参数为数组类型，可以传多个键值对结构对象。
MongoDB可定义如下的参数：
'AuthDatabase':'admin',
'AuthFlag': "1",
'AuthMechanism':"SCRAM-SHA-1",
"fetchMethod":"oplog",
"connectMode":"srv",
"EncryptedConnProtocol":"mongo_atlas_ssl"；
其中fetchMethod表示迁移方式，还可支持change_stream；EncryptedConnProtocol值为mongo_atlas_ssl表示使用atlas ssl连接方式。
 * @method string getDatabaseNetEnv() 获取数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
 * @method void setDatabaseNetEnv(string $DatabaseNetEnv) 设置数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
 * @method string getConnectType() 获取tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，Info中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，Info中需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。
 * @method void setConnectType(string $ConnectType) 设置tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，Info中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，Info中需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。
 * @method string getCcnOwnerUin() 获取云联网网关所属账号，如果云联网网关为其他账号资源需要填写
 * @method void setCcnOwnerUin(string $CcnOwnerUin) 设置云联网网关所属账号，如果云联网网关为其他账号资源需要填写
 */
class DBEndpointInfo extends AbstractModel
{
    /**
     * @var string 实例所在地域
     */
    public $Region;

    /**
     * @var string 实例网络接入类型，如：extranet(外网)、ipv6(公网ipv6)、cvm(云主机自建)、dcg(专线接入)、vpncloud(vpn接入的实例)、cdb(云数据库)、ccn(云联网)、intranet(自研上云)、vpc(私有网络)等，注意具体可选值依赖当前链路
     */
    public $AccessType;

    /**
     * @var string 实例数据库类型，如：mysql,redis,mongodb,postgresql,mariadb,percona 等
     */
    public $DatabaseType;

    /**
     * @var string 节点类型，simple表示普通节点、cluster表示集群节点；
对于mongo业务，取值为replicaset(mongodb副本集)、standalone(mongodb单节点)、cluster(mongodb集群)；
对于redis实例，simple(单节点)、cluster-cache(直连集群)、cluster-proxy(代理集群)；
     */
    public $NodeType;

    /**
     * @var array 实例具体的连接信息，如ip、port、接入方式等
     */
    public $Info;

    /**
     * @var string 实例服务提供商，如:"aliyun","others"
     */
    public $Supplier;

    /**
     * @var array 此参数为数组类型，可以传多个键值对结构对象。
MongoDB可定义如下的参数：
'AuthDatabase':'admin',
'AuthFlag': "1",
'AuthMechanism':"SCRAM-SHA-1",
"fetchMethod":"oplog",
"connectMode":"srv",
"EncryptedConnProtocol":"mongo_atlas_ssl"；
其中fetchMethod表示迁移方式，还可支持change_stream；EncryptedConnProtocol值为mongo_atlas_ssl表示使用atlas ssl连接方式。
     */
    public $ExtraAttr;

    /**
     * @var string 数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
     */
    public $DatabaseNetEnv;

    /**
     * @var string tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，Info中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，Info中需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。
     */
    public $ConnectType;

    /**
     * @var string 云联网网关所属账号，如果云联网网关为其他账号资源需要填写
     */
    public $CcnOwnerUin;

    /**
     * @param string $Region 实例所在地域
     * @param string $AccessType 实例网络接入类型，如：extranet(外网)、ipv6(公网ipv6)、cvm(云主机自建)、dcg(专线接入)、vpncloud(vpn接入的实例)、cdb(云数据库)、ccn(云联网)、intranet(自研上云)、vpc(私有网络)等，注意具体可选值依赖当前链路
     * @param string $DatabaseType 实例数据库类型，如：mysql,redis,mongodb,postgresql,mariadb,percona 等
     * @param string $NodeType 节点类型，simple表示普通节点、cluster表示集群节点；
对于mongo业务，取值为replicaset(mongodb副本集)、standalone(mongodb单节点)、cluster(mongodb集群)；
对于redis实例，simple(单节点)、cluster-cache(直连集群)、cluster-proxy(代理集群)；
     * @param array $Info 实例具体的连接信息，如ip、port、接入方式等
     * @param string $Supplier 实例服务提供商，如:"aliyun","others"
     * @param array $ExtraAttr 此参数为数组类型，可以传多个键值对结构对象。
MongoDB可定义如下的参数：
'AuthDatabase':'admin',
'AuthFlag': "1",
'AuthMechanism':"SCRAM-SHA-1",
"fetchMethod":"oplog",
"connectMode":"srv",
"EncryptedConnProtocol":"mongo_atlas_ssl"；
其中fetchMethod表示迁移方式，还可支持change_stream；EncryptedConnProtocol值为mongo_atlas_ssl表示使用atlas ssl连接方式。
     * @param string $DatabaseNetEnv 数据库所属网络环境，AccessType为云联网(ccn)时必填， UserIDC表示用户IDC、TencentVPC表示腾讯云VPC；
     * @param string $ConnectType tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，Info中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，Info中需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。
     * @param string $CcnOwnerUin 云联网网关所属账号，如果云联网网关为其他账号资源需要填写
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

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new DBInfo();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("DatabaseNetEnv",$param) and $param["DatabaseNetEnv"] !== null) {
            $this->DatabaseNetEnv = $param["DatabaseNetEnv"];
        }

        if (array_key_exists("ConnectType",$param) and $param["ConnectType"] !== null) {
            $this->ConnectType = $param["ConnectType"];
        }

        if (array_key_exists("CcnOwnerUin",$param) and $param["CcnOwnerUin"] !== null) {
            $this->CcnOwnerUin = $param["CcnOwnerUin"];
        }
    }
}
