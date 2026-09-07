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
 * @method string getType() 获取<p>采集器输出的实例类型（支持elasticsearch、logstash）</p>
 * @method void setType(string $Type) 设置<p>采集器输出的实例类型（支持elasticsearch、logstash）</p>
 * @method string getInstanceId() 获取<p>采集器输出的实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>采集器输出的实例ID</p>
 * @method string getESUserName() 获取<p>采集器输出到的ES实例的用户名</p>
 * @method void setESUserName(string $ESUserName) 设置<p>采集器输出到的ES实例的用户名</p>
 * @method string getESUserPasswd() 获取<p>采集器输出到的ES实例的密码</p>
 * @method void setESUserPasswd(string $ESUserPasswd) 设置<p>采集器输出到的ES实例的密码</p>
 * @method integer getEnableMonitoring() 获取<p>采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）</p>
 * @method void setEnableMonitoring(integer $EnableMonitoring) 设置<p>采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）</p>
 * @method integer getEnableDashboard() 获取<p>采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）</p>
 * @method void setEnableDashboard(integer $EnableDashboard) 设置<p>采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）</p>
 * @method string getKafkaEndpoint() 获取<p>Ckafka实例的vip</p>
 * @method void setKafkaEndpoint(string $KafkaEndpoint) 设置<p>Ckafka实例的vip</p>
 * @method string getKafkaTopic() 获取<p>Ckafka实例中的Topic</p>
 * @method void setKafkaTopic(string $KafkaTopic) 设置<p>Ckafka实例中的Topic</p>
 * @method string getKafkaVersion() 获取<p>Ckafka实例的版本号</p>
 * @method void setKafkaVersion(string $KafkaVersion) 设置<p>Ckafka实例的版本号</p>
 * @method string getSesTopicId() 获取<p>topic id</p>
 * @method void setSesTopicId(string $SesTopicId) 设置<p>topic id</p>
 * @method string getSesTopicName() 获取<p>topic name</p>
 * @method void setSesTopicName(string $SesTopicName) 设置<p>topic name</p>
 * @method string getSesTopicAddress() 获取<p>topic address</p>
 * @method void setSesTopicAddress(string $SesTopicAddress) 设置<p>topic address</p>
 * @method string getSesTopicUserName() 获取<p>/</p>
 * @method void setSesTopicUserName(string $SesTopicUserName) 设置<p>/</p>
 * @method string getSesTopicPasswd() 获取<p>/</p>
 * @method void setSesTopicPasswd(string $SesTopicPasswd) 设置<p>/</p>
 * @method integer getLogstashListenPort() 获取<p>/</p>
 * @method void setLogstashListenPort(integer $LogstashListenPort) 设置<p>/</p>
 * @method string getSesSpaceId() 获取<p>serverless 的 spaceid</p>
 * @method void setSesSpaceId(string $SesSpaceId) 设置<p>serverless 的 spaceid</p>
 */
class CollectorOutputInstance extends AbstractModel
{
    /**
     * @var string <p>采集器输出的实例类型（支持elasticsearch、logstash）</p>
     */
    public $Type;

    /**
     * @var string <p>采集器输出的实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>采集器输出到的ES实例的用户名</p>
     */
    public $ESUserName;

    /**
     * @var string <p>采集器输出到的ES实例的密码</p>
     */
    public $ESUserPasswd;

    /**
     * @var integer <p>采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）</p>
     */
    public $EnableMonitoring;

    /**
     * @var integer <p>采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）</p>
     */
    public $EnableDashboard;

    /**
     * @var string <p>Ckafka实例的vip</p>
     */
    public $KafkaEndpoint;

    /**
     * @var string <p>Ckafka实例中的Topic</p>
     */
    public $KafkaTopic;

    /**
     * @var string <p>Ckafka实例的版本号</p>
     */
    public $KafkaVersion;

    /**
     * @var string <p>topic id</p>
     */
    public $SesTopicId;

    /**
     * @var string <p>topic name</p>
     */
    public $SesTopicName;

    /**
     * @var string <p>topic address</p>
     */
    public $SesTopicAddress;

    /**
     * @var string <p>/</p>
     */
    public $SesTopicUserName;

    /**
     * @var string <p>/</p>
     */
    public $SesTopicPasswd;

    /**
     * @var integer <p>/</p>
     */
    public $LogstashListenPort;

    /**
     * @var string <p>serverless 的 spaceid</p>
     */
    public $SesSpaceId;

    /**
     * @param string $Type <p>采集器输出的实例类型（支持elasticsearch、logstash）</p>
     * @param string $InstanceId <p>采集器输出的实例ID</p>
     * @param string $ESUserName <p>采集器输出到的ES实例的用户名</p>
     * @param string $ESUserPasswd <p>采集器输出到的ES实例的密码</p>
     * @param integer $EnableMonitoring <p>采集器输出到ES实例时，是否开启监控（1为开启，0为不开启，默认为0）</p>
     * @param integer $EnableDashboard <p>采集器输出到ES实例时，是否开启自动在kibana中生成Dashboard（1为开启，0为不开启，默认为0）</p>
     * @param string $KafkaEndpoint <p>Ckafka实例的vip</p>
     * @param string $KafkaTopic <p>Ckafka实例中的Topic</p>
     * @param string $KafkaVersion <p>Ckafka实例的版本号</p>
     * @param string $SesTopicId <p>topic id</p>
     * @param string $SesTopicName <p>topic name</p>
     * @param string $SesTopicAddress <p>topic address</p>
     * @param string $SesTopicUserName <p>/</p>
     * @param string $SesTopicPasswd <p>/</p>
     * @param integer $LogstashListenPort <p>/</p>
     * @param string $SesSpaceId <p>serverless 的 spaceid</p>
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

        if (array_key_exists("SesSpaceId",$param) and $param["SesSpaceId"] !== null) {
            $this->SesSpaceId = $param["SesSpaceId"];
        }
    }
}
