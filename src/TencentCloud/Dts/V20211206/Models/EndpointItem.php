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
 * 数据订阅的实例节点信息
 *
 * @method string getDatabaseRegion() 获取源库所在地域。如果 AccessType 为 ccn，请填vpc所在地域，因为此时不知道源库在哪个地域。其他接入方式，请填订阅任务所在地域，因为确保订阅任务与源库在同一地域是最优的网络方案。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseRegion(string $DatabaseRegion) 设置源库所在地域。如果 AccessType 为 ccn，请填vpc所在地域，因为此时不知道源库在哪个地域。其他接入方式，请填订阅任务所在地域，因为确保订阅任务与源库在同一地域是最优的网络方案。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码。作为入参时必填，作为出参时为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码。作为入参时必填，作为出参时为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取目标实例ID。如果 AccessType 为 cdb，此项必填。配置InstanceId时会查询并校验实例信息。mysql的查询接口经过了鉴权，请确保子用户有 cdb:DescribeDBInstances 的接口权限。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置目标实例ID。如果 AccessType 为 cdb，此项必填。配置InstanceId时会查询并校验实例信息。mysql的查询接口经过了鉴权，请确保子用户有 cdb:DescribeDBInstances 的接口权限。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvmInstanceId() 获取云主机ID。如果 AccessType 为 cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置云主机ID。如果 AccessType 为 cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqDcgId() 获取专线网关ID。如果 AccessType 为 dcg，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqDcgId(string $UniqDcgId) 设置专线网关ID。如果 AccessType 为 dcg，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCcnId() 获取云联网ID。如果 AccessType 为 ccn，此项必填。 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnId(string $CcnId) 设置云联网ID。如果 AccessType 为 ccn，此项必填。 
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpnGwId() 获取vpn网关ID。如果 AccessType 为 vpncloud，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置vpn网关ID。如果 AccessType 为 vpncloud，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VpcID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VpcID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取数据库地址，支持域名与IP。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置数据库地址，支持域名与IP。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取数据库端口。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet\cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置数据库端口。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet\cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptConn() 获取是否走加密传输，枚举值：UnEncrypted-不加密，Encrypted-加密。只有mysql支持，不填默认不加密，其他产品不填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptConn(string $EncryptConn) 设置是否走加密传输，枚举值：UnEncrypted-不加密，Encrypted-加密。只有mysql支持，不填默认不加密，其他产品不填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseNetEnv() 获取数据库网络环境。如果 AccessType 为 ccn 此项必填。枚举值：UserIDC-自建idc，TencentVPC-腾讯云，Aws-aws，AliYun-阿里云，Others-其他。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseNetEnv(string $DatabaseNetEnv) 设置数据库网络环境。如果 AccessType 为 ccn 此项必填。枚举值：UserIDC-自建idc，TencentVPC-腾讯云，Aws-aws，AliYun-阿里云，Others-其他。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCcnOwnerUin() 获取云联网网关所属的主账号uin、跨账号云联网需要。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnOwnerUin(string $CcnOwnerUin) 设置云联网网关所属的主账号uin、跨账号云联网需要。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtraAttr() 获取为业务添加的额外信息。参数名作key，参数值作value。 tdpg必填参数：PgDatabase-订阅的库名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraAttr(array $ExtraAttr) 设置为业务添加的额外信息。参数名作key，参数值作value。 tdpg必填参数：PgDatabase-订阅的库名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChildInstanceId() 获取数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildInstanceId(string $ChildInstanceId) 设置数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChildInstanceType() 获取数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildInstanceType(string $ChildInstanceType) 设置数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
注意：此字段可能返回 null，表示取不到有效值。
 */
