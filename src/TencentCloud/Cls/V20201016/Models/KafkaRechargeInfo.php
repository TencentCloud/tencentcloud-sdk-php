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
 * Kafka导入配置信息
 *
 * @method string getId() 获取<p>Kafka数据订阅配置的ID。</p>
 * @method void setId(string $Id) 设置<p>Kafka数据订阅配置的ID。</p>
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getName() 获取<p>Kafka导入任务名称</p>
 * @method void setName(string $Name) 设置<p>Kafka导入任务名称</p>
 * @method integer getKafkaType() 获取<p>导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka</p>
 * @method void setKafkaType(integer $KafkaType) 设置<p>导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka</p>
 * @method string getKafkaInstance() 获取<p>腾讯云CKafka实例ID，KafkaType为0时必填</p>
 * @method void setKafkaInstance(string $KafkaInstance) 设置<p>腾讯云CKafka实例ID，KafkaType为0时必填</p>
 * @method string getServerAddr() 获取<p>服务地址</p>
 * @method void setServerAddr(string $ServerAddr) 设置<p>服务地址</p>
 * @method boolean getIsEncryptionAddr() 获取<p>ServerAddr是否为加密连接</p>
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) 设置<p>ServerAddr是否为加密连接</p>
 * @method KafkaProtocolInfo getProtocol() 获取<p>加密访问协议，IsEncryptionAddr参数为true时必填</p>
 * @method void setProtocol(KafkaProtocolInfo $Protocol) 设置<p>加密访问协议，IsEncryptionAddr参数为true时必填</p>
 * @method string getUserKafkaTopics() 获取<p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开</p>
 * @method void setUserKafkaTopics(string $UserKafkaTopics) 设置<p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开</p>
 * @method string getConsumerGroupName() 获取<p>用户Kafka消费组名称</p>
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置<p>用户Kafka消费组名称</p>
 * @method integer getStatus() 获取<p>状态 ，1：运行中；2：暂停。</p>
 * @method void setStatus(integer $Status) 设置<p>状态 ，1：运行中；2：暂停。</p>
 * @method integer getOffset() 获取<p>导入数据位置，-2:最早（默认），-1：最晚</p>
 * @method void setOffset(integer $Offset) 设置<p>导入数据位置，-2:最早（默认），-1：最晚</p>
 * @method string getCreateTime() 获取<p>创建时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
 * @method string getUpdateTime() 获取<p>更新时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
 * @method LogRechargeRuleInfo getLogRechargeRule() 获取<p>日志导入规则</p>
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) 设置<p>日志导入规则</p>
 * @method NetworkInfo getNetworkInfo() 获取<p>私有网络信息</p>
 * @method void setNetworkInfo(NetworkInfo $NetworkInfo) 设置<p>私有网络信息</p>
 * @method UserKafkaMeta getUserKafkaMeta() 获取<p>用户kafka拓展信息</p>
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) 设置<p>用户kafka拓展信息</p>
 */
class KafkaRechargeInfo extends AbstractModel
{
    /**
     * @var string <p>Kafka数据订阅配置的ID。</p>
     */
    public $Id;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>Kafka导入任务名称</p>
     */
    public $Name;

    /**
     * @var integer <p>导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka</p>
     */
    public $KafkaType;

    /**
     * @var string <p>腾讯云CKafka实例ID，KafkaType为0时必填</p>
     */
    public $KafkaInstance;

    /**
     * @var string <p>服务地址</p>
     */
    public $ServerAddr;

    /**
     * @var boolean <p>ServerAddr是否为加密连接</p>
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo <p>加密访问协议，IsEncryptionAddr参数为true时必填</p>
     */
    public $Protocol;

    /**
     * @var string <p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开</p>
     */
    public $UserKafkaTopics;

    /**
     * @var string <p>用户Kafka消费组名称</p>
     */
    public $ConsumerGroupName;

    /**
     * @var integer <p>状态 ，1：运行中；2：暂停。</p>
     */
    public $Status;

    /**
     * @var integer <p>导入数据位置，-2:最早（默认），-1：最晚</p>
     */
    public $Offset;

    /**
     * @var string <p>创建时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
     */
    public $UpdateTime;

    /**
     * @var LogRechargeRuleInfo <p>日志导入规则</p>
     */
    public $LogRechargeRule;

    /**
     * @var NetworkInfo <p>私有网络信息</p>
     */
    public $NetworkInfo;

    /**
     * @var UserKafkaMeta <p>用户kafka拓展信息</p>
     */
    public $UserKafkaMeta;

    /**
     * @param string $Id <p>Kafka数据订阅配置的ID。</p>
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $Name <p>Kafka导入任务名称</p>
     * @param integer $KafkaType <p>导入Kafka类型，0: 腾讯云CKafka，1: 用户自建Kafka</p>
     * @param string $KafkaInstance <p>腾讯云CKafka实例ID，KafkaType为0时必填</p>
     * @param string $ServerAddr <p>服务地址</p>
     * @param boolean $IsEncryptionAddr <p>ServerAddr是否为加密连接</p>
     * @param KafkaProtocolInfo $Protocol <p>加密访问协议，IsEncryptionAddr参数为true时必填</p>
     * @param string $UserKafkaTopics <p>用户需要导入的Kafka相关topic列表，多个topic之间使用半角逗号隔开</p>
     * @param string $ConsumerGroupName <p>用户Kafka消费组名称</p>
     * @param integer $Status <p>状态 ，1：运行中；2：暂停。</p>
     * @param integer $Offset <p>导入数据位置，-2:最早（默认），-1：最晚</p>
     * @param string $CreateTime <p>创建时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
     * @param string $UpdateTime <p>更新时间。格式<code>YYYY-MM-DD HH:MM:SS</code></p>
     * @param LogRechargeRuleInfo $LogRechargeRule <p>日志导入规则</p>
     * @param NetworkInfo $NetworkInfo <p>私有网络信息</p>
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
