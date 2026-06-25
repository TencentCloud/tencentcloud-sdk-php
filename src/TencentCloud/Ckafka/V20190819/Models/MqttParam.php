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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建MQTT 为Source的Data Hub Task参数
 *
 * @method string getTopics() 获取<p>需要同步的MQTT Topic列表, CSV格式</p>
 * @method void setTopics(string $Topics) 设置<p>需要同步的MQTT Topic列表, CSV格式</p>
 * @method boolean getCleanSession() 获取<p>用于控制会话的持久性。cleanSession 为true时，连接时会创建一个全新的会话。 cleanSession = false时，连接时会恢复之前的会话。</p>
 * @method void setCleanSession(boolean $CleanSession) 设置<p>用于控制会话的持久性。cleanSession 为true时，连接时会创建一个全新的会话。 cleanSession = false时，连接时会恢复之前的会话。</p>
 * @method string getResource() 获取<p>MQTT instance-id</p>
 * @method void setResource(string $Resource) 设置<p>MQTT instance-id</p>
 * @method string getIp() 获取<p>MQTT实例VIP</p>
 * @method void setIp(string $Ip) 设置<p>MQTT实例VIP</p>
 * @method integer getPort() 获取<p>MQTT VIP 端口</p>
 * @method void setPort(integer $Port) 设置<p>MQTT VIP 端口</p>
 * @method string getUserName() 获取<p>MQTT实例用户名</p>
 * @method void setUserName(string $UserName) 设置<p>MQTT实例用户名</p>
 * @method string getPassword() 获取<p>MQTT实例内账户密码</p>
 * @method void setPassword(string $Password) 设置<p>MQTT实例内账户密码</p>
 * @method integer getQos() 获取<p>QoS</p>
 * @method void setQos(integer $Qos) 设置<p>QoS</p>
 * @method integer getMaxTasks() 获取<p>tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription</p>
 * @method void setMaxTasks(integer $MaxTasks) 设置<p>tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription</p>
 * @method string getServiceVip() 获取<p>MQTT 实例的Service VIP</p>
 * @method void setServiceVip(string $ServiceVip) 设置<p>MQTT 实例的Service VIP</p>
 * @method string getUniqVpcId() 获取<p>MQTT实例的VPC ID</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>MQTT实例的VPC ID</p>
 * @method boolean getSelfBuilt() 获取<p>是否为自建集群, MQTT只支持非自建集群</p>
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置<p>是否为自建集群, MQTT只支持非自建集群</p>
 * @method string getSqlFilter() 获取<p>MQTT消息过滤sql语句</p>
 * @method void setSqlFilter(string $SqlFilter) 设置<p>MQTT消息过滤sql语句</p>
 */
class MqttParam extends AbstractModel
{
    /**
     * @var string <p>需要同步的MQTT Topic列表, CSV格式</p>
     */
    public $Topics;

    /**
     * @var boolean <p>用于控制会话的持久性。cleanSession 为true时，连接时会创建一个全新的会话。 cleanSession = false时，连接时会恢复之前的会话。</p>
     */
    public $CleanSession;

    /**
     * @var string <p>MQTT instance-id</p>
     */
    public $Resource;

    /**
     * @var string <p>MQTT实例VIP</p>
     */
    public $Ip;

    /**
     * @var integer <p>MQTT VIP 端口</p>
     */
    public $Port;

    /**
     * @var string <p>MQTT实例用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>MQTT实例内账户密码</p>
     */
    public $Password;

    /**
     * @var integer <p>QoS</p>
     */
    public $Qos;

    /**
     * @var integer <p>tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription</p>
     */
    public $MaxTasks;

    /**
     * @var string <p>MQTT 实例的Service VIP</p>
     */
    public $ServiceVip;

    /**
     * @var string <p>MQTT实例的VPC ID</p>
     */
    public $UniqVpcId;

    /**
     * @var boolean <p>是否为自建集群, MQTT只支持非自建集群</p>
     */
    public $SelfBuilt;

    /**
     * @var string <p>MQTT消息过滤sql语句</p>
     */
    public $SqlFilter;

    /**
     * @param string $Topics <p>需要同步的MQTT Topic列表, CSV格式</p>
     * @param boolean $CleanSession <p>用于控制会话的持久性。cleanSession 为true时，连接时会创建一个全新的会话。 cleanSession = false时，连接时会恢复之前的会话。</p>
     * @param string $Resource <p>MQTT instance-id</p>
     * @param string $Ip <p>MQTT实例VIP</p>
     * @param integer $Port <p>MQTT VIP 端口</p>
     * @param string $UserName <p>MQTT实例用户名</p>
     * @param string $Password <p>MQTT实例内账户密码</p>
     * @param integer $Qos <p>QoS</p>
     * @param integer $MaxTasks <p>tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription</p>
     * @param string $ServiceVip <p>MQTT 实例的Service VIP</p>
     * @param string $UniqVpcId <p>MQTT实例的VPC ID</p>
     * @param boolean $SelfBuilt <p>是否为自建集群, MQTT只支持非自建集群</p>
     * @param string $SqlFilter <p>MQTT消息过滤sql语句</p>
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
        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("CleanSession",$param) and $param["CleanSession"] !== null) {
            $this->CleanSession = $param["CleanSession"];
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

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("MaxTasks",$param) and $param["MaxTasks"] !== null) {
            $this->MaxTasks = $param["MaxTasks"];
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

        if (array_key_exists("SqlFilter",$param) and $param["SqlFilter"] !== null) {
            $this->SqlFilter = $param["SqlFilter"];
        }
    }
}
