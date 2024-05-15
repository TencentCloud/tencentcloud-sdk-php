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
 * 创建MQTT 为Source的Data Hub Task参数
 *
 * @method string getTopics() 获取需要同步的MQTT Topic列表, CSV格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopics(string $Topics) 设置需要同步的MQTT Topic列表, CSV格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCleanSession() 获取MQTT clean-session
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCleanSession(boolean $CleanSession) 设置MQTT clean-session
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResource() 获取MQTT instance-id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置MQTT instance-id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取MQTT实例VIP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置MQTT实例VIP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取MQTT VIP 端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置MQTT VIP 端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取MQTT实例用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置MQTT实例用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取MQTT实例内账户密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置MQTT实例内账户密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQos() 获取QoS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQos(integer $Qos) 设置QoS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxTasks() 获取tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTasks(integer $MaxTasks) 设置tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceVip() 获取MQTT 实例的Service VIP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceVip(string $ServiceVip) 设置MQTT 实例的Service VIP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取MQTT实例的VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置MQTT实例的VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSelfBuilt() 获取是否为自建集群, MQTT只支持非自建集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群, MQTT只支持非自建集群
注意：此字段可能返回 null，表示取不到有效值。
 */
class MqttParam extends AbstractModel
{
    /**
     * @var string 需要同步的MQTT Topic列表, CSV格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topics;

    /**
     * @var boolean MQTT clean-session
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CleanSession;

    /**
     * @var string MQTT instance-id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string MQTT实例VIP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer MQTT VIP 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string MQTT实例用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string MQTT实例内账户密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var integer QoS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qos;

    /**
     * @var integer tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTasks;

    /**
     * @var string MQTT 实例的Service VIP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceVip;

    /**
     * @var string MQTT实例的VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否为自建集群, MQTT只支持非自建集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfBuilt;

    /**
     * @param string $Topics 需要同步的MQTT Topic列表, CSV格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CleanSession MQTT clean-session
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resource MQTT instance-id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip MQTT实例VIP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port MQTT VIP 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName MQTT实例用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password MQTT实例内账户密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Qos QoS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxTasks tasks.max 订阅Topic的并发Task个数, 默认为1; 当设置大于1时, 使用Shared Subscription
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceVip MQTT 实例的Service VIP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId MQTT实例的VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SelfBuilt 是否为自建集群, MQTT只支持非自建集群
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
    }
}
