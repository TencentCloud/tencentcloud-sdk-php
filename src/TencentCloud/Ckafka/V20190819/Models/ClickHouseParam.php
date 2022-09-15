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
 * @method void setCluster(string $Cluster) 设置ClickHouse的集群
 * @method string getDatabase() 获取ClickHouse的数据库名
 * @method void setDatabase(string $Database) 设置ClickHouse的数据库名
 * @method string getTable() 获取ClickHouse的数据表名
 * @method void setTable(string $Table) 设置ClickHouse的数据表名
 * @method array getSchema() 获取ClickHouse的schema
 * @method void setSchema(array $Schema) 设置ClickHouse的schema
 * @method string getResource() 获取实例资源
 * @method void setResource(string $Resource) 设置实例资源
 * @method string getIp() 获取ClickHouse的连接ip
 * @method void setIp(string $Ip) 设置ClickHouse的连接ip
 * @method integer getPort() 获取ClickHouse的连接port
 * @method void setPort(integer $Port) 设置ClickHouse的连接port
 * @method string getUserName() 获取ClickHouse的用户名
 * @method void setUserName(string $UserName) 设置ClickHouse的用户名
 * @method string getPassword() 获取ClickHouse的密码
 * @method void setPassword(string $Password) 设置ClickHouse的密码
 * @method string getServiceVip() 获取实例vip
 * @method void setServiceVip(string $ServiceVip) 设置实例vip
 * @method string getUniqVpcId() 获取实例的vpcId
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例的vpcId
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 * @method boolean getDropInvalidMessage() 获取ClickHouse是否抛弃解析失败的消息，默认为true
 * @method void setDropInvalidMessage(boolean $DropInvalidMessage) 设置ClickHouse是否抛弃解析失败的消息，默认为true
 * @method string getType() 获取ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
 * @method void setType(string $Type) 设置ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
 * @method DropCls getDropCls() 获取当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
 * @method void setDropCls(DropCls $DropCls) 设置当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
 */
class ClickHouseParam extends AbstractModel
{
    /**
     * @var string ClickHouse的集群
     */
    public $Cluster;

    /**
     * @var string ClickHouse的数据库名
     */
    public $Database;

    /**
     * @var string ClickHouse的数据表名
     */
    public $Table;

    /**
     * @var array ClickHouse的schema
     */
    public $Schema;

    /**
     * @var string 实例资源
     */
    public $Resource;

    /**
     * @var string ClickHouse的连接ip
     */
    public $Ip;

    /**
     * @var integer ClickHouse的连接port
     */
    public $Port;

    /**
     * @var string ClickHouse的用户名
     */
    public $UserName;

    /**
     * @var string ClickHouse的密码
     */
    public $Password;

    /**
     * @var string 实例vip
     */
    public $ServiceVip;

    /**
     * @var string 实例的vpcId
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var boolean ClickHouse是否抛弃解析失败的消息，默认为true
     */
    public $DropInvalidMessage;

    /**
     * @var string ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
     */
    public $Type;

    /**
     * @var DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
     */
    public $DropCls;

    /**
     * @param string $Cluster ClickHouse的集群
     * @param string $Database ClickHouse的数据库名
     * @param string $Table ClickHouse的数据表名
     * @param array $Schema ClickHouse的schema
     * @param string $Resource 实例资源
     * @param string $Ip ClickHouse的连接ip
     * @param integer $Port ClickHouse的连接port
     * @param string $UserName ClickHouse的用户名
     * @param string $Password ClickHouse的密码
     * @param string $ServiceVip 实例vip
     * @param string $UniqVpcId 实例的vpcId
     * @param boolean $SelfBuilt 是否为自建集群
     * @param boolean $DropInvalidMessage ClickHouse是否抛弃解析失败的消息，默认为true
     * @param string $Type ClickHouse 类型，emr-clickhouse : "emr";cdw-clickhouse : "cdwch";自建 : ""
     * @param DropCls $DropCls 当设置成员参数DropInvalidMessageToCls设置为true时,DropInvalidMessage参数失效
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
    }
}
