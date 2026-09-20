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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewKafkaRecharge请求参数结构体
 *
 * @method integer getPreviewType() 获取<p>预览类型，1：源数据预览；2：导出结果预览。</p>
 * @method void setPreviewType(integer $PreviewType) 设置<p>预览类型，1：源数据预览；2：导出结果预览。</p>
 * @method integer getKafkaType() 获取<p>导入Kafka类型，0：腾讯云CKafka；1：用户自建Kafka。</p>
 * @method void setKafkaType(integer $KafkaType) 设置<p>导入Kafka类型，0：腾讯云CKafka；1：用户自建Kafka。</p>
 * @method string getUserKafkaTopics() 获取<p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。<br>最多支持100个。</p>
 * @method void setUserKafkaTopics(string $UserKafkaTopics) 设置<p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。<br>最多支持100个。</p>
 * @method integer getOffset() 获取<p>导入数据位置，-2：最早；-1：最晚。</p>
 * @method void setOffset(integer $Offset) 设置<p>导入数据位置，-2：最早；-1：最晚。</p>
 * @method string getKafkaInstance() 获取<p>腾讯云CKafka实例ID，当KafkaType为0时参数KafkaInstance有效且必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
 * @method void setKafkaInstance(string $KafkaInstance) 设置<p>腾讯云CKafka实例ID，当KafkaType为0时参数KafkaInstance有效且必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
 * @method string getServerAddr() 获取<p>服务地址。<br>KafkaType为1时ServerAddr必填。</p>
 * @method void setServerAddr(string $ServerAddr) 设置<p>服务地址。<br>KafkaType为1时ServerAddr必填。</p>
 * @method boolean getIsEncryptionAddr() 获取<p>ServerAddr是否为加密连接。<br>KafkaType为1时有效。</p>
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置<p>ServerAddr是否为加密连接。<br>KafkaType为1时有效。</p>
 * @method KafkaProtocolInfo getProtocol() 获取<p>加密访问协议。<br>KafkaType为1并且IsEncryptionAddr为true时Protocol必填。</p>
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置<p>加密访问协议。<br>KafkaType为1并且IsEncryptionAddr为true时Protocol必填。</p>
 * @method string getConsumerGroupName() 获取<p>用户Kafka消费组。</p><ul><li>消费组是 Kafka 提供的可扩展且具有容错性的消费者机制，一个消费组中存在多个消费者，组内的所有消费者共同消费订阅 Topic 中的消息。一个消费者可同时消费多个 Partition，但一个 Partition 只能被消费组内的一个消费者消费。</li></ul>
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置<p>用户Kafka消费组。</p><ul><li>消费组是 Kafka 提供的可扩展且具有容错性的消费者机制，一个消费组中存在多个消费者，组内的所有消费者共同消费订阅 Topic 中的消息。一个消费者可同时消费多个 Partition，但一个 Partition 只能被消费组内的一个消费者消费。</li></ul>
 * @method LogRechargeRuleInfo getLogRechargeRule() 获取<p>日志导入规则</p>
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) 设置<p>日志导入规则</p>
 * @method NetworkInfo getNetworkInfo() 获取<p>网络连接参数</p>
 * @method void setNetworkInfo(NetworkInfo $NetworkInfo) 设置<p>网络连接参数</p>
 * @method UserKafkaMeta getUserKafkaMeta() 获取<p>用户kafka拓展信息</p>
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) 设置<p>用户kafka拓展信息</p>
 */
class PreviewKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var integer <p>预览类型，1：源数据预览；2：导出结果预览。</p>
     */
    public $PreviewType;

    /**
     * @var integer <p>导入Kafka类型，0：腾讯云CKafka；1：用户自建Kafka。</p>
     */
    public $KafkaType;

    /**
     * @var string <p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。<br>最多支持100个。</p>
     */
    public $UserKafkaTopics;

    /**
     * @var integer <p>导入数据位置，-2：最早；-1：最晚。</p>
     */
    public $Offset;

    /**
     * @var string <p>腾讯云CKafka实例ID，当KafkaType为0时参数KafkaInstance有效且必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
     */
    public $KafkaInstance;

    /**
     * @var string <p>服务地址。<br>KafkaType为1时ServerAddr必填。</p>
     */
    public $ServerAddr;

    /**
     * @var boolean <p>ServerAddr是否为加密连接。<br>KafkaType为1时有效。</p>
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo <p>加密访问协议。<br>KafkaType为1并且IsEncryptionAddr为true时Protocol必填。</p>
     */
    public $Protocol;

    /**
     * @var string <p>用户Kafka消费组。</p><ul><li>消费组是 Kafka 提供的可扩展且具有容错性的消费者机制，一个消费组中存在多个消费者，组内的所有消费者共同消费订阅 Topic 中的消息。一个消费者可同时消费多个 Partition，但一个 Partition 只能被消费组内的一个消费者消费。</li></ul>
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo <p>日志导入规则</p>
     */
    public $LogRechargeRule;

    /**
     * @var NetworkInfo <p>网络连接参数</p>
     */
    public $NetworkInfo;

    /**
     * @var UserKafkaMeta <p>用户kafka拓展信息</p>
     */
    public $UserKafkaMeta;

    /**
     * @param integer $PreviewType <p>预览类型，1：源数据预览；2：导出结果预览。</p>
     * @param integer $KafkaType <p>导入Kafka类型，0：腾讯云CKafka；1：用户自建Kafka。</p>
     * @param string $UserKafkaTopics <p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开。<br>最多支持100个。</p>
     * @param integer $Offset <p>导入数据位置，-2：最早；-1：最晚。</p>
     * @param string $KafkaInstance <p>腾讯云CKafka实例ID，当KafkaType为0时参数KafkaInstance有效且必填。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/597/40835">获取实例列表信息</a> 获取实例id。</li></ul>
     * @param string $ServerAddr <p>服务地址。<br>KafkaType为1时ServerAddr必填。</p>
     * @param boolean $IsEncryptionAddr <p>ServerAddr是否为加密连接。<br>KafkaType为1时有效。</p>
     * @param KafkaProtocolInfo $Protocol <p>加密访问协议。<br>KafkaType为1并且IsEncryptionAddr为true时Protocol必填。</p>
     * @param string $ConsumerGroupName <p>用户Kafka消费组。</p><ul><li>消费组是 Kafka 提供的可扩展且具有容错性的消费者机制，一个消费组中存在多个消费者，组内的所有消费者共同消费订阅 Topic 中的消息。一个消费者可同时消费多个 Partition，但一个 Partition 只能被消费组内的一个消费者消费。</li></ul>
     * @param LogRechargeRuleInfo $LogRechargeRule <p>日志导入规则</p>
     * @param NetworkInfo $NetworkInfo <p>网络连接参数</p>
     * @param UserKafkaMeta $UserKafkaMeta <p>用户kafka拓展信息</p>
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
        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
        }

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("KafkaInstance",$param) and $param["KafkaInstance"] !== null) {
            $this->KafkaInstance = $param["KafkaInstance"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("IsEncryptionAddr",$param) and $param["IsEncryptionAddr"] !== null) {
            $this->IsEncryptionAddr = $param["IsEncryptionAddr"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = new KafkaProtocolInfo();
            $this->Protocol->deserialize($param["Protocol"]);
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }

        if (array_key_exists("NetworkInfo",$param) and $param["NetworkInfo"] !== null) {
            $this->NetworkInfo = new NetworkInfo();
            $this->NetworkInfo->deserialize($param["NetworkInfo"]);
        }

        if (array_key_exists("UserKafkaMeta",$param) and $param["UserKafkaMeta"] !== null) {
            $this->UserKafkaMeta = new UserKafkaMeta();
            $this->UserKafkaMeta->deserialize($param["UserKafkaMeta"]);
        }
    }
}
