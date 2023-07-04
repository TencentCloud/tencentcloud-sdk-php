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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKafkaRecharge请求参数结构体
 *
 * @method string getId() 获取Kafka导入配置ID
 * @method void setId(string $Id) 设置Kafka导入配置ID
 * @method string getTopicId() 获取导入CLS目标topic ID
 * @method void setTopicId(string $TopicId) 设置导入CLS目标topic ID
 * @method string getName() 获取Kafka导入配置名称
 * @method void setName(string $Name) 设置Kafka导入配置名称
 * @method integer getKafkaType() 获取导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
 * @method void setKafkaType(integer $KafkaType) 设置导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
 * @method string getKafkaInstance() 获取腾讯云CKafka实例ID，KafkaType为0时必填
 * @method void setKafkaInstance(string $KafkaInstance) 设置腾讯云CKafka实例ID，KafkaType为0时必填
 * @method string getServerAddr() 获取服务地址
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
 * @method boolean getIsEncryptionAddr() 获取ServerAddr是否为加密连接
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置ServerAddr是否为加密连接
 * @method KafkaProtocolInfo getProtocol() 获取加密访问协议，IsEncryptionAddr参数为true时必填
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置加密访问协议，IsEncryptionAddr参数为true时必填
 * @method string getUserKafkaTopics() 获取用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
 * @method void setUserKafkaTopics(string $UserKafkaTopics) 设置用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
 * @method string getConsumerGroupName() 获取用户Kafka消费组名称
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置用户Kafka消费组名称
 * @method LogRechargeRuleInfo getLogRechargeRule() 获取日志导入规则
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) 设置日志导入规则
 * @method integer getStatusControl() 获取导入控制，1：暂停，2：继续
 * @method void setStatusControl(integer $StatusControl) 设置导入控制，1：暂停，2：继续
 */
class ModifyKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var string Kafka导入配置ID
     */
    public $Id;

    /**
     * @var string 导入CLS目标topic ID
     */
    public $TopicId;

    /**
     * @var string Kafka导入配置名称
     */
    public $Name;

    /**
     * @var integer 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
     */
    public $KafkaType;

    /**
     * @var string 腾讯云CKafka实例ID，KafkaType为0时必填
     */
    public $KafkaInstance;

    /**
     * @var string 服务地址
     */
    public $ServerAddr;

    /**
     * @var boolean ServerAddr是否为加密连接
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo 加密访问协议，IsEncryptionAddr参数为true时必填
     */
    public $Protocol;

    /**
     * @var string 用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
     */
    public $UserKafkaTopics;

    /**
     * @var string 用户Kafka消费组名称
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo 日志导入规则
     */
    public $LogRechargeRule;

    /**
     * @var integer 导入控制，1：暂停，2：继续
     */
    public $StatusControl;

    /**
     * @param string $Id Kafka导入配置ID
     * @param string $TopicId 导入CLS目标topic ID
     * @param string $Name Kafka导入配置名称
     * @param integer $KafkaType 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
     * @param string $KafkaInstance 腾讯云CKafka实例ID，KafkaType为0时必填
     * @param string $ServerAddr 服务地址
     * @param boolean $IsEncryptionAddr ServerAddr是否为加密连接
     * @param KafkaProtocolInfo $Protocol 加密访问协议，IsEncryptionAddr参数为true时必填
     * @param string $UserKafkaTopics 用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
     * @param string $ConsumerGroupName 用户Kafka消费组名称
     * @param LogRechargeRuleInfo $LogRechargeRule 日志导入规则
     * @param integer $StatusControl 导入控制，1：暂停，2：继续
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
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

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }

        if (array_key_exists("StatusControl",$param) and $param["StatusControl"] !== null) {
            $this->StatusControl = $param["StatusControl"];
        }
    }
}
