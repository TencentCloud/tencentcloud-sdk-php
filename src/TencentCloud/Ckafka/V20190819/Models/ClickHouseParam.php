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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClickHouse类型入参
 *
 * @method string getCluster() 获取ClickHouse的集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCluster(string $Cluster) 设置ClickHouse的集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabase() 获取ClickHouse的数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(string $Database) 设置ClickHouse的数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTable() 获取ClickHouse的数据表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(string $Table) 设置ClickHouse的数据表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchema() 获取ClickHouse的schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchema(array $Schema) 设置ClickHouse的schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResource() 获取实例资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置实例资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取ClickHouse的连接ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置ClickHouse的连接ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取ClickHouse的连接port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置ClickHouse的连接port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取ClickHouse的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置ClickHouse的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取ClickHouse的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置ClickHouse的密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceVip() 获取实例vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceVip(string $ServiceVip) 设置实例vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSelfBuilt() 获取是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDropInvalidMessage() 获取ClickHouse是否抛弃解析失败的消息，默认为true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropInvalidMessage(boolean $DropInvalidMessage) 设置ClickHouse是否抛弃解析失败的消息，默认为true
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
注意：此字段可能返回 null，表示取不到有效值。
 * @method DropCls getDropCls() 获取当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropCls(DropCls $DropCls) 设置当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchSize() 获取每批次投递到 ClickHouse 表消息数量，默认为 1000 条。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchSize(integer $BatchSize) 设置每批次投递到 ClickHouse 表消息数量，默认为 1000 条。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsumerFetchMinBytes() 获取每次从 topic 中拉取消息大小，默认为 1MB，即至少要从 topic 中批量拉取 1MB 消息，才进行数据投递到 ClickHouse 操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerFetchMinBytes(integer $ConsumerFetchMinBytes) 设置每次从 topic 中拉取消息大小，默认为 1MB，即至少要从 topic 中批量拉取 1MB 消息，才进行数据投递到 ClickHouse 操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsumerFetchMaxWaitMs() 获取每次从 topic 拉取消息最大等待时间，当超过当前最大等待时间时，即使没有拉取到 ConsumerFetchMinBytes 大小，也将进行 ClickHouse 投递操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerFetchMaxWaitMs(integer $ConsumerFetchMaxWaitMs) 设置每次从 topic 拉取消息最大等待时间，当超过当前最大等待时间时，即使没有拉取到 ConsumerFetchMinBytes 大小，也将进行 ClickHouse 投递操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClickHouseParam extends AbstractModel
{
    /**
     * @var string ClickHouse的集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cluster;

    /**
     * @var string ClickHouse的数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var string ClickHouse的数据表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var array ClickHouse的schema
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Schema;

    /**
     * @var string 实例资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string ClickHouse的连接ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer ClickHouse的连接port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string ClickHouse的用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string ClickHouse的密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string 实例vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceVip;

    /**
     * @var string 实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfBuilt;

    /**
     * @var boolean ClickHouse是否抛弃解析失败的消息，默认为true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropInvalidMessage;

    /**
     * @var string ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropCls;

    /**
     * @var integer 每批次投递到 ClickHouse 表消息数量，默认为 1000 条。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchSize;

    /**
     * @var integer 每次从 topic 中拉取消息大小，默认为 1MB，即至少要从 topic 中批量拉取 1MB 消息，才进行数据投递到 ClickHouse 操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerFetchMinBytes;

    /**
     * @var integer 每次从 topic 拉取消息最大等待时间，当超过当前最大等待时间时，即使没有拉取到 ConsumerFetchMinBytes 大小，也将进行 ClickHouse 投递操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerFetchMaxWaitMs;

    /**
     * @param string $Cluster ClickHouse的集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Database ClickHouse的数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Table ClickHouse的数据表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Schema ClickHouse的schema
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resource 实例资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip ClickHouse的连接ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port ClickHouse的连接port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName ClickHouse的用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password ClickHouse的密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceVip 实例vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 实例的vpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SelfBuilt 是否为自建集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DropInvalidMessage ClickHouse是否抛弃解析失败的消息，默认为true
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param DropCls $DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchSize 每批次投递到 ClickHouse 表消息数量，默认为 1000 条。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsumerFetchMinBytes 每次从 topic 中拉取消息大小，默认为 1MB，即至少要从 topic 中批量拉取 1MB 消息，才进行数据投递到 ClickHouse 操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsumerFetchMaxWaitMs 每次从 topic 拉取消息最大等待时间，当超过当前最大等待时间时，即使没有拉取到 ConsumerFetchMinBytes 大小，也将进行 ClickHouse 投递操作。
提高该参数值，有利于减少往  ClickHouse 投递的次数，但在错误消息过多及网络不稳定等极端情况下时，可能导致频繁重试影响效率。
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
        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = [];
            foreach ($param["Schema"] as $key => $value){
                $obj = new ClickHouseSchema();
                $obj->deserialize($value);
                array_push($this->Schema, $obj);
            }
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("DropInvalidMessage",$param) and $param["DropInvalidMessage"] !== null) {
            $this->DropInvalidMessage = $param["DropInvalidMessage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DropCls",$param) and $param["DropCls"] !== null) {
            $this->DropCls = new DropCls();
            $this->DropCls->deserialize($param["DropCls"]);
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("ConsumerFetchMinBytes",$param) and $param["ConsumerFetchMinBytes"] !== null) {
            $this->ConsumerFetchMinBytes = $param["ConsumerFetchMinBytes"];
        }

        if (array_key_exists("ConsumerFetchMaxWaitMs",$param) and $param["ConsumerFetchMaxWaitMs"] !== null) {
            $this->ConsumerFetchMaxWaitMs = $param["ConsumerFetchMaxWaitMs"];
        }
    }
}
