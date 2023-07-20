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
 * Kafka导入配置信息
 *
 * @method string getId() 获取主键ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置主键ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Kafka导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Kafka导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKafkaType() 获取导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaType(integer $KafkaType) 设置导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaInstance() 获取腾讯云CKafka实例ID，KafkaType为0时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaInstance(string $KafkaInstance) 设置腾讯云CKafka实例ID，KafkaType为0时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerAddr() 获取服务地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEncryptionAddr() 获取ServerAddr是否为加密连接	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置ServerAddr是否为加密连接	
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaProtocolInfo getProtocol() 获取加密访问协议，IsEncryptionAddr参数为true时必填
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置加密访问协议，IsEncryptionAddr参数为true时必填
 * @method string getUserKafkaTopics() 获取用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserKafkaTopics(string $UserKafkaTopics) 设置用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerGroupName() 获取用户Kafka消费组名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置用户Kafka消费组名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态   status 1: 运行中, 2: 暂停 ...
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态   status 1: 运行中, 2: 暂停 ...
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取导入数据位置，-2:最早（默认），-1：最晚
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置导入数据位置，-2:最早（默认），-1：最晚
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogRechargeRuleInfo getLogRechargeRule() 获取日志导入规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) 设置日志导入规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class KafkaRechargeInfo extends AbstractModel
{
    /**
     * @var string 主键ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string Kafka导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaType;

    /**
     * @var string 腾讯云CKafka实例ID，KafkaType为0时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaInstance;

    /**
     * @var string 服务地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerAddr;

    /**
     * @var boolean ServerAddr是否为加密连接	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo 加密访问协议，IsEncryptionAddr参数为true时必填
     */
    public $Protocol;

    /**
     * @var string 用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserKafkaTopics;

    /**
     * @var string 用户Kafka消费组名称	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroupName;

    /**
     * @var integer 状态   status 1: 运行中, 2: 暂停 ...
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 导入数据位置，-2:最早（默认），-1：最晚
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var LogRechargeRuleInfo 日志导入规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRechargeRule;

    /**
     * @param string $Id 主键ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Kafka导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KafkaType 导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaInstance 腾讯云CKafka实例ID，KafkaType为0时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerAddr 服务地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEncryptionAddr ServerAddr是否为加密连接	
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaProtocolInfo $Protocol 加密访问协议，IsEncryptionAddr参数为true时必填
     * @param string $UserKafkaTopics 用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerGroupName 用户Kafka消费组名称	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态   status 1: 运行中, 2: 暂停 ...
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset 导入数据位置，-2:最早（默认），-1：最晚
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogRechargeRuleInfo $LogRechargeRule 日志导入规则
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }
    }
}