class EndpointItem extends AbstractModel
{
    /**
     * @var string 源库所在地域。如果 AccessType 为 ccn，请填vpc所在地域，因为此时不知道源库在哪个地域。其他接入方式，请填订阅任务所在地域，因为确保订阅任务与源库在同一地域是最优的网络方案。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseRegion;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 密码。作为入参时必填，作为出参时为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string 目标实例ID。如果 AccessType 为 cdb，此项必填。配置InstanceId时会查询并校验实例信息。mysql的查询接口经过了鉴权，请确保子用户有 cdb:DescribeDBInstances 的接口权限。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 云主机ID。如果 AccessType 为 cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmInstanceId;

    /**
     * @var string 专线网关ID。如果 AccessType 为 dcg，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqDcgId;

    /**
     * @var string 云联网ID。如果 AccessType 为 ccn，此项必填。 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnId;

    /**
     * @var string vpn网关ID。如果 AccessType 为 vpncloud，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpnGwId;

    /**
     * @var string VpcID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 数据库地址，支持域名与IP。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var integer 数据库端口。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet\cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 是否走加密传输，枚举值：UnEncrypted-不加密，Encrypted-加密。只有mysql支持，不填默认不加密，其他产品不填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptConn;

    /**
     * @var string 数据库网络环境。如果 AccessType 为 ccn 此项必填。枚举值：UserIDC-自建idc，TencentVPC-腾讯云，Aws-aws，AliYun-阿里云，Others-其他。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseNetEnv;

    /**
     * @var string 云联网网关所属的主账号uin、跨账号云联网需要。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnOwnerUin;

    /**
     * @var array 为业务添加的额外信息。参数名作key，参数值作value。 tdpg必填参数：PgDatabase-订阅的库名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraAttr;

    /**
     * @var string 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildInstanceId;

    /**
     * @var string 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildInstanceType;

    /**
     * @param string $DatabaseRegion 源库所在地域。如果 AccessType 为 ccn，请填vpc所在地域，因为此时不知道源库在哪个地域。其他接入方式，请填订阅任务所在地域，因为确保订阅任务与源库在同一地域是最优的网络方案。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码。作为入参时必填，作为出参时为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 目标实例ID。如果 AccessType 为 cdb，此项必填。配置InstanceId时会查询并校验实例信息。mysql的查询接口经过了鉴权，请确保子用户有 cdb:DescribeDBInstances 的接口权限。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CvmInstanceId 云主机ID。如果 AccessType 为 cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqDcgId 专线网关ID。如果 AccessType 为 dcg，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CcnId 云联网ID。如果 AccessType 为 ccn，此项必填。 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpnGwId vpn网关ID。如果 AccessType 为 vpncloud，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VpcID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID。如果 AccessType 为 dcg\ccn\vpncloud\vpc，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName 数据库地址，支持域名与IP。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 数据库端口。如果 AccessType 为 dcg\ccn\vpncloud\vpc\extranet\intranet\cvm，此项必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptConn 是否走加密传输，枚举值：UnEncrypted-不加密，Encrypted-加密。只有mysql支持，不填默认不加密，其他产品不填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseNetEnv 数据库网络环境。如果 AccessType 为 ccn 此项必填。枚举值：UserIDC-自建idc，TencentVPC-腾讯云，Aws-aws，AliYun-阿里云，Others-其他。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CcnOwnerUin 云联网网关所属的主账号uin、跨账号云联网需要。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtraAttr 为业务添加的额外信息。参数名作key，参数值作value。 tdpg必填参数：PgDatabase-订阅的库名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChildInstanceId 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChildInstanceType 数据库为cynos、且是cynos集群内的一个子数据库实例时、该参数为该子实例的类型、例如：只读实例传ro、读写实例传rw
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
        if (array_key_exists("DatabaseRegion",$param) and $param["DatabaseRegion"] !== null) {
            $this->DatabaseRegion = $param["DatabaseRegion"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
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

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
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

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
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

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("ChildInstanceId",$param) and $param["ChildInstanceId"] !== null) {
            $this->ChildInstanceId = $param["ChildInstanceId"];
        }

        if (array_key_exists("ChildInstanceType",$param) and $param["ChildInstanceType"] !== null) {
            $this->ChildInstanceType = $param["ChildInstanceType"];
        }
    }
}
