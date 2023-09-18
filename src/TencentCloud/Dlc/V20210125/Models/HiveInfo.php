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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * hive类型数据源的信息
 *
 * @method string getMetaStoreUrl() 获取hive metastore的地址
 * @method void setMetaStoreUrl(string $MetaStoreUrl) 设置hive metastore的地址
 * @method string getType() 获取hive数据源类型，代表数据储存的位置，COS或者HDFS
 * @method void setType(string $Type) 设置hive数据源类型，代表数据储存的位置，COS或者HDFS
 * @method DatasourceConnectionLocation getLocation() 获取数据源所在的私有网络信息
 * @method void setLocation(DatasourceConnectionLocation $Location) 设置数据源所在的私有网络信息
 * @method string getUser() 获取如果类型为HDFS，需要传一个用户名
 * @method void setUser(string $User) 设置如果类型为HDFS，需要传一个用户名
 * @method boolean getHighAvailability() 获取如果类型为HDFS，需要选择是否高可用
 * @method void setHighAvailability(boolean $HighAvailability) 设置如果类型为HDFS，需要选择是否高可用
 * @method string getBucketUrl() 获取如果类型为COS，需要填写COS桶连接
 * @method void setBucketUrl(string $BucketUrl) 设置如果类型为COS，需要填写COS桶连接
 * @method string getHdfsProperties() 获取json字符串。如果类型为HDFS，需要填写该字段
 * @method void setHdfsProperties(string $HdfsProperties) 设置json字符串。如果类型为HDFS，需要填写该字段
 * @method MysqlInfo getMysql() 获取Hive的元数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysql(MysqlInfo $Mysql) 设置Hive的元数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取emr集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置emr集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取emr集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置emr集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiveVersion() 获取EMR集群中hive组件的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHiveVersion(string $HiveVersion) 设置EMR集群中hive组件的版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method KerberosInfo getKerberosInfo() 获取Kerberos详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKerberosInfo(KerberosInfo $KerberosInfo) 设置Kerberos详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getKerberosEnable() 获取是否开启Kerberos
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKerberosEnable(boolean $KerberosEnable) 设置是否开启Kerberos
注意：此字段可能返回 null，表示取不到有效值。
 */
class HiveInfo extends AbstractModel
{
    /**
     * @var string hive metastore的地址
     */
    public $MetaStoreUrl;

    /**
     * @var string hive数据源类型，代表数据储存的位置，COS或者HDFS
     */
    public $Type;

    /**
     * @var DatasourceConnectionLocation 数据源所在的私有网络信息
     */
    public $Location;

    /**
     * @var string 如果类型为HDFS，需要传一个用户名
     */
    public $User;

    /**
     * @var boolean 如果类型为HDFS，需要选择是否高可用
     */
    public $HighAvailability;

    /**
     * @var string 如果类型为COS，需要填写COS桶连接
     */
    public $BucketUrl;

    /**
     * @var string json字符串。如果类型为HDFS，需要填写该字段
     */
    public $HdfsProperties;

    /**
     * @var MysqlInfo Hive的元数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mysql;

    /**
     * @var string emr集群Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string emr集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string EMR集群中hive组件的版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HiveVersion;

    /**
     * @var KerberosInfo Kerberos详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KerberosInfo;

    /**
     * @var boolean 是否开启Kerberos
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KerberosEnable;

    /**
     * @param string $MetaStoreUrl hive metastore的地址
     * @param string $Type hive数据源类型，代表数据储存的位置，COS或者HDFS
     * @param DatasourceConnectionLocation $Location 数据源所在的私有网络信息
     * @param string $User 如果类型为HDFS，需要传一个用户名
     * @param boolean $HighAvailability 如果类型为HDFS，需要选择是否高可用
     * @param string $BucketUrl 如果类型为COS，需要填写COS桶连接
     * @param string $HdfsProperties json字符串。如果类型为HDFS，需要填写该字段
     * @param MysqlInfo $Mysql Hive的元数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId emr集群Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName emr集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiveVersion EMR集群中hive组件的版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param KerberosInfo $KerberosInfo Kerberos详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $KerberosEnable 是否开启Kerberos
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
        if (array_key_exists("MetaStoreUrl",$param) and $param["MetaStoreUrl"] !== null) {
            $this->MetaStoreUrl = $param["MetaStoreUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new DatasourceConnectionLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("HighAvailability",$param) and $param["HighAvailability"] !== null) {
            $this->HighAvailability = $param["HighAvailability"];
        }

        if (array_key_exists("BucketUrl",$param) and $param["BucketUrl"] !== null) {
            $this->BucketUrl = $param["BucketUrl"];
        }

        if (array_key_exists("HdfsProperties",$param) and $param["HdfsProperties"] !== null) {
            $this->HdfsProperties = $param["HdfsProperties"];
        }

        if (array_key_exists("Mysql",$param) and $param["Mysql"] !== null) {
            $this->Mysql = new MysqlInfo();
            $this->Mysql->deserialize($param["Mysql"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("HiveVersion",$param) and $param["HiveVersion"] !== null) {
            $this->HiveVersion = $param["HiveVersion"];
        }

        if (array_key_exists("KerberosInfo",$param) and $param["KerberosInfo"] !== null) {
            $this->KerberosInfo = new KerberosInfo();
            $this->KerberosInfo->deserialize($param["KerberosInfo"]);
        }

        if (array_key_exists("KerberosEnable",$param) and $param["KerberosEnable"] !== null) {
            $this->KerberosEnable = $param["KerberosEnable"];
        }
    }
}
