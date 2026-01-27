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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采集器输出的实例信息
 *
 * @method string getType() 获取采集器输出的实例类型（支持elasticsearch、logstash）
 * @method void setType(string $Type) 设置采集器输出的实例类型（支持elasticsearch、logstash）
 * @method string getInstanceId() 获取采集器输出的实例ID
 * @method void setInstanceId(string $InstanceId) 设置采集器输出的实例ID
 * @method string getESUserName() 获取采集器输出到的ES实例的用户名
 * @method void setESUserName(string $ESUserName) 设置采集器输出到的ES实例的用户名
 * @method string getESUserPasswd() 获取采集器输出到的ES实例的密码
 * @method void setESUserPasswd(string $ESUserPasswd) 设置采集器输出到的ES实例的密码
 * @method integer getEnableMonitoring() 获取采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）
 * @method void setEnableMonitoring(integer $EnableMonitoring) 设置采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）
 * @method integer getEnableDashboard() 获取采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）
 * @method void setEnableDashboard(integer $EnableDashboard) 设置采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）
 * @method string getKafkaEndpoint() 获取Ckafka实例的vip
 * @method void setKafkaEndpoint(string $KafkaEndpoint) 设置Ckafka实例的vip
 * @method string getKafkaTopic() 获取Ckafka实例中的Topic
 * @method void setKafkaTopic(string $KafkaTopic) 设置Ckafka实例中的Topic
 * @method string getKafkaVersion() 获取Ckafka实例的版本号
 * @method void setKafkaVersion(string $KafkaVersion) 设置Ckafka实例的版本号
 * @method string getSesTopicId() 获取topic id
 * @method void setSesTopicId(string $SesTopicId) 设置topic id
 * @method string getSesTopicName() 获取topic name
 * @method void setSesTopicName(string $SesTopicName) 设置topic name
 * @method string getSesTopicAddress() 获取topic address
 * @method void setSesTopicAddress(string $SesTopicAddress) 设置topic address
 * @method string getSesTopicUserName() 获取/
 * @method void setSesTopicUserName(string $SesTopicUserName) 设置/
 * @method string getSesTopicPasswd() 获取/
 * @method void setSesTopicPasswd(string $SesTopicPasswd) 设置/
 * @method integer getLogstashListenPort() 获取/
 * @method void setLogstashListenPort(integer $LogstashListenPort) 设置/
 */
class CollectorOutputInstance extends AbstractModel
{
    /**
     * @var string 采集器输出的实例类型（支持elasticsearch、logstash）
     */
    public $Type;

    /**
     * @var string 采集器输出的实例ID
     */
    public $InstanceId;

    /**
     * @var string 采集器输出到的ES实例的用户名
     */
    public $ESUserName;

    /**
     * @var string 采集器输出到的ES实例的密码
     */
    public $ESUserPasswd;

    /**
     * @var integer 采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）
     */
    public $EnableMonitoring;

    /**
     * @var integer 采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）
     */
    public $EnableDashboard;

    /**
     * @var string Ckafka实例的vip
     */
    public $KafkaEndpoint;

    /**
     * @var string Ckafka实例中的Topic
     */
    public $KafkaTopic;

    /**
     * @var string Ckafka实例的版本号
     */
    public $KafkaVersion;

    /**
     * @var string topic id
     */
    public $SesTopicId;

    /**
     * @var string topic name
     */
    public $SesTopicName;

    /**
     * @var string topic address
     */
    public $SesTopicAddress;

    /**
     * @var string /
     */
    public $SesTopicUserName;

    /**
     * @var string /
     */
    public $SesTopicPasswd;

    /**
     * @var integer /
     */
    public $LogstashListenPort;

    /**
     * @param string $Type 采集器输出的实例类型（支持elasticsearch、logstash）
     * @param string $InstanceId 采集器输出的实例ID
     * @param string $ESUserName 采集器输出到的ES实例的用户名
     * @param string $ESUserPasswd 采集器输出到的ES实例的密码
     * @param integer $EnableMonitoring 采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）
     * @param integer $EnableDashboard 采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）
     * @param string $KafkaEndpoint Ckafka实例的vip
     * @param string $KafkaTopic Ckafka实例中的Topic
     * @param string $KafkaVersion Ckafka实例的版本号
     * @param string $SesTopicId topic id
     * @param string $SesTopicName topic name
     * @param string $SesTopicAddress topic address
     * @param string $SesTopicUserName /
     * @param string $SesTopicPasswd /
     * @param integer $LogstashListenPort /
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ESUserName",$param) and $param["ESUserName"] !== null) {
            $this->ESUserName = $param["ESUserName"];
        }

        if (array_key_exists("ESUserPasswd",$param) and $param["ESUserPasswd"] !== null) {
            $this->ESUserPasswd = $param["ESUserPasswd"];
        }

        if (array_key_exists("EnableMonitoring",$param) and $param["EnableMonitoring"] !== null) {
            $this->EnableMonitoring = $param["EnableMonitoring"];
        }

        if (array_key_exists("EnableDashboard",$param) and $param["EnableDashboard"] !== null) {
            $this->EnableDashboard = $param["EnableDashboard"];
        }

        if (array_key_exists("KafkaEndpoint",$param) and $param["KafkaEndpoint"] !== null) {
            $this->KafkaEndpoint = $param["KafkaEndpoint"];
        }

        if (array_key_exists("KafkaTopic",$param) and $param["KafkaTopic"] !== null) {
            $this->KafkaTopic = $param["KafkaTopic"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("SesTopicId",$param) and $param["SesTopicId"] !== null) {
            $this->SesTopicId = $param["SesTopicId"];
        }

        if (array_key_exists("SesTopicName",$param) and $param["SesTopicName"] !== null) {
            $this->SesTopicName = $param["SesTopicName"];
        }

        if (array_key_exists("SesTopicAddress",$param) and $param["SesTopicAddress"] !== null) {
            $this->SesTopicAddress = $param["SesTopicAddress"];
        }

        if (array_key_exists("SesTopicUserName",$param) and $param["SesTopicUserName"] !== null) {
            $this->SesTopicUserName = $param["SesTopicUserName"];
        }

        if (array_key_exists("SesTopicPasswd",$param) and $param["SesTopicPasswd"] !== null) {
            $this->SesTopicPasswd = $param["SesTopicPasswd"];
        }

        if (array_key_exists("LogstashListenPort",$param) and $param["LogstashListenPort"] !== null) {
            $this->LogstashListenPort = $param["LogstashListenPort"];
        }
    }
}
